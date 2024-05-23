<?php
//date_default_timezone_set('Asia/Calcutta');
$t=date('Y-m-d H:i:s',strtotime($_POST['d']));
echo "Php time:$t";
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
	$query="INSERT INTO date VALUES('$t')";
	$ins=mysqli_query($con,$query);
	if($ins)
	{
		echo"Time is inserted";
	}
	else
	{
		echo"error".mysqli_error($con)."<br>";
	}
}
else
{
	echo"error".mysqli_error($con)."<br>";
}
?>