<?php
$id=$_POST["id"];
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
	$disp="SELECT * FROM pres WHERE id='$id'";
	$result=mysqli_query($con,$disp);
	$i=0;
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			$data=$row["amt"];
			
		}
		echo $data;

	}
	
}

?>