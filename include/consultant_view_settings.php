<?php
require_once(getabspath("classes/cipherer.php"));




$tdataconsultant_view = array();
	$tdataconsultant_view[".truncateText"] = true;
	$tdataconsultant_view[".NumberOfChars"] = 80;
	$tdataconsultant_view[".ShortName"] = "consultant_view";
	$tdataconsultant_view[".OwnerID"] = "";
	$tdataconsultant_view[".OriginalTable"] = "consultant_view";

//	field labels
$fieldLabelsconsultant_view = array();
$fieldToolTipsconsultant_view = array();
$pageTitlesconsultant_view = array();
$placeHoldersconsultant_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsultant_view["English"] = array();
	$fieldToolTipsconsultant_view["English"] = array();
	$placeHoldersconsultant_view["English"] = array();
	$pageTitlesconsultant_view["English"] = array();
	$fieldLabelsconsultant_view["English"]["consultant_id"] = "Consultant Id";
	$fieldToolTipsconsultant_view["English"]["consultant_id"] = "";
	$placeHoldersconsultant_view["English"]["consultant_id"] = "";
	$fieldLabelsconsultant_view["English"]["eid"] = "Eid";
	$fieldToolTipsconsultant_view["English"]["eid"] = "";
	$placeHoldersconsultant_view["English"]["eid"] = "";
	$fieldLabelsconsultant_view["English"]["ename"] = "Ename";
	$fieldToolTipsconsultant_view["English"]["ename"] = "";
	$placeHoldersconsultant_view["English"]["ename"] = "";
	if (count($fieldToolTipsconsultant_view["English"]))
		$tdataconsultant_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsconsultant_view[""] = array();
	$fieldToolTipsconsultant_view[""] = array();
	$placeHoldersconsultant_view[""] = array();
	$pageTitlesconsultant_view[""] = array();
	$fieldLabelsconsultant_view[""]["consultant_id"] = "Consultant Id";
	$fieldToolTipsconsultant_view[""]["consultant_id"] = "";
	$placeHoldersconsultant_view[""]["consultant_id"] = "";
	$fieldLabelsconsultant_view[""]["eid"] = "Eid";
	$fieldToolTipsconsultant_view[""]["eid"] = "";
	$placeHoldersconsultant_view[""]["eid"] = "";
	$fieldLabelsconsultant_view[""]["ename"] = "Ename";
	$fieldToolTipsconsultant_view[""]["ename"] = "";
	$placeHoldersconsultant_view[""]["ename"] = "";
	if (count($fieldToolTipsconsultant_view[""]))
		$tdataconsultant_view[".isUseToolTips"] = true;
}


	$tdataconsultant_view[".NCSearch"] = true;



$tdataconsultant_view[".shortTableName"] = "consultant_view";
$tdataconsultant_view[".nSecOptions"] = 0;
$tdataconsultant_view[".recsPerRowPrint"] = 1;
$tdataconsultant_view[".mainTableOwnerID"] = "";
$tdataconsultant_view[".moveNext"] = 1;
$tdataconsultant_view[".entityType"] = 0;

$tdataconsultant_view[".strOriginalTableName"] = "consultant_view";

	



$tdataconsultant_view[".showAddInPopup"] = false;

$tdataconsultant_view[".showEditInPopup"] = false;

$tdataconsultant_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconsultant_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconsultant_view[".fieldsForRegister"] = array();

$tdataconsultant_view[".listAjax"] = false;

	$tdataconsultant_view[".audit"] = false;

	$tdataconsultant_view[".locking"] = false;






$tdataconsultant_view[".reorderRecordsByHeader"] = true;








$tdataconsultant_view[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataconsultant_view[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataconsultant_view[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataconsultant_view[".searchSaving"] = false;
//

$tdataconsultant_view[".showSearchPanel"] = true;
		$tdataconsultant_view[".flexibleSearch"] = true;

$tdataconsultant_view[".isUseAjaxSuggest"] = true;

$tdataconsultant_view[".rowHighlite"] = true;



			

$tdataconsultant_view[".ajaxCodeSnippetAdded"] = false;

$tdataconsultant_view[".buttonsAdded"] = false;

$tdataconsultant_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsultant_view[".isUseTimeForSearch"] = false;





$tdataconsultant_view[".allSearchFields"] = array();
$tdataconsultant_view[".filterFields"] = array();
$tdataconsultant_view[".requiredSearchFields"] = array();



$tdataconsultant_view[".googleLikeFields"] = array();
$tdataconsultant_view[".googleLikeFields"][] = "consultant_id";
$tdataconsultant_view[".googleLikeFields"][] = "eid";
$tdataconsultant_view[".googleLikeFields"][] = "ename";



$tdataconsultant_view[".tableType"] = "list";

$tdataconsultant_view[".printerPageOrientation"] = 0;
$tdataconsultant_view[".nPrinterPageScale"] = 100;

$tdataconsultant_view[".nPrinterSplitRecords"] = 40;

$tdataconsultant_view[".nPrinterPDFSplitRecords"] = 40;



$tdataconsultant_view[".geocodingEnabled"] = false;





$tdataconsultant_view[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataconsultant_view[".pageSize"] = 20;

$tdataconsultant_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconsultant_view[".strOrderBy"] = $tstrOrderBy;

$tdataconsultant_view[".orderindexes"] = array();

$tdataconsultant_view[".sqlHead"] = "SELECT consultant_id,  	eid,  	ename";
$tdataconsultant_view[".sqlFrom"] = "FROM consultant_view";
$tdataconsultant_view[".sqlWhereExpr"] = "";
$tdataconsultant_view[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsultant_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsultant_view[".arrGroupsPerPage"] = $arrGPP;

$tdataconsultant_view[".highlightSearchResults"] = true;

$tableKeysconsultant_view = array();
$tdataconsultant_view[".Keys"] = $tableKeysconsultant_view;

$tdataconsultant_view[".listFields"] = array();
$tdataconsultant_view[".listFields"][] = "consultant_id";
$tdataconsultant_view[".listFields"][] = "eid";
$tdataconsultant_view[".listFields"][] = "ename";

$tdataconsultant_view[".hideMobileList"] = array();


$tdataconsultant_view[".viewFields"] = array();
$tdataconsultant_view[".viewFields"][] = "consultant_id";
$tdataconsultant_view[".viewFields"][] = "eid";
$tdataconsultant_view[".viewFields"][] = "ename";

$tdataconsultant_view[".addFields"] = array();
$tdataconsultant_view[".addFields"][] = "consultant_id";
$tdataconsultant_view[".addFields"][] = "eid";
$tdataconsultant_view[".addFields"][] = "ename";

$tdataconsultant_view[".masterListFields"] = array();
$tdataconsultant_view[".masterListFields"][] = "consultant_id";
$tdataconsultant_view[".masterListFields"][] = "eid";
$tdataconsultant_view[".masterListFields"][] = "ename";

$tdataconsultant_view[".inlineAddFields"] = array();
$tdataconsultant_view[".inlineAddFields"][] = "consultant_id";
$tdataconsultant_view[".inlineAddFields"][] = "eid";
$tdataconsultant_view[".inlineAddFields"][] = "ename";

$tdataconsultant_view[".editFields"] = array();
$tdataconsultant_view[".editFields"][] = "consultant_id";
$tdataconsultant_view[".editFields"][] = "eid";
$tdataconsultant_view[".editFields"][] = "ename";

$tdataconsultant_view[".inlineEditFields"] = array();
$tdataconsultant_view[".inlineEditFields"][] = "consultant_id";
$tdataconsultant_view[".inlineEditFields"][] = "eid";
$tdataconsultant_view[".inlineEditFields"][] = "ename";

$tdataconsultant_view[".updateSelectedFields"] = array();
$tdataconsultant_view[".updateSelectedFields"][] = "consultant_id";
$tdataconsultant_view[".updateSelectedFields"][] = "eid";
$tdataconsultant_view[".updateSelectedFields"][] = "ename";


$tdataconsultant_view[".exportFields"] = array();
$tdataconsultant_view[".exportFields"][] = "consultant_id";
$tdataconsultant_view[".exportFields"][] = "eid";
$tdataconsultant_view[".exportFields"][] = "ename";

$tdataconsultant_view[".importFields"] = array();
$tdataconsultant_view[".importFields"][] = "consultant_id";
$tdataconsultant_view[".importFields"][] = "eid";
$tdataconsultant_view[".importFields"][] = "ename";

$tdataconsultant_view[".printFields"] = array();
$tdataconsultant_view[".printFields"][] = "consultant_id";
$tdataconsultant_view[".printFields"][] = "eid";
$tdataconsultant_view[".printFields"][] = "ename";


//	consultant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "consultant_id";
	$fdata["GoodName"] = "consultant_id";
	$fdata["ownerTable"] = "consultant_view";
	$fdata["Label"] = GetFieldLabel("consultant_view","consultant_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataconsultant_view["consultant_id"] = $fdata;
//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "consultant_view";
	$fdata["Label"] = GetFieldLabel("consultant_view","eid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataconsultant_view["eid"] = $fdata;
//	ename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ename";
	$fdata["GoodName"] = "ename";
	$fdata["ownerTable"] = "consultant_view";
	$fdata["Label"] = GetFieldLabel("consultant_view","ename");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdataconsultant_view["ename"] = $fdata;


$tables_data["consultant_view"]=&$tdataconsultant_view;
$field_labels["consultant_view"] = &$fieldLabelsconsultant_view;
$fieldToolTips["consultant_view"] = &$fieldToolTipsconsultant_view;
$placeHolders["consultant_view"] = &$placeHoldersconsultant_view;
$page_titles["consultant_view"] = &$pageTitlesconsultant_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["consultant_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["consultant_view"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_consultant_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "consultant_id,  	eid,  	ename";
$proto0["m_strFrom"] = "FROM consultant_view";
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
	"m_strTable" => "consultant_view",
	"m_srcTableName" => "consultant_view"
));

$proto6["m_sql"] = "consultant_id";
$proto6["m_srcTableName"] = "consultant_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "consultant_view",
	"m_srcTableName" => "consultant_view"
));

$proto8["m_sql"] = "eid";
$proto8["m_srcTableName"] = "consultant_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ename",
	"m_strTable" => "consultant_view",
	"m_srcTableName" => "consultant_view"
));

$proto10["m_sql"] = "ename";
$proto10["m_srcTableName"] = "consultant_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "consultant_view";
$proto13["m_srcTableName"] = "consultant_view";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "consultant_id";
$proto13["m_columns"][] = "eid";
$proto13["m_columns"][] = "ename";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "consultant_view";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "consultant_view";
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
$proto0["m_srcTableName"]="consultant_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consultant_view = createSqlQuery_consultant_view();


	
		;

			

$tdataconsultant_view[".sqlquery"] = $queryData_consultant_view;

$tableEvents["consultant_view"] = new eventsBase;
$tdataconsultant_view[".hasEvents"] = false;

?>