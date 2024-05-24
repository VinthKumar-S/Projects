<?php
     $con=mysqli_connect('localhost','root','','viluthu');
    

     $sql="SELECT memberid,name FROM members ";
 
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
              
             ));
         }
     }
     
     //print_r($result);
     echo json_encode($result);
?>