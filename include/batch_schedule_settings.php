<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabatch_schedule = array();
	$tdatabatch_schedule[".truncateText"] = true;
	$tdatabatch_schedule[".NumberOfChars"] = 80;
	$tdatabatch_schedule[".ShortName"] = "batch_schedule";
	$tdatabatch_schedule[".OwnerID"] = "";
	$tdatabatch_schedule[".OriginalTable"] = "batch_schedule";

//	field labels
$fieldLabelsbatch_schedule = array();
$fieldToolTipsbatch_schedule = array();
$pageTitlesbatch_schedule = array();
$placeHoldersbatch_schedule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatch_schedule["English"] = array();
	$fieldToolTipsbatch_schedule["English"] = array();
	$placeHoldersbatch_schedule["English"] = array();
	$pageTitlesbatch_schedule["English"] = array();
	$fieldLabelsbatch_schedule["English"]["batch_schedule_id"] = "Batch Schedule Id";
	$fieldToolTipsbatch_schedule["English"]["batch_schedule_id"] = "";
	$placeHoldersbatch_schedule["English"]["batch_schedule_id"] = "";
	$fieldLabelsbatch_schedule["English"]["Today_status"] = "Today Status";
	$fieldToolTipsbatch_schedule["English"]["Today_status"] = "";
	$placeHoldersbatch_schedule["English"]["Today_status"] = "";
	$fieldLabelsbatch_schedule["English"]["batch_code"] = "Batch Code";
	$fieldToolTipsbatch_schedule["English"]["batch_code"] = "";
	$placeHoldersbatch_schedule["English"]["batch_code"] = "";
	$fieldLabelsbatch_schedule["English"]["today_attendance"] = "Today Attendance";
	$fieldToolTipsbatch_schedule["English"]["today_attendance"] = "";
	$placeHoldersbatch_schedule["English"]["today_attendance"] = "";
	$fieldLabelsbatch_schedule["English"]["cancle_remark"] = "Cancle Remark";
	$fieldToolTipsbatch_schedule["English"]["cancle_remark"] = "";
	$placeHoldersbatch_schedule["English"]["cancle_remark"] = "";
	$fieldLabelsbatch_schedule["English"]["class_date"] = "Class Date";
	$fieldToolTipsbatch_schedule["English"]["class_date"] = "";
	$placeHoldersbatch_schedule["English"]["class_date"] = "";
	$fieldLabelsbatch_schedule["English"]["start_time"] = "Start Time";
	$fieldToolTipsbatch_schedule["English"]["start_time"] = "";
	$placeHoldersbatch_schedule["English"]["start_time"] = "";
	$fieldLabelsbatch_schedule["English"]["end_time"] = "End Time";
	$fieldToolTipsbatch_schedule["English"]["end_time"] = "";
	$placeHoldersbatch_schedule["English"]["end_time"] = "";
	$fieldLabelsbatch_schedule["English"]["batch_schedulecol"] = "Batch Schedulecol";
	$fieldToolTipsbatch_schedule["English"]["batch_schedulecol"] = "";
	$placeHoldersbatch_schedule["English"]["batch_schedulecol"] = "";
	$fieldLabelsbatch_schedule["English"]["remarks"] = "Remarks";
	$fieldToolTipsbatch_schedule["English"]["remarks"] = "";
	$placeHoldersbatch_schedule["English"]["remarks"] = "";
	if (count($fieldToolTipsbatch_schedule["English"]))
		$tdatabatch_schedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatch_schedule[""] = array();
	$fieldToolTipsbatch_schedule[""] = array();
	$placeHoldersbatch_schedule[""] = array();
	$pageTitlesbatch_schedule[""] = array();
	$fieldLabelsbatch_schedule[""]["batch_schedule_id"] = "Batch Schedule Id";
	$fieldToolTipsbatch_schedule[""]["batch_schedule_id"] = "";
	$placeHoldersbatch_schedule[""]["batch_schedule_id"] = "";
	$fieldLabelsbatch_schedule[""]["Today_status"] = "Today Status";
	$fieldToolTipsbatch_schedule[""]["Today_status"] = "";
	$placeHoldersbatch_schedule[""]["Today_status"] = "";
	$fieldLabelsbatch_schedule[""]["batch_code"] = "Batch Code";
	$fieldToolTipsbatch_schedule[""]["batch_code"] = "";
	$placeHoldersbatch_schedule[""]["batch_code"] = "";
	$fieldLabelsbatch_schedule[""]["today_attendance"] = "Today Attendance";
	$fieldToolTipsbatch_schedule[""]["today_attendance"] = "";
	$placeHoldersbatch_schedule[""]["today_attendance"] = "";
	$fieldLabelsbatch_schedule[""]["cancle_remark"] = "Cancle Remark";
	$fieldToolTipsbatch_schedule[""]["cancle_remark"] = "";
	$placeHoldersbatch_schedule[""]["cancle_remark"] = "";
	$fieldLabelsbatch_schedule[""]["class_date"] = "Class Date";
	$fieldToolTipsbatch_schedule[""]["class_date"] = "";
	$placeHoldersbatch_schedule[""]["class_date"] = "";
	$fieldLabelsbatch_schedule[""]["start_time"] = "Start Time";
	$fieldToolTipsbatch_schedule[""]["start_time"] = "";
	$placeHoldersbatch_schedule[""]["start_time"] = "";
	$fieldLabelsbatch_schedule[""]["end_time"] = "End Time";
	$fieldToolTipsbatch_schedule[""]["end_time"] = "";
	$placeHoldersbatch_schedule[""]["end_time"] = "";
	$fieldLabelsbatch_schedule[""]["batch_schedulecol"] = "Batch Schedulecol";
	$fieldToolTipsbatch_schedule[""]["batch_schedulecol"] = "";
	$placeHoldersbatch_schedule[""]["batch_schedulecol"] = "";
	$fieldLabelsbatch_schedule[""]["remarks"] = "Remarks";
	$fieldToolTipsbatch_schedule[""]["remarks"] = "";
	$placeHoldersbatch_schedule[""]["remarks"] = "";
	if (count($fieldToolTipsbatch_schedule[""]))
		$tdatabatch_schedule[".isUseToolTips"] = true;
}


	$tdatabatch_schedule[".NCSearch"] = true;



$tdatabatch_schedule[".shortTableName"] = "batch_schedule";
$tdatabatch_schedule[".nSecOptions"] = 0;
$tdatabatch_schedule[".recsPerRowPrint"] = 1;
$tdatabatch_schedule[".mainTableOwnerID"] = "";
$tdatabatch_schedule[".moveNext"] = 1;
$tdatabatch_schedule[".entityType"] = 0;

$tdatabatch_schedule[".strOriginalTableName"] = "batch_schedule";

	



$tdatabatch_schedule[".showAddInPopup"] = false;

$tdatabatch_schedule[".showEditInPopup"] = false;

$tdatabatch_schedule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabatch_schedule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabatch_schedule[".fieldsForRegister"] = array();

$tdatabatch_schedule[".listAjax"] = false;

	$tdatabatch_schedule[".audit"] = false;

	$tdatabatch_schedule[".locking"] = false;

$tdatabatch_schedule[".edit"] = true;
$tdatabatch_schedule[".afterEditAction"] = 1;
$tdatabatch_schedule[".closePopupAfterEdit"] = 1;
$tdatabatch_schedule[".afterEditActionDetTable"] = "";

$tdatabatch_schedule[".add"] = true;
$tdatabatch_schedule[".afterAddAction"] = 1;
$tdatabatch_schedule[".closePopupAfterAdd"] = 1;
$tdatabatch_schedule[".afterAddActionDetTable"] = "";

$tdatabatch_schedule[".list"] = true;



$tdatabatch_schedule[".reorderRecordsByHeader"] = true;


$tdatabatch_schedule[".exportFormatting"] = 2;
$tdatabatch_schedule[".exportDelimiter"] = ",";
		
$tdatabatch_schedule[".view"] = true;

$tdatabatch_schedule[".import"] = true;

$tdatabatch_schedule[".exportTo"] = true;

$tdatabatch_schedule[".printFriendly"] = true;

$tdatabatch_schedule[".delete"] = true;

$tdatabatch_schedule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabatch_schedule[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabatch_schedule[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabatch_schedule[".searchSaving"] = false;
//

$tdatabatch_schedule[".showSearchPanel"] = true;
		$tdatabatch_schedule[".flexibleSearch"] = true;

$tdatabatch_schedule[".isUseAjaxSuggest"] = true;

$tdatabatch_schedule[".rowHighlite"] = true;





$tdatabatch_schedule[".ajaxCodeSnippetAdded"] = false;

$tdatabatch_schedule[".buttonsAdded"] = false;

$tdatabatch_schedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatch_schedule[".isUseTimeForSearch"] = false;



$tdatabatch_schedule[".badgeColor"] = "6DA5C8";


$tdatabatch_schedule[".allSearchFields"] = array();
$tdatabatch_schedule[".filterFields"] = array();
$tdatabatch_schedule[".requiredSearchFields"] = array();

$tdatabatch_schedule[".allSearchFields"][] = "batch_schedule_id";
	$tdatabatch_schedule[".allSearchFields"][] = "Today_status";
	$tdatabatch_schedule[".allSearchFields"][] = "batch_code";
	$tdatabatch_schedule[".allSearchFields"][] = "today_attendance";
	$tdatabatch_schedule[".allSearchFields"][] = "cancle_remark";
	$tdatabatch_schedule[".allSearchFields"][] = "class_date";
	$tdatabatch_schedule[".allSearchFields"][] = "start_time";
	$tdatabatch_schedule[".allSearchFields"][] = "end_time";
	$tdatabatch_schedule[".allSearchFields"][] = "batch_schedulecol";
	$tdatabatch_schedule[".allSearchFields"][] = "remarks";
	

$tdatabatch_schedule[".googleLikeFields"] = array();
$tdatabatch_schedule[".googleLikeFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".googleLikeFields"][] = "Today_status";
$tdatabatch_schedule[".googleLikeFields"][] = "batch_code";
$tdatabatch_schedule[".googleLikeFields"][] = "today_attendance";
$tdatabatch_schedule[".googleLikeFields"][] = "cancle_remark";
$tdatabatch_schedule[".googleLikeFields"][] = "class_date";
$tdatabatch_schedule[".googleLikeFields"][] = "start_time";
$tdatabatch_schedule[".googleLikeFields"][] = "end_time";
$tdatabatch_schedule[".googleLikeFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".googleLikeFields"][] = "remarks";


$tdatabatch_schedule[".advSearchFields"] = array();
$tdatabatch_schedule[".advSearchFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".advSearchFields"][] = "Today_status";
$tdatabatch_schedule[".advSearchFields"][] = "batch_code";
$tdatabatch_schedule[".advSearchFields"][] = "today_attendance";
$tdatabatch_schedule[".advSearchFields"][] = "cancle_remark";
$tdatabatch_schedule[".advSearchFields"][] = "class_date";
$tdatabatch_schedule[".advSearchFields"][] = "start_time";
$tdatabatch_schedule[".advSearchFields"][] = "end_time";
$tdatabatch_schedule[".advSearchFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".advSearchFields"][] = "remarks";

$tdatabatch_schedule[".tableType"] = "list";

$tdatabatch_schedule[".printerPageOrientation"] = 0;
$tdatabatch_schedule[".nPrinterPageScale"] = 100;

$tdatabatch_schedule[".nPrinterSplitRecords"] = 40;

$tdatabatch_schedule[".nPrinterPDFSplitRecords"] = 40;



$tdatabatch_schedule[".geocodingEnabled"] = false;





$tdatabatch_schedule[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabatch_schedule[".pageSize"] = 20;

$tdatabatch_schedule[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatch_schedule[".strOrderBy"] = $tstrOrderBy;

$tdatabatch_schedule[".orderindexes"] = array();

$tdatabatch_schedule[".sqlHead"] = "SELECT batch_schedule_id,  	Today_status,  	batch_code,  	today_attendance,  	cancle_remark,  	class_date,  	start_time,  	end_time,  	batch_schedulecol,  	remarks";
$tdatabatch_schedule[".sqlFrom"] = "FROM batch_schedule";
$tdatabatch_schedule[".sqlWhereExpr"] = "";
$tdatabatch_schedule[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabatch_schedule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabatch_schedule[".arrGroupsPerPage"] = $arrGPP;

$tdatabatch_schedule[".highlightSearchResults"] = true;

$tableKeysbatch_schedule = array();
$tableKeysbatch_schedule[] = "batch_schedule_id";
$tdatabatch_schedule[".Keys"] = $tableKeysbatch_schedule;

$tdatabatch_schedule[".listFields"] = array();
$tdatabatch_schedule[".listFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".listFields"][] = "Today_status";
$tdatabatch_schedule[".listFields"][] = "batch_code";
$tdatabatch_schedule[".listFields"][] = "today_attendance";
$tdatabatch_schedule[".listFields"][] = "cancle_remark";
$tdatabatch_schedule[".listFields"][] = "class_date";
$tdatabatch_schedule[".listFields"][] = "start_time";
$tdatabatch_schedule[".listFields"][] = "end_time";
$tdatabatch_schedule[".listFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".listFields"][] = "remarks";

$tdatabatch_schedule[".hideMobileList"] = array();


$tdatabatch_schedule[".viewFields"] = array();
$tdatabatch_schedule[".viewFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".viewFields"][] = "Today_status";
$tdatabatch_schedule[".viewFields"][] = "batch_code";
$tdatabatch_schedule[".viewFields"][] = "today_attendance";
$tdatabatch_schedule[".viewFields"][] = "cancle_remark";
$tdatabatch_schedule[".viewFields"][] = "class_date";
$tdatabatch_schedule[".viewFields"][] = "start_time";
$tdatabatch_schedule[".viewFields"][] = "end_time";
$tdatabatch_schedule[".viewFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".viewFields"][] = "remarks";

$tdatabatch_schedule[".addFields"] = array();
$tdatabatch_schedule[".addFields"][] = "Today_status";
$tdatabatch_schedule[".addFields"][] = "batch_code";
$tdatabatch_schedule[".addFields"][] = "today_attendance";
$tdatabatch_schedule[".addFields"][] = "cancle_remark";
$tdatabatch_schedule[".addFields"][] = "class_date";
$tdatabatch_schedule[".addFields"][] = "start_time";
$tdatabatch_schedule[".addFields"][] = "end_time";
$tdatabatch_schedule[".addFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".addFields"][] = "remarks";

$tdatabatch_schedule[".masterListFields"] = array();
$tdatabatch_schedule[".masterListFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".masterListFields"][] = "Today_status";
$tdatabatch_schedule[".masterListFields"][] = "batch_code";
$tdatabatch_schedule[".masterListFields"][] = "today_attendance";
$tdatabatch_schedule[".masterListFields"][] = "cancle_remark";
$tdatabatch_schedule[".masterListFields"][] = "class_date";
$tdatabatch_schedule[".masterListFields"][] = "start_time";
$tdatabatch_schedule[".masterListFields"][] = "end_time";
$tdatabatch_schedule[".masterListFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".masterListFields"][] = "remarks";

$tdatabatch_schedule[".inlineAddFields"] = array();

$tdatabatch_schedule[".editFields"] = array();
$tdatabatch_schedule[".editFields"][] = "Today_status";
$tdatabatch_schedule[".editFields"][] = "batch_code";
$tdatabatch_schedule[".editFields"][] = "today_attendance";
$tdatabatch_schedule[".editFields"][] = "cancle_remark";
$tdatabatch_schedule[".editFields"][] = "class_date";
$tdatabatch_schedule[".editFields"][] = "start_time";
$tdatabatch_schedule[".editFields"][] = "end_time";
$tdatabatch_schedule[".editFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".editFields"][] = "remarks";

$tdatabatch_schedule[".inlineEditFields"] = array();

$tdatabatch_schedule[".updateSelectedFields"] = array();
$tdatabatch_schedule[".updateSelectedFields"][] = "Today_status";
$tdatabatch_schedule[".updateSelectedFields"][] = "batch_code";
$tdatabatch_schedule[".updateSelectedFields"][] = "today_attendance";
$tdatabatch_schedule[".updateSelectedFields"][] = "cancle_remark";
$tdatabatch_schedule[".updateSelectedFields"][] = "class_date";
$tdatabatch_schedule[".updateSelectedFields"][] = "start_time";
$tdatabatch_schedule[".updateSelectedFields"][] = "end_time";
$tdatabatch_schedule[".updateSelectedFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".updateSelectedFields"][] = "remarks";


$tdatabatch_schedule[".exportFields"] = array();
$tdatabatch_schedule[".exportFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".exportFields"][] = "Today_status";
$tdatabatch_schedule[".exportFields"][] = "batch_code";
$tdatabatch_schedule[".exportFields"][] = "today_attendance";
$tdatabatch_schedule[".exportFields"][] = "cancle_remark";
$tdatabatch_schedule[".exportFields"][] = "class_date";
$tdatabatch_schedule[".exportFields"][] = "start_time";
$tdatabatch_schedule[".exportFields"][] = "end_time";
$tdatabatch_schedule[".exportFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".exportFields"][] = "remarks";

$tdatabatch_schedule[".importFields"] = array();
$tdatabatch_schedule[".importFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".importFields"][] = "Today_status";
$tdatabatch_schedule[".importFields"][] = "batch_code";
$tdatabatch_schedule[".importFields"][] = "today_attendance";
$tdatabatch_schedule[".importFields"][] = "cancle_remark";
$tdatabatch_schedule[".importFields"][] = "class_date";
$tdatabatch_schedule[".importFields"][] = "start_time";
$tdatabatch_schedule[".importFields"][] = "end_time";
$tdatabatch_schedule[".importFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".importFields"][] = "remarks";

$tdatabatch_schedule[".printFields"] = array();
$tdatabatch_schedule[".printFields"][] = "batch_schedule_id";
$tdatabatch_schedule[".printFields"][] = "Today_status";
$tdatabatch_schedule[".printFields"][] = "batch_code";
$tdatabatch_schedule[".printFields"][] = "today_attendance";
$tdatabatch_schedule[".printFields"][] = "cancle_remark";
$tdatabatch_schedule[".printFields"][] = "class_date";
$tdatabatch_schedule[".printFields"][] = "start_time";
$tdatabatch_schedule[".printFields"][] = "end_time";
$tdatabatch_schedule[".printFields"][] = "batch_schedulecol";
$tdatabatch_schedule[".printFields"][] = "remarks";


//	batch_schedule_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "batch_schedule_id";
	$fdata["GoodName"] = "batch_schedule_id";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","batch_schedule_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "batch_schedule_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch_schedule_id";

	
	
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




	$tdatabatch_schedule["batch_schedule_id"] = $fdata;
//	Today_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Today_status";
	$fdata["GoodName"] = "Today_status";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","Today_status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Today_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Today_status";

	
	
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




	$tdatabatch_schedule["Today_status"] = $fdata;
//	batch_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "batch_code";
	$fdata["GoodName"] = "batch_code";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","batch_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "batch_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch_code";

	
	
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




	$tdatabatch_schedule["batch_code"] = $fdata;
//	today_attendance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "today_attendance";
	$fdata["GoodName"] = "today_attendance";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","today_attendance");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "today_attendance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "today_attendance";

	
	
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




	$tdatabatch_schedule["today_attendance"] = $fdata;
//	cancle_remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cancle_remark";
	$fdata["GoodName"] = "cancle_remark";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","cancle_remark");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cancle_remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cancle_remark";

	
	
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




	$tdatabatch_schedule["cancle_remark"] = $fdata;
//	class_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "class_date";
	$fdata["GoodName"] = "class_date";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","class_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "class_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "class_date";

	
	
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




	$tdatabatch_schedule["class_date"] = $fdata;
//	start_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "start_time";
	$fdata["GoodName"] = "start_time";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","start_time");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "start_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_time";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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




	$tdatabatch_schedule["start_time"] = $fdata;
//	end_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "end_time";
	$fdata["GoodName"] = "end_time";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","end_time");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "end_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_time";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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




	$tdatabatch_schedule["end_time"] = $fdata;
//	batch_schedulecol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "batch_schedulecol";
	$fdata["GoodName"] = "batch_schedulecol";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","batch_schedulecol");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "batch_schedulecol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "batch_schedulecol";

	
	
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




	$tdatabatch_schedule["batch_schedulecol"] = $fdata;
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "batch_schedule";
	$fdata["Label"] = GetFieldLabel("batch_schedule","remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarks";

	
	
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




	$tdatabatch_schedule["remarks"] = $fdata;


$tables_data["batch_schedule"]=&$tdatabatch_schedule;
$field_labels["batch_schedule"] = &$fieldLabelsbatch_schedule;
$fieldToolTips["batch_schedule"] = &$fieldToolTipsbatch_schedule;
$placeHolders["batch_schedule"] = &$placeHoldersbatch_schedule;
$page_titles["batch_schedule"] = &$pageTitlesbatch_schedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batch_schedule"] = array();
//	batch_status
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="batch_status";
		$detailsParam["dOriginalTable"] = "batch_status";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "batch_status";
	$detailsParam["dCaptionTable"] = GetTableCaption("batch_status");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = DP_NONE;
		
	$detailsTablesData["batch_schedule"][$dIndex] = $detailsParam;

	
		$detailsTablesData["batch_schedule"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["batch_schedule"][$dIndex]["masterKeys"][]="batch_schedule_id";

				$detailsTablesData["batch_schedule"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["batch_schedule"][$dIndex]["detailKeys"][]="statusid";

// tables which are master tables for current table (detail)
$masterTablesData["batch_schedule"] = array();


	
				$strOriginalDetailsTable="batch";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="batch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "batch";
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
					$masterTablesData["batch_schedule"][0] = $masterParams;
				$masterTablesData["batch_schedule"][0]["masterKeys"] = array();
	$masterTablesData["batch_schedule"][0]["masterKeys"][]="Batchcode";
				$masterTablesData["batch_schedule"][0]["detailKeys"] = array();
	$masterTablesData["batch_schedule"][0]["detailKeys"][]="batch_code";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batch_schedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "batch_schedule_id,  	Today_status,  	batch_code,  	today_attendance,  	cancle_remark,  	class_date,  	start_time,  	end_time,  	batch_schedulecol,  	remarks";
$proto0["m_strFrom"] = "FROM batch_schedule";
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
	"m_strName" => "batch_schedule_id",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto6["m_sql"] = "batch_schedule_id";
$proto6["m_srcTableName"] = "batch_schedule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Today_status",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto8["m_sql"] = "Today_status";
$proto8["m_srcTableName"] = "batch_schedule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "batch_code",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto10["m_sql"] = "batch_code";
$proto10["m_srcTableName"] = "batch_schedule";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "today_attendance",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto12["m_sql"] = "today_attendance";
$proto12["m_srcTableName"] = "batch_schedule";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cancle_remark",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto14["m_sql"] = "cancle_remark";
$proto14["m_srcTableName"] = "batch_schedule";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "class_date",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto16["m_sql"] = "class_date";
$proto16["m_srcTableName"] = "batch_schedule";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "start_time",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto18["m_sql"] = "start_time";
$proto18["m_srcTableName"] = "batch_schedule";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "end_time",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto20["m_sql"] = "end_time";
$proto20["m_srcTableName"] = "batch_schedule";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "batch_schedulecol",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto22["m_sql"] = "batch_schedulecol";
$proto22["m_srcTableName"] = "batch_schedule";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "batch_schedule",
	"m_srcTableName" => "batch_schedule"
));

$proto24["m_sql"] = "remarks";
$proto24["m_srcTableName"] = "batch_schedule";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "batch_schedule";
$proto27["m_srcTableName"] = "batch_schedule";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "batch_schedule_id";
$proto27["m_columns"][] = "Today_status";
$proto27["m_columns"][] = "batch_code";
$proto27["m_columns"][] = "today_attendance";
$proto27["m_columns"][] = "cancle_remark";
$proto27["m_columns"][] = "class_date";
$proto27["m_columns"][] = "start_time";
$proto27["m_columns"][] = "end_time";
$proto27["m_columns"][] = "batch_schedulecol";
$proto27["m_columns"][] = "remarks";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "batch_schedule";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "batch_schedule";
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
$proto0["m_srcTableName"]="batch_schedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batch_schedule = createSqlQuery_batch_schedule();


	
		;

										

$tdatabatch_schedule[".sqlquery"] = $queryData_batch_schedule;

$tableEvents["batch_schedule"] = new eventsBase;
$tdatabatch_schedule[".hasEvents"] = false;

?>