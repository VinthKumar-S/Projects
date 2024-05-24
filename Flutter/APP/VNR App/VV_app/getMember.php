<?php

    $con=mysqli_connect('localhost','root','','viluthu');

	date_default_timezone_set('Asia/Kolkata');

	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);
    
    $id=$_POST['memberId'];
    
    $sql="SELECT * FROM members WHERE memberid = '$id'";
 
     $excute_query=mysqli_query($con,$sql);
 
     $row_count= mysqli_num_rows($excute_query);
 
     if($row_count)
     {
         $result = array();
         while($get_result = mysqli_fetch_array($excute_query) )
         {
             $result_data=array_push($result,array(
                 "id"=>$get_result['memberid'],
                 "name"=>$get_result['name'],
                 "dob"=>$get_result['dob'],
                 "gender"=>$get_result['gender'],
                 "phoneno"=>$get_result['phoneno'],
                 "designation"=>$get_result['designation'],
                 "qualification"=>$get_result['qualification'],
                 "joindate"=>$get_result['joindate'],
                 "retiredate"=>$get_result['retiredate'],
                 "address"=>$get_result['address'],
             ));
         }
     }
     
     echo json_encode($result);

    
?>
