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

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatchschedule["English"] = array();
	$fieldToolTipsbatchschedule["English"] = array();
	$pageTitlesbatchschedule["English"] = array();
	$fieldLabelsbatchschedule["English"]["sid"] = "Sid";
	$fieldToolTipsbatchschedule["English"]["sid"] = "";
	$fieldLabelsbatchschedule["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatchschedule["English"]["Batchcode"] = "";
	$fieldLabelsbatchschedule["English"]["sdate"] = "Sdate";
	$fieldToolTipsbatchschedule["English"]["sdate"] = "";
	$fieldLabelsbatchschedule["English"]["stime"] = "Stime";
	$fieldToolTipsbatchschedule["English"]["stime"] = "";
	$fieldLabelsbatchschedule["English"]["etime"] = "Etime";
	$fieldToolTipsbatchschedule["English"]["etime"] = "";
	$fieldLabelsbatchschedule["English"]["status"] = "Status";
	$fieldToolTipsbatchschedule["English"]["status"] = "";
	$fieldLabelsbatchschedule["English"]["remark"] = "Remark";
	$fieldToolTipsbatchschedule["English"]["remark"] = "";
	$fieldLabelsbatchschedule["English"]["realstime"] = "Realstime";
	$fieldToolTipsbatchschedule["English"]["realstime"] = "";
	$fieldLabelsbatchschedule["English"]["realetime"] = "Realetime";
	$fieldToolTipsbatchschedule["English"]["realetime"] = "";
	$fieldLabelsbatchschedule["English"]["attendance"] = "Attendance";
	$fieldToolTipsbatchschedule["English"]["attendance"] = "";
	if (count($fieldToolTipsbatchschedule["English"]))
		$tdatabatchschedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatchschedule[""] = array();
	$fieldToolTipsbatchschedule[""] = array();
	$pageTitlesbatchschedule[""] = array();
	if (count($fieldToolTipsbatchschedule[""]))
		$tdatabatchschedule[".isUseToolTips"] = true;
}
	
	
	$tdatabatchschedule[".NCSearch"] = true;



$tdatabatchschedule[".shortTableName"] = "batchschedule";
$tdatabatchschedule[".nSecOptions"] = 0;
$tdatabatchschedule[".recsPerRowList"] = 1;
$tdatabatchschedule[".mainTableOwnerID"] = "";
$tdatabatchschedule[".moveNext"] = 1;
$tdatabatchschedule[".nType"] = 0;

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

$tdatabatchschedule[".list"] = true;

$tdatabatchschedule[".inlineEdit"] = true;
$tdatabatchschedule[".inlineAdd"] = true;
$tdatabatchschedule[".view"] = true;

$tdatabatchschedule[".import"] = true;

$tdatabatchschedule[".exportTo"] = true;

$tdatabatchschedule[".printFriendly"] = true;

$tdatabatchschedule[".delete"] = true;

$tdatabatchschedule[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabatchschedule[".searchSaving"] = false;
//

$tdatabatchschedule[".showSearchPanel"] = true;
		$tdatabatchschedule[".flexibleSearch"] = true;		

if (isMobile())
	$tdatabatchschedule[".isUseAjaxSuggest"] = false;
else 
	$tdatabatchschedule[".isUseAjaxSuggest"] = true;

$tdatabatchschedule[".rowHighlite"] = true;



$tdatabatchschedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatchschedule[".isUseTimeForSearch"] = false;





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
	$tdatabatchschedule[".allSearchFields"][] = "realstime";
	$tdatabatchschedule[".allSearchFields"][] = "realetime";
	$tdatabatchschedule[".allSearchFields"][] = "attendance";
	

$tdatabatchschedule[".googleLikeFields"] = array();
$tdatabatchschedule[".googleLikeFields"][] = "sid";
$tdatabatchschedule[".googleLikeFields"][] = "Batchcode";
$tdatabatchschedule[".googleLikeFields"][] = "sdate";
$tdatabatchschedule[".googleLikeFields"][] = "stime";
$tdatabatchschedule[".googleLikeFields"][] = "etime";
$tdatabatchschedule[".googleLikeFields"][] = "status";
$tdatabatchschedule[".googleLikeFields"][] = "remark";
$tdatabatchschedule[".googleLikeFields"][] = "realstime";
$tdatabatchschedule[".googleLikeFields"][] = "realetime";
$tdatabatchschedule[".googleLikeFields"][] = "attendance";


$tdatabatchschedule[".advSearchFields"] = array();
$tdatabatchschedule[".advSearchFields"][] = "sid";
$tdatabatchschedule[".advSearchFields"][] = "Batchcode";
$tdatabatchschedule[".advSearchFields"][] = "sdate";
$tdatabatchschedule[".advSearchFields"][] = "stime";
$tdatabatchschedule[".advSearchFields"][] = "etime";
$tdatabatchschedule[".advSearchFields"][] = "status";
$tdatabatchschedule[".advSearchFields"][] = "remark";
$tdatabatchschedule[".advSearchFields"][] = "realstime";
$tdatabatchschedule[".advSearchFields"][] = "realetime";
$tdatabatchschedule[".advSearchFields"][] = "attendance";

$tdatabatchschedule[".tableType"] = "list";

$tdatabatchschedule[".printerPageOrientation"] = 0;
$tdatabatchschedule[".nPrinterPageScale"] = 100;

$tdatabatchschedule[".nPrinterSplitRecords"] = 40;

$tdatabatchschedule[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatabatchschedule[".pageSize"] = 20;

$tdatabatchschedule[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatchschedule[".strOrderBy"] = $tstrOrderBy;

$tdatabatchschedule[".orderindexes"] = array();

$tdatabatchschedule[".sqlHead"] = "SELECT sid,  	Batchcode,  	sdate,  	stime,  	etime,  	status,  	remark,  	realstime,  	realetime,  	attendance";
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
$tdatabatchschedule[".listFields"][] = "sid";
$tdatabatchschedule[".listFields"][] = "Batchcode";
$tdatabatchschedule[".listFields"][] = "sdate";
$tdatabatchschedule[".listFields"][] = "stime";
$tdatabatchschedule[".listFields"][] = "etime";
$tdatabatchschedule[".listFields"][] = "status";
$tdatabatchschedule[".listFields"][] = "remark";
$tdatabatchschedule[".listFields"][] = "realstime";
$tdatabatchschedule[".listFields"][] = "realetime";
$tdatabatchschedule[".listFields"][] = "attendance";

$tdatabatchschedule[".hideMobileList"] = array();


$tdatabatchschedule[".viewFields"] = array();
$tdatabatchschedule[".viewFields"][] = "sid";
$tdatabatchschedule[".viewFields"][] = "Batchcode";
$tdatabatchschedule[".viewFields"][] = "sdate";
$tdatabatchschedule[".viewFields"][] = "stime";
$tdatabatchschedule[".viewFields"][] = "etime";
$tdatabatchschedule[".viewFields"][] = "status";
$tdatabatchschedule[".viewFields"][] = "remark";
$tdatabatchschedule[".viewFields"][] = "realstime";
$tdatabatchschedule[".viewFields"][] = "realetime";
$tdatabatchschedule[".viewFields"][] = "attendance";

$tdatabatchschedule[".addFields"] = array();
$tdatabatchschedule[".addFields"][] = "Batchcode";
$tdatabatchschedule[".addFields"][] = "sdate";
$tdatabatchschedule[".addFields"][] = "stime";
$tdatabatchschedule[".addFields"][] = "etime";
$tdatabatchschedule[".addFields"][] = "status";
$tdatabatchschedule[".addFields"][] = "remark";
$tdatabatchschedule[".addFields"][] = "realstime";
$tdatabatchschedule[".addFields"][] = "realetime";
$tdatabatchschedule[".addFields"][] = "attendance";

$tdatabatchschedule[".inlineAddFields"] = array();
$tdatabatchschedule[".inlineAddFields"][] = "Batchcode";
$tdatabatchschedule[".inlineAddFields"][] = "sdate";
$tdatabatchschedule[".inlineAddFields"][] = "stime";
$tdatabatchschedule[".inlineAddFields"][] = "etime";
$tdatabatchschedule[".inlineAddFields"][] = "status";
$tdatabatchschedule[".inlineAddFields"][] = "remark";
$tdatabatchschedule[".inlineAddFields"][] = "realstime";
$tdatabatchschedule[".inlineAddFields"][] = "realetime";
$tdatabatchschedule[".inlineAddFields"][] = "attendance";

$tdatabatchschedule[".editFields"] = array();
$tdatabatchschedule[".editFields"][] = "Batchcode";
$tdatabatchschedule[".editFields"][] = "sdate";
$tdatabatchschedule[".editFields"][] = "stime";
$tdatabatchschedule[".editFields"][] = "etime";
$tdatabatchschedule[".editFields"][] = "status";
$tdatabatchschedule[".editFields"][] = "remark";
$tdatabatchschedule[".editFields"][] = "realstime";
$tdatabatchschedule[".editFields"][] = "realetime";
$tdatabatchschedule[".editFields"][] = "attendance";

$tdatabatchschedule[".inlineEditFields"] = array();
$tdatabatchschedule[".inlineEditFields"][] = "Batchcode";
$tdatabatchschedule[".inlineEditFields"][] = "sdate";
$tdatabatchschedule[".inlineEditFields"][] = "stime";
$tdatabatchschedule[".inlineEditFields"][] = "etime";
$tdatabatchschedule[".inlineEditFields"][] = "status";
$tdatabatchschedule[".inlineEditFields"][] = "remark";
$tdatabatchschedule[".inlineEditFields"][] = "realstime";
$tdatabatchschedule[".inlineEditFields"][] = "realetime";
$tdatabatchschedule[".inlineEditFields"][] = "attendance";

$tdatabatchschedule[".exportFields"] = array();
$tdatabatchschedule[".exportFields"][] = "sid";
$tdatabatchschedule[".exportFields"][] = "Batchcode";
$tdatabatchschedule[".exportFields"][] = "sdate";
$tdatabatchschedule[".exportFields"][] = "stime";
$tdatabatchschedule[".exportFields"][] = "etime";
$tdatabatchschedule[".exportFields"][] = "status";
$tdatabatchschedule[".exportFields"][] = "remark";
$tdatabatchschedule[".exportFields"][] = "realstime";
$tdatabatchschedule[".exportFields"][] = "realetime";
$tdatabatchschedule[".exportFields"][] = "attendance";

$tdatabatchschedule[".importFields"] = array();
$tdatabatchschedule[".importFields"][] = "sid";
$tdatabatchschedule[".importFields"][] = "Batchcode";
$tdatabatchschedule[".importFields"][] = "sdate";
$tdatabatchschedule[".importFields"][] = "stime";
$tdatabatchschedule[".importFields"][] = "etime";
$tdatabatchschedule[".importFields"][] = "status";
$tdatabatchschedule[".importFields"][] = "remark";
$tdatabatchschedule[".importFields"][] = "realstime";
$tdatabatchschedule[".importFields"][] = "realetime";
$tdatabatchschedule[".importFields"][] = "attendance";

$tdatabatchschedule[".printFields"] = array();
$tdatabatchschedule[".printFields"][] = "sid";
$tdatabatchschedule[".printFields"][] = "Batchcode";
$tdatabatchschedule[".printFields"][] = "sdate";
$tdatabatchschedule[".printFields"][] = "stime";
$tdatabatchschedule[".printFields"][] = "etime";
$tdatabatchschedule[".printFields"][] = "status";
$tdatabatchschedule[".printFields"][] = "remark";
$tdatabatchschedule[".printFields"][] = "realstime";
$tdatabatchschedule[".printFields"][] = "realetime";
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabatchschedule["etime"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","status"); 
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

	

	
	$tdatabatchschedule["status"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","remark"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatabatchschedule["remark"] = $fdata;
//	realstime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "realstime";
	$fdata["GoodName"] = "realstime";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","realstime"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabatchschedule["realstime"] = $fdata;
//	realetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "realetime";
	$fdata["GoodName"] = "realetime";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","realetime"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabatchschedule["realetime"] = $fdata;
//	attendance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attendance";
	$fdata["GoodName"] = "attendance";
	$fdata["ownerTable"] = "batchschedule";
	$fdata["Label"] = GetFieldLabel("batchschedule","attendance"); 
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

	

	
	$tdatabatchschedule["attendance"] = $fdata;

	
$tables_data["batchschedule"]=&$tdatabatchschedule;
$field_labels["batchschedule"] = &$fieldLabelsbatchschedule;
$fieldToolTips["batchschedule"] = &$fieldToolTipsbatchschedule;
$page_titles["batchschedule"] = &$pageTitlesbatchschedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batchschedule"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["batchschedule"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batchschedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  	Batchcode,  	sdate,  	stime,  	etime,  	status,  	remark,  	realstime,  	realetime,  	attendance";
$proto0["m_strFrom"] = "FROM batchschedule";
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
	"m_strName" => "sid",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "batchschedule";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Batchcode",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto7["m_sql"] = "Batchcode";
$proto7["m_srcTableName"] = "batchschedule";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sdate",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto9["m_sql"] = "sdate";
$proto9["m_srcTableName"] = "batchschedule";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "stime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto11["m_sql"] = "stime";
$proto11["m_srcTableName"] = "batchschedule";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "etime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto13["m_sql"] = "etime";
$proto13["m_srcTableName"] = "batchschedule";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto15["m_sql"] = "status";
$proto15["m_srcTableName"] = "batchschedule";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto17["m_sql"] = "remark";
$proto17["m_srcTableName"] = "batchschedule";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "realstime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto19["m_sql"] = "realstime";
$proto19["m_srcTableName"] = "batchschedule";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "realetime",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto21["m_sql"] = "realetime";
$proto21["m_srcTableName"] = "batchschedule";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance",
	"m_strTable" => "batchschedule",
	"m_srcTableName" => "batchschedule"
));

$proto23["m_sql"] = "attendance";
$proto23["m_srcTableName"] = "batchschedule";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "batchschedule";
$proto26["m_srcTableName"] = "batchschedule";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "sid";
$proto26["m_columns"][] = "Batchcode";
$proto26["m_columns"][] = "sdate";
$proto26["m_columns"][] = "stime";
$proto26["m_columns"][] = "etime";
$proto26["m_columns"][] = "status";
$proto26["m_columns"][] = "remark";
$proto26["m_columns"][] = "realstime";
$proto26["m_columns"][] = "realetime";
$proto26["m_columns"][] = "attendance";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "batchschedule";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "batchschedule";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="batchschedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batchschedule = createSqlQuery_batchschedule();


	
										
	
$tdatabatchschedule[".sqlquery"] = $queryData_batchschedule;

$tableEvents["batchschedule"] = new eventsBase;
$tdatabatchschedule[".hasEvents"] = false;

?>