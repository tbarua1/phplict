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

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatch["English"] = array();
	$fieldToolTipsbatch["English"] = array();
	$pageTitlesbatch["English"] = array();
	$fieldLabelsbatch["English"]["batch_id"] = "Batch Id";
	$fieldToolTipsbatch["English"]["batch_id"] = "";
	$fieldLabelsbatch["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatch["English"]["Batchcode"] = "";
	$fieldLabelsbatch["English"]["fbgroup"] = "Fbgroup";
	$fieldToolTipsbatch["English"]["fbgroup"] = "";
	$fieldLabelsbatch["English"]["division_id"] = "Division Id";
	$fieldToolTipsbatch["English"]["division_id"] = "";
	$fieldLabelsbatch["English"]["university_id"] = "University Id";
	$fieldToolTipsbatch["English"]["university_id"] = "";
	$fieldLabelsbatch["English"]["department_id"] = "Department Id";
	$fieldToolTipsbatch["English"]["department_id"] = "";
	$fieldLabelsbatch["English"]["starting_Date"] = "Starting Date";
	$fieldToolTipsbatch["English"]["starting_Date"] = "";
	$fieldLabelsbatch["English"]["Track"] = "Track";
	$fieldToolTipsbatch["English"]["Track"] = "";
	$fieldLabelsbatch["English"]["cid"] = "Cid";
	$fieldToolTipsbatch["English"]["cid"] = "";
	$fieldLabelsbatch["English"]["status"] = "Status";
	$fieldToolTipsbatch["English"]["status"] = "";
	$fieldLabelsbatch["English"]["uni_spoc_name"] = "Uni Spoc Name";
	$fieldToolTipsbatch["English"]["uni_spoc_name"] = "";
	$fieldLabelsbatch["English"]["uni_spoc_contact"] = "Uni Spoc Contact";
	$fieldToolTipsbatch["English"]["uni_spoc_contact"] = "";
	$fieldLabelsbatch["English"]["ey_spoc"] = "Ey Spoc";
	$fieldToolTipsbatch["English"]["ey_spoc"] = "";
	$fieldLabelsbatch["English"]["local_spoc"] = "Local Spoc";
	$fieldToolTipsbatch["English"]["local_spoc"] = "";
	$fieldLabelsbatch["English"]["schedule"] = "Schedule";
	$fieldToolTipsbatch["English"]["schedule"] = "";
	$fieldLabelsbatch["English"]["tech_trainer"] = "Tech Trainer";
	$fieldToolTipsbatch["English"]["tech_trainer"] = "";
	$fieldLabelsbatch["English"]["soft_skill_trainer"] = "Soft Skill Trainer";
	$fieldToolTipsbatch["English"]["soft_skill_trainer"] = "";
	if (count($fieldToolTipsbatch["English"]))
		$tdatabatch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatch[""] = array();
	$fieldToolTipsbatch[""] = array();
	$pageTitlesbatch[""] = array();
	if (count($fieldToolTipsbatch[""]))
		$tdatabatch[".isUseToolTips"] = true;
}
	
	
	$tdatabatch[".NCSearch"] = true;



$tdatabatch[".shortTableName"] = "batch";
$tdatabatch[".nSecOptions"] = 0;
$tdatabatch[".recsPerRowList"] = 1;
$tdatabatch[".mainTableOwnerID"] = "";
$tdatabatch[".moveNext"] = 1;
$tdatabatch[".nType"] = 0;

$tdatabatch[".strOriginalTableName"] = "batch";




$tdatabatch[".showAddInPopup"] = false;

$tdatabatch[".showEditInPopup"] = false;

$tdatabatch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabatch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabatch[".fieldsForRegister"] = array();

$tdatabatch[".listAjax"] = false;

	$tdatabatch[".audit"] = false;

	$tdatabatch[".locking"] = false;

$tdatabatch[".edit"] = true;

$tdatabatch[".list"] = true;

$tdatabatch[".inlineEdit"] = true;
$tdatabatch[".inlineAdd"] = true;
$tdatabatch[".view"] = true;

$tdatabatch[".import"] = true;

$tdatabatch[".exportTo"] = true;

$tdatabatch[".printFriendly"] = true;

$tdatabatch[".delete"] = true;

$tdatabatch[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabatch[".searchSaving"] = false;
//

$tdatabatch[".showSearchPanel"] = true;
		$tdatabatch[".flexibleSearch"] = true;		

if (isMobile())
	$tdatabatch[".isUseAjaxSuggest"] = false;
else 
	$tdatabatch[".isUseAjaxSuggest"] = true;

$tdatabatch[".rowHighlite"] = true;



$tdatabatch[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatch[".isUseTimeForSearch"] = false;





$tdatabatch[".allSearchFields"] = array();
$tdatabatch[".filterFields"] = array();
$tdatabatch[".requiredSearchFields"] = array();

$tdatabatch[".allSearchFields"][] = "batch_id";
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
$tdatabatch[".googleLikeFields"][] = "batch_id";
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
$tdatabatch[".advSearchFields"][] = "batch_id";
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





	





// view page pdf

// print page pdf


$tdatabatch[".pageSize"] = 20;

$tdatabatch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatch[".strOrderBy"] = $tstrOrderBy;

$tdatabatch[".orderindexes"] = array();

$tdatabatch[".sqlHead"] = "SELECT batch_id,  	Batchcode,  	fbgroup,  	division_id,  	university_id,  	department_id,  	starting_Date,  	Track,  	cid,  	status,  	uni_spoc_name,  	uni_spoc_contact,  	ey_spoc,  	local_spoc,  	schedule,  	tech_trainer,  	soft_skill_trainer";
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
$tableKeysbatch[] = "batch_id";
$tdatabatch[".Keys"] = $tableKeysbatch;

$tdatabatch[".listFields"] = array();
$tdatabatch[".listFields"][] = "batch_id";
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
$tdatabatch[".listFields"][] = "ey_spoc";
$tdatabatch[".listFields"][] = "local_spoc";
$tdatabatch[".listFields"][] = "schedule";
$tdatabatch[".listFields"][] = "tech_trainer";
$tdatabatch[".listFields"][] = "soft_skill_trainer";

$tdatabatch[".hideMobileList"] = array();


$tdatabatch[".viewFields"] = array();
$tdatabatch[".viewFields"][] = "batch_id";
$tdatabatch[".viewFields"][] = "Batchcode";
$tdatabatch[".viewFields"][] = "fbgroup";
$tdatabatch[".viewFields"][] = "division_id";
$tdatabatch[".viewFields"][] = "university_id";
$tdatabatch[".viewFields"][] = "department_id";
$tdatabatch[".viewFields"][] = "starting_Date";
$tdatabatch[".viewFields"][] = "Track";
$tdatabatch[".viewFields"][] = "cid";
$tdatabatch[".viewFields"][] = "status";
$tdatabatch[".viewFields"][] = "uni_spoc_name";
$tdatabatch[".viewFields"][] = "uni_spoc_contact";
$tdatabatch[".viewFields"][] = "ey_spoc";
$tdatabatch[".viewFields"][] = "local_spoc";
$tdatabatch[".viewFields"][] = "schedule";
$tdatabatch[".viewFields"][] = "tech_trainer";
$tdatabatch[".viewFields"][] = "soft_skill_trainer";

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

$tdatabatch[".inlineAddFields"] = array();
$tdatabatch[".inlineAddFields"][] = "Batchcode";
$tdatabatch[".inlineAddFields"][] = "fbgroup";
$tdatabatch[".inlineAddFields"][] = "division_id";
$tdatabatch[".inlineAddFields"][] = "university_id";
$tdatabatch[".inlineAddFields"][] = "department_id";
$tdatabatch[".inlineAddFields"][] = "starting_Date";
$tdatabatch[".inlineAddFields"][] = "Track";
$tdatabatch[".inlineAddFields"][] = "cid";
$tdatabatch[".inlineAddFields"][] = "status";
$tdatabatch[".inlineAddFields"][] = "uni_spoc_name";
$tdatabatch[".inlineAddFields"][] = "uni_spoc_contact";
$tdatabatch[".inlineAddFields"][] = "ey_spoc";
$tdatabatch[".inlineAddFields"][] = "local_spoc";
$tdatabatch[".inlineAddFields"][] = "schedule";
$tdatabatch[".inlineAddFields"][] = "tech_trainer";
$tdatabatch[".inlineAddFields"][] = "soft_skill_trainer";

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
$tdatabatch[".inlineEditFields"][] = "Batchcode";
$tdatabatch[".inlineEditFields"][] = "fbgroup";
$tdatabatch[".inlineEditFields"][] = "division_id";
$tdatabatch[".inlineEditFields"][] = "university_id";
$tdatabatch[".inlineEditFields"][] = "department_id";
$tdatabatch[".inlineEditFields"][] = "starting_Date";
$tdatabatch[".inlineEditFields"][] = "Track";
$tdatabatch[".inlineEditFields"][] = "cid";
$tdatabatch[".inlineEditFields"][] = "status";
$tdatabatch[".inlineEditFields"][] = "uni_spoc_name";
$tdatabatch[".inlineEditFields"][] = "uni_spoc_contact";
$tdatabatch[".inlineEditFields"][] = "ey_spoc";
$tdatabatch[".inlineEditFields"][] = "local_spoc";
$tdatabatch[".inlineEditFields"][] = "schedule";
$tdatabatch[".inlineEditFields"][] = "tech_trainer";
$tdatabatch[".inlineEditFields"][] = "soft_skill_trainer";

$tdatabatch[".exportFields"] = array();
$tdatabatch[".exportFields"][] = "batch_id";
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
$tdatabatch[".importFields"][] = "batch_id";
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
$tdatabatch[".printFields"][] = "batch_id";
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
$tdatabatch[".printFields"][] = "ey_spoc";
$tdatabatch[".printFields"][] = "local_spoc";
$tdatabatch[".printFields"][] = "schedule";
$tdatabatch[".printFields"][] = "tech_trainer";
$tdatabatch[".printFields"][] = "soft_skill_trainer";

//	batch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "batch_id";
	$fdata["GoodName"] = "batch_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","batch_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "batch_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch_id";
	
		
		
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

	

	
	$tdatabatch["batch_id"] = $fdata;
//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","Batchcode"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatabatch["Batchcode"] = $fdata;
//	fbgroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fbgroup";
	$fdata["GoodName"] = "fbgroup";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","fbgroup"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatabatch["fbgroup"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","division_id"); 
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

	

	
	$tdatabatch["division_id"] = $fdata;
//	university_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "university_id";
	$fdata["GoodName"] = "university_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","university_id"); 
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
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "university_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "university_id";
	
		
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

	

	
	$tdatabatch["university_id"] = $fdata;
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","department_id"); 
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
	$edata["DisplayField"] = "Department_id";
	
		
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

	

	
	$tdatabatch["department_id"] = $fdata;
//	starting_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "starting_Date";
	$fdata["GoodName"] = "starting_Date";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","starting_Date"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabatch["starting_Date"] = $fdata;
//	Track
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Track";
	$fdata["GoodName"] = "Track";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","Track"); 
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

	

	
	$tdatabatch["Track"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","cid"); 
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

	

	
	$tdatabatch["cid"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","status"); 
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

	

	
	$tdatabatch["status"] = $fdata;
//	uni_spoc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "uni_spoc_name";
	$fdata["GoodName"] = "uni_spoc_name";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","uni_spoc_name"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatabatch["uni_spoc_name"] = $fdata;
//	uni_spoc_contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "uni_spoc_contact";
	$fdata["GoodName"] = "uni_spoc_contact";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","uni_spoc_contact"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatabatch["uni_spoc_contact"] = $fdata;
//	ey_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ey_spoc";
	$fdata["GoodName"] = "ey_spoc";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","ey_spoc"); 
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
	$edata["LookupTable"] = "consultant";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "consultant_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "consultant_id";
	
		
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

	

	
	$tdatabatch["ey_spoc"] = $fdata;
//	local_spoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "local_spoc";
	$fdata["GoodName"] = "local_spoc";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","local_spoc"); 
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
	$edata["LookupTable"] = "employees";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "eid";
	
		
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

	

	
	$tdatabatch["local_spoc"] = $fdata;
//	schedule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "schedule";
	$fdata["GoodName"] = "schedule";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","schedule"); 
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

	

	
	$tdatabatch["schedule"] = $fdata;
//	tech_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "tech_trainer";
	$fdata["GoodName"] = "tech_trainer";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","tech_trainer"); 
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
	$edata["DisplayField"] = "eid";
	
		
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

	

	
	$tdatabatch["tech_trainer"] = $fdata;
//	soft_skill_trainer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "soft_skill_trainer";
	$fdata["GoodName"] = "soft_skill_trainer";
	$fdata["ownerTable"] = "batch";
	$fdata["Label"] = GetFieldLabel("batch","soft_skill_trainer"); 
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
	$edata["DisplayField"] = "eid";
	
		
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

	

	
	$tdatabatch["soft_skill_trainer"] = $fdata;

	
$tables_data["batch"]=&$tdatabatch;
$field_labels["batch"] = &$fieldLabelsbatch;
$fieldToolTips["batch"] = &$fieldToolTipsbatch;
$page_titles["batch"] = &$pageTitlesbatch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batch"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["batch"] = array();


	
				$strOriginalDetailsTable="consultant";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="consultant";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consultant";
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
					$masterTablesData["batch"][0] = $masterParams;	
				$masterTablesData["batch"][0]["masterKeys"] = array();
	$masterTablesData["batch"][0]["masterKeys"][]="consultant_id";
				$masterTablesData["batch"][0]["detailKeys"] = array();
	$masterTablesData["batch"][0]["detailKeys"][]="ey_spoc";
		
	
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
					$masterTablesData["batch"][1] = $masterParams;	
				$masterTablesData["batch"][1]["masterKeys"] = array();
	$masterTablesData["batch"][1]["masterKeys"][]="cid";
				$masterTablesData["batch"][1]["detailKeys"] = array();
	$masterTablesData["batch"][1]["detailKeys"][]="cid";
		
	
				$strOriginalDetailsTable="department";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="department";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "department";
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
					$masterTablesData["batch"][2] = $masterParams;	
				$masterTablesData["batch"][2]["masterKeys"] = array();
	$masterTablesData["batch"][2]["masterKeys"][]="Department_id";
				$masterTablesData["batch"][2]["detailKeys"] = array();
	$masterTablesData["batch"][2]["detailKeys"][]="department_id";
		
	
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
					$masterTablesData["batch"][3] = $masterParams;	
				$masterTablesData["batch"][3]["masterKeys"] = array();
	$masterTablesData["batch"][3]["masterKeys"][]="division_id";
				$masterTablesData["batch"][3]["detailKeys"] = array();
	$masterTablesData["batch"][3]["detailKeys"][]="division_id";
		
	
				$strOriginalDetailsTable="employees";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employees";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employees";
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
					$masterTablesData["batch"][4] = $masterParams;	
				$masterTablesData["batch"][4]["masterKeys"] = array();
	$masterTablesData["batch"][4]["masterKeys"][]="eid";
				$masterTablesData["batch"][4]["detailKeys"] = array();
	$masterTablesData["batch"][4]["detailKeys"][]="soft_skill_trainer";
		
	
				$strOriginalDetailsTable="university";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="university";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "university";
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
					$masterTablesData["batch"][5] = $masterParams;	
				$masterTablesData["batch"][5]["masterKeys"] = array();
	$masterTablesData["batch"][5]["masterKeys"][]="university_id";
				$masterTablesData["batch"][5]["detailKeys"] = array();
	$masterTablesData["batch"][5]["detailKeys"][]="university_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "batch_id,  	Batchcode,  	fbgroup,  	division_id,  	university_id,  	department_id,  	starting_Date,  	Track,  	cid,  	status,  	uni_spoc_name,  	uni_spoc_contact,  	ey_spoc,  	local_spoc,  	schedule,  	tech_trainer,  	soft_skill_trainer";
$proto0["m_strFrom"] = "FROM batch";
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
	"m_strName" => "batch_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto5["m_sql"] = "batch_id";
$proto5["m_srcTableName"] = "batch";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Batchcode",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto7["m_sql"] = "Batchcode";
$proto7["m_srcTableName"] = "batch";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fbgroup",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto9["m_sql"] = "fbgroup";
$proto9["m_srcTableName"] = "batch";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto11["m_sql"] = "division_id";
$proto11["m_srcTableName"] = "batch";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "university_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto13["m_sql"] = "university_id";
$proto13["m_srcTableName"] = "batch";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto15["m_sql"] = "department_id";
$proto15["m_srcTableName"] = "batch";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_Date",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto17["m_sql"] = "starting_Date";
$proto17["m_srcTableName"] = "batch";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Track",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto19["m_sql"] = "Track";
$proto19["m_srcTableName"] = "batch";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto21["m_sql"] = "cid";
$proto21["m_srcTableName"] = "batch";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto23["m_sql"] = "status";
$proto23["m_srcTableName"] = "batch";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_name",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto25["m_sql"] = "uni_spoc_name";
$proto25["m_srcTableName"] = "batch";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "uni_spoc_contact",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto27["m_sql"] = "uni_spoc_contact";
$proto27["m_srcTableName"] = "batch";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ey_spoc",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto29["m_sql"] = "ey_spoc";
$proto29["m_srcTableName"] = "batch";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "local_spoc",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto31["m_sql"] = "local_spoc";
$proto31["m_srcTableName"] = "batch";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "schedule",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto33["m_sql"] = "schedule";
$proto33["m_srcTableName"] = "batch";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "tech_trainer",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto35["m_sql"] = "tech_trainer";
$proto35["m_srcTableName"] = "batch";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "soft_skill_trainer",
	"m_strTable" => "batch",
	"m_srcTableName" => "batch"
));

$proto37["m_sql"] = "soft_skill_trainer";
$proto37["m_srcTableName"] = "batch";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "batch";
$proto40["m_srcTableName"] = "batch";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "batch_id";
$proto40["m_columns"][] = "Batchcode";
$proto40["m_columns"][] = "fbgroup";
$proto40["m_columns"][] = "division_id";
$proto40["m_columns"][] = "university_id";
$proto40["m_columns"][] = "department_id";
$proto40["m_columns"][] = "starting_Date";
$proto40["m_columns"][] = "Track";
$proto40["m_columns"][] = "cid";
$proto40["m_columns"][] = "status";
$proto40["m_columns"][] = "uni_spoc_name";
$proto40["m_columns"][] = "uni_spoc_contact";
$proto40["m_columns"][] = "ey_spoc";
$proto40["m_columns"][] = "local_spoc";
$proto40["m_columns"][] = "schedule";
$proto40["m_columns"][] = "tech_trainer";
$proto40["m_columns"][] = "soft_skill_trainer";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "batch";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "batch";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="batch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batch = createSqlQuery_batch();


	
																	
	
$tdatabatch[".sqlquery"] = $queryData_batch;

$tableEvents["batch"] = new eventsBase;
$tdatabatch[".hasEvents"] = false;

?>