<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabatch_completion_status = array();
	$tdatabatch_completion_status[".truncateText"] = true;
	$tdatabatch_completion_status[".NumberOfChars"] = 80;
	$tdatabatch_completion_status[".ShortName"] = "batch_completion_status";
	$tdatabatch_completion_status[".OwnerID"] = "";
	$tdatabatch_completion_status[".OriginalTable"] = "batch_completion_status";

//	field labels
$fieldLabelsbatch_completion_status = array();
$fieldToolTipsbatch_completion_status = array();
$pageTitlesbatch_completion_status = array();
$placeHoldersbatch_completion_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatch_completion_status["English"] = array();
	$fieldToolTipsbatch_completion_status["English"] = array();
	$placeHoldersbatch_completion_status["English"] = array();
	$pageTitlesbatch_completion_status["English"] = array();
	$fieldLabelsbatch_completion_status["English"]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatch_completion_status["English"]["Batchcode"] = "";
	$placeHoldersbatch_completion_status["English"]["Batchcode"] = "";
	$fieldLabelsbatch_completion_status["English"]["Progress"] = "Progress";
	$fieldToolTipsbatch_completion_status["English"]["Progress"] = "";
	$placeHoldersbatch_completion_status["English"]["Progress"] = "";
	if (count($fieldToolTipsbatch_completion_status["English"]))
		$tdatabatch_completion_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatch_completion_status[""] = array();
	$fieldToolTipsbatch_completion_status[""] = array();
	$placeHoldersbatch_completion_status[""] = array();
	$pageTitlesbatch_completion_status[""] = array();
	$fieldLabelsbatch_completion_status[""]["Batchcode"] = "Batchcode";
	$fieldToolTipsbatch_completion_status[""]["Batchcode"] = "";
	$placeHoldersbatch_completion_status[""]["Batchcode"] = "";
	$fieldLabelsbatch_completion_status[""]["Progress"] = "Progress";
	$fieldToolTipsbatch_completion_status[""]["Progress"] = "";
	$placeHoldersbatch_completion_status[""]["Progress"] = "";
	if (count($fieldToolTipsbatch_completion_status[""]))
		$tdatabatch_completion_status[".isUseToolTips"] = true;
}


	$tdatabatch_completion_status[".NCSearch"] = true;



$tdatabatch_completion_status[".shortTableName"] = "batch_completion_status";
$tdatabatch_completion_status[".nSecOptions"] = 0;
$tdatabatch_completion_status[".recsPerRowPrint"] = 1;
$tdatabatch_completion_status[".mainTableOwnerID"] = "";
$tdatabatch_completion_status[".moveNext"] = 1;
$tdatabatch_completion_status[".entityType"] = 0;

$tdatabatch_completion_status[".strOriginalTableName"] = "batch_completion_status";

	



$tdatabatch_completion_status[".showAddInPopup"] = false;

$tdatabatch_completion_status[".showEditInPopup"] = false;

$tdatabatch_completion_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabatch_completion_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabatch_completion_status[".fieldsForRegister"] = array();

$tdatabatch_completion_status[".listAjax"] = false;

	$tdatabatch_completion_status[".audit"] = false;

	$tdatabatch_completion_status[".locking"] = false;



$tdatabatch_completion_status[".list"] = true;



$tdatabatch_completion_status[".reorderRecordsByHeader"] = true;


$tdatabatch_completion_status[".exportFormatting"] = 2;
$tdatabatch_completion_status[".exportDelimiter"] = ",";
		

$tdatabatch_completion_status[".import"] = true;

$tdatabatch_completion_status[".exportTo"] = true;

$tdatabatch_completion_status[".printFriendly"] = true;


$tdatabatch_completion_status[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabatch_completion_status[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabatch_completion_status[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabatch_completion_status[".searchSaving"] = false;
//

$tdatabatch_completion_status[".showSearchPanel"] = true;
		$tdatabatch_completion_status[".flexibleSearch"] = true;

$tdatabatch_completion_status[".isUseAjaxSuggest"] = true;

$tdatabatch_completion_status[".rowHighlite"] = true;



			

$tdatabatch_completion_status[".ajaxCodeSnippetAdded"] = false;

$tdatabatch_completion_status[".buttonsAdded"] = false;

$tdatabatch_completion_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatch_completion_status[".isUseTimeForSearch"] = false;





$tdatabatch_completion_status[".allSearchFields"] = array();
$tdatabatch_completion_status[".filterFields"] = array();
$tdatabatch_completion_status[".requiredSearchFields"] = array();

$tdatabatch_completion_status[".allSearchFields"][] = "Batchcode";
	$tdatabatch_completion_status[".allSearchFields"][] = "Progress";
	

$tdatabatch_completion_status[".googleLikeFields"] = array();
$tdatabatch_completion_status[".googleLikeFields"][] = "Batchcode";
$tdatabatch_completion_status[".googleLikeFields"][] = "Progress";


$tdatabatch_completion_status[".advSearchFields"] = array();
$tdatabatch_completion_status[".advSearchFields"][] = "Batchcode";
$tdatabatch_completion_status[".advSearchFields"][] = "Progress";

$tdatabatch_completion_status[".tableType"] = "list";

$tdatabatch_completion_status[".printerPageOrientation"] = 0;
$tdatabatch_completion_status[".nPrinterPageScale"] = 100;

$tdatabatch_completion_status[".nPrinterSplitRecords"] = 40;

$tdatabatch_completion_status[".nPrinterPDFSplitRecords"] = 40;



$tdatabatch_completion_status[".geocodingEnabled"] = false;





$tdatabatch_completion_status[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabatch_completion_status[".pageSize"] = 20;

$tdatabatch_completion_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatch_completion_status[".strOrderBy"] = $tstrOrderBy;

$tdatabatch_completion_status[".orderindexes"] = array();

$tdatabatch_completion_status[".sqlHead"] = "SELECT Batchcode,  	Progress";
$tdatabatch_completion_status[".sqlFrom"] = "FROM batch_completion_status";
$tdatabatch_completion_status[".sqlWhereExpr"] = "";
$tdatabatch_completion_status[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabatch_completion_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabatch_completion_status[".arrGroupsPerPage"] = $arrGPP;

$tdatabatch_completion_status[".highlightSearchResults"] = true;

$tableKeysbatch_completion_status = array();
$tableKeysbatch_completion_status[] = "Batchcode";
$tdatabatch_completion_status[".Keys"] = $tableKeysbatch_completion_status;

$tdatabatch_completion_status[".listFields"] = array();
$tdatabatch_completion_status[".listFields"][] = "Batchcode";
$tdatabatch_completion_status[".listFields"][] = "Progress";

$tdatabatch_completion_status[".hideMobileList"] = array();


$tdatabatch_completion_status[".viewFields"] = array();

$tdatabatch_completion_status[".addFields"] = array();

$tdatabatch_completion_status[".masterListFields"] = array();
$tdatabatch_completion_status[".masterListFields"][] = "Batchcode";
$tdatabatch_completion_status[".masterListFields"][] = "Progress";

$tdatabatch_completion_status[".inlineAddFields"] = array();

$tdatabatch_completion_status[".editFields"] = array();

$tdatabatch_completion_status[".inlineEditFields"] = array();

$tdatabatch_completion_status[".updateSelectedFields"] = array();


$tdatabatch_completion_status[".exportFields"] = array();
$tdatabatch_completion_status[".exportFields"][] = "Batchcode";
$tdatabatch_completion_status[".exportFields"][] = "Progress";

$tdatabatch_completion_status[".importFields"] = array();
$tdatabatch_completion_status[".importFields"][] = "Batchcode";
$tdatabatch_completion_status[".importFields"][] = "Progress";

$tdatabatch_completion_status[".printFields"] = array();
$tdatabatch_completion_status[".printFields"][] = "Batchcode";
$tdatabatch_completion_status[".printFields"][] = "Progress";


//	Batchcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Batchcode";
	$fdata["GoodName"] = "Batchcode";
	$fdata["ownerTable"] = "batch_completion_status";
	$fdata["Label"] = GetFieldLabel("batch_completion_status","Batchcode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatabatch_completion_status["Batchcode"] = $fdata;
//	Progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Progress";
	$fdata["GoodName"] = "Progress";
	$fdata["ownerTable"] = "batch_completion_status";
	$fdata["Label"] = GetFieldLabel("batch_completion_status","Progress");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Progress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Progress";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdatabatch_completion_status["Progress"] = $fdata;


$tables_data["batch_completion_status"]=&$tdatabatch_completion_status;
$field_labels["batch_completion_status"] = &$fieldLabelsbatch_completion_status;
$fieldToolTips["batch_completion_status"] = &$fieldToolTipsbatch_completion_status;
$placeHolders["batch_completion_status"] = &$placeHoldersbatch_completion_status;
$page_titles["batch_completion_status"] = &$pageTitlesbatch_completion_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batch_completion_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["batch_completion_status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batch_completion_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Batchcode,  	Progress";
$proto0["m_strFrom"] = "FROM batch_completion_status";
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
	"m_strName" => "Batchcode",
	"m_strTable" => "batch_completion_status",
	"m_srcTableName" => "batch_completion_status"
));

$proto6["m_sql"] = "Batchcode";
$proto6["m_srcTableName"] = "batch_completion_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Progress",
	"m_strTable" => "batch_completion_status",
	"m_srcTableName" => "batch_completion_status"
));

$proto8["m_sql"] = "Progress";
$proto8["m_srcTableName"] = "batch_completion_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "batch_completion_status";
$proto11["m_srcTableName"] = "batch_completion_status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Batchcode";
$proto11["m_columns"][] = "Progress";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "batch_completion_status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "batch_completion_status";
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
$proto0["m_srcTableName"]="batch_completion_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batch_completion_status = createSqlQuery_batch_completion_status();


	
		;

		

$tdatabatch_completion_status[".sqlquery"] = $queryData_batch_completion_status;

$tableEvents["batch_completion_status"] = new eventsBase;
$tdatabatch_completion_status[".hasEvents"] = false;

?>