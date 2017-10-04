<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/trainer_variables.php");

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
$page_layouts["trainer_detailspreview"] = $layout;

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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	
	//	id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id", $data, $keylink);
			$row["id_value"] = $value;
			$format = $pSet->getViewFormat("id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id")))
				$class = ' rnr-field-number';
			$row["id_class"] = $class;
	//	date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("date", $data, $keylink);
			$row["date_value"] = $value;
			$format = $pSet->getViewFormat("date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("date")))
				$class = ' rnr-field-number';
			$row["date_class"] = $class;
	//	emailid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("emailid", $data, $keylink);
			$row["emailid_value"] = $value;
			$format = $pSet->getViewFormat("emailid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("emailid")))
				$class = ' rnr-field-number';
			$row["emailid_class"] = $class;
	//	experience - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("experience", $data, $keylink);
			$row["experience_value"] = $value;
			$format = $pSet->getViewFormat("experience");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("experience")))
				$class = ' rnr-field-number';
			$row["experience_class"] = $class;
	//	mobile - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("mobile", $data, $keylink);
			$row["mobile_value"] = $value;
			$format = $pSet->getViewFormat("mobile");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("mobile")))
				$class = ' rnr-field-number';
			$row["mobile_class"] = $class;
	//	name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("name", $data, $keylink);
			$row["name_value"] = $value;
			$format = $pSet->getViewFormat("name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("name")))
				$class = ' rnr-field-number';
			$row["name_class"] = $class;
	//	natianality - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("natianality", $data, $keylink);
			$row["natianality_value"] = $value;
			$format = $pSet->getViewFormat("natianality");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("natianality")))
				$class = ' rnr-field-number';
			$row["natianality_class"] = $class;
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
	//	qualification - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("qualification", $data, $keylink);
			$row["qualification_value"] = $value;
			$format = $pSet->getViewFormat("qualification");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("qualification")))
				$class = ' rnr-field-number';
			$row["qualification_class"] = $class;
	//	registeredDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("registeredDate", $data, $keylink);
			$row["registeredDate_value"] = $value;
			$format = $pSet->getViewFormat("registeredDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("registeredDate")))
				$class = ' rnr-field-number';
			$row["registeredDate_class"] = $class;
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
	//	username - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("username", $data, $keylink);
			$row["username_value"] = $value;
			$format = $pSet->getViewFormat("username");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("username")))
				$class = ' rnr-field-number';
			$row["username_class"] = $class;
	//	usertype - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("usertype", $data, $keylink);
			$row["usertype_value"] = $value;
			$format = $pSet->getViewFormat("usertype");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("usertype")))
				$class = ' rnr-field-number';
			$row["usertype_class"] = $class;
	//	whatsapp - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("whatsapp", $data, $keylink);
			$row["whatsapp_value"] = $value;
			$format = $pSet->getViewFormat("whatsapp");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("whatsapp")))
				$class = ' rnr-field-number';
			$row["whatsapp_class"] = $class;
	//	photo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("photo", $data, $keylink);
			$row["photo_value"] = $value;
			$format = $pSet->getViewFormat("photo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("photo")))
				$class = ' rnr-field-number';
			$row["photo_class"] = $class;
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
$xt->load_template(GetTemplateName("trainer", "detailspreview"));
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