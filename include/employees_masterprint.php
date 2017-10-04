<?php
function DisplayMasterTableInfoForPrint_employees($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "employees";
	$xt->eventsObject = getEventObject($tName);

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "batch" )
	{
		$keysAssoc["eid"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("eid", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("eid", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("eid", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("employees","eid").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "consultant" )
	{
		$keysAssoc["eid"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("eid", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("eid", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("eid", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("employees","eid").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["eid"]));
	
	$xt->assign("eid_mastervalue", $viewControls->showDBValue("eid", $data, $keylink));
	$format = $settings->getViewFormat("eid");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("eid")))
		$class = ' rnr-field-number';
		
	$xt->assign("eid_class", $class); // add class for field header as field value
	$xt->assign("ename_mastervalue", $viewControls->showDBValue("ename", $data, $keylink));
	$format = $settings->getViewFormat("ename");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ename")))
		$class = ' rnr-field-number';
		
	$xt->assign("ename_class", $class); // add class for field header as field value
	$xt->assign("emppic_mastervalue", $viewControls->showDBValue("emppic", $data, $keylink));
	$format = $settings->getViewFormat("emppic");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("emppic")))
		$class = ' rnr-field-number';
		
	$xt->assign("emppic_class", $class); // add class for field header as field value
	$xt->assign("designation_mastervalue", $viewControls->showDBValue("designation", $data, $keylink));
	$format = $settings->getViewFormat("designation");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("designation")))
		$class = ' rnr-field-number';
		
	$xt->assign("designation_class", $class); // add class for field header as field value
	$xt->assign("whtasapp_mastervalue", $viewControls->showDBValue("whtasapp", $data, $keylink));
	$format = $settings->getViewFormat("whtasapp");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("whtasapp")))
		$class = ' rnr-field-number';
		
	$xt->assign("whtasapp_class", $class); // add class for field header as field value
	$xt->assign("localnum_mastervalue", $viewControls->showDBValue("localnum", $data, $keylink));
	$format = $settings->getViewFormat("localnum");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("localnum")))
		$class = ' rnr-field-number';
		
	$xt->assign("localnum_class", $class); // add class for field header as field value
	$xt->assign("skype_mastervalue", $viewControls->showDBValue("skype", $data, $keylink));
	$format = $settings->getViewFormat("skype");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("skype")))
		$class = ' rnr-field-number';
		
	$xt->assign("skype_class", $class); // add class for field header as field value
	$xt->assign("dropbox_mastervalue", $viewControls->showDBValue("dropbox", $data, $keylink));
	$format = $settings->getViewFormat("dropbox");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("dropbox")))
		$class = ' rnr-field-number';
		
	$xt->assign("dropbox_class", $class); // add class for field header as field value
	$xt->assign("email_mastervalue", $viewControls->showDBValue("email", $data, $keylink));
	$format = $settings->getViewFormat("email");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("email")))
		$class = ' rnr-field-number';
		
	$xt->assign("email_class", $class); // add class for field header as field value
	$xt->assign("dob_mastervalue", $viewControls->showDBValue("dob", $data, $keylink));
	$format = $settings->getViewFormat("dob");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("dob")))
		$class = ' rnr-field-number';
		
	$xt->assign("dob_class", $class); // add class for field header as field value
	$xt->assign("password_mastervalue", $viewControls->showDBValue("password", $data, $keylink));
	$format = $settings->getViewFormat("password");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("password")))
		$class = ' rnr-field-number';
		
	$xt->assign("password_class", $class); // add class for field header as field value
	$xt->assign("passportno_mastervalue", $viewControls->showDBValue("passportno", $data, $keylink));
	$format = $settings->getViewFormat("passportno");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("passportno")))
		$class = ' rnr-field-number';
		
	$xt->assign("passportno_class", $class); // add class for field header as field value
	$xt->assign("passport_expiry_mastervalue", $viewControls->showDBValue("passport_expiry", $data, $keylink));
	$format = $settings->getViewFormat("passport_expiry");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("passport_expiry")))
		$class = ' rnr-field-number';
		
	$xt->assign("passport_expiry_class", $class); // add class for field header as field value
	$xt->assign("visa_no_mastervalue", $viewControls->showDBValue("visa_no", $data, $keylink));
	$format = $settings->getViewFormat("visa_no");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("visa_no")))
		$class = ' rnr-field-number';
		
	$xt->assign("visa_no_class", $class); // add class for field header as field value
	$xt->assign("visa_expiry_mastervalue", $viewControls->showDBValue("visa_expiry", $data, $keylink));
	$format = $settings->getViewFormat("visa_expiry");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("visa_expiry")))
		$class = ' rnr-field-number';
		
	$xt->assign("visa_expiry_class", $class); // add class for field header as field value
	$xt->assign("division_id_mastervalue", $viewControls->showDBValue("division_id", $data, $keylink));
	$format = $settings->getViewFormat("division_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("division_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("division_id_class", $class); // add class for field header as field value
	$xt->assign("doj_mastervalue", $viewControls->showDBValue("doj", $data, $keylink));
	$format = $settings->getViewFormat("doj");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("doj")))
		$class = ' rnr-field-number';
		
	$xt->assign("doj_class", $class); // add class for field header as field value
	$xt->assign("dor_mastervalue", $viewControls->showDBValue("dor", $data, $keylink));
	$format = $settings->getViewFormat("dor");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("dor")))
		$class = ' rnr-field-number';
		
	$xt->assign("dor_class", $class); // add class for field header as field value
	$xt->assign("status_id_mastervalue", $viewControls->showDBValue("status_id", $data, $keylink));
	$format = $settings->getViewFormat("status_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("status_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("status_id_class", $class); // add class for field header as field value
	$xt->assign("experence_mastervalue", $viewControls->showDBValue("experence", $data, $keylink));
	$format = $settings->getViewFormat("experence");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("experence")))
		$class = ' rnr-field-number';
		
	$xt->assign("experence_class", $class); // add class for field header as field value
	$xt->assign("nationality_mastervalue", $viewControls->showDBValue("nationality", $data, $keylink));
	$format = $settings->getViewFormat("nationality");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nationality")))
		$class = ' rnr-field-number';
		
	$xt->assign("nationality_class", $class); // add class for field header as field value
	$xt->assign("qulification_mastervalue", $viewControls->showDBValue("qulification", $data, $keylink));
	$format = $settings->getViewFormat("qulification");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("qulification")))
		$class = ' rnr-field-number';
		
	$xt->assign("qulification_class", $class); // add class for field header as field value
	$xt->assign("skillset_mastervalue", $viewControls->showDBValue("skillset", $data, $keylink));
	$format = $settings->getViewFormat("skillset");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("skillset")))
		$class = ' rnr-field-number';
		
	$xt->assign("skillset_class", $class); // add class for field header as field value
	$xt->assign("cid_mastervalue", $viewControls->showDBValue("cid", $data, $keylink));
	$format = $settings->getViewFormat("cid");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("cid")))
		$class = ' rnr-field-number';
		
	$xt->assign("cid_class", $class); // add class for field header as field value
	$xt->assign("reset_token_mastervalue", $viewControls->showDBValue("reset_token", $data, $keylink));
	$format = $settings->getViewFormat("reset_token");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("reset_token")))
		$class = ' rnr-field-number';
		
	$xt->assign("reset_token_class", $class); // add class for field header as field value
	$xt->assign("reset_date_mastervalue", $viewControls->showDBValue("reset_date", $data, $keylink));
	$format = $settings->getViewFormat("reset_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("reset_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("reset_date_class", $class); // add class for field header as field value

	$layout = GetPageLayout("employees", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("employees", "masterprint"));
}

?>