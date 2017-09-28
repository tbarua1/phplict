<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/empdetails_variables.php");

$mode = postvalue("mode");


require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "empdetails_detailspreview";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["empdetails_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

$pSet = new ProjectSettings($strTableName, PAGE_LIST);


$whereClauses = array();
if($mastertable == "division")
{
	$formattedValue = make_db_value("division_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("division_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("division_id") . "=" . $formattedValue;
}
if($mastertable == "emp_status")
{
	$formattedValue = make_db_value("status_id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("status_id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("status_id") . "=" . $formattedValue;
}
if($mastertable == "employee")
{
	$formattedValue = make_db_value("eid",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("eid") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("eid") . "=" . $formattedValue;
}

$whereClauses[] = SecuritySQL("Search", $strTableName);
$query = $pSet->getSQLQuery();

$strSQL = $query->buildSQL_default( $whereClauses );
$rowcount = $pageObject->connection->getFetchedRowsNumber( $strSQL );

$strSQL .= $pageObject->getOrderByClause();

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
$xt->load_template(GetTemplateName("empdetails", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>