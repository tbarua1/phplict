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
$placeHoldersdivision = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdivision["English"] = array();
	$fieldToolTipsdivision["English"] = array();
	$placeHoldersdivision["English"] = array();
	$pageTitlesdivision["English"] = array();
	$fieldLabelsdivision["English"]["division_id"] = "Division Id";
	$fieldToolTipsdivision["English"]["division_id"] = "";
	$placeHoldersdivision["English"]["division_id"] = "";
	$fieldLabelsdivision["English"]["dname"] = "Dname";
	$fieldToolTipsdivision["English"]["dname"] = "";
	$placeHoldersdivision["English"]["dname"] = "";
	if (count($fieldToolTipsdivision["English"]))
		$tdatadivision[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdivision[""] = array();
	$fieldToolTipsdivision[""] = array();
	$placeHoldersdivision[""] = array();
	$pageTitlesdivision[""] = array();
	if (count($fieldToolTipsdivision[""]))
		$tdatadivision[".isUseToolTips"] = true;
}


	$tdatadivision[".NCSearch"] = true;



$tdatadivision[".shortTableName"] = "division";
$tdatadivision[".nSecOptions"] = 0;
$tdatadivision[".recsPerRowPrint"] = 1;
$tdatadivision[".mainTableOwnerID"] = "";
$tdatadivision[".moveNext"] = 1;
$tdatadivision[".entityType"] = 0;

$tdatadivision[".strOriginalTableName"] = "division";

	



$tdatadivision[".showAddInPopup"] = false;

$tdatadivision[".showEditInPopup"] = false;

$tdatadivision[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadivision[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadivision[".fieldsForRegister"] = array();

$tdatadivision[".listAjax"] = false;

	$tdatadivision[".audit"] = true;

	$tdatadivision[".locking"] = true;






$tdatadivision[".reorderRecordsByHeader"] = true;








$tdatadivision[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadivision[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadivision[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadivision[".searchSaving"] = false;
//

$tdatadivision[".showSearchPanel"] = true;
		$tdatadivision[".flexibleSearch"] = true;

$tdatadivision[".isUseAjaxSuggest"] = true;

$tdatadivision[".rowHighlite"] = true;



			

$tdatadivision[".ajaxCodeSnippetAdded"] = false;

$tdatadivision[".buttonsAdded"] = false;

$tdatadivision[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadivision[".isUseTimeForSearch"] = false;





$tdatadivision[".allSearchFields"] = array();
$tdatadivision[".filterFields"] = array();
$tdatadivision[".requiredSearchFields"] = array();



$tdatadivision[".googleLikeFields"] = array();
$tdatadivision[".googleLikeFields"][] = "division_id";
$tdatadivision[".googleLikeFields"][] = "dname";



$tdatadivision[".tableType"] = "list";

$tdatadivision[".printerPageOrientation"] = 0;
$tdatadivision[".nPrinterPageScale"] = 100;

$tdatadivision[".nPrinterSplitRecords"] = 40;

$tdatadivision[".nPrinterPDFSplitRecords"] = 40;



$tdatadivision[".geocodingEnabled"] = false;





$tdatadivision[".listGridLayout"] = 3;





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

$tdatadivision[".hideMobileList"] = array();


$tdatadivision[".viewFields"] = array();

$tdatadivision[".addFields"] = array();

$tdatadivision[".masterListFields"] = array();
$tdatadivision[".masterListFields"][] = "division_id";
$tdatadivision[".masterListFields"][] = "dname";

$tdatadivision[".inlineAddFields"] = array();

$tdatadivision[".editFields"] = array();

$tdatadivision[".inlineEditFields"] = array();

$tdatadivision[".updateSelectedFields"] = array();


$tdatadivision[".exportFields"] = array();

$tdatadivision[".importFields"] = array();

$tdatadivision[".printFields"] = array();


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

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "division_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "division_id";

	
	
			
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

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dname";

	
	
			
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








	$tdatadivision["dname"] = $fdata;


$tables_data["division"]=&$tdatadivision;
$field_labels["division"] = &$fieldLabelsdivision;
$fieldToolTips["division"] = &$fieldToolTipsdivision;
$placeHolders["division"] = &$placeHoldersdivision;
$page_titles["division"] = &$pageTitlesdivision;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["division"] = array();
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
		
	$detailsTablesData["division"][$dIndex] = $detailsParam;

	
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="division_id";
//	district
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="district";
		$detailsParam["dOriginalTable"] = "district";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "district";
	$detailsParam["dCaptionTable"] = GetTableCaption("district");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = DP_NONE;
		
	$detailsTablesData["division"][$dIndex] = $detailsParam;

	
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="division_id";
//	university
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="university";
		$detailsParam["dOriginalTable"] = "university";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "university";
	$detailsParam["dCaptionTable"] = GetTableCaption("university");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
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
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "employees";
	$detailsParam["dCaptionTable"] = GetTableCaption("employees");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["division"][$dIndex] = $detailsParam;

	
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="division_id";
//	consultant
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="consultant";
		$detailsParam["dOriginalTable"] = "consultant";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consultant";
	$detailsParam["dCaptionTable"] = GetTableCaption("consultant");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["division"][$dIndex] = $detailsParam;

	
		$detailsTablesData["division"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["division"][$dIndex]["masterKeys"][]="division_id";

				$detailsTablesData["division"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["division"][$dIndex]["detailKeys"][]="divison_id";

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
	"m_strName" => "division_id",
	"m_strTable" => "division",
	"m_srcTableName" => "division"
));

$proto6["m_sql"] = "division_id";
$proto6["m_srcTableName"] = "division";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dname",
	"m_strTable" => "division",
	"m_srcTableName" => "division"
));

$proto8["m_sql"] = "dname";
$proto8["m_srcTableName"] = "division";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "division";
$proto11["m_srcTableName"] = "division";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "division_id";
$proto11["m_columns"][] = "dname";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "division";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "division";
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
$proto0["m_srcTableName"]="division";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_division = createSqlQuery_division();


	
		;

		

$tdatadivision[".sqlquery"] = $queryData_division;

$tableEvents["division"] = new eventsBase;
$tdatadivision[".hasEvents"] = false;

?>