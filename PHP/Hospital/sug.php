<?php
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
    $g=$_GET["term"];
	$disp="SELECT Name FROM docentry WHERE Name LIKE'%".$g."%'";
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