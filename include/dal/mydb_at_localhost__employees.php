<?php
$dalTableemployees = array();
$dalTableemployees["eid"] = array("type"=>3,"varname"=>"eid");
$dalTableemployees["ename"] = array("type"=>200,"varname"=>"ename");
$dalTableemployees["emppic"] = array("type"=>200,"varname"=>"emppic");
$dalTableemployees["designation"] = array("type"=>200,"varname"=>"designation");
$dalTableemployees["whtasapp"] = array("type"=>200,"varname"=>"whtasapp");
$dalTableemployees["localnum"] = array("type"=>200,"varname"=>"localnum");
$dalTableemployees["skype"] = array("type"=>200,"varname"=>"skype");
$dalTableemployees["dropbox"] = array("type"=>200,"varname"=>"dropbox");
$dalTableemployees["email"] = array("type"=>200,"varname"=>"email");
$dalTableemployees["dob"] = array("type"=>7,"varname"=>"dob");
$dalTableemployees["password"] = array("type"=>200,"varname"=>"password");
$dalTableemployees["passportno"] = array("type"=>200,"varname"=>"passportno");
$dalTableemployees["passport_expiry"] = array("type"=>7,"varname"=>"passport_expiry");
$dalTableemployees["visa_no"] = array("type"=>200,"varname"=>"visa_no");
$dalTableemployees["visa_expiry"] = array("type"=>7,"varname"=>"visa_expiry");
$dalTableemployees["division_id"] = array("type"=>3,"varname"=>"division_id");
$dalTableemployees["doj"] = array("type"=>7,"varname"=>"doj");
$dalTableemployees["dor"] = array("type"=>7,"varname"=>"dor");
$dalTableemployees["status_id"] = array("type"=>3,"varname"=>"status_id");
$dalTableemployees["experence"] = array("type"=>200,"varname"=>"experence");
$dalTableemployees["nationality"] = array("type"=>200,"varname"=>"nationality");
$dalTableemployees["qulification"] = array("type"=>200,"varname"=>"qulification");
$dalTableemployees["skillset"] = array("type"=>200,"varname"=>"skillset");
$dalTableemployees["cid"] = array("type"=>3,"varname"=>"cid");
$dalTableemployees["reset_token"] = array("type"=>200,"varname"=>"reset_token");
$dalTableemployees["reset_date"] = array("type"=>135,"varname"=>"reset_date");
	$dalTableemployees["eid"]["key"]=true;

$dal_info["mydb_at_localhost__employees"] = &$dalTableemployees;
?>