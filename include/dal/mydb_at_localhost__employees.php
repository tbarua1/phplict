<?php
$dalTableemployees = array();
$dalTableemployees["eid"] = array("type"=>3,"varname"=>"eid", "name" => "eid");
$dalTableemployees["ename"] = array("type"=>200,"varname"=>"ename", "name" => "ename");
$dalTableemployees["emppic"] = array("type"=>200,"varname"=>"emppic", "name" => "emppic");
$dalTableemployees["designation"] = array("type"=>200,"varname"=>"designation", "name" => "designation");
$dalTableemployees["whtasapp"] = array("type"=>200,"varname"=>"whtasapp", "name" => "whtasapp");
$dalTableemployees["localnum"] = array("type"=>200,"varname"=>"localnum", "name" => "localnum");
$dalTableemployees["skype"] = array("type"=>200,"varname"=>"skype", "name" => "skype");
$dalTableemployees["dropbox"] = array("type"=>200,"varname"=>"dropbox", "name" => "dropbox");
$dalTableemployees["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableemployees["dob"] = array("type"=>7,"varname"=>"dob", "name" => "dob");
$dalTableemployees["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableemployees["passportno"] = array("type"=>200,"varname"=>"passportno", "name" => "passportno");
$dalTableemployees["passport_expiry"] = array("type"=>7,"varname"=>"passport_expiry", "name" => "passport_expiry");
$dalTableemployees["visa_no"] = array("type"=>200,"varname"=>"visa_no", "name" => "visa_no");
$dalTableemployees["visa_expiry"] = array("type"=>7,"varname"=>"visa_expiry", "name" => "visa_expiry");
$dalTableemployees["division_id"] = array("type"=>3,"varname"=>"division_id", "name" => "division_id");
$dalTableemployees["doj"] = array("type"=>7,"varname"=>"doj", "name" => "doj");
$dalTableemployees["dor"] = array("type"=>7,"varname"=>"dor", "name" => "dor");
$dalTableemployees["status_id"] = array("type"=>3,"varname"=>"status_id", "name" => "status_id");
$dalTableemployees["experence"] = array("type"=>200,"varname"=>"experence", "name" => "experence");
$dalTableemployees["nationality"] = array("type"=>200,"varname"=>"nationality", "name" => "nationality");
$dalTableemployees["qulification"] = array("type"=>200,"varname"=>"qulification", "name" => "qulification");
$dalTableemployees["skillset"] = array("type"=>200,"varname"=>"skillset", "name" => "skillset");
$dalTableemployees["cid"] = array("type"=>3,"varname"=>"cid", "name" => "cid");
$dalTableemployees["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token");
$dalTableemployees["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date");
	$dalTableemployees["eid"]["key"]=true;

$dal_info["mydb_at_localhost__employees"] = &$dalTableemployees;
?>