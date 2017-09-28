<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabatch_status = array();
	$tdatabatch_status[".truncateText"] = true;
	$tdatabatch_status[".NumberOfChars"] = 80;
	$tdatabatch_status[".ShortName"] = "batch_status";
	$tdatabatch_status[".OwnerID"] = "";
	$tdatabatch_status[".OriginalTable"] = "batch_status";

//	field labels
$fieldLabelsbatch_status = array();
$fieldToolTipsbatch_status = array();
$pageTitlesbatch_status = array();
$placeHoldersbatch_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbatch_status["English"] = array();
	$fieldToolTipsbatch_status["English"] = array();
	$placeHoldersbatch_status["English"] = array();
	$pageTitlesbatch_status["English"] = array();
	$fieldLabelsbatch_status["English"]["statusid"] = "Statusid";
	$fieldToolTipsbatch_status["English"]["statusid"] = "";
	$placeHoldersbatch_status["English"]["statusid"] = "";
	$fieldLabelsbatch_status["English"]["status"] = "Status";
	$fieldToolTipsbatch_status["English"]["status"] = "";
	$placeHoldersbatch_status["English"]["status"] = "";
	if (count($fieldToolTipsbatch_status["English"]))
		$tdatabatch_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbatch_status[""] = array();
	$fieldToolTipsbatch_status[""] = array();
	$placeHoldersbatch_status[""] = array();
	$pageTitlesbatch_status[""] = array();
	if (count($fieldToolTipsbatch_status[""]))
		$tdatabatch_status[".isUseToolTips"] = true;
}


	$tdatabatch_status[".NCSearch"] = true;



$tdatabatch_status[".shortTableName"] = "batch_status";
$tdatabatch_status[".nSecOptions"] = 0;
$tdatabatch_status[".recsPerRowPrint"] = 1;
$tdatabatch_status[".mainTableOwnerID"] = "";
$tdatabatch_status[".moveNext"] = 1;
$tdatabatch_status[".entityType"] = 0;

$tdatabatch_status[".strOriginalTableName"] = "batch_status";

	



$tdatabatch_status[".showAddInPopup"] = false;

$tdatabatch_status[".showEditInPopup"] = false;

$tdatabatch_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabatch_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabatch_status[".fieldsForRegister"] = array();

$tdatabatch_status[".listAjax"] = false;

	$tdatabatch_status[".audit"] = true;

	$tdatabatch_status[".locking"] = true;






$tdatabatch_status[".reorderRecordsByHeader"] = true;








$tdatabatch_status[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabatch_status[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabatch_status[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabatch_status[".searchSaving"] = false;
//

$tdatabatch_status[".showSearchPanel"] = true;
		$tdatabatch_status[".flexibleSearch"] = true;

$tdatabatch_status[".isUseAjaxSuggest"] = true;

$tdatabatch_status[".rowHighlite"] = true;





$tdatabatch_status[".ajaxCodeSnippetAdded"] = false;

$tdatabatch_status[".buttonsAdded"] = false;

$tdatabatch_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabatch_status[".isUseTimeForSearch"] = false;



$tdatabatch_status[".badgeColor"] = "BC8F8F";


$tdatabatch_status[".allSearchFields"] = array();
$tdatabatch_status[".filterFields"] = array();
$tdatabatch_status[".requiredSearchFields"] = array();



$tdatabatch_status[".googleLikeFields"] = array();
$tdatabatch_status[".googleLikeFields"][] = "statusid";
$tdatabatch_status[".googleLikeFields"][] = "status";



$tdatabatch_status[".tableType"] = "list";

$tdatabatch_status[".printerPageOrientation"] = 0;
$tdatabatch_status[".nPrinterPageScale"] = 100;

$tdatabatch_status[".nPrinterSplitRecords"] = 40;

$tdatabatch_status[".nPrinterPDFSplitRecords"] = 40;



$tdatabatch_status[".geocodingEnabled"] = false;





$tdatabatch_status[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabatch_status[".pageSize"] = 20;

$tdatabatch_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabatch_status[".strOrderBy"] = $tstrOrderBy;

$tdatabatch_status[".orderindexes"] = array();

$tdatabatch_status[".sqlHead"] = "SELECT statusid,  	status";
$tdatabatch_status[".sqlFrom"] = "FROM batch_status";
$tdatabatch_status[".sqlWhereExpr"] = "";
$tdatabatch_status[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabatch_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabatch_status[".arrGroupsPerPage"] = $arrGPP;

$tdatabatch_status[".highlightSearchResults"] = true;

$tableKeysbatch_status = array();
$tableKeysbatch_status[] = "statusid";
$tdatabatch_status[".Keys"] = $tableKeysbatch_status;

$tdatabatch_status[".listFields"] = array();

$tdatabatch_status[".hideMobileList"] = array();


$tdatabatch_status[".viewFields"] = array();

$tdatabatch_status[".addFields"] = array();

$tdatabatch_status[".masterListFields"] = array();
$tdatabatch_status[".masterListFields"][] = "statusid";
$tdatabatch_status[".masterListFields"][] = "status";

$tdatabatch_status[".inlineAddFields"] = array();

$tdatabatch_status[".editFields"] = array();

$tdatabatch_status[".inlineEditFields"] = array();

$tdatabatch_status[".updateSelectedFields"] = array();


$tdatabatch_status[".exportFields"] = array();

$tdatabatch_status[".importFields"] = array();

$tdatabatch_status[".printFields"] = array();


//	statusid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "statusid";
	$fdata["GoodName"] = "statusid";
	$fdata["ownerTable"] = "batch_status";
	$fdata["Label"] = GetFieldLabel("batch_status","statusid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "statusid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusid";

	
	
			
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "batch_schedule";
	$edata["LookupConnId"] = "mydb_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "batch_schedule_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "batch_schedule_id";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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








	$tdatabatch_status["statusid"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "batch_status";
	$fdata["Label"] = GetFieldLabel("batch_status","status");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
			
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








	$tdatabatch_status["status"] = $fdata;


$tables_data["batch_status"]=&$tdatabatch_status;
$field_labels["batch_status"] = &$fieldLabelsbatch_status;
$fieldToolTips["batch_status"] = &$fieldToolTipsbatch_status;
$placeHolders["batch_status"] = &$placeHoldersbatch_status;
$page_titles["batch_status"] = &$pageTitlesbatch_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["batch_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["batch_status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_batch_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "statusid,  	status";
$proto0["m_strFrom"] = "FROM batch_status";
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
	"m_strName" => "statusid",
	"m_strTable" => "batch_status",
	"m_srcTableName" => "batch_status"
));

$proto6["m_sql"] = "statusid";
$proto6["m_srcTableName"] = "batch_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "batch_status",
	"m_srcTableName" => "batch_status"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "batch_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "batch_status";
$proto11["m_srcTableName"] = "batch_status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "statusid";
$proto11["m_columns"][] = "status";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "batch_status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "batch_status";
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
$proto0["m_srcTableName"]="batch_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_batch_status = createSqlQuery_batch_status();


	
		;

		

$tdatabatch_status[".sqlquery"] = $queryData_batch_status;

$tableEvents["batch_status"] = new eventsBase;
$tdatabatch_status[".hasEvents"] = false;

?>