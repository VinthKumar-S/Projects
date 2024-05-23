<?php
$id=$_POST["no"];
$arr;
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	$query="SELECT * FROM customerdetail WHERE AccNo=$id";
	$ins=mysqli_query($con,$query);
	if($ins)
	{
    while($row=$ins->fetch_assoc())
    {
        echo $row["Name"].",".$row["fn"].",".$row["pn"].",".$row["an"].",".$row["ad"].",".$row["db"];    
    }
  
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