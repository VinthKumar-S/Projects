<?php
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
    $g=$_GET["term"];
 
	$disp="SELECT name FROM medicname WHERE name LIKE'%".$g."%'";
	$result=mysqli_query($con,$disp);
	$i=0;
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			$data[]=$row["name"];
			
		}
		echo json_encode($data);

	}
	
}
?>