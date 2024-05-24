<?php
     $con=mysqli_connect('localhost','root','','viluthu');
     
    $id=$_POST['id'];

    $sql="SELECT userdetails.id,roles.imageid FROM userdetails JOIN roles ON userdetails.id=roles.memberid WHERE userdetails.username = '$id'";

    $excute_query=mysqli_query($con,$sql);

    $row_count= mysqli_num_rows($excute_query);
    
    $result = array();

    if($row_count)
    {
        while($get_result = mysqli_fetch_array($excute_query) )
        {
            $result_data=array_push($result,array(
                "id"=>$get_result['id'],
                //"name"=>$get_result['name'],
                "profile"=>($get_result['imageid'] !== null)? $get_result['imageid'] : "N",
            ));
        }
    }
    
    //print_r($result);
    echo json_encode($result);
?>