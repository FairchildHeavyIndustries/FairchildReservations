<?php

call_user_func($_GET['func']);

function queryDB($query_string)
{
	$db_server = '127.0.0.1';
	$db_name = 'tstfrsdb';
	$db_username = 'test_frs';
	$db_password = 'test_frs';
	
	$link = mysql_connect($db_server, $db_username, $db_password);
	if (!$link) {
	    echo('Could not connect, brosephine: ' . mysql_error());
	}
	mysql_select_db($db_name, $link);

	$result = mysql_query($query_string);

	if (!$result) {
	    die('Invalid query: ' . mysql_error());
	}
	return $result;
	mysql_close($link);
}

function getInitDepCities() {
	$sqlQuery = "select city.name as city, airport.name as airport, city.position_x, city.position_y from city, airport where city.id = airport.cityId and city.isActive=TRUE order by position_x";
	returnCities($sqlQuery);
}

function getValidArrCities() {
	$deprAirport = $_GET['deprAirport'];
	$sqlQuery = "select distinct city.name as city, airport.name as airport from city, airport where city.id = airport.cityId and airport.name in 
		(select flight.`arrivalAiport` from flight where flight.`departureAirport` = '$deprAirport')";
	returnCities($sqlQuery);
	
}

function returnCities($sql_query) {
	$cities_resource =  queryDB($sql_query);
	while ($row = mysql_fetch_array($cities_resource, MYSQL_BOTH)) {
		$currCity[] = array('city' => $row['city'], 'airport' => $row['airport'], 'position_x' => $row['position_x'], 'position_y' => $row['position_y']);
	}
	$json = json_encode($currCity);
	$json = preg_replace('/"(-?\d+\.?\d*)"/', '$1', $json);
	echo $json;
}

function pnrGenerator(){
	//var pnrAlphaValids = 'CDEFGHIJKLMNPQRSTVWXYZ';
	//var pnr = 'HGWZYA';
	//look at pnr[5]
		//is it Z?
		//no: set it to pnrAlphaValids[(position of pnr[5]) + 1], done.
		//yes:set pnr[5] to 'B', look at pnr[4]
			//is it Z
			//no: set it to pnrAlphaValids[(position of pnr[4]) + 1], done
			//yes:set pnr[4] to 'B', look at pnr[3]
				//blah blah blah
}
?>