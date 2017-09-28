<?php
$dalTableconsultant = array();
$dalTableconsultant["consultant_id"] = array("type"=>3,"varname"=>"consultant_id", "name" => "consultant_id");
$dalTableconsultant["eid"] = array("type"=>3,"varname"=>"eid", "name" => "eid");
$dalTableconsultant["divison_id"] = array("type"=>3,"varname"=>"divison_id", "name" => "divison_id");
$dalTableconsultant["Type"] = array("type"=>200,"varname"=>"Type", "name" => "Type");
	$dalTableconsultant["consultant_id"]["key"]=true;

$dal_info["mydb_at_localhost__consultant"] = &$dalTableconsultant;
?>