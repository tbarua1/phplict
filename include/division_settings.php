<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadivision = array();	
	$tdatadivision[".truncateText"] = true;
	$tdatadivision[".NumberOfChars"] = 80; 
	$tdatadivision[".ShortName"] = "division";
	$tdatadivision[".OwnerID"] = "";
	$tdatadivision[".OriginalTable"] = "division";

//	field labels
$fieldLabelsdivision = array();
$fieldToolTipsdivision = array();
$pageTitlesdivision = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdivision["English"] = array();
	$fieldToolTipsdivision["English"] = array();
	$pageTitlesdivision["English"] = array();
	$fieldLabelsdivision["English"]["division_id"] = "Division Id";
	$fieldToolTipsdivision["English"]["division_id"] = "";
	$fieldLabelsdivision["English"]["dname"] = "Dname";
	$fieldToolTipsdivision["English"]["dname"] = "";
	if (count($fieldToolTipsdivision["English"]))
		$tdatadivision[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdivision[""] = array();
	$fieldToolTipsdivision[""] = array();
	$pageTitlesdivision[""] = array();
	if (count($fieldToolTipsdivision[""]))
		$tdatadivision[".isUseToolTips"] = true;
}
	
	
	$tdatadivision[".NCSearch"] = true;



$tdatadivision[".shortTableName"] = "division";
$tdatadivision[".nSecOptions"] = 0;
$tdatadivision[".recsPerRowList"] = 1;
$tdatadivision[".mainTableOwnerID"] = "";
$tdatadivision[".moveNext"] = 1;
$tdatadivision[".nType"] = 0;

$tdatadivision[".strOriginalTableName"] = "division";




$tdatadivision[".showAddInPopup"] = false;

$tdatadivision[".showEditInPopup"] = false;

$tdatadivision[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadivision[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadivision[".fieldsForRegister"] = array();

$tdatadivision[".listAjax"] = false;

	$tdatadivision[".audit"] = false;

	$tdatadivision[".locking"] = false;

$tdatadivision[".edit"] = true;

$tdatadivision[".list"] = true;

$tdatadivision[".inlineEdit"] = true;
$tdatadivision[".inlineAdd"] = true;
$tdatadivision[".view"] = true;

$tdatadivision[".import"] = true;

$tdatadivision[".exportTo"] = true;

$tdatadivision[".printFriendly"] = true;

$tdatadivision[".delete"] = true;

$tdatadivision[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadivision[".searchSaving"] = false;
//

$tdatadivision[".showSearchPanel"] = true;
		$tdatadivision[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadivision[".isUseAjaxSuggest"] = false;
else 
	$tdatadivision[".isUseAjaxSuggest"] = true;

$tdatadivision[".rowHighlite"] = true;



$tdatadivision[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadivision[".isUseTimeForSearch"] = false;



$tdatadivision[".useDetailsPreview"] = true;


$tdatadivision[".allSearchFields"] = array();
$tdatadivision[".filterFields"] = array();
$tdatadivision[".requiredSearchFields"] = array();

$tdatadivision[".allSearchFields"][] = "division_id";
	$tdatadivision[".allSearchFields"][] = "dname";
	

$tdatadivision[".googleLikeFields"] = array();
$tdatadivision[".googleLikeFields"][] = "division_id";
$tdatadivision[".googleLikeFields"][] = "dname";


$tdatadivision[".advSearchFields"] = array();
$tdatadivision[".advSearchFields"][] = "division_id";
$tdatadivision[".advSearchFields"][] = "dname";

$tdatadivision[".tableType"] = "list";

$tdatadivision[".printerPageOrientation"] = 0;
$tdatadivision[".nPrinterPageScale"] = 100;

$tdatadivision[".nPrinterSplitRecords"] = 40;

$tdatadivision[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatadivision[".pageSize"] = 20;

$tdatadivision[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadivision[".strOrderBy"] = $tstrOrderBy;

$tdatadivision[".orderindexes"] = array();

$tdatadivision[".sqlHead"] = "SELECT division_id,  	dname";
$tdatadivision[".sqlFrom"] = "FROM division";
$tdatadivision[".sqlWhereExpr"] = "";
$tdatadivision[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadivision[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadivision[".arrGroupsPerPage"] = $arrGPP;

$tdatadivision[".highlightSearchResults"] = true;

$tableKeysdivision = array();
$tableKeysdivision[] = "division_id";
$tdatadivision[".Keys"] = $tableKeysdivision;

$tdatadivision[".listFields"] = array();
$tdatadivision[".listFields"][] = "division_id";
$tdatadivision[".listFields"][] = "dname";

$tdatadivision[".hideMobileList"] = array();


$tdatadivision[".viewFields"] = array();
$tdatadivision[".viewFields"][] = "division_id";
$tdatadivision[".viewFields"][] = "dname";

$tdatadivision[".addFields"] = array();
$tdatadivision[".addFields"][] = "dname";

$tdatadivision[".inlineAddFields"] = array();
$tdatadivision[".inlineAddFields"][] = "dname";

$tdatadivision[".editFields"] = array();
$tdatadivision[".editFields"][] = "dname";

$tdatadivision[".inlineEditFields"] = array();
$tdatadivision[".inlineEditFields"][] = "dname";

$tdatadivision[".exportFields"] = array();
$tdatadivision[".exportFields"][] = "division_id";
$tdatadivision[".exportFields"][] = "dname";

$tdatadivision[".importFields"] = array();
$tdatadivision[".importFields"][] = "division_id";
$tdatadivision[".importFields"][] = "dname";

$tdatadivision[".printFields"] = array();
$tdatadivision[".printFields"][] = "division_id";
$tdatadivision[".printFields"][] = "dname";

//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "division";
	$fdata["Label"] = GetFieldLabel("division","division_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "division_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "division_id";
	
		
		
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

	

	
	$tdatadivision["division_id"] = $fdata;
//	dname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dname";
	$fdata["GoodName"] = "dname";
	$fdata["ownerTable"] = "division";
	$fdata["Label"] = GetFieldLabel("division","dname"); 
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
	
		$fdata["strField"] = "dname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dname";
	
		
		
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

	

	
	$tdatadivision["dname"] = $fdata;

	
$tables_data["division"]=&$tdatadivision;
$field_labels["division"] = &$fieldLabelsdivision;
$fieldToolTips["division"] = &$fieldToolTipsdivision;
$page_titles["division"] = &$pageTitlesdivision;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["division"] = array();
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
			
	$detailsTablesData["division"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="division_id";
//	consultant
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="consultant";
		$detailsParam["dOriginalTable"] = "consultant";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consultant";
	$detailsParam["dCaptionTable"] = GetTableCaption("consultant");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["division"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="divison_id";
//	district
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="district";
		$detailsParam["dOriginalTable"] = "district";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "district";
	$detailsParam["dCaptionTable"] = GetTableCaption("district");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["division"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="division_id";
//	employees
	
	

		$dIndex = 3;
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
			
	$detailsTablesData["division"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="division_id";
//	university
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="university";
		$detailsParam["dOriginalTable"] = "university";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "university";
	$detailsParam["dCaptionTable"] = GetTableCaption("university");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["division"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="division_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["division"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_division()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "division_id,  	dname";
$proto0["m_strFrom"] = "FROM division";
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
	"m_strName" => "division_id",
	"m_strTable" => "division",
	"m_srcTableName" => "division"
));

$proto5["m_sql"] = "division_id";
$proto5["m_srcTableName"] = "division";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "dname",
	"m_strTable" => "division",
	"m_srcTableName" => "division"
));

$proto7["m_sql"] = "dname";
$proto7["m_srcTableName"] = "division";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "division";
$proto10["m_srcTableName"] = "division";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "division_id";
$proto10["m_columns"][] = "dname";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "division";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "division";
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
$proto0["m_srcTableName"]="division";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_division = createSqlQuery_division();


	
		
	
$tdatadivision[".sqlquery"] = $queryData_division;

$tableEvents["division"] = new eventsBase;
$tdatadivision[".hasEvents"] = false;

?>