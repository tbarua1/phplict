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

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartment["English"] = array();
	$fieldToolTipsdepartment["English"] = array();
	$pageTitlesdepartment["English"] = array();
	$fieldLabelsdepartment["English"]["Department_id"] = "Department Id";
	$fieldToolTipsdepartment["English"]["Department_id"] = "";
	$fieldLabelsdepartment["English"]["Dname"] = "Dname";
	$fieldToolTipsdepartment["English"]["Dname"] = "";
	if (count($fieldToolTipsdepartment["English"]))
		$tdatadepartment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdepartment[""] = array();
	$fieldToolTipsdepartment[""] = array();
	$pageTitlesdepartment[""] = array();
	if (count($fieldToolTipsdepartment[""]))
		$tdatadepartment[".isUseToolTips"] = true;
}
	
	
	$tdatadepartment[".NCSearch"] = true;



$tdatadepartment[".shortTableName"] = "department";
$tdatadepartment[".nSecOptions"] = 0;
$tdatadepartment[".recsPerRowList"] = 1;
$tdatadepartment[".mainTableOwnerID"] = "";
$tdatadepartment[".moveNext"] = 1;
$tdatadepartment[".nType"] = 0;

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

$tdatadepartment[".list"] = true;

$tdatadepartment[".inlineEdit"] = true;
$tdatadepartment[".inlineAdd"] = true;
$tdatadepartment[".view"] = true;

$tdatadepartment[".import"] = true;

$tdatadepartment[".exportTo"] = true;

$tdatadepartment[".printFriendly"] = true;

$tdatadepartment[".delete"] = true;

$tdatadepartment[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadepartment[".searchSaving"] = false;
//

$tdatadepartment[".showSearchPanel"] = true;
		$tdatadepartment[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadepartment[".isUseAjaxSuggest"] = false;
else 
	$tdatadepartment[".isUseAjaxSuggest"] = true;

$tdatadepartment[".rowHighlite"] = true;



$tdatadepartment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartment[".isUseTimeForSearch"] = false;



$tdatadepartment[".useDetailsPreview"] = true;


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

$tdatadepartment[".inlineAddFields"] = array();
$tdatadepartment[".inlineAddFields"][] = "Dname";

$tdatadepartment[".editFields"] = array();
$tdatadepartment[".editFields"][] = "Dname";

$tdatadepartment[".inlineEditFields"] = array();
$tdatadepartment[".inlineEditFields"][] = "Dname";

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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadepartment["Dname"] = $fdata;

	
$tables_data["department"]=&$tdatadepartment;
$field_labels["department"] = &$fieldLabelsdepartment;
$fieldToolTips["department"] = &$fieldToolTipsdepartment;
$page_titles["department"] = &$pageTitlesdepartment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["department"] = array();
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
	"m_strName" => "Department_id",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto5["m_sql"] = "Department_id";
$proto5["m_srcTableName"] = "department";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Dname",
	"m_strTable" => "department",
	"m_srcTableName" => "department"
));

$proto7["m_sql"] = "Dname";
$proto7["m_srcTableName"] = "department";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "department";
$proto10["m_srcTableName"] = "department";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Department_id";
$proto10["m_columns"][] = "Dname";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "department";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "department";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="department";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_department = createSqlQuery_department();


	
		
	
$tdatadepartment[".sqlquery"] = $queryData_department;

$tableEvents["department"] = new eventsBase;
$tdatadepartment[".hasEvents"] = false;

?>