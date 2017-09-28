<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "employees";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["eid"] = "Eid";
	$fieldToolTipsadmin_members["English"]["eid"] = "";
	$placeHoldersadmin_members["English"]["eid"] = "";
	$fieldLabelsadmin_members["English"]["ename"] = "Ename";
	$fieldToolTipsadmin_members["English"]["ename"] = "";
	$placeHoldersadmin_members["English"]["ename"] = "";
	$fieldLabelsadmin_members["English"]["designation"] = "Designation";
	$fieldToolTipsadmin_members["English"]["designation"] = "";
	$placeHoldersadmin_members["English"]["designation"] = "";
	$fieldLabelsadmin_members["English"]["whtasapp"] = "Whtasapp";
	$fieldToolTipsadmin_members["English"]["whtasapp"] = "";
	$placeHoldersadmin_members["English"]["whtasapp"] = "";
	$fieldLabelsadmin_members["English"]["localnum"] = "Localnum";
	$fieldToolTipsadmin_members["English"]["localnum"] = "";
	$placeHoldersadmin_members["English"]["localnum"] = "";
	$fieldLabelsadmin_members["English"]["skype"] = "Skype";
	$fieldToolTipsadmin_members["English"]["skype"] = "";
	$placeHoldersadmin_members["English"]["skype"] = "";
	$fieldLabelsadmin_members["English"]["dropbox"] = "Dropbox";
	$fieldToolTipsadmin_members["English"]["dropbox"] = "";
	$placeHoldersadmin_members["English"]["dropbox"] = "";
	$fieldLabelsadmin_members["English"]["email"] = "Email";
	$fieldToolTipsadmin_members["English"]["email"] = "";
	$placeHoldersadmin_members["English"]["email"] = "";
	$fieldLabelsadmin_members["English"]["dob"] = "Dob";
	$fieldToolTipsadmin_members["English"]["dob"] = "";
	$placeHoldersadmin_members["English"]["dob"] = "";
	$fieldLabelsadmin_members["English"]["password"] = "Password";
	$fieldToolTipsadmin_members["English"]["password"] = "";
	$placeHoldersadmin_members["English"]["password"] = "";
	$fieldLabelsadmin_members["English"]["passportno"] = "Passportno";
	$fieldToolTipsadmin_members["English"]["passportno"] = "";
	$placeHoldersadmin_members["English"]["passportno"] = "";
	$fieldLabelsadmin_members["English"]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsadmin_members["English"]["passport_expiry"] = "";
	$placeHoldersadmin_members["English"]["passport_expiry"] = "";
	$fieldLabelsadmin_members["English"]["visa_no"] = "Visa No";
	$fieldToolTipsadmin_members["English"]["visa_no"] = "";
	$placeHoldersadmin_members["English"]["visa_no"] = "";
	$fieldLabelsadmin_members["English"]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsadmin_members["English"]["visa_expiry"] = "";
	$placeHoldersadmin_members["English"]["visa_expiry"] = "";
	$fieldLabelsadmin_members["English"]["division_id"] = "Division Id";
	$fieldToolTipsadmin_members["English"]["division_id"] = "";
	$placeHoldersadmin_members["English"]["division_id"] = "";
	$fieldLabelsadmin_members["English"]["doj"] = "Doj";
	$fieldToolTipsadmin_members["English"]["doj"] = "";
	$placeHoldersadmin_members["English"]["doj"] = "";
	$fieldLabelsadmin_members["English"]["dor"] = "Dor";
	$fieldToolTipsadmin_members["English"]["dor"] = "";
	$placeHoldersadmin_members["English"]["dor"] = "";
	$fieldLabelsadmin_members["English"]["status_id"] = "Status Id";
	$fieldToolTipsadmin_members["English"]["status_id"] = "";
	$placeHoldersadmin_members["English"]["status_id"] = "";
	$fieldLabelsadmin_members["English"]["emppic"] = "Emppic";
	$fieldToolTipsadmin_members["English"]["emppic"] = "";
	$placeHoldersadmin_members["English"]["emppic"] = "";
	$fieldLabelsadmin_members["English"]["experence"] = "Experence";
	$fieldToolTipsadmin_members["English"]["experence"] = "";
	$placeHoldersadmin_members["English"]["experence"] = "";
	$fieldLabelsadmin_members["English"]["nationality"] = "Nationality";
	$fieldToolTipsadmin_members["English"]["nationality"] = "";
	$placeHoldersadmin_members["English"]["nationality"] = "";
	$fieldLabelsadmin_members["English"]["qulification"] = "Qulification";
	$fieldToolTipsadmin_members["English"]["qulification"] = "";
	$placeHoldersadmin_members["English"]["qulification"] = "";
	$fieldLabelsadmin_members["English"]["skillset"] = "Skillset";
	$fieldToolTipsadmin_members["English"]["skillset"] = "";
	$placeHoldersadmin_members["English"]["skillset"] = "";
	$fieldLabelsadmin_members["English"]["cid"] = "Cid";
	$fieldToolTipsadmin_members["English"]["cid"] = "";
	$placeHoldersadmin_members["English"]["cid"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$placeHoldersadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	$fieldLabelsadmin_members[""]["eid"] = "Eid";
	$fieldToolTipsadmin_members[""]["eid"] = "";
	$placeHoldersadmin_members[""]["eid"] = "";
	$fieldLabelsadmin_members[""]["ename"] = "Ename";
	$fieldToolTipsadmin_members[""]["ename"] = "";
	$placeHoldersadmin_members[""]["ename"] = "";
	$fieldLabelsadmin_members[""]["designation"] = "Designation";
	$fieldToolTipsadmin_members[""]["designation"] = "";
	$placeHoldersadmin_members[""]["designation"] = "";
	$fieldLabelsadmin_members[""]["whtasapp"] = "Whtasapp";
	$fieldToolTipsadmin_members[""]["whtasapp"] = "";
	$placeHoldersadmin_members[""]["whtasapp"] = "";
	$fieldLabelsadmin_members[""]["localnum"] = "Localnum";
	$fieldToolTipsadmin_members[""]["localnum"] = "";
	$placeHoldersadmin_members[""]["localnum"] = "";
	$fieldLabelsadmin_members[""]["skype"] = "Skype";
	$fieldToolTipsadmin_members[""]["skype"] = "";
	$placeHoldersadmin_members[""]["skype"] = "";
	$fieldLabelsadmin_members[""]["dropbox"] = "Dropbox";
	$fieldToolTipsadmin_members[""]["dropbox"] = "";
	$placeHoldersadmin_members[""]["dropbox"] = "";
	$fieldLabelsadmin_members[""]["email"] = "Email";
	$fieldToolTipsadmin_members[""]["email"] = "";
	$placeHoldersadmin_members[""]["email"] = "";
	$fieldLabelsadmin_members[""]["dob"] = "Dob";
	$fieldToolTipsadmin_members[""]["dob"] = "";
	$placeHoldersadmin_members[""]["dob"] = "";
	$fieldLabelsadmin_members[""]["password"] = "Password";
	$fieldToolTipsadmin_members[""]["password"] = "";
	$placeHoldersadmin_members[""]["password"] = "";
	$fieldLabelsadmin_members[""]["passportno"] = "Passportno";
	$fieldToolTipsadmin_members[""]["passportno"] = "";
	$placeHoldersadmin_members[""]["passportno"] = "";
	$fieldLabelsadmin_members[""]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsadmin_members[""]["passport_expiry"] = "";
	$placeHoldersadmin_members[""]["passport_expiry"] = "";
	$fieldLabelsadmin_members[""]["visa_no"] = "Visa No";
	$fieldToolTipsadmin_members[""]["visa_no"] = "";
	$placeHoldersadmin_members[""]["visa_no"] = "";
	$fieldLabelsadmin_members[""]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsadmin_members[""]["visa_expiry"] = "";
	$placeHoldersadmin_members[""]["visa_expiry"] = "";
	$fieldLabelsadmin_members[""]["division_id"] = "Division Id";
	$fieldToolTipsadmin_members[""]["division_id"] = "";
	$placeHoldersadmin_members[""]["division_id"] = "";
	$fieldLabelsadmin_members[""]["doj"] = "Doj";
	$fieldToolTipsadmin_members[""]["doj"] = "";
	$placeHoldersadmin_members[""]["doj"] = "";
	$fieldLabelsadmin_members[""]["dor"] = "Dor";
	$fieldToolTipsadmin_members[""]["dor"] = "";
	$placeHoldersadmin_members[""]["dor"] = "";
	$fieldLabelsadmin_members[""]["status_id"] = "Status Id";
	$fieldToolTipsadmin_members[""]["status_id"] = "";
	$placeHoldersadmin_members[""]["status_id"] = "";
	$fieldLabelsadmin_members[""]["emppic"] = "Emppic";
	$fieldToolTipsadmin_members[""]["emppic"] = "";
	$placeHoldersadmin_members[""]["emppic"] = "";
	$fieldLabelsadmin_members[""]["experence"] = "Experence";
	$fieldToolTipsadmin_members[""]["experence"] = "";
	$placeHoldersadmin_members[""]["experence"] = "";
	$fieldLabelsadmin_members[""]["nationality"] = "Nationality";
	$fieldToolTipsadmin_members[""]["nationality"] = "";
	$placeHoldersadmin_members[""]["nationality"] = "";
	$fieldLabelsadmin_members[""]["qulification"] = "Qulification";
	$fieldToolTipsadmin_members[""]["qulification"] = "";
	$placeHoldersadmin_members[""]["qulification"] = "";
	$fieldLabelsadmin_members[""]["skillset"] = "Skillset";
	$fieldToolTipsadmin_members[""]["skillset"] = "";
	$placeHoldersadmin_members[""]["skillset"] = "";
	$fieldLabelsadmin_members[""]["cid"] = "Cid";
	$fieldToolTipsadmin_members[""]["cid"] = "";
	$placeHoldersadmin_members[""]["cid"] = "";
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "employees";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = true;

	$tdataadmin_members[".locking"] = true;






$tdataadmin_members[".reorderRecordsByHeader"] = true;








$tdataadmin_members[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



			

$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;



$tdataadmin_members[".badgeColor"] = "E8926F";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "eid";
	$tdataadmin_members[".allSearchFields"][] = "ename";
	$tdataadmin_members[".allSearchFields"][] = "designation";
	$tdataadmin_members[".allSearchFields"][] = "whtasapp";
	$tdataadmin_members[".allSearchFields"][] = "localnum";
	$tdataadmin_members[".allSearchFields"][] = "skype";
	$tdataadmin_members[".allSearchFields"][] = "dropbox";
	$tdataadmin_members[".allSearchFields"][] = "email";
	$tdataadmin_members[".allSearchFields"][] = "dob";
	$tdataadmin_members[".allSearchFields"][] = "passportno";
	$tdataadmin_members[".allSearchFields"][] = "passport_expiry";
	$tdataadmin_members[".allSearchFields"][] = "visa_no";
	$tdataadmin_members[".allSearchFields"][] = "visa_expiry";
	$tdataadmin_members[".allSearchFields"][] = "division_id";
	$tdataadmin_members[".allSearchFields"][] = "doj";
	$tdataadmin_members[".allSearchFields"][] = "dor";
	$tdataadmin_members[".allSearchFields"][] = "status_id";
	$tdataadmin_members[".allSearchFields"][] = "experence";
	$tdataadmin_members[".allSearchFields"][] = "nationality";
	$tdataadmin_members[".allSearchFields"][] = "qulification";
	$tdataadmin_members[".allSearchFields"][] = "skillset";
	$tdataadmin_members[".allSearchFields"][] = "cid";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "eid";
$tdataadmin_members[".googleLikeFields"][] = "ename";
$tdataadmin_members[".googleLikeFields"][] = "emppic";
$tdataadmin_members[".googleLikeFields"][] = "designation";
$tdataadmin_members[".googleLikeFields"][] = "whtasapp";
$tdataadmin_members[".googleLikeFields"][] = "localnum";
$tdataadmin_members[".googleLikeFields"][] = "skype";
$tdataadmin_members[".googleLikeFields"][] = "dropbox";
$tdataadmin_members[".googleLikeFields"][] = "email";
$tdataadmin_members[".googleLikeFields"][] = "dob";
$tdataadmin_members[".googleLikeFields"][] = "password";
$tdataadmin_members[".googleLikeFields"][] = "passportno";
$tdataadmin_members[".googleLikeFields"][] = "passport_expiry";
$tdataadmin_members[".googleLikeFields"][] = "visa_no";
$tdataadmin_members[".googleLikeFields"][] = "visa_expiry";
$tdataadmin_members[".googleLikeFields"][] = "division_id";
$tdataadmin_members[".googleLikeFields"][] = "doj";
$tdataadmin_members[".googleLikeFields"][] = "dor";
$tdataadmin_members[".googleLikeFields"][] = "status_id";
$tdataadmin_members[".googleLikeFields"][] = "experence";
$tdataadmin_members[".googleLikeFields"][] = "nationality";
$tdataadmin_members[".googleLikeFields"][] = "qulification";
$tdataadmin_members[".googleLikeFields"][] = "skillset";
$tdataadmin_members[".googleLikeFields"][] = "cid";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "eid";
$tdataadmin_members[".advSearchFields"][] = "ename";
$tdataadmin_members[".advSearchFields"][] = "designation";
$tdataadmin_members[".advSearchFields"][] = "whtasapp";
$tdataadmin_members[".advSearchFields"][] = "localnum";
$tdataadmin_members[".advSearchFields"][] = "skype";
$tdataadmin_members[".advSearchFields"][] = "dropbox";
$tdataadmin_members[".advSearchFields"][] = "email";
$tdataadmin_members[".advSearchFields"][] = "dob";
$tdataadmin_members[".advSearchFields"][] = "passportno";
$tdataadmin_members[".advSearchFields"][] = "passport_expiry";
$tdataadmin_members[".advSearchFields"][] = "visa_no";
$tdataadmin_members[".advSearchFields"][] = "visa_expiry";
$tdataadmin_members[".advSearchFields"][] = "division_id";
$tdataadmin_members[".advSearchFields"][] = "doj";
$tdataadmin_members[".advSearchFields"][] = "dor";
$tdataadmin_members[".advSearchFields"][] = "status_id";
$tdataadmin_members[".advSearchFields"][] = "experence";
$tdataadmin_members[".advSearchFields"][] = "nationality";
$tdataadmin_members[".advSearchFields"][] = "qulification";
$tdataadmin_members[".advSearchFields"][] = "skillset";
$tdataadmin_members[".advSearchFields"][] = "cid";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid";
$tdataadmin_members[".sqlFrom"] = "FROM employees";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "eid";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "eid";
$tdataadmin_members[".listFields"][] = "ename";
$tdataadmin_members[".listFields"][] = "emppic";
$tdataadmin_members[".listFields"][] = "designation";
$tdataadmin_members[".listFields"][] = "whtasapp";
$tdataadmin_members[".listFields"][] = "localnum";
$tdataadmin_members[".listFields"][] = "skype";
$tdataadmin_members[".listFields"][] = "dropbox";
$tdataadmin_members[".listFields"][] = "email";
$tdataadmin_members[".listFields"][] = "dob";
$tdataadmin_members[".listFields"][] = "passportno";
$tdataadmin_members[".listFields"][] = "passport_expiry";
$tdataadmin_members[".listFields"][] = "visa_no";
$tdataadmin_members[".listFields"][] = "visa_expiry";
$tdataadmin_members[".listFields"][] = "division_id";
$tdataadmin_members[".listFields"][] = "doj";
$tdataadmin_members[".listFields"][] = "dor";
$tdataadmin_members[".listFields"][] = "status_id";
$tdataadmin_members[".listFields"][] = "experence";
$tdataadmin_members[".listFields"][] = "nationality";
$tdataadmin_members[".listFields"][] = "qulification";
$tdataadmin_members[".listFields"][] = "skillset";
$tdataadmin_members[".listFields"][] = "cid";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "eid";
$tdataadmin_members[".viewFields"][] = "ename";
$tdataadmin_members[".viewFields"][] = "emppic";
$tdataadmin_members[".viewFields"][] = "designation";
$tdataadmin_members[".viewFields"][] = "whtasapp";
$tdataadmin_members[".viewFields"][] = "localnum";
$tdataadmin_members[".viewFields"][] = "skype";
$tdataadmin_members[".viewFields"][] = "dropbox";
$tdataadmin_members[".viewFields"][] = "email";
$tdataadmin_members[".viewFields"][] = "dob";
$tdataadmin_members[".viewFields"][] = "passportno";
$tdataadmin_members[".viewFields"][] = "passport_expiry";
$tdataadmin_members[".viewFields"][] = "visa_no";
$tdataadmin_members[".viewFields"][] = "visa_expiry";
$tdataadmin_members[".viewFields"][] = "division_id";
$tdataadmin_members[".viewFields"][] = "doj";
$tdataadmin_members[".viewFields"][] = "dor";
$tdataadmin_members[".viewFields"][] = "status_id";
$tdataadmin_members[".viewFields"][] = "experence";
$tdataadmin_members[".viewFields"][] = "nationality";
$tdataadmin_members[".viewFields"][] = "qulification";
$tdataadmin_members[".viewFields"][] = "skillset";
$tdataadmin_members[".viewFields"][] = "cid";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "ename";
$tdataadmin_members[".addFields"][] = "emppic";
$tdataadmin_members[".addFields"][] = "designation";
$tdataadmin_members[".addFields"][] = "whtasapp";
$tdataadmin_members[".addFields"][] = "localnum";
$tdataadmin_members[".addFields"][] = "skype";
$tdataadmin_members[".addFields"][] = "dropbox";
$tdataadmin_members[".addFields"][] = "dob";
$tdataadmin_members[".addFields"][] = "passportno";
$tdataadmin_members[".addFields"][] = "passport_expiry";
$tdataadmin_members[".addFields"][] = "visa_no";
$tdataadmin_members[".addFields"][] = "visa_expiry";
$tdataadmin_members[".addFields"][] = "division_id";
$tdataadmin_members[".addFields"][] = "doj";
$tdataadmin_members[".addFields"][] = "dor";
$tdataadmin_members[".addFields"][] = "status_id";
$tdataadmin_members[".addFields"][] = "experence";
$tdataadmin_members[".addFields"][] = "nationality";
$tdataadmin_members[".addFields"][] = "qulification";
$tdataadmin_members[".addFields"][] = "skillset";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "eid";
$tdataadmin_members[".masterListFields"][] = "ename";
$tdataadmin_members[".masterListFields"][] = "emppic";
$tdataadmin_members[".masterListFields"][] = "designation";
$tdataadmin_members[".masterListFields"][] = "whtasapp";
$tdataadmin_members[".masterListFields"][] = "localnum";
$tdataadmin_members[".masterListFields"][] = "skype";
$tdataadmin_members[".masterListFields"][] = "dropbox";
$tdataadmin_members[".masterListFields"][] = "email";
$tdataadmin_members[".masterListFields"][] = "dob";
$tdataadmin_members[".masterListFields"][] = "passportno";
$tdataadmin_members[".masterListFields"][] = "passport_expiry";
$tdataadmin_members[".masterListFields"][] = "visa_no";
$tdataadmin_members[".masterListFields"][] = "visa_expiry";
$tdataadmin_members[".masterListFields"][] = "division_id";
$tdataadmin_members[".masterListFields"][] = "doj";
$tdataadmin_members[".masterListFields"][] = "dor";
$tdataadmin_members[".masterListFields"][] = "status_id";
$tdataadmin_members[".masterListFields"][] = "experence";
$tdataadmin_members[".masterListFields"][] = "nationality";
$tdataadmin_members[".masterListFields"][] = "qulification";
$tdataadmin_members[".masterListFields"][] = "skillset";
$tdataadmin_members[".masterListFields"][] = "cid";

$tdataadmin_members[".inlineAddFields"] = array();

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "ename";
$tdataadmin_members[".editFields"][] = "emppic";
$tdataadmin_members[".editFields"][] = "designation";
$tdataadmin_members[".editFields"][] = "whtasapp";
$tdataadmin_members[".editFields"][] = "localnum";
$tdataadmin_members[".editFields"][] = "skype";
$tdataadmin_members[".editFields"][] = "dropbox";
$tdataadmin_members[".editFields"][] = "email";
$tdataadmin_members[".editFields"][] = "dob";
$tdataadmin_members[".editFields"][] = "passportno";
$tdataadmin_members[".editFields"][] = "passport_expiry";
$tdataadmin_members[".editFields"][] = "visa_no";
$tdataadmin_members[".editFields"][] = "visa_expiry";
$tdataadmin_members[".editFields"][] = "division_id";
$tdataadmin_members[".editFields"][] = "doj";
$tdataadmin_members[".editFields"][] = "dor";
$tdataadmin_members[".editFields"][] = "status_id";
$tdataadmin_members[".editFields"][] = "experence";
$tdataadmin_members[".editFields"][] = "nationality";
$tdataadmin_members[".editFields"][] = "qulification";
$tdataadmin_members[".editFields"][] = "skillset";
$tdataadmin_members[".editFields"][] = "cid";

$tdataadmin_members[".inlineEditFields"] = array();

$tdataadmin_members[".updateSelectedFields"] = array();
$tdataadmin_members[".updateSelectedFields"][] = "ename";
$tdataadmin_members[".updateSelectedFields"][] = "emppic";
$tdataadmin_members[".updateSelectedFields"][] = "designation";
$tdataadmin_members[".updateSelectedFields"][] = "whtasapp";
$tdataadmin_members[".updateSelectedFields"][] = "localnum";
$tdataadmin_members[".updateSelectedFields"][] = "skype";
$tdataadmin_members[".updateSelectedFields"][] = "dropbox";
$tdataadmin_members[".updateSelectedFields"][] = "email";
$tdataadmin_members[".updateSelectedFields"][] = "dob";
$tdataadmin_members[".updateSelectedFields"][] = "passportno";
$tdataadmin_members[".updateSelectedFields"][] = "passport_expiry";
$tdataadmin_members[".updateSelectedFields"][] = "visa_no";
$tdataadmin_members[".updateSelectedFields"][] = "visa_expiry";
$tdataadmin_members[".updateSelectedFields"][] = "division_id";
$tdataadmin_members[".updateSelectedFields"][] = "doj";
$tdataadmin_members[".updateSelectedFields"][] = "dor";
$tdataadmin_members[".updateSelectedFields"][] = "status_id";
$tdataadmin_members[".updateSelectedFields"][] = "experence";
$tdataadmin_members[".updateSelectedFields"][] = "nationality";
$tdataadmin_members[".updateSelectedFields"][] = "qulification";
$tdataadmin_members[".updateSelectedFields"][] = "skillset";
$tdataadmin_members[".updateSelectedFields"][] = "cid";


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "eid";
$tdataadmin_members[".exportFields"][] = "ename";
$tdataadmin_members[".exportFields"][] = "designation";
$tdataadmin_members[".exportFields"][] = "whtasapp";
$tdataadmin_members[".exportFields"][] = "localnum";
$tdataadmin_members[".exportFields"][] = "skype";
$tdataadmin_members[".exportFields"][] = "dropbox";
$tdataadmin_members[".exportFields"][] = "email";
$tdataadmin_members[".exportFields"][] = "dob";
$tdataadmin_members[".exportFields"][] = "passportno";
$tdataadmin_members[".exportFields"][] = "passport_expiry";
$tdataadmin_members[".exportFields"][] = "visa_no";
$tdataadmin_members[".exportFields"][] = "visa_expiry";
$tdataadmin_members[".exportFields"][] = "division_id";
$tdataadmin_members[".exportFields"][] = "doj";
$tdataadmin_members[".exportFields"][] = "dor";
$tdataadmin_members[".exportFields"][] = "status_id";
$tdataadmin_members[".exportFields"][] = "experence";
$tdataadmin_members[".exportFields"][] = "nationality";
$tdataadmin_members[".exportFields"][] = "qulification";
$tdataadmin_members[".exportFields"][] = "skillset";
$tdataadmin_members[".exportFields"][] = "cid";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "eid";
$tdataadmin_members[".importFields"][] = "ename";
$tdataadmin_members[".importFields"][] = "designation";
$tdataadmin_members[".importFields"][] = "whtasapp";
$tdataadmin_members[".importFields"][] = "localnum";
$tdataadmin_members[".importFields"][] = "skype";
$tdataadmin_members[".importFields"][] = "dropbox";
$tdataadmin_members[".importFields"][] = "email";
$tdataadmin_members[".importFields"][] = "dob";
$tdataadmin_members[".importFields"][] = "passportno";
$tdataadmin_members[".importFields"][] = "passport_expiry";
$tdataadmin_members[".importFields"][] = "visa_no";
$tdataadmin_members[".importFields"][] = "visa_expiry";
$tdataadmin_members[".importFields"][] = "division_id";
$tdataadmin_members[".importFields"][] = "doj";
$tdataadmin_members[".importFields"][] = "dor";
$tdataadmin_members[".importFields"][] = "status_id";
$tdataadmin_members[".importFields"][] = "experence";
$tdataadmin_members[".importFields"][] = "nationality";
$tdataadmin_members[".importFields"][] = "qulification";
$tdataadmin_members[".importFields"][] = "skillset";
$tdataadmin_members[".importFields"][] = "cid";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "eid";
$tdataadmin_members[".printFields"][] = "ename";
$tdataadmin_members[".printFields"][] = "emppic";
$tdataadmin_members[".printFields"][] = "designation";
$tdataadmin_members[".printFields"][] = "whtasapp";
$tdataadmin_members[".printFields"][] = "localnum";
$tdataadmin_members[".printFields"][] = "skype";
$tdataadmin_members[".printFields"][] = "dropbox";
$tdataadmin_members[".printFields"][] = "email";
$tdataadmin_members[".printFields"][] = "dob";
$tdataadmin_members[".printFields"][] = "passportno";
$tdataadmin_members[".printFields"][] = "passport_expiry";
$tdataadmin_members[".printFields"][] = "visa_no";
$tdataadmin_members[".printFields"][] = "visa_expiry";
$tdataadmin_members[".printFields"][] = "division_id";
$tdataadmin_members[".printFields"][] = "doj";
$tdataadmin_members[".printFields"][] = "dor";
$tdataadmin_members[".printFields"][] = "status_id";
$tdataadmin_members[".printFields"][] = "experence";
$tdataadmin_members[".printFields"][] = "nationality";
$tdataadmin_members[".printFields"][] = "qulification";
$tdataadmin_members[".printFields"][] = "skillset";
$tdataadmin_members[".printFields"][] = "cid";


//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","eid");
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




	$tdataadmin_members["eid"] = $fdata;
//	ename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ename";
	$fdata["GoodName"] = "ename";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","ename");
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




	$tdataadmin_members["ename"] = $fdata;
//	emppic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "emppic";
	$fdata["GoodName"] = "emppic";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","emppic");
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








	$tdataadmin_members["emppic"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","designation");
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




	$tdataadmin_members["designation"] = $fdata;
//	whtasapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "whtasapp";
	$fdata["GoodName"] = "whtasapp";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","whtasapp");
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




	$tdataadmin_members["whtasapp"] = $fdata;
//	localnum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "localnum";
	$fdata["GoodName"] = "localnum";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","localnum");
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




	$tdataadmin_members["localnum"] = $fdata;
//	skype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "skype";
	$fdata["GoodName"] = "skype";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","skype");
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




	$tdataadmin_members["skype"] = $fdata;
//	dropbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dropbox";
	$fdata["GoodName"] = "dropbox";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","dropbox");
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




	$tdataadmin_members["dropbox"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","email");
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




	$tdataadmin_members["email"] = $fdata;
//	dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dob";
	$fdata["GoodName"] = "dob";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","dob");
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




	$tdataadmin_members["dob"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","password");
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








	$tdataadmin_members["password"] = $fdata;
//	passportno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "passportno";
	$fdata["GoodName"] = "passportno";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","passportno");
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




	$tdataadmin_members["passportno"] = $fdata;
//	passport_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "passport_expiry";
	$fdata["GoodName"] = "passport_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","passport_expiry");
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




	$tdataadmin_members["passport_expiry"] = $fdata;
//	visa_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "visa_no";
	$fdata["GoodName"] = "visa_no";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","visa_no");
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




	$tdataadmin_members["visa_no"] = $fdata;
//	visa_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "visa_expiry";
	$fdata["GoodName"] = "visa_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","visa_expiry");
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




	$tdataadmin_members["visa_expiry"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","division_id");
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




	$tdataadmin_members["division_id"] = $fdata;
//	doj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "doj";
	$fdata["GoodName"] = "doj";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","doj");
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




	$tdataadmin_members["doj"] = $fdata;
//	dor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dor";
	$fdata["GoodName"] = "dor";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","dor");
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




	$tdataadmin_members["dor"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","status_id");
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




	$tdataadmin_members["status_id"] = $fdata;
//	experence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "experence";
	$fdata["GoodName"] = "experence";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","experence");
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




	$tdataadmin_members["experence"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","nationality");
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




	$tdataadmin_members["nationality"] = $fdata;
//	qulification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "qulification";
	$fdata["GoodName"] = "qulification";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","qulification");
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




	$tdataadmin_members["qulification"] = $fdata;
//	skillset
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "skillset";
	$fdata["GoodName"] = "skillset";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","skillset");
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




	$tdataadmin_members["skillset"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_members","cid");
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




	$tdataadmin_members["cid"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid";
$proto0["m_strFrom"] = "FROM employees";
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
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "ename";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "emppic",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "emppic";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "designation";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "whtasapp",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "whtasapp";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "localnum",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "localnum";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "skype";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dropbox",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "dropbox";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "email";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dob",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto24["m_sql"] = "dob";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto26["m_sql"] = "password";
$proto26["m_srcTableName"] = "admin_members";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "passportno",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto28["m_sql"] = "passportno";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "passport_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto30["m_sql"] = "passport_expiry";
$proto30["m_srcTableName"] = "admin_members";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_no",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto32["m_sql"] = "visa_no";
$proto32["m_srcTableName"] = "admin_members";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto34["m_sql"] = "visa_expiry";
$proto34["m_srcTableName"] = "admin_members";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto36["m_sql"] = "division_id";
$proto36["m_srcTableName"] = "admin_members";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "doj",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto38["m_sql"] = "doj";
$proto38["m_srcTableName"] = "admin_members";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "dor",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto40["m_sql"] = "dor";
$proto40["m_srcTableName"] = "admin_members";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto42["m_sql"] = "status_id";
$proto42["m_srcTableName"] = "admin_members";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "experence",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto44["m_sql"] = "experence";
$proto44["m_srcTableName"] = "admin_members";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto46["m_sql"] = "nationality";
$proto46["m_srcTableName"] = "admin_members";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "qulification",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto48["m_sql"] = "qulification";
$proto48["m_srcTableName"] = "admin_members";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "skillset",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto50["m_sql"] = "skillset";
$proto50["m_srcTableName"] = "admin_members";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_members"
));

$proto52["m_sql"] = "cid";
$proto52["m_srcTableName"] = "admin_members";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "employees";
$proto55["m_srcTableName"] = "admin_members";
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
$proto54["m_srcTableName"] = "admin_members";
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
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

																								

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>