<?php
$dalTablecourses = array();
$dalTablecourses["cid"] = array("type"=>3,"varname"=>"cid", "name" => "cid");
$dalTablecourses["track"] = array("type"=>200,"varname"=>"track", "name" => "track");
$dalTablecourses["cname"] = array("type"=>200,"varname"=>"cname", "name" => "cname");
$dalTablecourses["chours"] = array("type"=>3,"varname"=>"chours", "name" => "chours");
$dalTablecourses["discription"] = array("type"=>200,"varname"=>"discription", "name" => "discription");
	$dalTablecourses["cid"]["key"]=true;

$dal_info["mydb_at_localhost__courses"] = &$dalTablecourses;
?>