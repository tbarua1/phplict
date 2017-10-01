<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatrainer = array();
	$tdatatrainer[".truncateText"] = true;
	$tdatatrainer[".NumberOfChars"] = 80;
	$tdatatrainer[".ShortName"] = "trainer";
	$tdatatrainer[".OwnerID"] = "";
	$tdatatrainer[".OriginalTable"] = "trainer";

//	field labels
$fieldLabelstrainer = array();
$fieldToolTipstrainer = array();
$pageTitlestrainer = array();
$placeHolderstrainer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrainer["English"] = array();
	$fieldToolTipstrainer["English"] = array();
	$placeHolderstrainer["English"] = array();
	$pageTitlestrainer["English"] = array();
	$fieldLabelstrainer["English"]["id"] = "Id";
	$fieldToolTipstrainer["English"]["id"] = "";
	$placeHolderstrainer["English"]["id"] = "";
	$fieldLabelstrainer["English"]["cid"] = "Cid";
	$fieldToolTipstrainer["English"]["cid"] = "";
	$placeHolderstrainer["English"]["cid"] = "";
	$fieldLabelstrainer["English"]["date"] = "Date";
	$fieldToolTipstrainer["English"]["date"] = "";
	$placeHolderstrainer["English"]["date"] = "";
	$fieldLabelstrainer["English"]["emailid"] = "Emailid";
	$fieldToolTipstrainer["English"]["emailid"] = "";
	$placeHolderstrainer["English"]["emailid"] = "";
	$fieldLabelstrainer["English"]["experience"] = "Experience";
	$fieldToolTipstrainer["English"]["experience"] = "";
	$placeHolderstrainer["English"]["experience"] = "";
	$fieldLabelstrainer["English"]["mobile"] = "Mobile";
	$fieldToolTipstrainer["English"]["mobile"] = "";
	$placeHolderstrainer["English"]["mobile"] = "";
	$fieldLabelstrainer["English"]["name"] = "Name";
	$fieldToolTipstrainer["English"]["name"] = "";
	$placeHolderstrainer["English"]["name"] = "";
	$fieldLabelstrainer["English"]["natianality"] = "Natianality";
	$fieldToolTipstrainer["English"]["natianality"] = "";
	$placeHolderstrainer["English"]["natianality"] = "";
	$fieldLabelstrainer["English"]["password"] = "Password";
	$fieldToolTipstrainer["English"]["password"] = "";
	$placeHolderstrainer["English"]["password"] = "";
	$fieldLabelstrainer["English"]["qualification"] = "Qualification";
	$fieldToolTipstrainer["English"]["qualification"] = "";
	$placeHolderstrainer["English"]["qualification"] = "";
	$fieldLabelstrainer["English"]["registeredDate"] = "Registered Date";
	$fieldToolTipstrainer["English"]["registeredDate"] = "";
	$placeHolderstrainer["English"]["registeredDate"] = "";
	$fieldLabelstrainer["English"]["skillset"] = "Skillset";
	$fieldToolTipstrainer["English"]["skillset"] = "";
	$placeHolderstrainer["English"]["skillset"] = "";
	$fieldLabelstrainer["English"]["skype"] = "Skype";
	$fieldToolTipstrainer["English"]["skype"] = "";
	$placeHolderstrainer["English"]["skype"] = "";
	$fieldLabelstrainer["English"]["username"] = "Username";
	$fieldToolTipstrainer["English"]["username"] = "";
	$placeHolderstrainer["English"]["username"] = "";
	$fieldLabelstrainer["English"]["usertype"] = "Usertype";
	$fieldToolTipstrainer["English"]["usertype"] = "";
	$placeHolderstrainer["English"]["usertype"] = "";
	$fieldLabelstrainer["English"]["whatsapp"] = "Whatsapp";
	$fieldToolTipstrainer["English"]["whatsapp"] = "";
	$placeHolderstrainer["English"]["whatsapp"] = "";
	$fieldLabelstrainer["English"]["photo"] = "Photo";
	$fieldToolTipstrainer["English"]["photo"] = "";
	$placeHolderstrainer["English"]["photo"] = "";
	if (count($fieldToolTipstrainer["English"]))
		$tdatatrainer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstrainer[""] = array();
	$fieldToolTipstrainer[""] = array();
	$placeHolderstrainer[""] = array();
	$pageTitlestrainer[""] = array();
	if (count($fieldToolTipstrainer[""]))
		$tdatatrainer[".isUseToolTips"] = true;
}


	$tdatatrainer[".NCSearch"] = true;



$tdatatrainer[".shortTableName"] = "trainer";
$tdatatrainer[".nSecOptions"] = 0;
$tdatatrainer[".recsPerRowPrint"] = 1;
$tdatatrainer[".mainTableOwnerID"] = "";
$tdatatrainer[".moveNext"] = 1;
$tdatatrainer[".entityType"] = 0;

$tdatatrainer[".strOriginalTableName"] = "trainer";

	



$tdatatrainer[".showAddInPopup"] = false;

$tdatatrainer[".showEditInPopup"] = false;

$tdatatrainer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatrainer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatrainer[".fieldsForRegister"] = array();

$tdatatrainer[".listAjax"] = false;

	$tdatatrainer[".audit"] = false;

	$tdatatrainer[".locking"] = false;

$tdatatrainer[".edit"] = true;
$tdatatrainer[".afterEditAction"] = 1;
$tdatatrainer[".closePopupAfterEdit"] = 1;
$tdatatrainer[".afterEditActionDetTable"] = "";

$tdatatrainer[".add"] = true;
$tdatatrainer[".afterAddAction"] = 1;
$tdatatrainer[".closePopupAfterAdd"] = 1;
$tdatatrainer[".afterAddActionDetTable"] = "";

$tdatatrainer[".list"] = true;



$tdatatrainer[".reorderRecordsByHeader"] = true;


$tdatatrainer[".exportFormatting"] = 2;
$tdatatrainer[".exportDelimiter"] = ",";
		
$tdatatrainer[".view"] = true;

$tdatatrainer[".import"] = true;

$tdatatrainer[".exportTo"] = true;

$tdatatrainer[".printFriendly"] = true;

$tdatatrainer[".delete"] = true;

$tdatatrainer[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatrainer[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatrainer[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatrainer[".searchSaving"] = false;
//

$tdatatrainer[".showSearchPanel"] = true;
		$tdatatrainer[".flexibleSearch"] = true;

$tdatatrainer[".isUseAjaxSuggest"] = true;

$tdatatrainer[".rowHighlite"] = true;





$tdatatrainer[".ajaxCodeSnippetAdded"] = false;

$tdatatrainer[".buttonsAdded"] = false;

$tdatatrainer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrainer[".isUseTimeForSearch"] = false;



$tdatatrainer[".badgeColor"] = "DC143C";


$tdatatrainer[".allSearchFields"] = array();
$tdatatrainer[".filterFields"] = array();
$tdatatrainer[".requiredSearchFields"] = array();

$tdatatrainer[".allSearchFields"][] = "id";
	$tdatatrainer[".allSearchFields"][] = "cid";
	$tdatatrainer[".allSearchFields"][] = "date";
	$tdatatrainer[".allSearchFields"][] = "emailid";
	$tdatatrainer[".allSearchFields"][] = "experience";
	$tdatatrainer[".allSearchFields"][] = "mobile";
	$tdatatrainer[".allSearchFields"][] = "name";
	$tdatatrainer[".allSearchFields"][] = "natianality";
	$tdatatrainer[".allSearchFields"][] = "password";
	$tdatatrainer[".allSearchFields"][] = "qualification";
	$tdatatrainer[".allSearchFields"][] = "registeredDate";
	$tdatatrainer[".allSearchFields"][] = "skillset";
	$tdatatrainer[".allSearchFields"][] = "skype";
	$tdatatrainer[".allSearchFields"][] = "username";
	$tdatatrainer[".allSearchFields"][] = "usertype";
	$tdatatrainer[".allSearchFields"][] = "whatsapp";
	$tdatatrainer[".allSearchFields"][] = "photo";
	

$tdatatrainer[".googleLikeFields"] = array();
$tdatatrainer[".googleLikeFields"][] = "id";
$tdatatrainer[".googleLikeFields"][] = "cid";
$tdatatrainer[".googleLikeFields"][] = "date";
$tdatatrainer[".googleLikeFields"][] = "emailid";
$tdatatrainer[".googleLikeFields"][] = "experience";
$tdatatrainer[".googleLikeFields"][] = "mobile";
$tdatatrainer[".googleLikeFields"][] = "name";
$tdatatrainer[".googleLikeFields"][] = "natianality";
$tdatatrainer[".googleLikeFields"][] = "password";
$tdatatrainer[".googleLikeFields"][] = "qualification";
$tdatatrainer[".googleLikeFields"][] = "registeredDate";
$tdatatrainer[".googleLikeFields"][] = "skillset";
$tdatatrainer[".googleLikeFields"][] = "skype";
$tdatatrainer[".googleLikeFields"][] = "username";
$tdatatrainer[".googleLikeFields"][] = "usertype";
$tdatatrainer[".googleLikeFields"][] = "whatsapp";
$tdatatrainer[".googleLikeFields"][] = "photo";


$tdatatrainer[".advSearchFields"] = array();
$tdatatrainer[".advSearchFields"][] = "id";
$tdatatrainer[".advSearchFields"][] = "cid";
$tdatatrainer[".advSearchFields"][] = "date";
$tdatatrainer[".advSearchFields"][] = "emailid";
$tdatatrainer[".advSearchFields"][] = "experience";
$tdatatrainer[".advSearchFields"][] = "mobile";
$tdatatrainer[".advSearchFields"][] = "name";
$tdatatrainer[".advSearchFields"][] = "natianality";
$tdatatrainer[".advSearchFields"][] = "password";
$tdatatrainer[".advSearchFields"][] = "qualification";
$tdatatrainer[".advSearchFields"][] = "registeredDate";
$tdatatrainer[".advSearchFields"][] = "skillset";
$tdatatrainer[".advSearchFields"][] = "skype";
$tdatatrainer[".advSearchFields"][] = "username";
$tdatatrainer[".advSearchFields"][] = "usertype";
$tdatatrainer[".advSearchFields"][] = "whatsapp";
$tdatatrainer[".advSearchFields"][] = "photo";

$tdatatrainer[".tableType"] = "list";

$tdatatrainer[".printerPageOrientation"] = 0;
$tdatatrainer[".nPrinterPageScale"] = 100;

$tdatatrainer[".nPrinterSplitRecords"] = 40;

$tdatatrainer[".nPrinterPDFSplitRecords"] = 40;



$tdatatrainer[".geocodingEnabled"] = false;





$tdatatrainer[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatrainer[".pageSize"] = 20;

$tdatatrainer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatrainer[".strOrderBy"] = $tstrOrderBy;

$tdatatrainer[".orderindexes"] = array();

$tdatatrainer[".sqlHead"] = "SELECT id,  	cid,  	`date`,  	emailid,  	experience,  	mobile,  	name,  	natianality,  	password,  	qualification,  	registeredDate,  	skillset,  	skype,  	username,  	usertype,  	whatsapp,  	photo";
$tdatatrainer[".sqlFrom"] = "FROM trainer";
$tdatatrainer[".sqlWhereExpr"] = "";
$tdatatrainer[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrainer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrainer[".arrGroupsPerPage"] = $arrGPP;

$tdatatrainer[".highlightSearchResults"] = true;

$tableKeystrainer = array();
$tableKeystrainer[] = "id";
$tdatatrainer[".Keys"] = $tableKeystrainer;

$tdatatrainer[".listFields"] = array();
$tdatatrainer[".listFields"][] = "id";
$tdatatrainer[".listFields"][] = "cid";
$tdatatrainer[".listFields"][] = "date";
$tdatatrainer[".listFields"][] = "emailid";
$tdatatrainer[".listFields"][] = "experience";
$tdatatrainer[".listFields"][] = "mobile";
$tdatatrainer[".listFields"][] = "name";
$tdatatrainer[".listFields"][] = "natianality";
$tdatatrainer[".listFields"][] = "password";
$tdatatrainer[".listFields"][] = "qualification";
$tdatatrainer[".listFields"][] = "registeredDate";
$tdatatrainer[".listFields"][] = "skillset";
$tdatatrainer[".listFields"][] = "skype";
$tdatatrainer[".listFields"][] = "username";
$tdatatrainer[".listFields"][] = "usertype";
$tdatatrainer[".listFields"][] = "whatsapp";
$tdatatrainer[".listFields"][] = "photo";

$tdatatrainer[".hideMobileList"] = array();


$tdatatrainer[".viewFields"] = array();
$tdatatrainer[".viewFields"][] = "id";
$tdatatrainer[".viewFields"][] = "cid";
$tdatatrainer[".viewFields"][] = "date";
$tdatatrainer[".viewFields"][] = "emailid";
$tdatatrainer[".viewFields"][] = "experience";
$tdatatrainer[".viewFields"][] = "mobile";
$tdatatrainer[".viewFields"][] = "name";
$tdatatrainer[".viewFields"][] = "natianality";
$tdatatrainer[".viewFields"][] = "password";
$tdatatrainer[".viewFields"][] = "qualification";
$tdatatrainer[".viewFields"][] = "registeredDate";
$tdatatrainer[".viewFields"][] = "skillset";
$tdatatrainer[".viewFields"][] = "skype";
$tdatatrainer[".viewFields"][] = "username";
$tdatatrainer[".viewFields"][] = "usertype";
$tdatatrainer[".viewFields"][] = "whatsapp";
$tdatatrainer[".viewFields"][] = "photo";

$tdatatrainer[".addFields"] = array();
$tdatatrainer[".addFields"][] = "cid";
$tdatatrainer[".addFields"][] = "date";
$tdatatrainer[".addFields"][] = "emailid";
$tdatatrainer[".addFields"][] = "experience";
$tdatatrainer[".addFields"][] = "mobile";
$tdatatrainer[".addFields"][] = "name";
$tdatatrainer[".addFields"][] = "natianality";
$tdatatrainer[".addFields"][] = "password";
$tdatatrainer[".addFields"][] = "qualification";
$tdatatrainer[".addFields"][] = "registeredDate";
$tdatatrainer[".addFields"][] = "skillset";
$tdatatrainer[".addFields"][] = "skype";
$tdatatrainer[".addFields"][] = "username";
$tdatatrainer[".addFields"][] = "usertype";
$tdatatrainer[".addFields"][] = "whatsapp";
$tdatatrainer[".addFields"][] = "photo";

$tdatatrainer[".masterListFields"] = array();
$tdatatrainer[".masterListFields"][] = "id";
$tdatatrainer[".masterListFields"][] = "cid";
$tdatatrainer[".masterListFields"][] = "date";
$tdatatrainer[".masterListFields"][] = "emailid";
$tdatatrainer[".masterListFields"][] = "experience";
$tdatatrainer[".masterListFields"][] = "mobile";
$tdatatrainer[".masterListFields"][] = "name";
$tdatatrainer[".masterListFields"][] = "natianality";
$tdatatrainer[".masterListFields"][] = "password";
$tdatatrainer[".masterListFields"][] = "qualification";
$tdatatrainer[".masterListFields"][] = "registeredDate";
$tdatatrainer[".masterListFields"][] = "skillset";
$tdatatrainer[".masterListFields"][] = "skype";
$tdatatrainer[".masterListFields"][] = "username";
$tdatatrainer[".masterListFields"][] = "usertype";
$tdatatrainer[".masterListFields"][] = "whatsapp";
$tdatatrainer[".masterListFields"][] = "photo";

$tdatatrainer[".inlineAddFields"] = array();
$tdatatrainer[".inlineAddFields"][] = "cid";
$tdatatrainer[".inlineAddFields"][] = "date";
$tdatatrainer[".inlineAddFields"][] = "emailid";
$tdatatrainer[".inlineAddFields"][] = "experience";
$tdatatrainer[".inlineAddFields"][] = "mobile";
$tdatatrainer[".inlineAddFields"][] = "name";
$tdatatrainer[".inlineAddFields"][] = "natianality";
$tdatatrainer[".inlineAddFields"][] = "password";
$tdatatrainer[".inlineAddFields"][] = "qualification";
$tdatatrainer[".inlineAddFields"][] = "registeredDate";
$tdatatrainer[".inlineAddFields"][] = "skillset";
$tdatatrainer[".inlineAddFields"][] = "skype";
$tdatatrainer[".inlineAddFields"][] = "username";
$tdatatrainer[".inlineAddFields"][] = "usertype";
$tdatatrainer[".inlineAddFields"][] = "whatsapp";
$tdatatrainer[".inlineAddFields"][] = "photo";

$tdatatrainer[".editFields"] = array();
$tdatatrainer[".editFields"][] = "cid";
$tdatatrainer[".editFields"][] = "date";
$tdatatrainer[".editFields"][] = "emailid";
$tdatatrainer[".editFields"][] = "experience";
$tdatatrainer[".editFields"][] = "mobile";
$tdatatrainer[".editFields"][] = "name";
$tdatatrainer[".editFields"][] = "natianality";
$tdatatrainer[".editFields"][] = "password";
$tdatatrainer[".editFields"][] = "qualification";
$tdatatrainer[".editFields"][] = "registeredDate";
$tdatatrainer[".editFields"][] = "skillset";
$tdatatrainer[".editFields"][] = "skype";
$tdatatrainer[".editFields"][] = "username";
$tdatatrainer[".editFields"][] = "usertype";
$tdatatrainer[".editFields"][] = "whatsapp";
$tdatatrainer[".editFields"][] = "photo";

$tdatatrainer[".inlineEditFields"] = array();
$tdatatrainer[".inlineEditFields"][] = "cid";
$tdatatrainer[".inlineEditFields"][] = "date";
$tdatatrainer[".inlineEditFields"][] = "emailid";
$tdatatrainer[".inlineEditFields"][] = "experience";
$tdatatrainer[".inlineEditFields"][] = "mobile";
$tdatatrainer[".inlineEditFields"][] = "name";
$tdatatrainer[".inlineEditFields"][] = "natianality";
$tdatatrainer[".inlineEditFields"][] = "password";
$tdatatrainer[".inlineEditFields"][] = "qualification";
$tdatatrainer[".inlineEditFields"][] = "registeredDate";
$tdatatrainer[".inlineEditFields"][] = "skillset";
$tdatatrainer[".inlineEditFields"][] = "skype";
$tdatatrainer[".inlineEditFields"][] = "username";
$tdatatrainer[".inlineEditFields"][] = "usertype";
$tdatatrainer[".inlineEditFields"][] = "whatsapp";
$tdatatrainer[".inlineEditFields"][] = "photo";

$tdatatrainer[".updateSelectedFields"] = array();
$tdatatrainer[".updateSelectedFields"][] = "cid";
$tdatatrainer[".updateSelectedFields"][] = "date";
$tdatatrainer[".updateSelectedFields"][] = "emailid";
$tdatatrainer[".updateSelectedFields"][] = "experience";
$tdatatrainer[".updateSelectedFields"][] = "mobile";
$tdatatrainer[".updateSelectedFields"][] = "name";
$tdatatrainer[".updateSelectedFields"][] = "natianality";
$tdatatrainer[".updateSelectedFields"][] = "password";
$tdatatrainer[".updateSelectedFields"][] = "qualification";
$tdatatrainer[".updateSelectedFields"][] = "registeredDate";
$tdatatrainer[".updateSelectedFields"][] = "skillset";
$tdatatrainer[".updateSelectedFields"][] = "skype";
$tdatatrainer[".updateSelectedFields"][] = "username";
$tdatatrainer[".updateSelectedFields"][] = "usertype";
$tdatatrainer[".updateSelectedFields"][] = "whatsapp";
$tdatatrainer[".updateSelectedFields"][] = "photo";


$tdatatrainer[".exportFields"] = array();
$tdatatrainer[".exportFields"][] = "id";
$tdatatrainer[".exportFields"][] = "cid";
$tdatatrainer[".exportFields"][] = "date";
$tdatatrainer[".exportFields"][] = "emailid";
$tdatatrainer[".exportFields"][] = "experience";
$tdatatrainer[".exportFields"][] = "mobile";
$tdatatrainer[".exportFields"][] = "name";
$tdatatrainer[".exportFields"][] = "natianality";
$tdatatrainer[".exportFields"][] = "password";
$tdatatrainer[".exportFields"][] = "qualification";
$tdatatrainer[".exportFields"][] = "registeredDate";
$tdatatrainer[".exportFields"][] = "skillset";
$tdatatrainer[".exportFields"][] = "skype";
$tdatatrainer[".exportFields"][] = "username";
$tdatatrainer[".exportFields"][] = "usertype";
$tdatatrainer[".exportFields"][] = "whatsapp";
$tdatatrainer[".exportFields"][] = "photo";

$tdatatrainer[".importFields"] = array();
$tdatatrainer[".importFields"][] = "id";
$tdatatrainer[".importFields"][] = "cid";
$tdatatrainer[".importFields"][] = "date";
$tdatatrainer[".importFields"][] = "emailid";
$tdatatrainer[".importFields"][] = "experience";
$tdatatrainer[".importFields"][] = "mobile";
$tdatatrainer[".importFields"][] = "name";
$tdatatrainer[".importFields"][] = "natianality";
$tdatatrainer[".importFields"][] = "password";
$tdatatrainer[".importFields"][] = "qualification";
$tdatatrainer[".importFields"][] = "registeredDate";
$tdatatrainer[".importFields"][] = "skillset";
$tdatatrainer[".importFields"][] = "skype";
$tdatatrainer[".importFields"][] = "username";
$tdatatrainer[".importFields"][] = "usertype";
$tdatatrainer[".importFields"][] = "whatsapp";
$tdatatrainer[".importFields"][] = "photo";

$tdatatrainer[".printFields"] = array();
$tdatatrainer[".printFields"][] = "id";
$tdatatrainer[".printFields"][] = "cid";
$tdatatrainer[".printFields"][] = "date";
$tdatatrainer[".printFields"][] = "emailid";
$tdatatrainer[".printFields"][] = "experience";
$tdatatrainer[".printFields"][] = "mobile";
$tdatatrainer[".printFields"][] = "name";
$tdatatrainer[".printFields"][] = "natianality";
$tdatatrainer[".printFields"][] = "password";
$tdatatrainer[".printFields"][] = "qualification";
$tdatatrainer[".printFields"][] = "registeredDate";
$tdatatrainer[".printFields"][] = "skillset";
$tdatatrainer[".printFields"][] = "skype";
$tdatatrainer[".printFields"][] = "username";
$tdatatrainer[".printFields"][] = "usertype";
$tdatatrainer[".printFields"][] = "whatsapp";
$tdatatrainer[".printFields"][] = "photo";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatatrainer["id"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","cid");
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

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cid";

	
	
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
	$edata["LookupTable"] = "courses";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cid";
	
	

	
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




	$tdatatrainer["cid"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","date");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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




	$tdatatrainer["date"] = $fdata;
//	emailid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "emailid";
	$fdata["GoodName"] = "emailid";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","emailid");
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

		$fdata["strField"] = "emailid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emailid";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["emailid"] = $fdata;
//	experience
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "experience";
	$fdata["GoodName"] = "experience";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","experience");
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

		$fdata["strField"] = "experience";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "experience";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["experience"] = $fdata;
//	mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mobile";
	$fdata["GoodName"] = "mobile";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","mobile");
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

		$fdata["strField"] = "mobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mobile";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["mobile"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","name");
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

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["name"] = $fdata;
//	natianality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "natianality";
	$fdata["GoodName"] = "natianality";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","natianality");
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

		$fdata["strField"] = "natianality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "natianality";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["natianality"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","password");
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

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["password"] = $fdata;
//	qualification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "qualification";
	$fdata["GoodName"] = "qualification";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","qualification");
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

		$fdata["strField"] = "qualification";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qualification";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["qualification"] = $fdata;
//	registeredDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "registeredDate";
	$fdata["GoodName"] = "registeredDate";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","registeredDate");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "registeredDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registeredDate";

	
	
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




	$tdatatrainer["registeredDate"] = $fdata;
//	skillset
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "skillset";
	$fdata["GoodName"] = "skillset";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","skillset");
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

		$fdata["strField"] = "skillset";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "skillset";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["skillset"] = $fdata;
//	skype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "skype";
	$fdata["GoodName"] = "skype";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","skype");
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["skype"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","username");
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

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["username"] = $fdata;
//	usertype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "usertype";
	$fdata["GoodName"] = "usertype";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","usertype");
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

		$fdata["strField"] = "usertype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usertype";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["usertype"] = $fdata;
//	whatsapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "whatsapp";
	$fdata["GoodName"] = "whatsapp";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","whatsapp");
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

		$fdata["strField"] = "whatsapp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "whatsapp";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["whatsapp"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "trainer";
	$fdata["Label"] = GetFieldLabel("trainer","photo");
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

		$fdata["strField"] = "photo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "photo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatrainer["photo"] = $fdata;


$tables_data["trainer"]=&$tdatatrainer;
$field_labels["trainer"] = &$fieldLabelstrainer;
$fieldToolTips["trainer"] = &$fieldToolTipstrainer;
$placeHolders["trainer"] = &$placeHolderstrainer;
$page_titles["trainer"] = &$pageTitlestrainer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["trainer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["trainer"] = array();


	
				$strOriginalDetailsTable="courses";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="courses";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "courses";
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
					$masterTablesData["trainer"][0] = $masterParams;
				$masterTablesData["trainer"][0]["masterKeys"] = array();
	$masterTablesData["trainer"][0]["masterKeys"][]="cid";
				$masterTablesData["trainer"][0]["detailKeys"] = array();
	$masterTablesData["trainer"][0]["detailKeys"][]="cid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_trainer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	cid,  	`date`,  	emailid,  	experience,  	mobile,  	name,  	natianality,  	password,  	qualification,  	registeredDate,  	skillset,  	skype,  	username,  	usertype,  	whatsapp,  	photo";
$proto0["m_strFrom"] = "FROM trainer";
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
	"m_strName" => "id",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "trainer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto8["m_sql"] = "cid";
$proto8["m_srcTableName"] = "trainer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto10["m_sql"] = "`date`";
$proto10["m_srcTableName"] = "trainer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "emailid",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto12["m_sql"] = "emailid";
$proto12["m_srcTableName"] = "trainer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "experience",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto14["m_sql"] = "experience";
$proto14["m_srcTableName"] = "trainer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mobile",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto16["m_sql"] = "mobile";
$proto16["m_srcTableName"] = "trainer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto18["m_sql"] = "name";
$proto18["m_srcTableName"] = "trainer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "natianality",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto20["m_sql"] = "natianality";
$proto20["m_srcTableName"] = "trainer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto22["m_sql"] = "password";
$proto22["m_srcTableName"] = "trainer";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "qualification",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto24["m_sql"] = "qualification";
$proto24["m_srcTableName"] = "trainer";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "registeredDate",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto26["m_sql"] = "registeredDate";
$proto26["m_srcTableName"] = "trainer";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "skillset",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto28["m_sql"] = "skillset";
$proto28["m_srcTableName"] = "trainer";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "skype",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto30["m_sql"] = "skype";
$proto30["m_srcTableName"] = "trainer";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto32["m_sql"] = "username";
$proto32["m_srcTableName"] = "trainer";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "usertype",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto34["m_sql"] = "usertype";
$proto34["m_srcTableName"] = "trainer";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "whatsapp",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto36["m_sql"] = "whatsapp";
$proto36["m_srcTableName"] = "trainer";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "trainer",
	"m_srcTableName" => "trainer"
));

$proto38["m_sql"] = "photo";
$proto38["m_srcTableName"] = "trainer";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "trainer";
$proto41["m_srcTableName"] = "trainer";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "cid";
$proto41["m_columns"][] = "date";
$proto41["m_columns"][] = "emailid";
$proto41["m_columns"][] = "experience";
$proto41["m_columns"][] = "mobile";
$proto41["m_columns"][] = "name";
$proto41["m_columns"][] = "natianality";
$proto41["m_columns"][] = "password";
$proto41["m_columns"][] = "qualification";
$proto41["m_columns"][] = "registeredDate";
$proto41["m_columns"][] = "skillset";
$proto41["m_columns"][] = "skype";
$proto41["m_columns"][] = "username";
$proto41["m_columns"][] = "usertype";
$proto41["m_columns"][] = "whatsapp";
$proto41["m_columns"][] = "photo";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "trainer";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "trainer";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="trainer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trainer = createSqlQuery_trainer();


	
		;

																	

$tdatatrainer[".sqlquery"] = $queryData_trainer;

$tableEvents["trainer"] = new eventsBase;
$tdatatrainer[".hasEvents"] = false;

?>