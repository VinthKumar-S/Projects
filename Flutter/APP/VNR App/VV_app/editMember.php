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
    $id=$input['memberId'];
    //echo $gender;
	$sql="UPDATE members SET name='$name',dob='$dob',gender='$gender',phoneno='$phone',designation='$designation',qualification='$qualification',joindate='$joinDate',retiredate='$retireDate',address='$address' WHERE memberid='$id'";

	if($con->query($sql)==true){
		echo 'Success';
	}
  
    
	}
	else
	{
		echo "Data not received";
	}



?>