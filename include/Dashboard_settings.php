<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
	$fieldLabelsDashboard["English"]["schedule_map_track"] = "Track";
	$fieldLabelsDashboard["English"]["schedule_map_Batchcode"] = "Batchcode";
	$fieldLabelsDashboard["English"]["schedule_map_fbgroup"] = "Fbgroup";
	$fieldLabelsDashboard["English"]["schedule_map_university_id"] = "University Id";
	$fieldLabelsDashboard["English"]["schedule_map_status"] = "Status";
	$fieldLabelsDashboard["English"]["schedule_map_University_name"] = "University Name";
	$fieldLabelsDashboard["English"]["schedule_map_Lat"] = "Lat";
	$fieldLabelsDashboard["English"]["schedule_map_Lng"] = "Lng";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"track" );
$tdataDashboard[".searchFields"]["schedule_map_track"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"Batchcode" );
$tdataDashboard[".searchFields"]["schedule_map_Batchcode"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"fbgroup" );
$tdataDashboard[".searchFields"]["schedule_map_fbgroup"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"university_id" );
$tdataDashboard[".searchFields"]["schedule_map_university_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"status" );
$tdataDashboard[".searchFields"]["schedule_map_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"University_name" );
$tdataDashboard[".searchFields"]["schedule_map_University_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"Lat" );
$tdataDashboard[".searchFields"]["schedule_map_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule_map", "field"=>"Lng" );
$tdataDashboard[".searchFields"]["schedule_map_Lng"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "schedule_map_track";
$tdataDashboard[".allSearchFields"][] = "schedule_map_Batchcode";
$tdataDashboard[".allSearchFields"][] = "schedule_map_fbgroup";
$tdataDashboard[".allSearchFields"][] = "schedule_map_university_id";
$tdataDashboard[".allSearchFields"][] = "schedule_map_status";
$tdataDashboard[".allSearchFields"][] = "schedule_map_University_name";
$tdataDashboard[".allSearchFields"][] = "schedule_map_Lat";
$tdataDashboard[".allSearchFields"][] = "schedule_map_Lng";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "schedule_map_track";
$tdataDashboard[".googleLikeFields"][] = "schedule_map_Batchcode";
$tdataDashboard[".googleLikeFields"][] = "schedule_map_fbgroup";
$tdataDashboard[".googleLikeFields"][] = "schedule_map_university_id";
$tdataDashboard[".googleLikeFields"][] = "schedule_map_status";
$tdataDashboard[".googleLikeFields"][] = "schedule_map_University_name";
$tdataDashboard[".googleLikeFields"][] = "schedule_map_Lat";
$tdataDashboard[".googleLikeFields"][] = "schedule_map_Lng";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "schedule_map_map", "table" => "schedule_map", "type" => 6);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 800;
		$dbelement["height"] = 600;
		$dbelement["zoom"] = 3;
	$dbelement["addressF"] = "";
	$dbelement["latF"] = "Lat";
	$dbelement["lonF"] = "Lng";
	$dbelement["descF"] = "";
	$dbelement["mapMarkerCount"] = 50;
	$dbelement["isMarkerIconCustom"] = 0;
		
	// Advanced map options
		$dbelement["clustering"] = (0 > 0);
	$dbelement["heatMap"] = (0 > 0);


	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;



$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";


	
$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>