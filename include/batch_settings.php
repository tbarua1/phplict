<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabatch = array();
	$tdatabatch[".truncateText"] = true;
	$tdatabatch[".NumberOfChars"] = 80;
	$tdatabatch[".ShortName"] = "batch";
	$tdatabatch[".OwnerID"] = "";
	$tdatabatch[".OriginalTable"] = "batch";

//	field labels
$fieldLabelsbatch = array();
$fieldToolTipsbatch = array();
$pageTitlesbatch = array();
$placeHoldersbatch = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatch["English"] = array();
	$fieldToolTipsbatch["English"] = array();
	$placeHoldersbatch["English"] = array();
	$pageTitlesbatch["English"] = array();
	$fieldLabelsbatch["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatch["English"]["Batchcode"] = "";
	$placeHoldersbatch["English"]["Batchcode"] = "";
	$fieldLabelsbatch["English"]["fbgroup"] = "Fbgroup";
	$fieldToolTipsbatch["English"]["fbgroup"] = "";
	$placeHoldersbatch["English"]["fbgroup"] = "";
	$fieldLabelsbatch["English"]["division_id"] = "Division Id";
	$fieldToolTipsbatch["English"]["division_id"] = "";
	$placeHoldersbatch["English"]["division_id"] = "";
	$fieldLabelsbatch["English"]["university_id"] = "University Id";
	$fieldToolTipsbatch["English"]["university_id"] = "";
	$placeHoldersbatch["English"]["university_id"] = "";
	$fieldLabelsbatch["English"]["department_id"] = "Department Id";
	$fieldToolTipsbatch["English"]["department_id"] = "";
	$placeHoldersbatch["English"]["department_id"] = "";
	$fieldLabelsbatch["English"]["starting_Date"] = "Starting Date";
	$fieldToolTipsbatch["English"]["starting_Date"] = "";
	$placeHoldersbatch["English"]["starting_Date"] = "";
	$fieldLabelsbatch["English"]["Track"] = "Track";
	$fieldToolTipsbatch["English"]["Track"] = "";
	$placeHoldersbatch["English"]["Track"] = "";
	$fieldLabelsbatch["English"]["cid"] = "Cid";
	$fieldToolTipsbatch["English"]["cid"] = "";
	$placeHoldersbatch["English"]["cid"] = "";
	$fieldLabelsbatch["English"]["status"] = "Status";
	$fieldToolTipsbatch["English"]["status"] = "";
	$placeHoldersbatch["English"]["status"] = "";
	$fieldLabelsbatch["English"]["uni_spoc_name"] = "Uni Spoc Name";
	$fieldToolTipsbatch["English"]["uni_spoc_name"] = "";
	$placeHoldersbatch["English"]["uni_spoc_name"] = "";
	$fieldLabelsbatch["English"]["uni_spoc_contact"] = "Uni Spoc Contact";
	$fieldToolTipsbatch["English"]["uni_spoc_contact"] = "";
	$placeHoldersbatch["English"]["uni_spoc_contact"] = "";
	$fieldLabelsbatch["English"]["tech_trainer"] = "Tech Trainer";
	$fieldToolTipsbatch["English"]["tech_trainer"] = "";
	$placeHoldersbatch["English"]["tech_trainer"] = "";
	$fieldLabelsbatch["English"]["soft_skill_trainer"] = "Soft Skill Trainer";
	$fieldToolTipsbatch["English"]["soft_skill_trainer"] = "";
	$placeHoldersbatch["English"]["soft_skill_trainer"] = "";
	$fieldLabelsbatch["English"]["ey_spoc"] = "Ey Spoc";
	$fieldToolTipsbatch["English"]["ey_spoc"] = "";
	$placeHoldersbatch["English"]["ey_spoc"] = "";
	$fieldLabelsbatch["English"]["local_spoc"] = "Local Spoc";
	$fieldToolTipsbatch["English"]["local_spoc"] = "";
	$placeHoldersbatch["English"]["local_spoc"] = "";
	$fieldLabelsbatch["English"]["schedule"] = "Schedule";
	$fieldToolTipsbatch["English"]["schedule"] = "";
	$placeHoldersbatch["English"]["schedule"] = "";
	if (count($fieldToolTipsbatch["English"]))
		$tdatabatch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatch[""] = array();
	$fieldToolTipsbatch[""] = array();
	$placeHoldersbatch[""] = array();
	$pageTitlesbatch[""] = array();
	$fieldLabelsbatch[""]["tech_trainer"] = "Tech Trainer";
	$fieldToolTipsbatch[""]["tech_trainer"] = "";
	$placeHoldersbatch[""]["tech_trainer"] = "";
	$fieldLabelsbatch[""]["soft_skill_trainer"] = "Soft Skill Trainer";
	$fieldToolTipsbatch[""]["soft_skill_trainer"] = "";
	$placeHoldersbatch[""]["soft_skill_trainer"] = "";
	$fieldLabelsbatch[""]["ey_spoc"] = "Ey Spoc";
	$fieldToolTipsbatch[""]["ey_spoc"] = "";
	$placeHoldersbatch[""]["ey_spoc"] = "";
	$fieldLabelsbatch[""]["local_spoc"] = "Local Spoc";
	$fieldToolTipsbatch[""]["local_spoc"] = "";
	$placeHoldersbatch[""]["local_spoc"] = "";
	$fieldLabelsbatch[""]["schedule"] = "Schedule";
	$fieldToolTipsbatch[""]["schedule"] = "";
	$placeHoldersbatch[""]["schedule"] = "";
	if (count($fieldToolTipsbatch[""]))
		$tdatabatch[".isUseToolTips"] = true;
}


	$tdatabatch[".NCSearch"] = true;



$tdatabatch[".shortTableName"] = "batch";
$tdatabatch[".nSecOptions"] = 0;
$tdatabatch[".recsPerRowPrint"] = 1;
$tdatabatch[".mainTableOwnerID"] = "";
$tdatabatch[".moveNext"] = 1;
$tdatabatch[".entityType"] = 0;

$tdatabatch[".strOriginalTableName"] = "batch";

	



$tdatabatch[".showAddInPopup"] = false;

$tdatabatch[".showEditInPopup"] = false;

$tdatabatch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabatch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabatch[".fieldsForRegister"] = array();

$tdatabatch[".listAjax"] = false;

	$tdatabatch[".audit"] = true;

	$tdatabatch[".locking"] = true;

$tdatabatch[".edit"] = true;
$tdatabatch[".afterEditAction"] = 1;
$tdatabatch[".closePopupAfterEdit"] = 1;
$tdatabatch[".afterEditActionDetTable"] = "";

$tdatabatch[".add"] = true;
$tdatabatch[".afterAddAction"] = 1;
$tdatabatch[".closePopupAfterAdd"] = 1;
$tdatabatch[".afterAddActionDetTable"] = "";

$tdatabatch[".list"] = true;



$tdatabatch[".reorderRecordsByHeader"] = true;


$tdatabatch[".exportFormatting"] = 2;
$tdatabatch[".exportDelimiter"] = ",";
		

$tdatabatch[".import"] = true;

$tdatabatch[".exportTo"] = true;

$tdatabatch[".printFriendly"] = true;


$tdatabatch[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabatch[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabatch[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabatch[".searchSaving"] = false;
//

$tdatabatch[".showSearchPanel"] = true;
		$tdatabatch[".flexibleSearch"] = true;

$tdatabatch[".isUseAjaxSuggest"] = true;

$tdatabatch[".rowHighlite"] = true;



																		

$tdatabatch[".ajaxCodeSnippetAdded"] = false;

$tdatabatch[".buttonsAdded"] = false;

$tdatabatch[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatch[".isUseTimeForSearch"] = false;



$tdatabatch[".badgeColor"] = "DAA520";


$tdatabatch[".allSearchFields"] = array();
$tdatabatch[".filterFields"] = array();
$tdatabatch[".requiredSearchFields"] = array();

$tdatabatch[".allSearchFields"][] = "Batchcode";
	$tdatabatch[".allSearchFields"][] = "fbgroup";
	$tdatabatch[".allSearchFields"][] = "division_id";
	$tdatabatch[".allSearchFields"][] = "university_id";
	$tdatabatch[".allSearchFields"][] = "department_id";
	$tdatabatch[".allSearchFields"][] = "starting_Date";
	$tdatabatch[".allSearchFields"][] = "Track";
	$tdatabatch[".allSearchFields"][] = "cid";
	$tdatabatch[".allSearchFields"][] = "status";
	$tdatabatch[".allSearchFields"][] = "uni_spoc_name";
	$tdatabatch[".allSearchFields"][] = "uni_spoc_contact";
	$tdatabatch[".allSearchFields"][] = "ey_spoc";
	$tdatabatch[".allSearchFields"][] = "local_spoc";
	$tdatabatch[".allSearchFields"][] = "schedule";
	$tdatabatch[".allSearchFields"][] = "tech_trainer";
	$tdatabatch[".allSearchFields"][] = "soft_skill_trainer";
	

$tdatabatch[".googleLikeFields"] = array();
$tdatabatch[".googleLikeFields"][] = "Batchcode";
$tdatabatch[".googleLikeFields"][] = "fbgroup";
$tdatabatch[".googleLikeFields"][] = "division_id";
$tdatabatch[".googleLikeFields"][] = "university_id";
$tdatabatch[".googleLikeFields"][] = "department_id";
$tdatabatch[".googleLikeFields"][] = "starting_Date";
$tdatabatch[".googleLikeFields"][] = "Track";
$tdatabatch[".googleLikeFields"][] = "cid";
$tdatabatch[".googleLikeFields"][] = "status";
$tdatabatch[".googleLikeFields"][] = "uni_spoc_name";
$tdatabatch[".googleLikeFields"][] = "uni_spoc_contact";
$tdatabatch[".googleLikeFields"][] = "ey_spoc";
$tdatabatch[".googleLikeFields"][] = "local_spoc";
$tdatabatch[".googleLikeFields"][] = "schedule";
$tdatabatch[".googleLikeFields"][] = "tech_trainer";
$tdatabatch[".googleLikeFields"][] = "soft_skill_trainer";


$tdatabatch[".advSearchFields"] = array();
$tdatabatch[".advSearchFields"][] = "Batchcode";
$tdatabatch[".advSearchFields"][] = "fbgroup";
$tdatabatch[".advSearchFields"][] = "division_id";
$tdatabatch[".advSearchFields"][] = "university_id";
$tdatabatch[".advSearchFields"][] = "department_id";
$tdatabatch[".advSearchFields"][] = "starting_Date";
$tdatabatch[".advSearchFields"][] = "Track";
$tdatabatch[".advSearchFields"][] = "cid";
$tdatabatch[".advSearchFields"][] = "status";
$tdatabatch[".advSearchFields"][] = "uni_spoc_name";
$tdatabatch[".advSearchFields"][] = "uni_spoc_contact";
$tdatabatch[".advSearchFields"][] = "ey_spoc";
$tdatabatch[".advSearchFields"][] = "local_spoc";
$tdatabatch[".advSearchFields"][] = "schedule";
$tdatabatch[".advSearchFields"][] = "tech_trainer";
$tdatabatch[".advSearchFields"][] = "soft_skill_trainer";

$tdatabatch[".tableType"] = "list";

$tdatabatch[".printerPageOrientation"] = 0;
$tdatabatch[".nPrinterPageScale"] = 100;

$tdatabatch[".nPrinterSplitRecords"] = 40;

$tdatabatch[".nPrinterPDFSplitRecords"] = 40;



$tdatabatch[".geocodingEnabled"] = false;





$tdatabatch[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabatch[".pageSize"] = 20;

$tdatabatch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatch[".strOrderBy"] = $tstrOrderBy;

$tdatabatch[".orderindexes"] = array();

$tdatabatch[".sqlHead"] = "SELECT Batchcode,  	fbgroup,  	division_id,  	university_id,  	department_id,  	starting_Date,  	Track,  	cid,  	status,  	uni_spoc_name,  	uni_spoc_contact,  	ey_spoc,  	local_spoc,  	schedule,  	tech_trainer,  	soft_skill_trainer";
$tdatabatch[".sqlFrom"] = "FROM batch";
$tdatabatch[".sqlWhereExpr"] = "";
$tdatabatch[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabatch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabatch[".arrGroupsPerPage"] = $arrGPP;

$tdatabatch[".highlightSearchResults"] = true;

$tableKeysbatch = array();
$tableKeysbatch[] = "Batchcode";
$tdatabatch[".Keys"] = $tableKeysbatch;

$tdatabatch[".listFields"] = array();
$tdatabatch[".listFields"][] = "ey_spoc";
$tdatabatch[".listFields"][] = "local_spoc";
$tdatabatch[".listFields"][] = "schedule";
$tdatabatch[".listFields"][] = "tech_trainer";
$tdatabatch[".listFields"][] = "soft_skill_trainer";
$tdatabatch[".listFields"][] = "Batchcode";
$tdatabatch[".listFields"][] = "fbgroup";
$tdatabatch[".listFields"][] = "division_id";
$tdatabatch[".listFields"][] = "university_id";
$tdatabatch[".listFields"][] = "department_id";
$tdatabatch[".listFields"][] = "starting_Date";
$tdatabatch[".listFields"][] = "Track";
$tdatabatch[".listFields"][] = "cid";
$tdatabatch[".listFields"][] = "status";
$tdatabatch[".listFields"][] = "uni_spoc_name";
$tdatabatch[".listFields"][] = "uni_spoc_contact";

$tdatabatch[".hideMobileList"] = array();


$tdatabatch[".viewFields"] = array();

$tdatabatch[".addFields"] = array();
$tdatabatch[".addFields"][] = "Batchcode";
$tdatabatch[".addFields"][] = "fbgroup";
$tdatabatch[".addFields"][] = "division_id";
$tdatabatch[".addFields"][] = "university_id";
$tdatabatch[".addFields"][] = "department_id";
$tdatabatch[".addFields"][] = "starting_Date";
$tdatabatch[".addFields"][] = "Track";
$tdatabatch[".addFields"][] = "cid";
$tdatabatch[".addFields"][] = "status";
$tdatabatch[".addFields"][] = "uni_spoc_name";
$tdatabatch[".addFields"][] = "uni_spoc_contact";
$tdatabatch[".addFields"][] = "ey_spoc";
$tdatabatch[".addFields"][] = "local_spoc";
$tdatabatch[".addFields"][] = "schedule";
$tdatabatch[".addFields"][] = "tech_trainer";
$tdatabatch[".addFields"][] = "soft_skill_trainer";

$tdatabatch[".masterListFields"] = array();
$tdatabatch[".masterListFields"][] = "Batchcode";
$tdatabatch[".masterListFields"][] = "fbgroup";
$tdatabatch[".masterListFields"][] = "division_id";
$tdatabatch[".masterListFields"][] = "university_id";
$tdatabatch[".masterListFields"][] = "department_id";
$tdatabatch[".masterListFields"][] = "starting_Date";
$tdatabatch[".masterListFields"][] = "Track";
$tdatabatch[".masterListFields"][] = "cid";
$tdatabatch[".masterListFields"][] = "status";
$tdatabatch[".masterListFields"][] = "uni_spoc_name";
$tdatabatch[".masterListFields"][] = "uni_spoc_contact";
$tdatabatch[".masterListFields"][] = "ey_spoc";
$tdatabatch[".masterListFields"][] = "local_spoc";
$tdatabatch[".masterListFields"][] = "schedule";
$tdatabatch[".masterListFields"][] = "tech_trainer";
$tdatabatch[".masterListFields"][] = "soft_skill_trainer";

$tdatabatch[".inlineAddFields"] = array();

$tdatabatch[".editFields"] = array();
$tdatabatch[".editFields"][] = "Batchcode";
$tdatabatch[".editFields"][] = "fbgroup";
$tdatabatch[".editFields"][] = "division_id";
$tdatabatch[".editFields"][] = "university_id";
$tdatabatch[".editFields"][] = "department_id";
$tdatabatch[".editFields"][] = "starting_Date";
$tdatabatch[".editFields"][] = "Track";
$tdatabatch[".editFields"][] = "cid";
$tdatabatch[".editFields"][] = "status";
$tdatabatch[".editFields"][] = "uni_spoc_name";
$tdatabatch[".editFields"][] = "uni_spoc_contact";
$tdatabatch[".editFields"][] = "ey_spoc";
$tdatabatch[".editFields"][] = "local_spoc";
$tdatabatch[".editFields"][] = "schedule";
$tdatabatch[".editFields"][] = "tech_trainer";
$tdatabatch[".editFields"][] = "soft_skill_trainer";

$tdatabatch[".inlineEditFields"] = array();

$tdatabatch[".updateSelectedFields"] = array();
$tdatabatch[".updateSelectedFields"][] = "Batchcode";
$tdatabatch[".updateSelectedFields"][] = "fbgroup";
$tdatabatch[".updateSelectedFields"][] = "division_id";
$tdatabatch[".updateSelectedFields"][] = "university_id";
$tdatabatch[".updateSelectedFields"][] = "department_id";
$tdatabatch[".updateSelectedFields"][] = "starting_Date";
$tdatabatch[".updateSelectedFields"][] = "Track";
$tdatabatch[".updateSelectedFields"][] = "cid";
$tdatabatch[".updateSelectedFields"][] = "status";
$tdatabatch[".updateSelectedFields"][] = "uni_spoc_name";
$tdatabatch[".updateSelectedFields"][] = "uni_spoc_contact";
$tdatabatch[".updateSelectedFields"][] = "ey_spoc";
$tdatabatch[".updateSelectedFields"][] = "local_spoc";
$tdatabatch[".updateSelectedFields"][] = "schedule";
$tdatabatch[".updateSelectedFields"][] = "tech_trainer";
$tdatabatch[".updateSelectedFields"][] = "soft_skill_trainer";


$tdatabatch[".exportFields"] = array();
$tdatabatch[".exportFields"][] = "Batchcode";
$tdatabatch[".exportFields"][] = "fbgroup";
$tdatabatch[".exportFields"][] = "division_id";
$tdatabatch[".exportFields"][] = "university_id";
$tdatabatch[".exportFields"][] = "department_id";
$tdatabatch[".exportFields"][] = "starting_Date";
$tdatabatch[".exportFields"][] = "Track";
$tdatabatch[".exportFields"][] = "cid";
$tdatabatch[".exportFields"][] = "status";
$tdatabatch[".exportFields"][] = "uni_spoc_name";
$tdatabatch[".exportFields"][] = "uni_spoc_contact";
$tdatabatch[".exportFields"][] = "ey_spoc";
$tdatabatch[".exportFields"][] = "local_spoc";
$tdatabatch[".exportFields"][] = "schedule";
$tdatabatch[".exportFields"][] = "tech_trainer";
$tdatabatch[".exportFields"][] = "soft_skill_trainer";

$tdatabatch[".importFields"] = array();
$tdatabatch[".importFields"][] = "Batchcode";
$tdatabatch[".importFields"][] = "fbgroup";
$tdatabatch[".importFields"][] = "division_id";
$tdatabatch[".importFields"][] = "university_id";
$tdatabatch[".importFields"][] = "department_id";
$tdatabatch[".importFields"][] = "starting_Date";
$tdatabatch[".importFields"][] = "Track";
$tdatabatch[".importFields"][] = "cid";
$tdatabatch[".importFields"][] = "status";
$tdatabatch[".importFields"][] = "uni_spoc_name";
$tdatabatch[".importFields"][] = "uni_spoc_contact";
$tdatabatch[".importFields"][] = "ey_spoc";
$tdatabatch[".importFields"][] = "local_spoc";
$tdatabatch[".importFields"][] = "schedule";
$tdatabatch[".importFields"][] = "tech_trainer";
$tdatabatch[".importFields"][] = "soft_skill_trainer";

$tdatabatch[".printFields"] = array();
$tdatabatch[".printFields"][] = "ey_spoc";
$tdatabatch[".printFields"][] = "local_spoc";
$tdatabatch[".printFields"][] = "schedule";
$tdatabatch[".printFields"][] = "tech_trainer";
$tdatabatch[".printFields"][] = "soft_skill_trainer";
$tdatabatch[".printFields"][] = "Batchcode";
$tdatabatch[".printFields"][] = "fbgroup";
$tdatabatch[".printFields"][] = "division_id";
$tdatabatch[".printFields"][] = "university_id";
$tdatabatch[".printFields"][] = "department_id";
$tdatabatch[".printFields"][] = "starting_Date";
$tdatabatch[".printFields"][] = "Track";
$tdatabatch[".printFields"][] = "cid";
$tdatabatch[".printFields"][] = "status";
$tdatabatch[".printFields"][] = "uni_spoc_name";
$tdatabatch[".printFields"][] = "uni_spoc_contact";


//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","Batchcode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatabatch["Batchcode"] = $fdata;
//	fbgroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fbgroup";
	$fdata["GoodName"] = "fbgroup";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","fbgroup");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatabatch["fbgroup"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","division_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "university_id";

	
	
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




	$tdatabatch["division_id"] = $fdata;
//	university_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "university_id";
	$fdata["GoodName"] = "university_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","university_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "university";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "university_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "University_name";
	
	

	
	$edata["LookupOrderBy"] = "University_name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "division_id", "lookup" => "division_id" );

	
	

	
	
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




	$tdatabatch["university_id"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","department_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Department_id";
	$edata["LinkFieldType"] = 3;
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




	$tdatabatch["department_id"] = $fdata;
//	starting_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "starting_Date";
	$fdata["GoodName"] = "starting_Date";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","starting_Date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "starting_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "starting_Date";

	
	
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




	$tdatabatch["starting_Date"] = $fdata;
//	Track
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Track";
	$fdata["GoodName"] = "Track";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","Track");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Track";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Track";

	
	
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
	$edata["LookupValues"][] = "Top Up";
	$edata["LookupValues"][] = "Foundation skill";

	
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




	$tdatabatch["Track"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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
	
	

	
	$edata["LookupOrderBy"] = "cname";

	
	
	
	

	
	
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




	$tdatabatch["cid"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Complete";
	$edata["LookupValues"][] = "On Going";
	$edata["LookupValues"][] = "Schedued";
	$edata["LookupValues"][] = "On Hold";

	
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




	$tdatabatch["status"] = $fdata;
//	uni_spoc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "uni_spoc_name";
	$fdata["GoodName"] = "uni_spoc_name";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","uni_spoc_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatabatch["uni_spoc_name"] = $fdata;
//	uni_spoc_contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "uni_spoc_contact";
	$fdata["GoodName"] = "uni_spoc_contact";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","uni_spoc_contact");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatabatch["uni_spoc_contact"] = $fdata;
//	ey_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ey_spoc";
	$fdata["GoodName"] = "ey_spoc";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","ey_spoc");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "consultant_view";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "consultant_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ename";
	
	

	
	$edata["LookupOrderBy"] = "ename";

	
	
	
	

	
	
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




	$tdatabatch["ey_spoc"] = $fdata;
//	local_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "local_spoc";
	$fdata["GoodName"] = "local_spoc";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","local_spoc");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "employees1";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ename";
	
				$edata["LookupWhere"] = "designation='Coordinator'";


	
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




	$tdatabatch["local_spoc"] = $fdata;
//	schedule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "schedule";
	$fdata["GoodName"] = "schedule";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","schedule");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Sunday";
	$edata["LookupValues"][] = "Monday";
	$edata["LookupValues"][] = "Tuesday";
	$edata["LookupValues"][] = "Wednesday";
	$edata["LookupValues"][] = "Thursday";
	$edata["LookupValues"][] = "Friday";
	$edata["LookupValues"][] = "saturday";

		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 7;

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




	$tdatabatch["schedule"] = $fdata;
//	tech_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "tech_trainer";
	$fdata["GoodName"] = "tech_trainer";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","tech_trainer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "employees";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ename";
	
				$edata["LookupWhere"] = "designation='Technical trainer'";


	
	$edata["LookupOrderBy"] = "ename";

	
	
	
	

	
	
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




	$tdatabatch["tech_trainer"] = $fdata;
//	soft_skill_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "soft_skill_trainer";
	$fdata["GoodName"] = "soft_skill_trainer";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","soft_skill_trainer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "employees";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ename";
	
				$edata["LookupWhere"] = "designation='softskill Trainer'";


	
	$edata["LookupOrderBy"] = "ename";

	
	
	
	

	
	
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




	$tdatabatch["soft_skill_trainer"] = $fdata;


$tables_data["batch"]=&$tdatabatch;
$field_labels["batch"] = &$fieldLabelsbatch;
$fieldToolTips["batch"] = &$fieldToolTipsbatch;
$placeHolders["batch"] = &$placeHoldersbatch;
$page_titles["batch"] = &$pageTitlesbatch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batch"] = array();
//	batchschedule
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="batchschedule";
		$detailsParam["dOriginalTable"] = "batchschedule";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "batchschedule";
	$detailsParam["dCaptionTable"] = GetTableCaption("batchschedule");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["batch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["batch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["batch"][$dIndex]["masterKeys"][]="Batchcode";

				$detailsTablesData["batch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["batch"][$dIndex]["detailKeys"][]="Batchcode";

// tables which are master tables for current table (detail)
$masterTablesData["batch"] = array();


	
				$strOriginalDetailsTable="courses";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="courses";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "courses";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["batch"][0] = $masterParams;
				$masterTablesData["batch"][0]["masterKeys"] = array();
	$masterTablesData["batch"][0]["masterKeys"][]="cid";
				$masterTablesData["batch"][0]["detailKeys"] = array();
	$masterTablesData["batch"][0]["detailKeys"][]="cid";
		
	
				$strOriginalDetailsTable="department";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="department";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "department";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["batch"][1] = $masterParams;
				$masterTablesData["batch"][1]["masterKeys"] = array();
	$masterTablesData["batch"][1]["masterKeys"][]="Department_id";
				$masterTablesData["batch"][1]["detailKeys"] = array();
	$masterTablesData["batch"][1]["detailKeys"][]="department_id";
		
	
				$strOriginalDetailsTable="division";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="division";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "division";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["batch"][2] = $masterParams;
				$masterTablesData["batch"][2]["masterKeys"] = array();
	$masterTablesData["batch"][2]["masterKeys"][]="division_id";
				$masterTablesData["batch"][2]["detailKeys"] = array();
	$masterTablesData["batch"][2]["detailKeys"][]="division_id";
		
	
				$strOriginalDetailsTable="university";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="university";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "university";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["batch"][3] = $masterParams;
				$masterTablesData["batch"][3]["masterKeys"] = array();
	$masterTablesData["batch"][3]["masterKeys"][]="university_id";
				$masterTablesData["batch"][3]["detailKeys"] = array();
	$masterTablesData["batch"][3]["detailKeys"][]="university_id";
		
	
				$strOriginalDetailsTable="consultant";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="consultant";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consultant";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["batch"][4] = $masterParams;
				$masterTablesData["batch"][4]["masterKeys"] = array();
	$masterTablesData["batch"][4]["masterKeys"][]="consultant_id";
				$masterTablesData["batch"][4]["detailKeys"] = array();
	$masterTablesData["batch"][4]["detailKeys"][]="ey_spoc";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Batchcode,  	fbgroup,  	division_id,  	university_id,  	department_id,  	starting_Date,  	Track,  	cid,  	status,  	uni_spoc_name,  	uni_spoc_contact,  	ey_spoc,  	local_spoc,  	schedule,  	tech_trainer,  	soft_skill_trainer";
$proto0["m_strFrom"] = "FROM batch";
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
	"m_srcTableName" => "batch"
));

$proto6["m_sql"] = "Batchcode";
$proto6["m_srcTableName"] = "batch";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fbgroup",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto8["m_sql"] = "fbgroup";
$proto8["m_srcTableName"] = "batch";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto10["m_sql"] = "division_id";
$proto10["m_srcTableName"] = "batch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "university_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto12["m_sql"] = "university_id";
$proto12["m_srcTableName"] = "batch";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto14["m_sql"] = "department_id";
$proto14["m_srcTableName"] = "batch";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_Date",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto16["m_sql"] = "starting_Date";
$proto16["m_srcTableName"] = "batch";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Track",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto18["m_sql"] = "Track";
$proto18["m_srcTableName"] = "batch";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto20["m_sql"] = "cid";
$proto20["m_srcTableName"] = "batch";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto22["m_sql"] = "status";
$proto22["m_srcTableName"] = "batch";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_name",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto24["m_sql"] = "uni_spoc_name";
$proto24["m_srcTableName"] = "batch";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_contact",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto26["m_sql"] = "uni_spoc_contact";
$proto26["m_srcTableName"] = "batch";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ey_spoc",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto28["m_sql"] = "ey_spoc";
$proto28["m_srcTableName"] = "batch";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "local_spoc",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto30["m_sql"] = "local_spoc";
$proto30["m_srcTableName"] = "batch";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "schedule",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto32["m_sql"] = "schedule";
$proto32["m_srcTableName"] = "batch";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "tech_trainer",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto34["m_sql"] = "tech_trainer";
$proto34["m_srcTableName"] = "batch";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "soft_skill_trainer",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto36["m_sql"] = "soft_skill_trainer";
$proto36["m_srcTableName"] = "batch";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "batch";
$proto39["m_srcTableName"] = "batch";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "Batchcode";
$proto39["m_columns"][] = "fbgroup";
$proto39["m_columns"][] = "division_id";
$proto39["m_columns"][] = "university_id";
$proto39["m_columns"][] = "department_id";
$proto39["m_columns"][] = "starting_Date";
$proto39["m_columns"][] = "Track";
$proto39["m_columns"][] = "cid";
$proto39["m_columns"][] = "status";
$proto39["m_columns"][] = "uni_spoc_name";
$proto39["m_columns"][] = "uni_spoc_contact";
$proto39["m_columns"][] = "ey_spoc";
$proto39["m_columns"][] = "local_spoc";
$proto39["m_columns"][] = "schedule";
$proto39["m_columns"][] = "tech_trainer";
$proto39["m_columns"][] = "soft_skill_trainer";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "batch";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "batch";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="batch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batch = createSqlQuery_batch();


	
		;

																

$tdatabatch[".sqlquery"] = $queryData_batch;

$tableEvents["batch"] = new eventsBase;
$tdatabatch[".hasEvents"] = false;

?>