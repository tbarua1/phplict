<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadepartment = array();
	$tdatadepartment[".truncateText"] = true;
	$tdatadepartment[".NumberOfChars"] = 80;
	$tdatadepartment[".ShortName"] = "department";
	$tdatadepartment[".OwnerID"] = "";
	$tdatadepartment[".OriginalTable"] = "department";

//	field labels
$fieldLabelsdepartment = array();
$fieldToolTipsdepartment = array();
$pageTitlesdepartment = array();
$placeHoldersdepartment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartment["English"] = array();
	$fieldToolTipsdepartment["English"] = array();
	$placeHoldersdepartment["English"] = array();
	$pageTitlesdepartment["English"] = array();
	$fieldLabelsdepartment["English"]["Department_id"] = "Department Id";
	$fieldToolTipsdepartment["English"]["Department_id"] = "";
	$placeHoldersdepartment["English"]["Department_id"] = "";
	$fieldLabelsdepartment["English"]["Dname"] = "Dname";
	$fieldToolTipsdepartment["English"]["Dname"] = "";
	$placeHoldersdepartment["English"]["Dname"] = "";
	if (count($fieldToolTipsdepartment["English"]))
		$tdatadepartment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdepartment[""] = array();
	$fieldToolTipsdepartment[""] = array();
	$placeHoldersdepartment[""] = array();
	$pageTitlesdepartment[""] = array();
	if (count($fieldToolTipsdepartment[""]))
		$tdatadepartment[".isUseToolTips"] = true;
}


	$tdatadepartment[".NCSearch"] = true;



$tdatadepartment[".shortTableName"] = "department";
$tdatadepartment[".nSecOptions"] = 0;
$tdatadepartment[".recsPerRowPrint"] = 1;
$tdatadepartment[".mainTableOwnerID"] = "";
$tdatadepartment[".moveNext"] = 1;
$tdatadepartment[".entityType"] = 0;

$tdatadepartment[".strOriginalTableName"] = "department";

	



$tdatadepartment[".showAddInPopup"] = false;

$tdatadepartment[".showEditInPopup"] = false;

$tdatadepartment[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadepartment[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadepartment[".fieldsForRegister"] = array();

$tdatadepartment[".listAjax"] = false;

	$tdatadepartment[".audit"] = false;

	$tdatadepartment[".locking"] = false;

$tdatadepartment[".edit"] = true;
$tdatadepartment[".afterEditAction"] = 1;
$tdatadepartment[".closePopupAfterEdit"] = 1;
$tdatadepartment[".afterEditActionDetTable"] = "";

$tdatadepartment[".add"] = true;
$tdatadepartment[".afterAddAction"] = 1;
$tdatadepartment[".closePopupAfterAdd"] = 1;
$tdatadepartment[".afterAddActionDetTable"] = "";

$tdatadepartment[".list"] = true;



$tdatadepartment[".reorderRecordsByHeader"] = true;


$tdatadepartment[".exportFormatting"] = 2;
$tdatadepartment[".exportDelimiter"] = ",";
		
$tdatadepartment[".view"] = true;

$tdatadepartment[".import"] = true;

$tdatadepartment[".exportTo"] = true;

$tdatadepartment[".printFriendly"] = true;

$tdatadepartment[".delete"] = true;

$tdatadepartment[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadepartment[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadepartment[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadepartment[".searchSaving"] = false;
//

$tdatadepartment[".showSearchPanel"] = true;
		$tdatadepartment[".flexibleSearch"] = true;

$tdatadepartment[".isUseAjaxSuggest"] = true;

$tdatadepartment[".rowHighlite"] = true;





$tdatadepartment[".ajaxCodeSnippetAdded"] = false;

$tdatadepartment[".buttonsAdded"] = false;

$tdatadepartment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartment[".isUseTimeForSearch"] = false;





$tdatadepartment[".allSearchFields"] = array();
$tdatadepartment[".filterFields"] = array();
$tdatadepartment[".requiredSearchFields"] = array();

$tdatadepartment[".allSearchFields"][] = "Department_id";
	$tdatadepartment[".allSearchFields"][] = "Dname";
	

$tdatadepartment[".googleLikeFields"] = array();
$tdatadepartment[".googleLikeFields"][] = "Department_id";
$tdatadepartment[".googleLikeFields"][] = "Dname";


$tdatadepartment[".advSearchFields"] = array();
$tdatadepartment[".advSearchFields"][] = "Department_id";
$tdatadepartment[".advSearchFields"][] = "Dname";

$tdatadepartment[".tableType"] = "list";

$tdatadepartment[".printerPageOrientation"] = 0;
$tdatadepartment[".nPrinterPageScale"] = 100;

$tdatadepartment[".nPrinterSplitRecords"] = 40;

$tdatadepartment[".nPrinterPDFSplitRecords"] = 40;



$tdatadepartment[".geocodingEnabled"] = false;





$tdatadepartment[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadepartment[".pageSize"] = 20;

$tdatadepartment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartment[".strOrderBy"] = $tstrOrderBy;

$tdatadepartment[".orderindexes"] = array();

$tdatadepartment[".sqlHead"] = "SELECT Department_id,  	Dname";
$tdatadepartment[".sqlFrom"] = "FROM department";
$tdatadepartment[".sqlWhereExpr"] = "";
$tdatadepartment[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartment[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartment[".highlightSearchResults"] = true;

$tableKeysdepartment = array();
$tableKeysdepartment[] = "Department_id";
$tdatadepartment[".Keys"] = $tableKeysdepartment;

$tdatadepartment[".listFields"] = array();
$tdatadepartment[".listFields"][] = "Department_id";
$tdatadepartment[".listFields"][] = "Dname";

$tdatadepartment[".hideMobileList"] = array();


$tdatadepartment[".viewFields"] = array();
$tdatadepartment[".viewFields"][] = "Department_id";
$tdatadepartment[".viewFields"][] = "Dname";

$tdatadepartment[".addFields"] = array();
$tdatadepartment[".addFields"][] = "Dname";

$tdatadepartment[".masterListFields"] = array();
$tdatadepartment[".masterListFields"][] = "Department_id";
$tdatadepartment[".masterListFields"][] = "Dname";

$tdatadepartment[".inlineAddFields"] = array();
$tdatadepartment[".inlineAddFields"][] = "Dname";

$tdatadepartment[".editFields"] = array();
$tdatadepartment[".editFields"][] = "Dname";

$tdatadepartment[".inlineEditFields"] = array();
$tdatadepartment[".inlineEditFields"][] = "Dname";

$tdatadepartment[".updateSelectedFields"] = array();
$tdatadepartment[".updateSelectedFields"][] = "Dname";


$tdatadepartment[".exportFields"] = array();
$tdatadepartment[".exportFields"][] = "Department_id";
$tdatadepartment[".exportFields"][] = "Dname";

$tdatadepartment[".importFields"] = array();
$tdatadepartment[".importFields"][] = "Department_id";
$tdatadepartment[".importFields"][] = "Dname";

$tdatadepartment[".printFields"] = array();
$tdatadepartment[".printFields"][] = "Department_id";
$tdatadepartment[".printFields"][] = "Dname";


//	Department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Department_id";
	$fdata["GoodName"] = "Department_id";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","Department_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Department_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department_id";

	
	
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




	$tdatadepartment["Department_id"] = $fdata;
//	Dname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Dname";
	$fdata["GoodName"] = "Dname";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = GetFieldLabel("department","Dname");
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

		$fdata["strField"] = "Dname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dname";

	
	
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




	$tdatadepartment["Dname"] = $fdata;


$tables_data["department"]=&$tdatadepartment;
$field_labels["department"] = &$fieldLabelsdepartment;
$fieldToolTips["department"] = &$fieldToolTipsdepartment;
$placeHolders["department"] = &$placeHoldersdepartment;
$page_titles["department"] = &$pageTitlesdepartment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["department"] = array();
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
		
	$detailsTablesData["department"][$dIndex] = $detailsParam;

	
		$detailsTablesData["department"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["department"][$dIndex]["masterKeys"][]="Department_id";

				$detailsTablesData["department"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["department"][$dIndex]["detailKeys"][]="department_id";

// tables which are master tables for current table (detail)
$masterTablesData["department"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_department()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Department_id,  	Dname";
$proto0["m_strFrom"] = "FROM department";
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
	"m_strName" => "Department_id",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto6["m_sql"] = "Department_id";
$proto6["m_srcTableName"] = "department";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Dname",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto8["m_sql"] = "Dname";
$proto8["m_srcTableName"] = "department";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "department";
$proto11["m_srcTableName"] = "department";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Department_id";
$proto11["m_columns"][] = "Dname";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "department";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "department";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="department";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_department = createSqlQuery_department();


	
		;

		

$tdatadepartment[".sqlquery"] = $queryData_department;

$tableEvents["department"] = new eventsBase;
$tdatadepartment[".hasEvents"] = false;

?>