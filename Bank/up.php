
<?php
//name,fn,no,an,ad,db,amt
$No=$_POST["id"];
$name=$_POST["name"];
$fn=$_POST["fn"];
$no=$_POST["no"];
$an=$_POST["an"];
$ad=$_POST["ad"];
$db=$_POST["db"];
$flag=0;
$chan=0;

				$up="UPDATE customerdetail SET Name='$name' , fn='$fn',pn='$no',an='$an',ad='$ad',db='$db'  WHERE AccNO=$No";
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	$disp="SELECT AccNO FROM customerdetail WHERE AccNO=$No";
	$result=mysqli_query($con,$disp);
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			if($No==$row["AccNO"])
			{
				$result2=mysqli_query($con,$up);
				$flag=1;
				echo "<center><h1>Changes Updated...</h1>";
			}
		}
		if($flag==1)
		{
				$disp1="SELECT * FROM customerdetail WHERE AccNO=$No";
			$result1=mysqli_query($con,$disp1);
			echo "<table border=3,style=width:10%><tr>";
		while($row=$result1->fetch_assoc())
		{
			echo "<td>Name:".$row["Name"]."</td>"."<td> Account Number:".$row["AccNO"]."</td>"."<td> Balance:".$row["Bal"]."<td>";
		}
		echo "</tr></table>";
		echo "</center>";
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
