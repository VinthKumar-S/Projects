<?php
     $con=mysqli_connect('localhost','root','','viluthu');

     $sql="SELECT * FROM event";
 
     $excute_query=mysqli_query($con,$sql);
 
     $row_count= mysqli_num_rows($excute_query);
 
     if($row_count)
     {
         $result = array();
         while($get_result = mysqli_fetch_array($excute_query) )
         {
             $result_data=array_push($result,array(
                 "eventname"=>$get_result['eventname'],
                 "place"=>$get_result['place'],
                 "eventdate"=>$get_result['eventdate'],
                 "eventid"=>$get_result['eventid'],
                 
             ));
         }
     }
     
     echo json_encode($result);
 
?>