<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadistrict = array();
	$tdatadistrict[".truncateText"] = true;
	$tdatadistrict[".NumberOfChars"] = 80;
	$tdatadistrict[".ShortName"] = "district";
	$tdatadistrict[".OwnerID"] = "";
	$tdatadistrict[".OriginalTable"] = "district";

//	field labels
$fieldLabelsdistrict = array();
$fieldToolTipsdistrict = array();
$pageTitlesdistrict = array();
$placeHoldersdistrict = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdistrict["English"] = array();
	$fieldToolTipsdistrict["English"] = array();
	$placeHoldersdistrict["English"] = array();
	$pageTitlesdistrict["English"] = array();
	$fieldLabelsdistrict["English"]["did"] = "Did";
	$fieldToolTipsdistrict["English"]["did"] = "";
	$placeHoldersdistrict["English"]["did"] = "";
	$fieldLabelsdistrict["English"]["division_id"] = "Division Id";
	$fieldToolTipsdistrict["English"]["division_id"] = "";
	$placeHoldersdistrict["English"]["division_id"] = "";
	$fieldLabelsdistrict["English"]["dname"] = "Dname";
	$fieldToolTipsdistrict["English"]["dname"] = "";
	$placeHoldersdistrict["English"]["dname"] = "";
	if (count($fieldToolTipsdistrict["English"]))
		$tdatadistrict[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdistrict[""] = array();
	$fieldToolTipsdistrict[""] = array();
	$placeHoldersdistrict[""] = array();
	$pageTitlesdistrict[""] = array();
	if (count($fieldToolTipsdistrict[""]))
		$tdatadistrict[".isUseToolTips"] = true;
}


	$tdatadistrict[".NCSearch"] = true;



$tdatadistrict[".shortTableName"] = "district";
$tdatadistrict[".nSecOptions"] = 0;
$tdatadistrict[".recsPerRowPrint"] = 1;
$tdatadistrict[".mainTableOwnerID"] = "";
$tdatadistrict[".moveNext"] = 1;
$tdatadistrict[".entityType"] = 0;

$tdatadistrict[".strOriginalTableName"] = "district";

	



$tdatadistrict[".showAddInPopup"] = false;

$tdatadistrict[".showEditInPopup"] = false;

$tdatadistrict[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadistrict[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadistrict[".fieldsForRegister"] = array();

$tdatadistrict[".listAjax"] = false;

	$tdatadistrict[".audit"] = false;

	$tdatadistrict[".locking"] = false;

$tdatadistrict[".edit"] = true;
$tdatadistrict[".afterEditAction"] = 1;
$tdatadistrict[".closePopupAfterEdit"] = 1;
$tdatadistrict[".afterEditActionDetTable"] = "";

$tdatadistrict[".add"] = true;
$tdatadistrict[".afterAddAction"] = 1;
$tdatadistrict[".closePopupAfterAdd"] = 1;
$tdatadistrict[".afterAddActionDetTable"] = "";

$tdatadistrict[".list"] = true;



$tdatadistrict[".reorderRecordsByHeader"] = true;


$tdatadistrict[".exportFormatting"] = 2;
$tdatadistrict[".exportDelimiter"] = ",";
		
$tdatadistrict[".view"] = true;

$tdatadistrict[".import"] = true;

$tdatadistrict[".exportTo"] = true;

$tdatadistrict[".printFriendly"] = true;

$tdatadistrict[".delete"] = true;

$tdatadistrict[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadistrict[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadistrict[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadistrict[".searchSaving"] = false;
//

$tdatadistrict[".showSearchPanel"] = true;
		$tdatadistrict[".flexibleSearch"] = true;

$tdatadistrict[".isUseAjaxSuggest"] = true;

$tdatadistrict[".rowHighlite"] = true;





$tdatadistrict[".ajaxCodeSnippetAdded"] = false;

$tdatadistrict[".buttonsAdded"] = false;

$tdatadistrict[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadistrict[".isUseTimeForSearch"] = false;



$tdatadistrict[".badgeColor"] = "4682B4";


$tdatadistrict[".allSearchFields"] = array();
$tdatadistrict[".filterFields"] = array();
$tdatadistrict[".requiredSearchFields"] = array();

$tdatadistrict[".allSearchFields"][] = "did";
	$tdatadistrict[".allSearchFields"][] = "division_id";
	$tdatadistrict[".allSearchFields"][] = "dname";
	

$tdatadistrict[".googleLikeFields"] = array();
$tdatadistrict[".googleLikeFields"][] = "did";
$tdatadistrict[".googleLikeFields"][] = "division_id";
$tdatadistrict[".googleLikeFields"][] = "dname";


$tdatadistrict[".advSearchFields"] = array();
$tdatadistrict[".advSearchFields"][] = "did";
$tdatadistrict[".advSearchFields"][] = "division_id";
$tdatadistrict[".advSearchFields"][] = "dname";

$tdatadistrict[".tableType"] = "list";

$tdatadistrict[".printerPageOrientation"] = 0;
$tdatadistrict[".nPrinterPageScale"] = 100;

$tdatadistrict[".nPrinterSplitRecords"] = 40;

$tdatadistrict[".nPrinterPDFSplitRecords"] = 40;



$tdatadistrict[".geocodingEnabled"] = false;





$tdatadistrict[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadistrict[".pageSize"] = 20;

$tdatadistrict[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadistrict[".strOrderBy"] = $tstrOrderBy;

$tdatadistrict[".orderindexes"] = array();

$tdatadistrict[".sqlHead"] = "SELECT did,  	division_id,  	dname";
$tdatadistrict[".sqlFrom"] = "FROM district";
$tdatadistrict[".sqlWhereExpr"] = "";
$tdatadistrict[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadistrict[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadistrict[".arrGroupsPerPage"] = $arrGPP;

$tdatadistrict[".highlightSearchResults"] = true;

$tableKeysdistrict = array();
$tableKeysdistrict[] = "did";
$tdatadistrict[".Keys"] = $tableKeysdistrict;

$tdatadistrict[".listFields"] = array();
$tdatadistrict[".listFields"][] = "did";
$tdatadistrict[".listFields"][] = "division_id";
$tdatadistrict[".listFields"][] = "dname";

$tdatadistrict[".hideMobileList"] = array();


$tdatadistrict[".viewFields"] = array();
$tdatadistrict[".viewFields"][] = "did";
$tdatadistrict[".viewFields"][] = "division_id";
$tdatadistrict[".viewFields"][] = "dname";

$tdatadistrict[".addFields"] = array();
$tdatadistrict[".addFields"][] = "division_id";
$tdatadistrict[".addFields"][] = "dname";

$tdatadistrict[".masterListFields"] = array();
$tdatadistrict[".masterListFields"][] = "did";
$tdatadistrict[".masterListFields"][] = "division_id";
$tdatadistrict[".masterListFields"][] = "dname";

$tdatadistrict[".inlineAddFields"] = array();
$tdatadistrict[".inlineAddFields"][] = "division_id";
$tdatadistrict[".inlineAddFields"][] = "dname";

$tdatadistrict[".editFields"] = array();
$tdatadistrict[".editFields"][] = "division_id";
$tdatadistrict[".editFields"][] = "dname";

$tdatadistrict[".inlineEditFields"] = array();
$tdatadistrict[".inlineEditFields"][] = "division_id";
$tdatadistrict[".inlineEditFields"][] = "dname";

$tdatadistrict[".updateSelectedFields"] = array();
$tdatadistrict[".updateSelectedFields"][] = "division_id";
$tdatadistrict[".updateSelectedFields"][] = "dname";


$tdatadistrict[".exportFields"] = array();
$tdatadistrict[".exportFields"][] = "did";
$tdatadistrict[".exportFields"][] = "division_id";
$tdatadistrict[".exportFields"][] = "dname";

$tdatadistrict[".importFields"] = array();
$tdatadistrict[".importFields"][] = "did";
$tdatadistrict[".importFields"][] = "division_id";
$tdatadistrict[".importFields"][] = "dname";

$tdatadistrict[".printFields"] = array();
$tdatadistrict[".printFields"][] = "did";
$tdatadistrict[".printFields"][] = "division_id";
$tdatadistrict[".printFields"][] = "dname";


//	did
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "did";
	$fdata["GoodName"] = "did";
	$fdata["ownerTable"] = "district";
	$fdata["Label"] = GetFieldLabel("district","did");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "did";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "did";

	
	
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




	$tdatadistrict["did"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "district";
	$fdata["Label"] = GetFieldLabel("district","division_id");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "division";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "division_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "division_id";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadistrict["division_id"] = $fdata;
//	dname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dname";
	$fdata["GoodName"] = "dname";
	$fdata["ownerTable"] = "district";
	$fdata["Label"] = GetFieldLabel("district","dname");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadistrict["dname"] = $fdata;


$tables_data["district"]=&$tdatadistrict;
$field_labels["district"] = &$fieldLabelsdistrict;
$fieldToolTips["district"] = &$fieldToolTipsdistrict;
$placeHolders["district"] = &$placeHoldersdistrict;
$page_titles["district"] = &$pageTitlesdistrict;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["district"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["district"] = array();


	
				$strOriginalDetailsTable="division";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="division";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "division";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["district"][0] = $masterParams;
				$masterTablesData["district"][0]["masterKeys"] = array();
	$masterTablesData["district"][0]["masterKeys"][]="division_id";
				$masterTablesData["district"][0]["detailKeys"] = array();
	$masterTablesData["district"][0]["detailKeys"][]="division_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_district()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "did,  	division_id,  	dname";
$proto0["m_strFrom"] = "FROM district";
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
	"m_strName" => "did",
	"m_strTable" => "district",
	"m_srcTableName" => "district"
));

$proto6["m_sql"] = "did";
$proto6["m_srcTableName"] = "district";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "district",
	"m_srcTableName" => "district"
));

$proto8["m_sql"] = "division_id";
$proto8["m_srcTableName"] = "district";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dname",
	"m_strTable" => "district",
	"m_srcTableName" => "district"
));

$proto10["m_sql"] = "dname";
$proto10["m_srcTableName"] = "district";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "district";
$proto13["m_srcTableName"] = "district";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "did";
$proto13["m_columns"][] = "division_id";
$proto13["m_columns"][] = "dname";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "district";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "district";
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
$proto0["m_srcTableName"]="district";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_district = createSqlQuery_district();


	
		;

			

$tdatadistrict[".sqlquery"] = $queryData_district;

$tableEvents["district"] = new eventsBase;
$tdatadistrict[".hasEvents"] = false;

?>