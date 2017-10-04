<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/employees_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "BoldOrange", "MobileOrange");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["employees_detailspreview"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
if($mastertable != "")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$strTableName."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new RunnerPage($params);

if($mastertable == "division")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("division_id") . "=" . make_db_value("division_id",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "courses")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("cid") . "=" . make_db_value("cid",$_SESSION[$strTableName."_masterkey1"]);
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["eid"]));
	
	
	//	eid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("eid", $data, $keylink);
			$row["eid_value"] = $value;
			$format = $pSet->getViewFormat("eid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("eid")))
				$class = ' rnr-field-number';
			$row["eid_class"] = $class;
	//	ename - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ename", $data, $keylink);
			$row["ename_value"] = $value;
			$format = $pSet->getViewFormat("ename");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ename")))
				$class = ' rnr-field-number';
			$row["ename_class"] = $class;
	//	emppic - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("emppic", $data, $keylink);
			$row["emppic_value"] = $value;
			$format = $pSet->getViewFormat("emppic");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("emppic")))
				$class = ' rnr-field-number';
			$row["emppic_class"] = $class;
	//	designation - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("designation", $data, $keylink);
			$row["designation_value"] = $value;
			$format = $pSet->getViewFormat("designation");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("designation")))
				$class = ' rnr-field-number';
			$row["designation_class"] = $class;
	//	whtasapp - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("whtasapp", $data, $keylink);
			$row["whtasapp_value"] = $value;
			$format = $pSet->getViewFormat("whtasapp");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("whtasapp")))
				$class = ' rnr-field-number';
			$row["whtasapp_class"] = $class;
	//	localnum - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("localnum", $data, $keylink);
			$row["localnum_value"] = $value;
			$format = $pSet->getViewFormat("localnum");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("localnum")))
				$class = ' rnr-field-number';
			$row["localnum_class"] = $class;
	//	skype - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("skype", $data, $keylink);
			$row["skype_value"] = $value;
			$format = $pSet->getViewFormat("skype");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("skype")))
				$class = ' rnr-field-number';
			$row["skype_class"] = $class;
	//	dropbox - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dropbox", $data, $keylink);
			$row["dropbox_value"] = $value;
			$format = $pSet->getViewFormat("dropbox");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dropbox")))
				$class = ' rnr-field-number';
			$row["dropbox_class"] = $class;
	//	email - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("email", $data, $keylink);
			$row["email_value"] = $value;
			$format = $pSet->getViewFormat("email");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("email")))
				$class = ' rnr-field-number';
			$row["email_class"] = $class;
	//	dob - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dob", $data, $keylink);
			$row["dob_value"] = $value;
			$format = $pSet->getViewFormat("dob");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dob")))
				$class = ' rnr-field-number';
			$row["dob_class"] = $class;
	//	password - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("password", $data, $keylink);
			$row["password_value"] = $value;
			$format = $pSet->getViewFormat("password");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("password")))
				$class = ' rnr-field-number';
			$row["password_class"] = $class;
	//	passportno - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("passportno", $data, $keylink);
			$row["passportno_value"] = $value;
			$format = $pSet->getViewFormat("passportno");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("passportno")))
				$class = ' rnr-field-number';
			$row["passportno_class"] = $class;
	//	passport_expiry - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("passport_expiry", $data, $keylink);
			$row["passport_expiry_value"] = $value;
			$format = $pSet->getViewFormat("passport_expiry");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("passport_expiry")))
				$class = ' rnr-field-number';
			$row["passport_expiry_class"] = $class;
	//	visa_no - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("visa_no", $data, $keylink);
			$row["visa_no_value"] = $value;
			$format = $pSet->getViewFormat("visa_no");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("visa_no")))
				$class = ' rnr-field-number';
			$row["visa_no_class"] = $class;
	//	visa_expiry - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("visa_expiry", $data, $keylink);
			$row["visa_expiry_value"] = $value;
			$format = $pSet->getViewFormat("visa_expiry");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("visa_expiry")))
				$class = ' rnr-field-number';
			$row["visa_expiry_class"] = $class;
	//	division_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("division_id", $data, $keylink);
			$row["division_id_value"] = $value;
			$format = $pSet->getViewFormat("division_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("division_id")))
				$class = ' rnr-field-number';
			$row["division_id_class"] = $class;
	//	doj - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("doj", $data, $keylink);
			$row["doj_value"] = $value;
			$format = $pSet->getViewFormat("doj");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("doj")))
				$class = ' rnr-field-number';
			$row["doj_class"] = $class;
	//	dor - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dor", $data, $keylink);
			$row["dor_value"] = $value;
			$format = $pSet->getViewFormat("dor");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dor")))
				$class = ' rnr-field-number';
			$row["dor_class"] = $class;
	//	status_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("status_id", $data, $keylink);
			$row["status_id_value"] = $value;
			$format = $pSet->getViewFormat("status_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("status_id")))
				$class = ' rnr-field-number';
			$row["status_id_class"] = $class;
	//	experence - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("experence", $data, $keylink);
			$row["experence_value"] = $value;
			$format = $pSet->getViewFormat("experence");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("experence")))
				$class = ' rnr-field-number';
			$row["experence_class"] = $class;
	//	nationality - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("nationality", $data, $keylink);
			$row["nationality_value"] = $value;
			$format = $pSet->getViewFormat("nationality");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("nationality")))
				$class = ' rnr-field-number';
			$row["nationality_class"] = $class;
	//	qulification - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("qulification", $data, $keylink);
			$row["qulification_value"] = $value;
			$format = $pSet->getViewFormat("qulification");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("qulification")))
				$class = ' rnr-field-number';
			$row["qulification_class"] = $class;
	//	skillset - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("skillset", $data, $keylink);
			$row["skillset_value"] = $value;
			$format = $pSet->getViewFormat("skillset");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("skillset")))
				$class = ' rnr-field-number';
			$row["skillset_class"] = $class;
	//	cid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("cid", $data, $keylink);
			$row["cid_value"] = $value;
			$format = $pSet->getViewFormat("cid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("cid")))
				$class = ' rnr-field-number';
			$row["cid_class"] = $class;
	//	reset_token - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("reset_token", $data, $keylink);
			$row["reset_token_value"] = $value;
			$format = $pSet->getViewFormat("reset_token");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("reset_token")))
				$class = ' rnr-field-number';
			$row["reset_token_class"] = $class;
	//	reset_date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("reset_date", $data, $keylink);
			$row["reset_date_value"] = $value;
			$format = $pSet->getViewFormat("reset_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("reset_date")))
				$class = ' rnr-field-number';
			$row["reset_date_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("employees", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>