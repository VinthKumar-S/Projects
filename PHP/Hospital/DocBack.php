<?php
  $Name=$_POST["n"];
  $id=$_POST["id"];
$TS=date('Y-m-d H:i:s',strtotime($_POST['st']));
 $TE=date('Y-m-d H:i:s',strtotime($_POST['et']));
 $Min=$_POST["min"];
 

 $start = strtotime($TS);
$end = strtotime($TE);
$AC = ($end - $start) / 60;
$AC=$AC/$Min;
$AC=round($AC);
$flag=2;
if($start<$end)
{ 
  $con=mysqli_connect('localhost','root','','hospital');
  if($con)
  {

      $ck="SELECT id FROM docentry WHERE id='$id'";

      $cr=mysqli_query($con,$ck);
      while ($row=$cr->fetch_assoc()) 
      {
        if($id==$row["id"])
        {
             $flag=1;
        }
      }
    
      if($flag==2)
      { 
     
          $query="INSERT INTO docentry VALUES('$Name','$id','$TS','$TE','$Min','$AC')";
          $ins=mysqli_query($con,$query);
          if($ins)
          {
            echo "No of Appointment:$AC";
    	     }
	   }
     if($flag==1)
     {
          $count=1;
     }
      
    
  }
}
elseif ($start==$end) 
{
		echo "Start time and End time are Same";	# code...
}
else
{
	echo "Starting Time is Wrong";
}
?>