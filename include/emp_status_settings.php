<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemp_status = array();
	$tdataemp_status[".truncateText"] = true;
	$tdataemp_status[".NumberOfChars"] = 80;
	$tdataemp_status[".ShortName"] = "emp_status";
	$tdataemp_status[".OwnerID"] = "";
	$tdataemp_status[".OriginalTable"] = "emp_status";

//	field labels
$fieldLabelsemp_status = array();
$fieldToolTipsemp_status = array();
$pageTitlesemp_status = array();
$placeHoldersemp_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemp_status["English"] = array();
	$fieldToolTipsemp_status["English"] = array();
	$placeHoldersemp_status["English"] = array();
	$pageTitlesemp_status["English"] = array();
	$fieldLabelsemp_status["English"]["status_id"] = "Status Id";
	$fieldToolTipsemp_status["English"]["status_id"] = "";
	$placeHoldersemp_status["English"]["status_id"] = "";
	$fieldLabelsemp_status["English"]["status"] = "Status";
	$fieldToolTipsemp_status["English"]["status"] = "";
	$placeHoldersemp_status["English"]["status"] = "";
	if (count($fieldToolTipsemp_status["English"]))
		$tdataemp_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemp_status[""] = array();
	$fieldToolTipsemp_status[""] = array();
	$placeHoldersemp_status[""] = array();
	$pageTitlesemp_status[""] = array();
	if (count($fieldToolTipsemp_status[""]))
		$tdataemp_status[".isUseToolTips"] = true;
}


	$tdataemp_status[".NCSearch"] = true;



$tdataemp_status[".shortTableName"] = "emp_status";
$tdataemp_status[".nSecOptions"] = 0;
$tdataemp_status[".recsPerRowPrint"] = 1;
$tdataemp_status[".mainTableOwnerID"] = "";
$tdataemp_status[".moveNext"] = 1;
$tdataemp_status[".entityType"] = 0;

$tdataemp_status[".strOriginalTableName"] = "emp_status";

	



$tdataemp_status[".showAddInPopup"] = false;

$tdataemp_status[".showEditInPopup"] = false;

$tdataemp_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemp_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemp_status[".fieldsForRegister"] = array();

$tdataemp_status[".listAjax"] = false;

	$tdataemp_status[".audit"] = false;

	$tdataemp_status[".locking"] = false;

$tdataemp_status[".edit"] = true;
$tdataemp_status[".afterEditAction"] = 1;
$tdataemp_status[".closePopupAfterEdit"] = 1;
$tdataemp_status[".afterEditActionDetTable"] = "";

$tdataemp_status[".add"] = true;
$tdataemp_status[".afterAddAction"] = 1;
$tdataemp_status[".closePopupAfterAdd"] = 1;
$tdataemp_status[".afterAddActionDetTable"] = "";

$tdataemp_status[".list"] = true;



$tdataemp_status[".reorderRecordsByHeader"] = true;


$tdataemp_status[".exportFormatting"] = 2;
$tdataemp_status[".exportDelimiter"] = ",";
		
$tdataemp_status[".view"] = true;

$tdataemp_status[".import"] = true;

$tdataemp_status[".exportTo"] = true;

$tdataemp_status[".printFriendly"] = true;

$tdataemp_status[".delete"] = true;

$tdataemp_status[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemp_status[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemp_status[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemp_status[".searchSaving"] = false;
//

$tdataemp_status[".showSearchPanel"] = true;
		$tdataemp_status[".flexibleSearch"] = true;

$tdataemp_status[".isUseAjaxSuggest"] = true;

$tdataemp_status[".rowHighlite"] = true;





$tdataemp_status[".ajaxCodeSnippetAdded"] = false;

$tdataemp_status[".buttonsAdded"] = false;

$tdataemp_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemp_status[".isUseTimeForSearch"] = false;





$tdataemp_status[".allSearchFields"] = array();
$tdataemp_status[".filterFields"] = array();
$tdataemp_status[".requiredSearchFields"] = array();

$tdataemp_status[".allSearchFields"][] = "status_id";
	$tdataemp_status[".allSearchFields"][] = "status";
	

$tdataemp_status[".googleLikeFields"] = array();
$tdataemp_status[".googleLikeFields"][] = "status_id";
$tdataemp_status[".googleLikeFields"][] = "status";


$tdataemp_status[".advSearchFields"] = array();
$tdataemp_status[".advSearchFields"][] = "status_id";
$tdataemp_status[".advSearchFields"][] = "status";

$tdataemp_status[".tableType"] = "list";

$tdataemp_status[".printerPageOrientation"] = 0;
$tdataemp_status[".nPrinterPageScale"] = 100;

$tdataemp_status[".nPrinterSplitRecords"] = 40;

$tdataemp_status[".nPrinterPDFSplitRecords"] = 40;



$tdataemp_status[".geocodingEnabled"] = false;





$tdataemp_status[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemp_status[".pageSize"] = 20;

$tdataemp_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemp_status[".strOrderBy"] = $tstrOrderBy;

$tdataemp_status[".orderindexes"] = array();

$tdataemp_status[".sqlHead"] = "SELECT status_id,  	status";
$tdataemp_status[".sqlFrom"] = "FROM emp_status";
$tdataemp_status[".sqlWhereExpr"] = "";
$tdataemp_status[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemp_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemp_status[".arrGroupsPerPage"] = $arrGPP;

$tdataemp_status[".highlightSearchResults"] = true;

$tableKeysemp_status = array();
$tableKeysemp_status[] = "status_id";
$tdataemp_status[".Keys"] = $tableKeysemp_status;

$tdataemp_status[".listFields"] = array();
$tdataemp_status[".listFields"][] = "status_id";
$tdataemp_status[".listFields"][] = "status";

$tdataemp_status[".hideMobileList"] = array();


$tdataemp_status[".viewFields"] = array();
$tdataemp_status[".viewFields"][] = "status_id";
$tdataemp_status[".viewFields"][] = "status";

$tdataemp_status[".addFields"] = array();
$tdataemp_status[".addFields"][] = "status_id";
$tdataemp_status[".addFields"][] = "status";

$tdataemp_status[".masterListFields"] = array();
$tdataemp_status[".masterListFields"][] = "status_id";
$tdataemp_status[".masterListFields"][] = "status";

$tdataemp_status[".inlineAddFields"] = array();
$tdataemp_status[".inlineAddFields"][] = "status_id";
$tdataemp_status[".inlineAddFields"][] = "status";

$tdataemp_status[".editFields"] = array();
$tdataemp_status[".editFields"][] = "status_id";
$tdataemp_status[".editFields"][] = "status";

$tdataemp_status[".inlineEditFields"] = array();
$tdataemp_status[".inlineEditFields"][] = "status_id";
$tdataemp_status[".inlineEditFields"][] = "status";

$tdataemp_status[".updateSelectedFields"] = array();
$tdataemp_status[".updateSelectedFields"][] = "status_id";
$tdataemp_status[".updateSelectedFields"][] = "status";


$tdataemp_status[".exportFields"] = array();
$tdataemp_status[".exportFields"][] = "status_id";
$tdataemp_status[".exportFields"][] = "status";

$tdataemp_status[".importFields"] = array();
$tdataemp_status[".importFields"][] = "status_id";
$tdataemp_status[".importFields"][] = "status";

$tdataemp_status[".printFields"] = array();
$tdataemp_status[".printFields"][] = "status_id";
$tdataemp_status[".printFields"][] = "status";


//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "emp_status";
	$fdata["Label"] = GetFieldLabel("emp_status","status_id");
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

		$fdata["strField"] = "status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
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




	$tdataemp_status["status_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "emp_status";
	$fdata["Label"] = GetFieldLabel("emp_status","status");
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




	$tdataemp_status["status"] = $fdata;


$tables_data["emp_status"]=&$tdataemp_status;
$field_labels["emp_status"] = &$fieldLabelsemp_status;
$fieldToolTips["emp_status"] = &$fieldToolTipsemp_status;
$placeHolders["emp_status"] = &$placeHoldersemp_status;
$page_titles["emp_status"] = &$pageTitlesemp_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["emp_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["emp_status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_emp_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "status_id,  	status";
$proto0["m_strFrom"] = "FROM emp_status";
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
	"m_strName" => "status_id",
	"m_strTable" => "emp_status",
	"m_srcTableName" => "emp_status"
));

$proto6["m_sql"] = "status_id";
$proto6["m_srcTableName"] = "emp_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "emp_status",
	"m_srcTableName" => "emp_status"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "emp_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "emp_status";
$proto11["m_srcTableName"] = "emp_status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "status_id";
$proto11["m_columns"][] = "status";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "emp_status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "emp_status";
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
$proto0["m_srcTableName"]="emp_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emp_status = createSqlQuery_emp_status();


	
		;

		

$tdataemp_status[".sqlquery"] = $queryData_emp_status;

$tableEvents["emp_status"] = new eventsBase;
$tdataemp_status[".hasEvents"] = false;

?>