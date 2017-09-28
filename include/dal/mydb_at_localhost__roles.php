<?php
$dalTableroles = array();
$dalTableroles["roleid"] = array("type"=>3,"varname"=>"roleid", "name" => "roleid");
$dalTableroles["rolename"] = array("type"=>200,"varname"=>"rolename", "name" => "rolename");
$dalTableroles["remark"] = array("type"=>200,"varname"=>"remark", "name" => "remark");
	$dalTableroles["roleid"]["key"]=true;

$dal_info["mydb_at_localhost__roles"] = &$dalTableroles;
?>