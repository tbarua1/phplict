<?php
require_once(getabspath("classes/cipherer.php"));




$tdataemployee = array();
	$tdataemployee[".truncateText"] = true;
	$tdataemployee[".NumberOfChars"] = 80;
	$tdataemployee[".ShortName"] = "employee";
	$tdataemployee[".OwnerID"] = "";
	$tdataemployee[".OriginalTable"] = "employee";

//	field labels
$fieldLabelsemployee = array();
$fieldToolTipsemployee = array();
$pageTitlesemployee = array();
$placeHoldersemployee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployee["English"] = array();
	$fieldToolTipsemployee["English"] = array();
	$placeHoldersemployee["English"] = array();
	$pageTitlesemployee["English"] = array();
	$fieldLabelsemployee["English"]["eid"] = "Eid";
	$fieldToolTipsemployee["English"]["eid"] = "";
	$placeHoldersemployee["English"]["eid"] = "";
	$fieldLabelsemployee["English"]["ename"] = "Ename";
	$fieldToolTipsemployee["English"]["ename"] = "";
	$placeHoldersemployee["English"]["ename"] = "";
	$fieldLabelsemployee["English"]["designation"] = "Designation";
	$fieldToolTipsemployee["English"]["designation"] = "";
	$placeHoldersemployee["English"]["designation"] = "";
	if (count($fieldToolTipsemployee["English"]))
		$tdataemployee[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsemployee[""] = array();
	$fieldToolTipsemployee[""] = array();
	$placeHoldersemployee[""] = array();
	$pageTitlesemployee[""] = array();
	if (count($fieldToolTipsemployee[""]))
		$tdataemployee[".isUseToolTips"] = true;
}


	$tdataemployee[".NCSearch"] = true;



$tdataemployee[".shortTableName"] = "employee";
$tdataemployee[".nSecOptions"] = 0;
$tdataemployee[".recsPerRowPrint"] = 1;
$tdataemployee[".mainTableOwnerID"] = "";
$tdataemployee[".moveNext"] = 1;
$tdataemployee[".entityType"] = 0;

$tdataemployee[".strOriginalTableName"] = "employee";

	



$tdataemployee[".showAddInPopup"] = false;

$tdataemployee[".showEditInPopup"] = false;

$tdataemployee[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployee[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployee[".fieldsForRegister"] = array();

$tdataemployee[".listAjax"] = false;

	$tdataemployee[".audit"] = false;

	$tdataemployee[".locking"] = false;

$tdataemployee[".edit"] = true;
$tdataemployee[".afterEditAction"] = 1;
$tdataemployee[".closePopupAfterEdit"] = 1;
$tdataemployee[".afterEditActionDetTable"] = "";

$tdataemployee[".add"] = true;
$tdataemployee[".afterAddAction"] = 1;
$tdataemployee[".closePopupAfterAdd"] = 1;
$tdataemployee[".afterAddActionDetTable"] = "";

$tdataemployee[".list"] = true;



$tdataemployee[".reorderRecordsByHeader"] = true;


$tdataemployee[".exportFormatting"] = 2;
$tdataemployee[".exportDelimiter"] = ",";
		
$tdataemployee[".view"] = true;

$tdataemployee[".import"] = true;

$tdataemployee[".exportTo"] = true;

$tdataemployee[".printFriendly"] = true;

$tdataemployee[".delete"] = true;

$tdataemployee[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataemployee[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataemployee[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataemployee[".searchSaving"] = false;
//

$tdataemployee[".showSearchPanel"] = true;
		$tdataemployee[".flexibleSearch"] = true;

$tdataemployee[".isUseAjaxSuggest"] = true;

$tdataemployee[".rowHighlite"] = true;





$tdataemployee[".ajaxCodeSnippetAdded"] = false;

$tdataemployee[".buttonsAdded"] = false;

$tdataemployee[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployee[".isUseTimeForSearch"] = false;





$tdataemployee[".allSearchFields"] = array();
$tdataemployee[".filterFields"] = array();
$tdataemployee[".requiredSearchFields"] = array();

$tdataemployee[".allSearchFields"][] = "eid";
	$tdataemployee[".allSearchFields"][] = "ename";
	$tdataemployee[".allSearchFields"][] = "designation";
	

$tdataemployee[".googleLikeFields"] = array();
$tdataemployee[".googleLikeFields"][] = "eid";
$tdataemployee[".googleLikeFields"][] = "ename";
$tdataemployee[".googleLikeFields"][] = "designation";


$tdataemployee[".advSearchFields"] = array();
$tdataemployee[".advSearchFields"][] = "eid";
$tdataemployee[".advSearchFields"][] = "ename";
$tdataemployee[".advSearchFields"][] = "designation";

$tdataemployee[".tableType"] = "list";

$tdataemployee[".printerPageOrientation"] = 0;
$tdataemployee[".nPrinterPageScale"] = 100;

$tdataemployee[".nPrinterSplitRecords"] = 40;

$tdataemployee[".nPrinterPDFSplitRecords"] = 40;



$tdataemployee[".geocodingEnabled"] = false;





$tdataemployee[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataemployee[".pageSize"] = 20;

$tdataemployee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployee[".strOrderBy"] = $tstrOrderBy;

$tdataemployee[".orderindexes"] = array();

$tdataemployee[".sqlHead"] = "SELECT eid,  	ename,  	designation";
$tdataemployee[".sqlFrom"] = "FROM employee";
$tdataemployee[".sqlWhereExpr"] = "";
$tdataemployee[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployee[".arrGroupsPerPage"] = $arrGPP;

$tdataemployee[".highlightSearchResults"] = true;

$tableKeysemployee = array();
$tableKeysemployee[] = "eid";
$tdataemployee[".Keys"] = $tableKeysemployee;

$tdataemployee[".listFields"] = array();
$tdataemployee[".listFields"][] = "eid";
$tdataemployee[".listFields"][] = "ename";
$tdataemployee[".listFields"][] = "designation";

$tdataemployee[".hideMobileList"] = array();


$tdataemployee[".viewFields"] = array();
$tdataemployee[".viewFields"][] = "eid";
$tdataemployee[".viewFields"][] = "ename";
$tdataemployee[".viewFields"][] = "designation";

$tdataemployee[".addFields"] = array();
$tdataemployee[".addFields"][] = "ename";
$tdataemployee[".addFields"][] = "designation";

$tdataemployee[".masterListFields"] = array();
$tdataemployee[".masterListFields"][] = "eid";
$tdataemployee[".masterListFields"][] = "ename";
$tdataemployee[".masterListFields"][] = "designation";

$tdataemployee[".inlineAddFields"] = array();
$tdataemployee[".inlineAddFields"][] = "ename";
$tdataemployee[".inlineAddFields"][] = "designation";

$tdataemployee[".editFields"] = array();
$tdataemployee[".editFields"][] = "ename";
$tdataemployee[".editFields"][] = "designation";

$tdataemployee[".inlineEditFields"] = array();
$tdataemployee[".inlineEditFields"][] = "ename";
$tdataemployee[".inlineEditFields"][] = "designation";

$tdataemployee[".updateSelectedFields"] = array();
$tdataemployee[".updateSelectedFields"][] = "ename";
$tdataemployee[".updateSelectedFields"][] = "designation";


$tdataemployee[".exportFields"] = array();
$tdataemployee[".exportFields"][] = "eid";
$tdataemployee[".exportFields"][] = "ename";
$tdataemployee[".exportFields"][] = "designation";

$tdataemployee[".importFields"] = array();
$tdataemployee[".importFields"][] = "eid";
$tdataemployee[".importFields"][] = "ename";
$tdataemployee[".importFields"][] = "designation";

$tdataemployee[".printFields"] = array();
$tdataemployee[".printFields"][] = "eid";
$tdataemployee[".printFields"][] = "ename";
$tdataemployee[".printFields"][] = "designation";


//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","eid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataemployee["eid"] = $fdata;
//	ename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ename";
	$fdata["GoodName"] = "ename";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","ename");
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

		$fdata["strField"] = "ename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ename";

	
	
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




	$tdataemployee["ename"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","designation");
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

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";

	
	
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




	$tdataemployee["designation"] = $fdata;


$tables_data["employee"]=&$tdataemployee;
$field_labels["employee"] = &$fieldLabelsemployee;
$fieldToolTips["employee"] = &$fieldToolTipsemployee;
$placeHolders["employee"] = &$placeHoldersemployee;
$page_titles["employee"] = &$pageTitlesemployee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employee"] = array();
//	consultant
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="consultant";
		$detailsParam["dOriginalTable"] = "consultant";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "consultant";
	$detailsParam["dCaptionTable"] = GetTableCaption("consultant");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="eid";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="eid";
//	empdetails
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="empdetails";
		$detailsParam["dOriginalTable"] = "empdetails";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "empdetails";
	$detailsParam["dCaptionTable"] = GetTableCaption("empdetails");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="eid";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="eid";

// tables which are master tables for current table (detail)
$masterTablesData["employee"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_employee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	ename,  	designation";
$proto0["m_strFrom"] = "FROM employee";
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
	"m_strName" => "eid",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "employee";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto8["m_sql"] = "ename";
$proto8["m_srcTableName"] = "employee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto10["m_sql"] = "designation";
$proto10["m_srcTableName"] = "employee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "employee";
$proto13["m_srcTableName"] = "employee";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "eid";
$proto13["m_columns"][] = "ename";
$proto13["m_columns"][] = "designation";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "employee";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "employee";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="employee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employee = createSqlQuery_employee();


	
		;

			

$tdataemployee[".sqlquery"] = $queryData_employee;

$tableEvents["employee"] = new eventsBase;
$tdataemployee[".hasEvents"] = false;

?>