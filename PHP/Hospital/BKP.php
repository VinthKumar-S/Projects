<?php
$name=$_POST["doc"];
#$name="santhosh";
$merge=array("");
$comp=array("");

$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
    $disp="SELECT * FROM docentry WHERE Name LIKE '%".$name."%'";
	$result=mysqli_query($con,$disp);

	$valid="SELECT * FROM pentry";
			$obj=mysqli_query($con,$valid);
			$j=0;
			$z=0;

		while($r=$obj->fetch_assoc())
		{
			$comp[$j]=$r["timeline"];
			$j=$j+1;
		}
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			$Time=$row["TS"];
			$Min=$row["Min"];
			$c=$row["AC"];
		}
		$date[0]=date('H:i',strtotime($Time));
		//echo $date[0];// This array index 0 store the staring time

		for($i=1;$i<$c;$i++)
		{

			$date[$i]=date('H:i',strtotime($date[$i-1].'+'.$Min.' minutes'));//and here the time value storing index //increament,d[i-1] used to Subtract the starting time after display and store remain time in order

		}
		$fin=array_diff($date,$comp);
		foreach ($fin as $key => $value) {
			# code...
			echo $value.",";
		}

	}
	
}
?>