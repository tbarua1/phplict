<?php
$dalTableuniversity = array();
$dalTableuniversity["university_id"] = array("type"=>3,"varname"=>"university_id", "name" => "university_id");
$dalTableuniversity["University_name"] = array("type"=>200,"varname"=>"University_name", "name" => "University_name");
$dalTableuniversity["MOU_date"] = array("type"=>7,"varname"=>"MOU_date", "name" => "MOU_date");
$dalTableuniversity["TUP"] = array("type"=>16,"varname"=>"TUP", "name" => "TUP");
$dalTableuniversity["FS"] = array("type"=>16,"varname"=>"FS", "name" => "FS");
$dalTableuniversity["TYPE"] = array("type"=>200,"varname"=>"TYPE", "name" => "TYPE");
$dalTableuniversity["division_id"] = array("type"=>3,"varname"=>"division_id", "name" => "division_id");
$dalTableuniversity["Lat"] = array("type"=>14,"varname"=>"Lat", "name" => "Lat");
$dalTableuniversity["Lng"] = array("type"=>14,"varname"=>"Lng", "name" => "Lng");
	$dalTableuniversity["university_id"]["key"]=true;

$dal_info["mydb_at_localhost__university"] = &$dalTableuniversity;
?>