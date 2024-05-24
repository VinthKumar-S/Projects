<?php
	$con=mysqli_connect('localhost','root','','viluthu');

	date_default_timezone_set('Asia/Kolkata');

	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);

	$id=rand(10,99);
	
	if (!empty($input)) {	

	$eventName=$input['eventName'];
	$eventDate=$input['eventDate'];
	$eventPlace=$input['eventPlace'];
	$plantCount=$input['plantCount'];
	$sponsers=$input['sponsers'];

	$sql="INSERT INTO event (eventid,eventname,eventdate,place,plantcount,sponser) VALUES 
	('$id','$eventName','$eventDate','$eventPlace','$plantCount','$sponsers')";

	$result=$con->query($sql);
	
	}
	else
	{
		echo "Data is No Received";

	}

	//print_r($input);
?>