<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["division"]["batch.division_id"]["edit"] = array("table" => "batch", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["university"]["batch.university_id"]["edit"] = array("table" => "batch", "field" => "university_id", "page" => "edit");
	$lookupTableLinks["department"]["batch.department_id"]["edit"] = array("table" => "batch", "field" => "department_id", "page" => "edit");
	$lookupTableLinks["courses"]["batch.cid"]["edit"] = array("table" => "batch", "field" => "cid", "page" => "edit");
	$lookupTableLinks["consultant"]["batch.ey_spoc"]["edit"] = array("table" => "batch", "field" => "ey_spoc", "page" => "edit");
	$lookupTableLinks["employees"]["batch.local_spoc"]["edit"] = array("table" => "batch", "field" => "local_spoc", "page" => "edit");
	$lookupTableLinks["employees"]["batch.tech_trainer"]["edit"] = array("table" => "batch", "field" => "tech_trainer", "page" => "edit");
	$lookupTableLinks["employees"]["batch.soft_skill_trainer"]["edit"] = array("table" => "batch", "field" => "soft_skill_trainer", "page" => "edit");
	$lookupTableLinks["employees"]["consultant.eid"]["edit"] = array("table" => "consultant", "field" => "eid", "page" => "edit");
	$lookupTableLinks["division"]["consultant.divison_id"]["edit"] = array("table" => "consultant", "field" => "divison_id", "page" => "edit");
	$lookupTableLinks["division"]["district.division_id"]["edit"] = array("table" => "district", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["division"]["employees.division_id"]["edit"] = array("table" => "employees", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["courses"]["employees.cid"]["edit"] = array("table" => "employees", "field" => "cid", "page" => "edit");
	$lookupTableLinks["courses"]["trainer.cid"]["edit"] = array("table" => "trainer", "field" => "cid", "page" => "edit");
	$lookupTableLinks["division"]["university.division_id"]["edit"] = array("table" => "university", "field" => "division_id", "page" => "edit");
}

?>