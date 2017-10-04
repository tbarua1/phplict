<?php
function DisplayMasterTableInfoForPrint_consultant($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "consultant";
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
		$keysAssoc["consultant_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("consultant_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("consultant_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("consultant_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("consultant","consultant_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["consultant_id"]));
	
	$xt->assign("consultant_id_mastervalue", $viewControls->showDBValue("consultant_id", $data, $keylink));
	$format = $settings->getViewFormat("consultant_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("consultant_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("consultant_id_class", $class); // add class for field header as field value
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
	$xt->assign("divison_id_mastervalue", $viewControls->showDBValue("divison_id", $data, $keylink));
	$format = $settings->getViewFormat("divison_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("divison_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("divison_id_class", $class); // add class for field header as field value
	$xt->assign("Type_mastervalue", $viewControls->showDBValue("Type", $data, $keylink));
	$format = $settings->getViewFormat("Type");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Type")))
		$class = ' rnr-field-number';
		
	$xt->assign("Type_class", $class); // add class for field header as field value

	$layout = GetPageLayout("consultant", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("consultant", "masterprint"));
}

?>