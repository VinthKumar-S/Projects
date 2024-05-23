<?php
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
    $g=$_GET["term"];
	$disp="SELECT Name FROM customerdetail WHERE Name LIKE'%".$g."%'";
	$result=mysqli_query($con,$disp);
	$i=0;
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			$data[]=$row["Name"];
			
		}
		echo json_encode($data);

	}
	
}

?>