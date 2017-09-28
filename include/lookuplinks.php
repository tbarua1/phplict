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
	$lookupTableLinks["consultant_view"]["batch.ey_spoc"]["edit"] = array("table" => "batch", "field" => "ey_spoc", "page" => "edit");
	$lookupTableLinks["employees1"]["batch.local_spoc"]["edit"] = array("table" => "batch", "field" => "local_spoc", "page" => "edit");
	$lookupTableLinks["employees"]["batch.tech_trainer"]["edit"] = array("table" => "batch", "field" => "tech_trainer", "page" => "edit");
	$lookupTableLinks["employees"]["batch.soft_skill_trainer"]["edit"] = array("table" => "batch", "field" => "soft_skill_trainer", "page" => "edit");
	$lookupTableLinks["division"]["district.division_id"]["edit"] = array("table" => "district", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["division"]["university.division_id"]["edit"] = array("table" => "university", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["division"]["employees.division_id"]["edit"] = array("table" => "employees", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["emp_status"]["employees.status_id"]["edit"] = array("table" => "employees", "field" => "status_id", "page" => "edit");
	$lookupTableLinks["courses"]["employees.cid"]["edit"] = array("table" => "employees", "field" => "cid", "page" => "edit");
	$lookupTableLinks["division"]["full_batch_details.division_id"]["edit"] = array("table" => "full_batch_details", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["university"]["full_batch_details.university_id"]["edit"] = array("table" => "full_batch_details", "field" => "university_id", "page" => "edit");
	$lookupTableLinks["department"]["full_batch_details.department_id"]["edit"] = array("table" => "full_batch_details", "field" => "department_id", "page" => "edit");
	$lookupTableLinks["courses"]["full_batch_details.cid"]["edit"] = array("table" => "full_batch_details", "field" => "cid", "page" => "edit");
	$lookupTableLinks["consultant_view"]["full_batch_details.ey_spoc"]["edit"] = array("table" => "full_batch_details", "field" => "ey_spoc", "page" => "edit");
	$lookupTableLinks["employees"]["full_batch_details.local_spoc"]["edit"] = array("table" => "full_batch_details", "field" => "local_spoc", "page" => "edit");
	$lookupTableLinks["employees"]["full_batch_details.tech_trainer"]["edit"] = array("table" => "full_batch_details", "field" => "tech_trainer", "page" => "edit");
	$lookupTableLinks["employees"]["full_batch_details.soft_skill_trainer"]["edit"] = array("table" => "full_batch_details", "field" => "soft_skill_trainer", "page" => "edit");
	$lookupTableLinks["batch"]["batchschedule.Batchcode"]["edit"] = array("table" => "batchschedule", "field" => "Batchcode", "page" => "edit");
	$lookupTableLinks["division"]["admin_members.division_id"]["edit"] = array("table" => "admin_members", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["emp_status"]["admin_members.status_id"]["edit"] = array("table" => "admin_members", "field" => "status_id", "page" => "edit");
	$lookupTableLinks["courses"]["admin_members.cid"]["edit"] = array("table" => "admin_members", "field" => "cid", "page" => "edit");
	$lookupTableLinks["division"]["admin_users.division_id"]["edit"] = array("table" => "admin_users", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["emp_status"]["admin_users.status_id"]["edit"] = array("table" => "admin_users", "field" => "status_id", "page" => "edit");
	$lookupTableLinks["courses"]["admin_users.cid"]["edit"] = array("table" => "admin_users", "field" => "cid", "page" => "edit");
	$lookupTableLinks["division"]["employees1.division_id"]["edit"] = array("table" => "employees1", "field" => "division_id", "page" => "edit");
	$lookupTableLinks["emp_status"]["employees1.status_id"]["edit"] = array("table" => "employees1", "field" => "status_id", "page" => "edit");
	$lookupTableLinks["courses"]["employees1.cid"]["edit"] = array("table" => "employees1", "field" => "cid", "page" => "edit");
	$lookupTableLinks["employees"]["consultant.eid"]["edit"] = array("table" => "consultant", "field" => "eid", "page" => "edit");
	$lookupTableLinks["division"]["consultant.divison_id"]["edit"] = array("table" => "consultant", "field" => "divison_id", "page" => "edit");
}

?>