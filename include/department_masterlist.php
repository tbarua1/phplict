<?php
function DisplayMasterTableInfo_department($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "department";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "batch")
	{
		$keysAssoc["Department_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("Department_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("Department_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("Department_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("department","Department_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	if( !$where )
		return;
	
	$str = SecuritySQL("Search", $tName);
	if( strlen($str) )
		$where.= " and ".$str;

	$strWhere = whereAdd( $masterQuery->WhereToSql(), $where );
	if( strlen($strWhere) )
		$strWhere = " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["Department_id"]));
	
	$xt->assign("Department_id_mastervalue", $viewControls->showDBValue("Department_id", $data, $keylink));
	$format = $settings->getViewFormat("Department_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Department_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("Department_id_class", $class); // add class for field header as field value
	$xt->assign("Dname_mastervalue", $viewControls->showDBValue("Dname", $data, $keylink));
	$format = $settings->getViewFormat("Dname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Dname")))
		$class = ' rnr-field-number';
		
	$xt->assign("Dname_class", $class); // add class for field header as field value

	$layout = GetPageLayout("department", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("department", "masterlist"));
}

?>