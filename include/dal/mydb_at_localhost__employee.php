<?php
$dalTableemployee = array();
$dalTableemployee["eid"] = array("type"=>3,"varname"=>"eid", "name" => "eid");
$dalTableemployee["ename"] = array("type"=>200,"varname"=>"ename", "name" => "ename");
$dalTableemployee["designation"] = array("type"=>200,"varname"=>"designation", "name" => "designation");
	$dalTableemployee["eid"]["key"]=true;

$dal_info["mydb_at_localhost__employee"] = &$dalTableemployee;
?>