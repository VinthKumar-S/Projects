	
<?php
$src=$_POST['id'];
$amt=$_POST['amt'];
$flag=0;
$trans="Withdraw";
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	$disp="SELECT AccNO FROM customerdetail WHERE AccNO=$src";
	$result=mysqli_query($con,$disp);
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			if($src==$row["AccNO"])
			{
				$up="UPDATE customerdetail SET Bal=(SELECT Bal FROM customerdetail WHERE AccNO=$src)-$amt WHERE AccNO=$src";
				$result2=mysqli_query($con,$up);
				$flag=1;
			}
		}
		if($flag==1)
		{
			date_default_timezone_set('Asia/Kolkata');
			$date=date('d-m-y h:i:sa',time());
			$disp1="SELECT * FROM customerdetail WHERE AccNO=$src";
			$result1=mysqli_query($con,$disp1);
			$disp2="INSERT INTO rec VALUES('$date','$trans','$src','$amt')";
			$result2=mysqli_query($con,$disp2);
			echo "<table border=3,style=width:10%><tr>";
		while($row=$result1->fetch_assoc())
		{
			echo "<td>Name:".$row["Name"]."</td>"."<td> Account Number:".$row["AccNO"]."</td>"."<td> Balance:".$row["Bal"]."<td>Withdraw amount:".$amt."</td>";
		}
		echo "</tr></table>";
		}
		else{
			echo "Enter the Correct Account Number";
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
