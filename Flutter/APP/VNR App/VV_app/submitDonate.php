<?php
    $con=mysqli_connect('localhost','root','','viluthu');
      
    $row=$con->query("SELECT * FROM donation ORDER BY donorid DESC")->fetch_array();
      $id=$row['donorid']+1;
      $donorname=$_POST['name'];
      $date=$_POST['date'];
      $mobile=$_POST['phone'];
      //$uid=$_FILES['files']['name'];
      if(isset($_FILES['files']))
      {
         
          $uploadFiles=[];
  
          foreach ($_FILES['files']['name']as $key=>$name)
          {          
              $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
              $extension = pathinfo($name,PATHINFO_EXTENSION);
              if(in_array($extension,$allowTypes))
              {
                  $Newid=uniqid()."_".time();
                  $basename=$Newid.".".$extension;//File Renameing
  
                  $source=$_FILES['files']['tmp_name'][$key];
                  $destination="donorImages/{$basename}";
  
                  if(move_uploaded_file($source,$destination))
                  {
                      $uploadFiles[]=$source;
  
                      $sql="INSERT INTO donation(donorid,donorname,donatedate,mobileno,trphoto) VALUES($id,'$donorname','$date','$mobile','$basename')";
  
                      $result=$con->query($sql);
  
                  }
                 
                 // echo json_encode(['uploadedFiles' => $uploadFiles]);  
              }
          }
      }
      
?>