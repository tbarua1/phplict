<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql );
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}

	public static function Select($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		$sql = "SELECT * FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$queryResult = DB::CurrentConnection()->querySilent( $sql );

		return $queryResult;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);
		
		if( $whereSql == "" )
			return false;

		$sql = "DELETE FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$ret = DB::CurrentConnection()->execSilent( $sql );

		return $ret;
	}

	public static function Insert($table, $data)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$iFields = "";
		$iValues = "";
		$blobs = array();
		foreach($data as $fieldname => $value)
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$iFields.= DB::CurrentConnection()->addFieldWrappers( $field["name"] ).",";
			$iValues.= DB::_prepareValue($value, $field["type"]) . ",";

			if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if( $iFields != "" && $iValues != "" )
		{
			$iFields = substr($iFields, 0, -1);
			$iValues = substr($iValues, 0, -1);
			$sql = "INSERT INTO ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." (".$iFields.") values (".$iValues.")";

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$updateValues = array();
		$blobs = array();
		foreach( $data as $fieldname => $value )
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$prepareFieldName = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			$prepareValue = DB::_prepareValue($value, $field["type"]);
			$updateValues[] = $prepareFieldName."=".$prepareValue;

			if ( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if ( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if ( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if ( count($updateValues) > 0 )
		{
			$updateSQL = implode(",", $updateValues);
			$sql = "UPDATE ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." SET ". $updateSQL . $whereSql;

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	protected static function _getWhereSql($userConditions, $founedfields)
	{
		if( !is_array( $userConditions ) )
		{
			$whereSql = trim( $userConditions );
			if( $whereSql != "")
				$whereSql = " WHERE " . $whereSql;
			return $whereSql;
		}
		
		$conditions = array();
		foreach($userConditions as $fieldname => $value)
		{
			$field = getArrayElementNC($founedfields, $fieldname);
			// user field not found in table
			if ( is_null($field) )
				continue;

			$wrappedField = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			if ( is_null($value) )
			{
				$conditions[] = $wrappedField . " IS NULL";
			}
			else
			{
				$conditions[] = $wrappedField . "=" . DB::_prepareValue($value, $field["type"]);
			}
		}

		$whereSql = "";
		if( count($conditions) > 0 )
		{
			$whereSql .= " WHERE " . implode(",", $conditions);
		}

		return $whereSql;
	}

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	protected static function _findDalTable( $table )
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList();

		//	exact match
		foreach( $dalTables as $t )
		{
			if( $t["schema"] == $tableName["schema"] && $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables as $t )
		{
			if( strtoupper( $t["schema"] ) == $tableName["schema"] && strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	protected static function _getTableInfo($table)
	{
		global $dal_info, $tableinfo_cache;
		$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table );

		if ( $tableDescriptor )
		{
			include_once( getabspath( "include/dal/" . $tableDescriptor["varname"] . ".php" ) );

			$tableInfo["fields"] = $db_table_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			$tables = DB::CurrentConnection()->getTableList();
			if ( !in_array($table, $tables) )
			{
				$tableinfo_cache[ $connId ][ $table ] = false;
				return false;
			}

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList()
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "mydb_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "batch", "varname" => "mydb_at_localhost__batch", "altvarname" => "batch", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "batch_completion_status", "varname" => "mydb_at_localhost__batch_completion_status", "altvarname" => "batch_completion_status", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "batchschedule", "varname" => "mydb_at_localhost__batchschedule", "altvarname" => "batchschedule", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "consultant", "varname" => "mydb_at_localhost__consultant", "altvarname" => "consultant", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "consultant_view", "varname" => "mydb_at_localhost__consultant_view", "altvarname" => "consultant_view", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "courses", "varname" => "mydb_at_localhost__courses", "altvarname" => "courses", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "department", "varname" => "mydb_at_localhost__department", "altvarname" => "department", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "district", "varname" => "mydb_at_localhost__district", "altvarname" => "district", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "division", "varname" => "mydb_at_localhost__division", "altvarname" => "division", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "emp_status", "varname" => "mydb_at_localhost__emp_status", "altvarname" => "emp_status", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "employees", "varname" => "mydb_at_localhost__employees", "altvarname" => "employees", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "full_batch_details", "varname" => "mydb_at_localhost__full_batch_details", "altvarname" => "full_batch_details", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "lict_uggroups", "varname" => "mydb_at_localhost__lict_uggroups", "altvarname" => "lict_uggroups", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "lict_ugmembers", "varname" => "mydb_at_localhost__lict_ugmembers", "altvarname" => "lict_ugmembers", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "lict_ugrights", "varname" => "mydb_at_localhost__lict_ugrights", "altvarname" => "lict_ugrights", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "project1_audit", "varname" => "mydb_at_localhost__project1_audit", "altvarname" => "project1_audit", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "project1_locking", "varname" => "mydb_at_localhost__project1_locking", "altvarname" => "project1_locking", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "schedule_map", "varname" => "mydb_at_localhost__schedule_map", "altvarname" => "schedule_map", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
			$dalTables[$conn->connId][] = array("name" => "university", "varname" => "mydb_at_localhost__university", "altvarname" => "university", "connId" => "mydb_at_localhost", "schema" => "", "connName" => "mydb at localhost");
		}
	}
	
	
	public static function PrepareSQL( $sql )
	{
		$conn = DB::CurrentConnection();
		$context = RunnerContext::current();

		$tokens = DB::scanTokenString( $sql );
		
		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out
		
		foreach ( $tokens["matches"] as $i => $match )
		{
			$offset = $tokens["offsets"][ $i ];
			$token = $tokens["tokens"][ $i ];
			
			$repl = array(
				"offset" => $offset,
				"len" => strlen( $match )
			);
			
			if ( $conn->positionQuoted( $sql, $offset ) )
				$repl["insert"] = $conn->addSlashes($context->getValue( $token ) );
			else 
				$repl["insert"] = DB::prepareNumberValue($context->getValue( $token ) );

			$replacements[]= $repl;
		}
		
		//	do replacements
		$offsetShift = 0;
		foreach( $replacements as $r )
		{
			$sql = substr_replace( $sql, $r["insert"], $r["offset"] + $offsetShift, $r["len"] );
			$offsetShift += strlen( $r["insert"] ) - $r["len"];
		}
		return $sql;
		
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}
	
	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	protected static function scanTokenString( $sql )
	{
		$tokens = array(); 
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/\:([a-zA-Z_]{1}[\w\.]*)|\:\{(.*)\}/';
		$result = findMatches( $pattern, $sql );
		foreach( $result as $m ) 
		{
			$matches[] = $m["match"];
			$offsets[] = $m["offset"];
			$tokens[] = $m["submatches"][0] != "" ? $m["submatches"][0] : $m["submatches"][1];
		}
		

		return array( "tokens" => $tokens, "matches" => $matches, "offsets" => $offsets );
	}
	
	
	public static function prepareNumberValue( $value )
	{
		$strvalue = (string)$value;
		if(is_numeric($strvalue))
			return str_replace(",",".",$strvalue);
		return 0;
	}

}

?>