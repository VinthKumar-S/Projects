<?php

	$id=$_POST["id"];
	$amt=$_POST["amt"];
	$dname="";
	$flag=2;
	if($amt!="")
	{	
	$con=mysqli_connect('localhost','root','','hospital');
	if($con)
	{
		 $ck="SELECT * FROM pres WHERE id='$id'";

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

		$dn="SELECT dname FROM pentry WHERE id='$id'";
		$res=mysqli_query($con,$dn);
 		while ($row=$res->fetch_assoc()) 
 		{
 			$dname=$row["dname"];
 		}


 		$ins="INSERT INTO pres VALUES ('$dname','$id','$amt','A')";
 		$rus=mysqli_query($con,$ins);
 		if($rus)
 		{
 			echo "Complete";
 		}
 	}
 	else
 	{
 		echo "already allocated";
     }
 	}
	}
	else
	{
		echo "Field Empty";
	}

?>