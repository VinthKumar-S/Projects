<?php
  //print_r($_POST);
  $con=mysqli_connect('localhost','root','','viluthu');
  date_default_timezone_set('Asia/Kolkata');
     
    $id=$_POST['id'];
    
    $sqlM="DELETE FROM members WHERE memberid='$id'";
	
	$result=$con->query($sqlM);

  if($result)
  {
    echo "Deleted";
  }

?>