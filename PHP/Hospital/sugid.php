<?php
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
    $g=$_GET["term"];
	$disp="SELECT * FROM pres WHERE id LIKE'%".$g."%'";
	$result=mysqli_query($con,$disp);
	$i=0;
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			$data[]=$row["id"];
			
		}
		echo json_encode($data);

	}
	
}
?>