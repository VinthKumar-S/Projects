<?php
	$con=mysqli_connect('localhost','root','','viluthu');

	date_default_timezone_set('Asia/Kolkata');

	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);

	//print_r($input);

	if (!empty($input)) {

		
	$name=$input['memberName'];
	$phone=$input['memberPnone'];
	$dob=$input['memberDob'];
	$designation=$input['memberDesingnation'];
	$qualification=$input['memberQualification'];
	$joinDate=$input['memberJoinDate'];
	$retireDate=$input['memberRetireDate'];
	$address=$input['memberAddress'];
	$gender=$input['memberGender'];

	$id = rand(1000, 9999);
	
	$sql="INSERT INTO members (memberid,name,dob,gender,phoneno,designation,qualification,joindate,retiredate,address) 
	VALUES('$id','$name','$dob','$gender','$phone','$designation','$qualification','$joinDate','$retireDate','$address')";

	
	$result=$con->query($sql);

	$sql="INSERT INTO userdetails (id,username,password,privilege) VALUES('$id','$phone',123,2)";
	
	$result=$con->query($sql);

	}
	else
	{
		echo "Data not received";
	}



?>