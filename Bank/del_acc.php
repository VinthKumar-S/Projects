
<?php
$id=$_POST["id"];
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	$query="DELETE  FROM customerdetail WHERE AccNo=$id";
	$ins=mysqli_query($con,$query);
	if($ins)
	{
		echo"Account is Deleted";
	}
	else
	{
		echo"Account is not found";
	}
}
else
{
	echo"error".mysqli_error($con)."<br>";
}
?>
