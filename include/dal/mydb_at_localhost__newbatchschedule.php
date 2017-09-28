<?php
$dalTablenewbatchschedule = array();
$dalTablenewbatchschedule["sid"] = array("type"=>3,"varname"=>"sid", "name" => "sid");
$dalTablenewbatchschedule["Batchcode"] = array("type"=>200,"varname"=>"Batchcode", "name" => "Batchcode");
$dalTablenewbatchschedule["sdate"] = array("type"=>7,"varname"=>"sdate", "name" => "sdate");
$dalTablenewbatchschedule["stime"] = array("type"=>134,"varname"=>"stime", "name" => "stime");
$dalTablenewbatchschedule["etime"] = array("type"=>134,"varname"=>"etime", "name" => "etime");
$dalTablenewbatchschedule["status"] = array("type"=>200,"varname"=>"status", "name" => "status");
$dalTablenewbatchschedule["remark"] = array("type"=>200,"varname"=>"remark", "name" => "remark");
	$dalTablenewbatchschedule["sid"]["key"]=true;

$dal_info["mydb_at_localhost__newbatchschedule"] = &$dalTablenewbatchschedule;
?>