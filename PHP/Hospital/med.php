
<html>
<head>
	<title></title>

</head>
<body>

</body>

<?php
$time=$_POST["time"];
$id=$_POST["id"];
$mname=$_POST["mname"];
$con=mysqli_connect('localhost','root','','hospital');
	#$ins="INSERT INTO medical VALUES ('$id','$mname','$time')";
 		#s$rus=mysqli_query($con,$ins);
 		echo "<table class=tab><tr>";
 		echo "<td>".$id."</td><td>".$mname."</td><td>".$time."</td></tr></table>";
?>
</html>
