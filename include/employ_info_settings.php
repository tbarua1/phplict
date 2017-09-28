<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemploy_info = array();
	$tdataemploy_info[".truncateText"] = true;
	$tdataemploy_info[".NumberOfChars"] = 80;
	$tdataemploy_info[".ShortName"] = "employ_info";
	$tdataemploy_info[".OwnerID"] = "";
	$tdataemploy_info[".OriginalTable"] = "employ_info";

//	field labels
$fieldLabelsemploy_info = array();
$fieldToolTipsemploy_info = array();
$pageTitlesemploy_info = array();
$placeHoldersemploy_info = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemploy_info["English"] = array();
	$fieldToolTipsemploy_info["English"] = array();
	$placeHoldersemploy_info["English"] = array();
	$pageTitlesemploy_info["English"] = array();
	$fieldLabelsemploy_info["English"]["eid"] = "Eid";
	$fieldToolTipsemploy_info["English"]["eid"] = "";
	$placeHoldersemploy_info["English"]["eid"] = "";
	$fieldLabelsemploy_info["English"]["ename"] = "Ename";
	$fieldToolTipsemploy_info["English"]["ename"] = "";
	$placeHoldersemploy_info["English"]["ename"] = "";
	$fieldLabelsemploy_info["English"]["designation"] = "Designation";
	$fieldToolTipsemploy_info["English"]["designation"] = "";
	$placeHoldersemploy_info["English"]["designation"] = "";
	$fieldLabelsemploy_info["English"]["whtasapp"] = "Whtasapp";
	$fieldToolTipsemploy_info["English"]["whtasapp"] = "";
	$placeHoldersemploy_info["English"]["whtasapp"] = "";
	$fieldLabelsemploy_info["English"]["skype"] = "Skype";
	$fieldToolTipsemploy_info["English"]["skype"] = "";
	$placeHoldersemploy_info["English"]["skype"] = "";
	$fieldLabelsemploy_info["English"]["dropbox"] = "Dropbox";
	$fieldToolTipsemploy_info["English"]["dropbox"] = "";
	$placeHoldersemploy_info["English"]["dropbox"] = "";
	$fieldLabelsemploy_info["English"]["email"] = "Email";
	$fieldToolTipsemploy_info["English"]["email"] = "";
	$placeHoldersemploy_info["English"]["email"] = "";
	$fieldLabelsemploy_info["English"]["dob"] = "Dob";
	$fieldToolTipsemploy_info["English"]["dob"] = "";
	$placeHoldersemploy_info["English"]["dob"] = "";
	$fieldLabelsemploy_info["English"]["password"] = "Password";
	$fieldToolTipsemploy_info["English"]["password"] = "";
	$placeHoldersemploy_info["English"]["password"] = "";
	$fieldLabelsemploy_info["English"]["passportno"] = "Passportno";
	$fieldToolTipsemploy_info["English"]["passportno"] = "";
	$placeHoldersemploy_info["English"]["passportno"] = "";
	$fieldLabelsemploy_info["English"]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsemploy_info["English"]["passport_expiry"] = "";
	$placeHoldersemploy_info["English"]["passport_expiry"] = "";
	$fieldLabelsemploy_info["English"]["visa_no"] = "Visa No";
	$fieldToolTipsemploy_info["English"]["visa_no"] = "";
	$placeHoldersemploy_info["English"]["visa_no"] = "";
	$fieldLabelsemploy_info["English"]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsemploy_info["English"]["visa_expiry"] = "";
	$placeHoldersemploy_info["English"]["visa_expiry"] = "";
	$fieldLabelsemploy_info["English"]["division_id"] = "Division Id";
	$fieldToolTipsemploy_info["English"]["division_id"] = "";
	$placeHoldersemploy_info["English"]["division_id"] = "";
	$fieldLabelsemploy_info["English"]["doj"] = "Doj";
	$fieldToolTipsemploy_info["English"]["doj"] = "";
	$placeHoldersemploy_info["English"]["doj"] = "";
	$fieldLabelsemploy_info["English"]["dor"] = "Dor";
	$fieldToolTipsemploy_info["English"]["dor"] = "";
	$placeHoldersemploy_info["English"]["dor"] = "";
	$fieldLabelsemploy_info["English"]["status_id"] = "Status Id";
	$fieldToolTipsemploy_info["English"]["status_id"] = "";
	$placeHoldersemploy_info["English"]["status_id"] = "";
	if (count($fieldToolTipsemploy_info["English"]))
		$tdataemploy_info[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemploy_info[""] = array();
	$fieldToolTipsemploy_info[""] = array();
	$placeHoldersemploy_info[""] = array();
	$pageTitlesemploy_info[""] = array();
	if (count($fieldToolTipsemploy_info[""]))
		$tdataemploy_info[".isUseToolTips"] = true;
}


	$tdataemploy_info[".NCSearch"] = true;



$tdataemploy_info[".shortTableName"] = "employ_info";
$tdataemploy_info[".nSecOptions"] = 0;
$tdataemploy_info[".recsPerRowPrint"] = 1;
$tdataemploy_info[".mainTableOwnerID"] = "";
$tdataemploy_info[".moveNext"] = 1;
$tdataemploy_info[".entityType"] = 0;

$tdataemploy_info[".strOriginalTableName"] = "employ_info";

	



$tdataemploy_info[".showAddInPopup"] = false;

$tdataemploy_info[".showEditInPopup"] = false;

$tdataemploy_info[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemploy_info[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemploy_info[".fieldsForRegister"] = array();

$tdataemploy_info[".listAjax"] = false;

	$tdataemploy_info[".audit"] = false;

	$tdataemploy_info[".locking"] = false;



$tdataemploy_info[".list"] = true;



$tdataemploy_info[".reorderRecordsByHeader"] = true;


$tdataemploy_info[".exportFormatting"] = 2;
$tdataemploy_info[".exportDelimiter"] = ",";
		

$tdataemploy_info[".import"] = true;

$tdataemploy_info[".exportTo"] = true;

$tdataemploy_info[".printFriendly"] = true;


$tdataemploy_info[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemploy_info[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemploy_info[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemploy_info[".searchSaving"] = false;
//

$tdataemploy_info[".showSearchPanel"] = true;
		$tdataemploy_info[".flexibleSearch"] = true;

$tdataemploy_info[".isUseAjaxSuggest"] = true;

$tdataemploy_info[".rowHighlite"] = true;





$tdataemploy_info[".ajaxCodeSnippetAdded"] = false;

$tdataemploy_info[".buttonsAdded"] = false;

$tdataemploy_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemploy_info[".isUseTimeForSearch"] = false;





$tdataemploy_info[".allSearchFields"] = array();
$tdataemploy_info[".filterFields"] = array();
$tdataemploy_info[".requiredSearchFields"] = array();

$tdataemploy_info[".allSearchFields"][] = "eid";
	$tdataemploy_info[".allSearchFields"][] = "ename";
	$tdataemploy_info[".allSearchFields"][] = "designation";
	$tdataemploy_info[".allSearchFields"][] = "whtasapp";
	$tdataemploy_info[".allSearchFields"][] = "skype";
	$tdataemploy_info[".allSearchFields"][] = "dropbox";
	$tdataemploy_info[".allSearchFields"][] = "email";
	$tdataemploy_info[".allSearchFields"][] = "dob";
	$tdataemploy_info[".allSearchFields"][] = "password";
	$tdataemploy_info[".allSearchFields"][] = "passportno";
	$tdataemploy_info[".allSearchFields"][] = "passport_expiry";
	$tdataemploy_info[".allSearchFields"][] = "visa_no";
	$tdataemploy_info[".allSearchFields"][] = "visa_expiry";
	$tdataemploy_info[".allSearchFields"][] = "division_id";
	$tdataemploy_info[".allSearchFields"][] = "doj";
	$tdataemploy_info[".allSearchFields"][] = "dor";
	$tdataemploy_info[".allSearchFields"][] = "status_id";
	

$tdataemploy_info[".googleLikeFields"] = array();
$tdataemploy_info[".googleLikeFields"][] = "eid";
$tdataemploy_info[".googleLikeFields"][] = "ename";
$tdataemploy_info[".googleLikeFields"][] = "designation";
$tdataemploy_info[".googleLikeFields"][] = "whtasapp";
$tdataemploy_info[".googleLikeFields"][] = "skype";
$tdataemploy_info[".googleLikeFields"][] = "dropbox";
$tdataemploy_info[".googleLikeFields"][] = "email";
$tdataemploy_info[".googleLikeFields"][] = "dob";
$tdataemploy_info[".googleLikeFields"][] = "password";
$tdataemploy_info[".googleLikeFields"][] = "passportno";
$tdataemploy_info[".googleLikeFields"][] = "passport_expiry";
$tdataemploy_info[".googleLikeFields"][] = "visa_no";
$tdataemploy_info[".googleLikeFields"][] = "visa_expiry";
$tdataemploy_info[".googleLikeFields"][] = "division_id";
$tdataemploy_info[".googleLikeFields"][] = "doj";
$tdataemploy_info[".googleLikeFields"][] = "dor";
$tdataemploy_info[".googleLikeFields"][] = "status_id";


$tdataemploy_info[".advSearchFields"] = array();
$tdataemploy_info[".advSearchFields"][] = "eid";
$tdataemploy_info[".advSearchFields"][] = "ename";
$tdataemploy_info[".advSearchFields"][] = "designation";
$tdataemploy_info[".advSearchFields"][] = "whtasapp";
$tdataemploy_info[".advSearchFields"][] = "skype";
$tdataemploy_info[".advSearchFields"][] = "dropbox";
$tdataemploy_info[".advSearchFields"][] = "email";
$tdataemploy_info[".advSearchFields"][] = "dob";
$tdataemploy_info[".advSearchFields"][] = "password";
$tdataemploy_info[".advSearchFields"][] = "passportno";
$tdataemploy_info[".advSearchFields"][] = "passport_expiry";
$tdataemploy_info[".advSearchFields"][] = "visa_no";
$tdataemploy_info[".advSearchFields"][] = "visa_expiry";
$tdataemploy_info[".advSearchFields"][] = "division_id";
$tdataemploy_info[".advSearchFields"][] = "doj";
$tdataemploy_info[".advSearchFields"][] = "dor";
$tdataemploy_info[".advSearchFields"][] = "status_id";

$tdataemploy_info[".tableType"] = "list";

$tdataemploy_info[".printerPageOrientation"] = 0;
$tdataemploy_info[".nPrinterPageScale"] = 100;

$tdataemploy_info[".nPrinterSplitRecords"] = 40;

$tdataemploy_info[".nPrinterPDFSplitRecords"] = 40;



$tdataemploy_info[".geocodingEnabled"] = false;





$tdataemploy_info[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemploy_info[".pageSize"] = 20;

$tdataemploy_info[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemploy_info[".strOrderBy"] = $tstrOrderBy;

$tdataemploy_info[".orderindexes"] = array();

$tdataemploy_info[".sqlHead"] = "SELECT eid,  	ename,  	designation,  	whtasapp,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id";
$tdataemploy_info[".sqlFrom"] = "FROM employ_info";
$tdataemploy_info[".sqlWhereExpr"] = "";
$tdataemploy_info[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemploy_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemploy_info[".arrGroupsPerPage"] = $arrGPP;

$tdataemploy_info[".highlightSearchResults"] = true;

$tableKeysemploy_info = array();
$tdataemploy_info[".Keys"] = $tableKeysemploy_info;

$tdataemploy_info[".listFields"] = array();
$tdataemploy_info[".listFields"][] = "eid";
$tdataemploy_info[".listFields"][] = "ename";
$tdataemploy_info[".listFields"][] = "designation";
$tdataemploy_info[".listFields"][] = "whtasapp";
$tdataemploy_info[".listFields"][] = "skype";
$tdataemploy_info[".listFields"][] = "dropbox";
$tdataemploy_info[".listFields"][] = "email";
$tdataemploy_info[".listFields"][] = "dob";
$tdataemploy_info[".listFields"][] = "password";
$tdataemploy_info[".listFields"][] = "passportno";
$tdataemploy_info[".listFields"][] = "passport_expiry";
$tdataemploy_info[".listFields"][] = "visa_no";
$tdataemploy_info[".listFields"][] = "visa_expiry";
$tdataemploy_info[".listFields"][] = "division_id";
$tdataemploy_info[".listFields"][] = "doj";
$tdataemploy_info[".listFields"][] = "dor";
$tdataemploy_info[".listFields"][] = "status_id";

$tdataemploy_info[".hideMobileList"] = array();


$tdataemploy_info[".viewFields"] = array();
$tdataemploy_info[".viewFields"][] = "eid";
$tdataemploy_info[".viewFields"][] = "ename";
$tdataemploy_info[".viewFields"][] = "designation";
$tdataemploy_info[".viewFields"][] = "whtasapp";
$tdataemploy_info[".viewFields"][] = "skype";
$tdataemploy_info[".viewFields"][] = "dropbox";
$tdataemploy_info[".viewFields"][] = "email";
$tdataemploy_info[".viewFields"][] = "dob";
$tdataemploy_info[".viewFields"][] = "password";
$tdataemploy_info[".viewFields"][] = "passportno";
$tdataemploy_info[".viewFields"][] = "passport_expiry";
$tdataemploy_info[".viewFields"][] = "visa_no";
$tdataemploy_info[".viewFields"][] = "visa_expiry";
$tdataemploy_info[".viewFields"][] = "division_id";
$tdataemploy_info[".viewFields"][] = "doj";
$tdataemploy_info[".viewFields"][] = "dor";
$tdataemploy_info[".viewFields"][] = "status_id";

$tdataemploy_info[".addFields"] = array();
$tdataemploy_info[".addFields"][] = "eid";
$tdataemploy_info[".addFields"][] = "ename";
$tdataemploy_info[".addFields"][] = "designation";
$tdataemploy_info[".addFields"][] = "whtasapp";
$tdataemploy_info[".addFields"][] = "skype";
$tdataemploy_info[".addFields"][] = "dropbox";
$tdataemploy_info[".addFields"][] = "email";
$tdataemploy_info[".addFields"][] = "dob";
$tdataemploy_info[".addFields"][] = "password";
$tdataemploy_info[".addFields"][] = "passportno";
$tdataemploy_info[".addFields"][] = "passport_expiry";
$tdataemploy_info[".addFields"][] = "visa_no";
$tdataemploy_info[".addFields"][] = "visa_expiry";
$tdataemploy_info[".addFields"][] = "division_id";
$tdataemploy_info[".addFields"][] = "doj";
$tdataemploy_info[".addFields"][] = "dor";
$tdataemploy_info[".addFields"][] = "status_id";

$tdataemploy_info[".masterListFields"] = array();
$tdataemploy_info[".masterListFields"][] = "eid";
$tdataemploy_info[".masterListFields"][] = "ename";
$tdataemploy_info[".masterListFields"][] = "designation";
$tdataemploy_info[".masterListFields"][] = "whtasapp";
$tdataemploy_info[".masterListFields"][] = "skype";
$tdataemploy_info[".masterListFields"][] = "dropbox";
$tdataemploy_info[".masterListFields"][] = "email";
$tdataemploy_info[".masterListFields"][] = "dob";
$tdataemploy_info[".masterListFields"][] = "password";
$tdataemploy_info[".masterListFields"][] = "passportno";
$tdataemploy_info[".masterListFields"][] = "passport_expiry";
$tdataemploy_info[".masterListFields"][] = "visa_no";
$tdataemploy_info[".masterListFields"][] = "visa_expiry";
$tdataemploy_info[".masterListFields"][] = "division_id";
$tdataemploy_info[".masterListFields"][] = "doj";
$tdataemploy_info[".masterListFields"][] = "dor";
$tdataemploy_info[".masterListFields"][] = "status_id";

$tdataemploy_info[".inlineAddFields"] = array();
$tdataemploy_info[".inlineAddFields"][] = "eid";
$tdataemploy_info[".inlineAddFields"][] = "ename";
$tdataemploy_info[".inlineAddFields"][] = "designation";
$tdataemploy_info[".inlineAddFields"][] = "whtasapp";
$tdataemploy_info[".inlineAddFields"][] = "skype";
$tdataemploy_info[".inlineAddFields"][] = "dropbox";
$tdataemploy_info[".inlineAddFields"][] = "email";
$tdataemploy_info[".inlineAddFields"][] = "dob";
$tdataemploy_info[".inlineAddFields"][] = "password";
$tdataemploy_info[".inlineAddFields"][] = "passportno";
$tdataemploy_info[".inlineAddFields"][] = "passport_expiry";
$tdataemploy_info[".inlineAddFields"][] = "visa_no";
$tdataemploy_info[".inlineAddFields"][] = "visa_expiry";
$tdataemploy_info[".inlineAddFields"][] = "division_id";
$tdataemploy_info[".inlineAddFields"][] = "doj";
$tdataemploy_info[".inlineAddFields"][] = "dor";
$tdataemploy_info[".inlineAddFields"][] = "status_id";

$tdataemploy_info[".editFields"] = array();
$tdataemploy_info[".editFields"][] = "eid";
$tdataemploy_info[".editFields"][] = "ename";
$tdataemploy_info[".editFields"][] = "designation";
$tdataemploy_info[".editFields"][] = "whtasapp";
$tdataemploy_info[".editFields"][] = "skype";
$tdataemploy_info[".editFields"][] = "dropbox";
$tdataemploy_info[".editFields"][] = "email";
$tdataemploy_info[".editFields"][] = "dob";
$tdataemploy_info[".editFields"][] = "password";
$tdataemploy_info[".editFields"][] = "passportno";
$tdataemploy_info[".editFields"][] = "passport_expiry";
$tdataemploy_info[".editFields"][] = "visa_no";
$tdataemploy_info[".editFields"][] = "visa_expiry";
$tdataemploy_info[".editFields"][] = "division_id";
$tdataemploy_info[".editFields"][] = "doj";
$tdataemploy_info[".editFields"][] = "dor";
$tdataemploy_info[".editFields"][] = "status_id";

$tdataemploy_info[".inlineEditFields"] = array();
$tdataemploy_info[".inlineEditFields"][] = "eid";
$tdataemploy_info[".inlineEditFields"][] = "ename";
$tdataemploy_info[".inlineEditFields"][] = "designation";
$tdataemploy_info[".inlineEditFields"][] = "whtasapp";
$tdataemploy_info[".inlineEditFields"][] = "skype";
$tdataemploy_info[".inlineEditFields"][] = "dropbox";
$tdataemploy_info[".inlineEditFields"][] = "email";
$tdataemploy_info[".inlineEditFields"][] = "dob";
$tdataemploy_info[".inlineEditFields"][] = "password";
$tdataemploy_info[".inlineEditFields"][] = "passportno";
$tdataemploy_info[".inlineEditFields"][] = "passport_expiry";
$tdataemploy_info[".inlineEditFields"][] = "visa_no";
$tdataemploy_info[".inlineEditFields"][] = "visa_expiry";
$tdataemploy_info[".inlineEditFields"][] = "division_id";
$tdataemploy_info[".inlineEditFields"][] = "doj";
$tdataemploy_info[".inlineEditFields"][] = "dor";
$tdataemploy_info[".inlineEditFields"][] = "status_id";

$tdataemploy_info[".updateSelectedFields"] = array();
$tdataemploy_info[".updateSelectedFields"][] = "eid";
$tdataemploy_info[".updateSelectedFields"][] = "ename";
$tdataemploy_info[".updateSelectedFields"][] = "designation";
$tdataemploy_info[".updateSelectedFields"][] = "whtasapp";
$tdataemploy_info[".updateSelectedFields"][] = "skype";
$tdataemploy_info[".updateSelectedFields"][] = "dropbox";
$tdataemploy_info[".updateSelectedFields"][] = "email";
$tdataemploy_info[".updateSelectedFields"][] = "dob";
$tdataemploy_info[".updateSelectedFields"][] = "password";
$tdataemploy_info[".updateSelectedFields"][] = "passportno";
$tdataemploy_info[".updateSelectedFields"][] = "passport_expiry";
$tdataemploy_info[".updateSelectedFields"][] = "visa_no";
$tdataemploy_info[".updateSelectedFields"][] = "visa_expiry";
$tdataemploy_info[".updateSelectedFields"][] = "division_id";
$tdataemploy_info[".updateSelectedFields"][] = "doj";
$tdataemploy_info[".updateSelectedFields"][] = "dor";
$tdataemploy_info[".updateSelectedFields"][] = "status_id";


$tdataemploy_info[".exportFields"] = array();
$tdataemploy_info[".exportFields"][] = "eid";
$tdataemploy_info[".exportFields"][] = "ename";
$tdataemploy_info[".exportFields"][] = "designation";
$tdataemploy_info[".exportFields"][] = "whtasapp";
$tdataemploy_info[".exportFields"][] = "skype";
$tdataemploy_info[".exportFields"][] = "dropbox";
$tdataemploy_info[".exportFields"][] = "email";
$tdataemploy_info[".exportFields"][] = "dob";
$tdataemploy_info[".exportFields"][] = "password";
$tdataemploy_info[".exportFields"][] = "passportno";
$tdataemploy_info[".exportFields"][] = "passport_expiry";
$tdataemploy_info[".exportFields"][] = "visa_no";
$tdataemploy_info[".exportFields"][] = "visa_expiry";
$tdataemploy_info[".exportFields"][] = "division_id";
$tdataemploy_info[".exportFields"][] = "doj";
$tdataemploy_info[".exportFields"][] = "dor";
$tdataemploy_info[".exportFields"][] = "status_id";

$tdataemploy_info[".importFields"] = array();
$tdataemploy_info[".importFields"][] = "eid";
$tdataemploy_info[".importFields"][] = "ename";
$tdataemploy_info[".importFields"][] = "designation";
$tdataemploy_info[".importFields"][] = "whtasapp";
$tdataemploy_info[".importFields"][] = "skype";
$tdataemploy_info[".importFields"][] = "dropbox";
$tdataemploy_info[".importFields"][] = "email";
$tdataemploy_info[".importFields"][] = "dob";
$tdataemploy_info[".importFields"][] = "password";
$tdataemploy_info[".importFields"][] = "passportno";
$tdataemploy_info[".importFields"][] = "passport_expiry";
$tdataemploy_info[".importFields"][] = "visa_no";
$tdataemploy_info[".importFields"][] = "visa_expiry";
$tdataemploy_info[".importFields"][] = "division_id";
$tdataemploy_info[".importFields"][] = "doj";
$tdataemploy_info[".importFields"][] = "dor";
$tdataemploy_info[".importFields"][] = "status_id";

$tdataemploy_info[".printFields"] = array();
$tdataemploy_info[".printFields"][] = "eid";
$tdataemploy_info[".printFields"][] = "ename";
$tdataemploy_info[".printFields"][] = "designation";
$tdataemploy_info[".printFields"][] = "whtasapp";
$tdataemploy_info[".printFields"][] = "skype";
$tdataemploy_info[".printFields"][] = "dropbox";
$tdataemploy_info[".printFields"][] = "email";
$tdataemploy_info[".printFields"][] = "dob";
$tdataemploy_info[".printFields"][] = "password";
$tdataemploy_info[".printFields"][] = "passportno";
$tdataemploy_info[".printFields"][] = "passport_expiry";
$tdataemploy_info[".printFields"][] = "visa_no";
$tdataemploy_info[".printFields"][] = "visa_expiry";
$tdataemploy_info[".printFields"][] = "division_id";
$tdataemploy_info[".printFields"][] = "doj";
$tdataemploy_info[".printFields"][] = "dor";
$tdataemploy_info[".printFields"][] = "status_id";


//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","eid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemploy_info["eid"] = $fdata;
//	ename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ename";
	$fdata["GoodName"] = "ename";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","ename");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["ename"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","designation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["designation"] = $fdata;
//	whtasapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "whtasapp";
	$fdata["GoodName"] = "whtasapp";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","whtasapp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["whtasapp"] = $fdata;
//	skype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "skype";
	$fdata["GoodName"] = "skype";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","skype");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["skype"] = $fdata;
//	dropbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dropbox";
	$fdata["GoodName"] = "dropbox";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","dropbox");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["dropbox"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["email"] = $fdata;
//	dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dob";
	$fdata["GoodName"] = "dob";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","dob");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["dob"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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




	$tdataemploy_info["password"] = $fdata;
//	passportno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "passportno";
	$fdata["GoodName"] = "passportno";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","passportno");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["passportno"] = $fdata;
//	passport_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "passport_expiry";
	$fdata["GoodName"] = "passport_expiry";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","passport_expiry");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["passport_expiry"] = $fdata;
//	visa_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "visa_no";
	$fdata["GoodName"] = "visa_no";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","visa_no");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["visa_no"] = $fdata;
//	visa_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "visa_expiry";
	$fdata["GoodName"] = "visa_expiry";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","visa_expiry");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["visa_expiry"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","division_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemploy_info["division_id"] = $fdata;
//	doj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "doj";
	$fdata["GoodName"] = "doj";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","doj");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["doj"] = $fdata;
//	dor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dor";
	$fdata["GoodName"] = "dor";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","dor");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataemploy_info["dor"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "employ_info";
	$fdata["Label"] = GetFieldLabel("employ_info","status_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataemploy_info["status_id"] = $fdata;


$tables_data["employ_info"]=&$tdataemploy_info;
$field_labels["employ_info"] = &$fieldLabelsemploy_info;
$fieldToolTips["employ_info"] = &$fieldToolTipsemploy_info;
$placeHolders["employ_info"] = &$placeHoldersemploy_info;
$page_titles["employ_info"] = &$pageTitlesemploy_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employ_info"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["employ_info"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_employ_info()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	ename,  	designation,  	whtasapp,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id";
$proto0["m_strFrom"] = "FROM employ_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "employ_info";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto8["m_sql"] = "ename";
$proto8["m_srcTableName"] = "employ_info";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto10["m_sql"] = "designation";
$proto10["m_srcTableName"] = "employ_info";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "whtasapp",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto12["m_sql"] = "whtasapp";
$proto12["m_srcTableName"] = "employ_info";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto14["m_sql"] = "skype";
$proto14["m_srcTableName"] = "employ_info";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dropbox",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto16["m_sql"] = "dropbox";
$proto16["m_srcTableName"] = "employ_info";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto18["m_sql"] = "email";
$proto18["m_srcTableName"] = "employ_info";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dob",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto20["m_sql"] = "dob";
$proto20["m_srcTableName"] = "employ_info";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto22["m_sql"] = "password";
$proto22["m_srcTableName"] = "employ_info";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "passportno",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto24["m_sql"] = "passportno";
$proto24["m_srcTableName"] = "employ_info";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "passport_expiry",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto26["m_sql"] = "passport_expiry";
$proto26["m_srcTableName"] = "employ_info";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_no",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto28["m_sql"] = "visa_no";
$proto28["m_srcTableName"] = "employ_info";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_expiry",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto30["m_sql"] = "visa_expiry";
$proto30["m_srcTableName"] = "employ_info";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto32["m_sql"] = "division_id";
$proto32["m_srcTableName"] = "employ_info";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "doj",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto34["m_sql"] = "doj";
$proto34["m_srcTableName"] = "employ_info";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dor",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto36["m_sql"] = "dor";
$proto36["m_srcTableName"] = "employ_info";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "employ_info",
	"m_srcTableName" => "employ_info"
));

$proto38["m_sql"] = "status_id";
$proto38["m_srcTableName"] = "employ_info";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "employ_info";
$proto41["m_srcTableName"] = "employ_info";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "eid";
$proto41["m_columns"][] = "ename";
$proto41["m_columns"][] = "designation";
$proto41["m_columns"][] = "whtasapp";
$proto41["m_columns"][] = "skype";
$proto41["m_columns"][] = "dropbox";
$proto41["m_columns"][] = "email";
$proto41["m_columns"][] = "dob";
$proto41["m_columns"][] = "password";
$proto41["m_columns"][] = "passportno";
$proto41["m_columns"][] = "passport_expiry";
$proto41["m_columns"][] = "visa_no";
$proto41["m_columns"][] = "visa_expiry";
$proto41["m_columns"][] = "division_id";
$proto41["m_columns"][] = "doj";
$proto41["m_columns"][] = "dor";
$proto41["m_columns"][] = "status_id";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "employ_info";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "employ_info";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="employ_info";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employ_info = createSqlQuery_employ_info();


	
		;

																	

$tdataemploy_info[".sqlquery"] = $queryData_employ_info;

$tableEvents["employ_info"] = new eventsBase;
$tdataemploy_info[".hasEvents"] = false;

?>