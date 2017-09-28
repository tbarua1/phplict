<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemployees = array();
	$tdataemployees[".truncateText"] = true;
	$tdataemployees[".NumberOfChars"] = 80;
	$tdataemployees[".ShortName"] = "employees";
	$tdataemployees[".OwnerID"] = "";
	$tdataemployees[".OriginalTable"] = "employees";

//	field labels
$fieldLabelsemployees = array();
$fieldToolTipsemployees = array();
$pageTitlesemployees = array();
$placeHoldersemployees = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployees["English"] = array();
	$fieldToolTipsemployees["English"] = array();
	$placeHoldersemployees["English"] = array();
	$pageTitlesemployees["English"] = array();
	$fieldLabelsemployees["English"]["eid"] = "Eid";
	$fieldToolTipsemployees["English"]["eid"] = "";
	$placeHoldersemployees["English"]["eid"] = "";
	$fieldLabelsemployees["English"]["ename"] = "Ename";
	$fieldToolTipsemployees["English"]["ename"] = "";
	$placeHoldersemployees["English"]["ename"] = "";
	$fieldLabelsemployees["English"]["designation"] = "Designation";
	$fieldToolTipsemployees["English"]["designation"] = "";
	$placeHoldersemployees["English"]["designation"] = "";
	$fieldLabelsemployees["English"]["whtasapp"] = "Whtasapp";
	$fieldToolTipsemployees["English"]["whtasapp"] = "";
	$placeHoldersemployees["English"]["whtasapp"] = "";
	$fieldLabelsemployees["English"]["localnum"] = "Localnum";
	$fieldToolTipsemployees["English"]["localnum"] = "";
	$placeHoldersemployees["English"]["localnum"] = "";
	$fieldLabelsemployees["English"]["skype"] = "Skype";
	$fieldToolTipsemployees["English"]["skype"] = "";
	$placeHoldersemployees["English"]["skype"] = "";
	$fieldLabelsemployees["English"]["dropbox"] = "Dropbox";
	$fieldToolTipsemployees["English"]["dropbox"] = "";
	$placeHoldersemployees["English"]["dropbox"] = "";
	$fieldLabelsemployees["English"]["email"] = "Email";
	$fieldToolTipsemployees["English"]["email"] = "";
	$placeHoldersemployees["English"]["email"] = "";
	$fieldLabelsemployees["English"]["dob"] = "Dob";
	$fieldToolTipsemployees["English"]["dob"] = "";
	$placeHoldersemployees["English"]["dob"] = "";
	$fieldLabelsemployees["English"]["password"] = "Password";
	$fieldToolTipsemployees["English"]["password"] = "";
	$placeHoldersemployees["English"]["password"] = "";
	$fieldLabelsemployees["English"]["passportno"] = "Passportno";
	$fieldToolTipsemployees["English"]["passportno"] = "";
	$placeHoldersemployees["English"]["passportno"] = "";
	$fieldLabelsemployees["English"]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsemployees["English"]["passport_expiry"] = "";
	$placeHoldersemployees["English"]["passport_expiry"] = "";
	$fieldLabelsemployees["English"]["visa_no"] = "Visa No";
	$fieldToolTipsemployees["English"]["visa_no"] = "";
	$placeHoldersemployees["English"]["visa_no"] = "";
	$fieldLabelsemployees["English"]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsemployees["English"]["visa_expiry"] = "";
	$placeHoldersemployees["English"]["visa_expiry"] = "";
	$fieldLabelsemployees["English"]["division_id"] = "Division Id";
	$fieldToolTipsemployees["English"]["division_id"] = "";
	$placeHoldersemployees["English"]["division_id"] = "";
	$fieldLabelsemployees["English"]["doj"] = "Doj";
	$fieldToolTipsemployees["English"]["doj"] = "";
	$placeHoldersemployees["English"]["doj"] = "";
	$fieldLabelsemployees["English"]["dor"] = "Dor";
	$fieldToolTipsemployees["English"]["dor"] = "";
	$placeHoldersemployees["English"]["dor"] = "";
	$fieldLabelsemployees["English"]["status_id"] = "Status Id";
	$fieldToolTipsemployees["English"]["status_id"] = "";
	$placeHoldersemployees["English"]["status_id"] = "";
	$fieldLabelsemployees["English"]["emppic"] = "Emppic";
	$fieldToolTipsemployees["English"]["emppic"] = "";
	$placeHoldersemployees["English"]["emppic"] = "";
	$fieldLabelsemployees["English"]["experence"] = "Experence";
	$fieldToolTipsemployees["English"]["experence"] = "";
	$placeHoldersemployees["English"]["experence"] = "";
	$fieldLabelsemployees["English"]["nationality"] = "Nationality";
	$fieldToolTipsemployees["English"]["nationality"] = "";
	$placeHoldersemployees["English"]["nationality"] = "";
	$fieldLabelsemployees["English"]["qulification"] = "Qulification";
	$fieldToolTipsemployees["English"]["qulification"] = "";
	$placeHoldersemployees["English"]["qulification"] = "";
	$fieldLabelsemployees["English"]["skillset"] = "Skillset";
	$fieldToolTipsemployees["English"]["skillset"] = "";
	$placeHoldersemployees["English"]["skillset"] = "";
	$fieldLabelsemployees["English"]["cid"] = "Cid";
	$fieldToolTipsemployees["English"]["cid"] = "";
	$placeHoldersemployees["English"]["cid"] = "";
	if (count($fieldToolTipsemployees["English"]))
		$tdataemployees[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemployees[""] = array();
	$fieldToolTipsemployees[""] = array();
	$placeHoldersemployees[""] = array();
	$pageTitlesemployees[""] = array();
	$fieldLabelsemployees[""]["eid"] = "Eid";
	$fieldToolTipsemployees[""]["eid"] = "";
	$placeHoldersemployees[""]["eid"] = "";
	$fieldLabelsemployees[""]["ename"] = "Ename";
	$fieldToolTipsemployees[""]["ename"] = "";
	$placeHoldersemployees[""]["ename"] = "";
	$fieldLabelsemployees[""]["designation"] = "Designation";
	$fieldToolTipsemployees[""]["designation"] = "";
	$placeHoldersemployees[""]["designation"] = "";
	$fieldLabelsemployees[""]["whtasapp"] = "Whtasapp";
	$fieldToolTipsemployees[""]["whtasapp"] = "";
	$placeHoldersemployees[""]["whtasapp"] = "";
	$fieldLabelsemployees[""]["localnum"] = "Localnum";
	$fieldToolTipsemployees[""]["localnum"] = "";
	$placeHoldersemployees[""]["localnum"] = "";
	$fieldLabelsemployees[""]["skype"] = "Skype";
	$fieldToolTipsemployees[""]["skype"] = "";
	$placeHoldersemployees[""]["skype"] = "";
	$fieldLabelsemployees[""]["dropbox"] = "Dropbox";
	$fieldToolTipsemployees[""]["dropbox"] = "";
	$placeHoldersemployees[""]["dropbox"] = "";
	$fieldLabelsemployees[""]["email"] = "Email";
	$fieldToolTipsemployees[""]["email"] = "";
	$placeHoldersemployees[""]["email"] = "";
	$fieldLabelsemployees[""]["dob"] = "Dob";
	$fieldToolTipsemployees[""]["dob"] = "";
	$placeHoldersemployees[""]["dob"] = "";
	$fieldLabelsemployees[""]["password"] = "Password";
	$fieldToolTipsemployees[""]["password"] = "";
	$placeHoldersemployees[""]["password"] = "";
	$fieldLabelsemployees[""]["passportno"] = "Passportno";
	$fieldToolTipsemployees[""]["passportno"] = "";
	$placeHoldersemployees[""]["passportno"] = "";
	$fieldLabelsemployees[""]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsemployees[""]["passport_expiry"] = "";
	$placeHoldersemployees[""]["passport_expiry"] = "";
	$fieldLabelsemployees[""]["visa_no"] = "Visa No";
	$fieldToolTipsemployees[""]["visa_no"] = "";
	$placeHoldersemployees[""]["visa_no"] = "";
	$fieldLabelsemployees[""]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsemployees[""]["visa_expiry"] = "";
	$placeHoldersemployees[""]["visa_expiry"] = "";
	$fieldLabelsemployees[""]["division_id"] = "Division Id";
	$fieldToolTipsemployees[""]["division_id"] = "";
	$placeHoldersemployees[""]["division_id"] = "";
	$fieldLabelsemployees[""]["doj"] = "Doj";
	$fieldToolTipsemployees[""]["doj"] = "";
	$placeHoldersemployees[""]["doj"] = "";
	$fieldLabelsemployees[""]["dor"] = "Dor";
	$fieldToolTipsemployees[""]["dor"] = "";
	$placeHoldersemployees[""]["dor"] = "";
	$fieldLabelsemployees[""]["status_id"] = "Status Id";
	$fieldToolTipsemployees[""]["status_id"] = "";
	$placeHoldersemployees[""]["status_id"] = "";
	$fieldLabelsemployees[""]["emppic"] = "Emppic";
	$fieldToolTipsemployees[""]["emppic"] = "";
	$placeHoldersemployees[""]["emppic"] = "";
	$fieldLabelsemployees[""]["experence"] = "Experence";
	$fieldToolTipsemployees[""]["experence"] = "";
	$placeHoldersemployees[""]["experence"] = "";
	$fieldLabelsemployees[""]["nationality"] = "Nationality";
	$fieldToolTipsemployees[""]["nationality"] = "";
	$placeHoldersemployees[""]["nationality"] = "";
	$fieldLabelsemployees[""]["qulification"] = "Qulification";
	$fieldToolTipsemployees[""]["qulification"] = "";
	$placeHoldersemployees[""]["qulification"] = "";
	$fieldLabelsemployees[""]["skillset"] = "Skillset";
	$fieldToolTipsemployees[""]["skillset"] = "";
	$placeHoldersemployees[""]["skillset"] = "";
	$fieldLabelsemployees[""]["cid"] = "Cid";
	$fieldToolTipsemployees[""]["cid"] = "";
	$placeHoldersemployees[""]["cid"] = "";
	if (count($fieldToolTipsemployees[""]))
		$tdataemployees[".isUseToolTips"] = true;
}


	$tdataemployees[".NCSearch"] = true;



$tdataemployees[".shortTableName"] = "employees";
$tdataemployees[".nSecOptions"] = 0;
$tdataemployees[".recsPerRowPrint"] = 1;
$tdataemployees[".mainTableOwnerID"] = "";
$tdataemployees[".moveNext"] = 1;
$tdataemployees[".entityType"] = 0;

$tdataemployees[".strOriginalTableName"] = "employees";

	



$tdataemployees[".showAddInPopup"] = false;

$tdataemployees[".showEditInPopup"] = false;

$tdataemployees[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployees[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployees[".fieldsForRegister"] = array();

$tdataemployees[".listAjax"] = false;

	$tdataemployees[".audit"] = true;

	$tdataemployees[".locking"] = true;

$tdataemployees[".edit"] = true;
$tdataemployees[".afterEditAction"] = 1;
$tdataemployees[".closePopupAfterEdit"] = 1;
$tdataemployees[".afterEditActionDetTable"] = "";

$tdataemployees[".add"] = true;
$tdataemployees[".afterAddAction"] = 1;
$tdataemployees[".closePopupAfterAdd"] = 1;
$tdataemployees[".afterAddActionDetTable"] = "";

$tdataemployees[".list"] = true;



$tdataemployees[".reorderRecordsByHeader"] = true;


$tdataemployees[".exportFormatting"] = 2;
$tdataemployees[".exportDelimiter"] = ",";
		
$tdataemployees[".view"] = true;

$tdataemployees[".import"] = true;

$tdataemployees[".exportTo"] = true;

$tdataemployees[".printFriendly"] = true;

$tdataemployees[".delete"] = true;

$tdataemployees[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemployees[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemployees[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemployees[".searchSaving"] = false;
//

$tdataemployees[".showSearchPanel"] = true;
		$tdataemployees[".flexibleSearch"] = true;

$tdataemployees[".isUseAjaxSuggest"] = true;

$tdataemployees[".rowHighlite"] = true;



						

$tdataemployees[".ajaxCodeSnippetAdded"] = false;

$tdataemployees[".buttonsAdded"] = false;

$tdataemployees[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployees[".isUseTimeForSearch"] = false;



$tdataemployees[".badgeColor"] = "E8926F";


$tdataemployees[".allSearchFields"] = array();
$tdataemployees[".filterFields"] = array();
$tdataemployees[".requiredSearchFields"] = array();

$tdataemployees[".allSearchFields"][] = "eid";
	$tdataemployees[".allSearchFields"][] = "ename";
	$tdataemployees[".allSearchFields"][] = "designation";
	$tdataemployees[".allSearchFields"][] = "whtasapp";
	$tdataemployees[".allSearchFields"][] = "localnum";
	$tdataemployees[".allSearchFields"][] = "skype";
	$tdataemployees[".allSearchFields"][] = "dropbox";
	$tdataemployees[".allSearchFields"][] = "email";
	$tdataemployees[".allSearchFields"][] = "dob";
	$tdataemployees[".allSearchFields"][] = "passportno";
	$tdataemployees[".allSearchFields"][] = "passport_expiry";
	$tdataemployees[".allSearchFields"][] = "visa_no";
	$tdataemployees[".allSearchFields"][] = "visa_expiry";
	$tdataemployees[".allSearchFields"][] = "division_id";
	$tdataemployees[".allSearchFields"][] = "doj";
	$tdataemployees[".allSearchFields"][] = "dor";
	$tdataemployees[".allSearchFields"][] = "status_id";
	$tdataemployees[".allSearchFields"][] = "experence";
	$tdataemployees[".allSearchFields"][] = "nationality";
	$tdataemployees[".allSearchFields"][] = "qulification";
	$tdataemployees[".allSearchFields"][] = "skillset";
	$tdataemployees[".allSearchFields"][] = "cid";
	

$tdataemployees[".googleLikeFields"] = array();
$tdataemployees[".googleLikeFields"][] = "eid";
$tdataemployees[".googleLikeFields"][] = "ename";
$tdataemployees[".googleLikeFields"][] = "emppic";
$tdataemployees[".googleLikeFields"][] = "designation";
$tdataemployees[".googleLikeFields"][] = "whtasapp";
$tdataemployees[".googleLikeFields"][] = "localnum";
$tdataemployees[".googleLikeFields"][] = "skype";
$tdataemployees[".googleLikeFields"][] = "dropbox";
$tdataemployees[".googleLikeFields"][] = "email";
$tdataemployees[".googleLikeFields"][] = "dob";
$tdataemployees[".googleLikeFields"][] = "password";
$tdataemployees[".googleLikeFields"][] = "passportno";
$tdataemployees[".googleLikeFields"][] = "passport_expiry";
$tdataemployees[".googleLikeFields"][] = "visa_no";
$tdataemployees[".googleLikeFields"][] = "visa_expiry";
$tdataemployees[".googleLikeFields"][] = "division_id";
$tdataemployees[".googleLikeFields"][] = "doj";
$tdataemployees[".googleLikeFields"][] = "dor";
$tdataemployees[".googleLikeFields"][] = "status_id";
$tdataemployees[".googleLikeFields"][] = "experence";
$tdataemployees[".googleLikeFields"][] = "nationality";
$tdataemployees[".googleLikeFields"][] = "qulification";
$tdataemployees[".googleLikeFields"][] = "skillset";
$tdataemployees[".googleLikeFields"][] = "cid";


$tdataemployees[".advSearchFields"] = array();
$tdataemployees[".advSearchFields"][] = "eid";
$tdataemployees[".advSearchFields"][] = "ename";
$tdataemployees[".advSearchFields"][] = "designation";
$tdataemployees[".advSearchFields"][] = "whtasapp";
$tdataemployees[".advSearchFields"][] = "localnum";
$tdataemployees[".advSearchFields"][] = "skype";
$tdataemployees[".advSearchFields"][] = "dropbox";
$tdataemployees[".advSearchFields"][] = "email";
$tdataemployees[".advSearchFields"][] = "dob";
$tdataemployees[".advSearchFields"][] = "passportno";
$tdataemployees[".advSearchFields"][] = "passport_expiry";
$tdataemployees[".advSearchFields"][] = "visa_no";
$tdataemployees[".advSearchFields"][] = "visa_expiry";
$tdataemployees[".advSearchFields"][] = "division_id";
$tdataemployees[".advSearchFields"][] = "doj";
$tdataemployees[".advSearchFields"][] = "dor";
$tdataemployees[".advSearchFields"][] = "status_id";
$tdataemployees[".advSearchFields"][] = "experence";
$tdataemployees[".advSearchFields"][] = "nationality";
$tdataemployees[".advSearchFields"][] = "qulification";
$tdataemployees[".advSearchFields"][] = "skillset";
$tdataemployees[".advSearchFields"][] = "cid";

$tdataemployees[".tableType"] = "list";

$tdataemployees[".printerPageOrientation"] = 0;
$tdataemployees[".nPrinterPageScale"] = 100;

$tdataemployees[".nPrinterSplitRecords"] = 40;

$tdataemployees[".nPrinterPDFSplitRecords"] = 40;



$tdataemployees[".geocodingEnabled"] = false;





$tdataemployees[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemployees[".pageSize"] = 20;

$tdataemployees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployees[".strOrderBy"] = $tstrOrderBy;

$tdataemployees[".orderindexes"] = array();

$tdataemployees[".sqlHead"] = "SELECT eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid";
$tdataemployees[".sqlFrom"] = "FROM employees";
$tdataemployees[".sqlWhereExpr"] = "";
$tdataemployees[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployees[".arrGroupsPerPage"] = $arrGPP;

$tdataemployees[".highlightSearchResults"] = true;

$tableKeysemployees = array();
$tableKeysemployees[] = "eid";
$tdataemployees[".Keys"] = $tableKeysemployees;

$tdataemployees[".listFields"] = array();
$tdataemployees[".listFields"][] = "eid";
$tdataemployees[".listFields"][] = "ename";
$tdataemployees[".listFields"][] = "emppic";
$tdataemployees[".listFields"][] = "designation";
$tdataemployees[".listFields"][] = "whtasapp";
$tdataemployees[".listFields"][] = "localnum";
$tdataemployees[".listFields"][] = "skype";
$tdataemployees[".listFields"][] = "dropbox";
$tdataemployees[".listFields"][] = "email";
$tdataemployees[".listFields"][] = "dob";
$tdataemployees[".listFields"][] = "passportno";
$tdataemployees[".listFields"][] = "passport_expiry";
$tdataemployees[".listFields"][] = "visa_no";
$tdataemployees[".listFields"][] = "visa_expiry";
$tdataemployees[".listFields"][] = "division_id";
$tdataemployees[".listFields"][] = "doj";
$tdataemployees[".listFields"][] = "dor";
$tdataemployees[".listFields"][] = "status_id";
$tdataemployees[".listFields"][] = "experence";
$tdataemployees[".listFields"][] = "nationality";
$tdataemployees[".listFields"][] = "qulification";
$tdataemployees[".listFields"][] = "skillset";
$tdataemployees[".listFields"][] = "cid";

$tdataemployees[".hideMobileList"] = array();


$tdataemployees[".viewFields"] = array();
$tdataemployees[".viewFields"][] = "eid";
$tdataemployees[".viewFields"][] = "ename";
$tdataemployees[".viewFields"][] = "emppic";
$tdataemployees[".viewFields"][] = "designation";
$tdataemployees[".viewFields"][] = "whtasapp";
$tdataemployees[".viewFields"][] = "localnum";
$tdataemployees[".viewFields"][] = "skype";
$tdataemployees[".viewFields"][] = "dropbox";
$tdataemployees[".viewFields"][] = "email";
$tdataemployees[".viewFields"][] = "dob";
$tdataemployees[".viewFields"][] = "passportno";
$tdataemployees[".viewFields"][] = "passport_expiry";
$tdataemployees[".viewFields"][] = "visa_no";
$tdataemployees[".viewFields"][] = "visa_expiry";
$tdataemployees[".viewFields"][] = "division_id";
$tdataemployees[".viewFields"][] = "doj";
$tdataemployees[".viewFields"][] = "dor";
$tdataemployees[".viewFields"][] = "status_id";
$tdataemployees[".viewFields"][] = "experence";
$tdataemployees[".viewFields"][] = "nationality";
$tdataemployees[".viewFields"][] = "qulification";
$tdataemployees[".viewFields"][] = "skillset";
$tdataemployees[".viewFields"][] = "cid";

$tdataemployees[".addFields"] = array();
$tdataemployees[".addFields"][] = "ename";
$tdataemployees[".addFields"][] = "emppic";
$tdataemployees[".addFields"][] = "designation";
$tdataemployees[".addFields"][] = "whtasapp";
$tdataemployees[".addFields"][] = "localnum";
$tdataemployees[".addFields"][] = "skype";
$tdataemployees[".addFields"][] = "dropbox";
$tdataemployees[".addFields"][] = "dob";
$tdataemployees[".addFields"][] = "passportno";
$tdataemployees[".addFields"][] = "passport_expiry";
$tdataemployees[".addFields"][] = "visa_no";
$tdataemployees[".addFields"][] = "visa_expiry";
$tdataemployees[".addFields"][] = "division_id";
$tdataemployees[".addFields"][] = "doj";
$tdataemployees[".addFields"][] = "dor";
$tdataemployees[".addFields"][] = "status_id";
$tdataemployees[".addFields"][] = "experence";
$tdataemployees[".addFields"][] = "nationality";
$tdataemployees[".addFields"][] = "qulification";
$tdataemployees[".addFields"][] = "skillset";

$tdataemployees[".masterListFields"] = array();
$tdataemployees[".masterListFields"][] = "eid";
$tdataemployees[".masterListFields"][] = "ename";
$tdataemployees[".masterListFields"][] = "emppic";
$tdataemployees[".masterListFields"][] = "designation";
$tdataemployees[".masterListFields"][] = "whtasapp";
$tdataemployees[".masterListFields"][] = "localnum";
$tdataemployees[".masterListFields"][] = "skype";
$tdataemployees[".masterListFields"][] = "dropbox";
$tdataemployees[".masterListFields"][] = "email";
$tdataemployees[".masterListFields"][] = "dob";
$tdataemployees[".masterListFields"][] = "passportno";
$tdataemployees[".masterListFields"][] = "passport_expiry";
$tdataemployees[".masterListFields"][] = "visa_no";
$tdataemployees[".masterListFields"][] = "visa_expiry";
$tdataemployees[".masterListFields"][] = "division_id";
$tdataemployees[".masterListFields"][] = "doj";
$tdataemployees[".masterListFields"][] = "dor";
$tdataemployees[".masterListFields"][] = "status_id";
$tdataemployees[".masterListFields"][] = "experence";
$tdataemployees[".masterListFields"][] = "nationality";
$tdataemployees[".masterListFields"][] = "qulification";
$tdataemployees[".masterListFields"][] = "skillset";
$tdataemployees[".masterListFields"][] = "cid";

$tdataemployees[".inlineAddFields"] = array();

$tdataemployees[".editFields"] = array();
$tdataemployees[".editFields"][] = "ename";
$tdataemployees[".editFields"][] = "emppic";
$tdataemployees[".editFields"][] = "designation";
$tdataemployees[".editFields"][] = "whtasapp";
$tdataemployees[".editFields"][] = "localnum";
$tdataemployees[".editFields"][] = "skype";
$tdataemployees[".editFields"][] = "dropbox";
$tdataemployees[".editFields"][] = "email";
$tdataemployees[".editFields"][] = "dob";
$tdataemployees[".editFields"][] = "passportno";
$tdataemployees[".editFields"][] = "passport_expiry";
$tdataemployees[".editFields"][] = "visa_no";
$tdataemployees[".editFields"][] = "visa_expiry";
$tdataemployees[".editFields"][] = "division_id";
$tdataemployees[".editFields"][] = "doj";
$tdataemployees[".editFields"][] = "dor";
$tdataemployees[".editFields"][] = "status_id";
$tdataemployees[".editFields"][] = "experence";
$tdataemployees[".editFields"][] = "nationality";
$tdataemployees[".editFields"][] = "qulification";
$tdataemployees[".editFields"][] = "skillset";
$tdataemployees[".editFields"][] = "cid";

$tdataemployees[".inlineEditFields"] = array();

$tdataemployees[".updateSelectedFields"] = array();
$tdataemployees[".updateSelectedFields"][] = "ename";
$tdataemployees[".updateSelectedFields"][] = "emppic";
$tdataemployees[".updateSelectedFields"][] = "designation";
$tdataemployees[".updateSelectedFields"][] = "whtasapp";
$tdataemployees[".updateSelectedFields"][] = "localnum";
$tdataemployees[".updateSelectedFields"][] = "skype";
$tdataemployees[".updateSelectedFields"][] = "dropbox";
$tdataemployees[".updateSelectedFields"][] = "email";
$tdataemployees[".updateSelectedFields"][] = "dob";
$tdataemployees[".updateSelectedFields"][] = "passportno";
$tdataemployees[".updateSelectedFields"][] = "passport_expiry";
$tdataemployees[".updateSelectedFields"][] = "visa_no";
$tdataemployees[".updateSelectedFields"][] = "visa_expiry";
$tdataemployees[".updateSelectedFields"][] = "division_id";
$tdataemployees[".updateSelectedFields"][] = "doj";
$tdataemployees[".updateSelectedFields"][] = "dor";
$tdataemployees[".updateSelectedFields"][] = "status_id";
$tdataemployees[".updateSelectedFields"][] = "experence";
$tdataemployees[".updateSelectedFields"][] = "nationality";
$tdataemployees[".updateSelectedFields"][] = "qulification";
$tdataemployees[".updateSelectedFields"][] = "skillset";
$tdataemployees[".updateSelectedFields"][] = "cid";


$tdataemployees[".exportFields"] = array();
$tdataemployees[".exportFields"][] = "eid";
$tdataemployees[".exportFields"][] = "ename";
$tdataemployees[".exportFields"][] = "designation";
$tdataemployees[".exportFields"][] = "whtasapp";
$tdataemployees[".exportFields"][] = "localnum";
$tdataemployees[".exportFields"][] = "skype";
$tdataemployees[".exportFields"][] = "dropbox";
$tdataemployees[".exportFields"][] = "email";
$tdataemployees[".exportFields"][] = "dob";
$tdataemployees[".exportFields"][] = "passportno";
$tdataemployees[".exportFields"][] = "passport_expiry";
$tdataemployees[".exportFields"][] = "visa_no";
$tdataemployees[".exportFields"][] = "visa_expiry";
$tdataemployees[".exportFields"][] = "division_id";
$tdataemployees[".exportFields"][] = "doj";
$tdataemployees[".exportFields"][] = "dor";
$tdataemployees[".exportFields"][] = "status_id";
$tdataemployees[".exportFields"][] = "experence";
$tdataemployees[".exportFields"][] = "nationality";
$tdataemployees[".exportFields"][] = "qulification";
$tdataemployees[".exportFields"][] = "skillset";
$tdataemployees[".exportFields"][] = "cid";

$tdataemployees[".importFields"] = array();
$tdataemployees[".importFields"][] = "eid";
$tdataemployees[".importFields"][] = "ename";
$tdataemployees[".importFields"][] = "designation";
$tdataemployees[".importFields"][] = "whtasapp";
$tdataemployees[".importFields"][] = "localnum";
$tdataemployees[".importFields"][] = "skype";
$tdataemployees[".importFields"][] = "dropbox";
$tdataemployees[".importFields"][] = "email";
$tdataemployees[".importFields"][] = "dob";
$tdataemployees[".importFields"][] = "passportno";
$tdataemployees[".importFields"][] = "passport_expiry";
$tdataemployees[".importFields"][] = "visa_no";
$tdataemployees[".importFields"][] = "visa_expiry";
$tdataemployees[".importFields"][] = "division_id";
$tdataemployees[".importFields"][] = "doj";
$tdataemployees[".importFields"][] = "dor";
$tdataemployees[".importFields"][] = "status_id";
$tdataemployees[".importFields"][] = "experence";
$tdataemployees[".importFields"][] = "nationality";
$tdataemployees[".importFields"][] = "qulification";
$tdataemployees[".importFields"][] = "skillset";
$tdataemployees[".importFields"][] = "cid";

$tdataemployees[".printFields"] = array();
$tdataemployees[".printFields"][] = "eid";
$tdataemployees[".printFields"][] = "ename";
$tdataemployees[".printFields"][] = "emppic";
$tdataemployees[".printFields"][] = "designation";
$tdataemployees[".printFields"][] = "whtasapp";
$tdataemployees[".printFields"][] = "localnum";
$tdataemployees[".printFields"][] = "skype";
$tdataemployees[".printFields"][] = "dropbox";
$tdataemployees[".printFields"][] = "email";
$tdataemployees[".printFields"][] = "dob";
$tdataemployees[".printFields"][] = "passportno";
$tdataemployees[".printFields"][] = "passport_expiry";
$tdataemployees[".printFields"][] = "visa_no";
$tdataemployees[".printFields"][] = "visa_expiry";
$tdataemployees[".printFields"][] = "division_id";
$tdataemployees[".printFields"][] = "doj";
$tdataemployees[".printFields"][] = "dor";
$tdataemployees[".printFields"][] = "status_id";
$tdataemployees[".printFields"][] = "experence";
$tdataemployees[".printFields"][] = "nationality";
$tdataemployees[".printFields"][] = "qulification";
$tdataemployees[".printFields"][] = "skillset";
$tdataemployees[".printFields"][] = "cid";


//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","eid");
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




	$tdataemployees["eid"] = $fdata;
//	ename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ename";
	$fdata["GoodName"] = "ename";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","ename");
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




	$tdataemployees["ename"] = $fdata;
//	emppic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "emppic";
	$fdata["GoodName"] = "emppic";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","emppic");
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








	$tdataemployees["emppic"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","designation");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Technical Trainer";
	$edata["LookupValues"][] = "Softskill Trainer";
	$edata["LookupValues"][] = "Master Trainer";
	$edata["LookupValues"][] = "Coordinator";
	$edata["LookupValues"][] = "Consultant";
	$edata["LookupValues"][] = "Human Resourse";
	$edata["LookupValues"][] = "MIS Team";

	
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




	$tdataemployees["designation"] = $fdata;
//	whtasapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "whtasapp";
	$fdata["GoodName"] = "whtasapp";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","whtasapp");
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




	$tdataemployees["whtasapp"] = $fdata;
//	localnum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "localnum";
	$fdata["GoodName"] = "localnum";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","localnum");
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




	$tdataemployees["localnum"] = $fdata;
//	skype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "skype";
	$fdata["GoodName"] = "skype";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","skype");
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




	$tdataemployees["skype"] = $fdata;
//	dropbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dropbox";
	$fdata["GoodName"] = "dropbox";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","dropbox");
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




	$tdataemployees["dropbox"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","email");
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




	$tdataemployees["email"] = $fdata;
//	dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dob";
	$fdata["GoodName"] = "dob";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","dob");
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




	$tdataemployees["dob"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","password");
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








	$tdataemployees["password"] = $fdata;
//	passportno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "passportno";
	$fdata["GoodName"] = "passportno";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","passportno");
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




	$tdataemployees["passportno"] = $fdata;
//	passport_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "passport_expiry";
	$fdata["GoodName"] = "passport_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","passport_expiry");
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




	$tdataemployees["passport_expiry"] = $fdata;
//	visa_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "visa_no";
	$fdata["GoodName"] = "visa_no";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","visa_no");
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




	$tdataemployees["visa_no"] = $fdata;
//	visa_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "visa_expiry";
	$fdata["GoodName"] = "visa_expiry";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","visa_expiry");
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




	$tdataemployees["visa_expiry"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","division_id");
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




	$tdataemployees["division_id"] = $fdata;
//	doj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "doj";
	$fdata["GoodName"] = "doj";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","doj");
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




	$tdataemployees["doj"] = $fdata;
//	dor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dor";
	$fdata["GoodName"] = "dor";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","dor");
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




	$tdataemployees["dor"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","status_id");
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




	$tdataemployees["status_id"] = $fdata;
//	experence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "experence";
	$fdata["GoodName"] = "experence";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","experence");
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




	$tdataemployees["experence"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","nationality");
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




	$tdataemployees["nationality"] = $fdata;
//	qulification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "qulification";
	$fdata["GoodName"] = "qulification";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","qulification");
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




	$tdataemployees["qulification"] = $fdata;
//	skillset
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "skillset";
	$fdata["GoodName"] = "skillset";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","skillset");
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




	$tdataemployees["skillset"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","cid");
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




	$tdataemployees["cid"] = $fdata;


$tables_data["employees"]=&$tdataemployees;
$field_labels["employees"] = &$fieldLabelsemployees;
$fieldToolTips["employees"] = &$fieldToolTipsemployees;
$placeHolders["employees"] = &$placeHoldersemployees;
$page_titles["employees"] = &$pageTitlesemployees;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employees"] = array();
//	consultant
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="consultant";
		$detailsParam["dOriginalTable"] = "consultant";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consultant";
	$detailsParam["dCaptionTable"] = GetTableCaption("consultant");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["employees"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employees"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employees"][$dIndex]["masterKeys"][]="eid";

				$detailsTablesData["employees"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employees"][$dIndex]["detailKeys"][]="eid";

// tables which are master tables for current table (detail)
$masterTablesData["employees"] = array();


	
				$strOriginalDetailsTable="division";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="division";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "division";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["employees"][0] = $masterParams;
				$masterTablesData["employees"][0]["masterKeys"] = array();
	$masterTablesData["employees"][0]["masterKeys"][]="division_id";
				$masterTablesData["employees"][0]["detailKeys"] = array();
	$masterTablesData["employees"][0]["detailKeys"][]="division_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_employees()
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
	"m_srcTableName" => "employees"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "employees";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto8["m_sql"] = "ename";
$proto8["m_srcTableName"] = "employees";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "emppic",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto10["m_sql"] = "emppic";
$proto10["m_srcTableName"] = "employees";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto12["m_sql"] = "designation";
$proto12["m_srcTableName"] = "employees";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "whtasapp",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto14["m_sql"] = "whtasapp";
$proto14["m_srcTableName"] = "employees";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "localnum",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto16["m_sql"] = "localnum";
$proto16["m_srcTableName"] = "employees";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto18["m_sql"] = "skype";
$proto18["m_srcTableName"] = "employees";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dropbox",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto20["m_sql"] = "dropbox";
$proto20["m_srcTableName"] = "employees";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto22["m_sql"] = "email";
$proto22["m_srcTableName"] = "employees";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dob",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto24["m_sql"] = "dob";
$proto24["m_srcTableName"] = "employees";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto26["m_sql"] = "password";
$proto26["m_srcTableName"] = "employees";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "passportno",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto28["m_sql"] = "passportno";
$proto28["m_srcTableName"] = "employees";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "passport_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto30["m_sql"] = "passport_expiry";
$proto30["m_srcTableName"] = "employees";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_no",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto32["m_sql"] = "visa_no";
$proto32["m_srcTableName"] = "employees";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto34["m_sql"] = "visa_expiry";
$proto34["m_srcTableName"] = "employees";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto36["m_sql"] = "division_id";
$proto36["m_srcTableName"] = "employees";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "doj",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto38["m_sql"] = "doj";
$proto38["m_srcTableName"] = "employees";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "dor",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto40["m_sql"] = "dor";
$proto40["m_srcTableName"] = "employees";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto42["m_sql"] = "status_id";
$proto42["m_srcTableName"] = "employees";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "experence",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto44["m_sql"] = "experence";
$proto44["m_srcTableName"] = "employees";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto46["m_sql"] = "nationality";
$proto46["m_srcTableName"] = "employees";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "qulification",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto48["m_sql"] = "qulification";
$proto48["m_srcTableName"] = "employees";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "skillset",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto50["m_sql"] = "skillset";
$proto50["m_srcTableName"] = "employees";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto52["m_sql"] = "cid";
$proto52["m_srcTableName"] = "employees";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "employees";
$proto55["m_srcTableName"] = "employees";
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
$proto54["m_srcTableName"] = "employees";
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
$proto0["m_srcTableName"]="employees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employees = createSqlQuery_employees();


	
		;

																								

$tdataemployees[".sqlquery"] = $queryData_employees;

$tableEvents["employees"] = new eventsBase;
$tdataemployees[".hasEvents"] = false;

?>