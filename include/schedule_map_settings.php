<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschedule_map = array();
	$tdataschedule_map[".truncateText"] = true;
	$tdataschedule_map[".NumberOfChars"] = 80;
	$tdataschedule_map[".ShortName"] = "schedule_map";
	$tdataschedule_map[".OwnerID"] = "";
	$tdataschedule_map[".OriginalTable"] = "schedule_map";

//	field labels
$fieldLabelsschedule_map = array();
$fieldToolTipsschedule_map = array();
$pageTitlesschedule_map = array();
$placeHoldersschedule_map = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschedule_map["English"] = array();
	$fieldToolTipsschedule_map["English"] = array();
	$placeHoldersschedule_map["English"] = array();
	$pageTitlesschedule_map["English"] = array();
	$fieldLabelsschedule_map["English"]["track"] = "Track";
	$fieldToolTipsschedule_map["English"]["track"] = "";
	$placeHoldersschedule_map["English"]["track"] = "";
	$fieldLabelsschedule_map["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsschedule_map["English"]["Batchcode"] = "";
	$placeHoldersschedule_map["English"]["Batchcode"] = "";
	$fieldLabelsschedule_map["English"]["fbgroup"] = "Fbgroup";
	$fieldToolTipsschedule_map["English"]["fbgroup"] = "";
	$placeHoldersschedule_map["English"]["fbgroup"] = "";
	$fieldLabelsschedule_map["English"]["university_id"] = "University Id";
	$fieldToolTipsschedule_map["English"]["university_id"] = "";
	$placeHoldersschedule_map["English"]["university_id"] = "";
	$fieldLabelsschedule_map["English"]["status"] = "Status";
	$fieldToolTipsschedule_map["English"]["status"] = "";
	$placeHoldersschedule_map["English"]["status"] = "";
	$fieldLabelsschedule_map["English"]["University_name"] = "University Name";
	$fieldToolTipsschedule_map["English"]["University_name"] = "";
	$placeHoldersschedule_map["English"]["University_name"] = "";
	$fieldLabelsschedule_map["English"]["Lat"] = "Lat";
	$fieldToolTipsschedule_map["English"]["Lat"] = "";
	$placeHoldersschedule_map["English"]["Lat"] = "";
	$fieldLabelsschedule_map["English"]["Lng"] = "Lng";
	$fieldToolTipsschedule_map["English"]["Lng"] = "";
	$placeHoldersschedule_map["English"]["Lng"] = "";
	$fieldLabelsschedule_map["English"]["Date"] = "Date";
	$fieldToolTipsschedule_map["English"]["Date"] = "";
	$placeHoldersschedule_map["English"]["Date"] = "";
	if (count($fieldToolTipsschedule_map["English"]))
		$tdataschedule_map[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschedule_map[""] = array();
	$fieldToolTipsschedule_map[""] = array();
	$placeHoldersschedule_map[""] = array();
	$pageTitlesschedule_map[""] = array();
	$fieldLabelsschedule_map[""]["track"] = "Track";
	$fieldToolTipsschedule_map[""]["track"] = "";
	$placeHoldersschedule_map[""]["track"] = "";
	$fieldLabelsschedule_map[""]["Batchcode"] = "Batchcode";
	$fieldToolTipsschedule_map[""]["Batchcode"] = "";
	$placeHoldersschedule_map[""]["Batchcode"] = "";
	$fieldLabelsschedule_map[""]["fbgroup"] = "Fbgroup";
	$fieldToolTipsschedule_map[""]["fbgroup"] = "";
	$placeHoldersschedule_map[""]["fbgroup"] = "";
	$fieldLabelsschedule_map[""]["university_id"] = "University Id";
	$fieldToolTipsschedule_map[""]["university_id"] = "";
	$placeHoldersschedule_map[""]["university_id"] = "";
	$fieldLabelsschedule_map[""]["status"] = "Status";
	$fieldToolTipsschedule_map[""]["status"] = "";
	$placeHoldersschedule_map[""]["status"] = "";
	$fieldLabelsschedule_map[""]["University_name"] = "University Name";
	$fieldToolTipsschedule_map[""]["University_name"] = "";
	$placeHoldersschedule_map[""]["University_name"] = "";
	$fieldLabelsschedule_map[""]["Lat"] = "Lat";
	$fieldToolTipsschedule_map[""]["Lat"] = "";
	$placeHoldersschedule_map[""]["Lat"] = "";
	$fieldLabelsschedule_map[""]["Lng"] = "Lng";
	$fieldToolTipsschedule_map[""]["Lng"] = "";
	$placeHoldersschedule_map[""]["Lng"] = "";
	$fieldLabelsschedule_map[""]["Date"] = "Date";
	$fieldToolTipsschedule_map[""]["Date"] = "";
	$placeHoldersschedule_map[""]["Date"] = "";
	if (count($fieldToolTipsschedule_map[""]))
		$tdataschedule_map[".isUseToolTips"] = true;
}


	$tdataschedule_map[".NCSearch"] = true;



$tdataschedule_map[".shortTableName"] = "schedule_map";
$tdataschedule_map[".nSecOptions"] = 0;
$tdataschedule_map[".recsPerRowPrint"] = 1;
$tdataschedule_map[".mainTableOwnerID"] = "";
$tdataschedule_map[".moveNext"] = 1;
$tdataschedule_map[".entityType"] = 0;

$tdataschedule_map[".strOriginalTableName"] = "schedule_map";

	



$tdataschedule_map[".showAddInPopup"] = false;

$tdataschedule_map[".showEditInPopup"] = false;

$tdataschedule_map[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschedule_map[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschedule_map[".fieldsForRegister"] = array();

$tdataschedule_map[".listAjax"] = false;

	$tdataschedule_map[".audit"] = false;

	$tdataschedule_map[".locking"] = false;



$tdataschedule_map[".list"] = true;



$tdataschedule_map[".reorderRecordsByHeader"] = true;


$tdataschedule_map[".exportFormatting"] = 2;
$tdataschedule_map[".exportDelimiter"] = ",";
		

$tdataschedule_map[".import"] = true;

$tdataschedule_map[".exportTo"] = true;

$tdataschedule_map[".printFriendly"] = true;


$tdataschedule_map[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataschedule_map[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataschedule_map[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataschedule_map[".searchSaving"] = false;
//

$tdataschedule_map[".showSearchPanel"] = true;
		$tdataschedule_map[".flexibleSearch"] = true;

$tdataschedule_map[".isUseAjaxSuggest"] = true;

$tdataschedule_map[".rowHighlite"] = true;



			

$tdataschedule_map[".ajaxCodeSnippetAdded"] = false;

$tdataschedule_map[".buttonsAdded"] = false;

$tdataschedule_map[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschedule_map[".isUseTimeForSearch"] = false;





$tdataschedule_map[".allSearchFields"] = array();
$tdataschedule_map[".filterFields"] = array();
$tdataschedule_map[".requiredSearchFields"] = array();

$tdataschedule_map[".allSearchFields"][] = "track";
	$tdataschedule_map[".allSearchFields"][] = "Batchcode";
	$tdataschedule_map[".allSearchFields"][] = "fbgroup";
	$tdataschedule_map[".allSearchFields"][] = "university_id";
	$tdataschedule_map[".allSearchFields"][] = "Date";
	$tdataschedule_map[".allSearchFields"][] = "status";
	$tdataschedule_map[".allSearchFields"][] = "University_name";
	$tdataschedule_map[".allSearchFields"][] = "Lat";
	$tdataschedule_map[".allSearchFields"][] = "Lng";
	

$tdataschedule_map[".googleLikeFields"] = array();
$tdataschedule_map[".googleLikeFields"][] = "track";
$tdataschedule_map[".googleLikeFields"][] = "Batchcode";
$tdataschedule_map[".googleLikeFields"][] = "fbgroup";
$tdataschedule_map[".googleLikeFields"][] = "university_id";
$tdataschedule_map[".googleLikeFields"][] = "Date";
$tdataschedule_map[".googleLikeFields"][] = "status";
$tdataschedule_map[".googleLikeFields"][] = "University_name";
$tdataschedule_map[".googleLikeFields"][] = "Lat";
$tdataschedule_map[".googleLikeFields"][] = "Lng";


$tdataschedule_map[".advSearchFields"] = array();
$tdataschedule_map[".advSearchFields"][] = "track";
$tdataschedule_map[".advSearchFields"][] = "Batchcode";
$tdataschedule_map[".advSearchFields"][] = "fbgroup";
$tdataschedule_map[".advSearchFields"][] = "university_id";
$tdataschedule_map[".advSearchFields"][] = "Date";
$tdataschedule_map[".advSearchFields"][] = "status";
$tdataschedule_map[".advSearchFields"][] = "University_name";
$tdataschedule_map[".advSearchFields"][] = "Lat";
$tdataschedule_map[".advSearchFields"][] = "Lng";

$tdataschedule_map[".tableType"] = "list";

$tdataschedule_map[".printerPageOrientation"] = 0;
$tdataschedule_map[".nPrinterPageScale"] = 100;

$tdataschedule_map[".nPrinterSplitRecords"] = 40;

$tdataschedule_map[".nPrinterPDFSplitRecords"] = 40;



$tdataschedule_map[".geocodingEnabled"] = true;
$tdataschedule_map[".geocodingData"] = array();
$tdataschedule_map[".geocodingData"]["latField"] = "Lat";
$tdataschedule_map[".geocodingData"]["lngField"] = "Lng";
$tdataschedule_map[".geocodingData"]["addressFields"] = array();
	$tdataschedule_map[".geocodingData"]["addressFields"][] = "University_name";
	$tdataschedule_map[".geocodingData"]["addressFields"][] = "status";





$tdataschedule_map[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataschedule_map[".pageSize"] = 20;

$tdataschedule_map[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschedule_map[".strOrderBy"] = $tstrOrderBy;

$tdataschedule_map[".orderindexes"] = array();

$tdataschedule_map[".sqlHead"] = "SELECT track,  	Batchcode,  	fbgroup,  	university_id,  	`Date`,  	status,  	University_name,  	Lat,  	Lng";
$tdataschedule_map[".sqlFrom"] = "FROM schedule_map";
$tdataschedule_map[".sqlWhereExpr"] = "";
$tdataschedule_map[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschedule_map[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschedule_map[".arrGroupsPerPage"] = $arrGPP;

$tdataschedule_map[".highlightSearchResults"] = true;

$tableKeysschedule_map = array();
$tdataschedule_map[".Keys"] = $tableKeysschedule_map;

$tdataschedule_map[".listFields"] = array();
$tdataschedule_map[".listFields"][] = "Date";
$tdataschedule_map[".listFields"][] = "track";
$tdataschedule_map[".listFields"][] = "Batchcode";
$tdataschedule_map[".listFields"][] = "fbgroup";
$tdataschedule_map[".listFields"][] = "university_id";
$tdataschedule_map[".listFields"][] = "status";
$tdataschedule_map[".listFields"][] = "University_name";
$tdataschedule_map[".listFields"][] = "Lat";
$tdataschedule_map[".listFields"][] = "Lng";

$tdataschedule_map[".hideMobileList"] = array();


$tdataschedule_map[".viewFields"] = array();
$tdataschedule_map[".viewFields"][] = "track";
$tdataschedule_map[".viewFields"][] = "Batchcode";
$tdataschedule_map[".viewFields"][] = "fbgroup";
$tdataschedule_map[".viewFields"][] = "university_id";
$tdataschedule_map[".viewFields"][] = "Date";
$tdataschedule_map[".viewFields"][] = "status";
$tdataschedule_map[".viewFields"][] = "University_name";
$tdataschedule_map[".viewFields"][] = "Lat";
$tdataschedule_map[".viewFields"][] = "Lng";

$tdataschedule_map[".addFields"] = array();
$tdataschedule_map[".addFields"][] = "track";
$tdataschedule_map[".addFields"][] = "Batchcode";
$tdataschedule_map[".addFields"][] = "fbgroup";
$tdataschedule_map[".addFields"][] = "university_id";
$tdataschedule_map[".addFields"][] = "Date";
$tdataschedule_map[".addFields"][] = "status";
$tdataschedule_map[".addFields"][] = "University_name";
$tdataschedule_map[".addFields"][] = "Lat";
$tdataschedule_map[".addFields"][] = "Lng";

$tdataschedule_map[".masterListFields"] = array();
$tdataschedule_map[".masterListFields"][] = "track";
$tdataschedule_map[".masterListFields"][] = "Batchcode";
$tdataschedule_map[".masterListFields"][] = "fbgroup";
$tdataschedule_map[".masterListFields"][] = "university_id";
$tdataschedule_map[".masterListFields"][] = "Date";
$tdataschedule_map[".masterListFields"][] = "status";
$tdataschedule_map[".masterListFields"][] = "University_name";
$tdataschedule_map[".masterListFields"][] = "Lat";
$tdataschedule_map[".masterListFields"][] = "Lng";

$tdataschedule_map[".inlineAddFields"] = array();
$tdataschedule_map[".inlineAddFields"][] = "Date";
$tdataschedule_map[".inlineAddFields"][] = "track";
$tdataschedule_map[".inlineAddFields"][] = "Batchcode";
$tdataschedule_map[".inlineAddFields"][] = "fbgroup";
$tdataschedule_map[".inlineAddFields"][] = "university_id";
$tdataschedule_map[".inlineAddFields"][] = "status";
$tdataschedule_map[".inlineAddFields"][] = "University_name";
$tdataschedule_map[".inlineAddFields"][] = "Lat";
$tdataschedule_map[".inlineAddFields"][] = "Lng";

$tdataschedule_map[".editFields"] = array();
$tdataschedule_map[".editFields"][] = "track";
$tdataschedule_map[".editFields"][] = "Batchcode";
$tdataschedule_map[".editFields"][] = "fbgroup";
$tdataschedule_map[".editFields"][] = "university_id";
$tdataschedule_map[".editFields"][] = "Date";
$tdataschedule_map[".editFields"][] = "status";
$tdataschedule_map[".editFields"][] = "University_name";
$tdataschedule_map[".editFields"][] = "Lat";
$tdataschedule_map[".editFields"][] = "Lng";

$tdataschedule_map[".inlineEditFields"] = array();
$tdataschedule_map[".inlineEditFields"][] = "Date";
$tdataschedule_map[".inlineEditFields"][] = "track";
$tdataschedule_map[".inlineEditFields"][] = "Batchcode";
$tdataschedule_map[".inlineEditFields"][] = "fbgroup";
$tdataschedule_map[".inlineEditFields"][] = "university_id";
$tdataschedule_map[".inlineEditFields"][] = "status";
$tdataschedule_map[".inlineEditFields"][] = "University_name";
$tdataschedule_map[".inlineEditFields"][] = "Lat";
$tdataschedule_map[".inlineEditFields"][] = "Lng";

$tdataschedule_map[".updateSelectedFields"] = array();
$tdataschedule_map[".updateSelectedFields"][] = "track";
$tdataschedule_map[".updateSelectedFields"][] = "Batchcode";
$tdataschedule_map[".updateSelectedFields"][] = "fbgroup";
$tdataschedule_map[".updateSelectedFields"][] = "university_id";
$tdataschedule_map[".updateSelectedFields"][] = "Date";
$tdataschedule_map[".updateSelectedFields"][] = "status";
$tdataschedule_map[".updateSelectedFields"][] = "University_name";
$tdataschedule_map[".updateSelectedFields"][] = "Lat";
$tdataschedule_map[".updateSelectedFields"][] = "Lng";


$tdataschedule_map[".exportFields"] = array();
$tdataschedule_map[".exportFields"][] = "track";
$tdataschedule_map[".exportFields"][] = "Batchcode";
$tdataschedule_map[".exportFields"][] = "fbgroup";
$tdataschedule_map[".exportFields"][] = "university_id";
$tdataschedule_map[".exportFields"][] = "Date";
$tdataschedule_map[".exportFields"][] = "status";
$tdataschedule_map[".exportFields"][] = "University_name";
$tdataschedule_map[".exportFields"][] = "Lat";
$tdataschedule_map[".exportFields"][] = "Lng";

$tdataschedule_map[".importFields"] = array();
$tdataschedule_map[".importFields"][] = "track";
$tdataschedule_map[".importFields"][] = "Batchcode";
$tdataschedule_map[".importFields"][] = "fbgroup";
$tdataschedule_map[".importFields"][] = "university_id";
$tdataschedule_map[".importFields"][] = "Date";
$tdataschedule_map[".importFields"][] = "status";
$tdataschedule_map[".importFields"][] = "University_name";
$tdataschedule_map[".importFields"][] = "Lat";
$tdataschedule_map[".importFields"][] = "Lng";

$tdataschedule_map[".printFields"] = array();
$tdataschedule_map[".printFields"][] = "track";
$tdataschedule_map[".printFields"][] = "Batchcode";
$tdataschedule_map[".printFields"][] = "fbgroup";
$tdataschedule_map[".printFields"][] = "university_id";
$tdataschedule_map[".printFields"][] = "Date";
$tdataschedule_map[".printFields"][] = "status";
$tdataschedule_map[".printFields"][] = "University_name";
$tdataschedule_map[".printFields"][] = "Lat";
$tdataschedule_map[".printFields"][] = "Lng";


//	track
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "track";
	$fdata["GoodName"] = "track";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","track");
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




	$tdataschedule_map["track"] = $fdata;
//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","Batchcode");
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




	$tdataschedule_map["Batchcode"] = $fdata;
//	fbgroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fbgroup";
	$fdata["GoodName"] = "fbgroup";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","fbgroup");
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




	$tdataschedule_map["fbgroup"] = $fdata;
//	university_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "university_id";
	$fdata["GoodName"] = "university_id";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","university_id");
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




	$tdataschedule_map["university_id"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","Date");
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

		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
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




	$tdataschedule_map["Date"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","status");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataschedule_map["status"] = $fdata;
//	University_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "University_name";
	$fdata["GoodName"] = "University_name";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","University_name");
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

		$fdata["strField"] = "University_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "University_name";

	
	
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




	$tdataschedule_map["University_name"] = $fdata;
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","Lat");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdataschedule_map["Lat"] = $fdata;
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "schedule_map";
	$fdata["Label"] = GetFieldLabel("schedule_map","Lng");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdataschedule_map["Lng"] = $fdata;


$tables_data["schedule_map"]=&$tdataschedule_map;
$field_labels["schedule_map"] = &$fieldLabelsschedule_map;
$fieldToolTips["schedule_map"] = &$fieldToolTipsschedule_map;
$placeHolders["schedule_map"] = &$placeHoldersschedule_map;
$page_titles["schedule_map"] = &$pageTitlesschedule_map;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["schedule_map"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["schedule_map"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_schedule_map()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "track,  	Batchcode,  	fbgroup,  	university_id,  	`Date`,  	status,  	University_name,  	Lat,  	Lng";
$proto0["m_strFrom"] = "FROM schedule_map";
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
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto6["m_sql"] = "track";
$proto6["m_srcTableName"] = "schedule_map";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Batchcode",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto8["m_sql"] = "Batchcode";
$proto8["m_srcTableName"] = "schedule_map";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fbgroup",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto10["m_sql"] = "fbgroup";
$proto10["m_srcTableName"] = "schedule_map";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "university_id",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto12["m_sql"] = "university_id";
$proto12["m_srcTableName"] = "schedule_map";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto14["m_sql"] = "`Date`";
$proto14["m_srcTableName"] = "schedule_map";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto16["m_sql"] = "status";
$proto16["m_srcTableName"] = "schedule_map";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "University_name",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto18["m_sql"] = "University_name";
$proto18["m_srcTableName"] = "schedule_map";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto20["m_sql"] = "Lat";
$proto20["m_srcTableName"] = "schedule_map";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "schedule_map",
	"m_srcTableName" => "schedule_map"
));

$proto22["m_sql"] = "Lng";
$proto22["m_srcTableName"] = "schedule_map";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "schedule_map";
$proto25["m_srcTableName"] = "schedule_map";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "track";
$proto25["m_columns"][] = "Batchcode";
$proto25["m_columns"][] = "fbgroup";
$proto25["m_columns"][] = "university_id";
$proto25["m_columns"][] = "Date";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "University_name";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "schedule_map";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "schedule_map";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="schedule_map";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_schedule_map = createSqlQuery_schedule_map();


	
		;

									

$tdataschedule_map[".sqlquery"] = $queryData_schedule_map;

$tableEvents["schedule_map"] = new eventsBase;
$tdataschedule_map[".hasEvents"] = false;

?>