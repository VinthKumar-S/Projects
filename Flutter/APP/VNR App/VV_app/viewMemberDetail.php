<?php
     $con=mysqli_connect('localhost','root','','viluthu');
    
     $id=$_POST['memberId'];

     $sql="SELECT members.memberid,members.name,members.dob,members.gender,members.phoneno,members.designation,members.qualification,members.joindate,members.retiredate,members.address,roles.imageid,roles.mainrole FROM roles RIGHT JOIN members ON members.memberid = roles.memberid WHERE '$id' = members.memberid";
 
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
                 "phone"=>$get_result['phoneno'],
                 "designation"=>$get_result['designation'],
                 "qualification"=>$get_result['qualification'],
                 "joindate"=>$get_result['joindate'],
                 "retiredate"=>$get_result['retiredate'],
                 "address"=>($get_result['address'] !== null)? $get_result['address'] : "Not Updated",
                 "role"=>($get_result['mainrole'] !== null)? $get_result['mainrole'] : "Not Updated",
                 "profile"=>($get_result['imageid'] !== null)? $get_result['imageid'] : "N",
             ));
         }
     }
     
     //print_r($result);
     echo json_encode($result);
?>