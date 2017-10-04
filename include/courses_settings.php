<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacourses = array();	
	$tdatacourses[".truncateText"] = true;
	$tdatacourses[".NumberOfChars"] = 80; 
	$tdatacourses[".ShortName"] = "courses";
	$tdatacourses[".OwnerID"] = "";
	$tdatacourses[".OriginalTable"] = "courses";

//	field labels
$fieldLabelscourses = array();
$fieldToolTipscourses = array();
$pageTitlescourses = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscourses["English"] = array();
	$fieldToolTipscourses["English"] = array();
	$pageTitlescourses["English"] = array();
	$fieldLabelscourses["English"]["cid"] = "Cid";
	$fieldToolTipscourses["English"]["cid"] = "";
	$fieldLabelscourses["English"]["track"] = "Track";
	$fieldToolTipscourses["English"]["track"] = "";
	$fieldLabelscourses["English"]["cname"] = "Cname";
	$fieldToolTipscourses["English"]["cname"] = "";
	$fieldLabelscourses["English"]["chours"] = "Chours";
	$fieldToolTipscourses["English"]["chours"] = "";
	$fieldLabelscourses["English"]["discription"] = "Discription";
	$fieldToolTipscourses["English"]["discription"] = "";
	if (count($fieldToolTipscourses["English"]))
		$tdatacourses[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscourses[""] = array();
	$fieldToolTipscourses[""] = array();
	$pageTitlescourses[""] = array();
	if (count($fieldToolTipscourses[""]))
		$tdatacourses[".isUseToolTips"] = true;
}
	
	
	$tdatacourses[".NCSearch"] = true;



$tdatacourses[".shortTableName"] = "courses";
$tdatacourses[".nSecOptions"] = 0;
$tdatacourses[".recsPerRowList"] = 1;
$tdatacourses[".mainTableOwnerID"] = "";
$tdatacourses[".moveNext"] = 1;
$tdatacourses[".nType"] = 0;

$tdatacourses[".strOriginalTableName"] = "courses";




$tdatacourses[".showAddInPopup"] = false;

$tdatacourses[".showEditInPopup"] = false;

$tdatacourses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacourses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacourses[".fieldsForRegister"] = array();

$tdatacourses[".listAjax"] = false;

	$tdatacourses[".audit"] = false;

	$tdatacourses[".locking"] = false;

$tdatacourses[".edit"] = true;

$tdatacourses[".list"] = true;

$tdatacourses[".inlineEdit"] = true;
$tdatacourses[".inlineAdd"] = true;
$tdatacourses[".view"] = true;

$tdatacourses[".import"] = true;

$tdatacourses[".exportTo"] = true;

$tdatacourses[".printFriendly"] = true;

$tdatacourses[".delete"] = true;

$tdatacourses[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacourses[".searchSaving"] = false;
//

$tdatacourses[".showSearchPanel"] = true;
		$tdatacourses[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacourses[".isUseAjaxSuggest"] = false;
else 
	$tdatacourses[".isUseAjaxSuggest"] = true;

$tdatacourses[".rowHighlite"] = true;



$tdatacourses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacourses[".isUseTimeForSearch"] = false;



$tdatacourses[".useDetailsPreview"] = true;


$tdatacourses[".allSearchFields"] = array();
$tdatacourses[".filterFields"] = array();
$tdatacourses[".requiredSearchFields"] = array();

$tdatacourses[".allSearchFields"][] = "cid";
	$tdatacourses[".allSearchFields"][] = "track";
	$tdatacourses[".allSearchFields"][] = "cname";
	$tdatacourses[".allSearchFields"][] = "chours";
	$tdatacourses[".allSearchFields"][] = "discription";
	

$tdatacourses[".googleLikeFields"] = array();
$tdatacourses[".googleLikeFields"][] = "cid";
$tdatacourses[".googleLikeFields"][] = "track";
$tdatacourses[".googleLikeFields"][] = "cname";
$tdatacourses[".googleLikeFields"][] = "chours";
$tdatacourses[".googleLikeFields"][] = "discription";


$tdatacourses[".advSearchFields"] = array();
$tdatacourses[".advSearchFields"][] = "cid";
$tdatacourses[".advSearchFields"][] = "track";
$tdatacourses[".advSearchFields"][] = "cname";
$tdatacourses[".advSearchFields"][] = "chours";
$tdatacourses[".advSearchFields"][] = "discription";

$tdatacourses[".tableType"] = "list";

$tdatacourses[".printerPageOrientation"] = 0;
$tdatacourses[".nPrinterPageScale"] = 100;

$tdatacourses[".nPrinterSplitRecords"] = 40;

$tdatacourses[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacourses[".pageSize"] = 20;

$tdatacourses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacourses[".strOrderBy"] = $tstrOrderBy;

$tdatacourses[".orderindexes"] = array();

$tdatacourses[".sqlHead"] = "SELECT cid,  	track,  	cname,  	chours,  	discription";
$tdatacourses[".sqlFrom"] = "FROM courses";
$tdatacourses[".sqlWhereExpr"] = "";
$tdatacourses[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacourses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacourses[".arrGroupsPerPage"] = $arrGPP;

$tdatacourses[".highlightSearchResults"] = true;

$tableKeyscourses = array();
$tableKeyscourses[] = "cid";
$tdatacourses[".Keys"] = $tableKeyscourses;

$tdatacourses[".listFields"] = array();
$tdatacourses[".listFields"][] = "cid";
$tdatacourses[".listFields"][] = "track";
$tdatacourses[".listFields"][] = "cname";
$tdatacourses[".listFields"][] = "chours";
$tdatacourses[".listFields"][] = "discription";

$tdatacourses[".hideMobileList"] = array();


$tdatacourses[".viewFields"] = array();
$tdatacourses[".viewFields"][] = "cid";
$tdatacourses[".viewFields"][] = "track";
$tdatacourses[".viewFields"][] = "cname";
$tdatacourses[".viewFields"][] = "chours";
$tdatacourses[".viewFields"][] = "discription";

$tdatacourses[".addFields"] = array();
$tdatacourses[".addFields"][] = "track";
$tdatacourses[".addFields"][] = "cname";
$tdatacourses[".addFields"][] = "chours";
$tdatacourses[".addFields"][] = "discription";

$tdatacourses[".inlineAddFields"] = array();
$tdatacourses[".inlineAddFields"][] = "track";
$tdatacourses[".inlineAddFields"][] = "cname";
$tdatacourses[".inlineAddFields"][] = "chours";
$tdatacourses[".inlineAddFields"][] = "discription";

$tdatacourses[".editFields"] = array();
$tdatacourses[".editFields"][] = "track";
$tdatacourses[".editFields"][] = "cname";
$tdatacourses[".editFields"][] = "chours";
$tdatacourses[".editFields"][] = "discription";

$tdatacourses[".inlineEditFields"] = array();
$tdatacourses[".inlineEditFields"][] = "track";
$tdatacourses[".inlineEditFields"][] = "cname";
$tdatacourses[".inlineEditFields"][] = "chours";
$tdatacourses[".inlineEditFields"][] = "discription";

$tdatacourses[".exportFields"] = array();
$tdatacourses[".exportFields"][] = "cid";
$tdatacourses[".exportFields"][] = "track";
$tdatacourses[".exportFields"][] = "cname";
$tdatacourses[".exportFields"][] = "chours";
$tdatacourses[".exportFields"][] = "discription";

$tdatacourses[".importFields"] = array();
$tdatacourses[".importFields"][] = "cid";
$tdatacourses[".importFields"][] = "track";
$tdatacourses[".importFields"][] = "cname";
$tdatacourses[".importFields"][] = "chours";
$tdatacourses[".importFields"][] = "discription";

$tdatacourses[".printFields"] = array();
$tdatacourses[".printFields"][] = "cid";
$tdatacourses[".printFields"][] = "track";
$tdatacourses[".printFields"][] = "cname";
$tdatacourses[".printFields"][] = "chours";
$tdatacourses[".printFields"][] = "discription";

//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "courses";
	$fdata["Label"] = GetFieldLabel("courses","cid"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacourses["cid"] = $fdata;
//	track
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "track";
	$fdata["GoodName"] = "track";
	$fdata["ownerTable"] = "courses";
	$fdata["Label"] = GetFieldLabel("courses","track"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacourses["track"] = $fdata;
//	cname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cname";
	$fdata["GoodName"] = "cname";
	$fdata["ownerTable"] = "courses";
	$fdata["Label"] = GetFieldLabel("courses","cname"); 
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
	
		$fdata["strField"] = "cname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cname";
	
		
		
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

	

	
	$tdatacourses["cname"] = $fdata;
//	chours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "chours";
	$fdata["GoodName"] = "chours";
	$fdata["ownerTable"] = "courses";
	$fdata["Label"] = GetFieldLabel("courses","chours"); 
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
	
		$fdata["strField"] = "chours"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chours";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourses["chours"] = $fdata;
//	discription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "discription";
	$fdata["GoodName"] = "discription";
	$fdata["ownerTable"] = "courses";
	$fdata["Label"] = GetFieldLabel("courses","discription"); 
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
	
		$fdata["strField"] = "discription"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discription";
	
		
		
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

	

	
	$tdatacourses["discription"] = $fdata;

	
$tables_data["courses"]=&$tdatacourses;
$field_labels["courses"] = &$fieldLabelscourses;
$fieldToolTips["courses"] = &$fieldToolTipscourses;
$page_titles["courses"] = &$pageTitlescourses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["courses"] = array();
//	batch
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="batch";
		$detailsParam["dOriginalTable"] = "batch";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "batch";
	$detailsParam["dCaptionTable"] = GetTableCaption("batch");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["courses"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["courses"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["courses"][$dIndex]["masterKeys"][]="cid";

				$detailsTablesData["courses"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["courses"][$dIndex]["detailKeys"][]="cid";
//	employees
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="employees";
		$detailsParam["dOriginalTable"] = "employees";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "employees";
	$detailsParam["dCaptionTable"] = GetTableCaption("employees");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["courses"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["courses"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["courses"][$dIndex]["masterKeys"][]="cid";

				$detailsTablesData["courses"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["courses"][$dIndex]["detailKeys"][]="cid";
//	trainer
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="trainer";
		$detailsParam["dOriginalTable"] = "trainer";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "trainer";
	$detailsParam["dCaptionTable"] = GetTableCaption("trainer");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["courses"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["courses"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["courses"][$dIndex]["masterKeys"][]="cid";

				$detailsTablesData["courses"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["courses"][$dIndex]["detailKeys"][]="cid";
	
// tables which are master tables for current table (detail)
$masterTablesData["courses"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_courses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cid,  	track,  	cname,  	chours,  	discription";
$proto0["m_strFrom"] = "FROM courses";
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
	"m_strName" => "cid",
	"m_strTable" => "courses",
	"m_srcTableName" => "courses"
));

$proto5["m_sql"] = "cid";
$proto5["m_srcTableName"] = "courses";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "track",
	"m_strTable" => "courses",
	"m_srcTableName" => "courses"
));

$proto7["m_sql"] = "track";
$proto7["m_srcTableName"] = "courses";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cname",
	"m_strTable" => "courses",
	"m_srcTableName" => "courses"
));

$proto9["m_sql"] = "cname";
$proto9["m_srcTableName"] = "courses";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "chours",
	"m_strTable" => "courses",
	"m_srcTableName" => "courses"
));

$proto11["m_sql"] = "chours";
$proto11["m_srcTableName"] = "courses";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "discription",
	"m_strTable" => "courses",
	"m_srcTableName" => "courses"
));

$proto13["m_sql"] = "discription";
$proto13["m_srcTableName"] = "courses";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "courses";
$proto16["m_srcTableName"] = "courses";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "cid";
$proto16["m_columns"][] = "track";
$proto16["m_columns"][] = "cname";
$proto16["m_columns"][] = "chours";
$proto16["m_columns"][] = "discription";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "courses";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "courses";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="courses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_courses = createSqlQuery_courses();


	
					
	
$tdatacourses[".sqlquery"] = $queryData_courses;

$tableEvents["courses"] = new eventsBase;
$tdatacourses[".hasEvents"] = false;

?>