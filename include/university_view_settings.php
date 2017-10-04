<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauniversity_view = array();	
	$tdatauniversity_view[".truncateText"] = true;
	$tdatauniversity_view[".NumberOfChars"] = 80; 
	$tdatauniversity_view[".ShortName"] = "university_view";
	$tdatauniversity_view[".OwnerID"] = "";
	$tdatauniversity_view[".OriginalTable"] = "university_view";

//	field labels
$fieldLabelsuniversity_view = array();
$fieldToolTipsuniversity_view = array();
$pageTitlesuniversity_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuniversity_view["English"] = array();
	$fieldToolTipsuniversity_view["English"] = array();
	$pageTitlesuniversity_view["English"] = array();
	$fieldLabelsuniversity_view["English"]["university_id"] = "University Id";
	$fieldToolTipsuniversity_view["English"]["university_id"] = "";
	$fieldLabelsuniversity_view["English"]["University_name"] = "University Name";
	$fieldToolTipsuniversity_view["English"]["University_name"] = "";
	$fieldLabelsuniversity_view["English"]["division_id"] = "Division Id";
	$fieldToolTipsuniversity_view["English"]["division_id"] = "";
	$fieldLabelsuniversity_view["English"]["dname"] = "Dname";
	$fieldToolTipsuniversity_view["English"]["dname"] = "";
	if (count($fieldToolTipsuniversity_view["English"]))
		$tdatauniversity_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuniversity_view[""] = array();
	$fieldToolTipsuniversity_view[""] = array();
	$pageTitlesuniversity_view[""] = array();
	if (count($fieldToolTipsuniversity_view[""]))
		$tdatauniversity_view[".isUseToolTips"] = true;
}
	
	
	$tdatauniversity_view[".NCSearch"] = true;



$tdatauniversity_view[".shortTableName"] = "university_view";
$tdatauniversity_view[".nSecOptions"] = 0;
$tdatauniversity_view[".recsPerRowList"] = 1;
$tdatauniversity_view[".mainTableOwnerID"] = "";
$tdatauniversity_view[".moveNext"] = 1;
$tdatauniversity_view[".nType"] = 0;

$tdatauniversity_view[".strOriginalTableName"] = "university_view";




$tdatauniversity_view[".showAddInPopup"] = false;

$tdatauniversity_view[".showEditInPopup"] = false;

$tdatauniversity_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauniversity_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauniversity_view[".fieldsForRegister"] = array();

$tdatauniversity_view[".listAjax"] = false;

	$tdatauniversity_view[".audit"] = false;

	$tdatauniversity_view[".locking"] = false;


$tdatauniversity_view[".list"] = true;


$tdatauniversity_view[".import"] = true;

$tdatauniversity_view[".exportTo"] = true;

$tdatauniversity_view[".printFriendly"] = true;


$tdatauniversity_view[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauniversity_view[".searchSaving"] = false;
//

$tdatauniversity_view[".showSearchPanel"] = true;
		$tdatauniversity_view[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauniversity_view[".isUseAjaxSuggest"] = false;
else 
	$tdatauniversity_view[".isUseAjaxSuggest"] = true;

$tdatauniversity_view[".rowHighlite"] = true;



$tdatauniversity_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauniversity_view[".isUseTimeForSearch"] = false;





$tdatauniversity_view[".allSearchFields"] = array();
$tdatauniversity_view[".filterFields"] = array();
$tdatauniversity_view[".requiredSearchFields"] = array();

$tdatauniversity_view[".allSearchFields"][] = "university_id";
	$tdatauniversity_view[".allSearchFields"][] = "University_name";
	$tdatauniversity_view[".allSearchFields"][] = "division_id";
	$tdatauniversity_view[".allSearchFields"][] = "dname";
	

$tdatauniversity_view[".googleLikeFields"] = array();
$tdatauniversity_view[".googleLikeFields"][] = "university_id";
$tdatauniversity_view[".googleLikeFields"][] = "University_name";
$tdatauniversity_view[".googleLikeFields"][] = "division_id";
$tdatauniversity_view[".googleLikeFields"][] = "dname";


$tdatauniversity_view[".advSearchFields"] = array();
$tdatauniversity_view[".advSearchFields"][] = "university_id";
$tdatauniversity_view[".advSearchFields"][] = "University_name";
$tdatauniversity_view[".advSearchFields"][] = "division_id";
$tdatauniversity_view[".advSearchFields"][] = "dname";

$tdatauniversity_view[".tableType"] = "list";

$tdatauniversity_view[".printerPageOrientation"] = 0;
$tdatauniversity_view[".nPrinterPageScale"] = 100;

$tdatauniversity_view[".nPrinterSplitRecords"] = 40;

$tdatauniversity_view[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatauniversity_view[".pageSize"] = 20;

$tdatauniversity_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauniversity_view[".strOrderBy"] = $tstrOrderBy;

$tdatauniversity_view[".orderindexes"] = array();

$tdatauniversity_view[".sqlHead"] = "SELECT university_id,  	University_name,  	division_id,  	dname";
$tdatauniversity_view[".sqlFrom"] = "FROM university_view";
$tdatauniversity_view[".sqlWhereExpr"] = "";
$tdatauniversity_view[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauniversity_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauniversity_view[".arrGroupsPerPage"] = $arrGPP;

$tdatauniversity_view[".highlightSearchResults"] = true;

$tableKeysuniversity_view = array();
$tdatauniversity_view[".Keys"] = $tableKeysuniversity_view;

$tdatauniversity_view[".listFields"] = array();
$tdatauniversity_view[".listFields"][] = "university_id";
$tdatauniversity_view[".listFields"][] = "University_name";
$tdatauniversity_view[".listFields"][] = "division_id";
$tdatauniversity_view[".listFields"][] = "dname";

$tdatauniversity_view[".hideMobileList"] = array();


$tdatauniversity_view[".viewFields"] = array();
$tdatauniversity_view[".viewFields"][] = "university_id";
$tdatauniversity_view[".viewFields"][] = "University_name";
$tdatauniversity_view[".viewFields"][] = "division_id";
$tdatauniversity_view[".viewFields"][] = "dname";

$tdatauniversity_view[".addFields"] = array();
$tdatauniversity_view[".addFields"][] = "university_id";
$tdatauniversity_view[".addFields"][] = "University_name";
$tdatauniversity_view[".addFields"][] = "division_id";
$tdatauniversity_view[".addFields"][] = "dname";

$tdatauniversity_view[".inlineAddFields"] = array();
$tdatauniversity_view[".inlineAddFields"][] = "university_id";
$tdatauniversity_view[".inlineAddFields"][] = "University_name";
$tdatauniversity_view[".inlineAddFields"][] = "division_id";
$tdatauniversity_view[".inlineAddFields"][] = "dname";

$tdatauniversity_view[".editFields"] = array();
$tdatauniversity_view[".editFields"][] = "university_id";
$tdatauniversity_view[".editFields"][] = "University_name";
$tdatauniversity_view[".editFields"][] = "division_id";
$tdatauniversity_view[".editFields"][] = "dname";

$tdatauniversity_view[".inlineEditFields"] = array();
$tdatauniversity_view[".inlineEditFields"][] = "university_id";
$tdatauniversity_view[".inlineEditFields"][] = "University_name";
$tdatauniversity_view[".inlineEditFields"][] = "division_id";
$tdatauniversity_view[".inlineEditFields"][] = "dname";

$tdatauniversity_view[".exportFields"] = array();
$tdatauniversity_view[".exportFields"][] = "university_id";
$tdatauniversity_view[".exportFields"][] = "University_name";
$tdatauniversity_view[".exportFields"][] = "division_id";
$tdatauniversity_view[".exportFields"][] = "dname";

$tdatauniversity_view[".importFields"] = array();
$tdatauniversity_view[".importFields"][] = "university_id";
$tdatauniversity_view[".importFields"][] = "University_name";
$tdatauniversity_view[".importFields"][] = "division_id";
$tdatauniversity_view[".importFields"][] = "dname";

$tdatauniversity_view[".printFields"] = array();
$tdatauniversity_view[".printFields"][] = "university_id";
$tdatauniversity_view[".printFields"][] = "University_name";
$tdatauniversity_view[".printFields"][] = "division_id";
$tdatauniversity_view[".printFields"][] = "dname";

//	university_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "university_id";
	$fdata["GoodName"] = "university_id";
	$fdata["ownerTable"] = "university_view";
	$fdata["Label"] = GetFieldLabel("university_view","university_id"); 
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
	
		$fdata["strField"] = "university_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "university_id";
	
		
		
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

	

	
	$tdatauniversity_view["university_id"] = $fdata;
//	University_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "University_name";
	$fdata["GoodName"] = "University_name";
	$fdata["ownerTable"] = "university_view";
	$fdata["Label"] = GetFieldLabel("university_view","University_name"); 
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
	
		$fdata["strField"] = "University_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "University_name";
	
		
		
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

	

	
	$tdatauniversity_view["University_name"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "university_view";
	$fdata["Label"] = GetFieldLabel("university_view","division_id"); 
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

	

	
	$tdatauniversity_view["division_id"] = $fdata;
//	dname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dname";
	$fdata["GoodName"] = "dname";
	$fdata["ownerTable"] = "university_view";
	$fdata["Label"] = GetFieldLabel("university_view","dname"); 
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

	

	
	$tdatauniversity_view["dname"] = $fdata;

	
$tables_data["university_view"]=&$tdatauniversity_view;
$field_labels["university_view"] = &$fieldLabelsuniversity_view;
$fieldToolTips["university_view"] = &$fieldToolTipsuniversity_view;
$page_titles["university_view"] = &$pageTitlesuniversity_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["university_view"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["university_view"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_university_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "university_id,  	University_name,  	division_id,  	dname";
$proto0["m_strFrom"] = "FROM university_view";
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
	"m_strName" => "university_id",
	"m_strTable" => "university_view",
	"m_srcTableName" => "university_view"
));

$proto5["m_sql"] = "university_id";
$proto5["m_srcTableName"] = "university_view";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "University_name",
	"m_strTable" => "university_view",
	"m_srcTableName" => "university_view"
));

$proto7["m_sql"] = "University_name";
$proto7["m_srcTableName"] = "university_view";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "university_view",
	"m_srcTableName" => "university_view"
));

$proto9["m_sql"] = "division_id";
$proto9["m_srcTableName"] = "university_view";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dname",
	"m_strTable" => "university_view",
	"m_srcTableName" => "university_view"
));

$proto11["m_sql"] = "dname";
$proto11["m_srcTableName"] = "university_view";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "university_view";
$proto14["m_srcTableName"] = "university_view";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "university_id";
$proto14["m_columns"][] = "University_name";
$proto14["m_columns"][] = "division_id";
$proto14["m_columns"][] = "dname";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "university_view";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "university_view";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="university_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_university_view = createSqlQuery_university_view();


	
				
	
$tdatauniversity_view[".sqlquery"] = $queryData_university_view;

$tableEvents["university_view"] = new eventsBase;
$tdatauniversity_view[".hasEvents"] = false;

?>