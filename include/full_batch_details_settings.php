<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafull_batch_details = array();
	$tdatafull_batch_details[".truncateText"] = true;
	$tdatafull_batch_details[".NumberOfChars"] = 80;
	$tdatafull_batch_details[".ShortName"] = "full_batch_details";
	$tdatafull_batch_details[".OwnerID"] = "";
	$tdatafull_batch_details[".OriginalTable"] = "full_batch_details";

//	field labels
$fieldLabelsfull_batch_details = array();
$fieldToolTipsfull_batch_details = array();
$pageTitlesfull_batch_details = array();
$placeHoldersfull_batch_details = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfull_batch_details["English"] = array();
	$fieldToolTipsfull_batch_details["English"] = array();
	$placeHoldersfull_batch_details["English"] = array();
	$pageTitlesfull_batch_details["English"] = array();
	$fieldLabelsfull_batch_details["English"]["track"] = "Track";
	$fieldToolTipsfull_batch_details["English"]["track"] = "";
	$placeHoldersfull_batch_details["English"]["track"] = "";
	$fieldLabelsfull_batch_details["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsfull_batch_details["English"]["Batchcode"] = "";
	$placeHoldersfull_batch_details["English"]["Batchcode"] = "";
	$fieldLabelsfull_batch_details["English"]["fbgroup"] = "Fbgroup";
	$fieldToolTipsfull_batch_details["English"]["fbgroup"] = "";
	$placeHoldersfull_batch_details["English"]["fbgroup"] = "";
	$fieldLabelsfull_batch_details["English"]["university_id"] = "University Id";
	$fieldToolTipsfull_batch_details["English"]["university_id"] = "";
	$placeHoldersfull_batch_details["English"]["university_id"] = "";
	$fieldLabelsfull_batch_details["English"]["division_id"] = "Division Id";
	$fieldToolTipsfull_batch_details["English"]["division_id"] = "";
	$placeHoldersfull_batch_details["English"]["division_id"] = "";
	$fieldLabelsfull_batch_details["English"]["department_id"] = "Department Id";
	$fieldToolTipsfull_batch_details["English"]["department_id"] = "";
	$placeHoldersfull_batch_details["English"]["department_id"] = "";
	$fieldLabelsfull_batch_details["English"]["uni_spoc_name"] = "Uni Spoc Name";
	$fieldToolTipsfull_batch_details["English"]["uni_spoc_name"] = "";
	$placeHoldersfull_batch_details["English"]["uni_spoc_name"] = "";
	$fieldLabelsfull_batch_details["English"]["uni_spoc_contact"] = "Uni Spoc Contact";
	$fieldToolTipsfull_batch_details["English"]["uni_spoc_contact"] = "";
	$placeHoldersfull_batch_details["English"]["uni_spoc_contact"] = "";
	$fieldLabelsfull_batch_details["English"]["ey_spoc"] = "Ey Spoc";
	$fieldToolTipsfull_batch_details["English"]["ey_spoc"] = "";
	$placeHoldersfull_batch_details["English"]["ey_spoc"] = "";
	$fieldLabelsfull_batch_details["English"]["local_spoc"] = "Local Spoc";
	$fieldToolTipsfull_batch_details["English"]["local_spoc"] = "";
	$placeHoldersfull_batch_details["English"]["local_spoc"] = "";
	$fieldLabelsfull_batch_details["English"]["cid"] = "Cid";
	$fieldToolTipsfull_batch_details["English"]["cid"] = "";
	$placeHoldersfull_batch_details["English"]["cid"] = "";
	$fieldLabelsfull_batch_details["English"]["schedule"] = "Schedule";
	$fieldToolTipsfull_batch_details["English"]["schedule"] = "";
	$placeHoldersfull_batch_details["English"]["schedule"] = "";
	$fieldLabelsfull_batch_details["English"]["tech_trainer"] = "Tech Trainer";
	$fieldToolTipsfull_batch_details["English"]["tech_trainer"] = "";
	$placeHoldersfull_batch_details["English"]["tech_trainer"] = "";
	$fieldLabelsfull_batch_details["English"]["soft_skill_trainer"] = "Soft Skill Trainer";
	$fieldToolTipsfull_batch_details["English"]["soft_skill_trainer"] = "";
	$placeHoldersfull_batch_details["English"]["soft_skill_trainer"] = "";
	$fieldLabelsfull_batch_details["English"]["sdate"] = "Sdate";
	$fieldToolTipsfull_batch_details["English"]["sdate"] = "";
	$placeHoldersfull_batch_details["English"]["sdate"] = "";
	$fieldLabelsfull_batch_details["English"]["stime"] = "Stime";
	$fieldToolTipsfull_batch_details["English"]["stime"] = "";
	$placeHoldersfull_batch_details["English"]["stime"] = "";
	$fieldLabelsfull_batch_details["English"]["etime"] = "Etime";
	$fieldToolTipsfull_batch_details["English"]["etime"] = "";
	$placeHoldersfull_batch_details["English"]["etime"] = "";
	$fieldLabelsfull_batch_details["English"]["status"] = "Status";
	$fieldToolTipsfull_batch_details["English"]["status"] = "";
	$placeHoldersfull_batch_details["English"]["status"] = "";
	$fieldLabelsfull_batch_details["English"]["remark"] = "Remark";
	$fieldToolTipsfull_batch_details["English"]["remark"] = "";
	$placeHoldersfull_batch_details["English"]["remark"] = "";
	if (count($fieldToolTipsfull_batch_details["English"]))
		$tdatafull_batch_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfull_batch_details[""] = array();
	$fieldToolTipsfull_batch_details[""] = array();
	$placeHoldersfull_batch_details[""] = array();
	$pageTitlesfull_batch_details[""] = array();
	if (count($fieldToolTipsfull_batch_details[""]))
		$tdatafull_batch_details[".isUseToolTips"] = true;
}


	$tdatafull_batch_details[".NCSearch"] = true;



$tdatafull_batch_details[".shortTableName"] = "full_batch_details";
$tdatafull_batch_details[".nSecOptions"] = 0;
$tdatafull_batch_details[".recsPerRowPrint"] = 1;
$tdatafull_batch_details[".mainTableOwnerID"] = "";
$tdatafull_batch_details[".moveNext"] = 1;
$tdatafull_batch_details[".entityType"] = 0;

$tdatafull_batch_details[".strOriginalTableName"] = "full_batch_details";

	



$tdatafull_batch_details[".showAddInPopup"] = false;

$tdatafull_batch_details[".showEditInPopup"] = false;

$tdatafull_batch_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafull_batch_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafull_batch_details[".fieldsForRegister"] = array();

$tdatafull_batch_details[".listAjax"] = false;

	$tdatafull_batch_details[".audit"] = false;

	$tdatafull_batch_details[".locking"] = false;



$tdatafull_batch_details[".list"] = true;



$tdatafull_batch_details[".reorderRecordsByHeader"] = true;


$tdatafull_batch_details[".exportFormatting"] = 2;
$tdatafull_batch_details[".exportDelimiter"] = ",";
		

$tdatafull_batch_details[".import"] = true;

$tdatafull_batch_details[".exportTo"] = true;

$tdatafull_batch_details[".printFriendly"] = true;


$tdatafull_batch_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafull_batch_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafull_batch_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafull_batch_details[".searchSaving"] = false;
//

$tdatafull_batch_details[".showSearchPanel"] = true;
		$tdatafull_batch_details[".flexibleSearch"] = true;

$tdatafull_batch_details[".isUseAjaxSuggest"] = true;

$tdatafull_batch_details[".rowHighlite"] = true;





$tdatafull_batch_details[".ajaxCodeSnippetAdded"] = false;

$tdatafull_batch_details[".buttonsAdded"] = false;

$tdatafull_batch_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafull_batch_details[".isUseTimeForSearch"] = false;





$tdatafull_batch_details[".allSearchFields"] = array();
$tdatafull_batch_details[".filterFields"] = array();
$tdatafull_batch_details[".requiredSearchFields"] = array();

$tdatafull_batch_details[".allSearchFields"][] = "track";
	$tdatafull_batch_details[".allSearchFields"][] = "Batchcode";
	$tdatafull_batch_details[".allSearchFields"][] = "fbgroup";
	$tdatafull_batch_details[".allSearchFields"][] = "university_id";
	$tdatafull_batch_details[".allSearchFields"][] = "division_id";
	$tdatafull_batch_details[".allSearchFields"][] = "department_id";
	$tdatafull_batch_details[".allSearchFields"][] = "uni_spoc_name";
	$tdatafull_batch_details[".allSearchFields"][] = "uni_spoc_contact";
	$tdatafull_batch_details[".allSearchFields"][] = "ey_spoc";
	$tdatafull_batch_details[".allSearchFields"][] = "local_spoc";
	$tdatafull_batch_details[".allSearchFields"][] = "cid";
	$tdatafull_batch_details[".allSearchFields"][] = "schedule";
	$tdatafull_batch_details[".allSearchFields"][] = "tech_trainer";
	$tdatafull_batch_details[".allSearchFields"][] = "soft_skill_trainer";
	$tdatafull_batch_details[".allSearchFields"][] = "sdate";
	$tdatafull_batch_details[".allSearchFields"][] = "stime";
	$tdatafull_batch_details[".allSearchFields"][] = "etime";
	$tdatafull_batch_details[".allSearchFields"][] = "status";
	$tdatafull_batch_details[".allSearchFields"][] = "remark";
	

$tdatafull_batch_details[".googleLikeFields"] = array();
$tdatafull_batch_details[".googleLikeFields"][] = "track";
$tdatafull_batch_details[".googleLikeFields"][] = "Batchcode";
$tdatafull_batch_details[".googleLikeFields"][] = "fbgroup";
$tdatafull_batch_details[".googleLikeFields"][] = "university_id";
$tdatafull_batch_details[".googleLikeFields"][] = "division_id";
$tdatafull_batch_details[".googleLikeFields"][] = "department_id";
$tdatafull_batch_details[".googleLikeFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".googleLikeFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".googleLikeFields"][] = "ey_spoc";
$tdatafull_batch_details[".googleLikeFields"][] = "local_spoc";
$tdatafull_batch_details[".googleLikeFields"][] = "cid";
$tdatafull_batch_details[".googleLikeFields"][] = "schedule";
$tdatafull_batch_details[".googleLikeFields"][] = "tech_trainer";
$tdatafull_batch_details[".googleLikeFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".googleLikeFields"][] = "sdate";
$tdatafull_batch_details[".googleLikeFields"][] = "stime";
$tdatafull_batch_details[".googleLikeFields"][] = "etime";
$tdatafull_batch_details[".googleLikeFields"][] = "status";
$tdatafull_batch_details[".googleLikeFields"][] = "remark";


$tdatafull_batch_details[".advSearchFields"] = array();
$tdatafull_batch_details[".advSearchFields"][] = "track";
$tdatafull_batch_details[".advSearchFields"][] = "Batchcode";
$tdatafull_batch_details[".advSearchFields"][] = "fbgroup";
$tdatafull_batch_details[".advSearchFields"][] = "university_id";
$tdatafull_batch_details[".advSearchFields"][] = "division_id";
$tdatafull_batch_details[".advSearchFields"][] = "department_id";
$tdatafull_batch_details[".advSearchFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".advSearchFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".advSearchFields"][] = "ey_spoc";
$tdatafull_batch_details[".advSearchFields"][] = "local_spoc";
$tdatafull_batch_details[".advSearchFields"][] = "cid";
$tdatafull_batch_details[".advSearchFields"][] = "schedule";
$tdatafull_batch_details[".advSearchFields"][] = "tech_trainer";
$tdatafull_batch_details[".advSearchFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".advSearchFields"][] = "sdate";
$tdatafull_batch_details[".advSearchFields"][] = "stime";
$tdatafull_batch_details[".advSearchFields"][] = "etime";
$tdatafull_batch_details[".advSearchFields"][] = "status";
$tdatafull_batch_details[".advSearchFields"][] = "remark";

$tdatafull_batch_details[".tableType"] = "list";

$tdatafull_batch_details[".printerPageOrientation"] = 0;
$tdatafull_batch_details[".nPrinterPageScale"] = 100;

$tdatafull_batch_details[".nPrinterSplitRecords"] = 40;

$tdatafull_batch_details[".nPrinterPDFSplitRecords"] = 40;



$tdatafull_batch_details[".geocodingEnabled"] = false;





$tdatafull_batch_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafull_batch_details[".pageSize"] = 20;

$tdatafull_batch_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafull_batch_details[".strOrderBy"] = $tstrOrderBy;

$tdatafull_batch_details[".orderindexes"] = array();

$tdatafull_batch_details[".sqlHead"] = "SELECT track,  	Batchcode,  	fbgroup,  	university_id,  	division_id,  	department_id,  	uni_spoc_name,  	uni_spoc_contact,  	ey_spoc,  	local_spoc,  	cid,  	schedule,  	tech_trainer,  	soft_skill_trainer,  	sdate,  	stime,  	etime,  	status,  	remark";
$tdatafull_batch_details[".sqlFrom"] = "FROM full_batch_details";
$tdatafull_batch_details[".sqlWhereExpr"] = "";
$tdatafull_batch_details[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafull_batch_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafull_batch_details[".arrGroupsPerPage"] = $arrGPP;

$tdatafull_batch_details[".highlightSearchResults"] = true;

$tableKeysfull_batch_details = array();
$tdatafull_batch_details[".Keys"] = $tableKeysfull_batch_details;

$tdatafull_batch_details[".listFields"] = array();
$tdatafull_batch_details[".listFields"][] = "track";
$tdatafull_batch_details[".listFields"][] = "Batchcode";
$tdatafull_batch_details[".listFields"][] = "fbgroup";
$tdatafull_batch_details[".listFields"][] = "university_id";
$tdatafull_batch_details[".listFields"][] = "division_id";
$tdatafull_batch_details[".listFields"][] = "department_id";
$tdatafull_batch_details[".listFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".listFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".listFields"][] = "ey_spoc";
$tdatafull_batch_details[".listFields"][] = "local_spoc";
$tdatafull_batch_details[".listFields"][] = "cid";
$tdatafull_batch_details[".listFields"][] = "schedule";
$tdatafull_batch_details[".listFields"][] = "tech_trainer";
$tdatafull_batch_details[".listFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".listFields"][] = "sdate";
$tdatafull_batch_details[".listFields"][] = "stime";
$tdatafull_batch_details[".listFields"][] = "etime";
$tdatafull_batch_details[".listFields"][] = "status";
$tdatafull_batch_details[".listFields"][] = "remark";

$tdatafull_batch_details[".hideMobileList"] = array();


$tdatafull_batch_details[".viewFields"] = array();
$tdatafull_batch_details[".viewFields"][] = "track";
$tdatafull_batch_details[".viewFields"][] = "Batchcode";
$tdatafull_batch_details[".viewFields"][] = "fbgroup";
$tdatafull_batch_details[".viewFields"][] = "university_id";
$tdatafull_batch_details[".viewFields"][] = "division_id";
$tdatafull_batch_details[".viewFields"][] = "department_id";
$tdatafull_batch_details[".viewFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".viewFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".viewFields"][] = "ey_spoc";
$tdatafull_batch_details[".viewFields"][] = "local_spoc";
$tdatafull_batch_details[".viewFields"][] = "cid";
$tdatafull_batch_details[".viewFields"][] = "schedule";
$tdatafull_batch_details[".viewFields"][] = "tech_trainer";
$tdatafull_batch_details[".viewFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".viewFields"][] = "sdate";
$tdatafull_batch_details[".viewFields"][] = "stime";
$tdatafull_batch_details[".viewFields"][] = "etime";
$tdatafull_batch_details[".viewFields"][] = "status";
$tdatafull_batch_details[".viewFields"][] = "remark";

$tdatafull_batch_details[".addFields"] = array();
$tdatafull_batch_details[".addFields"][] = "track";
$tdatafull_batch_details[".addFields"][] = "Batchcode";
$tdatafull_batch_details[".addFields"][] = "fbgroup";
$tdatafull_batch_details[".addFields"][] = "university_id";
$tdatafull_batch_details[".addFields"][] = "division_id";
$tdatafull_batch_details[".addFields"][] = "department_id";
$tdatafull_batch_details[".addFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".addFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".addFields"][] = "ey_spoc";
$tdatafull_batch_details[".addFields"][] = "local_spoc";
$tdatafull_batch_details[".addFields"][] = "cid";
$tdatafull_batch_details[".addFields"][] = "schedule";
$tdatafull_batch_details[".addFields"][] = "tech_trainer";
$tdatafull_batch_details[".addFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".addFields"][] = "sdate";
$tdatafull_batch_details[".addFields"][] = "stime";
$tdatafull_batch_details[".addFields"][] = "etime";
$tdatafull_batch_details[".addFields"][] = "status";
$tdatafull_batch_details[".addFields"][] = "remark";

$tdatafull_batch_details[".masterListFields"] = array();
$tdatafull_batch_details[".masterListFields"][] = "track";
$tdatafull_batch_details[".masterListFields"][] = "Batchcode";
$tdatafull_batch_details[".masterListFields"][] = "fbgroup";
$tdatafull_batch_details[".masterListFields"][] = "university_id";
$tdatafull_batch_details[".masterListFields"][] = "division_id";
$tdatafull_batch_details[".masterListFields"][] = "department_id";
$tdatafull_batch_details[".masterListFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".masterListFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".masterListFields"][] = "ey_spoc";
$tdatafull_batch_details[".masterListFields"][] = "local_spoc";
$tdatafull_batch_details[".masterListFields"][] = "cid";
$tdatafull_batch_details[".masterListFields"][] = "schedule";
$tdatafull_batch_details[".masterListFields"][] = "tech_trainer";
$tdatafull_batch_details[".masterListFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".masterListFields"][] = "sdate";
$tdatafull_batch_details[".masterListFields"][] = "stime";
$tdatafull_batch_details[".masterListFields"][] = "etime";
$tdatafull_batch_details[".masterListFields"][] = "status";
$tdatafull_batch_details[".masterListFields"][] = "remark";

$tdatafull_batch_details[".inlineAddFields"] = array();
$tdatafull_batch_details[".inlineAddFields"][] = "track";
$tdatafull_batch_details[".inlineAddFields"][] = "Batchcode";
$tdatafull_batch_details[".inlineAddFields"][] = "fbgroup";
$tdatafull_batch_details[".inlineAddFields"][] = "university_id";
$tdatafull_batch_details[".inlineAddFields"][] = "division_id";
$tdatafull_batch_details[".inlineAddFields"][] = "department_id";
$tdatafull_batch_details[".inlineAddFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".inlineAddFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".inlineAddFields"][] = "ey_spoc";
$tdatafull_batch_details[".inlineAddFields"][] = "local_spoc";
$tdatafull_batch_details[".inlineAddFields"][] = "cid";
$tdatafull_batch_details[".inlineAddFields"][] = "schedule";
$tdatafull_batch_details[".inlineAddFields"][] = "tech_trainer";
$tdatafull_batch_details[".inlineAddFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".inlineAddFields"][] = "sdate";
$tdatafull_batch_details[".inlineAddFields"][] = "stime";
$tdatafull_batch_details[".inlineAddFields"][] = "etime";
$tdatafull_batch_details[".inlineAddFields"][] = "status";
$tdatafull_batch_details[".inlineAddFields"][] = "remark";

$tdatafull_batch_details[".editFields"] = array();
$tdatafull_batch_details[".editFields"][] = "track";
$tdatafull_batch_details[".editFields"][] = "Batchcode";
$tdatafull_batch_details[".editFields"][] = "fbgroup";
$tdatafull_batch_details[".editFields"][] = "university_id";
$tdatafull_batch_details[".editFields"][] = "division_id";
$tdatafull_batch_details[".editFields"][] = "department_id";
$tdatafull_batch_details[".editFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".editFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".editFields"][] = "ey_spoc";
$tdatafull_batch_details[".editFields"][] = "local_spoc";
$tdatafull_batch_details[".editFields"][] = "cid";
$tdatafull_batch_details[".editFields"][] = "schedule";
$tdatafull_batch_details[".editFields"][] = "tech_trainer";
$tdatafull_batch_details[".editFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".editFields"][] = "sdate";
$tdatafull_batch_details[".editFields"][] = "stime";
$tdatafull_batch_details[".editFields"][] = "etime";
$tdatafull_batch_details[".editFields"][] = "status";
$tdatafull_batch_details[".editFields"][] = "remark";

$tdatafull_batch_details[".inlineEditFields"] = array();
$tdatafull_batch_details[".inlineEditFields"][] = "track";
$tdatafull_batch_details[".inlineEditFields"][] = "Batchcode";
$tdatafull_batch_details[".inlineEditFields"][] = "fbgroup";
$tdatafull_batch_details[".inlineEditFields"][] = "university_id";
$tdatafull_batch_details[".inlineEditFields"][] = "division_id";
$tdatafull_batch_details[".inlineEditFields"][] = "department_id";
$tdatafull_batch_details[".inlineEditFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".inlineEditFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".inlineEditFields"][] = "ey_spoc";
$tdatafull_batch_details[".inlineEditFields"][] = "local_spoc";
$tdatafull_batch_details[".inlineEditFields"][] = "cid";
$tdatafull_batch_details[".inlineEditFields"][] = "schedule";
$tdatafull_batch_details[".inlineEditFields"][] = "tech_trainer";
$tdatafull_batch_details[".inlineEditFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".inlineEditFields"][] = "sdate";
$tdatafull_batch_details[".inlineEditFields"][] = "stime";
$tdatafull_batch_details[".inlineEditFields"][] = "etime";
$tdatafull_batch_details[".inlineEditFields"][] = "status";
$tdatafull_batch_details[".inlineEditFields"][] = "remark";

$tdatafull_batch_details[".updateSelectedFields"] = array();
$tdatafull_batch_details[".updateSelectedFields"][] = "track";
$tdatafull_batch_details[".updateSelectedFields"][] = "Batchcode";
$tdatafull_batch_details[".updateSelectedFields"][] = "fbgroup";
$tdatafull_batch_details[".updateSelectedFields"][] = "university_id";
$tdatafull_batch_details[".updateSelectedFields"][] = "division_id";
$tdatafull_batch_details[".updateSelectedFields"][] = "department_id";
$tdatafull_batch_details[".updateSelectedFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".updateSelectedFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".updateSelectedFields"][] = "ey_spoc";
$tdatafull_batch_details[".updateSelectedFields"][] = "local_spoc";
$tdatafull_batch_details[".updateSelectedFields"][] = "cid";
$tdatafull_batch_details[".updateSelectedFields"][] = "schedule";
$tdatafull_batch_details[".updateSelectedFields"][] = "tech_trainer";
$tdatafull_batch_details[".updateSelectedFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".updateSelectedFields"][] = "sdate";
$tdatafull_batch_details[".updateSelectedFields"][] = "stime";
$tdatafull_batch_details[".updateSelectedFields"][] = "etime";
$tdatafull_batch_details[".updateSelectedFields"][] = "status";
$tdatafull_batch_details[".updateSelectedFields"][] = "remark";


$tdatafull_batch_details[".exportFields"] = array();
$tdatafull_batch_details[".exportFields"][] = "track";
$tdatafull_batch_details[".exportFields"][] = "Batchcode";
$tdatafull_batch_details[".exportFields"][] = "fbgroup";
$tdatafull_batch_details[".exportFields"][] = "university_id";
$tdatafull_batch_details[".exportFields"][] = "division_id";
$tdatafull_batch_details[".exportFields"][] = "department_id";
$tdatafull_batch_details[".exportFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".exportFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".exportFields"][] = "ey_spoc";
$tdatafull_batch_details[".exportFields"][] = "local_spoc";
$tdatafull_batch_details[".exportFields"][] = "cid";
$tdatafull_batch_details[".exportFields"][] = "schedule";
$tdatafull_batch_details[".exportFields"][] = "tech_trainer";
$tdatafull_batch_details[".exportFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".exportFields"][] = "sdate";
$tdatafull_batch_details[".exportFields"][] = "stime";
$tdatafull_batch_details[".exportFields"][] = "etime";
$tdatafull_batch_details[".exportFields"][] = "status";
$tdatafull_batch_details[".exportFields"][] = "remark";

$tdatafull_batch_details[".importFields"] = array();
$tdatafull_batch_details[".importFields"][] = "track";
$tdatafull_batch_details[".importFields"][] = "Batchcode";
$tdatafull_batch_details[".importFields"][] = "fbgroup";
$tdatafull_batch_details[".importFields"][] = "university_id";
$tdatafull_batch_details[".importFields"][] = "division_id";
$tdatafull_batch_details[".importFields"][] = "department_id";
$tdatafull_batch_details[".importFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".importFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".importFields"][] = "ey_spoc";
$tdatafull_batch_details[".importFields"][] = "local_spoc";
$tdatafull_batch_details[".importFields"][] = "cid";
$tdatafull_batch_details[".importFields"][] = "schedule";
$tdatafull_batch_details[".importFields"][] = "tech_trainer";
$tdatafull_batch_details[".importFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".importFields"][] = "sdate";
$tdatafull_batch_details[".importFields"][] = "stime";
$tdatafull_batch_details[".importFields"][] = "etime";
$tdatafull_batch_details[".importFields"][] = "status";
$tdatafull_batch_details[".importFields"][] = "remark";

$tdatafull_batch_details[".printFields"] = array();
$tdatafull_batch_details[".printFields"][] = "track";
$tdatafull_batch_details[".printFields"][] = "Batchcode";
$tdatafull_batch_details[".printFields"][] = "fbgroup";
$tdatafull_batch_details[".printFields"][] = "university_id";
$tdatafull_batch_details[".printFields"][] = "division_id";
$tdatafull_batch_details[".printFields"][] = "department_id";
$tdatafull_batch_details[".printFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".printFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".printFields"][] = "ey_spoc";
$tdatafull_batch_details[".printFields"][] = "local_spoc";
$tdatafull_batch_details[".printFields"][] = "cid";
$tdatafull_batch_details[".printFields"][] = "schedule";
$tdatafull_batch_details[".printFields"][] = "tech_trainer";
$tdatafull_batch_details[".printFields"][] = "soft_skill_trainer";
$tdatafull_batch_details[".printFields"][] = "sdate";
$tdatafull_batch_details[".printFields"][] = "stime";
$tdatafull_batch_details[".printFields"][] = "etime";
$tdatafull_batch_details[".printFields"][] = "status";
$tdatafull_batch_details[".printFields"][] = "remark";


//	track
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "track";
	$fdata["GoodName"] = "track";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","track");
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

		$fdata["strField"] = "track";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track";

	
	
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




	$tdatafull_batch_details["track"] = $fdata;
//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","Batchcode");
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

		$fdata["strField"] = "Batchcode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Batchcode";

	
	
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




	$tdatafull_batch_details["Batchcode"] = $fdata;
//	fbgroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fbgroup";
	$fdata["GoodName"] = "fbgroup";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","fbgroup");
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

		$fdata["strField"] = "fbgroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fbgroup";

	
	
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




	$tdatafull_batch_details["fbgroup"] = $fdata;
//	university_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "university_id";
	$fdata["GoodName"] = "university_id";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","university_id");
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

		$fdata["strField"] = "university_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "university_id";

	
	
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




	$tdatafull_batch_details["university_id"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","division_id");
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




	$tdatafull_batch_details["division_id"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","department_id");
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

		$fdata["strField"] = "department_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department_id";

	
	
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




	$tdatafull_batch_details["department_id"] = $fdata;
//	uni_spoc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "uni_spoc_name";
	$fdata["GoodName"] = "uni_spoc_name";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","uni_spoc_name");
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

		$fdata["strField"] = "uni_spoc_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uni_spoc_name";

	
	
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




	$tdatafull_batch_details["uni_spoc_name"] = $fdata;
//	uni_spoc_contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "uni_spoc_contact";
	$fdata["GoodName"] = "uni_spoc_contact";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","uni_spoc_contact");
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

		$fdata["strField"] = "uni_spoc_contact";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uni_spoc_contact";

	
	
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




	$tdatafull_batch_details["uni_spoc_contact"] = $fdata;
//	ey_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ey_spoc";
	$fdata["GoodName"] = "ey_spoc";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","ey_spoc");
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

		$fdata["strField"] = "ey_spoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ey_spoc";

	
	
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




	$tdatafull_batch_details["ey_spoc"] = $fdata;
//	local_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "local_spoc";
	$fdata["GoodName"] = "local_spoc";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","local_spoc");
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

		$fdata["strField"] = "local_spoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "local_spoc";

	
	
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




	$tdatafull_batch_details["local_spoc"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","cid");
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




	$tdatafull_batch_details["cid"] = $fdata;
//	schedule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "schedule";
	$fdata["GoodName"] = "schedule";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","schedule");
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

		$fdata["strField"] = "schedule";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "schedule";

	
	
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




	$tdatafull_batch_details["schedule"] = $fdata;
//	tech_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "tech_trainer";
	$fdata["GoodName"] = "tech_trainer";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","tech_trainer");
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

		$fdata["strField"] = "tech_trainer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tech_trainer";

	
	
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




	$tdatafull_batch_details["tech_trainer"] = $fdata;
//	soft_skill_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "soft_skill_trainer";
	$fdata["GoodName"] = "soft_skill_trainer";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","soft_skill_trainer");
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

		$fdata["strField"] = "soft_skill_trainer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "soft_skill_trainer";

	
	
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




	$tdatafull_batch_details["soft_skill_trainer"] = $fdata;
//	sdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sdate";
	$fdata["GoodName"] = "sdate";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","sdate");
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

		$fdata["strField"] = "sdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sdate";

	
	
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




	$tdatafull_batch_details["sdate"] = $fdata;
//	stime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "stime";
	$fdata["GoodName"] = "stime";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","stime");
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

		$fdata["strField"] = "stime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stime";

	
	
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




	$tdatafull_batch_details["stime"] = $fdata;
//	etime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "etime";
	$fdata["GoodName"] = "etime";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","etime");
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

		$fdata["strField"] = "etime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "etime";

	
	
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




	$tdatafull_batch_details["etime"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","status");
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

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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




	$tdatafull_batch_details["status"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "full_batch_details";
	$fdata["Label"] = GetFieldLabel("full_batch_details","remark");
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

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remark";

	
	
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




	$tdatafull_batch_details["remark"] = $fdata;


$tables_data["full_batch_details"]=&$tdatafull_batch_details;
$field_labels["full_batch_details"] = &$fieldLabelsfull_batch_details;
$fieldToolTips["full_batch_details"] = &$fieldToolTipsfull_batch_details;
$placeHolders["full_batch_details"] = &$placeHoldersfull_batch_details;
$page_titles["full_batch_details"] = &$pageTitlesfull_batch_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["full_batch_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["full_batch_details"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_full_batch_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "track,  	Batchcode,  	fbgroup,  	university_id,  	division_id,  	department_id,  	uni_spoc_name,  	uni_spoc_contact,  	ey_spoc,  	local_spoc,  	cid,  	schedule,  	tech_trainer,  	soft_skill_trainer,  	sdate,  	stime,  	etime,  	status,  	remark";
$proto0["m_strFrom"] = "FROM full_batch_details";
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
	"m_strName" => "track",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto6["m_sql"] = "track";
$proto6["m_srcTableName"] = "full_batch_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Batchcode",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto8["m_sql"] = "Batchcode";
$proto8["m_srcTableName"] = "full_batch_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fbgroup",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto10["m_sql"] = "fbgroup";
$proto10["m_srcTableName"] = "full_batch_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "university_id",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto12["m_sql"] = "university_id";
$proto12["m_srcTableName"] = "full_batch_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto14["m_sql"] = "division_id";
$proto14["m_srcTableName"] = "full_batch_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto16["m_sql"] = "department_id";
$proto16["m_srcTableName"] = "full_batch_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_name",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto18["m_sql"] = "uni_spoc_name";
$proto18["m_srcTableName"] = "full_batch_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_contact",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto20["m_sql"] = "uni_spoc_contact";
$proto20["m_srcTableName"] = "full_batch_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ey_spoc",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto22["m_sql"] = "ey_spoc";
$proto22["m_srcTableName"] = "full_batch_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "local_spoc",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto24["m_sql"] = "local_spoc";
$proto24["m_srcTableName"] = "full_batch_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto26["m_sql"] = "cid";
$proto26["m_srcTableName"] = "full_batch_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "schedule",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto28["m_sql"] = "schedule";
$proto28["m_srcTableName"] = "full_batch_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "tech_trainer",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto30["m_sql"] = "tech_trainer";
$proto30["m_srcTableName"] = "full_batch_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "soft_skill_trainer",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto32["m_sql"] = "soft_skill_trainer";
$proto32["m_srcTableName"] = "full_batch_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sdate",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto34["m_sql"] = "sdate";
$proto34["m_srcTableName"] = "full_batch_details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "stime",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto36["m_sql"] = "stime";
$proto36["m_srcTableName"] = "full_batch_details";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "etime",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto38["m_sql"] = "etime";
$proto38["m_srcTableName"] = "full_batch_details";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto40["m_sql"] = "status";
$proto40["m_srcTableName"] = "full_batch_details";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "full_batch_details",
	"m_srcTableName" => "full_batch_details"
));

$proto42["m_sql"] = "remark";
$proto42["m_srcTableName"] = "full_batch_details";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "full_batch_details";
$proto45["m_srcTableName"] = "full_batch_details";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "track";
$proto45["m_columns"][] = "Batchcode";
$proto45["m_columns"][] = "fbgroup";
$proto45["m_columns"][] = "university_id";
$proto45["m_columns"][] = "division_id";
$proto45["m_columns"][] = "department_id";
$proto45["m_columns"][] = "uni_spoc_name";
$proto45["m_columns"][] = "uni_spoc_contact";
$proto45["m_columns"][] = "ey_spoc";
$proto45["m_columns"][] = "local_spoc";
$proto45["m_columns"][] = "cid";
$proto45["m_columns"][] = "schedule";
$proto45["m_columns"][] = "tech_trainer";
$proto45["m_columns"][] = "soft_skill_trainer";
$proto45["m_columns"][] = "sdate";
$proto45["m_columns"][] = "stime";
$proto45["m_columns"][] = "etime";
$proto45["m_columns"][] = "status";
$proto45["m_columns"][] = "remark";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "full_batch_details";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "full_batch_details";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="full_batch_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_full_batch_details = createSqlQuery_full_batch_details();


	
		;

																			

$tdatafull_batch_details[".sqlquery"] = $queryData_full_batch_details;

$tableEvents["full_batch_details"] = new eventsBase;
$tdatafull_batch_details[".hasEvents"] = false;

?>