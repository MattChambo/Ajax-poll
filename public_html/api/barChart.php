<?php
	// Get out config variables
	include('../../config.inc.php');

	// Connect to the database
	$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$sql = "SELECT SUM( (CASE WHEN vote = 'yes' THEN 1 ELSE 0 END) ) AS TotalYes, SUM( (CASE WHEN vote = 'no' THEN 1 ELSE 0 END) ) AS TotalNo FROM vote";

	$result = $dbc->query($sql);

	$result = $result->fetch_assoc();

	$yesno = [

		'totalYes' => $result['TotalYes'],
		'totalNo' => $result['TotalNo']
	];

	// Prepare the header
	header('Content-Type: application/json');

	echo json_encode($yesno);

