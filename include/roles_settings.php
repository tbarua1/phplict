<?php
require_once(getabspath("classes/cipherer.php"));




$tdataroles = array();
	$tdataroles[".truncateText"] = true;
	$tdataroles[".NumberOfChars"] = 80;
	$tdataroles[".ShortName"] = "roles";
	$tdataroles[".OwnerID"] = "";
	$tdataroles[".OriginalTable"] = "roles";

//	field labels
$fieldLabelsroles = array();
$fieldToolTipsroles = array();
$pageTitlesroles = array();
$placeHoldersroles = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsroles["English"] = array();
	$fieldToolTipsroles["English"] = array();
	$placeHoldersroles["English"] = array();
	$pageTitlesroles["English"] = array();
	$fieldLabelsroles["English"]["roleid"] = "Roleid";
	$fieldToolTipsroles["English"]["roleid"] = "";
	$placeHoldersroles["English"]["roleid"] = "";
	$fieldLabelsroles["English"]["rolename"] = "Rolename";
	$fieldToolTipsroles["English"]["rolename"] = "";
	$placeHoldersroles["English"]["rolename"] = "";
	$fieldLabelsroles["English"]["remark"] = "Remark";
	$fieldToolTipsroles["English"]["remark"] = "";
	$placeHoldersroles["English"]["remark"] = "";
	if (count($fieldToolTipsroles["English"]))
		$tdataroles[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsroles[""] = array();
	$fieldToolTipsroles[""] = array();
	$placeHoldersroles[""] = array();
	$pageTitlesroles[""] = array();
	if (count($fieldToolTipsroles[""]))
		$tdataroles[".isUseToolTips"] = true;
}


	$tdataroles[".NCSearch"] = true;



$tdataroles[".shortTableName"] = "roles";
$tdataroles[".nSecOptions"] = 0;
$tdataroles[".recsPerRowPrint"] = 1;
$tdataroles[".mainTableOwnerID"] = "";
$tdataroles[".moveNext"] = 1;
$tdataroles[".entityType"] = 0;

$tdataroles[".strOriginalTableName"] = "roles";

	



$tdataroles[".showAddInPopup"] = false;

$tdataroles[".showEditInPopup"] = false;

$tdataroles[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataroles[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataroles[".fieldsForRegister"] = array();

$tdataroles[".listAjax"] = false;

	$tdataroles[".audit"] = true;

	$tdataroles[".locking"] = true;

$tdataroles[".edit"] = true;
$tdataroles[".afterEditAction"] = 1;
$tdataroles[".closePopupAfterEdit"] = 1;
$tdataroles[".afterEditActionDetTable"] = "";

$tdataroles[".add"] = true;
$tdataroles[".afterAddAction"] = 1;
$tdataroles[".closePopupAfterAdd"] = 1;
$tdataroles[".afterAddActionDetTable"] = "";

$tdataroles[".list"] = true;



$tdataroles[".reorderRecordsByHeader"] = true;


$tdataroles[".exportFormatting"] = 2;
$tdataroles[".exportDelimiter"] = ",";
		
$tdataroles[".view"] = true;

$tdataroles[".import"] = true;

$tdataroles[".exportTo"] = true;

$tdataroles[".printFriendly"] = true;

$tdataroles[".delete"] = true;

$tdataroles[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataroles[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataroles[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataroles[".searchSaving"] = false;
//

$tdataroles[".showSearchPanel"] = true;
		$tdataroles[".flexibleSearch"] = true;

$tdataroles[".isUseAjaxSuggest"] = true;

$tdataroles[".rowHighlite"] = true;





$tdataroles[".ajaxCodeSnippetAdded"] = false;

$tdataroles[".buttonsAdded"] = false;

$tdataroles[".addPageEvents"] = false;

// use timepicker for search panel
$tdataroles[".isUseTimeForSearch"] = false;





$tdataroles[".allSearchFields"] = array();
$tdataroles[".filterFields"] = array();
$tdataroles[".requiredSearchFields"] = array();

$tdataroles[".allSearchFields"][] = "roleid";
	$tdataroles[".allSearchFields"][] = "rolename";
	$tdataroles[".allSearchFields"][] = "remark";
	

$tdataroles[".googleLikeFields"] = array();
$tdataroles[".googleLikeFields"][] = "roleid";
$tdataroles[".googleLikeFields"][] = "rolename";
$tdataroles[".googleLikeFields"][] = "remark";


$tdataroles[".advSearchFields"] = array();
$tdataroles[".advSearchFields"][] = "roleid";
$tdataroles[".advSearchFields"][] = "rolename";
$tdataroles[".advSearchFields"][] = "remark";

$tdataroles[".tableType"] = "list";

$tdataroles[".printerPageOrientation"] = 0;
$tdataroles[".nPrinterPageScale"] = 100;

$tdataroles[".nPrinterSplitRecords"] = 40;

$tdataroles[".nPrinterPDFSplitRecords"] = 40;



$tdataroles[".geocodingEnabled"] = false;





$tdataroles[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataroles[".pageSize"] = 20;

$tdataroles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataroles[".strOrderBy"] = $tstrOrderBy;

$tdataroles[".orderindexes"] = array();

$tdataroles[".sqlHead"] = "SELECT roleid,  	rolename,  	remark";
$tdataroles[".sqlFrom"] = "FROM roles";
$tdataroles[".sqlWhereExpr"] = "";
$tdataroles[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataroles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataroles[".arrGroupsPerPage"] = $arrGPP;

$tdataroles[".highlightSearchResults"] = true;

$tableKeysroles = array();
$tableKeysroles[] = "roleid";
$tdataroles[".Keys"] = $tableKeysroles;

$tdataroles[".listFields"] = array();
$tdataroles[".listFields"][] = "roleid";
$tdataroles[".listFields"][] = "rolename";
$tdataroles[".listFields"][] = "remark";

$tdataroles[".hideMobileList"] = array();


$tdataroles[".viewFields"] = array();
$tdataroles[".viewFields"][] = "roleid";
$tdataroles[".viewFields"][] = "rolename";
$tdataroles[".viewFields"][] = "remark";

$tdataroles[".addFields"] = array();
$tdataroles[".addFields"][] = "rolename";
$tdataroles[".addFields"][] = "remark";

$tdataroles[".masterListFields"] = array();
$tdataroles[".masterListFields"][] = "roleid";
$tdataroles[".masterListFields"][] = "rolename";
$tdataroles[".masterListFields"][] = "remark";

$tdataroles[".inlineAddFields"] = array();
$tdataroles[".inlineAddFields"][] = "rolename";
$tdataroles[".inlineAddFields"][] = "remark";

$tdataroles[".editFields"] = array();
$tdataroles[".editFields"][] = "rolename";
$tdataroles[".editFields"][] = "remark";

$tdataroles[".inlineEditFields"] = array();
$tdataroles[".inlineEditFields"][] = "rolename";
$tdataroles[".inlineEditFields"][] = "remark";

$tdataroles[".updateSelectedFields"] = array();
$tdataroles[".updateSelectedFields"][] = "rolename";
$tdataroles[".updateSelectedFields"][] = "remark";


$tdataroles[".exportFields"] = array();
$tdataroles[".exportFields"][] = "roleid";
$tdataroles[".exportFields"][] = "rolename";
$tdataroles[".exportFields"][] = "remark";

$tdataroles[".importFields"] = array();
$tdataroles[".importFields"][] = "roleid";
$tdataroles[".importFields"][] = "rolename";
$tdataroles[".importFields"][] = "remark";

$tdataroles[".printFields"] = array();
$tdataroles[".printFields"][] = "roleid";
$tdataroles[".printFields"][] = "rolename";
$tdataroles[".printFields"][] = "remark";


//	roleid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "roleid";
	$fdata["GoodName"] = "roleid";
	$fdata["ownerTable"] = "roles";
	$fdata["Label"] = GetFieldLabel("roles","roleid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "roleid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "roleid";

	
	
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




	$tdataroles["roleid"] = $fdata;
//	rolename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rolename";
	$fdata["GoodName"] = "rolename";
	$fdata["ownerTable"] = "roles";
	$fdata["Label"] = GetFieldLabel("roles","rolename");
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

		$fdata["strField"] = "rolename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rolename";

	
	
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




	$tdataroles["rolename"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "roles";
	$fdata["Label"] = GetFieldLabel("roles","remark");
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

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remark";

	
	
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




	$tdataroles["remark"] = $fdata;


$tables_data["roles"]=&$tdataroles;
$field_labels["roles"] = &$fieldLabelsroles;
$fieldToolTips["roles"] = &$fieldToolTipsroles;
$placeHolders["roles"] = &$placeHoldersroles;
$page_titles["roles"] = &$pageTitlesroles;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["roles"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["roles"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_roles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "roleid,  	rolename,  	remark";
$proto0["m_strFrom"] = "FROM roles";
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
	"m_strName" => "roleid",
	"m_strTable" => "roles",
	"m_srcTableName" => "roles"
));

$proto6["m_sql"] = "roleid";
$proto6["m_srcTableName"] = "roles";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rolename",
	"m_strTable" => "roles",
	"m_srcTableName" => "roles"
));

$proto8["m_sql"] = "rolename";
$proto8["m_srcTableName"] = "roles";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "roles",
	"m_srcTableName" => "roles"
));

$proto10["m_sql"] = "remark";
$proto10["m_srcTableName"] = "roles";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "roles";
$proto13["m_srcTableName"] = "roles";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "roleid";
$proto13["m_columns"][] = "rolename";
$proto13["m_columns"][] = "remark";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "roles";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "roles";
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
$proto0["m_srcTableName"]="roles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_roles = createSqlQuery_roles();


	
		;

			

$tdataroles[".sqlquery"] = $queryData_roles;

$tableEvents["roles"] = new eventsBase;
$tdataroles[".hasEvents"] = false;

?>