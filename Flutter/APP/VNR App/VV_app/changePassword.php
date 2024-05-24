<?php
  $con=mysqli_connect('localhost','root','','viluthu');

  $user=$_POST['name'];
 // $pass=$_POST['password'];
 // $user='vv9477';

  $sql = "SELECT * FROM userdetails WHERE username = '$user'";
  $result = $con->query($sql);

  $password=array();
  
  while($get_result = mysqli_fetch_array($result))
  {
      $result_data=array_push($password,array(
          "password"=>$get_result['password'],  
      ));
  }

  echo json_encode($password);
?>