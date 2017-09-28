<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanewbatchschedule = array();
	$tdatanewbatchschedule[".truncateText"] = true;
	$tdatanewbatchschedule[".NumberOfChars"] = 80;
	$tdatanewbatchschedule[".ShortName"] = "newbatchschedule";
	$tdatanewbatchschedule[".OwnerID"] = "";
	$tdatanewbatchschedule[".OriginalTable"] = "newbatchschedule";

//	field labels
$fieldLabelsnewbatchschedule = array();
$fieldToolTipsnewbatchschedule = array();
$pageTitlesnewbatchschedule = array();
$placeHoldersnewbatchschedule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnewbatchschedule["English"] = array();
	$fieldToolTipsnewbatchschedule["English"] = array();
	$placeHoldersnewbatchschedule["English"] = array();
	$pageTitlesnewbatchschedule["English"] = array();
	$fieldLabelsnewbatchschedule["English"]["sid"] = "Sid";
	$fieldToolTipsnewbatchschedule["English"]["sid"] = "";
	$placeHoldersnewbatchschedule["English"]["sid"] = "";
	$fieldLabelsnewbatchschedule["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsnewbatchschedule["English"]["Batchcode"] = "";
	$placeHoldersnewbatchschedule["English"]["Batchcode"] = "";
	$fieldLabelsnewbatchschedule["English"]["sdate"] = "Sdate";
	$fieldToolTipsnewbatchschedule["English"]["sdate"] = "";
	$placeHoldersnewbatchschedule["English"]["sdate"] = "";
	$fieldLabelsnewbatchschedule["English"]["stime"] = "Stime";
	$fieldToolTipsnewbatchschedule["English"]["stime"] = "";
	$placeHoldersnewbatchschedule["English"]["stime"] = "";
	$fieldLabelsnewbatchschedule["English"]["etime"] = "Etime";
	$fieldToolTipsnewbatchschedule["English"]["etime"] = "";
	$placeHoldersnewbatchschedule["English"]["etime"] = "";
	$fieldLabelsnewbatchschedule["English"]["status"] = "Status";
	$fieldToolTipsnewbatchschedule["English"]["status"] = "";
	$placeHoldersnewbatchschedule["English"]["status"] = "";
	$fieldLabelsnewbatchschedule["English"]["remark"] = "Remark";
	$fieldToolTipsnewbatchschedule["English"]["remark"] = "";
	$placeHoldersnewbatchschedule["English"]["remark"] = "";
	if (count($fieldToolTipsnewbatchschedule["English"]))
		$tdatanewbatchschedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnewbatchschedule[""] = array();
	$fieldToolTipsnewbatchschedule[""] = array();
	$placeHoldersnewbatchschedule[""] = array();
	$pageTitlesnewbatchschedule[""] = array();
	$fieldLabelsnewbatchschedule[""]["sid"] = "Sid";
	$fieldToolTipsnewbatchschedule[""]["sid"] = "";
	$placeHoldersnewbatchschedule[""]["sid"] = "";
	$fieldLabelsnewbatchschedule[""]["Batchcode"] = "Batchcode";
	$fieldToolTipsnewbatchschedule[""]["Batchcode"] = "";
	$placeHoldersnewbatchschedule[""]["Batchcode"] = "";
	$fieldLabelsnewbatchschedule[""]["sdate"] = "Sdate";
	$fieldToolTipsnewbatchschedule[""]["sdate"] = "";
	$placeHoldersnewbatchschedule[""]["sdate"] = "";
	$fieldLabelsnewbatchschedule[""]["stime"] = "Stime";
	$fieldToolTipsnewbatchschedule[""]["stime"] = "";
	$placeHoldersnewbatchschedule[""]["stime"] = "";
	$fieldLabelsnewbatchschedule[""]["etime"] = "Etime";
	$fieldToolTipsnewbatchschedule[""]["etime"] = "";
	$placeHoldersnewbatchschedule[""]["etime"] = "";
	$fieldLabelsnewbatchschedule[""]["status"] = "Status";
	$fieldToolTipsnewbatchschedule[""]["status"] = "";
	$placeHoldersnewbatchschedule[""]["status"] = "";
	$fieldLabelsnewbatchschedule[""]["remark"] = "Remark";
	$fieldToolTipsnewbatchschedule[""]["remark"] = "";
	$placeHoldersnewbatchschedule[""]["remark"] = "";
	if (count($fieldToolTipsnewbatchschedule[""]))
		$tdatanewbatchschedule[".isUseToolTips"] = true;
}


	$tdatanewbatchschedule[".NCSearch"] = true;



$tdatanewbatchschedule[".shortTableName"] = "newbatchschedule";
$tdatanewbatchschedule[".nSecOptions"] = 0;
$tdatanewbatchschedule[".recsPerRowPrint"] = 1;
$tdatanewbatchschedule[".mainTableOwnerID"] = "";
$tdatanewbatchschedule[".moveNext"] = 1;
$tdatanewbatchschedule[".entityType"] = 0;

$tdatanewbatchschedule[".strOriginalTableName"] = "newbatchschedule";

	



$tdatanewbatchschedule[".showAddInPopup"] = false;

$tdatanewbatchschedule[".showEditInPopup"] = false;

$tdatanewbatchschedule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanewbatchschedule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanewbatchschedule[".fieldsForRegister"] = array();

$tdatanewbatchschedule[".listAjax"] = false;

	$tdatanewbatchschedule[".audit"] = false;

	$tdatanewbatchschedule[".locking"] = false;

$tdatanewbatchschedule[".edit"] = true;
$tdatanewbatchschedule[".afterEditAction"] = 1;
$tdatanewbatchschedule[".closePopupAfterEdit"] = 1;
$tdatanewbatchschedule[".afterEditActionDetTable"] = "";

$tdatanewbatchschedule[".add"] = true;
$tdatanewbatchschedule[".afterAddAction"] = 1;
$tdatanewbatchschedule[".closePopupAfterAdd"] = 1;
$tdatanewbatchschedule[".afterAddActionDetTable"] = "";

$tdatanewbatchschedule[".list"] = true;



$tdatanewbatchschedule[".reorderRecordsByHeader"] = true;


$tdatanewbatchschedule[".exportFormatting"] = 2;
$tdatanewbatchschedule[".exportDelimiter"] = ",";
		
$tdatanewbatchschedule[".view"] = true;

$tdatanewbatchschedule[".import"] = true;

$tdatanewbatchschedule[".exportTo"] = true;

$tdatanewbatchschedule[".printFriendly"] = true;

$tdatanewbatchschedule[".delete"] = true;

$tdatanewbatchschedule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanewbatchschedule[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanewbatchschedule[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanewbatchschedule[".searchSaving"] = false;
//

$tdatanewbatchschedule[".showSearchPanel"] = true;
		$tdatanewbatchschedule[".flexibleSearch"] = true;

$tdatanewbatchschedule[".isUseAjaxSuggest"] = true;

$tdatanewbatchschedule[".rowHighlite"] = true;





$tdatanewbatchschedule[".ajaxCodeSnippetAdded"] = false;

$tdatanewbatchschedule[".buttonsAdded"] = false;

$tdatanewbatchschedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanewbatchschedule[".isUseTimeForSearch"] = false;



$tdatanewbatchschedule[".badgeColor"] = "00C2C5";


$tdatanewbatchschedule[".allSearchFields"] = array();
$tdatanewbatchschedule[".filterFields"] = array();
$tdatanewbatchschedule[".requiredSearchFields"] = array();

$tdatanewbatchschedule[".allSearchFields"][] = "sid";
	$tdatanewbatchschedule[".allSearchFields"][] = "Batchcode";
	$tdatanewbatchschedule[".allSearchFields"][] = "sdate";
	$tdatanewbatchschedule[".allSearchFields"][] = "stime";
	$tdatanewbatchschedule[".allSearchFields"][] = "etime";
	$tdatanewbatchschedule[".allSearchFields"][] = "status";
	$tdatanewbatchschedule[".allSearchFields"][] = "remark";
	

$tdatanewbatchschedule[".googleLikeFields"] = array();
$tdatanewbatchschedule[".googleLikeFields"][] = "sid";
$tdatanewbatchschedule[".googleLikeFields"][] = "Batchcode";
$tdatanewbatchschedule[".googleLikeFields"][] = "sdate";
$tdatanewbatchschedule[".googleLikeFields"][] = "stime";
$tdatanewbatchschedule[".googleLikeFields"][] = "etime";
$tdatanewbatchschedule[".googleLikeFields"][] = "status";
$tdatanewbatchschedule[".googleLikeFields"][] = "remark";


$tdatanewbatchschedule[".advSearchFields"] = array();
$tdatanewbatchschedule[".advSearchFields"][] = "sid";
$tdatanewbatchschedule[".advSearchFields"][] = "Batchcode";
$tdatanewbatchschedule[".advSearchFields"][] = "sdate";
$tdatanewbatchschedule[".advSearchFields"][] = "stime";
$tdatanewbatchschedule[".advSearchFields"][] = "etime";
$tdatanewbatchschedule[".advSearchFields"][] = "status";
$tdatanewbatchschedule[".advSearchFields"][] = "remark";

$tdatanewbatchschedule[".tableType"] = "list";

$tdatanewbatchschedule[".printerPageOrientation"] = 0;
$tdatanewbatchschedule[".nPrinterPageScale"] = 100;

$tdatanewbatchschedule[".nPrinterSplitRecords"] = 40;

$tdatanewbatchschedule[".nPrinterPDFSplitRecords"] = 40;



$tdatanewbatchschedule[".geocodingEnabled"] = false;





$tdatanewbatchschedule[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatanewbatchschedule[".pageSize"] = 20;

$tdatanewbatchschedule[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanewbatchschedule[".strOrderBy"] = $tstrOrderBy;

$tdatanewbatchschedule[".orderindexes"] = array();

$tdatanewbatchschedule[".sqlHead"] = "SELECT sid,  	Batchcode,  	sdate,  	stime,  	etime,  	status,  	remark";
$tdatanewbatchschedule[".sqlFrom"] = "FROM newbatchschedule";
$tdatanewbatchschedule[".sqlWhereExpr"] = "";
$tdatanewbatchschedule[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanewbatchschedule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanewbatchschedule[".arrGroupsPerPage"] = $arrGPP;

$tdatanewbatchschedule[".highlightSearchResults"] = true;

$tableKeysnewbatchschedule = array();
$tableKeysnewbatchschedule[] = "sid";
$tdatanewbatchschedule[".Keys"] = $tableKeysnewbatchschedule;

$tdatanewbatchschedule[".listFields"] = array();
$tdatanewbatchschedule[".listFields"][] = "sid";
$tdatanewbatchschedule[".listFields"][] = "Batchcode";
$tdatanewbatchschedule[".listFields"][] = "sdate";
$tdatanewbatchschedule[".listFields"][] = "stime";
$tdatanewbatchschedule[".listFields"][] = "etime";
$tdatanewbatchschedule[".listFields"][] = "status";
$tdatanewbatchschedule[".listFields"][] = "remark";

$tdatanewbatchschedule[".hideMobileList"] = array();


$tdatanewbatchschedule[".viewFields"] = array();
$tdatanewbatchschedule[".viewFields"][] = "sid";
$tdatanewbatchschedule[".viewFields"][] = "Batchcode";
$tdatanewbatchschedule[".viewFields"][] = "sdate";
$tdatanewbatchschedule[".viewFields"][] = "stime";
$tdatanewbatchschedule[".viewFields"][] = "etime";
$tdatanewbatchschedule[".viewFields"][] = "status";
$tdatanewbatchschedule[".viewFields"][] = "remark";

$tdatanewbatchschedule[".addFields"] = array();
$tdatanewbatchschedule[".addFields"][] = "Batchcode";
$tdatanewbatchschedule[".addFields"][] = "sdate";
$tdatanewbatchschedule[".addFields"][] = "stime";
$tdatanewbatchschedule[".addFields"][] = "etime";
$tdatanewbatchschedule[".addFields"][] = "status";
$tdatanewbatchschedule[".addFields"][] = "remark";

$tdatanewbatchschedule[".masterListFields"] = array();
$tdatanewbatchschedule[".masterListFields"][] = "sid";
$tdatanewbatchschedule[".masterListFields"][] = "Batchcode";
$tdatanewbatchschedule[".masterListFields"][] = "sdate";
$tdatanewbatchschedule[".masterListFields"][] = "stime";
$tdatanewbatchschedule[".masterListFields"][] = "etime";
$tdatanewbatchschedule[".masterListFields"][] = "status";
$tdatanewbatchschedule[".masterListFields"][] = "remark";

$tdatanewbatchschedule[".inlineAddFields"] = array();

$tdatanewbatchschedule[".editFields"] = array();
$tdatanewbatchschedule[".editFields"][] = "Batchcode";
$tdatanewbatchschedule[".editFields"][] = "sdate";
$tdatanewbatchschedule[".editFields"][] = "stime";
$tdatanewbatchschedule[".editFields"][] = "etime";
$tdatanewbatchschedule[".editFields"][] = "status";
$tdatanewbatchschedule[".editFields"][] = "remark";

$tdatanewbatchschedule[".inlineEditFields"] = array();

$tdatanewbatchschedule[".updateSelectedFields"] = array();
$tdatanewbatchschedule[".updateSelectedFields"][] = "Batchcode";
$tdatanewbatchschedule[".updateSelectedFields"][] = "sdate";
$tdatanewbatchschedule[".updateSelectedFields"][] = "stime";
$tdatanewbatchschedule[".updateSelectedFields"][] = "etime";
$tdatanewbatchschedule[".updateSelectedFields"][] = "status";
$tdatanewbatchschedule[".updateSelectedFields"][] = "remark";


$tdatanewbatchschedule[".exportFields"] = array();
$tdatanewbatchschedule[".exportFields"][] = "sid";
$tdatanewbatchschedule[".exportFields"][] = "Batchcode";
$tdatanewbatchschedule[".exportFields"][] = "sdate";
$tdatanewbatchschedule[".exportFields"][] = "stime";
$tdatanewbatchschedule[".exportFields"][] = "etime";
$tdatanewbatchschedule[".exportFields"][] = "status";
$tdatanewbatchschedule[".exportFields"][] = "remark";

$tdatanewbatchschedule[".importFields"] = array();
$tdatanewbatchschedule[".importFields"][] = "sid";
$tdatanewbatchschedule[".importFields"][] = "Batchcode";
$tdatanewbatchschedule[".importFields"][] = "sdate";
$tdatanewbatchschedule[".importFields"][] = "stime";
$tdatanewbatchschedule[".importFields"][] = "etime";
$tdatanewbatchschedule[".importFields"][] = "status";
$tdatanewbatchschedule[".importFields"][] = "remark";

$tdatanewbatchschedule[".printFields"] = array();
$tdatanewbatchschedule[".printFields"][] = "sid";
$tdatanewbatchschedule[".printFields"][] = "Batchcode";
$tdatanewbatchschedule[".printFields"][] = "sdate";
$tdatanewbatchschedule[".printFields"][] = "stime";
$tdatanewbatchschedule[".printFields"][] = "etime";
$tdatanewbatchschedule[".printFields"][] = "status";
$tdatanewbatchschedule[".printFields"][] = "remark";


//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "newbatchschedule";
	$fdata["Label"] = GetFieldLabel("newbatchschedule","sid");
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




	$tdatanewbatchschedule["sid"] = $fdata;
//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "newbatchschedule";
	$fdata["Label"] = GetFieldLabel("newbatchschedule","Batchcode");
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




	$tdatanewbatchschedule["Batchcode"] = $fdata;
//	sdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sdate";
	$fdata["GoodName"] = "sdate";
	$fdata["ownerTable"] = "newbatchschedule";
	$fdata["Label"] = GetFieldLabel("newbatchschedule","sdate");
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




	$tdatanewbatchschedule["sdate"] = $fdata;
//	stime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stime";
	$fdata["GoodName"] = "stime";
	$fdata["ownerTable"] = "newbatchschedule";
	$fdata["Label"] = GetFieldLabel("newbatchschedule","stime");
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




	$tdatanewbatchschedule["stime"] = $fdata;
//	etime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "etime";
	$fdata["GoodName"] = "etime";
	$fdata["ownerTable"] = "newbatchschedule";
	$fdata["Label"] = GetFieldLabel("newbatchschedule","etime");
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




	$tdatanewbatchschedule["etime"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "newbatchschedule";
	$fdata["Label"] = GetFieldLabel("newbatchschedule","status");
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




	$tdatanewbatchschedule["status"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "newbatchschedule";
	$fdata["Label"] = GetFieldLabel("newbatchschedule","remark");
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




	$tdatanewbatchschedule["remark"] = $fdata;


$tables_data["newbatchschedule"]=&$tdatanewbatchschedule;
$field_labels["newbatchschedule"] = &$fieldLabelsnewbatchschedule;
$fieldToolTips["newbatchschedule"] = &$fieldToolTipsnewbatchschedule;
$placeHolders["newbatchschedule"] = &$placeHoldersnewbatchschedule;
$page_titles["newbatchschedule"] = &$pageTitlesnewbatchschedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["newbatchschedule"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["newbatchschedule"] = array();


	
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
					$masterTablesData["newbatchschedule"][0] = $masterParams;
				$masterTablesData["newbatchschedule"][0]["masterKeys"] = array();
	$masterTablesData["newbatchschedule"][0]["masterKeys"][]="Batchcode";
				$masterTablesData["newbatchschedule"][0]["detailKeys"] = array();
	$masterTablesData["newbatchschedule"][0]["detailKeys"][]="Batchcode";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_newbatchschedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  	Batchcode,  	sdate,  	stime,  	etime,  	status,  	remark";
$proto0["m_strFrom"] = "FROM newbatchschedule";
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
	"m_strTable" => "newbatchschedule",
	"m_srcTableName" => "newbatchschedule"
));

$proto6["m_sql"] = "sid";
$proto6["m_srcTableName"] = "newbatchschedule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Batchcode",
	"m_strTable" => "newbatchschedule",
	"m_srcTableName" => "newbatchschedule"
));

$proto8["m_sql"] = "Batchcode";
$proto8["m_srcTableName"] = "newbatchschedule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sdate",
	"m_strTable" => "newbatchschedule",
	"m_srcTableName" => "newbatchschedule"
));

$proto10["m_sql"] = "sdate";
$proto10["m_srcTableName"] = "newbatchschedule";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stime",
	"m_strTable" => "newbatchschedule",
	"m_srcTableName" => "newbatchschedule"
));

$proto12["m_sql"] = "stime";
$proto12["m_srcTableName"] = "newbatchschedule";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "etime",
	"m_strTable" => "newbatchschedule",
	"m_srcTableName" => "newbatchschedule"
));

$proto14["m_sql"] = "etime";
$proto14["m_srcTableName"] = "newbatchschedule";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "newbatchschedule",
	"m_srcTableName" => "newbatchschedule"
));

$proto16["m_sql"] = "status";
$proto16["m_srcTableName"] = "newbatchschedule";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "newbatchschedule",
	"m_srcTableName" => "newbatchschedule"
));

$proto18["m_sql"] = "remark";
$proto18["m_srcTableName"] = "newbatchschedule";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "newbatchschedule";
$proto21["m_srcTableName"] = "newbatchschedule";
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
$proto20["m_sql"] = "newbatchschedule";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "newbatchschedule";
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
$proto0["m_srcTableName"]="newbatchschedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_newbatchschedule = createSqlQuery_newbatchschedule();


	
		;

							

$tdatanewbatchschedule[".sqlquery"] = $queryData_newbatchschedule;

$tableEvents["newbatchschedule"] = new eventsBase;
$tdatanewbatchschedule[".hasEvents"] = false;

?>