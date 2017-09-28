<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabatchschedule1 = array();
	$tdatabatchschedule1[".truncateText"] = true;
	$tdatabatchschedule1[".NumberOfChars"] = 80;
	$tdatabatchschedule1[".ShortName"] = "batchschedule1";
	$tdatabatchschedule1[".OwnerID"] = "";
	$tdatabatchschedule1[".OriginalTable"] = "batchschedule1";

//	field labels
$fieldLabelsbatchschedule1 = array();
$fieldToolTipsbatchschedule1 = array();
$pageTitlesbatchschedule1 = array();
$placeHoldersbatchschedule1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatchschedule1["English"] = array();
	$fieldToolTipsbatchschedule1["English"] = array();
	$placeHoldersbatchschedule1["English"] = array();
	$pageTitlesbatchschedule1["English"] = array();
	$fieldLabelsbatchschedule1["English"]["sid"] = "Sid";
	$fieldToolTipsbatchschedule1["English"]["sid"] = "";
	$placeHoldersbatchschedule1["English"]["sid"] = "";
	$fieldLabelsbatchschedule1["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatchschedule1["English"]["Batchcode"] = "";
	$placeHoldersbatchschedule1["English"]["Batchcode"] = "";
	$fieldLabelsbatchschedule1["English"]["sdate"] = "Sdate";
	$fieldToolTipsbatchschedule1["English"]["sdate"] = "";
	$placeHoldersbatchschedule1["English"]["sdate"] = "";
	$fieldLabelsbatchschedule1["English"]["stime"] = "Stime";
	$fieldToolTipsbatchschedule1["English"]["stime"] = "";
	$placeHoldersbatchschedule1["English"]["stime"] = "";
	$fieldLabelsbatchschedule1["English"]["etime"] = "Etime";
	$fieldToolTipsbatchschedule1["English"]["etime"] = "";
	$placeHoldersbatchschedule1["English"]["etime"] = "";
	$fieldLabelsbatchschedule1["English"]["status"] = "Status";
	$fieldToolTipsbatchschedule1["English"]["status"] = "";
	$placeHoldersbatchschedule1["English"]["status"] = "";
	$fieldLabelsbatchschedule1["English"]["remark"] = "Remark";
	$fieldToolTipsbatchschedule1["English"]["remark"] = "";
	$placeHoldersbatchschedule1["English"]["remark"] = "";
	if (count($fieldToolTipsbatchschedule1["English"]))
		$tdatabatchschedule1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatchschedule1[""] = array();
	$fieldToolTipsbatchschedule1[""] = array();
	$placeHoldersbatchschedule1[""] = array();
	$pageTitlesbatchschedule1[""] = array();
	$fieldLabelsbatchschedule1[""]["sid"] = "Sid";
	$fieldToolTipsbatchschedule1[""]["sid"] = "";
	$placeHoldersbatchschedule1[""]["sid"] = "";
	$fieldLabelsbatchschedule1[""]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatchschedule1[""]["Batchcode"] = "";
	$placeHoldersbatchschedule1[""]["Batchcode"] = "";
	$fieldLabelsbatchschedule1[""]["sdate"] = "Sdate";
	$fieldToolTipsbatchschedule1[""]["sdate"] = "";
	$placeHoldersbatchschedule1[""]["sdate"] = "";
	$fieldLabelsbatchschedule1[""]["stime"] = "Stime";
	$fieldToolTipsbatchschedule1[""]["stime"] = "";
	$placeHoldersbatchschedule1[""]["stime"] = "";
	$fieldLabelsbatchschedule1[""]["etime"] = "Etime";
	$fieldToolTipsbatchschedule1[""]["etime"] = "";
	$placeHoldersbatchschedule1[""]["etime"] = "";
	$fieldLabelsbatchschedule1[""]["status"] = "Status";
	$fieldToolTipsbatchschedule1[""]["status"] = "";
	$placeHoldersbatchschedule1[""]["status"] = "";
	$fieldLabelsbatchschedule1[""]["remark"] = "Remark";
	$fieldToolTipsbatchschedule1[""]["remark"] = "";
	$placeHoldersbatchschedule1[""]["remark"] = "";
	if (count($fieldToolTipsbatchschedule1[""]))
		$tdatabatchschedule1[".isUseToolTips"] = true;
}


	$tdatabatchschedule1[".NCSearch"] = true;



$tdatabatchschedule1[".shortTableName"] = "batchschedule1";
$tdatabatchschedule1[".nSecOptions"] = 0;
$tdatabatchschedule1[".recsPerRowPrint"] = 1;
$tdatabatchschedule1[".mainTableOwnerID"] = "";
$tdatabatchschedule1[".moveNext"] = 1;
$tdatabatchschedule1[".entityType"] = 0;

$tdatabatchschedule1[".strOriginalTableName"] = "batchschedule1";

	



$tdatabatchschedule1[".showAddInPopup"] = false;

$tdatabatchschedule1[".showEditInPopup"] = false;

$tdatabatchschedule1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabatchschedule1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabatchschedule1[".fieldsForRegister"] = array();

$tdatabatchschedule1[".listAjax"] = false;

	$tdatabatchschedule1[".audit"] = false;

	$tdatabatchschedule1[".locking"] = false;

$tdatabatchschedule1[".edit"] = true;
$tdatabatchschedule1[".afterEditAction"] = 1;
$tdatabatchschedule1[".closePopupAfterEdit"] = 1;
$tdatabatchschedule1[".afterEditActionDetTable"] = "";

$tdatabatchschedule1[".add"] = true;
$tdatabatchschedule1[".afterAddAction"] = 1;
$tdatabatchschedule1[".closePopupAfterAdd"] = 1;
$tdatabatchschedule1[".afterAddActionDetTable"] = "";

$tdatabatchschedule1[".list"] = true;



$tdatabatchschedule1[".reorderRecordsByHeader"] = true;


$tdatabatchschedule1[".exportFormatting"] = 2;
$tdatabatchschedule1[".exportDelimiter"] = ",";
		
$tdatabatchschedule1[".view"] = true;

$tdatabatchschedule1[".import"] = true;

$tdatabatchschedule1[".exportTo"] = true;

$tdatabatchschedule1[".printFriendly"] = true;

$tdatabatchschedule1[".delete"] = true;

$tdatabatchschedule1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabatchschedule1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabatchschedule1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabatchschedule1[".searchSaving"] = false;
//

$tdatabatchschedule1[".showSearchPanel"] = true;
		$tdatabatchschedule1[".flexibleSearch"] = true;

$tdatabatchschedule1[".isUseAjaxSuggest"] = true;

$tdatabatchschedule1[".rowHighlite"] = true;





$tdatabatchschedule1[".ajaxCodeSnippetAdded"] = false;

$tdatabatchschedule1[".buttonsAdded"] = false;

$tdatabatchschedule1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatchschedule1[".isUseTimeForSearch"] = false;



$tdatabatchschedule1[".badgeColor"] = "D2AF80";


$tdatabatchschedule1[".allSearchFields"] = array();
$tdatabatchschedule1[".filterFields"] = array();
$tdatabatchschedule1[".requiredSearchFields"] = array();

$tdatabatchschedule1[".allSearchFields"][] = "sid";
	$tdatabatchschedule1[".allSearchFields"][] = "Batchcode";
	$tdatabatchschedule1[".allSearchFields"][] = "sdate";
	$tdatabatchschedule1[".allSearchFields"][] = "stime";
	$tdatabatchschedule1[".allSearchFields"][] = "etime";
	$tdatabatchschedule1[".allSearchFields"][] = "status";
	$tdatabatchschedule1[".allSearchFields"][] = "remark";
	

$tdatabatchschedule1[".googleLikeFields"] = array();
$tdatabatchschedule1[".googleLikeFields"][] = "sid";
$tdatabatchschedule1[".googleLikeFields"][] = "Batchcode";
$tdatabatchschedule1[".googleLikeFields"][] = "sdate";
$tdatabatchschedule1[".googleLikeFields"][] = "stime";
$tdatabatchschedule1[".googleLikeFields"][] = "etime";
$tdatabatchschedule1[".googleLikeFields"][] = "status";
$tdatabatchschedule1[".googleLikeFields"][] = "remark";


$tdatabatchschedule1[".advSearchFields"] = array();
$tdatabatchschedule1[".advSearchFields"][] = "sid";
$tdatabatchschedule1[".advSearchFields"][] = "Batchcode";
$tdatabatchschedule1[".advSearchFields"][] = "sdate";
$tdatabatchschedule1[".advSearchFields"][] = "stime";
$tdatabatchschedule1[".advSearchFields"][] = "etime";
$tdatabatchschedule1[".advSearchFields"][] = "status";
$tdatabatchschedule1[".advSearchFields"][] = "remark";

$tdatabatchschedule1[".tableType"] = "list";

$tdatabatchschedule1[".printerPageOrientation"] = 0;
$tdatabatchschedule1[".nPrinterPageScale"] = 100;

$tdatabatchschedule1[".nPrinterSplitRecords"] = 40;

$tdatabatchschedule1[".nPrinterPDFSplitRecords"] = 40;



$tdatabatchschedule1[".geocodingEnabled"] = false;





$tdatabatchschedule1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabatchschedule1[".pageSize"] = 20;

$tdatabatchschedule1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatchschedule1[".strOrderBy"] = $tstrOrderBy;

$tdatabatchschedule1[".orderindexes"] = array();

$tdatabatchschedule1[".sqlHead"] = "SELECT sid,  	Batchcode,  	sdate,  	stime,  	etime,  	status,  	remark";
$tdatabatchschedule1[".sqlFrom"] = "FROM batchschedule1";
$tdatabatchschedule1[".sqlWhereExpr"] = "";
$tdatabatchschedule1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabatchschedule1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabatchschedule1[".arrGroupsPerPage"] = $arrGPP;

$tdatabatchschedule1[".highlightSearchResults"] = true;

$tableKeysbatchschedule1 = array();
$tableKeysbatchschedule1[] = "sid";
$tdatabatchschedule1[".Keys"] = $tableKeysbatchschedule1;

$tdatabatchschedule1[".listFields"] = array();
$tdatabatchschedule1[".listFields"][] = "sid";
$tdatabatchschedule1[".listFields"][] = "Batchcode";
$tdatabatchschedule1[".listFields"][] = "sdate";
$tdatabatchschedule1[".listFields"][] = "stime";
$tdatabatchschedule1[".listFields"][] = "etime";
$tdatabatchschedule1[".listFields"][] = "status";
$tdatabatchschedule1[".listFields"][] = "remark";

$tdatabatchschedule1[".hideMobileList"] = array();


$tdatabatchschedule1[".viewFields"] = array();
$tdatabatchschedule1[".viewFields"][] = "sid";
$tdatabatchschedule1[".viewFields"][] = "Batchcode";
$tdatabatchschedule1[".viewFields"][] = "sdate";
$tdatabatchschedule1[".viewFields"][] = "stime";
$tdatabatchschedule1[".viewFields"][] = "etime";
$tdatabatchschedule1[".viewFields"][] = "status";
$tdatabatchschedule1[".viewFields"][] = "remark";

$tdatabatchschedule1[".addFields"] = array();
$tdatabatchschedule1[".addFields"][] = "Batchcode";
$tdatabatchschedule1[".addFields"][] = "sdate";
$tdatabatchschedule1[".addFields"][] = "stime";
$tdatabatchschedule1[".addFields"][] = "etime";
$tdatabatchschedule1[".addFields"][] = "status";
$tdatabatchschedule1[".addFields"][] = "remark";

$tdatabatchschedule1[".masterListFields"] = array();
$tdatabatchschedule1[".masterListFields"][] = "sid";
$tdatabatchschedule1[".masterListFields"][] = "Batchcode";
$tdatabatchschedule1[".masterListFields"][] = "sdate";
$tdatabatchschedule1[".masterListFields"][] = "stime";
$tdatabatchschedule1[".masterListFields"][] = "etime";
$tdatabatchschedule1[".masterListFields"][] = "status";
$tdatabatchschedule1[".masterListFields"][] = "remark";

$tdatabatchschedule1[".inlineAddFields"] = array();

$tdatabatchschedule1[".editFields"] = array();
$tdatabatchschedule1[".editFields"][] = "Batchcode";
$tdatabatchschedule1[".editFields"][] = "sdate";
$tdatabatchschedule1[".editFields"][] = "stime";
$tdatabatchschedule1[".editFields"][] = "etime";
$tdatabatchschedule1[".editFields"][] = "status";
$tdatabatchschedule1[".editFields"][] = "remark";

$tdatabatchschedule1[".inlineEditFields"] = array();

$tdatabatchschedule1[".updateSelectedFields"] = array();
$tdatabatchschedule1[".updateSelectedFields"][] = "Batchcode";
$tdatabatchschedule1[".updateSelectedFields"][] = "sdate";
$tdatabatchschedule1[".updateSelectedFields"][] = "stime";
$tdatabatchschedule1[".updateSelectedFields"][] = "etime";
$tdatabatchschedule1[".updateSelectedFields"][] = "status";
$tdatabatchschedule1[".updateSelectedFields"][] = "remark";


$tdatabatchschedule1[".exportFields"] = array();
$tdatabatchschedule1[".exportFields"][] = "sid";
$tdatabatchschedule1[".exportFields"][] = "Batchcode";
$tdatabatchschedule1[".exportFields"][] = "sdate";
$tdatabatchschedule1[".exportFields"][] = "stime";
$tdatabatchschedule1[".exportFields"][] = "etime";
$tdatabatchschedule1[".exportFields"][] = "status";
$tdatabatchschedule1[".exportFields"][] = "remark";

$tdatabatchschedule1[".importFields"] = array();
$tdatabatchschedule1[".importFields"][] = "sid";
$tdatabatchschedule1[".importFields"][] = "Batchcode";
$tdatabatchschedule1[".importFields"][] = "sdate";
$tdatabatchschedule1[".importFields"][] = "stime";
$tdatabatchschedule1[".importFields"][] = "etime";
$tdatabatchschedule1[".importFields"][] = "status";
$tdatabatchschedule1[".importFields"][] = "remark";

$tdatabatchschedule1[".printFields"] = array();
$tdatabatchschedule1[".printFields"][] = "sid";
$tdatabatchschedule1[".printFields"][] = "Batchcode";
$tdatabatchschedule1[".printFields"][] = "sdate";
$tdatabatchschedule1[".printFields"][] = "stime";
$tdatabatchschedule1[".printFields"][] = "etime";
$tdatabatchschedule1[".printFields"][] = "status";
$tdatabatchschedule1[".printFields"][] = "remark";


//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "batchschedule1";
	$fdata["Label"] = GetFieldLabel("batchschedule1","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sid";

	
	
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




	$tdatabatchschedule1["sid"] = $fdata;
//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "batchschedule1";
	$fdata["Label"] = GetFieldLabel("batchschedule1","Batchcode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "batch";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Batchcode";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Batchcode";
	
	

	
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




	$tdatabatchschedule1["Batchcode"] = $fdata;
//	sdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sdate";
	$fdata["GoodName"] = "sdate";
	$fdata["ownerTable"] = "batchschedule1";
	$fdata["Label"] = GetFieldLabel("batchschedule1","sdate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatabatchschedule1["sdate"] = $fdata;
//	stime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stime";
	$fdata["GoodName"] = "stime";
	$fdata["ownerTable"] = "batchschedule1";
	$fdata["Label"] = GetFieldLabel("batchschedule1","stime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatabatchschedule1["stime"] = $fdata;
//	etime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "etime";
	$fdata["GoodName"] = "etime";
	$fdata["ownerTable"] = "batchschedule1";
	$fdata["Label"] = GetFieldLabel("batchschedule1","etime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatabatchschedule1["etime"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "batchschedule1";
	$fdata["Label"] = GetFieldLabel("batchschedule1","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatabatchschedule1["status"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "batchschedule1";
	$fdata["Label"] = GetFieldLabel("batchschedule1","remark");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatabatchschedule1["remark"] = $fdata;


$tables_data["batchschedule1"]=&$tdatabatchschedule1;
$field_labels["batchschedule1"] = &$fieldLabelsbatchschedule1;
$fieldToolTips["batchschedule1"] = &$fieldToolTipsbatchschedule1;
$placeHolders["batchschedule1"] = &$placeHoldersbatchschedule1;
$page_titles["batchschedule1"] = &$pageTitlesbatchschedule1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batchschedule1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["batchschedule1"] = array();


	
				$strOriginalDetailsTable="batch";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="batch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "batch";
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
					$masterTablesData["batchschedule1"][0] = $masterParams;
				$masterTablesData["batchschedule1"][0]["masterKeys"] = array();
	$masterTablesData["batchschedule1"][0]["masterKeys"][]="Batchcode";
				$masterTablesData["batchschedule1"][0]["detailKeys"] = array();
	$masterTablesData["batchschedule1"][0]["detailKeys"][]="Batchcode";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batchschedule1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  	Batchcode,  	sdate,  	stime,  	etime,  	status,  	remark";
$proto0["m_strFrom"] = "FROM batchschedule1";
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
	"m_strName" => "sid",
	"m_strTable" => "batchschedule1",
	"m_srcTableName" => "batchschedule1"
));

$proto6["m_sql"] = "sid";
$proto6["m_srcTableName"] = "batchschedule1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Batchcode",
	"m_strTable" => "batchschedule1",
	"m_srcTableName" => "batchschedule1"
));

$proto8["m_sql"] = "Batchcode";
$proto8["m_srcTableName"] = "batchschedule1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sdate",
	"m_strTable" => "batchschedule1",
	"m_srcTableName" => "batchschedule1"
));

$proto10["m_sql"] = "sdate";
$proto10["m_srcTableName"] = "batchschedule1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stime",
	"m_strTable" => "batchschedule1",
	"m_srcTableName" => "batchschedule1"
));

$proto12["m_sql"] = "stime";
$proto12["m_srcTableName"] = "batchschedule1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "etime",
	"m_strTable" => "batchschedule1",
	"m_srcTableName" => "batchschedule1"
));

$proto14["m_sql"] = "etime";
$proto14["m_srcTableName"] = "batchschedule1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "batchschedule1",
	"m_srcTableName" => "batchschedule1"
));

$proto16["m_sql"] = "status";
$proto16["m_srcTableName"] = "batchschedule1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "batchschedule1",
	"m_srcTableName" => "batchschedule1"
));

$proto18["m_sql"] = "remark";
$proto18["m_srcTableName"] = "batchschedule1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "batchschedule1";
$proto21["m_srcTableName"] = "batchschedule1";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "sid";
$proto21["m_columns"][] = "Batchcode";
$proto21["m_columns"][] = "sdate";
$proto21["m_columns"][] = "stime";
$proto21["m_columns"][] = "etime";
$proto21["m_columns"][] = "status";
$proto21["m_columns"][] = "remark";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "batchschedule1";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "batchschedule1";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="batchschedule1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batchschedule1 = createSqlQuery_batchschedule1();


	
		;

							

$tdatabatchschedule1[".sqlquery"] = $queryData_batchschedule1;

$tableEvents["batchschedule1"] = new eventsBase;
$tdatabatchschedule1[".hasEvents"] = false;

?>