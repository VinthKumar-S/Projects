<?php
      $con=mysqli_connect('localhost','root','','viluthu');
    
      $id=$_POST['id'];
        //echo "Php-".$id;
     // $id=31;

      $finalNameList='empty';

      $resultImage = array(); 
      
      $result = array();

      $sql="SELECT * FROM  event  WHERE '$id' = eventid";
  
      $excute_query=mysqli_query($con,$sql);
  
      $row_count= mysqli_num_rows($excute_query);
  
      if($row_count)
      {
         
          while($get_result = mysqli_fetch_array($excute_query) )
          {
              $result_data=array_push($result,array(
                  "id"=>$get_result['eventid'],
                  "name"=>$get_result['eventname'],
                  "date"=>$get_result['eventdate'],
                  "place"=>$get_result['place'],
                  "plantcount"=>$get_result['plantcount'],
                  "sponser"=>$get_result['sponser'],
                  "status"=>$get_result['status'],   
              ));
          }
      }
     // echo json_encode($result);
      
      $sqlImage="SELECT * FROM  gallery  WHERE '$id' = eventid";
  
      $excute_queryImage=mysqli_query($con,$sqlImage);
  
      $row_count= mysqli_num_rows($excute_queryImage);
  
      if($row_count)
      {
         
          while($get_resultImage = mysqli_fetch_array($excute_queryImage) )
          {
              $result_data=array_push($resultImage,array(
                  "id"=>$get_resultImage['eventid'],
                  "image"=>$get_resultImage['imageId'], 
              ));
          }


      }


      $getList="SELECT membername FROM event WHERE eventid='$id' ";

      $getResult = $con->query($getList);
      $membername = " ";
  
      while ($row = $getResult->fetch_assoc()) {
       $membername=$row['membername'];
      }
  
      if($membername != null){

        $memberid=explode(",",$membername);

        $membername='';

        //print_r($memberid);

        for($i=0;$i<count($memberid);$i++)
        {
            $id=$memberid[$i];
            
            $getQuery="SELECT name FROM members WHERE memberid='$id'";
  
            $getNameList = $con->query($getQuery);
            
            if($i>1)
            {
                while ($row = $getNameList->fetch_assoc()) {
                    $membername=$membername.','.$row['name'];
                }
            } 
            else
            {
                while ($row = $getNameList->fetch_assoc()) {
                    $membername=$row['name'];
                }
            }         
        }     
        
        $finalNameList=$membername;

      }
     
      $resultFinal=array('detail'=>$result,'image'=>$resultImage,'members'=>$finalNameList);

      echo json_encode($resultFinal);

      //print_r($result);
      
?>