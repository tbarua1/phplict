<?php
$dalTablecourses = array();
$dalTablecourses["cid"] = array("type"=>3,"varname"=>"cid");
$dalTablecourses["track"] = array("type"=>200,"varname"=>"track");
$dalTablecourses["cname"] = array("type"=>200,"varname"=>"cname");
$dalTablecourses["chours"] = array("type"=>3,"varname"=>"chours");
$dalTablecourses["discription"] = array("type"=>200,"varname"=>"discription");
	$dalTablecourses["cid"]["key"]=true;

$dal_info["mydb_at_localhost__courses"] = &$dalTablecourses;
?>