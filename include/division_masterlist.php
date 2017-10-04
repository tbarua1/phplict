<?php
function DisplayMasterTableInfo_division($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "division";
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
		$keysAssoc["division_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("division_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("division_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("division_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("division","division_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "consultant")
	{
		$keysAssoc["division_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("division_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("division_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("division_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("division","division_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "district")
	{
		$keysAssoc["division_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("division_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("division_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("division_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("division","division_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "employees")
	{
		$keysAssoc["division_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("division_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("division_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("division_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("division","division_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "university")
	{
		$keysAssoc["division_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("division_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("division_id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("division_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("division","division_id").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["division_id"]));
	
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
	$xt->assign("dname_mastervalue", $viewControls->showDBValue("dname", $data, $keylink));
	$format = $settings->getViewFormat("dname");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("dname")))
		$class = ' rnr-field-number';
		
	$xt->assign("dname_class", $class); // add class for field header as field value

	$layout = GetPageLayout("division", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("division", "masterlist"));
}

?>