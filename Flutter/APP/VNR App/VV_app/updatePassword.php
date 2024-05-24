<?php
     $con=mysqli_connect('localhost','root','','viluthu');

     $user=$_POST['user'];
     $pass=$_POST['password'];
    // $user='vv9477';
   
     $sql = "UPDATE  userdetails SET password = '$pass' WHERE username = '$user'";
     $result = $con->query($sql);
?>