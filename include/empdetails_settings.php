<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempdetails = array();
	$tdataempdetails[".truncateText"] = true;
	$tdataempdetails[".NumberOfChars"] = 80;
	$tdataempdetails[".ShortName"] = "empdetails";
	$tdataempdetails[".OwnerID"] = "";
	$tdataempdetails[".OriginalTable"] = "empdetails";

//	field labels
$fieldLabelsempdetails = array();
$fieldToolTipsempdetails = array();
$pageTitlesempdetails = array();
$placeHoldersempdetails = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsempdetails["English"] = array();
	$fieldToolTipsempdetails["English"] = array();
	$placeHoldersempdetails["English"] = array();
	$pageTitlesempdetails["English"] = array();
	$fieldLabelsempdetails["English"]["eid"] = "Eid";
	$fieldToolTipsempdetails["English"]["eid"] = "";
	$placeHoldersempdetails["English"]["eid"] = "";
	$fieldLabelsempdetails["English"]["whtasapp"] = "Whtasapp";
	$fieldToolTipsempdetails["English"]["whtasapp"] = "";
	$placeHoldersempdetails["English"]["whtasapp"] = "";
	$fieldLabelsempdetails["English"]["skype"] = "Skype";
	$fieldToolTipsempdetails["English"]["skype"] = "";
	$placeHoldersempdetails["English"]["skype"] = "";
	$fieldLabelsempdetails["English"]["dropbox"] = "Dropbox";
	$fieldToolTipsempdetails["English"]["dropbox"] = "";
	$placeHoldersempdetails["English"]["dropbox"] = "";
	$fieldLabelsempdetails["English"]["email"] = "Email";
	$fieldToolTipsempdetails["English"]["email"] = "";
	$placeHoldersempdetails["English"]["email"] = "";
	$fieldLabelsempdetails["English"]["dob"] = "Dob";
	$fieldToolTipsempdetails["English"]["dob"] = "";
	$placeHoldersempdetails["English"]["dob"] = "";
	$fieldLabelsempdetails["English"]["password"] = "Password";
	$fieldToolTipsempdetails["English"]["password"] = "";
	$placeHoldersempdetails["English"]["password"] = "";
	$fieldLabelsempdetails["English"]["passportno"] = "Passportno";
	$fieldToolTipsempdetails["English"]["passportno"] = "";
	$placeHoldersempdetails["English"]["passportno"] = "";
	$fieldLabelsempdetails["English"]["passport_expiry"] = "Passport Expiry";
	$fieldToolTipsempdetails["English"]["passport_expiry"] = "";
	$placeHoldersempdetails["English"]["passport_expiry"] = "";
	$fieldLabelsempdetails["English"]["visa_no"] = "Visa No";
	$fieldToolTipsempdetails["English"]["visa_no"] = "";
	$placeHoldersempdetails["English"]["visa_no"] = "";
	$fieldLabelsempdetails["English"]["visa_expiry"] = "Visa Expiry";
	$fieldToolTipsempdetails["English"]["visa_expiry"] = "";
	$placeHoldersempdetails["English"]["visa_expiry"] = "";
	$fieldLabelsempdetails["English"]["division_id"] = "Division Id";
	$fieldToolTipsempdetails["English"]["division_id"] = "";
	$placeHoldersempdetails["English"]["division_id"] = "";
	$fieldLabelsempdetails["English"]["doj"] = "Doj";
	$fieldToolTipsempdetails["English"]["doj"] = "";
	$placeHoldersempdetails["English"]["doj"] = "";
	$fieldLabelsempdetails["English"]["dor"] = "Dor";
	$fieldToolTipsempdetails["English"]["dor"] = "";
	$placeHoldersempdetails["English"]["dor"] = "";
	$fieldLabelsempdetails["English"]["status_id"] = "Status Id";
	$fieldToolTipsempdetails["English"]["status_id"] = "";
	$placeHoldersempdetails["English"]["status_id"] = "";
	$fieldLabelsempdetails["English"]["localnum"] = "Localnum";
	$fieldToolTipsempdetails["English"]["localnum"] = "";
	$placeHoldersempdetails["English"]["localnum"] = "";
	if (count($fieldToolTipsempdetails["English"]))
		$tdataempdetails[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempdetails[""] = array();
	$fieldToolTipsempdetails[""] = array();
	$placeHoldersempdetails[""] = array();
	$pageTitlesempdetails[""] = array();
	if (count($fieldToolTipsempdetails[""]))
		$tdataempdetails[".isUseToolTips"] = true;
}


	$tdataempdetails[".NCSearch"] = true;



$tdataempdetails[".shortTableName"] = "empdetails";
$tdataempdetails[".nSecOptions"] = 0;
$tdataempdetails[".recsPerRowPrint"] = 1;
$tdataempdetails[".mainTableOwnerID"] = "";
$tdataempdetails[".moveNext"] = 1;
$tdataempdetails[".entityType"] = 0;

$tdataempdetails[".strOriginalTableName"] = "empdetails";

	



$tdataempdetails[".showAddInPopup"] = false;

$tdataempdetails[".showEditInPopup"] = false;

$tdataempdetails[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempdetails[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempdetails[".fieldsForRegister"] = array();

$tdataempdetails[".listAjax"] = false;

	$tdataempdetails[".audit"] = false;

	$tdataempdetails[".locking"] = false;

$tdataempdetails[".edit"] = true;
$tdataempdetails[".afterEditAction"] = 1;
$tdataempdetails[".closePopupAfterEdit"] = 1;
$tdataempdetails[".afterEditActionDetTable"] = "";

$tdataempdetails[".add"] = true;
$tdataempdetails[".afterAddAction"] = 1;
$tdataempdetails[".closePopupAfterAdd"] = 1;
$tdataempdetails[".afterAddActionDetTable"] = "";

$tdataempdetails[".list"] = true;



$tdataempdetails[".reorderRecordsByHeader"] = true;


$tdataempdetails[".exportFormatting"] = 2;
$tdataempdetails[".exportDelimiter"] = ",";
		
$tdataempdetails[".view"] = true;

$tdataempdetails[".import"] = true;

$tdataempdetails[".exportTo"] = true;

$tdataempdetails[".printFriendly"] = true;

$tdataempdetails[".delete"] = true;

$tdataempdetails[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataempdetails[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataempdetails[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataempdetails[".searchSaving"] = false;
//

$tdataempdetails[".showSearchPanel"] = true;
		$tdataempdetails[".flexibleSearch"] = true;

$tdataempdetails[".isUseAjaxSuggest"] = true;

$tdataempdetails[".rowHighlite"] = true;





$tdataempdetails[".ajaxCodeSnippetAdded"] = false;

$tdataempdetails[".buttonsAdded"] = false;

$tdataempdetails[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempdetails[".isUseTimeForSearch"] = false;



$tdataempdetails[".badgeColor"] = "CD853F";


$tdataempdetails[".allSearchFields"] = array();
$tdataempdetails[".filterFields"] = array();
$tdataempdetails[".requiredSearchFields"] = array();

$tdataempdetails[".allSearchFields"][] = "eid";
	$tdataempdetails[".allSearchFields"][] = "whtasapp";
	$tdataempdetails[".allSearchFields"][] = "localnum";
	$tdataempdetails[".allSearchFields"][] = "skype";
	$tdataempdetails[".allSearchFields"][] = "dropbox";
	$tdataempdetails[".allSearchFields"][] = "email";
	$tdataempdetails[".allSearchFields"][] = "dob";
	$tdataempdetails[".allSearchFields"][] = "passportno";
	$tdataempdetails[".allSearchFields"][] = "passport_expiry";
	$tdataempdetails[".allSearchFields"][] = "visa_no";
	$tdataempdetails[".allSearchFields"][] = "visa_expiry";
	$tdataempdetails[".allSearchFields"][] = "division_id";
	$tdataempdetails[".allSearchFields"][] = "doj";
	$tdataempdetails[".allSearchFields"][] = "dor";
	$tdataempdetails[".allSearchFields"][] = "status_id";
	

$tdataempdetails[".googleLikeFields"] = array();
$tdataempdetails[".googleLikeFields"][] = "eid";
$tdataempdetails[".googleLikeFields"][] = "whtasapp";
$tdataempdetails[".googleLikeFields"][] = "localnum";
$tdataempdetails[".googleLikeFields"][] = "skype";
$tdataempdetails[".googleLikeFields"][] = "dropbox";
$tdataempdetails[".googleLikeFields"][] = "email";
$tdataempdetails[".googleLikeFields"][] = "dob";
$tdataempdetails[".googleLikeFields"][] = "password";
$tdataempdetails[".googleLikeFields"][] = "passportno";
$tdataempdetails[".googleLikeFields"][] = "passport_expiry";
$tdataempdetails[".googleLikeFields"][] = "visa_no";
$tdataempdetails[".googleLikeFields"][] = "visa_expiry";
$tdataempdetails[".googleLikeFields"][] = "division_id";
$tdataempdetails[".googleLikeFields"][] = "doj";
$tdataempdetails[".googleLikeFields"][] = "dor";
$tdataempdetails[".googleLikeFields"][] = "status_id";


$tdataempdetails[".advSearchFields"] = array();
$tdataempdetails[".advSearchFields"][] = "eid";
$tdataempdetails[".advSearchFields"][] = "whtasapp";
$tdataempdetails[".advSearchFields"][] = "localnum";
$tdataempdetails[".advSearchFields"][] = "skype";
$tdataempdetails[".advSearchFields"][] = "dropbox";
$tdataempdetails[".advSearchFields"][] = "email";
$tdataempdetails[".advSearchFields"][] = "dob";
$tdataempdetails[".advSearchFields"][] = "passportno";
$tdataempdetails[".advSearchFields"][] = "passport_expiry";
$tdataempdetails[".advSearchFields"][] = "visa_no";
$tdataempdetails[".advSearchFields"][] = "visa_expiry";
$tdataempdetails[".advSearchFields"][] = "division_id";
$tdataempdetails[".advSearchFields"][] = "doj";
$tdataempdetails[".advSearchFields"][] = "dor";
$tdataempdetails[".advSearchFields"][] = "status_id";

$tdataempdetails[".tableType"] = "list";

$tdataempdetails[".printerPageOrientation"] = 0;
$tdataempdetails[".nPrinterPageScale"] = 100;

$tdataempdetails[".nPrinterSplitRecords"] = 40;

$tdataempdetails[".nPrinterPDFSplitRecords"] = 40;



$tdataempdetails[".geocodingEnabled"] = false;





$tdataempdetails[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataempdetails[".pageSize"] = 20;

$tdataempdetails[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempdetails[".strOrderBy"] = $tstrOrderBy;

$tdataempdetails[".orderindexes"] = array();

$tdataempdetails[".sqlHead"] = "SELECT eid,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id";
$tdataempdetails[".sqlFrom"] = "FROM empdetails";
$tdataempdetails[".sqlWhereExpr"] = "";
$tdataempdetails[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempdetails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempdetails[".arrGroupsPerPage"] = $arrGPP;

$tdataempdetails[".highlightSearchResults"] = true;

$tableKeysempdetails = array();
$tableKeysempdetails[] = "eid";
$tdataempdetails[".Keys"] = $tableKeysempdetails;

$tdataempdetails[".listFields"] = array();
$tdataempdetails[".listFields"][] = "eid";
$tdataempdetails[".listFields"][] = "whtasapp";
$tdataempdetails[".listFields"][] = "localnum";
$tdataempdetails[".listFields"][] = "skype";
$tdataempdetails[".listFields"][] = "dropbox";
$tdataempdetails[".listFields"][] = "email";
$tdataempdetails[".listFields"][] = "dob";
$tdataempdetails[".listFields"][] = "passportno";
$tdataempdetails[".listFields"][] = "passport_expiry";
$tdataempdetails[".listFields"][] = "visa_no";
$tdataempdetails[".listFields"][] = "visa_expiry";
$tdataempdetails[".listFields"][] = "division_id";
$tdataempdetails[".listFields"][] = "doj";
$tdataempdetails[".listFields"][] = "dor";
$tdataempdetails[".listFields"][] = "status_id";

$tdataempdetails[".hideMobileList"] = array();


$tdataempdetails[".viewFields"] = array();
$tdataempdetails[".viewFields"][] = "eid";
$tdataempdetails[".viewFields"][] = "whtasapp";
$tdataempdetails[".viewFields"][] = "localnum";
$tdataempdetails[".viewFields"][] = "skype";
$tdataempdetails[".viewFields"][] = "dropbox";
$tdataempdetails[".viewFields"][] = "email";
$tdataempdetails[".viewFields"][] = "dob";
$tdataempdetails[".viewFields"][] = "passportno";
$tdataempdetails[".viewFields"][] = "passport_expiry";
$tdataempdetails[".viewFields"][] = "visa_no";
$tdataempdetails[".viewFields"][] = "visa_expiry";
$tdataempdetails[".viewFields"][] = "division_id";
$tdataempdetails[".viewFields"][] = "doj";
$tdataempdetails[".viewFields"][] = "dor";
$tdataempdetails[".viewFields"][] = "status_id";

$tdataempdetails[".addFields"] = array();
$tdataempdetails[".addFields"][] = "eid";
$tdataempdetails[".addFields"][] = "whtasapp";
$tdataempdetails[".addFields"][] = "localnum";
$tdataempdetails[".addFields"][] = "skype";
$tdataempdetails[".addFields"][] = "dropbox";
$tdataempdetails[".addFields"][] = "email";
$tdataempdetails[".addFields"][] = "dob";
$tdataempdetails[".addFields"][] = "passportno";
$tdataempdetails[".addFields"][] = "passport_expiry";
$tdataempdetails[".addFields"][] = "visa_no";
$tdataempdetails[".addFields"][] = "visa_expiry";
$tdataempdetails[".addFields"][] = "division_id";
$tdataempdetails[".addFields"][] = "doj";
$tdataempdetails[".addFields"][] = "dor";
$tdataempdetails[".addFields"][] = "status_id";

$tdataempdetails[".masterListFields"] = array();
$tdataempdetails[".masterListFields"][] = "eid";
$tdataempdetails[".masterListFields"][] = "whtasapp";
$tdataempdetails[".masterListFields"][] = "localnum";
$tdataempdetails[".masterListFields"][] = "skype";
$tdataempdetails[".masterListFields"][] = "dropbox";
$tdataempdetails[".masterListFields"][] = "email";
$tdataempdetails[".masterListFields"][] = "dob";
$tdataempdetails[".masterListFields"][] = "password";
$tdataempdetails[".masterListFields"][] = "passportno";
$tdataempdetails[".masterListFields"][] = "passport_expiry";
$tdataempdetails[".masterListFields"][] = "visa_no";
$tdataempdetails[".masterListFields"][] = "visa_expiry";
$tdataempdetails[".masterListFields"][] = "division_id";
$tdataempdetails[".masterListFields"][] = "doj";
$tdataempdetails[".masterListFields"][] = "dor";
$tdataempdetails[".masterListFields"][] = "status_id";

$tdataempdetails[".inlineAddFields"] = array();

$tdataempdetails[".editFields"] = array();
$tdataempdetails[".editFields"][] = "eid";
$tdataempdetails[".editFields"][] = "whtasapp";
$tdataempdetails[".editFields"][] = "localnum";
$tdataempdetails[".editFields"][] = "skype";
$tdataempdetails[".editFields"][] = "dropbox";
$tdataempdetails[".editFields"][] = "email";
$tdataempdetails[".editFields"][] = "dob";
$tdataempdetails[".editFields"][] = "passportno";
$tdataempdetails[".editFields"][] = "passport_expiry";
$tdataempdetails[".editFields"][] = "visa_no";
$tdataempdetails[".editFields"][] = "visa_expiry";
$tdataempdetails[".editFields"][] = "division_id";
$tdataempdetails[".editFields"][] = "doj";
$tdataempdetails[".editFields"][] = "dor";
$tdataempdetails[".editFields"][] = "status_id";

$tdataempdetails[".inlineEditFields"] = array();

$tdataempdetails[".updateSelectedFields"] = array();
$tdataempdetails[".updateSelectedFields"][] = "eid";
$tdataempdetails[".updateSelectedFields"][] = "whtasapp";
$tdataempdetails[".updateSelectedFields"][] = "localnum";
$tdataempdetails[".updateSelectedFields"][] = "skype";
$tdataempdetails[".updateSelectedFields"][] = "dropbox";
$tdataempdetails[".updateSelectedFields"][] = "email";
$tdataempdetails[".updateSelectedFields"][] = "dob";
$tdataempdetails[".updateSelectedFields"][] = "passportno";
$tdataempdetails[".updateSelectedFields"][] = "passport_expiry";
$tdataempdetails[".updateSelectedFields"][] = "visa_no";
$tdataempdetails[".updateSelectedFields"][] = "visa_expiry";
$tdataempdetails[".updateSelectedFields"][] = "division_id";
$tdataempdetails[".updateSelectedFields"][] = "doj";
$tdataempdetails[".updateSelectedFields"][] = "dor";
$tdataempdetails[".updateSelectedFields"][] = "status_id";


$tdataempdetails[".exportFields"] = array();
$tdataempdetails[".exportFields"][] = "eid";
$tdataempdetails[".exportFields"][] = "whtasapp";
$tdataempdetails[".exportFields"][] = "localnum";
$tdataempdetails[".exportFields"][] = "skype";
$tdataempdetails[".exportFields"][] = "dropbox";
$tdataempdetails[".exportFields"][] = "email";
$tdataempdetails[".exportFields"][] = "dob";
$tdataempdetails[".exportFields"][] = "passportno";
$tdataempdetails[".exportFields"][] = "passport_expiry";
$tdataempdetails[".exportFields"][] = "visa_no";
$tdataempdetails[".exportFields"][] = "visa_expiry";
$tdataempdetails[".exportFields"][] = "division_id";
$tdataempdetails[".exportFields"][] = "doj";
$tdataempdetails[".exportFields"][] = "dor";
$tdataempdetails[".exportFields"][] = "status_id";

$tdataempdetails[".importFields"] = array();
$tdataempdetails[".importFields"][] = "eid";
$tdataempdetails[".importFields"][] = "whtasapp";
$tdataempdetails[".importFields"][] = "localnum";
$tdataempdetails[".importFields"][] = "skype";
$tdataempdetails[".importFields"][] = "dropbox";
$tdataempdetails[".importFields"][] = "email";
$tdataempdetails[".importFields"][] = "dob";
$tdataempdetails[".importFields"][] = "passportno";
$tdataempdetails[".importFields"][] = "passport_expiry";
$tdataempdetails[".importFields"][] = "visa_no";
$tdataempdetails[".importFields"][] = "visa_expiry";
$tdataempdetails[".importFields"][] = "division_id";
$tdataempdetails[".importFields"][] = "doj";
$tdataempdetails[".importFields"][] = "dor";
$tdataempdetails[".importFields"][] = "status_id";

$tdataempdetails[".printFields"] = array();
$tdataempdetails[".printFields"][] = "eid";
$tdataempdetails[".printFields"][] = "whtasapp";
$tdataempdetails[".printFields"][] = "localnum";
$tdataempdetails[".printFields"][] = "skype";
$tdataempdetails[".printFields"][] = "dropbox";
$tdataempdetails[".printFields"][] = "email";
$tdataempdetails[".printFields"][] = "dob";
$tdataempdetails[".printFields"][] = "passportno";
$tdataempdetails[".printFields"][] = "passport_expiry";
$tdataempdetails[".printFields"][] = "visa_no";
$tdataempdetails[".printFields"][] = "visa_expiry";
$tdataempdetails[".printFields"][] = "division_id";
$tdataempdetails[".printFields"][] = "doj";
$tdataempdetails[".printFields"][] = "dor";
$tdataempdetails[".printFields"][] = "status_id";


//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","eid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "employee";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ename";
	
	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataempdetails["eid"] = $fdata;
//	whtasapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "whtasapp";
	$fdata["GoodName"] = "whtasapp";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","whtasapp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "whtasapp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "whtasapp";

	
	
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




	$tdataempdetails["whtasapp"] = $fdata;
//	localnum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "localnum";
	$fdata["GoodName"] = "localnum";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","localnum");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "localnum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "localnum";

	
	
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




	$tdataempdetails["localnum"] = $fdata;
//	skype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "skype";
	$fdata["GoodName"] = "skype";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","skype");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "skype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "skype";

	
	
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




	$tdataempdetails["skype"] = $fdata;
//	dropbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dropbox";
	$fdata["GoodName"] = "dropbox";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","dropbox");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dropbox";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dropbox";

	
	
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




	$tdataempdetails["dropbox"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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




	$tdataempdetails["email"] = $fdata;
//	dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dob";
	$fdata["GoodName"] = "dob";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","dob");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dob";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dob";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataempdetails["dob"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
			
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








	$tdataempdetails["password"] = $fdata;
//	passportno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "passportno";
	$fdata["GoodName"] = "passportno";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","passportno");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "passportno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "passportno";

	
	
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




	$tdataempdetails["passportno"] = $fdata;
//	passport_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "passport_expiry";
	$fdata["GoodName"] = "passport_expiry";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","passport_expiry");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "passport_expiry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "passport_expiry";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataempdetails["passport_expiry"] = $fdata;
//	visa_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "visa_no";
	$fdata["GoodName"] = "visa_no";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","visa_no");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "visa_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visa_no";

	
	
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




	$tdataempdetails["visa_no"] = $fdata;
//	visa_expiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "visa_expiry";
	$fdata["GoodName"] = "visa_expiry";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","visa_expiry");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "visa_expiry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visa_expiry";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataempdetails["visa_expiry"] = $fdata;
//	division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "division_id";
	$fdata["GoodName"] = "division_id";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","division_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataempdetails["division_id"] = $fdata;
//	doj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "doj";
	$fdata["GoodName"] = "doj";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","doj");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "doj";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doj";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataempdetails["doj"] = $fdata;
//	dor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dor";
	$fdata["GoodName"] = "dor";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","dor");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dor";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataempdetails["dor"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "empdetails";
	$fdata["Label"] = GetFieldLabel("empdetails","status_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_id";

	
	
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
	$edata["LookupTable"] = "emp_status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status_id";
	
	

	
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




	$tdataempdetails["status_id"] = $fdata;


$tables_data["empdetails"]=&$tdataempdetails;
$field_labels["empdetails"] = &$fieldLabelsempdetails;
$fieldToolTips["empdetails"] = &$fieldToolTipsempdetails;
$placeHolders["empdetails"] = &$placeHoldersempdetails;
$page_titles["empdetails"] = &$pageTitlesempdetails;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empdetails"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["empdetails"] = array();


	
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
					$masterTablesData["empdetails"][0] = $masterParams;
				$masterTablesData["empdetails"][0]["masterKeys"] = array();
	$masterTablesData["empdetails"][0]["masterKeys"][]="division_id";
				$masterTablesData["empdetails"][0]["detailKeys"] = array();
	$masterTablesData["empdetails"][0]["detailKeys"][]="division_id";
		
	
				$strOriginalDetailsTable="emp_status";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="emp_status";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "emp_status";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["empdetails"][1] = $masterParams;
				$masterTablesData["empdetails"][1]["masterKeys"] = array();
	$masterTablesData["empdetails"][1]["masterKeys"][]="status_id";
				$masterTablesData["empdetails"][1]["detailKeys"] = array();
	$masterTablesData["empdetails"][1]["detailKeys"][]="status_id";
		
	
				$strOriginalDetailsTable="employee";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employee";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employee";
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
					$masterTablesData["empdetails"][2] = $masterParams;
				$masterTablesData["empdetails"][2]["masterKeys"] = array();
	$masterTablesData["empdetails"][2]["masterKeys"][]="eid";
				$masterTablesData["empdetails"][2]["detailKeys"] = array();
	$masterTablesData["empdetails"][2]["detailKeys"][]="eid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empdetails()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	whtasapp,  	localnum,  	skype,  	dropbox,  	email,  	dob,  	password,  	passportno,  	passport_expiry,  	visa_no,  	visa_expiry,  	division_id,  	doj,  	dor,  	status_id";
$proto0["m_strFrom"] = "FROM empdetails";
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
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto6["m_sql"] = "eid";
$proto6["m_srcTableName"] = "empdetails";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "whtasapp",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto8["m_sql"] = "whtasapp";
$proto8["m_srcTableName"] = "empdetails";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "localnum",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto10["m_sql"] = "localnum";
$proto10["m_srcTableName"] = "empdetails";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto12["m_sql"] = "skype";
$proto12["m_srcTableName"] = "empdetails";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dropbox",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto14["m_sql"] = "dropbox";
$proto14["m_srcTableName"] = "empdetails";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "empdetails";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dob",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto18["m_sql"] = "dob";
$proto18["m_srcTableName"] = "empdetails";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto20["m_sql"] = "password";
$proto20["m_srcTableName"] = "empdetails";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "passportno",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto22["m_sql"] = "passportno";
$proto22["m_srcTableName"] = "empdetails";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "passport_expiry",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto24["m_sql"] = "passport_expiry";
$proto24["m_srcTableName"] = "empdetails";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_no",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto26["m_sql"] = "visa_no";
$proto26["m_srcTableName"] = "empdetails";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "visa_expiry",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto28["m_sql"] = "visa_expiry";
$proto28["m_srcTableName"] = "empdetails";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "division_id",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto30["m_sql"] = "division_id";
$proto30["m_srcTableName"] = "empdetails";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "doj",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto32["m_sql"] = "doj";
$proto32["m_srcTableName"] = "empdetails";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "dor",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto34["m_sql"] = "dor";
$proto34["m_srcTableName"] = "empdetails";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "empdetails",
	"m_srcTableName" => "empdetails"
));

$proto36["m_sql"] = "status_id";
$proto36["m_srcTableName"] = "empdetails";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "empdetails";
$proto39["m_srcTableName"] = "empdetails";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "eid";
$proto39["m_columns"][] = "whtasapp";
$proto39["m_columns"][] = "localnum";
$proto39["m_columns"][] = "skype";
$proto39["m_columns"][] = "dropbox";
$proto39["m_columns"][] = "email";
$proto39["m_columns"][] = "dob";
$proto39["m_columns"][] = "password";
$proto39["m_columns"][] = "passportno";
$proto39["m_columns"][] = "passport_expiry";
$proto39["m_columns"][] = "visa_no";
$proto39["m_columns"][] = "visa_expiry";
$proto39["m_columns"][] = "division_id";
$proto39["m_columns"][] = "doj";
$proto39["m_columns"][] = "dor";
$proto39["m_columns"][] = "status_id";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "empdetails";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "empdetails";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="empdetails";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empdetails = createSqlQuery_empdetails();


	
		;

																

$tdataempdetails[".sqlquery"] = $queryData_empdetails;

$tableEvents["empdetails"] = new eventsBase;
$tdataempdetails[".hasEvents"] = false;

?>