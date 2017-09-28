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
	$fieldLabelsfull_batch_details["English"]["Track"] = "Track";
	$fieldToolTipsfull_batch_details["English"]["Track"] = "";
	$placeHoldersfull_batch_details["English"]["Track"] = "";
	$fieldLabelsfull_batch_details["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsfull_batch_details["English"]["Batchcode"] = "";
	$placeHoldersfull_batch_details["English"]["Batchcode"] = "";
	$fieldLabelsfull_batch_details["English"]["fbgroup"] = "Fbgroup";
	$fieldToolTipsfull_batch_details["English"]["fbgroup"] = "";
	$placeHoldersfull_batch_details["English"]["fbgroup"] = "";
	$fieldLabelsfull_batch_details["English"]["university_id"] = "University";
	$fieldToolTipsfull_batch_details["English"]["university_id"] = "";
	$placeHoldersfull_batch_details["English"]["university_id"] = "";
	$fieldLabelsfull_batch_details["English"]["division_id"] = "Division";
	$fieldToolTipsfull_batch_details["English"]["division_id"] = "";
	$placeHoldersfull_batch_details["English"]["division_id"] = "";
	$fieldLabelsfull_batch_details["English"]["department_id"] = "Department";
	$fieldToolTipsfull_batch_details["English"]["department_id"] = "";
	$placeHoldersfull_batch_details["English"]["department_id"] = "";
	$fieldLabelsfull_batch_details["English"]["uni_spoc_name"] = "University/College/Company SPOC";
	$fieldToolTipsfull_batch_details["English"]["uni_spoc_name"] = "";
	$placeHoldersfull_batch_details["English"]["uni_spoc_name"] = "";
	$fieldLabelsfull_batch_details["English"]["uni_spoc_contact"] = "University/College/Company SPOC Contact";
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
	$fieldLabelsfull_batch_details["English"]["status"] = "Status";
	$fieldToolTipsfull_batch_details["English"]["status"] = "";
	$placeHoldersfull_batch_details["English"]["status"] = "";
	$fieldLabelsfull_batch_details["English"]["starting_Date"] = "Starting Date";
	$fieldToolTipsfull_batch_details["English"]["starting_Date"] = "";
	$placeHoldersfull_batch_details["English"]["starting_Date"] = "";
	if (count($fieldToolTipsfull_batch_details["English"]))
		$tdatafull_batch_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfull_batch_details[""] = array();
	$fieldToolTipsfull_batch_details[""] = array();
	$placeHoldersfull_batch_details[""] = array();
	$pageTitlesfull_batch_details[""] = array();
	$fieldLabelsfull_batch_details[""]["Track"] = "Track";
	$fieldToolTipsfull_batch_details[""]["Track"] = "";
	$placeHoldersfull_batch_details[""]["Track"] = "";
	$fieldLabelsfull_batch_details[""]["Batchcode"] = "Batchcode";
	$fieldToolTipsfull_batch_details[""]["Batchcode"] = "";
	$placeHoldersfull_batch_details[""]["Batchcode"] = "";
	$fieldLabelsfull_batch_details[""]["fbgroup"] = "Fbgroup";
	$fieldToolTipsfull_batch_details[""]["fbgroup"] = "";
	$placeHoldersfull_batch_details[""]["fbgroup"] = "";
	$fieldLabelsfull_batch_details[""]["university_id"] = "University Id";
	$fieldToolTipsfull_batch_details[""]["university_id"] = "";
	$placeHoldersfull_batch_details[""]["university_id"] = "";
	$fieldLabelsfull_batch_details[""]["division_id"] = "Division Id";
	$fieldToolTipsfull_batch_details[""]["division_id"] = "";
	$placeHoldersfull_batch_details[""]["division_id"] = "";
	$fieldLabelsfull_batch_details[""]["department_id"] = "Department Id";
	$fieldToolTipsfull_batch_details[""]["department_id"] = "";
	$placeHoldersfull_batch_details[""]["department_id"] = "";
	$fieldLabelsfull_batch_details[""]["uni_spoc_name"] = "Uni Spoc Name";
	$fieldToolTipsfull_batch_details[""]["uni_spoc_name"] = "";
	$placeHoldersfull_batch_details[""]["uni_spoc_name"] = "";
	$fieldLabelsfull_batch_details[""]["uni_spoc_contact"] = "Uni Spoc Contact";
	$fieldToolTipsfull_batch_details[""]["uni_spoc_contact"] = "";
	$placeHoldersfull_batch_details[""]["uni_spoc_contact"] = "";
	$fieldLabelsfull_batch_details[""]["ey_spoc"] = "Ey Spoc";
	$fieldToolTipsfull_batch_details[""]["ey_spoc"] = "";
	$placeHoldersfull_batch_details[""]["ey_spoc"] = "";
	$fieldLabelsfull_batch_details[""]["local_spoc"] = "Local Spoc";
	$fieldToolTipsfull_batch_details[""]["local_spoc"] = "";
	$placeHoldersfull_batch_details[""]["local_spoc"] = "";
	$fieldLabelsfull_batch_details[""]["cid"] = "Cid";
	$fieldToolTipsfull_batch_details[""]["cid"] = "";
	$placeHoldersfull_batch_details[""]["cid"] = "";
	$fieldLabelsfull_batch_details[""]["schedule"] = "Schedule";
	$fieldToolTipsfull_batch_details[""]["schedule"] = "";
	$placeHoldersfull_batch_details[""]["schedule"] = "";
	$fieldLabelsfull_batch_details[""]["tech_trainer"] = "Tech Trainer";
	$fieldToolTipsfull_batch_details[""]["tech_trainer"] = "";
	$placeHoldersfull_batch_details[""]["tech_trainer"] = "";
	$fieldLabelsfull_batch_details[""]["soft_skill_trainer"] = "Soft Skill Trainer";
	$fieldToolTipsfull_batch_details[""]["soft_skill_trainer"] = "";
	$placeHoldersfull_batch_details[""]["soft_skill_trainer"] = "";
	$fieldLabelsfull_batch_details[""]["status"] = "Status";
	$fieldToolTipsfull_batch_details[""]["status"] = "";
	$placeHoldersfull_batch_details[""]["status"] = "";
	$fieldLabelsfull_batch_details[""]["starting_Date"] = "Starting Date";
	$fieldToolTipsfull_batch_details[""]["starting_Date"] = "";
	$placeHoldersfull_batch_details[""]["starting_Date"] = "";
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

$tdatafull_batch_details[".allSearchFields"][] = "Batchcode";
	$tdatafull_batch_details[".allSearchFields"][] = "fbgroup";
	$tdatafull_batch_details[".allSearchFields"][] = "division_id";
	$tdatafull_batch_details[".allSearchFields"][] = "university_id";
	$tdatafull_batch_details[".allSearchFields"][] = "department_id";
	$tdatafull_batch_details[".allSearchFields"][] = "starting_Date";
	$tdatafull_batch_details[".allSearchFields"][] = "Track";
	$tdatafull_batch_details[".allSearchFields"][] = "cid";
	$tdatafull_batch_details[".allSearchFields"][] = "status";
	$tdatafull_batch_details[".allSearchFields"][] = "uni_spoc_name";
	$tdatafull_batch_details[".allSearchFields"][] = "uni_spoc_contact";
	$tdatafull_batch_details[".allSearchFields"][] = "ey_spoc";
	$tdatafull_batch_details[".allSearchFields"][] = "local_spoc";
	$tdatafull_batch_details[".allSearchFields"][] = "schedule";
	$tdatafull_batch_details[".allSearchFields"][] = "tech_trainer";
	$tdatafull_batch_details[".allSearchFields"][] = "soft_skill_trainer";
	

$tdatafull_batch_details[".googleLikeFields"] = array();
$tdatafull_batch_details[".googleLikeFields"][] = "Batchcode";
$tdatafull_batch_details[".googleLikeFields"][] = "fbgroup";
$tdatafull_batch_details[".googleLikeFields"][] = "division_id";
$tdatafull_batch_details[".googleLikeFields"][] = "university_id";
$tdatafull_batch_details[".googleLikeFields"][] = "department_id";
$tdatafull_batch_details[".googleLikeFields"][] = "starting_Date";
$tdatafull_batch_details[".googleLikeFields"][] = "Track";
$tdatafull_batch_details[".googleLikeFields"][] = "cid";
$tdatafull_batch_details[".googleLikeFields"][] = "status";
$tdatafull_batch_details[".googleLikeFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".googleLikeFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".googleLikeFields"][] = "ey_spoc";
$tdatafull_batch_details[".googleLikeFields"][] = "local_spoc";
$tdatafull_batch_details[".googleLikeFields"][] = "schedule";
$tdatafull_batch_details[".googleLikeFields"][] = "tech_trainer";
$tdatafull_batch_details[".googleLikeFields"][] = "soft_skill_trainer";


$tdatafull_batch_details[".advSearchFields"] = array();
$tdatafull_batch_details[".advSearchFields"][] = "Batchcode";
$tdatafull_batch_details[".advSearchFields"][] = "fbgroup";
$tdatafull_batch_details[".advSearchFields"][] = "division_id";
$tdatafull_batch_details[".advSearchFields"][] = "university_id";
$tdatafull_batch_details[".advSearchFields"][] = "department_id";
$tdatafull_batch_details[".advSearchFields"][] = "starting_Date";
$tdatafull_batch_details[".advSearchFields"][] = "Track";
$tdatafull_batch_details[".advSearchFields"][] = "cid";
$tdatafull_batch_details[".advSearchFields"][] = "status";
$tdatafull_batch_details[".advSearchFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".advSearchFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".advSearchFields"][] = "ey_spoc";
$tdatafull_batch_details[".advSearchFields"][] = "local_spoc";
$tdatafull_batch_details[".advSearchFields"][] = "schedule";
$tdatafull_batch_details[".advSearchFields"][] = "tech_trainer";
$tdatafull_batch_details[".advSearchFields"][] = "soft_skill_trainer";

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

$tdatafull_batch_details[".sqlHead"] = "SELECT batch.Batchcode,  batch.fbgroup,  batch.division_id,  batch.university_id,  batch.department_id,  batch.starting_Date,  batch.Track,  batch.cid,  batch.status,  batch.uni_spoc_name,  batch.uni_spoc_contact,  batch.ey_spoc,  batch.local_spoc,  batch.schedule,  batch.tech_trainer,  batch.soft_skill_trainer";
$tdatafull_batch_details[".sqlFrom"] = "FROM full_batch_details  , batch";
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
$tdatafull_batch_details[".listFields"][] = "starting_Date";
$tdatafull_batch_details[".listFields"][] = "Track";
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
$tdatafull_batch_details[".listFields"][] = "status";

$tdatafull_batch_details[".hideMobileList"] = array();


$tdatafull_batch_details[".viewFields"] = array();

$tdatafull_batch_details[".addFields"] = array();

$tdatafull_batch_details[".masterListFields"] = array();
$tdatafull_batch_details[".masterListFields"][] = "Batchcode";
$tdatafull_batch_details[".masterListFields"][] = "fbgroup";
$tdatafull_batch_details[".masterListFields"][] = "division_id";
$tdatafull_batch_details[".masterListFields"][] = "university_id";
$tdatafull_batch_details[".masterListFields"][] = "department_id";
$tdatafull_batch_details[".masterListFields"][] = "starting_Date";
$tdatafull_batch_details[".masterListFields"][] = "Track";
$tdatafull_batch_details[".masterListFields"][] = "cid";
$tdatafull_batch_details[".masterListFields"][] = "status";
$tdatafull_batch_details[".masterListFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".masterListFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".masterListFields"][] = "ey_spoc";
$tdatafull_batch_details[".masterListFields"][] = "local_spoc";
$tdatafull_batch_details[".masterListFields"][] = "schedule";
$tdatafull_batch_details[".masterListFields"][] = "tech_trainer";
$tdatafull_batch_details[".masterListFields"][] = "soft_skill_trainer";

$tdatafull_batch_details[".inlineAddFields"] = array();

$tdatafull_batch_details[".editFields"] = array();

$tdatafull_batch_details[".inlineEditFields"] = array();

$tdatafull_batch_details[".updateSelectedFields"] = array();


$tdatafull_batch_details[".exportFields"] = array();
$tdatafull_batch_details[".exportFields"][] = "Batchcode";
$tdatafull_batch_details[".exportFields"][] = "fbgroup";
$tdatafull_batch_details[".exportFields"][] = "division_id";
$tdatafull_batch_details[".exportFields"][] = "university_id";
$tdatafull_batch_details[".exportFields"][] = "department_id";
$tdatafull_batch_details[".exportFields"][] = "starting_Date";
$tdatafull_batch_details[".exportFields"][] = "Track";
$tdatafull_batch_details[".exportFields"][] = "cid";
$tdatafull_batch_details[".exportFields"][] = "status";
$tdatafull_batch_details[".exportFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".exportFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".exportFields"][] = "ey_spoc";
$tdatafull_batch_details[".exportFields"][] = "local_spoc";
$tdatafull_batch_details[".exportFields"][] = "schedule";
$tdatafull_batch_details[".exportFields"][] = "tech_trainer";
$tdatafull_batch_details[".exportFields"][] = "soft_skill_trainer";

$tdatafull_batch_details[".importFields"] = array();
$tdatafull_batch_details[".importFields"][] = "Batchcode";
$tdatafull_batch_details[".importFields"][] = "fbgroup";
$tdatafull_batch_details[".importFields"][] = "division_id";
$tdatafull_batch_details[".importFields"][] = "university_id";
$tdatafull_batch_details[".importFields"][] = "department_id";
$tdatafull_batch_details[".importFields"][] = "starting_Date";
$tdatafull_batch_details[".importFields"][] = "Track";
$tdatafull_batch_details[".importFields"][] = "cid";
$tdatafull_batch_details[".importFields"][] = "status";
$tdatafull_batch_details[".importFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".importFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".importFields"][] = "ey_spoc";
$tdatafull_batch_details[".importFields"][] = "local_spoc";
$tdatafull_batch_details[".importFields"][] = "schedule";
$tdatafull_batch_details[".importFields"][] = "tech_trainer";
$tdatafull_batch_details[".importFields"][] = "soft_skill_trainer";

$tdatafull_batch_details[".printFields"] = array();
$tdatafull_batch_details[".printFields"][] = "Batchcode";
$tdatafull_batch_details[".printFields"][] = "fbgroup";
$tdatafull_batch_details[".printFields"][] = "division_id";
$tdatafull_batch_details[".printFields"][] = "university_id";
$tdatafull_batch_details[".printFields"][] = "department_id";
$tdatafull_batch_details[".printFields"][] = "starting_Date";
$tdatafull_batch_details[".printFields"][] = "Track";
$tdatafull_batch_details[".printFields"][] = "cid";
$tdatafull_batch_details[".printFields"][] = "status";
$tdatafull_batch_details[".printFields"][] = "uni_spoc_name";
$tdatafull_batch_details[".printFields"][] = "uni_spoc_contact";
$tdatafull_batch_details[".printFields"][] = "ey_spoc";
$tdatafull_batch_details[".printFields"][] = "local_spoc";
$tdatafull_batch_details[".printFields"][] = "schedule";
$tdatafull_batch_details[".printFields"][] = "tech_trainer";
$tdatafull_batch_details[".printFields"][] = "soft_skill_trainer";


//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","Batchcode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Batchcode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.Batchcode";

	
	
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




	$tdatafull_batch_details["Batchcode"] = $fdata;
//	fbgroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fbgroup";
	$fdata["GoodName"] = "fbgroup";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","fbgroup");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fbgroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.fbgroup";

	
	
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




	$tdatafull_batch_details["fbgroup"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","division_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "division_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.division_id";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dname";
	
	

	
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




	$tdatafull_batch_details["division_id"] = $fdata;
//	university_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "university_id";
	$fdata["GoodName"] = "university_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","university_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "university_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.university_id";

	
	
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
	$edata["LookupTable"] = "university";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "university_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "University_name";
	
	

	
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




	$tdatafull_batch_details["university_id"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","department_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "department_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.department_id";

	
	
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
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Department_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Dname";
	
	

	
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




	$tdatafull_batch_details["department_id"] = $fdata;
//	starting_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "starting_Date";
	$fdata["GoodName"] = "starting_Date";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","starting_Date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "starting_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.starting_Date";

	
	
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




	$tdatafull_batch_details["starting_Date"] = $fdata;
//	Track
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Track";
	$fdata["GoodName"] = "Track";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","Track");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Track";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.Track";

	
	
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




	$tdatafull_batch_details["Track"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.cid";

	
	
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
	$edata["LinkFieldType"] = 0;
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




	$tdatafull_batch_details["cid"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.status";

	
	
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




	$tdatafull_batch_details["status"] = $fdata;
//	uni_spoc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "uni_spoc_name";
	$fdata["GoodName"] = "uni_spoc_name";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","uni_spoc_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "uni_spoc_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.uni_spoc_name";

	
	
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




	$tdatafull_batch_details["uni_spoc_name"] = $fdata;
//	uni_spoc_contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "uni_spoc_contact";
	$fdata["GoodName"] = "uni_spoc_contact";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","uni_spoc_contact");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "uni_spoc_contact";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.uni_spoc_contact";

	
	
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




	$tdatafull_batch_details["uni_spoc_contact"] = $fdata;
//	ey_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ey_spoc";
	$fdata["GoodName"] = "ey_spoc";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","ey_spoc");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ey_spoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.ey_spoc";

	
	
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
	$edata["LookupTable"] = "consultant_view";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "consultant_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ename";
	
	

	
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




	$tdatafull_batch_details["ey_spoc"] = $fdata;
//	local_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "local_spoc";
	$fdata["GoodName"] = "local_spoc";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","local_spoc");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "local_spoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.local_spoc";

	
	
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
	$edata["LookupTable"] = "employees";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ename";
	
	

	
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




	$tdatafull_batch_details["local_spoc"] = $fdata;
//	schedule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "schedule";
	$fdata["GoodName"] = "schedule";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","schedule");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "schedule";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.schedule";

	
	
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




	$tdatafull_batch_details["schedule"] = $fdata;
//	tech_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "tech_trainer";
	$fdata["GoodName"] = "tech_trainer";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","tech_trainer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tech_trainer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.tech_trainer";

	
	
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
	$edata["LookupTable"] = "employees";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ename";
	
	

	
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




	$tdatafull_batch_details["tech_trainer"] = $fdata;
//	soft_skill_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "soft_skill_trainer";
	$fdata["GoodName"] = "soft_skill_trainer";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("full_batch_details","soft_skill_trainer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "soft_skill_trainer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch.soft_skill_trainer";

	
	
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
	$edata["LookupTable"] = "employees";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ename";
	
	

	
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




	$tdatafull_batch_details["soft_skill_trainer"] = $fdata;


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
$proto0["m_strFieldList"] = "batch.Batchcode,  batch.fbgroup,  batch.division_id,  batch.university_id,  batch.department_id,  batch.starting_Date,  batch.Track,  batch.cid,  batch.status,  batch.uni_spoc_name,  batch.uni_spoc_contact,  batch.ey_spoc,  batch.local_spoc,  batch.schedule,  batch.tech_trainer,  batch.soft_skill_trainer";
$proto0["m_strFrom"] = "FROM full_batch_details  , batch";
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
	"m_strName" => "Batchcode",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto6["m_sql"] = "batch.Batchcode";
$proto6["m_srcTableName"] = "full_batch_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fbgroup",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto8["m_sql"] = "batch.fbgroup";
$proto8["m_srcTableName"] = "full_batch_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto10["m_sql"] = "batch.division_id";
$proto10["m_srcTableName"] = "full_batch_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "university_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto12["m_sql"] = "batch.university_id";
$proto12["m_srcTableName"] = "full_batch_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto14["m_sql"] = "batch.department_id";
$proto14["m_srcTableName"] = "full_batch_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_Date",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto16["m_sql"] = "batch.starting_Date";
$proto16["m_srcTableName"] = "full_batch_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Track",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto18["m_sql"] = "batch.Track";
$proto18["m_srcTableName"] = "full_batch_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto20["m_sql"] = "batch.cid";
$proto20["m_srcTableName"] = "full_batch_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto22["m_sql"] = "batch.status";
$proto22["m_srcTableName"] = "full_batch_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_name",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto24["m_sql"] = "batch.uni_spoc_name";
$proto24["m_srcTableName"] = "full_batch_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_contact",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto26["m_sql"] = "batch.uni_spoc_contact";
$proto26["m_srcTableName"] = "full_batch_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ey_spoc",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto28["m_sql"] = "batch.ey_spoc";
$proto28["m_srcTableName"] = "full_batch_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "local_spoc",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto30["m_sql"] = "batch.local_spoc";
$proto30["m_srcTableName"] = "full_batch_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "schedule",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto32["m_sql"] = "batch.schedule";
$proto32["m_srcTableName"] = "full_batch_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "tech_trainer",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto34["m_sql"] = "batch.tech_trainer";
$proto34["m_srcTableName"] = "full_batch_details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "soft_skill_trainer",
	"m_strTable" => "batch",
	"m_srcTableName" => "full_batch_details"
));

$proto36["m_sql"] = "batch.soft_skill_trainer";
$proto36["m_srcTableName"] = "full_batch_details";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "full_batch_details";
$proto39["m_srcTableName"] = "full_batch_details";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "track";
$proto39["m_columns"][] = "Batchcode";
$proto39["m_columns"][] = "fbgroup";
$proto39["m_columns"][] = "university_id";
$proto39["m_columns"][] = "division_id";
$proto39["m_columns"][] = "department_id";
$proto39["m_columns"][] = "uni_spoc_name";
$proto39["m_columns"][] = "uni_spoc_contact";
$proto39["m_columns"][] = "ey_spoc";
$proto39["m_columns"][] = "local_spoc";
$proto39["m_columns"][] = "cid";
$proto39["m_columns"][] = "schedule";
$proto39["m_columns"][] = "tech_trainer";
$proto39["m_columns"][] = "soft_skill_trainer";
$proto39["m_columns"][] = "sdate";
$proto39["m_columns"][] = "stime";
$proto39["m_columns"][] = "etime";
$proto39["m_columns"][] = "status";
$proto39["m_columns"][] = "remark";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "full_batch_details";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "full_batch_details";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_CROSSJOIN";
			$proto43=array();
$proto43["m_strName"] = "batch";
$proto43["m_srcTableName"] = "full_batch_details";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "Batchcode";
$proto43["m_columns"][] = "fbgroup";
$proto43["m_columns"][] = "division_id";
$proto43["m_columns"][] = "university_id";
$proto43["m_columns"][] = "department_id";
$proto43["m_columns"][] = "starting_Date";
$proto43["m_columns"][] = "Track";
$proto43["m_columns"][] = "cid";
$proto43["m_columns"][] = "status";
$proto43["m_columns"][] = "uni_spoc_name";
$proto43["m_columns"][] = "uni_spoc_contact";
$proto43["m_columns"][] = "ey_spoc";
$proto43["m_columns"][] = "local_spoc";
$proto43["m_columns"][] = "schedule";
$proto43["m_columns"][] = "tech_trainer";
$proto43["m_columns"][] = "soft_skill_trainer";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "batch";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "full_batch_details";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

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