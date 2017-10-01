<?php
require_once(getabspath("classes/cipherer.php"));




$tdataconsultant = array();
	$tdataconsultant[".truncateText"] = true;
	$tdataconsultant[".NumberOfChars"] = 80;
	$tdataconsultant[".ShortName"] = "consultant";
	$tdataconsultant[".OwnerID"] = "";
	$tdataconsultant[".OriginalTable"] = "consultant";

//	field labels
$fieldLabelsconsultant = array();
$fieldToolTipsconsultant = array();
$pageTitlesconsultant = array();
$placeHoldersconsultant = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsultant["English"] = array();
	$fieldToolTipsconsultant["English"] = array();
	$placeHoldersconsultant["English"] = array();
	$pageTitlesconsultant["English"] = array();
	$fieldLabelsconsultant["English"]["consultant_id"] = "Consultant Id";
	$fieldToolTipsconsultant["English"]["consultant_id"] = "";
	$placeHoldersconsultant["English"]["consultant_id"] = "";
	$fieldLabelsconsultant["English"]["eid"] = "Eid";
	$fieldToolTipsconsultant["English"]["eid"] = "";
	$placeHoldersconsultant["English"]["eid"] = "";
	$fieldLabelsconsultant["English"]["divison_id"] = "Divison Id";
	$fieldToolTipsconsultant["English"]["divison_id"] = "";
	$placeHoldersconsultant["English"]["divison_id"] = "";
	$fieldLabelsconsultant["English"]["Type"] = "Type";
	$fieldToolTipsconsultant["English"]["Type"] = "";
	$placeHoldersconsultant["English"]["Type"] = "";
	if (count($fieldToolTipsconsultant["English"]))
		$tdataconsultant[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsconsultant[""] = array();
	$fieldToolTipsconsultant[""] = array();
	$placeHoldersconsultant[""] = array();
	$pageTitlesconsultant[""] = array();
	if (count($fieldToolTipsconsultant[""]))
		$tdataconsultant[".isUseToolTips"] = true;
}


	$tdataconsultant[".NCSearch"] = true;



$tdataconsultant[".shortTableName"] = "consultant";
$tdataconsultant[".nSecOptions"] = 0;
$tdataconsultant[".recsPerRowPrint"] = 1;
$tdataconsultant[".mainTableOwnerID"] = "";
$tdataconsultant[".moveNext"] = 1;
$tdataconsultant[".entityType"] = 0;

$tdataconsultant[".strOriginalTableName"] = "consultant";

	



$tdataconsultant[".showAddInPopup"] = false;

$tdataconsultant[".showEditInPopup"] = false;

$tdataconsultant[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconsultant[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconsultant[".fieldsForRegister"] = array();

$tdataconsultant[".listAjax"] = false;

	$tdataconsultant[".audit"] = false;

	$tdataconsultant[".locking"] = false;

$tdataconsultant[".edit"] = true;
$tdataconsultant[".afterEditAction"] = 1;
$tdataconsultant[".closePopupAfterEdit"] = 1;
$tdataconsultant[".afterEditActionDetTable"] = "";

$tdataconsultant[".add"] = true;
$tdataconsultant[".afterAddAction"] = 1;
$tdataconsultant[".closePopupAfterAdd"] = 1;
$tdataconsultant[".afterAddActionDetTable"] = "";

$tdataconsultant[".list"] = true;



$tdataconsultant[".reorderRecordsByHeader"] = true;


$tdataconsultant[".exportFormatting"] = 2;
$tdataconsultant[".exportDelimiter"] = ",";
		
$tdataconsultant[".view"] = true;

$tdataconsultant[".import"] = true;

$tdataconsultant[".exportTo"] = true;

$tdataconsultant[".printFriendly"] = true;

$tdataconsultant[".delete"] = true;

$tdataconsultant[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataconsultant[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataconsultant[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataconsultant[".searchSaving"] = false;
//

$tdataconsultant[".showSearchPanel"] = true;
		$tdataconsultant[".flexibleSearch"] = true;

$tdataconsultant[".isUseAjaxSuggest"] = true;

$tdataconsultant[".rowHighlite"] = true;





$tdataconsultant[".ajaxCodeSnippetAdded"] = false;

$tdataconsultant[".buttonsAdded"] = false;

$tdataconsultant[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsultant[".isUseTimeForSearch"] = false;



$tdataconsultant[".badgeColor"] = "6493EA";


$tdataconsultant[".allSearchFields"] = array();
$tdataconsultant[".filterFields"] = array();
$tdataconsultant[".requiredSearchFields"] = array();

$tdataconsultant[".allSearchFields"][] = "consultant_id";
	$tdataconsultant[".allSearchFields"][] = "eid";
	$tdataconsultant[".allSearchFields"][] = "divison_id";
	$tdataconsultant[".allSearchFields"][] = "Type";
	

$tdataconsultant[".googleLikeFields"] = array();
$tdataconsultant[".googleLikeFields"][] = "consultant_id";
$tdataconsultant[".googleLikeFields"][] = "eid";
$tdataconsultant[".googleLikeFields"][] = "divison_id";
$tdataconsultant[".googleLikeFields"][] = "Type";


$tdataconsultant[".advSearchFields"] = array();
$tdataconsultant[".advSearchFields"][] = "consultant_id";
$tdataconsultant[".advSearchFields"][] = "eid";
$tdataconsultant[".advSearchFields"][] = "divison_id";
$tdataconsultant[".advSearchFields"][] = "Type";

$tdataconsultant[".tableType"] = "list";

$tdataconsultant[".printerPageOrientation"] = 0;
$tdataconsultant[".nPrinterPageScale"] = 100;

$tdataconsultant[".nPrinterSplitRecords"] = 40;

$tdataconsultant[".nPrinterPDFSplitRecords"] = 40;



$tdataconsultant[".geocodingEnabled"] = false;





$tdataconsultant[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataconsultant[".pageSize"] = 20;

$tdataconsultant[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconsultant[".strOrderBy"] = $tstrOrderBy;

$tdataconsultant[".orderindexes"] = array();

$tdataconsultant[".sqlHead"] = "SELECT consultant_id,  	eid,  	divison_id,  	`Type`";
$tdataconsultant[".sqlFrom"] = "FROM consultant";
$tdataconsultant[".sqlWhereExpr"] = "";
$tdataconsultant[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsultant[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsultant[".arrGroupsPerPage"] = $arrGPP;

$tdataconsultant[".highlightSearchResults"] = true;

$tableKeysconsultant = array();
$tableKeysconsultant[] = "consultant_id";
$tdataconsultant[".Keys"] = $tableKeysconsultant;

$tdataconsultant[".listFields"] = array();
$tdataconsultant[".listFields"][] = "consultant_id";
$tdataconsultant[".listFields"][] = "eid";
$tdataconsultant[".listFields"][] = "divison_id";
$tdataconsultant[".listFields"][] = "Type";

$tdataconsultant[".hideMobileList"] = array();


$tdataconsultant[".viewFields"] = array();
$tdataconsultant[".viewFields"][] = "consultant_id";
$tdataconsultant[".viewFields"][] = "eid";
$tdataconsultant[".viewFields"][] = "divison_id";
$tdataconsultant[".viewFields"][] = "Type";

$tdataconsultant[".addFields"] = array();
$tdataconsultant[".addFields"][] = "eid";
$tdataconsultant[".addFields"][] = "divison_id";
$tdataconsultant[".addFields"][] = "Type";

$tdataconsultant[".masterListFields"] = array();
$tdataconsultant[".masterListFields"][] = "consultant_id";
$tdataconsultant[".masterListFields"][] = "eid";
$tdataconsultant[".masterListFields"][] = "divison_id";
$tdataconsultant[".masterListFields"][] = "Type";

$tdataconsultant[".inlineAddFields"] = array();
$tdataconsultant[".inlineAddFields"][] = "eid";
$tdataconsultant[".inlineAddFields"][] = "divison_id";
$tdataconsultant[".inlineAddFields"][] = "Type";

$tdataconsultant[".editFields"] = array();
$tdataconsultant[".editFields"][] = "eid";
$tdataconsultant[".editFields"][] = "divison_id";
$tdataconsultant[".editFields"][] = "Type";

$tdataconsultant[".inlineEditFields"] = array();
$tdataconsultant[".inlineEditFields"][] = "eid";
$tdataconsultant[".inlineEditFields"][] = "divison_id";
$tdataconsultant[".inlineEditFields"][] = "Type";

$tdataconsultant[".updateSelectedFields"] = array();
$tdataconsultant[".updateSelectedFields"][] = "eid";
$tdataconsultant[".updateSelectedFields"][] = "divison_id";
$tdataconsultant[".updateSelectedFields"][] = "Type";


$tdataconsultant[".exportFields"] = array();
$tdataconsultant[".exportFields"][] = "consultant_id";
$tdataconsultant[".exportFields"][] = "eid";
$tdataconsultant[".exportFields"][] = "divison_id";
$tdataconsultant[".exportFields"][] = "Type";

$tdataconsultant[".importFields"] = array();
$tdataconsultant[".importFields"][] = "consultant_id";
$tdataconsultant[".importFields"][] = "eid";
$tdataconsultant[".importFields"][] = "divison_id";
$tdataconsultant[".importFields"][] = "Type";

$tdataconsultant[".printFields"] = array();
$tdataconsultant[".printFields"][] = "consultant_id";
$tdataconsultant[".printFields"][] = "eid";
$tdataconsultant[".printFields"][] = "divison_id";
$tdataconsultant[".printFields"][] = "Type";


//	consultant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "consultant_id";
	$fdata["GoodName"] = "consultant_id";
	$fdata["ownerTable"] = "consultant";
	$fdata["Label"] = GetFieldLabel("consultant","consultant_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "consultant_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consultant_id";

	
	
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




	$tdataconsultant["consultant_id"] = $fdata;
//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "consultant";
	$fdata["Label"] = GetFieldLabel("consultant","eid");
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

		$fdata["strField"] = "eid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eid";

	
	
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


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataconsultant["eid"] = $fdata;
//	divison_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "divison_id";
	$fdata["GoodName"] = "divison_id";
	$fdata["ownerTable"] = "consultant";
	$fdata["Label"] = GetFieldLabel("consultant","divison_id");
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

		$fdata["strField"] = "divison_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "divison_id";

	
	
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


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataconsultant["divison_id"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "consultant";
	$fdata["Label"] = GetFieldLabel("consultant","Type");
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

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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




	$tdataconsultant["Type"] = $fdata;


$tables_data["consultant"]=&$tdataconsultant;
$field_labels["consultant"] = &$fieldLabelsconsultant;
$fieldToolTips["consultant"] = &$fieldToolTipsconsultant;
$placeHolders["consultant"] = &$placeHoldersconsultant;
$page_titles["consultant"] = &$pageTitlesconsultant;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["consultant"] = array();
//	batch
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="batch";
		$detailsParam["dOriginalTable"] = "batch";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "batch";
	$detailsParam["dCaptionTable"] = GetTableCaption("batch");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["consultant"][$dIndex] = $detailsParam;

	
		$detailsTablesData["consultant"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["consultant"][$dIndex]["masterKeys"][]="consultant_id";

				$detailsTablesData["consultant"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["consultant"][$dIndex]["detailKeys"][]="ey_spoc";

// tables which are master tables for current table (detail)
$masterTablesData["consultant"] = array();


	
				$strOriginalDetailsTable="division";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="division";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "division";
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
					$masterTablesData["consultant"][0] = $masterParams;
				$masterTablesData["consultant"][0]["masterKeys"] = array();
	$masterTablesData["consultant"][0]["masterKeys"][]="division_id";
				$masterTablesData["consultant"][0]["detailKeys"] = array();
	$masterTablesData["consultant"][0]["detailKeys"][]="divison_id";
		
	
				$strOriginalDetailsTable="employees";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employees";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employees";
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
					$masterTablesData["consultant"][1] = $masterParams;
				$masterTablesData["consultant"][1]["masterKeys"] = array();
	$masterTablesData["consultant"][1]["masterKeys"][]="eid";
				$masterTablesData["consultant"][1]["detailKeys"] = array();
	$masterTablesData["consultant"][1]["detailKeys"][]="eid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_consultant()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "consultant_id,  	eid,  	divison_id,  	`Type`";
$proto0["m_strFrom"] = "FROM consultant";
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
	"m_strName" => "consultant_id",
	"m_strTable" => "consultant",
	"m_srcTableName" => "consultant"
));

$proto6["m_sql"] = "consultant_id";
$proto6["m_srcTableName"] = "consultant";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "consultant",
	"m_srcTableName" => "consultant"
));

$proto8["m_sql"] = "eid";
$proto8["m_srcTableName"] = "consultant";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "divison_id",
	"m_strTable" => "consultant",
	"m_srcTableName" => "consultant"
));

$proto10["m_sql"] = "divison_id";
$proto10["m_srcTableName"] = "consultant";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "consultant",
	"m_srcTableName" => "consultant"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "consultant";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "consultant";
$proto15["m_srcTableName"] = "consultant";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "consultant_id";
$proto15["m_columns"][] = "eid";
$proto15["m_columns"][] = "divison_id";
$proto15["m_columns"][] = "Type";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "consultant";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "consultant";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="consultant";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consultant = createSqlQuery_consultant();


	
		;

				

$tdataconsultant[".sqlquery"] = $queryData_consultant;

$tableEvents["consultant"] = new eventsBase;
$tdataconsultant[".hasEvents"] = false;

?>