<?php
$dalTableuniversity = array();
$dalTableuniversity["university_id"] = array("type"=>3,"varname"=>"university_id");
$dalTableuniversity["University_name"] = array("type"=>200,"varname"=>"University_name");
$dalTableuniversity["MOU_date"] = array("type"=>7,"varname"=>"MOU_date");
$dalTableuniversity["TUP"] = array("type"=>16,"varname"=>"TUP");
$dalTableuniversity["FS"] = array("type"=>16,"varname"=>"FS");
$dalTableuniversity["TYPE"] = array("type"=>200,"varname"=>"TYPE");
$dalTableuniversity["division_id"] = array("type"=>3,"varname"=>"division_id");
$dalTableuniversity["Lat"] = array("type"=>14,"varname"=>"Lat");
$dalTableuniversity["Lng"] = array("type"=>14,"varname"=>"Lng");
	$dalTableuniversity["university_id"]["key"]=true;

$dal_info["mydb_at_localhost__university"] = &$dalTableuniversity;
?>