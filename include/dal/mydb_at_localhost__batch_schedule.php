<?php
$dalTablebatch_schedule = array();
$dalTablebatch_schedule["batch_schedule_id"] = array("type"=>3,"varname"=>"batch_schedule_id", "name" => "batch_schedule_id");
$dalTablebatch_schedule["Today_status"] = array("type"=>200,"varname"=>"Today_status", "name" => "Today_status");
$dalTablebatch_schedule["batch_code"] = array("type"=>200,"varname"=>"batch_code", "name" => "batch_code");
$dalTablebatch_schedule["today_attendance"] = array("type"=>3,"varname"=>"today_attendance", "name" => "today_attendance");
$dalTablebatch_schedule["cancle_remark"] = array("type"=>200,"varname"=>"cancle_remark", "name" => "cancle_remark");
$dalTablebatch_schedule["class_date"] = array("type"=>7,"varname"=>"class_date", "name" => "class_date");
$dalTablebatch_schedule["start_time"] = array("type"=>134,"varname"=>"start_time", "name" => "start_time");
$dalTablebatch_schedule["end_time"] = array("type"=>134,"varname"=>"end_time", "name" => "end_time");
$dalTablebatch_schedule["batch_schedulecol"] = array("type"=>200,"varname"=>"batch_schedulecol", "name" => "batch_schedulecol");
$dalTablebatch_schedule["remarks"] = array("type"=>200,"varname"=>"remarks", "name" => "remarks");
	$dalTablebatch_schedule["batch_schedule_id"]["key"]=true;

$dal_info["mydb_at_localhost__batch_schedule"] = &$dalTablebatch_schedule;
?>