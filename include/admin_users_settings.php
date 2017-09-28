<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 80;
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "";
	$tdataadmin_users[".OriginalTable"] = "employees";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();
$placeHoldersadmin_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$placeHoldersadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	$fieldLabelsadmin_users["English"]["eid"] = "Eid";
	$fieldToolTipsadmin_users["English"]["eid"] = "";
	$placeHoldersadmin_users["English"]["eid"] = "";
	$fieldLabelsadmin_users["English"]["ename"] = "Ename";
	$fieldToolTipsadmin_users["English"]["ename"] = "";
	$placeHoldersadmin_users["English"]["ename"] = "";
	$fieldLabelsadmin_users["English"]["designation"] = "Designation";
	$fieldToolTipsadmin_users["English"]["designation"] = "";
	$placeHoldersadmin_users["English"]["designation"] = "";
	$fieldLabelsadmin_users["English"]["whtasapp"] = "Whtasapp";
	$fieldToolTipsadmin_users["English"]["whtasapp"] = "";
	$placeHoldersadmin_users["English"]["whtasapp"] = "";
	$fieldLabelsadmin_users["English"]["localnum"] = "Localnum";
	$fieldToolTipsadmin_users["English"]["localnum"] = "";
	$placeHoldersadmin_users["English"]["localnum"] = "";
	$fieldLabelsadmin_users["English"]["skype"] = "Skype";
	$fieldToolTipsadmin_users["English"]["skype"] = "";
	$placeHoldersadmin_users["English"]["skype"] = "";
	$fieldLabelsadmin_users["English"]["dropbox"] = "Dropbox";
	$fieldToolTipsadmin_users["English"]["dropbox"] = "";
	$placeHoldersadmin_users["English"]["dropbox"] = "";
	$fieldLabelsadmin_users["English"]["email"] = "Email";
	$fieldToolTipsadmin_users["English"]["email"] = "";
	$placeHoldersadmin_users["English"]["email"] = "";
	$fieldLabelsadmin_users["English"]["dob"] = "Dob";
	$fieldToolTipsadmin_users["English"]["dob"] = "";
	$placeHoldersadmin_users["English"]["dob"] = "";
	$fieldLabelsadmin_users["English"]["password"] = "Password";
	$fieldToolTipsadmin_users["English"]["password"] = "";
	$placeHoldersadmin_users["English"]["password"] = "";
	$fieldLabelsadmin_users["English"]["passportno"] = "Passportno";
	$fieldToolTipsadmin_users["English"]["passportno"] = "";
	$placeHoldersadmin_users["English"]["passportno"] = "";
	$fieldLabelsadmin_users["English"]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsadmin_users["English"]["passport_expiry"] = "";
	$placeHoldersadmin_users["English"]["passport_expiry"] = "";
	$fieldLabelsadmin_users["English"]["visa_no"] = "Visa No";
	$fieldToolTipsadmin_users["English"]["visa_no"] = "";
	$placeHoldersadmin_users["English"]["visa_no"] = "";
	$fieldLabelsadmin_users["English"]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsadmin_users["English"]["visa_expiry"] = "";
	$placeHoldersadmin_users["English"]["visa_expiry"] = "";
	$fieldLabelsadmin_users["English"]["division_id"] = "Division Id";
	$fieldToolTipsadmin_users["English"]["division_id"] = "";
	$placeHoldersadmin_users["English"]["division_id"] = "";
	$fieldLabelsadmin_users["English"]["doj"] = "Doj";
	$fieldToolTipsadmin_users["English"]["doj"] = "";
	$placeHoldersadmin_users["English"]["doj"] = "";
	$fieldLabelsadmin_users["English"]["dor"] = "Dor";
	$fieldToolTipsadmin_users["English"]["dor"] = "";
	$placeHoldersadmin_users["English"]["dor"] = "";
	$fieldLabelsadmin_users["English"]["status_id"] = "Status Id";
	$fieldToolTipsadmin_users["English"]["status_id"] = "";
	$placeHoldersadmin_users["English"]["status_id"] = "";
	$fieldLabelsadmin_users["English"]["emppic"] = "Emppic";
	$fieldToolTipsadmin_users["English"]["emppic"] = "";
	$placeHoldersadmin_users["English"]["emppic"] = "";
	$fieldLabelsadmin_users["English"]["experence"] = "Experence";
	$fieldToolTipsadmin_users["English"]["experence"] = "";
	$placeHoldersadmin_users["English"]["experence"] = "";
	$fieldLabelsadmin_users["English"]["nationality"] = "Nationality";
	$fieldToolTipsadmin_users["English"]["nationality"] = "";
	$placeHoldersadmin_users["English"]["nationality"] = "";
	$fieldLabelsadmin_users["English"]["qulification"] = "Qulification";
	$fieldToolTipsadmin_users["English"]["qulification"] = "";
	$placeHoldersadmin_users["English"]["qulification"] = "";
	$fieldLabelsadmin_users["English"]["skillset"] = "Skillset";
	$fieldToolTipsadmin_users["English"]["skillset"] = "";
	$placeHoldersadmin_users["English"]["skillset"] = "";
	$fieldLabelsadmin_users["English"]["cid"] = "Cid";
	$fieldToolTipsadmin_users["English"]["cid"] = "";
	$placeHoldersadmin_users["English"]["cid"] = "";
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$placeHoldersadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	$fieldLabelsadmin_users[""]["eid"] = "Eid";
	$fieldToolTipsadmin_users[""]["eid"] = "";
	$placeHoldersadmin_users[""]["eid"] = "";
	$fieldLabelsadmin_users[""]["ename"] = "Ename";
	$fieldToolTipsadmin_users[""]["ename"] = "";
	$placeHoldersadmin_users[""]["ename"] = "";
	$fieldLabelsadmin_users[""]["designation"] = "Designation";
	$fieldToolTipsadmin_users[""]["designation"] = "";
	$placeHoldersadmin_users[""]["designation"] = "";
	$fieldLabelsadmin_users[""]["whtasapp"] = "Whtasapp";
	$fieldToolTipsadmin_users[""]["whtasapp"] = "";
	$placeHoldersadmin_users[""]["whtasapp"] = "";
	$fieldLabelsadmin_users[""]["localnum"] = "Localnum";
	$fieldToolTipsadmin_users[""]["localnum"] = "";
	$placeHoldersadmin_users[""]["localnum"] = "";
	$fieldLabelsadmin_users[""]["skype"] = "Skype";
	$fieldToolTipsadmin_users[""]["skype"] = "";
	$placeHoldersadmin_users[""]["skype"] = "";
	$fieldLabelsadmin_users[""]["dropbox"] = "Dropbox";
	$fieldToolTipsadmin_users[""]["dropbox"] = "";
	$placeHoldersadmin_users[""]["dropbox"] = "";
	$fieldLabelsadmin_users[""]["email"] = "Email";
	$fieldToolTipsadmin_users[""]["email"] = "";
	$placeHoldersadmin_users[""]["email"] = "";
	$fieldLabelsadmin_users[""]["dob"] = "Dob";
	$fieldToolTipsadmin_users[""]["dob"] = "";
	$placeHoldersadmin_users[""]["dob"] = "";
	$fieldLabelsadmin_users[""]["password"] = "Password";
	$fieldToolTipsadmin_users[""]["password"] = "";
	$placeHoldersadmin_users[""]["password"] = "";
	$fieldLabelsadmin_users[""]["passportno"] = "Passportno";
	$fieldToolTipsadmin_users[""]["passportno"] = "";
	$placeHoldersadmin_users[""]["passportno"] = "";
	$fieldLabelsadmin_users[""]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsadmin_users[""]["passport_expiry"] = "";
	$placeHoldersadmin_users[""]["passport_expiry"] = "";
	$fieldLabelsadmin_users[""]["visa_no"] = "Visa No";
	$fieldToolTipsadmin_users[""]["visa_no"] = "";
	$placeHoldersadmin_users[""]["visa_no"] = "";
	$fieldLabelsadmin_users[""]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsadmin_users[""]["visa_expiry"] = "";
	$placeHoldersadmin_users[""]["visa_expiry"] = "";
	$fieldLabelsadmin_users[""]["division_id"] = "Division Id";
	$fieldToolTipsadmin_users[""]["division_id"] = "";
	$placeHoldersadmin_users[""]["division_id"] = "";
	$fieldLabelsadmin_users[""]["doj"] = "Doj";
	$fieldToolTipsadmin_users[""]["doj"] = "";
	$placeHoldersadmin_users[""]["doj"] = "";
	$fieldLabelsadmin_users[""]["dor"] = "Dor";
	$fieldToolTipsadmin_users[""]["dor"] = "";
	$placeHoldersadmin_users[""]["dor"] = "";
	$fieldLabelsadmin_users[""]["status_id"] = "Status Id";
	$fieldToolTipsadmin_users[""]["status_id"] = "";
	$placeHoldersadmin_users[""]["status_id"] = "";
	$fieldLabelsadmin_users[""]["emppic"] = "Emppic";
	$fieldToolTipsadmin_users[""]["emppic"] = "";
	$placeHoldersadmin_users[""]["emppic"] = "";
	$fieldLabelsadmin_users[""]["experence"] = "Experence";
	$fieldToolTipsadmin_users[""]["experence"] = "";
	$placeHoldersadmin_users[""]["experence"] = "";
	$fieldLabelsadmin_users[""]["nationality"] = "Nationality";
	$fieldToolTipsadmin_users[""]["nationality"] = "";
	$placeHoldersadmin_users[""]["nationality"] = "";
	$fieldLabelsadmin_users[""]["qulification"] = "Qulification";
	$fieldToolTipsadmin_users[""]["qulification"] = "";
	$placeHoldersadmin_users[""]["qulification"] = "";
	$fieldLabelsadmin_users[""]["skillset"] = "Skillset";
	$fieldToolTipsadmin_users[""]["skillset"] = "";
	$placeHoldersadmin_users[""]["skillset"] = "";
	$fieldLabelsadmin_users[""]["cid"] = "Cid";
	$fieldToolTipsadmin_users[""]["cid"] = "";
	$placeHoldersadmin_users[""]["cid"] = "";
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowPrint"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".entityType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "employees";

	



$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();

$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = true;

	$tdataadmin_users[".locking"] = true;

$tdataadmin_users[".edit"] = true;
$tdataadmin_users[".afterEditAction"] = 1;
$tdataadmin_users[".closePopupAfterEdit"] = 1;
$tdataadmin_users[".afterEditActionDetTable"] = "";

$tdataadmin_users[".add"] = true;
$tdataadmin_users[".afterAddAction"] = 1;
$tdataadmin_users[".closePopupAfterAdd"] = 1;
$tdataadmin_users[".afterAddActionDetTable"] = "";

$tdataadmin_users[".list"] = true;



$tdataadmin_users[".reorderRecordsByHeader"] = true;


$tdataadmin_users[".exportFormatting"] = 2;
$tdataadmin_users[".exportDelimiter"] = ",";
		


$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_users[".searchSaving"] = false;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;

$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;



			

$tdataadmin_users[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_users[".buttonsAdded"] = false;

$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;



$tdataadmin_users[".badgeColor"] = "E8926F";


$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "eid";
	$tdataadmin_users[".allSearchFields"][] = "ename";
	$tdataadmin_users[".allSearchFields"][] = "designation";
	$tdataadmin_users[".allSearchFields"][] = "whtasapp";
	$tdataadmin_users[".allSearchFields"][] = "localnum";
	$tdataadmin_users[".allSearchFields"][] = "skype";
	$tdataadmin_users[".allSearchFields"][] = "dropbox";
	$tdataadmin_users[".allSearchFields"][] = "email";
	$tdataadmin_users[".allSearchFields"][] = "dob";
	$tdataadmin_users[".allSearchFields"][] = "passportno";
	$tdataadmin_users[".allSearchFields"][] = "passport_expiry";
	$tdataadmin_users[".allSearchFields"][] = "visa_no";
	$tdataadmin_users[".allSearchFields"][] = "visa_expiry";
	$tdataadmin_users[".allSearchFields"][] = "division_id";
	$tdataadmin_users[".allSearchFields"][] = "doj";
	$tdataadmin_users[".allSearchFields"][] = "dor";
	$tdataadmin_users[".allSearchFields"][] = "status_id";
	$tdataadmin_users[".allSearchFields"][] = "experence";
	$tdataadmin_users[".allSearchFields"][] = "nationality";
	$tdataadmin_users[".allSearchFields"][] = "qulification";
	$tdataadmin_users[".allSearchFields"][] = "skillset";
	$tdataadmin_users[".allSearchFields"][] = "cid";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "eid";
$tdataadmin_users[".googleLikeFields"][] = "ename";
$tdataadmin_users[".googleLikeFields"][] = "emppic";
$tdataadmin_users[".googleLikeFields"][] = "designation";
$tdataadmin_users[".googleLikeFields"][] = "whtasapp";
$tdataadmin_users[".googleLikeFields"][] = "localnum";
$tdataadmin_users[".googleLikeFields"][] = "skype";
$tdataadmin_users[".googleLikeFields"][] = "dropbox";
$tdataadmin_users[".googleLikeFields"][] = "email";
$tdataadmin_users[".googleLikeFields"][] = "dob";
$tdataadmin_users[".googleLikeFields"][] = "password";
$tdataadmin_users[".googleLikeFields"][] = "passportno";
$tdataadmin_users[".googleLikeFields"][] = "passport_expiry";
$tdataadmin_users[".googleLikeFields"][] = "visa_no";
$tdataadmin_users[".googleLikeFields"][] = "visa_expiry";
$tdataadmin_users[".googleLikeFields"][] = "division_id";
$tdataadmin_users[".googleLikeFields"][] = "doj";
$tdataadmin_users[".googleLikeFields"][] = "dor";
$tdataadmin_users[".googleLikeFields"][] = "status_id";
$tdataadmin_users[".googleLikeFields"][] = "experence";
$tdataadmin_users[".googleLikeFields"][] = "nationality";
$tdataadmin_users[".googleLikeFields"][] = "qulification";
$tdataadmin_users[".googleLikeFields"][] = "skillset";
$tdataadmin_users[".googleLikeFields"][] = "cid";


$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "eid";
$tdataadmin_users[".advSearchFields"][] = "ename";
$tdataadmin_users[".advSearchFields"][] = "designation";
$tdataadmin_users[".advSearchFields"][] = "whtasapp";
$tdataadmin_users[".advSearchFields"][] = "localnum";
$tdataadmin_users[".advSearchFields"][] = "skype";
$tdataadmin_users[".advSearchFields"][] = "dropbox";
$tdataadmin_users[".advSearchFields"][] = "email";
$tdataadmin_users[".advSearchFields"][] = "dob";
$tdataadmin_users[".advSearchFields"][] = "passportno";
$tdataadmin_users[".advSearchFields"][] = "passport_expiry";
$tdataadmin_users[".advSearchFields"][] = "visa_no";
$tdataadmin_users[".advSearchFields"][] = "visa_expiry";
$tdataadmin_users[".advSearchFields"][] = "division_id";
$tdataadmin_users[".advSearchFields"][] = "doj";
$tdataadmin_users[".advSearchFields"][] = "dor";
$tdataadmin_users[".advSearchFields"][] = "status_id";
$tdataadmin_users[".advSearchFields"][] = "experence";
$tdataadmin_users[".advSearchFields"][] = "nationality";
$tdataadmin_users[".advSearchFields"][] = "qulification";
$tdataadmin_users[".advSearchFields"][] = "skillset";
$tdataadmin_users[".advSearchFields"][] = "cid";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_users[".geocodingEnabled"] = false;





$tdataadmin_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid";
$tdataadmin_users[".sqlFrom"] = "FROM employees";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "eid";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "eid";
$tdataadmin_users[".listFields"][] = "ename";
$tdataadmin_users[".listFields"][] = "emppic";
$tdataadmin_users[".listFields"][] = "designation";
$tdataadmin_users[".listFields"][] = "whtasapp";
$tdataadmin_users[".listFields"][] = "localnum";
$tdataadmin_users[".listFields"][] = "skype";
$tdataadmin_users[".listFields"][] = "dropbox";
$tdataadmin_users[".listFields"][] = "email";
$tdataadmin_users[".listFields"][] = "dob";
$tdataadmin_users[".listFields"][] = "passportno";
$tdataadmin_users[".listFields"][] = "passport_expiry";
$tdataadmin_users[".listFields"][] = "visa_no";
$tdataadmin_users[".listFields"][] = "visa_expiry";
$tdataadmin_users[".listFields"][] = "division_id";
$tdataadmin_users[".listFields"][] = "doj";
$tdataadmin_users[".listFields"][] = "dor";
$tdataadmin_users[".listFields"][] = "status_id";
$tdataadmin_users[".listFields"][] = "experence";
$tdataadmin_users[".listFields"][] = "nationality";
$tdataadmin_users[".listFields"][] = "qulification";
$tdataadmin_users[".listFields"][] = "skillset";
$tdataadmin_users[".listFields"][] = "cid";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();
$tdataadmin_users[".viewFields"][] = "eid";
$tdataadmin_users[".viewFields"][] = "ename";
$tdataadmin_users[".viewFields"][] = "emppic";
$tdataadmin_users[".viewFields"][] = "designation";
$tdataadmin_users[".viewFields"][] = "whtasapp";
$tdataadmin_users[".viewFields"][] = "localnum";
$tdataadmin_users[".viewFields"][] = "skype";
$tdataadmin_users[".viewFields"][] = "dropbox";
$tdataadmin_users[".viewFields"][] = "email";
$tdataadmin_users[".viewFields"][] = "dob";
$tdataadmin_users[".viewFields"][] = "passportno";
$tdataadmin_users[".viewFields"][] = "passport_expiry";
$tdataadmin_users[".viewFields"][] = "visa_no";
$tdataadmin_users[".viewFields"][] = "visa_expiry";
$tdataadmin_users[".viewFields"][] = "division_id";
$tdataadmin_users[".viewFields"][] = "doj";
$tdataadmin_users[".viewFields"][] = "dor";
$tdataadmin_users[".viewFields"][] = "status_id";
$tdataadmin_users[".viewFields"][] = "experence";
$tdataadmin_users[".viewFields"][] = "nationality";
$tdataadmin_users[".viewFields"][] = "qulification";
$tdataadmin_users[".viewFields"][] = "skillset";
$tdataadmin_users[".viewFields"][] = "cid";

$tdataadmin_users[".addFields"] = array();
$tdataadmin_users[".addFields"][] = "ename";
$tdataadmin_users[".addFields"][] = "emppic";
$tdataadmin_users[".addFields"][] = "designation";
$tdataadmin_users[".addFields"][] = "whtasapp";
$tdataadmin_users[".addFields"][] = "localnum";
$tdataadmin_users[".addFields"][] = "skype";
$tdataadmin_users[".addFields"][] = "dropbox";
$tdataadmin_users[".addFields"][] = "dob";
$tdataadmin_users[".addFields"][] = "passportno";
$tdataadmin_users[".addFields"][] = "passport_expiry";
$tdataadmin_users[".addFields"][] = "visa_no";
$tdataadmin_users[".addFields"][] = "visa_expiry";
$tdataadmin_users[".addFields"][] = "division_id";
$tdataadmin_users[".addFields"][] = "doj";
$tdataadmin_users[".addFields"][] = "dor";
$tdataadmin_users[".addFields"][] = "status_id";
$tdataadmin_users[".addFields"][] = "experence";
$tdataadmin_users[".addFields"][] = "nationality";
$tdataadmin_users[".addFields"][] = "qulification";
$tdataadmin_users[".addFields"][] = "skillset";

$tdataadmin_users[".masterListFields"] = array();
$tdataadmin_users[".masterListFields"][] = "eid";
$tdataadmin_users[".masterListFields"][] = "ename";
$tdataadmin_users[".masterListFields"][] = "emppic";
$tdataadmin_users[".masterListFields"][] = "designation";
$tdataadmin_users[".masterListFields"][] = "whtasapp";
$tdataadmin_users[".masterListFields"][] = "localnum";
$tdataadmin_users[".masterListFields"][] = "skype";
$tdataadmin_users[".masterListFields"][] = "dropbox";
$tdataadmin_users[".masterListFields"][] = "email";
$tdataadmin_users[".masterListFields"][] = "dob";
$tdataadmin_users[".masterListFields"][] = "passportno";
$tdataadmin_users[".masterListFields"][] = "passport_expiry";
$tdataadmin_users[".masterListFields"][] = "visa_no";
$tdataadmin_users[".masterListFields"][] = "visa_expiry";
$tdataadmin_users[".masterListFields"][] = "division_id";
$tdataadmin_users[".masterListFields"][] = "doj";
$tdataadmin_users[".masterListFields"][] = "dor";
$tdataadmin_users[".masterListFields"][] = "status_id";
$tdataadmin_users[".masterListFields"][] = "experence";
$tdataadmin_users[".masterListFields"][] = "nationality";
$tdataadmin_users[".masterListFields"][] = "qulification";
$tdataadmin_users[".masterListFields"][] = "skillset";
$tdataadmin_users[".masterListFields"][] = "cid";

$tdataadmin_users[".inlineAddFields"] = array();

$tdataadmin_users[".editFields"] = array();
$tdataadmin_users[".editFields"][] = "ename";
$tdataadmin_users[".editFields"][] = "emppic";
$tdataadmin_users[".editFields"][] = "designation";
$tdataadmin_users[".editFields"][] = "whtasapp";
$tdataadmin_users[".editFields"][] = "localnum";
$tdataadmin_users[".editFields"][] = "skype";
$tdataadmin_users[".editFields"][] = "dropbox";
$tdataadmin_users[".editFields"][] = "email";
$tdataadmin_users[".editFields"][] = "dob";
$tdataadmin_users[".editFields"][] = "passportno";
$tdataadmin_users[".editFields"][] = "passport_expiry";
$tdataadmin_users[".editFields"][] = "visa_no";
$tdataadmin_users[".editFields"][] = "visa_expiry";
$tdataadmin_users[".editFields"][] = "division_id";
$tdataadmin_users[".editFields"][] = "doj";
$tdataadmin_users[".editFields"][] = "dor";
$tdataadmin_users[".editFields"][] = "status_id";
$tdataadmin_users[".editFields"][] = "experence";
$tdataadmin_users[".editFields"][] = "nationality";
$tdataadmin_users[".editFields"][] = "qulification";
$tdataadmin_users[".editFields"][] = "skillset";
$tdataadmin_users[".editFields"][] = "cid";

$tdataadmin_users[".inlineEditFields"] = array();

$tdataadmin_users[".updateSelectedFields"] = array();
$tdataadmin_users[".updateSelectedFields"][] = "ename";
$tdataadmin_users[".updateSelectedFields"][] = "emppic";
$tdataadmin_users[".updateSelectedFields"][] = "designation";
$tdataadmin_users[".updateSelectedFields"][] = "whtasapp";
$tdataadmin_users[".updateSelectedFields"][] = "localnum";
$tdataadmin_users[".updateSelectedFields"][] = "skype";
$tdataadmin_users[".updateSelectedFields"][] = "dropbox";
$tdataadmin_users[".updateSelectedFields"][] = "email";
$tdataadmin_users[".updateSelectedFields"][] = "dob";
$tdataadmin_users[".updateSelectedFields"][] = "passportno";
$tdataadmin_users[".updateSelectedFields"][] = "passport_expiry";
$tdataadmin_users[".updateSelectedFields"][] = "visa_no";
$tdataadmin_users[".updateSelectedFields"][] = "visa_expiry";
$tdataadmin_users[".updateSelectedFields"][] = "division_id";
$tdataadmin_users[".updateSelectedFields"][] = "doj";
$tdataadmin_users[".updateSelectedFields"][] = "dor";
$tdataadmin_users[".updateSelectedFields"][] = "status_id";
$tdataadmin_users[".updateSelectedFields"][] = "experence";
$tdataadmin_users[".updateSelectedFields"][] = "nationality";
$tdataadmin_users[".updateSelectedFields"][] = "qulification";
$tdataadmin_users[".updateSelectedFields"][] = "skillset";
$tdataadmin_users[".updateSelectedFields"][] = "cid";


$tdataadmin_users[".exportFields"] = array();
$tdataadmin_users[".exportFields"][] = "eid";
$tdataadmin_users[".exportFields"][] = "ename";
$tdataadmin_users[".exportFields"][] = "designation";
$tdataadmin_users[".exportFields"][] = "whtasapp";
$tdataadmin_users[".exportFields"][] = "localnum";
$tdataadmin_users[".exportFields"][] = "skype";
$tdataadmin_users[".exportFields"][] = "dropbox";
$tdataadmin_users[".exportFields"][] = "email";
$tdataadmin_users[".exportFields"][] = "dob";
$tdataadmin_users[".exportFields"][] = "passportno";
$tdataadmin_users[".exportFields"][] = "passport_expiry";
$tdataadmin_users[".exportFields"][] = "visa_no";
$tdataadmin_users[".exportFields"][] = "visa_expiry";
$tdataadmin_users[".exportFields"][] = "division_id";
$tdataadmin_users[".exportFields"][] = "doj";
$tdataadmin_users[".exportFields"][] = "dor";
$tdataadmin_users[".exportFields"][] = "status_id";
$tdataadmin_users[".exportFields"][] = "experence";
$tdataadmin_users[".exportFields"][] = "nationality";
$tdataadmin_users[".exportFields"][] = "qulification";
$tdataadmin_users[".exportFields"][] = "skillset";
$tdataadmin_users[".exportFields"][] = "cid";

$tdataadmin_users[".importFields"] = array();
$tdataadmin_users[".importFields"][] = "eid";
$tdataadmin_users[".importFields"][] = "ename";
$tdataadmin_users[".importFields"][] = "designation";
$tdataadmin_users[".importFields"][] = "whtasapp";
$tdataadmin_users[".importFields"][] = "localnum";
$tdataadmin_users[".importFields"][] = "skype";
$tdataadmin_users[".importFields"][] = "dropbox";
$tdataadmin_users[".importFields"][] = "email";
$tdataadmin_users[".importFields"][] = "dob";
$tdataadmin_users[".importFields"][] = "passportno";
$tdataadmin_users[".importFields"][] = "passport_expiry";
$tdataadmin_users[".importFields"][] = "visa_no";
$tdataadmin_users[".importFields"][] = "visa_expiry";
$tdataadmin_users[".importFields"][] = "division_id";
$tdataadmin_users[".importFields"][] = "doj";
$tdataadmin_users[".importFields"][] = "dor";
$tdataadmin_users[".importFields"][] = "status_id";
$tdataadmin_users[".importFields"][] = "experence";
$tdataadmin_users[".importFields"][] = "nationality";
$tdataadmin_users[".importFields"][] = "qulification";
$tdataadmin_users[".importFields"][] = "skillset";
$tdataadmin_users[".importFields"][] = "cid";

$tdataadmin_users[".printFields"] = array();
$tdataadmin_users[".printFields"][] = "eid";
$tdataadmin_users[".printFields"][] = "ename";
$tdataadmin_users[".printFields"][] = "emppic";
$tdataadmin_users[".printFields"][] = "designation";
$tdataadmin_users[".printFields"][] = "whtasapp";
$tdataadmin_users[".printFields"][] = "localnum";
$tdataadmin_users[".printFields"][] = "skype";
$tdataadmin_users[".printFields"][] = "dropbox";
$tdataadmin_users[".printFields"][] = "email";
$tdataadmin_users[".printFields"][] = "dob";
$tdataadmin_users[".printFields"][] = "passportno";
$tdataadmin_users[".printFields"][] = "passport_expiry";
$tdataadmin_users[".printFields"][] = "visa_no";
$tdataadmin_users[".printFields"][] = "visa_expiry";
$tdataadmin_users[".printFields"][] = "division_id";
$tdataadmin_users[".printFields"][] = "doj";
$tdataadmin_users[".printFields"][] = "dor";
$tdataadmin_users[".printFields"][] = "status_id";
$tdataadmin_users[".printFields"][] = "experence";
$tdataadmin_users[".printFields"][] = "nationality";
$tdataadmin_users[".printFields"][] = "qulification";
$tdataadmin_users[".printFields"][] = "skillset";
$tdataadmin_users[".printFields"][] = "cid";


//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","eid");
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




	$tdataadmin_users["eid"] = $fdata;
//	ename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ename";
	$fdata["GoodName"] = "ename";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","ename");
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




	$tdataadmin_users["ename"] = $fdata;
//	emppic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "emppic";
	$fdata["GoodName"] = "emppic";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","emppic");
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








	$tdataadmin_users["emppic"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","designation");
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




	$tdataadmin_users["designation"] = $fdata;
//	whtasapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "whtasapp";
	$fdata["GoodName"] = "whtasapp";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","whtasapp");
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




	$tdataadmin_users["whtasapp"] = $fdata;
//	localnum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "localnum";
	$fdata["GoodName"] = "localnum";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","localnum");
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




	$tdataadmin_users["localnum"] = $fdata;
//	skype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "skype";
	$fdata["GoodName"] = "skype";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","skype");
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




	$tdataadmin_users["skype"] = $fdata;
//	dropbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dropbox";
	$fdata["GoodName"] = "dropbox";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","dropbox");
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




	$tdataadmin_users["dropbox"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","email");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["email"] = $fdata;
//	dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dob";
	$fdata["GoodName"] = "dob";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","dob");
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




	$tdataadmin_users["dob"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","password");
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








	$tdataadmin_users["password"] = $fdata;
//	passportno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "passportno";
	$fdata["GoodName"] = "passportno";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","passportno");
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




	$tdataadmin_users["passportno"] = $fdata;
//	passport_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "passport_expiry";
	$fdata["GoodName"] = "passport_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","passport_expiry");
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




	$tdataadmin_users["passport_expiry"] = $fdata;
//	visa_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "visa_no";
	$fdata["GoodName"] = "visa_no";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","visa_no");
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




	$tdataadmin_users["visa_no"] = $fdata;
//	visa_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "visa_expiry";
	$fdata["GoodName"] = "visa_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","visa_expiry");
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




	$tdataadmin_users["visa_expiry"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","division_id");
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




	$tdataadmin_users["division_id"] = $fdata;
//	doj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "doj";
	$fdata["GoodName"] = "doj";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","doj");
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




	$tdataadmin_users["doj"] = $fdata;
//	dor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dor";
	$fdata["GoodName"] = "dor";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","dor");
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




	$tdataadmin_users["dor"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","status_id");
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




	$tdataadmin_users["status_id"] = $fdata;
//	experence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "experence";
	$fdata["GoodName"] = "experence";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","experence");
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




	$tdataadmin_users["experence"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","nationality");
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




	$tdataadmin_users["nationality"] = $fdata;
//	qulification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "qulification";
	$fdata["GoodName"] = "qulification";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","qulification");
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




	$tdataadmin_users["qulification"] = $fdata;
//	skillset
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "skillset";
	$fdata["GoodName"] = "skillset";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","skillset");
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




	$tdataadmin_users["skillset"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("admin_users","cid");
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




	$tdataadmin_users["cid"] = $fdata;


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$placeHolders["admin_users"] = &$placeHoldersadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
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
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "ename";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "emppic",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "emppic";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "designation";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "whtasapp",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "whtasapp";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "localnum",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto16["m_sql"] = "localnum";
$proto16["m_srcTableName"] = "admin_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto18["m_sql"] = "skype";
$proto18["m_srcTableName"] = "admin_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dropbox",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto20["m_sql"] = "dropbox";
$proto20["m_srcTableName"] = "admin_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto22["m_sql"] = "email";
$proto22["m_srcTableName"] = "admin_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dob",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto24["m_sql"] = "dob";
$proto24["m_srcTableName"] = "admin_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto26["m_sql"] = "password";
$proto26["m_srcTableName"] = "admin_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "passportno",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto28["m_sql"] = "passportno";
$proto28["m_srcTableName"] = "admin_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "passport_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto30["m_sql"] = "passport_expiry";
$proto30["m_srcTableName"] = "admin_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_no",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto32["m_sql"] = "visa_no";
$proto32["m_srcTableName"] = "admin_users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto34["m_sql"] = "visa_expiry";
$proto34["m_srcTableName"] = "admin_users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto36["m_sql"] = "division_id";
$proto36["m_srcTableName"] = "admin_users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "doj",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto38["m_sql"] = "doj";
$proto38["m_srcTableName"] = "admin_users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "dor",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto40["m_sql"] = "dor";
$proto40["m_srcTableName"] = "admin_users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto42["m_sql"] = "status_id";
$proto42["m_srcTableName"] = "admin_users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "experence",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto44["m_sql"] = "experence";
$proto44["m_srcTableName"] = "admin_users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto46["m_sql"] = "nationality";
$proto46["m_srcTableName"] = "admin_users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "qulification",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto48["m_sql"] = "qulification";
$proto48["m_srcTableName"] = "admin_users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "skillset",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto50["m_sql"] = "skillset";
$proto50["m_srcTableName"] = "admin_users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "employees",
	"m_srcTableName" => "admin_users"
));

$proto52["m_sql"] = "cid";
$proto52["m_srcTableName"] = "admin_users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "employees";
$proto55["m_srcTableName"] = "admin_users";
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
$proto54["m_srcTableName"] = "admin_users";
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
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
		;

																																																																								

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

$tableEvents["admin_users"] = new eventsBase;
$tdataadmin_users[".hasEvents"] = false;

?>