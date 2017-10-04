<?php
$dalTablebatchschedule = array();
$dalTablebatchschedule["sid"] = array("type"=>3,"varname"=>"sid");
$dalTablebatchschedule["Batchcode"] = array("type"=>200,"varname"=>"Batchcode");
$dalTablebatchschedule["sdate"] = array("type"=>7,"varname"=>"sdate");
$dalTablebatchschedule["stime"] = array("type"=>134,"varname"=>"stime");
$dalTablebatchschedule["etime"] = array("type"=>134,"varname"=>"etime");
$dalTablebatchschedule["status"] = array("type"=>200,"varname"=>"status");
$dalTablebatchschedule["remark"] = array("type"=>200,"varname"=>"remark");
$dalTablebatchschedule["realstime"] = array("type"=>134,"varname"=>"realstime");
$dalTablebatchschedule["realetime"] = array("type"=>134,"varname"=>"realetime");
$dalTablebatchschedule["attendance"] = array("type"=>200,"varname"=>"attendance");
	$dalTablebatchschedule["sid"]["key"]=true;

$dal_info["mydb_at_localhost__batchschedule"] = &$dalTablebatchschedule;
?>