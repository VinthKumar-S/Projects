<?php
$id=$_POST["id"];
$flag=2;
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
			 $ck="SELECT * FROM docentry WHERE id='$id'";

      $cr=mysqli_query($con,$ck);
      while ($row=$cr->fetch_assoc()) 
      {
        if($row["ck"]=="P")
        {
             $flag=1;
        }
      }

if($flag==2)
{	
	$disp="UPDATE pres SET status='P' WHERE id='$id'";
	$result=mysqli_query($con,$disp);
	if($result)
	{
		echo "Payment Success.";
	}
	else
		echo "Changes note updated..";
}
elseif ($flag==1) 
{
	echo "Status alredy chcked..";
		# code...
	}	
}