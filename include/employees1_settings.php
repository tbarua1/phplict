<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemployees1 = array();
	$tdataemployees1[".truncateText"] = true;
	$tdataemployees1[".NumberOfChars"] = 80;
	$tdataemployees1[".ShortName"] = "employees1";
	$tdataemployees1[".OwnerID"] = "";
	$tdataemployees1[".OriginalTable"] = "employees";

//	field labels
$fieldLabelsemployees1 = array();
$fieldToolTipsemployees1 = array();
$pageTitlesemployees1 = array();
$placeHoldersemployees1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployees1["English"] = array();
	$fieldToolTipsemployees1["English"] = array();
	$placeHoldersemployees1["English"] = array();
	$pageTitlesemployees1["English"] = array();
	if (count($fieldToolTipsemployees1["English"]))
		$tdataemployees1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemployees1[""] = array();
	$fieldToolTipsemployees1[""] = array();
	$placeHoldersemployees1[""] = array();
	$pageTitlesemployees1[""] = array();
	if (count($fieldToolTipsemployees1[""]))
		$tdataemployees1[".isUseToolTips"] = true;
}


	$tdataemployees1[".NCSearch"] = true;



$tdataemployees1[".shortTableName"] = "employees1";
$tdataemployees1[".nSecOptions"] = 0;
$tdataemployees1[".recsPerRowPrint"] = 1;
$tdataemployees1[".mainTableOwnerID"] = "";
$tdataemployees1[".moveNext"] = 1;
$tdataemployees1[".entityType"] = 1;

$tdataemployees1[".strOriginalTableName"] = "employees";

	



$tdataemployees1[".showAddInPopup"] = false;

$tdataemployees1[".showEditInPopup"] = false;

$tdataemployees1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployees1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployees1[".fieldsForRegister"] = array();

$tdataemployees1[".listAjax"] = false;

	$tdataemployees1[".audit"] = true;

	$tdataemployees1[".locking"] = true;

$tdataemployees1[".edit"] = true;
$tdataemployees1[".afterEditAction"] = 1;
$tdataemployees1[".closePopupAfterEdit"] = 1;
$tdataemployees1[".afterEditActionDetTable"] = "";

$tdataemployees1[".add"] = true;
$tdataemployees1[".afterAddAction"] = 1;
$tdataemployees1[".closePopupAfterAdd"] = 1;
$tdataemployees1[".afterAddActionDetTable"] = "";

$tdataemployees1[".list"] = true;



$tdataemployees1[".reorderRecordsByHeader"] = true;


$tdataemployees1[".exportFormatting"] = 2;
$tdataemployees1[".exportDelimiter"] = ",";
		
$tdataemployees1[".view"] = true;

$tdataemployees1[".import"] = true;

$tdataemployees1[".exportTo"] = true;

$tdataemployees1[".printFriendly"] = true;

$tdataemployees1[".delete"] = true;

$tdataemployees1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemployees1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemployees1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemployees1[".searchSaving"] = false;
//

$tdataemployees1[".showSearchPanel"] = true;
		$tdataemployees1[".flexibleSearch"] = true;

$tdataemployees1[".isUseAjaxSuggest"] = true;

$tdataemployees1[".rowHighlite"] = true;



			

$tdataemployees1[".ajaxCodeSnippetAdded"] = false;

$tdataemployees1[".buttonsAdded"] = false;

$tdataemployees1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployees1[".isUseTimeForSearch"] = false;



$tdataemployees1[".badgeColor"] = "E8926F";


$tdataemployees1[".allSearchFields"] = array();
$tdataemployees1[".filterFields"] = array();
$tdataemployees1[".requiredSearchFields"] = array();

$tdataemployees1[".allSearchFields"][] = "eid";
	$tdataemployees1[".allSearchFields"][] = "ename";
	$tdataemployees1[".allSearchFields"][] = "designation";
	$tdataemployees1[".allSearchFields"][] = "whtasapp";
	$tdataemployees1[".allSearchFields"][] = "localnum";
	$tdataemployees1[".allSearchFields"][] = "skype";
	$tdataemployees1[".allSearchFields"][] = "dropbox";
	$tdataemployees1[".allSearchFields"][] = "email";
	$tdataemployees1[".allSearchFields"][] = "dob";
	$tdataemployees1[".allSearchFields"][] = "passportno";
	$tdataemployees1[".allSearchFields"][] = "passport_expiry";
	$tdataemployees1[".allSearchFields"][] = "visa_no";
	$tdataemployees1[".allSearchFields"][] = "visa_expiry";
	$tdataemployees1[".allSearchFields"][] = "division_id";
	$tdataemployees1[".allSearchFields"][] = "doj";
	$tdataemployees1[".allSearchFields"][] = "dor";
	$tdataemployees1[".allSearchFields"][] = "status_id";
	$tdataemployees1[".allSearchFields"][] = "experence";
	$tdataemployees1[".allSearchFields"][] = "nationality";
	$tdataemployees1[".allSearchFields"][] = "qulification";
	$tdataemployees1[".allSearchFields"][] = "skillset";
	$tdataemployees1[".allSearchFields"][] = "cid";
	

$tdataemployees1[".googleLikeFields"] = array();
$tdataemployees1[".googleLikeFields"][] = "eid";
$tdataemployees1[".googleLikeFields"][] = "ename";
$tdataemployees1[".googleLikeFields"][] = "emppic";
$tdataemployees1[".googleLikeFields"][] = "designation";
$tdataemployees1[".googleLikeFields"][] = "whtasapp";
$tdataemployees1[".googleLikeFields"][] = "localnum";
$tdataemployees1[".googleLikeFields"][] = "skype";
$tdataemployees1[".googleLikeFields"][] = "dropbox";
$tdataemployees1[".googleLikeFields"][] = "email";
$tdataemployees1[".googleLikeFields"][] = "dob";
$tdataemployees1[".googleLikeFields"][] = "password";
$tdataemployees1[".googleLikeFields"][] = "passportno";
$tdataemployees1[".googleLikeFields"][] = "passport_expiry";
$tdataemployees1[".googleLikeFields"][] = "visa_no";
$tdataemployees1[".googleLikeFields"][] = "visa_expiry";
$tdataemployees1[".googleLikeFields"][] = "division_id";
$tdataemployees1[".googleLikeFields"][] = "doj";
$tdataemployees1[".googleLikeFields"][] = "dor";
$tdataemployees1[".googleLikeFields"][] = "status_id";
$tdataemployees1[".googleLikeFields"][] = "experence";
$tdataemployees1[".googleLikeFields"][] = "nationality";
$tdataemployees1[".googleLikeFields"][] = "qulification";
$tdataemployees1[".googleLikeFields"][] = "skillset";
$tdataemployees1[".googleLikeFields"][] = "cid";


$tdataemployees1[".advSearchFields"] = array();
$tdataemployees1[".advSearchFields"][] = "eid";
$tdataemployees1[".advSearchFields"][] = "ename";
$tdataemployees1[".advSearchFields"][] = "designation";
$tdataemployees1[".advSearchFields"][] = "whtasapp";
$tdataemployees1[".advSearchFields"][] = "localnum";
$tdataemployees1[".advSearchFields"][] = "skype";
$tdataemployees1[".advSearchFields"][] = "dropbox";
$tdataemployees1[".advSearchFields"][] = "email";
$tdataemployees1[".advSearchFields"][] = "dob";
$tdataemployees1[".advSearchFields"][] = "passportno";
$tdataemployees1[".advSearchFields"][] = "passport_expiry";
$tdataemployees1[".advSearchFields"][] = "visa_no";
$tdataemployees1[".advSearchFields"][] = "visa_expiry";
$tdataemployees1[".advSearchFields"][] = "division_id";
$tdataemployees1[".advSearchFields"][] = "doj";
$tdataemployees1[".advSearchFields"][] = "dor";
$tdataemployees1[".advSearchFields"][] = "status_id";
$tdataemployees1[".advSearchFields"][] = "experence";
$tdataemployees1[".advSearchFields"][] = "nationality";
$tdataemployees1[".advSearchFields"][] = "qulification";
$tdataemployees1[".advSearchFields"][] = "skillset";
$tdataemployees1[".advSearchFields"][] = "cid";

$tdataemployees1[".tableType"] = "list";

$tdataemployees1[".printerPageOrientation"] = 0;
$tdataemployees1[".nPrinterPageScale"] = 100;

$tdataemployees1[".nPrinterSplitRecords"] = 40;

$tdataemployees1[".nPrinterPDFSplitRecords"] = 40;



$tdataemployees1[".geocodingEnabled"] = false;





$tdataemployees1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemployees1[".pageSize"] = 20;

$tdataemployees1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployees1[".strOrderBy"] = $tstrOrderBy;

$tdataemployees1[".orderindexes"] = array();

$tdataemployees1[".sqlHead"] = "SELECT eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid";
$tdataemployees1[".sqlFrom"] = "FROM employees";
$tdataemployees1[".sqlWhereExpr"] = "designation='coordinator'";
$tdataemployees1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdataemployees1[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployees1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployees1[".arrGroupsPerPage"] = $arrGPP;

$tdataemployees1[".highlightSearchResults"] = true;

$tableKeysemployees1 = array();
$tableKeysemployees1[] = "eid";
$tdataemployees1[".Keys"] = $tableKeysemployees1;

$tdataemployees1[".listFields"] = array();
$tdataemployees1[".listFields"][] = "eid";
$tdataemployees1[".listFields"][] = "ename";
$tdataemployees1[".listFields"][] = "emppic";
$tdataemployees1[".listFields"][] = "designation";
$tdataemployees1[".listFields"][] = "whtasapp";
$tdataemployees1[".listFields"][] = "localnum";
$tdataemployees1[".listFields"][] = "skype";
$tdataemployees1[".listFields"][] = "dropbox";
$tdataemployees1[".listFields"][] = "email";
$tdataemployees1[".listFields"][] = "dob";
$tdataemployees1[".listFields"][] = "passportno";
$tdataemployees1[".listFields"][] = "passport_expiry";
$tdataemployees1[".listFields"][] = "visa_no";
$tdataemployees1[".listFields"][] = "visa_expiry";
$tdataemployees1[".listFields"][] = "division_id";
$tdataemployees1[".listFields"][] = "doj";
$tdataemployees1[".listFields"][] = "dor";
$tdataemployees1[".listFields"][] = "status_id";
$tdataemployees1[".listFields"][] = "experence";
$tdataemployees1[".listFields"][] = "nationality";
$tdataemployees1[".listFields"][] = "qulification";
$tdataemployees1[".listFields"][] = "skillset";
$tdataemployees1[".listFields"][] = "cid";

$tdataemployees1[".hideMobileList"] = array();


$tdataemployees1[".viewFields"] = array();
$tdataemployees1[".viewFields"][] = "eid";
$tdataemployees1[".viewFields"][] = "ename";
$tdataemployees1[".viewFields"][] = "emppic";
$tdataemployees1[".viewFields"][] = "designation";
$tdataemployees1[".viewFields"][] = "whtasapp";
$tdataemployees1[".viewFields"][] = "localnum";
$tdataemployees1[".viewFields"][] = "skype";
$tdataemployees1[".viewFields"][] = "dropbox";
$tdataemployees1[".viewFields"][] = "email";
$tdataemployees1[".viewFields"][] = "dob";
$tdataemployees1[".viewFields"][] = "passportno";
$tdataemployees1[".viewFields"][] = "passport_expiry";
$tdataemployees1[".viewFields"][] = "visa_no";
$tdataemployees1[".viewFields"][] = "visa_expiry";
$tdataemployees1[".viewFields"][] = "division_id";
$tdataemployees1[".viewFields"][] = "doj";
$tdataemployees1[".viewFields"][] = "dor";
$tdataemployees1[".viewFields"][] = "status_id";
$tdataemployees1[".viewFields"][] = "experence";
$tdataemployees1[".viewFields"][] = "nationality";
$tdataemployees1[".viewFields"][] = "qulification";
$tdataemployees1[".viewFields"][] = "skillset";
$tdataemployees1[".viewFields"][] = "cid";

$tdataemployees1[".addFields"] = array();
$tdataemployees1[".addFields"][] = "ename";
$tdataemployees1[".addFields"][] = "emppic";
$tdataemployees1[".addFields"][] = "designation";
$tdataemployees1[".addFields"][] = "whtasapp";
$tdataemployees1[".addFields"][] = "localnum";
$tdataemployees1[".addFields"][] = "skype";
$tdataemployees1[".addFields"][] = "dropbox";
$tdataemployees1[".addFields"][] = "dob";
$tdataemployees1[".addFields"][] = "passportno";
$tdataemployees1[".addFields"][] = "passport_expiry";
$tdataemployees1[".addFields"][] = "visa_no";
$tdataemployees1[".addFields"][] = "visa_expiry";
$tdataemployees1[".addFields"][] = "division_id";
$tdataemployees1[".addFields"][] = "doj";
$tdataemployees1[".addFields"][] = "dor";
$tdataemployees1[".addFields"][] = "status_id";
$tdataemployees1[".addFields"][] = "experence";
$tdataemployees1[".addFields"][] = "nationality";
$tdataemployees1[".addFields"][] = "qulification";
$tdataemployees1[".addFields"][] = "skillset";

$tdataemployees1[".masterListFields"] = array();
$tdataemployees1[".masterListFields"][] = "eid";
$tdataemployees1[".masterListFields"][] = "ename";
$tdataemployees1[".masterListFields"][] = "emppic";
$tdataemployees1[".masterListFields"][] = "designation";
$tdataemployees1[".masterListFields"][] = "whtasapp";
$tdataemployees1[".masterListFields"][] = "localnum";
$tdataemployees1[".masterListFields"][] = "skype";
$tdataemployees1[".masterListFields"][] = "dropbox";
$tdataemployees1[".masterListFields"][] = "email";
$tdataemployees1[".masterListFields"][] = "dob";
$tdataemployees1[".masterListFields"][] = "passportno";
$tdataemployees1[".masterListFields"][] = "passport_expiry";
$tdataemployees1[".masterListFields"][] = "visa_no";
$tdataemployees1[".masterListFields"][] = "visa_expiry";
$tdataemployees1[".masterListFields"][] = "division_id";
$tdataemployees1[".masterListFields"][] = "doj";
$tdataemployees1[".masterListFields"][] = "dor";
$tdataemployees1[".masterListFields"][] = "status_id";
$tdataemployees1[".masterListFields"][] = "experence";
$tdataemployees1[".masterListFields"][] = "nationality";
$tdataemployees1[".masterListFields"][] = "qulification";
$tdataemployees1[".masterListFields"][] = "skillset";
$tdataemployees1[".masterListFields"][] = "cid";

$tdataemployees1[".inlineAddFields"] = array();

$tdataemployees1[".editFields"] = array();
$tdataemployees1[".editFields"][] = "ename";
$tdataemployees1[".editFields"][] = "emppic";
$tdataemployees1[".editFields"][] = "designation";
$tdataemployees1[".editFields"][] = "whtasapp";
$tdataemployees1[".editFields"][] = "localnum";
$tdataemployees1[".editFields"][] = "skype";
$tdataemployees1[".editFields"][] = "dropbox";
$tdataemployees1[".editFields"][] = "email";
$tdataemployees1[".editFields"][] = "dob";
$tdataemployees1[".editFields"][] = "passportno";
$tdataemployees1[".editFields"][] = "passport_expiry";
$tdataemployees1[".editFields"][] = "visa_no";
$tdataemployees1[".editFields"][] = "visa_expiry";
$tdataemployees1[".editFields"][] = "division_id";
$tdataemployees1[".editFields"][] = "doj";
$tdataemployees1[".editFields"][] = "dor";
$tdataemployees1[".editFields"][] = "status_id";
$tdataemployees1[".editFields"][] = "experence";
$tdataemployees1[".editFields"][] = "nationality";
$tdataemployees1[".editFields"][] = "qulification";
$tdataemployees1[".editFields"][] = "skillset";
$tdataemployees1[".editFields"][] = "cid";

$tdataemployees1[".inlineEditFields"] = array();

$tdataemployees1[".updateSelectedFields"] = array();
$tdataemployees1[".updateSelectedFields"][] = "ename";
$tdataemployees1[".updateSelectedFields"][] = "emppic";
$tdataemployees1[".updateSelectedFields"][] = "designation";
$tdataemployees1[".updateSelectedFields"][] = "whtasapp";
$tdataemployees1[".updateSelectedFields"][] = "localnum";
$tdataemployees1[".updateSelectedFields"][] = "skype";
$tdataemployees1[".updateSelectedFields"][] = "dropbox";
$tdataemployees1[".updateSelectedFields"][] = "email";
$tdataemployees1[".updateSelectedFields"][] = "dob";
$tdataemployees1[".updateSelectedFields"][] = "passportno";
$tdataemployees1[".updateSelectedFields"][] = "passport_expiry";
$tdataemployees1[".updateSelectedFields"][] = "visa_no";
$tdataemployees1[".updateSelectedFields"][] = "visa_expiry";
$tdataemployees1[".updateSelectedFields"][] = "division_id";
$tdataemployees1[".updateSelectedFields"][] = "doj";
$tdataemployees1[".updateSelectedFields"][] = "dor";
$tdataemployees1[".updateSelectedFields"][] = "status_id";
$tdataemployees1[".updateSelectedFields"][] = "experence";
$tdataemployees1[".updateSelectedFields"][] = "nationality";
$tdataemployees1[".updateSelectedFields"][] = "qulification";
$tdataemployees1[".updateSelectedFields"][] = "skillset";
$tdataemployees1[".updateSelectedFields"][] = "cid";


$tdataemployees1[".exportFields"] = array();
$tdataemployees1[".exportFields"][] = "eid";
$tdataemployees1[".exportFields"][] = "ename";
$tdataemployees1[".exportFields"][] = "designation";
$tdataemployees1[".exportFields"][] = "whtasapp";
$tdataemployees1[".exportFields"][] = "localnum";
$tdataemployees1[".exportFields"][] = "skype";
$tdataemployees1[".exportFields"][] = "dropbox";
$tdataemployees1[".exportFields"][] = "email";
$tdataemployees1[".exportFields"][] = "dob";
$tdataemployees1[".exportFields"][] = "passportno";
$tdataemployees1[".exportFields"][] = "passport_expiry";
$tdataemployees1[".exportFields"][] = "visa_no";
$tdataemployees1[".exportFields"][] = "visa_expiry";
$tdataemployees1[".exportFields"][] = "division_id";
$tdataemployees1[".exportFields"][] = "doj";
$tdataemployees1[".exportFields"][] = "dor";
$tdataemployees1[".exportFields"][] = "status_id";
$tdataemployees1[".exportFields"][] = "experence";
$tdataemployees1[".exportFields"][] = "nationality";
$tdataemployees1[".exportFields"][] = "qulification";
$tdataemployees1[".exportFields"][] = "skillset";
$tdataemployees1[".exportFields"][] = "cid";

$tdataemployees1[".importFields"] = array();
$tdataemployees1[".importFields"][] = "eid";
$tdataemployees1[".importFields"][] = "ename";
$tdataemployees1[".importFields"][] = "designation";
$tdataemployees1[".importFields"][] = "whtasapp";
$tdataemployees1[".importFields"][] = "localnum";
$tdataemployees1[".importFields"][] = "skype";
$tdataemployees1[".importFields"][] = "dropbox";
$tdataemployees1[".importFields"][] = "email";
$tdataemployees1[".importFields"][] = "dob";
$tdataemployees1[".importFields"][] = "passportno";
$tdataemployees1[".importFields"][] = "passport_expiry";
$tdataemployees1[".importFields"][] = "visa_no";
$tdataemployees1[".importFields"][] = "visa_expiry";
$tdataemployees1[".importFields"][] = "division_id";
$tdataemployees1[".importFields"][] = "doj";
$tdataemployees1[".importFields"][] = "dor";
$tdataemployees1[".importFields"][] = "status_id";
$tdataemployees1[".importFields"][] = "experence";
$tdataemployees1[".importFields"][] = "nationality";
$tdataemployees1[".importFields"][] = "qulification";
$tdataemployees1[".importFields"][] = "skillset";
$tdataemployees1[".importFields"][] = "cid";

$tdataemployees1[".printFields"] = array();
$tdataemployees1[".printFields"][] = "eid";
$tdataemployees1[".printFields"][] = "ename";
$tdataemployees1[".printFields"][] = "emppic";
$tdataemployees1[".printFields"][] = "designation";
$tdataemployees1[".printFields"][] = "whtasapp";
$tdataemployees1[".printFields"][] = "localnum";
$tdataemployees1[".printFields"][] = "skype";
$tdataemployees1[".printFields"][] = "dropbox";
$tdataemployees1[".printFields"][] = "email";
$tdataemployees1[".printFields"][] = "dob";
$tdataemployees1[".printFields"][] = "passportno";
$tdataemployees1[".printFields"][] = "passport_expiry";
$tdataemployees1[".printFields"][] = "visa_no";
$tdataemployees1[".printFields"][] = "visa_expiry";
$tdataemployees1[".printFields"][] = "division_id";
$tdataemployees1[".printFields"][] = "doj";
$tdataemployees1[".printFields"][] = "dor";
$tdataemployees1[".printFields"][] = "status_id";
$tdataemployees1[".printFields"][] = "experence";
$tdataemployees1[".printFields"][] = "nationality";
$tdataemployees1[".printFields"][] = "qulification";
$tdataemployees1[".printFields"][] = "skillset";
$tdataemployees1[".printFields"][] = "cid";


//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","eid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["eid"] = $fdata;
//	ename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ename";
	$fdata["GoodName"] = "ename";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","ename");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ename";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["ename"] = $fdata;
//	emppic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "emppic";
	$fdata["GoodName"] = "emppic";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","emppic");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "emppic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emppic";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

		$edata["maxFileSize"] = 10000;

		$edata["maxTotalFilesSize"] = 10000;

	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 200;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataemployees1["emppic"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","designation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["designation"] = $fdata;
//	whtasapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "whtasapp";
	$fdata["GoodName"] = "whtasapp";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","whtasapp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "whtasapp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "whtasapp";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["whtasapp"] = $fdata;
//	localnum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "localnum";
	$fdata["GoodName"] = "localnum";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","localnum");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "localnum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "localnum";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["localnum"] = $fdata;
//	skype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "skype";
	$fdata["GoodName"] = "skype";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","skype");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "skype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "skype";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["skype"] = $fdata;
//	dropbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dropbox";
	$fdata["GoodName"] = "dropbox";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","dropbox");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dropbox";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dropbox";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["dropbox"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["email"] = $fdata;
//	dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dob";
	$fdata["GoodName"] = "dob";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","dob");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dob";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dob";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataemployees1["dob"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataemployees1["password"] = $fdata;
//	passportno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "passportno";
	$fdata["GoodName"] = "passportno";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","passportno");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "passportno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "passportno";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["passportno"] = $fdata;
//	passport_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "passport_expiry";
	$fdata["GoodName"] = "passport_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","passport_expiry");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "passport_expiry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "passport_expiry";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataemployees1["passport_expiry"] = $fdata;
//	visa_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "visa_no";
	$fdata["GoodName"] = "visa_no";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","visa_no");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "visa_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visa_no";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["visa_no"] = $fdata;
//	visa_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "visa_expiry";
	$fdata["GoodName"] = "visa_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","visa_expiry");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "visa_expiry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visa_expiry";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataemployees1["visa_expiry"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","division_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "division_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "division_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "division";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "division_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "dname";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["division_id"] = $fdata;
//	doj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "doj";
	$fdata["GoodName"] = "doj";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","doj");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "doj";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doj";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataemployees1["doj"] = $fdata;
//	dor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dor";
	$fdata["GoodName"] = "dor";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","dor");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dor";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataemployees1["dor"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","status_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "emp_status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["status_id"] = $fdata;
//	experence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "experence";
	$fdata["GoodName"] = "experence";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","experence");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "experence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "experence";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["experence"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","nationality");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nationality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nationality";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["nationality"] = $fdata;
//	qulification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "qulification";
	$fdata["GoodName"] = "qulification";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","qulification");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "qulification";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qulification";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["qulification"] = $fdata;
//	skillset
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "skillset";
	$fdata["GoodName"] = "skillset";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","skillset");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "skillset";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "skillset";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["skillset"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees1","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "courses";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cname";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemployees1["cid"] = $fdata;


$tables_data["employees1"]=&$tdataemployees1;
$field_labels["employees1"] = &$fieldLabelsemployees1;
$fieldToolTips["employees1"] = &$fieldToolTipsemployees1;
$placeHolders["employees1"] = &$placeHoldersemployees1;
$page_titles["employees1"] = &$pageTitlesemployees1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employees1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["employees1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_employees1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid";
$proto0["m_strFrom"] = "FROM employees";
$proto0["m_strWhere"] = "designation='coordinator'";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "designation='coordinator'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='coordinator'";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "employees1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto8["m_sql"] = "ename";
$proto8["m_srcTableName"] = "employees1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "emppic",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto10["m_sql"] = "emppic";
$proto10["m_srcTableName"] = "employees1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto12["m_sql"] = "designation";
$proto12["m_srcTableName"] = "employees1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "whtasapp",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto14["m_sql"] = "whtasapp";
$proto14["m_srcTableName"] = "employees1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "localnum",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto16["m_sql"] = "localnum";
$proto16["m_srcTableName"] = "employees1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto18["m_sql"] = "skype";
$proto18["m_srcTableName"] = "employees1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dropbox",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto20["m_sql"] = "dropbox";
$proto20["m_srcTableName"] = "employees1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto22["m_sql"] = "email";
$proto22["m_srcTableName"] = "employees1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dob",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto24["m_sql"] = "dob";
$proto24["m_srcTableName"] = "employees1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto26["m_sql"] = "password";
$proto26["m_srcTableName"] = "employees1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "passportno",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto28["m_sql"] = "passportno";
$proto28["m_srcTableName"] = "employees1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "passport_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto30["m_sql"] = "passport_expiry";
$proto30["m_srcTableName"] = "employees1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_no",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto32["m_sql"] = "visa_no";
$proto32["m_srcTableName"] = "employees1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto34["m_sql"] = "visa_expiry";
$proto34["m_srcTableName"] = "employees1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto36["m_sql"] = "division_id";
$proto36["m_srcTableName"] = "employees1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "doj",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto38["m_sql"] = "doj";
$proto38["m_srcTableName"] = "employees1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "dor",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto40["m_sql"] = "dor";
$proto40["m_srcTableName"] = "employees1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto42["m_sql"] = "status_id";
$proto42["m_srcTableName"] = "employees1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "experence",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto44["m_sql"] = "experence";
$proto44["m_srcTableName"] = "employees1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto46["m_sql"] = "nationality";
$proto46["m_srcTableName"] = "employees1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "qulification",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto48["m_sql"] = "qulification";
$proto48["m_srcTableName"] = "employees1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "skillset",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto50["m_sql"] = "skillset";
$proto50["m_srcTableName"] = "employees1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees1"
));

$proto52["m_sql"] = "cid";
$proto52["m_srcTableName"] = "employees1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "employees";
$proto55["m_srcTableName"] = "employees1";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "eid";
$proto55["m_columns"][] = "ename";
$proto55["m_columns"][] = "emppic";
$proto55["m_columns"][] = "designation";
$proto55["m_columns"][] = "whtasapp";
$proto55["m_columns"][] = "localnum";
$proto55["m_columns"][] = "skype";
$proto55["m_columns"][] = "dropbox";
$proto55["m_columns"][] = "email";
$proto55["m_columns"][] = "dob";
$proto55["m_columns"][] = "password";
$proto55["m_columns"][] = "passportno";
$proto55["m_columns"][] = "passport_expiry";
$proto55["m_columns"][] = "visa_no";
$proto55["m_columns"][] = "visa_expiry";
$proto55["m_columns"][] = "division_id";
$proto55["m_columns"][] = "doj";
$proto55["m_columns"][] = "dor";
$proto55["m_columns"][] = "status_id";
$proto55["m_columns"][] = "experence";
$proto55["m_columns"][] = "nationality";
$proto55["m_columns"][] = "qulification";
$proto55["m_columns"][] = "skillset";
$proto55["m_columns"][] = "cid";
$proto55["m_columns"][] = "reset_token";
$proto55["m_columns"][] = "reset_date";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "employees";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "employees1";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="employees1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employees1 = createSqlQuery_employees1();


	
		;

																								

$tdataemployees1[".sqlquery"] = $queryData_employees1;

$tableEvents["employees1"] = new eventsBase;
$tdataemployees1[".hasEvents"] = false;

?>