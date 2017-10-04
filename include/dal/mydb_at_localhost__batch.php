<?php
$dalTablebatch = array();
$dalTablebatch["batch_id"] = array("type"=>3,"varname"=>"batch_id");
$dalTablebatch["Batchcode"] = array("type"=>200,"varname"=>"Batchcode");
$dalTablebatch["fbgroup"] = array("type"=>200,"varname"=>"fbgroup");
$dalTablebatch["division_id"] = array("type"=>3,"varname"=>"division_id");
$dalTablebatch["university_id"] = array("type"=>3,"varname"=>"university_id");
$dalTablebatch["department_id"] = array("type"=>3,"varname"=>"department_id");
$dalTablebatch["starting_Date"] = array("type"=>7,"varname"=>"starting_Date");
$dalTablebatch["Track"] = array("type"=>200,"varname"=>"Track");
$dalTablebatch["cid"] = array("type"=>3,"varname"=>"cid");
$dalTablebatch["status"] = array("type"=>200,"varname"=>"status");
$dalTablebatch["uni_spoc_name"] = array("type"=>200,"varname"=>"uni_spoc_name");
$dalTablebatch["uni_spoc_contact"] = array("type"=>200,"varname"=>"uni_spoc_contact");
$dalTablebatch["ey_spoc"] = array("type"=>3,"varname"=>"ey_spoc");
$dalTablebatch["local_spoc"] = array("type"=>3,"varname"=>"local_spoc");
$dalTablebatch["schedule"] = array("type"=>200,"varname"=>"schedule");
$dalTablebatch["tech_trainer"] = array("type"=>3,"varname"=>"tech_trainer");
$dalTablebatch["soft_skill_trainer"] = array("type"=>3,"varname"=>"soft_skill_trainer");
	$dalTablebatch["batch_id"]["key"]=true;

$dal_info["mydb_at_localhost__batch"] = &$dalTablebatch;
?>