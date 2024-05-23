<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$s=$_POST["id"];
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	$disp="SELECT * FROM rec WHERE No LIKE'%".$s."%'";
	$result=mysqli_query($con,$disp);
	if($result)
	{
		echo "<table border=3,style=width:10%>
			<tr>
			<th>Date</th>
			<th>Type</th>
			<th> Account Number</th>
			<th> Amount</th></tr>";

		while($row=$result->fetch_assoc())
		{
			echo"<tr><td>$row[date]</td><td>$row[trans]</td><td>$row[No]</td><td>$row[amt]</td></tr>";

		}
		echo "</table>";
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
</body>
</html>	