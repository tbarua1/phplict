<?php
function DisplayMasterTableInfo_university($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "university";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "batch")
	{
		$keysAssoc["university_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("university_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("university_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("university_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("university","university_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	if( !$where )
		return;
	
	$str = SecuritySQL("Search", $tName);
	if( strlen($str) )
		$where.= " and ".$str;

	$strWhere = whereAdd( $masterQuery->WhereToSql(), $where );
	if( strlen($strWhere) )
		$strWhere = " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["university_id"]));
	
	$xt->assign("university_id_mastervalue", $viewControls->showDBValue("university_id", $data, $keylink));
	$format = $settings->getViewFormat("university_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("university_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("university_id_class", $class); // add class for field header as field value
	$xt->assign("University_name_mastervalue", $viewControls->showDBValue("University_name", $data, $keylink));
	$format = $settings->getViewFormat("University_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("University_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("University_name_class", $class); // add class for field header as field value
	$xt->assign("MOU_date_mastervalue", $viewControls->showDBValue("MOU_date", $data, $keylink));
	$format = $settings->getViewFormat("MOU_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("MOU_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("MOU_date_class", $class); // add class for field header as field value
	$xt->assign("TUP_mastervalue", $viewControls->showDBValue("TUP", $data, $keylink));
	$format = $settings->getViewFormat("TUP");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TUP")))
		$class = ' rnr-field-number';
		
	$xt->assign("TUP_class", $class); // add class for field header as field value
	$xt->assign("FS_mastervalue", $viewControls->showDBValue("FS", $data, $keylink));
	$format = $settings->getViewFormat("FS");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FS")))
		$class = ' rnr-field-number';
		
	$xt->assign("FS_class", $class); // add class for field header as field value
	$xt->assign("TYPE_mastervalue", $viewControls->showDBValue("TYPE", $data, $keylink));
	$format = $settings->getViewFormat("TYPE");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TYPE")))
		$class = ' rnr-field-number';
		
	$xt->assign("TYPE_class", $class); // add class for field header as field value
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
	$xt->assign("Lat_mastervalue", $viewControls->showDBValue("Lat", $data, $keylink));
	$format = $settings->getViewFormat("Lat");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Lat")))
		$class = ' rnr-field-number';
		
	$xt->assign("Lat_class", $class); // add class for field header as field value
	$xt->assign("Lng_mastervalue", $viewControls->showDBValue("Lng", $data, $keylink));
	$format = $settings->getViewFormat("Lng");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Lng")))
		$class = ' rnr-field-number';
		
	$xt->assign("Lng_class", $class); // add class for field header as field value

	$layout = GetPageLayout("university", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("university", "masterlist"));
}

?>