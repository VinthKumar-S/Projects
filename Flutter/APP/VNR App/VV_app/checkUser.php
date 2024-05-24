<?php
  $con=mysqli_connect('localhost','root','','viluthu');

  $user=$_POST['name'];
  $pass=$_POST['password'];

  $sql = "SELECT * FROM userdetails WHERE username = '$user' AND password = '$pass'";
  $result = $con->query($sql);

  $status=array();

  if ($result->num_rows > 0) {
      // Username and password are valid
      $status['check']=true;

      echo json_encode($status);
  } else {
      // Invalid username or password
      $status['check']=false;

      echo json_encode($status);
  }

?>