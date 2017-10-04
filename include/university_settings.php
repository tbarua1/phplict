<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauniversity = array();	
	$tdatauniversity[".truncateText"] = true;
	$tdatauniversity[".NumberOfChars"] = 80; 
	$tdatauniversity[".ShortName"] = "university";
	$tdatauniversity[".OwnerID"] = "";
	$tdatauniversity[".OriginalTable"] = "university";

//	field labels
$fieldLabelsuniversity = array();
$fieldToolTipsuniversity = array();
$pageTitlesuniversity = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuniversity["English"] = array();
	$fieldToolTipsuniversity["English"] = array();
	$pageTitlesuniversity["English"] = array();
	$fieldLabelsuniversity["English"]["university_id"] = "University Id";
	$fieldToolTipsuniversity["English"]["university_id"] = "";
	$fieldLabelsuniversity["English"]["University_name"] = "University Name";
	$fieldToolTipsuniversity["English"]["University_name"] = "";
	$fieldLabelsuniversity["English"]["MOU_date"] = "MOU Date";
	$fieldToolTipsuniversity["English"]["MOU_date"] = "";
	$fieldLabelsuniversity["English"]["TUP"] = "TUP";
	$fieldToolTipsuniversity["English"]["TUP"] = "";
	$fieldLabelsuniversity["English"]["FS"] = "FS";
	$fieldToolTipsuniversity["English"]["FS"] = "";
	$fieldLabelsuniversity["English"]["TYPE"] = "TYPE";
	$fieldToolTipsuniversity["English"]["TYPE"] = "";
	$fieldLabelsuniversity["English"]["division_id"] = "Division Id";
	$fieldToolTipsuniversity["English"]["division_id"] = "";
	$fieldLabelsuniversity["English"]["Lat"] = "Lat";
	$fieldToolTipsuniversity["English"]["Lat"] = "";
	$fieldLabelsuniversity["English"]["Lng"] = "Lng";
	$fieldToolTipsuniversity["English"]["Lng"] = "";
	if (count($fieldToolTipsuniversity["English"]))
		$tdatauniversity[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuniversity[""] = array();
	$fieldToolTipsuniversity[""] = array();
	$pageTitlesuniversity[""] = array();
	if (count($fieldToolTipsuniversity[""]))
		$tdatauniversity[".isUseToolTips"] = true;
}
	
	
	$tdatauniversity[".NCSearch"] = true;



$tdatauniversity[".shortTableName"] = "university";
$tdatauniversity[".nSecOptions"] = 0;
$tdatauniversity[".recsPerRowList"] = 1;
$tdatauniversity[".mainTableOwnerID"] = "";
$tdatauniversity[".moveNext"] = 1;
$tdatauniversity[".nType"] = 0;

$tdatauniversity[".strOriginalTableName"] = "university";




$tdatauniversity[".showAddInPopup"] = false;

$tdatauniversity[".showEditInPopup"] = false;

$tdatauniversity[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauniversity[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauniversity[".fieldsForRegister"] = array();

$tdatauniversity[".listAjax"] = false;

	$tdatauniversity[".audit"] = false;

	$tdatauniversity[".locking"] = false;

$tdatauniversity[".edit"] = true;

$tdatauniversity[".list"] = true;

$tdatauniversity[".inlineEdit"] = true;
$tdatauniversity[".inlineAdd"] = true;
$tdatauniversity[".view"] = true;

$tdatauniversity[".import"] = true;

$tdatauniversity[".exportTo"] = true;

$tdatauniversity[".printFriendly"] = true;

$tdatauniversity[".delete"] = true;

$tdatauniversity[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauniversity[".searchSaving"] = false;
//

$tdatauniversity[".showSearchPanel"] = true;
		$tdatauniversity[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauniversity[".isUseAjaxSuggest"] = false;
else 
	$tdatauniversity[".isUseAjaxSuggest"] = true;

$tdatauniversity[".rowHighlite"] = true;



$tdatauniversity[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauniversity[".isUseTimeForSearch"] = false;



$tdatauniversity[".useDetailsPreview"] = true;


$tdatauniversity[".allSearchFields"] = array();
$tdatauniversity[".filterFields"] = array();
$tdatauniversity[".requiredSearchFields"] = array();

$tdatauniversity[".allSearchFields"][] = "university_id";
	$tdatauniversity[".allSearchFields"][] = "University_name";
	$tdatauniversity[".allSearchFields"][] = "MOU_date";
	$tdatauniversity[".allSearchFields"][] = "TUP";
	$tdatauniversity[".allSearchFields"][] = "FS";
	$tdatauniversity[".allSearchFields"][] = "TYPE";
	$tdatauniversity[".allSearchFields"][] = "division_id";
	$tdatauniversity[".allSearchFields"][] = "Lat";
	$tdatauniversity[".allSearchFields"][] = "Lng";
	

$tdatauniversity[".googleLikeFields"] = array();
$tdatauniversity[".googleLikeFields"][] = "university_id";
$tdatauniversity[".googleLikeFields"][] = "University_name";
$tdatauniversity[".googleLikeFields"][] = "MOU_date";
$tdatauniversity[".googleLikeFields"][] = "TUP";
$tdatauniversity[".googleLikeFields"][] = "FS";
$tdatauniversity[".googleLikeFields"][] = "TYPE";
$tdatauniversity[".googleLikeFields"][] = "division_id";
$tdatauniversity[".googleLikeFields"][] = "Lat";
$tdatauniversity[".googleLikeFields"][] = "Lng";


$tdatauniversity[".advSearchFields"] = array();
$tdatauniversity[".advSearchFields"][] = "university_id";
$tdatauniversity[".advSearchFields"][] = "University_name";
$tdatauniversity[".advSearchFields"][] = "MOU_date";
$tdatauniversity[".advSearchFields"][] = "TUP";
$tdatauniversity[".advSearchFields"][] = "FS";
$tdatauniversity[".advSearchFields"][] = "TYPE";
$tdatauniversity[".advSearchFields"][] = "division_id";
$tdatauniversity[".advSearchFields"][] = "Lat";
$tdatauniversity[".advSearchFields"][] = "Lng";

$tdatauniversity[".tableType"] = "list";

$tdatauniversity[".printerPageOrientation"] = 0;
$tdatauniversity[".nPrinterPageScale"] = 100;

$tdatauniversity[".nPrinterSplitRecords"] = 40;

$tdatauniversity[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatauniversity[".pageSize"] = 20;

$tdatauniversity[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauniversity[".strOrderBy"] = $tstrOrderBy;

$tdatauniversity[".orderindexes"] = array();

$tdatauniversity[".sqlHead"] = "SELECT university_id,  	University_name,  	MOU_date,  	TUP,  	FS,  	`TYPE`,  	division_id,  	Lat,  	Lng";
$tdatauniversity[".sqlFrom"] = "FROM university";
$tdatauniversity[".sqlWhereExpr"] = "";
$tdatauniversity[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauniversity[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauniversity[".arrGroupsPerPage"] = $arrGPP;

$tdatauniversity[".highlightSearchResults"] = true;

$tableKeysuniversity = array();
$tableKeysuniversity[] = "university_id";
$tdatauniversity[".Keys"] = $tableKeysuniversity;

$tdatauniversity[".listFields"] = array();
$tdatauniversity[".listFields"][] = "university_id";
$tdatauniversity[".listFields"][] = "University_name";
$tdatauniversity[".listFields"][] = "MOU_date";
$tdatauniversity[".listFields"][] = "TUP";
$tdatauniversity[".listFields"][] = "FS";
$tdatauniversity[".listFields"][] = "TYPE";
$tdatauniversity[".listFields"][] = "division_id";
$tdatauniversity[".listFields"][] = "Lat";
$tdatauniversity[".listFields"][] = "Lng";

$tdatauniversity[".hideMobileList"] = array();


$tdatauniversity[".viewFields"] = array();
$tdatauniversity[".viewFields"][] = "university_id";
$tdatauniversity[".viewFields"][] = "University_name";
$tdatauniversity[".viewFields"][] = "MOU_date";
$tdatauniversity[".viewFields"][] = "TUP";
$tdatauniversity[".viewFields"][] = "FS";
$tdatauniversity[".viewFields"][] = "TYPE";
$tdatauniversity[".viewFields"][] = "division_id";
$tdatauniversity[".viewFields"][] = "Lat";
$tdatauniversity[".viewFields"][] = "Lng";

$tdatauniversity[".addFields"] = array();
$tdatauniversity[".addFields"][] = "University_name";
$tdatauniversity[".addFields"][] = "MOU_date";
$tdatauniversity[".addFields"][] = "TUP";
$tdatauniversity[".addFields"][] = "FS";
$tdatauniversity[".addFields"][] = "TYPE";
$tdatauniversity[".addFields"][] = "division_id";
$tdatauniversity[".addFields"][] = "Lat";
$tdatauniversity[".addFields"][] = "Lng";

$tdatauniversity[".inlineAddFields"] = array();
$tdatauniversity[".inlineAddFields"][] = "University_name";
$tdatauniversity[".inlineAddFields"][] = "MOU_date";
$tdatauniversity[".inlineAddFields"][] = "TUP";
$tdatauniversity[".inlineAddFields"][] = "FS";
$tdatauniversity[".inlineAddFields"][] = "TYPE";
$tdatauniversity[".inlineAddFields"][] = "division_id";
$tdatauniversity[".inlineAddFields"][] = "Lat";
$tdatauniversity[".inlineAddFields"][] = "Lng";

$tdatauniversity[".editFields"] = array();
$tdatauniversity[".editFields"][] = "University_name";
$tdatauniversity[".editFields"][] = "MOU_date";
$tdatauniversity[".editFields"][] = "TUP";
$tdatauniversity[".editFields"][] = "FS";
$tdatauniversity[".editFields"][] = "TYPE";
$tdatauniversity[".editFields"][] = "division_id";
$tdatauniversity[".editFields"][] = "Lat";
$tdatauniversity[".editFields"][] = "Lng";

$tdatauniversity[".inlineEditFields"] = array();
$tdatauniversity[".inlineEditFields"][] = "University_name";
$tdatauniversity[".inlineEditFields"][] = "MOU_date";
$tdatauniversity[".inlineEditFields"][] = "TUP";
$tdatauniversity[".inlineEditFields"][] = "FS";
$tdatauniversity[".inlineEditFields"][] = "TYPE";
$tdatauniversity[".inlineEditFields"][] = "division_id";
$tdatauniversity[".inlineEditFields"][] = "Lat";
$tdatauniversity[".inlineEditFields"][] = "Lng";

$tdatauniversity[".exportFields"] = array();
$tdatauniversity[".exportFields"][] = "university_id";
$tdatauniversity[".exportFields"][] = "University_name";
$tdatauniversity[".exportFields"][] = "MOU_date";
$tdatauniversity[".exportFields"][] = "TUP";
$tdatauniversity[".exportFields"][] = "FS";
$tdatauniversity[".exportFields"][] = "TYPE";
$tdatauniversity[".exportFields"][] = "division_id";
$tdatauniversity[".exportFields"][] = "Lat";
$tdatauniversity[".exportFields"][] = "Lng";

$tdatauniversity[".importFields"] = array();
$tdatauniversity[".importFields"][] = "university_id";
$tdatauniversity[".importFields"][] = "University_name";
$tdatauniversity[".importFields"][] = "MOU_date";
$tdatauniversity[".importFields"][] = "TUP";
$tdatauniversity[".importFields"][] = "FS";
$tdatauniversity[".importFields"][] = "TYPE";
$tdatauniversity[".importFields"][] = "division_id";
$tdatauniversity[".importFields"][] = "Lat";
$tdatauniversity[".importFields"][] = "Lng";

$tdatauniversity[".printFields"] = array();
$tdatauniversity[".printFields"][] = "university_id";
$tdatauniversity[".printFields"][] = "University_name";
$tdatauniversity[".printFields"][] = "MOU_date";
$tdatauniversity[".printFields"][] = "TUP";
$tdatauniversity[".printFields"][] = "FS";
$tdatauniversity[".printFields"][] = "TYPE";
$tdatauniversity[".printFields"][] = "division_id";
$tdatauniversity[".printFields"][] = "Lat";
$tdatauniversity[".printFields"][] = "Lng";

//	university_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "university_id";
	$fdata["GoodName"] = "university_id";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","university_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatauniversity["university_id"] = $fdata;
//	University_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "University_name";
	$fdata["GoodName"] = "University_name";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","University_name"); 
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

	

	
	$tdatauniversity["University_name"] = $fdata;
//	MOU_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MOU_date";
	$fdata["GoodName"] = "MOU_date";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","MOU_date"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MOU_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MOU_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauniversity["MOU_date"] = $fdata;
//	TUP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TUP";
	$fdata["GoodName"] = "TUP";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","TUP"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TUP"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TUP";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauniversity["TUP"] = $fdata;
//	FS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FS";
	$fdata["GoodName"] = "FS";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","FS"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FS"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FS";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauniversity["FS"] = $fdata;
//	TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TYPE";
	$fdata["GoodName"] = "TYPE";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","TYPE"); 
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
	
		$fdata["strField"] = "TYPE"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TYPE`";
	
		
		
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

	

	
	$tdatauniversity["TYPE"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","division_id"); 
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauniversity["division_id"] = $fdata;
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","Lat"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Lat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauniversity["Lat"] = $fdata;
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "university";
	$fdata["Label"] = GetFieldLabel("university","Lng"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Lng"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatauniversity["Lng"] = $fdata;

	
$tables_data["university"]=&$tdatauniversity;
$field_labels["university"] = &$fieldLabelsuniversity;
$fieldToolTips["university"] = &$fieldToolTipsuniversity;
$page_titles["university"] = &$pageTitlesuniversity;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["university"] = array();
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
			
	$detailsTablesData["university"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["university"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["university"][$dIndex]["masterKeys"][]="university_id";

				$detailsTablesData["university"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["university"][$dIndex]["detailKeys"][]="university_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["university"] = array();


	
				$strOriginalDetailsTable="division";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="division";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "division";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["university"][0] = $masterParams;	
				$masterTablesData["university"][0]["masterKeys"] = array();
	$masterTablesData["university"][0]["masterKeys"][]="division_id";
				$masterTablesData["university"][0]["detailKeys"] = array();
	$masterTablesData["university"][0]["detailKeys"][]="division_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_university()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "university_id,  	University_name,  	MOU_date,  	TUP,  	FS,  	`TYPE`,  	division_id,  	Lat,  	Lng";
$proto0["m_strFrom"] = "FROM university";
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
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto5["m_sql"] = "university_id";
$proto5["m_srcTableName"] = "university";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "University_name",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto7["m_sql"] = "University_name";
$proto7["m_srcTableName"] = "university";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "MOU_date",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto9["m_sql"] = "MOU_date";
$proto9["m_srcTableName"] = "university";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "TUP",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto11["m_sql"] = "TUP";
$proto11["m_srcTableName"] = "university";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FS",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto13["m_sql"] = "FS";
$proto13["m_srcTableName"] = "university";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "TYPE",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto15["m_sql"] = "`TYPE`";
$proto15["m_srcTableName"] = "university";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto17["m_sql"] = "division_id";
$proto17["m_srcTableName"] = "university";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto19["m_sql"] = "Lat";
$proto19["m_srcTableName"] = "university";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "university",
	"m_srcTableName" => "university"
));

$proto21["m_sql"] = "Lng";
$proto21["m_srcTableName"] = "university";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "university";
$proto24["m_srcTableName"] = "university";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "university_id";
$proto24["m_columns"][] = "University_name";
$proto24["m_columns"][] = "MOU_date";
$proto24["m_columns"][] = "TUP";
$proto24["m_columns"][] = "FS";
$proto24["m_columns"][] = "TYPE";
$proto24["m_columns"][] = "division_id";
$proto24["m_columns"][] = "Lat";
$proto24["m_columns"][] = "Lng";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "university";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "university";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="university";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_university = createSqlQuery_university();


	
									
	
$tdatauniversity[".sqlquery"] = $queryData_university;

$tableEvents["university"] = new eventsBase;
$tdatauniversity[".hasEvents"] = false;

?>