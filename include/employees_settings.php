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

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployees["English"] = array();
	$fieldToolTipsemployees["English"] = array();
	$pageTitlesemployees["English"] = array();
	$fieldLabelsemployees["English"]["eid"] = "Eid";
	$fieldToolTipsemployees["English"]["eid"] = "";
	$fieldLabelsemployees["English"]["ename"] = "Ename";
	$fieldToolTipsemployees["English"]["ename"] = "";
	$fieldLabelsemployees["English"]["emppic"] = "Emppic";
	$fieldToolTipsemployees["English"]["emppic"] = "";
	$fieldLabelsemployees["English"]["designation"] = "Designation";
	$fieldToolTipsemployees["English"]["designation"] = "";
	$fieldLabelsemployees["English"]["whtasapp"] = "Whtasapp";
	$fieldToolTipsemployees["English"]["whtasapp"] = "";
	$fieldLabelsemployees["English"]["localnum"] = "Localnum";
	$fieldToolTipsemployees["English"]["localnum"] = "";
	$fieldLabelsemployees["English"]["skype"] = "Skype";
	$fieldToolTipsemployees["English"]["skype"] = "";
	$fieldLabelsemployees["English"]["dropbox"] = "Dropbox";
	$fieldToolTipsemployees["English"]["dropbox"] = "";
	$fieldLabelsemployees["English"]["email"] = "Email";
	$fieldToolTipsemployees["English"]["email"] = "";
	$fieldLabelsemployees["English"]["dob"] = "Dob";
	$fieldToolTipsemployees["English"]["dob"] = "";
	$fieldLabelsemployees["English"]["password"] = "Password";
	$fieldToolTipsemployees["English"]["password"] = "";
	$fieldLabelsemployees["English"]["passportno"] = "Passportno";
	$fieldToolTipsemployees["English"]["passportno"] = "";
	$fieldLabelsemployees["English"]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsemployees["English"]["passport_expiry"] = "";
	$fieldLabelsemployees["English"]["visa_no"] = "Visa No";
	$fieldToolTipsemployees["English"]["visa_no"] = "";
	$fieldLabelsemployees["English"]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsemployees["English"]["visa_expiry"] = "";
	$fieldLabelsemployees["English"]["division_id"] = "Division Id";
	$fieldToolTipsemployees["English"]["division_id"] = "";
	$fieldLabelsemployees["English"]["doj"] = "Doj";
	$fieldToolTipsemployees["English"]["doj"] = "";
	$fieldLabelsemployees["English"]["dor"] = "Dor";
	$fieldToolTipsemployees["English"]["dor"] = "";
	$fieldLabelsemployees["English"]["status_id"] = "Status Id";
	$fieldToolTipsemployees["English"]["status_id"] = "";
	$fieldLabelsemployees["English"]["experence"] = "Experence";
	$fieldToolTipsemployees["English"]["experence"] = "";
	$fieldLabelsemployees["English"]["nationality"] = "Nationality";
	$fieldToolTipsemployees["English"]["nationality"] = "";
	$fieldLabelsemployees["English"]["qulification"] = "Qulification";
	$fieldToolTipsemployees["English"]["qulification"] = "";
	$fieldLabelsemployees["English"]["skillset"] = "Skillset";
	$fieldToolTipsemployees["English"]["skillset"] = "";
	$fieldLabelsemployees["English"]["cid"] = "Cid";
	$fieldToolTipsemployees["English"]["cid"] = "";
	$fieldLabelsemployees["English"]["reset_token"] = "Reset Token";
	$fieldToolTipsemployees["English"]["reset_token"] = "";
	$fieldLabelsemployees["English"]["reset_date"] = "Reset Date";
	$fieldToolTipsemployees["English"]["reset_date"] = "";
	if (count($fieldToolTipsemployees["English"]))
		$tdataemployees[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemployees[""] = array();
	$fieldToolTipsemployees[""] = array();
	$pageTitlesemployees[""] = array();
	if (count($fieldToolTipsemployees[""]))
		$tdataemployees[".isUseToolTips"] = true;
}
	
	
	$tdataemployees[".NCSearch"] = true;



$tdataemployees[".shortTableName"] = "employees";
$tdataemployees[".nSecOptions"] = 0;
$tdataemployees[".recsPerRowList"] = 1;
$tdataemployees[".mainTableOwnerID"] = "";
$tdataemployees[".moveNext"] = 1;
$tdataemployees[".nType"] = 0;

$tdataemployees[".strOriginalTableName"] = "employees";




$tdataemployees[".showAddInPopup"] = false;

$tdataemployees[".showEditInPopup"] = false;

$tdataemployees[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployees[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployees[".fieldsForRegister"] = array();

$tdataemployees[".listAjax"] = false;

	$tdataemployees[".audit"] = false;

	$tdataemployees[".locking"] = false;

$tdataemployees[".edit"] = true;

$tdataemployees[".list"] = true;

$tdataemployees[".inlineEdit"] = true;
$tdataemployees[".inlineAdd"] = true;
$tdataemployees[".view"] = true;

$tdataemployees[".import"] = true;

$tdataemployees[".exportTo"] = true;

$tdataemployees[".printFriendly"] = true;

$tdataemployees[".delete"] = true;

$tdataemployees[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemployees[".searchSaving"] = false;
//

$tdataemployees[".showSearchPanel"] = true;
		$tdataemployees[".flexibleSearch"] = true;		

if (isMobile())
	$tdataemployees[".isUseAjaxSuggest"] = false;
else 
	$tdataemployees[".isUseAjaxSuggest"] = true;

$tdataemployees[".rowHighlite"] = true;



$tdataemployees[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployees[".isUseTimeForSearch"] = false;



$tdataemployees[".useDetailsPreview"] = true;


$tdataemployees[".allSearchFields"] = array();
$tdataemployees[".filterFields"] = array();
$tdataemployees[".requiredSearchFields"] = array();

$tdataemployees[".allSearchFields"][] = "eid";
	$tdataemployees[".allSearchFields"][] = "ename";
	$tdataemployees[".allSearchFields"][] = "emppic";
	$tdataemployees[".allSearchFields"][] = "designation";
	$tdataemployees[".allSearchFields"][] = "whtasapp";
	$tdataemployees[".allSearchFields"][] = "localnum";
	$tdataemployees[".allSearchFields"][] = "skype";
	$tdataemployees[".allSearchFields"][] = "dropbox";
	$tdataemployees[".allSearchFields"][] = "email";
	$tdataemployees[".allSearchFields"][] = "dob";
	$tdataemployees[".allSearchFields"][] = "password";
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
	$tdataemployees[".allSearchFields"][] = "reset_token";
	$tdataemployees[".allSearchFields"][] = "reset_date";
	

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
$tdataemployees[".googleLikeFields"][] = "reset_token";
$tdataemployees[".googleLikeFields"][] = "reset_date";


$tdataemployees[".advSearchFields"] = array();
$tdataemployees[".advSearchFields"][] = "eid";
$tdataemployees[".advSearchFields"][] = "ename";
$tdataemployees[".advSearchFields"][] = "emppic";
$tdataemployees[".advSearchFields"][] = "designation";
$tdataemployees[".advSearchFields"][] = "whtasapp";
$tdataemployees[".advSearchFields"][] = "localnum";
$tdataemployees[".advSearchFields"][] = "skype";
$tdataemployees[".advSearchFields"][] = "dropbox";
$tdataemployees[".advSearchFields"][] = "email";
$tdataemployees[".advSearchFields"][] = "dob";
$tdataemployees[".advSearchFields"][] = "password";
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
$tdataemployees[".advSearchFields"][] = "reset_token";
$tdataemployees[".advSearchFields"][] = "reset_date";

$tdataemployees[".tableType"] = "list";

$tdataemployees[".printerPageOrientation"] = 0;
$tdataemployees[".nPrinterPageScale"] = 100;

$tdataemployees[".nPrinterSplitRecords"] = 40;

$tdataemployees[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataemployees[".pageSize"] = 20;

$tdataemployees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployees[".strOrderBy"] = $tstrOrderBy;

$tdataemployees[".orderindexes"] = array();

$tdataemployees[".sqlHead"] = "SELECT eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid,  	reset_token,  	reset_date";
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
$tdataemployees[".listFields"][] = "password";
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
$tdataemployees[".listFields"][] = "reset_token";
$tdataemployees[".listFields"][] = "reset_date";

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
$tdataemployees[".viewFields"][] = "password";
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
$tdataemployees[".viewFields"][] = "reset_token";
$tdataemployees[".viewFields"][] = "reset_date";

$tdataemployees[".addFields"] = array();
$tdataemployees[".addFields"][] = "ename";
$tdataemployees[".addFields"][] = "emppic";
$tdataemployees[".addFields"][] = "designation";
$tdataemployees[".addFields"][] = "whtasapp";
$tdataemployees[".addFields"][] = "localnum";
$tdataemployees[".addFields"][] = "skype";
$tdataemployees[".addFields"][] = "dropbox";
$tdataemployees[".addFields"][] = "email";
$tdataemployees[".addFields"][] = "dob";
$tdataemployees[".addFields"][] = "password";
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
$tdataemployees[".addFields"][] = "cid";
$tdataemployees[".addFields"][] = "reset_token";
$tdataemployees[".addFields"][] = "reset_date";

$tdataemployees[".inlineAddFields"] = array();
$tdataemployees[".inlineAddFields"][] = "ename";
$tdataemployees[".inlineAddFields"][] = "emppic";
$tdataemployees[".inlineAddFields"][] = "designation";
$tdataemployees[".inlineAddFields"][] = "whtasapp";
$tdataemployees[".inlineAddFields"][] = "localnum";
$tdataemployees[".inlineAddFields"][] = "skype";
$tdataemployees[".inlineAddFields"][] = "dropbox";
$tdataemployees[".inlineAddFields"][] = "email";
$tdataemployees[".inlineAddFields"][] = "dob";
$tdataemployees[".inlineAddFields"][] = "password";
$tdataemployees[".inlineAddFields"][] = "passportno";
$tdataemployees[".inlineAddFields"][] = "passport_expiry";
$tdataemployees[".inlineAddFields"][] = "visa_no";
$tdataemployees[".inlineAddFields"][] = "visa_expiry";
$tdataemployees[".inlineAddFields"][] = "division_id";
$tdataemployees[".inlineAddFields"][] = "doj";
$tdataemployees[".inlineAddFields"][] = "dor";
$tdataemployees[".inlineAddFields"][] = "status_id";
$tdataemployees[".inlineAddFields"][] = "experence";
$tdataemployees[".inlineAddFields"][] = "nationality";
$tdataemployees[".inlineAddFields"][] = "qulification";
$tdataemployees[".inlineAddFields"][] = "skillset";
$tdataemployees[".inlineAddFields"][] = "cid";
$tdataemployees[".inlineAddFields"][] = "reset_token";
$tdataemployees[".inlineAddFields"][] = "reset_date";

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
$tdataemployees[".editFields"][] = "password";
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
$tdataemployees[".editFields"][] = "reset_token";
$tdataemployees[".editFields"][] = "reset_date";

$tdataemployees[".inlineEditFields"] = array();
$tdataemployees[".inlineEditFields"][] = "ename";
$tdataemployees[".inlineEditFields"][] = "emppic";
$tdataemployees[".inlineEditFields"][] = "designation";
$tdataemployees[".inlineEditFields"][] = "whtasapp";
$tdataemployees[".inlineEditFields"][] = "localnum";
$tdataemployees[".inlineEditFields"][] = "skype";
$tdataemployees[".inlineEditFields"][] = "dropbox";
$tdataemployees[".inlineEditFields"][] = "email";
$tdataemployees[".inlineEditFields"][] = "dob";
$tdataemployees[".inlineEditFields"][] = "password";
$tdataemployees[".inlineEditFields"][] = "passportno";
$tdataemployees[".inlineEditFields"][] = "passport_expiry";
$tdataemployees[".inlineEditFields"][] = "visa_no";
$tdataemployees[".inlineEditFields"][] = "visa_expiry";
$tdataemployees[".inlineEditFields"][] = "division_id";
$tdataemployees[".inlineEditFields"][] = "doj";
$tdataemployees[".inlineEditFields"][] = "dor";
$tdataemployees[".inlineEditFields"][] = "status_id";
$tdataemployees[".inlineEditFields"][] = "experence";
$tdataemployees[".inlineEditFields"][] = "nationality";
$tdataemployees[".inlineEditFields"][] = "qulification";
$tdataemployees[".inlineEditFields"][] = "skillset";
$tdataemployees[".inlineEditFields"][] = "cid";
$tdataemployees[".inlineEditFields"][] = "reset_token";
$tdataemployees[".inlineEditFields"][] = "reset_date";

$tdataemployees[".exportFields"] = array();
$tdataemployees[".exportFields"][] = "eid";
$tdataemployees[".exportFields"][] = "ename";
$tdataemployees[".exportFields"][] = "emppic";
$tdataemployees[".exportFields"][] = "designation";
$tdataemployees[".exportFields"][] = "whtasapp";
$tdataemployees[".exportFields"][] = "localnum";
$tdataemployees[".exportFields"][] = "skype";
$tdataemployees[".exportFields"][] = "dropbox";
$tdataemployees[".exportFields"][] = "email";
$tdataemployees[".exportFields"][] = "dob";
$tdataemployees[".exportFields"][] = "password";
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
$tdataemployees[".exportFields"][] = "reset_token";
$tdataemployees[".exportFields"][] = "reset_date";

$tdataemployees[".importFields"] = array();
$tdataemployees[".importFields"][] = "eid";
$tdataemployees[".importFields"][] = "ename";
$tdataemployees[".importFields"][] = "emppic";
$tdataemployees[".importFields"][] = "designation";
$tdataemployees[".importFields"][] = "whtasapp";
$tdataemployees[".importFields"][] = "localnum";
$tdataemployees[".importFields"][] = "skype";
$tdataemployees[".importFields"][] = "dropbox";
$tdataemployees[".importFields"][] = "email";
$tdataemployees[".importFields"][] = "dob";
$tdataemployees[".importFields"][] = "password";
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
$tdataemployees[".importFields"][] = "reset_token";
$tdataemployees[".importFields"][] = "reset_date";

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
$tdataemployees[".printFields"][] = "password";
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
$tdataemployees[".printFields"][] = "reset_token";
$tdataemployees[".printFields"][] = "reset_date";

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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "emppic"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emppic";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	$edata["DisplayField"] = "division_id";
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	$edata["DisplayField"] = "cid";
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataemployees["cid"] = $fdata;
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","reset_token"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reset_token"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataemployees["reset_token"] = $fdata;
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "employees";
	$fdata["Label"] = GetFieldLabel("employees","reset_date"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reset_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";
	
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataemployees["reset_date"] = $fdata;

	
$tables_data["employees"]=&$tdataemployees;
$field_labels["employees"] = &$fieldLabelsemployees;
$fieldToolTips["employees"] = &$fieldToolTipsemployees;
$page_titles["employees"] = &$pageTitlesemployees;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employees"] = array();
//	batch
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="batch";
		$detailsParam["dOriginalTable"] = "batch";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "batch";
	$detailsParam["dCaptionTable"] = GetTableCaption("batch");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["employees"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["employees"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employees"][$dIndex]["masterKeys"][]="eid";

				$detailsTablesData["employees"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employees"][$dIndex]["detailKeys"][]="soft_skill_trainer";
//	consultant
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="consultant";
		$detailsParam["dOriginalTable"] = "consultant";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consultant";
	$detailsParam["dCaptionTable"] = GetTableCaption("consultant");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
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
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["employees"][0] = $masterParams;	
				$masterTablesData["employees"][0]["masterKeys"] = array();
	$masterTablesData["employees"][0]["masterKeys"][]="division_id";
				$masterTablesData["employees"][0]["detailKeys"] = array();
	$masterTablesData["employees"][0]["detailKeys"][]="division_id";
		
	
				$strOriginalDetailsTable="courses";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="courses";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "courses";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["employees"][1] = $masterParams;	
				$masterTablesData["employees"][1]["masterKeys"] = array();
	$masterTablesData["employees"][1]["masterKeys"][]="cid";
				$masterTablesData["employees"][1]["detailKeys"] = array();
	$masterTablesData["employees"][1]["detailKeys"][]="cid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_employees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	ename,  	emppic,  	designation,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id,  	experence,  	nationality,  	qulification,  	skillset,  	cid,  	reset_token,  	reset_date";
$proto0["m_strFrom"] = "FROM employees";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto5["m_sql"] = "eid";
$proto5["m_srcTableName"] = "employees";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto7["m_sql"] = "ename";
$proto7["m_srcTableName"] = "employees";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "emppic",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto9["m_sql"] = "emppic";
$proto9["m_srcTableName"] = "employees";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto11["m_sql"] = "designation";
$proto11["m_srcTableName"] = "employees";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "whtasapp",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto13["m_sql"] = "whtasapp";
$proto13["m_srcTableName"] = "employees";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "localnum",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto15["m_sql"] = "localnum";
$proto15["m_srcTableName"] = "employees";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto17["m_sql"] = "skype";
$proto17["m_srcTableName"] = "employees";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "dropbox",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto19["m_sql"] = "dropbox";
$proto19["m_srcTableName"] = "employees";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto21["m_sql"] = "email";
$proto21["m_srcTableName"] = "employees";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "dob",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto23["m_sql"] = "dob";
$proto23["m_srcTableName"] = "employees";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto25["m_sql"] = "password";
$proto25["m_srcTableName"] = "employees";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "passportno",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto27["m_sql"] = "passportno";
$proto27["m_srcTableName"] = "employees";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "passport_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto29["m_sql"] = "passport_expiry";
$proto29["m_srcTableName"] = "employees";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_no",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto31["m_sql"] = "visa_no";
$proto31["m_srcTableName"] = "employees";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_expiry",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto33["m_sql"] = "visa_expiry";
$proto33["m_srcTableName"] = "employees";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto35["m_sql"] = "division_id";
$proto35["m_srcTableName"] = "employees";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "doj",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto37["m_sql"] = "doj";
$proto37["m_srcTableName"] = "employees";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "dor",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto39["m_sql"] = "dor";
$proto39["m_srcTableName"] = "employees";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto41["m_sql"] = "status_id";
$proto41["m_srcTableName"] = "employees";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "experence",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto43["m_sql"] = "experence";
$proto43["m_srcTableName"] = "employees";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto45["m_sql"] = "nationality";
$proto45["m_srcTableName"] = "employees";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "qulification",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto47["m_sql"] = "qulification";
$proto47["m_srcTableName"] = "employees";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "skillset",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto49["m_sql"] = "skillset";
$proto49["m_srcTableName"] = "employees";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto51["m_sql"] = "cid";
$proto51["m_srcTableName"] = "employees";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto53["m_sql"] = "reset_token";
$proto53["m_srcTableName"] = "employees";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "employees",
	"m_srcTableName" => "employees"
));

$proto55["m_sql"] = "reset_date";
$proto55["m_srcTableName"] = "employees";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "employees";
$proto58["m_srcTableName"] = "employees";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "eid";
$proto58["m_columns"][] = "ename";
$proto58["m_columns"][] = "emppic";
$proto58["m_columns"][] = "designation";
$proto58["m_columns"][] = "whtasapp";
$proto58["m_columns"][] = "localnum";
$proto58["m_columns"][] = "skype";
$proto58["m_columns"][] = "dropbox";
$proto58["m_columns"][] = "email";
$proto58["m_columns"][] = "dob";
$proto58["m_columns"][] = "password";
$proto58["m_columns"][] = "passportno";
$proto58["m_columns"][] = "passport_expiry";
$proto58["m_columns"][] = "visa_no";
$proto58["m_columns"][] = "visa_expiry";
$proto58["m_columns"][] = "division_id";
$proto58["m_columns"][] = "doj";
$proto58["m_columns"][] = "dor";
$proto58["m_columns"][] = "status_id";
$proto58["m_columns"][] = "experence";
$proto58["m_columns"][] = "nationality";
$proto58["m_columns"][] = "qulification";
$proto58["m_columns"][] = "skillset";
$proto58["m_columns"][] = "cid";
$proto58["m_columns"][] = "reset_token";
$proto58["m_columns"][] = "reset_date";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "employees";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "employees";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="employees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employees = createSqlQuery_employees();


	
																										
	
$tdataemployees[".sqlquery"] = $queryData_employees;

$tableEvents["employees"] = new eventsBase;
$tdataemployees[".hasEvents"] = false;

?>