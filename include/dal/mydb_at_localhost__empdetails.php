<?php
$dalTableempdetails = array();
$dalTableempdetails["eid"] = array("type"=>3,"varname"=>"eid", "name" => "eid");
$dalTableempdetails["whtasapp"] = array("type"=>200,"varname"=>"whtasapp", "name" => "whtasapp");
$dalTableempdetails["localnum"] = array("type"=>200,"varname"=>"localnum", "name" => "localnum");
$dalTableempdetails["skype"] = array("type"=>200,"varname"=>"skype", "name" => "skype");
$dalTableempdetails["dropbox"] = array("type"=>200,"varname"=>"dropbox", "name" => "dropbox");
$dalTableempdetails["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableempdetails["dob"] = array("type"=>7,"varname"=>"dob", "name" => "dob");
$dalTableempdetails["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableempdetails["passportno"] = array("type"=>200,"varname"=>"passportno", "name" => "passportno");
$dalTableempdetails["passport_expiry"] = array("type"=>7,"varname"=>"passport_expiry", "name" => "passport_expiry");
$dalTableempdetails["visa_no"] = array("type"=>200,"varname"=>"visa_no", "name" => "visa_no");
$dalTableempdetails["visa_expiry"] = array("type"=>7,"varname"=>"visa_expiry", "name" => "visa_expiry");
$dalTableempdetails["division_id"] = array("type"=>3,"varname"=>"division_id", "name" => "division_id");
$dalTableempdetails["doj"] = array("type"=>7,"varname"=>"doj", "name" => "doj");
$dalTableempdetails["dor"] = array("type"=>7,"varname"=>"dor", "name" => "dor");
$dalTableempdetails["status_id"] = array("type"=>3,"varname"=>"status_id", "name" => "status_id");
	$dalTableempdetails["eid"]["key"]=true;

$dal_info["mydb_at_localhost__empdetails"] = &$dalTableempdetails;
?>