<?php
$dalTablebatchschedule = array();
$dalTablebatchschedule["sid"] = array("type"=>3,"varname"=>"sid", "name" => "sid");
$dalTablebatchschedule["Batchcode"] = array("type"=>200,"varname"=>"Batchcode", "name" => "Batchcode");
$dalTablebatchschedule["sdate"] = array("type"=>7,"varname"=>"sdate", "name" => "sdate");
$dalTablebatchschedule["stime"] = array("type"=>134,"varname"=>"stime", "name" => "stime");
$dalTablebatchschedule["etime"] = array("type"=>134,"varname"=>"etime", "name" => "etime");
$dalTablebatchschedule["realstime"] = array("type"=>134,"varname"=>"realstime", "name" => "realstime");
$dalTablebatchschedule["realetime"] = array("type"=>134,"varname"=>"realetime", "name" => "realetime");
$dalTablebatchschedule["status"] = array("type"=>200,"varname"=>"status", "name" => "status");
$dalTablebatchschedule["remark"] = array("type"=>200,"varname"=>"remark", "name" => "remark");
$dalTablebatchschedule["attendance"] = array("type"=>3,"varname"=>"attendance", "name" => "attendance");
	$dalTablebatchschedule["sid"]["key"]=true;

$dal_info["mydb_at_localhost__batchschedule"] = &$dalTablebatchschedule;
?>