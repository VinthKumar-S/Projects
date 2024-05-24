<?php

	$con=mysqli_connect('localhost','root','','viluthu');

	date_default_timezone_set('Asia/Kolkata');

    $eventId= $_POST['id'];
    $nameList= $_POST['nameList'];

    $getList="SELECT membername FROM event WHERE eventid='$eventId' ";

    $getResult = $con->query($getList);
    $membername = " ";

    while ($row = $getResult->fetch_assoc()) {
     $membername=$row['membername'];
    }

    if($membername != null){

        $membername=$membername.','.$nameList;
        $updateQuery=" UPDATE event SET membername='$membername' WHERE eventid='$eventId' ";

        $updateNameList = $con->query($updateQuery);

        //echo "Update";
       // echo $updateNameList;
    }
    else
    {
        $insertQuery="UPDATE event SET membername='$nameList' WHERE eventid='$eventId' ";

        $insertNameList = $con->query($insertQuery);

        //echo "Insert";
        //echo $insertNameList;
    }

?>