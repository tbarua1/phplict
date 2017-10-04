<?php
function DisplayMasterTableInfoForPrint_courses($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "courses";
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
		$keysAssoc["cid"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cid", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cid", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("cid", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("courses","cid").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "employees" )
	{
		$keysAssoc["cid"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cid", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cid", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("cid", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("courses","cid").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "trainer" )
	{
		$keysAssoc["cid"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cid", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cid", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("cid", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("courses","cid").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["cid"]));
	
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
	$xt->assign("track_mastervalue", $viewControls->showDBValue("track", $data, $keylink));
	$format = $settings->getViewFormat("track");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("track")))
		$class = ' rnr-field-number';
		
	$xt->assign("track_class", $class); // add class for field header as field value
	$xt->assign("cname_mastervalue", $viewControls->showDBValue("cname", $data, $keylink));
	$format = $settings->getViewFormat("cname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("cname")))
		$class = ' rnr-field-number';
		
	$xt->assign("cname_class", $class); // add class for field header as field value
	$xt->assign("chours_mastervalue", $viewControls->showDBValue("chours", $data, $keylink));
	$format = $settings->getViewFormat("chours");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("chours")))
		$class = ' rnr-field-number';
		
	$xt->assign("chours_class", $class); // add class for field header as field value
	$xt->assign("discription_mastervalue", $viewControls->showDBValue("discription", $data, $keylink));
	$format = $settings->getViewFormat("discription");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("discription")))
		$class = ' rnr-field-number';
		
	$xt->assign("discription_class", $class); // add class for field header as field value

	$layout = GetPageLayout("courses", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("courses", "masterprint"));
}

?>