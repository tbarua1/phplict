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

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemp_status["English"] = array();
	$fieldToolTipsemp_status["English"] = array();
	$pageTitlesemp_status["English"] = array();
	$fieldLabelsemp_status["English"]["status_id"] = "Status Id";
	$fieldToolTipsemp_status["English"]["status_id"] = "";
	$fieldLabelsemp_status["English"]["status"] = "Status";
	$fieldToolTipsemp_status["English"]["status"] = "";
	if (count($fieldToolTipsemp_status["English"]))
		$tdataemp_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemp_status[""] = array();
	$fieldToolTipsemp_status[""] = array();
	$pageTitlesemp_status[""] = array();
	if (count($fieldToolTipsemp_status[""]))
		$tdataemp_status[".isUseToolTips"] = true;
}
	
	
	$tdataemp_status[".NCSearch"] = true;



$tdataemp_status[".shortTableName"] = "emp_status";
$tdataemp_status[".nSecOptions"] = 0;
$tdataemp_status[".recsPerRowList"] = 1;
$tdataemp_status[".mainTableOwnerID"] = "";
$tdataemp_status[".moveNext"] = 1;
$tdataemp_status[".nType"] = 0;

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

$tdataemp_status[".list"] = true;

$tdataemp_status[".inlineEdit"] = true;
$tdataemp_status[".inlineAdd"] = true;
$tdataemp_status[".view"] = true;

$tdataemp_status[".import"] = true;

$tdataemp_status[".exportTo"] = true;

$tdataemp_status[".printFriendly"] = true;

$tdataemp_status[".delete"] = true;

$tdataemp_status[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemp_status[".searchSaving"] = false;
//

$tdataemp_status[".showSearchPanel"] = true;
		$tdataemp_status[".flexibleSearch"] = true;		

if (isMobile())
	$tdataemp_status[".isUseAjaxSuggest"] = false;
else 
	$tdataemp_status[".isUseAjaxSuggest"] = true;

$tdataemp_status[".rowHighlite"] = true;



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

$tdataemp_status[".inlineAddFields"] = array();
$tdataemp_status[".inlineAddFields"][] = "status_id";
$tdataemp_status[".inlineAddFields"][] = "status";

$tdataemp_status[".editFields"] = array();
$tdataemp_status[".editFields"][] = "status_id";
$tdataemp_status[".editFields"][] = "status";

$tdataemp_status[".inlineEditFields"] = array();
$tdataemp_status[".inlineEditFields"][] = "status_id";
$tdataemp_status[".inlineEditFields"][] = "status";

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

	

	
	$tdataemp_status["status"] = $fdata;

	
$tables_data["emp_status"]=&$tdataemp_status;
$field_labels["emp_status"] = &$fieldLabelsemp_status;
$fieldToolTips["emp_status"] = &$fieldToolTipsemp_status;
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
	"m_strName" => "status_id",
	"m_strTable" => "emp_status",
	"m_srcTableName" => "emp_status"
));

$proto5["m_sql"] = "status_id";
$proto5["m_srcTableName"] = "emp_status";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "emp_status",
	"m_srcTableName" => "emp_status"
));

$proto7["m_sql"] = "status";
$proto7["m_srcTableName"] = "emp_status";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "emp_status";
$proto10["m_srcTableName"] = "emp_status";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "status_id";
$proto10["m_columns"][] = "status";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "emp_status";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "emp_status";
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
$proto0["m_srcTableName"]="emp_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_emp_status = createSqlQuery_emp_status();


	
		
	
$tdataemp_status[".sqlquery"] = $queryData_emp_status;

$tableEvents["emp_status"] = new eventsBase;
$tdataemp_status[".hasEvents"] = false;

?>