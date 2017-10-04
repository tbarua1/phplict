<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/batch_variables.php");

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
$page_layouts["batch_detailspreview"] = $layout;

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

if($mastertable == "consultant")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("ey_spoc") . "=" . make_db_value("ey_spoc",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "courses")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("cid") . "=" . make_db_value("cid",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "department")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("department_id") . "=" . make_db_value("department_id",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "division")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("division_id") . "=" . make_db_value("division_id",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "employees")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("soft_skill_trainer") . "=" . make_db_value("soft_skill_trainer",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "university")
{
	$where = "";
		$where .= $pageObject->getFieldSQLDecrypt("university_id") . "=" . make_db_value("university_id",$_SESSION[$strTableName."_masterkey1"]);
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["batch_id"]));
	
	
	//	batch_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("batch_id", $data, $keylink);
			$row["batch_id_value"] = $value;
			$format = $pSet->getViewFormat("batch_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("batch_id")))
				$class = ' rnr-field-number';
			$row["batch_id_class"] = $class;
	//	Batchcode - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Batchcode", $data, $keylink);
			$row["Batchcode_value"] = $value;
			$format = $pSet->getViewFormat("Batchcode");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Batchcode")))
				$class = ' rnr-field-number';
			$row["Batchcode_class"] = $class;
	//	fbgroup - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("fbgroup", $data, $keylink);
			$row["fbgroup_value"] = $value;
			$format = $pSet->getViewFormat("fbgroup");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("fbgroup")))
				$class = ' rnr-field-number';
			$row["fbgroup_class"] = $class;
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
	//	university_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("university_id", $data, $keylink);
			$row["university_id_value"] = $value;
			$format = $pSet->getViewFormat("university_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("university_id")))
				$class = ' rnr-field-number';
			$row["university_id_class"] = $class;
	//	department_id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("department_id", $data, $keylink);
			$row["department_id_value"] = $value;
			$format = $pSet->getViewFormat("department_id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("department_id")))
				$class = ' rnr-field-number';
			$row["department_id_class"] = $class;
	//	starting_Date - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("starting_Date", $data, $keylink);
			$row["starting_Date_value"] = $value;
			$format = $pSet->getViewFormat("starting_Date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("starting_Date")))
				$class = ' rnr-field-number';
			$row["starting_Date_class"] = $class;
	//	Track - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Track", $data, $keylink);
			$row["Track_value"] = $value;
			$format = $pSet->getViewFormat("Track");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Track")))
				$class = ' rnr-field-number';
			$row["Track_class"] = $class;
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
	//	status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("status", $data, $keylink);
			$row["status_value"] = $value;
			$format = $pSet->getViewFormat("status");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("status")))
				$class = ' rnr-field-number';
			$row["status_class"] = $class;
	//	uni_spoc_name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("uni_spoc_name", $data, $keylink);
			$row["uni_spoc_name_value"] = $value;
			$format = $pSet->getViewFormat("uni_spoc_name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("uni_spoc_name")))
				$class = ' rnr-field-number';
			$row["uni_spoc_name_class"] = $class;
	//	uni_spoc_contact - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("uni_spoc_contact", $data, $keylink);
			$row["uni_spoc_contact_value"] = $value;
			$format = $pSet->getViewFormat("uni_spoc_contact");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("uni_spoc_contact")))
				$class = ' rnr-field-number';
			$row["uni_spoc_contact_class"] = $class;
	//	ey_spoc - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ey_spoc", $data, $keylink);
			$row["ey_spoc_value"] = $value;
			$format = $pSet->getViewFormat("ey_spoc");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ey_spoc")))
				$class = ' rnr-field-number';
			$row["ey_spoc_class"] = $class;
	//	local_spoc - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("local_spoc", $data, $keylink);
			$row["local_spoc_value"] = $value;
			$format = $pSet->getViewFormat("local_spoc");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("local_spoc")))
				$class = ' rnr-field-number';
			$row["local_spoc_class"] = $class;
	//	schedule - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("schedule", $data, $keylink);
			$row["schedule_value"] = $value;
			$format = $pSet->getViewFormat("schedule");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("schedule")))
				$class = ' rnr-field-number';
			$row["schedule_class"] = $class;
	//	tech_trainer - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("tech_trainer", $data, $keylink);
			$row["tech_trainer_value"] = $value;
			$format = $pSet->getViewFormat("tech_trainer");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("tech_trainer")))
				$class = ' rnr-field-number';
			$row["tech_trainer_class"] = $class;
	//	soft_skill_trainer - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("soft_skill_trainer", $data, $keylink);
			$row["soft_skill_trainer_value"] = $value;
			$format = $pSet->getViewFormat("soft_skill_trainer");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("soft_skill_trainer")))
				$class = ' rnr-field-number';
			$row["soft_skill_trainer_class"] = $class;
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
$xt->load_template(GetTemplateName("batch", "detailspreview"));
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