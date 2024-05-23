
<?php
$db=date('d-m-y',strtotime($_POST["db"]));
$fn=$_POST["fn"];
$an=$_POST["an"];
$no=$_POST["no"];
$ad=$_POST["ad"];
$name=$_POST["name"];
$amt=$_POST["amt"];
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	$query="INSERT INTO customerdetail VALUES('$name','$fn','$no','$an','$db','$ad',NULL,'$amt')";
	$ins=mysqli_query($con,$query);
	if($ins)
	{
		echo"New Account is Created";
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
