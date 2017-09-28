<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabatchschedule = array();
	$tdatabatchschedule[".truncateText"] = true;
	$tdatabatchschedule[".NumberOfChars"] = 80;
	$tdatabatchschedule[".ShortName"] = "batchschedule";
	$tdatabatchschedule[".OwnerID"] = "";
	$tdatabatchschedule[".OriginalTable"] = "batchschedule";

//	field labels
$fieldLabelsbatchschedule = array();
$fieldToolTipsbatchschedule = array();
$pageTitlesbatchschedule = array();
$placeHoldersbatchschedule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatchschedule["English"] = array();
	$fieldToolTipsbatchschedule["English"] = array();
	$placeHoldersbatchschedule["English"] = array();
	$pageTitlesbatchschedule["English"] = array();
	$fieldLabelsbatchschedule["English"]["sid"] = "Sid";
	$fieldToolTipsbatchschedule["English"]["sid"] = "";
	$placeHoldersbatchschedule["English"]["sid"] = "";
	$fieldLabelsbatchschedule["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatchschedule["English"]["Batchcode"] = "";
	$placeHoldersbatchschedule["English"]["Batchcode"] = "";
	$fieldLabelsbatchschedule["English"]["sdate"] = "Date";
	$fieldToolTipsbatchschedule["English"]["sdate"] = "";
	$placeHoldersbatchschedule["English"]["sdate"] = "";
	$fieldLabelsbatchschedule["English"]["stime"] = "Start Time";
	$fieldToolTipsbatchschedule["English"]["stime"] = "";
	$placeHoldersbatchschedule["English"]["stime"] = "XX:XX AM/PM";
	$fieldLabelsbatchschedule["English"]["etime"] = "End Time";
	$fieldToolTipsbatchschedule["English"]["etime"] = "";
	$placeHoldersbatchschedule["English"]["etime"] = "XX:XX AM/PM";
	$fieldLabelsbatchschedule["English"]["status"] = "Status";
	$fieldToolTipsbatchschedule["English"]["status"] = "";
	$placeHoldersbatchschedule["English"]["status"] = "";
	$fieldLabelsbatchschedule["English"]["remark"] = "Remark";
	$fieldToolTipsbatchschedule["English"]["remark"] = "";
	$placeHoldersbatchschedule["English"]["remark"] = "";
	$fieldLabelsbatchschedule["English"]["realstime"] = "Realstime";
	$fieldToolTipsbatchschedule["English"]["realstime"] = "";
	$placeHoldersbatchschedule["English"]["realstime"] = "";
	$fieldLabelsbatchschedule["English"]["realetime"] = "Realetime";
	$fieldToolTipsbatchschedule["English"]["realetime"] = "";
	$placeHoldersbatchschedule["English"]["realetime"] = "";
	$fieldLabelsbatchschedule["English"]["attendance"] = "Attendance";
	$fieldToolTipsbatchschedule["English"]["attendance"] = "";
	$placeHoldersbatchschedule["English"]["attendance"] = "";
	if (count($fieldToolTipsbatchschedule["English"]))
		$tdatabatchschedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatchschedule[""] = array();
	$fieldToolTipsbatchschedule[""] = array();
	$placeHoldersbatchschedule[""] = array();
	$pageTitlesbatchschedule[""] = array();
	$fieldLabelsbatchschedule[""]["sid"] = "Sid";
	$fieldToolTipsbatchschedule[""]["sid"] = "";
	$placeHoldersbatchschedule[""]["sid"] = "";
	$fieldLabelsbatchschedule[""]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatchschedule[""]["Batchcode"] = "";
	$placeHoldersbatchschedule[""]["Batchcode"] = "";
	$fieldLabelsbatchschedule[""]["sdate"] = "Sdate";
	$fieldToolTipsbatchschedule[""]["sdate"] = "";
	$placeHoldersbatchschedule[""]["sdate"] = "";
	$fieldLabelsbatchschedule[""]["stime"] = "Stime";
	$fieldToolTipsbatchschedule[""]["stime"] = "";
	$placeHoldersbatchschedule[""]["stime"] = "";
	$fieldLabelsbatchschedule[""]["etime"] = "Etime";
	$fieldToolTipsbatchschedule[""]["etime"] = "";
	$placeHoldersbatchschedule[""]["etime"] = "";
	$fieldLabelsbatchschedule[""]["status"] = "Status";
	$fieldToolTipsbatchschedule[""]["status"] = "";
	$placeHoldersbatchschedule[""]["status"] = "";
	$fieldLabelsbatchschedule[""]["remark"] = "Remark";
	$fieldToolTipsbatchschedule[""]["remark"] = "";
	$placeHoldersbatchschedule[""]["remark"] = "";
	$fieldLabelsbatchschedule[""]["realstime"] = "Realstime";
	$fieldToolTipsbatchschedule[""]["realstime"] = "";
	$placeHoldersbatchschedule[""]["realstime"] = "";
	$fieldLabelsbatchschedule[""]["realetime"] = "Realetime";
	$fieldToolTipsbatchschedule[""]["realetime"] = "";
	$placeHoldersbatchschedule[""]["realetime"] = "";
	$fieldLabelsbatchschedule[""]["attendance"] = "Attendance";
	$fieldToolTipsbatchschedule[""]["attendance"] = "";
	$placeHoldersbatchschedule[""]["attendance"] = "";
	if (count($fieldToolTipsbatchschedule[""]))
		$tdatabatchschedule[".isUseToolTips"] = true;
}


	$tdatabatchschedule[".NCSearch"] = true;



$tdatabatchschedule[".shortTableName"] = "batchschedule";
$tdatabatchschedule[".nSecOptions"] = 0;
$tdatabatchschedule[".recsPerRowPrint"] = 1;
$tdatabatchschedule[".mainTableOwnerID"] = "";
$tdatabatchschedule[".moveNext"] = 1;
$tdatabatchschedule[".entityType"] = 0;

$tdatabatchschedule[".strOriginalTableName"] = "batchschedule";

	



$tdatabatchschedule[".showAddInPopup"] = false;

$tdatabatchschedule[".showEditInPopup"] = false;

$tdatabatchschedule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabatchschedule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabatchschedule[".fieldsForRegister"] = array();

$tdatabatchschedule[".listAjax"] = false;

	$tdatabatchschedule[".audit"] = false;

	$tdatabatchschedule[".locking"] = false;

$tdatabatchschedule[".edit"] = true;
$tdatabatchschedule[".afterEditAction"] = 1;
$tdatabatchschedule[".closePopupAfterEdit"] = 1;
$tdatabatchschedule[".afterEditActionDetTable"] = "";

$tdatabatchschedule[".add"] = true;
$tdatabatchschedule[".afterAddAction"] = 1;
$tdatabatchschedule[".closePopupAfterAdd"] = 1;
$tdatabatchschedule[".afterAddActionDetTable"] = "";

$tdatabatchschedule[".list"] = true;



$tdatabatchschedule[".reorderRecordsByHeader"] = true;


$tdatabatchschedule[".exportFormatting"] = 2;
$tdatabatchschedule[".exportDelimiter"] = ",";
		
$tdatabatchschedule[".view"] = true;

$tdatabatchschedule[".import"] = true;

$tdatabatchschedule[".exportTo"] = true;

$tdatabatchschedule[".printFriendly"] = true;

$tdatabatchschedule[".delete"] = true;

$tdatabatchschedule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabatchschedule[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabatchschedule[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabatchschedule[".searchSaving"] = false;
//

$tdatabatchschedule[".showSearchPanel"] = true;
		$tdatabatchschedule[".flexibleSearch"] = true;

$tdatabatchschedule[".isUseAjaxSuggest"] = true;

$tdatabatchschedule[".rowHighlite"] = true;



						

$tdatabatchschedule[".ajaxCodeSnippetAdded"] = false;

$tdatabatchschedule[".buttonsAdded"] = false;

$tdatabatchschedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatchschedule[".isUseTimeForSearch"] = false;



$tdatabatchschedule[".badgeColor"] = "E67349";


$tdatabatchschedule[".allSearchFields"] = array();
$tdatabatchschedule[".filterFields"] = array();
$tdatabatchschedule[".requiredSearchFields"] = array();

$tdatabatchschedule[".allSearchFields"][] = "sid";
	$tdatabatchschedule[".allSearchFields"][] = "Batchcode";
	$tdatabatchschedule[".allSearchFields"][] = "sdate";
	$tdatabatchschedule[".allSearchFields"][] = "stime";
	$tdatabatchschedule[".allSearchFields"][] = "etime";
	$tdatabatchschedule[".allSearchFields"][] = "status";
	$tdatabatchschedule[".allSearchFields"][] = "remark";
	$tdatabatchschedule[".allSearchFields"][] = "attendance";
	

$tdatabatchschedule[".googleLikeFields"] = array();
$tdatabatchschedule[".googleLikeFields"][] = "sid";
$tdatabatchschedule[".googleLikeFields"][] = "Batchcode";
$tdatabatchschedule[".googleLikeFields"][] = "sdate";
$tdatabatchschedule[".googleLikeFields"][] = "stime";
$tdatabatchschedule[".googleLikeFields"][] = "etime";
$tdatabatchschedule[".googleLikeFields"][] = "realstime";
$tdatabatchschedule[".googleLikeFields"][] = "realetime";
$tdatabatchschedule[".googleLikeFields"][] = "status";
$tdatabatchschedule[".googleLikeFields"][] = "remark";
$tdatabatchschedule[".googleLikeFields"][] = "attendance";


$tdatabatchschedule[".advSearchFields"] = array();
$tdatabatchschedule[".advSearchFields"][] = "sid";
$tdatabatchschedule[".advSearchFields"][] = "Batchcode";
$tdatabatchschedule[".advSearchFields"][] = "sdate";
$tdatabatchschedule[".advSearchFields"][] = "stime";
$tdatabatchschedule[".advSearchFields"][] = "etime";
$tdatabatchschedule[".advSearchFields"][] = "status";
$tdatabatchschedule[".advSearchFields"][] = "remark";
$tdatabatchschedule[".advSearchFields"][] = "attendance";

$tdatabatchschedule[".tableType"] = "list";

$tdatabatchschedule[".printerPageOrientation"] = 0;
$tdatabatchschedule[".nPrinterPageScale"] = 100;

$tdatabatchschedule[".nPrinterSplitRecords"] = 40;

$tdatabatchschedule[".nPrinterPDFSplitRecords"] = 40;



$tdatabatchschedule[".geocodingEnabled"] = false;





$tdatabatchschedule[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabatchschedule[".pageSize"] = 20;

$tdatabatchschedule[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatchschedule[".strOrderBy"] = $tstrOrderBy;

$tdatabatchschedule[".orderindexes"] = array();

$tdatabatchschedule[".sqlHead"] = "SELECT sid,  	Batchcode,  	sdate,  	stime,  	etime,  	realstime,  	realetime,  	status,  	remark,  	attendance";
$tdatabatchschedule[".sqlFrom"] = "FROM batchschedule";
$tdatabatchschedule[".sqlWhereExpr"] = "";
$tdatabatchschedule[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabatchschedule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabatchschedule[".arrGroupsPerPage"] = $arrGPP;

$tdatabatchschedule[".highlightSearchResults"] = true;

$tableKeysbatchschedule = array();
$tableKeysbatchschedule[] = "sid";
$tdatabatchschedule[".Keys"] = $tableKeysbatchschedule;

$tdatabatchschedule[".listFields"] = array();
$tdatabatchschedule[".listFields"][] = "realstime";
$tdatabatchschedule[".listFields"][] = "realetime";
$tdatabatchschedule[".listFields"][] = "attendance";
$tdatabatchschedule[".listFields"][] = "sid";
$tdatabatchschedule[".listFields"][] = "Batchcode";
$tdatabatchschedule[".listFields"][] = "sdate";
$tdatabatchschedule[".listFields"][] = "stime";
$tdatabatchschedule[".listFields"][] = "etime";
$tdatabatchschedule[".listFields"][] = "status";
$tdatabatchschedule[".listFields"][] = "remark";

$tdatabatchschedule[".hideMobileList"] = array();


$tdatabatchschedule[".viewFields"] = array();
$tdatabatchschedule[".viewFields"][] = "sid";
$tdatabatchschedule[".viewFields"][] = "Batchcode";
$tdatabatchschedule[".viewFields"][] = "sdate";
$tdatabatchschedule[".viewFields"][] = "stime";
$tdatabatchschedule[".viewFields"][] = "etime";
$tdatabatchschedule[".viewFields"][] = "status";
$tdatabatchschedule[".viewFields"][] = "remark";

$tdatabatchschedule[".addFields"] = array();
$tdatabatchschedule[".addFields"][] = "Batchcode";
$tdatabatchschedule[".addFields"][] = "sdate";
$tdatabatchschedule[".addFields"][] = "stime";
$tdatabatchschedule[".addFields"][] = "etime";
$tdatabatchschedule[".addFields"][] = "status";
$tdatabatchschedule[".addFields"][] = "remark";

$tdatabatchschedule[".masterListFields"] = array();
$tdatabatchschedule[".masterListFields"][] = "sid";
$tdatabatchschedule[".masterListFields"][] = "Batchcode";
$tdatabatchschedule[".masterListFields"][] = "sdate";
$tdatabatchschedule[".masterListFields"][] = "stime";
$tdatabatchschedule[".masterListFields"][] = "etime";
$tdatabatchschedule[".masterListFields"][] = "realstime";
$tdatabatchschedule[".masterListFields"][] = "realetime";
$tdatabatchschedule[".masterListFields"][] = "status";
$tdatabatchschedule[".masterListFields"][] = "remark";
$tdatabatchschedule[".masterListFields"][] = "attendance";

$tdatabatchschedule[".inlineAddFields"] = array();

$tdatabatchschedule[".editFields"] = array();
$tdatabatchschedule[".editFields"][] = "Batchcode";
$tdatabatchschedule[".editFields"][] = "sdate";
$tdatabatchschedule[".editFields"][] = "stime";
$tdatabatchschedule[".editFields"][] = "etime";
$tdatabatchschedule[".editFields"][] = "status";
$tdatabatchschedule[".editFields"][] = "remark";

$tdatabatchschedule[".inlineEditFields"] = array();

$tdatabatchschedule[".updateSelectedFields"] = array();
$tdatabatchschedule[".updateSelectedFields"][] = "Batchcode";
$tdatabatchschedule[".updateSelectedFields"][] = "sdate";
$tdatabatchschedule[".updateSelectedFields"][] = "stime";
$tdatabatchschedule[".updateSelectedFields"][] = "etime";
$tdatabatchschedule[".updateSelectedFields"][] = "status";
$tdatabatchschedule[".updateSelectedFields"][] = "remark";


$tdatabatchschedule[".exportFields"] = array();
$tdatabatchschedule[".exportFields"][] = "sid";
$tdatabatchschedule[".exportFields"][] = "Batchcode";
$tdatabatchschedule[".exportFields"][] = "sdate";
$tdatabatchschedule[".exportFields"][] = "stime";
$tdatabatchschedule[".exportFields"][] = "etime";
$tdatabatchschedule[".exportFields"][] = "status";
$tdatabatchschedule[".exportFields"][] = "remark";

$tdatabatchschedule[".importFields"] = array();
$tdatabatchschedule[".importFields"][] = "sid";
$tdatabatchschedule[".importFields"][] = "Batchcode";
$tdatabatchschedule[".importFields"][] = "sdate";
$tdatabatchschedule[".importFields"][] = "stime";
$tdatabatchschedule[".importFields"][] = "etime";
$tdatabatchschedule[".importFields"][] = "status";
$tdatabatchschedule[".importFields"][] = "remark";

$tdatabatchschedule[".printFields"] = array();
$tdatabatchschedule[".printFields"][] = "sid";
$tdatabatchschedule[".printFields"][] = "Batchcode";
$tdatabatchschedule[".printFields"][] = "sdate";
$tdatabatchschedule[".printFields"][] = "stime";
$tdatabatchschedule[".printFields"][] = "etime";
$tdatabatchschedule[".printFields"][] = "status";
$tdatabatchschedule[".printFields"][] = "remark";
$tdatabatchschedule[".printFields"][] = "attendance";


//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","sid");
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




	$tdatabatchschedule["sid"] = $fdata;
//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","Batchcode");
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




	$tdatabatchschedule["Batchcode"] = $fdata;
//	sdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sdate";
	$fdata["GoodName"] = "sdate";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","sdate");
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




	$tdatabatchschedule["sdate"] = $fdata;
//	stime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stime";
	$fdata["GoodName"] = "stime";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","stime");
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




	$tdatabatchschedule["stime"] = $fdata;
//	etime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "etime";
	$fdata["GoodName"] = "etime";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","etime");
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




	$tdatabatchschedule["etime"] = $fdata;
//	realstime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "realstime";
	$fdata["GoodName"] = "realstime";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","realstime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "realstime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "realstime";

	
	
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








	$tdatabatchschedule["realstime"] = $fdata;
//	realetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "realetime";
	$fdata["GoodName"] = "realetime";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","realetime");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "realetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "realetime";

	
	
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








	$tdatabatchschedule["realetime"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","status");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "scheduled";
	$edata["LookupValues"][] = "Cancelled";

	
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




	$tdatabatchschedule["status"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","remark");
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




	$tdatabatchschedule["remark"] = $fdata;
//	attendance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attendance";
	$fdata["GoodName"] = "attendance";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","attendance");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "attendance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attendance";

	
	
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




	$tdatabatchschedule["attendance"] = $fdata;


$tables_data["batchschedule"]=&$tdatabatchschedule;
$field_labels["batchschedule"] = &$fieldLabelsbatchschedule;
$fieldToolTips["batchschedule"] = &$fieldToolTipsbatchschedule;
$placeHolders["batchschedule"] = &$placeHoldersbatchschedule;
$page_titles["batchschedule"] = &$pageTitlesbatchschedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batchschedule"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["batchschedule"] = array();


	
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
					$masterTablesData["batchschedule"][0] = $masterParams;
				$masterTablesData["batchschedule"][0]["masterKeys"] = array();
	$masterTablesData["batchschedule"][0]["masterKeys"][]="Batchcode";
				$masterTablesData["batchschedule"][0]["detailKeys"] = array();
	$masterTablesData["batchschedule"][0]["detailKeys"][]="Batchcode";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batchschedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  	Batchcode,  	sdate,  	stime,  	etime,  	realstime,  	realetime,  	status,  	remark,  	attendance";
$proto0["m_strFrom"] = "FROM batchschedule";
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
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto6["m_sql"] = "sid";
$proto6["m_srcTableName"] = "batchschedule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Batchcode",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto8["m_sql"] = "Batchcode";
$proto8["m_srcTableName"] = "batchschedule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sdate",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto10["m_sql"] = "sdate";
$proto10["m_srcTableName"] = "batchschedule";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto12["m_sql"] = "stime";
$proto12["m_srcTableName"] = "batchschedule";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "etime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto14["m_sql"] = "etime";
$proto14["m_srcTableName"] = "batchschedule";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "realstime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto16["m_sql"] = "realstime";
$proto16["m_srcTableName"] = "batchschedule";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "realetime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto18["m_sql"] = "realetime";
$proto18["m_srcTableName"] = "batchschedule";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto20["m_sql"] = "status";
$proto20["m_srcTableName"] = "batchschedule";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto22["m_sql"] = "remark";
$proto22["m_srcTableName"] = "batchschedule";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto24["m_sql"] = "attendance";
$proto24["m_srcTableName"] = "batchschedule";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "batchschedule";
$proto27["m_srcTableName"] = "batchschedule";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "sid";
$proto27["m_columns"][] = "Batchcode";
$proto27["m_columns"][] = "sdate";
$proto27["m_columns"][] = "stime";
$proto27["m_columns"][] = "etime";
$proto27["m_columns"][] = "realstime";
$proto27["m_columns"][] = "realetime";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "remark";
$proto27["m_columns"][] = "attendance";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "batchschedule";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "batchschedule";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="batchschedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batchschedule = createSqlQuery_batchschedule();


	
		;

										

$tdatabatchschedule[".sqlquery"] = $queryData_batchschedule;

$tableEvents["batchschedule"] = new eventsBase;
$tdatabatchschedule[".hasEvents"] = false;

?>