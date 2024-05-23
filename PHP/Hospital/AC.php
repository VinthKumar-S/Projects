<?php
#$name=$_POST["doc"];
$name="santhosh";
$date;
$flag=2;
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
    $disp="SELECT * FROM docentry WHERE Name LIKE '%".$name."%'";
	$result=mysqli_query($con,$disp);
	if($result)
	{

		while($row=$result->fetch_assoc())
		{
			$Time=$row["TS"];
			$Min=$row["Min"];
			$c=$row["AC"];
		}
		$date[0]=date('H:i',strtotime($Time));
		// This array index 0 store the staring time
		for($i=1;$i<$c;$i++)
		{

			$date[$i]=date('H:i',strtotime($date[$i-1].'+'.$Min.' minutes'));
			//and here the time value storing index 
			//increament,d[i-1] used to Subtract the starting time after display and store remain time in order
		}
		
	}	
		foreach ($date as $key => $value)
		{

         $ck="SELECT dname,timeline FROM pentry WHERE dname='$name' AND timeline='$value'";
          $outcome=mysqli_query($con,$ck);
          if($outcome)
          {

          	while ($item=$outcome->fetch_assoc()) 
          	{
          		if($value==$item["timeline"] && $name==$item["dname"])
          		{
          			echo $value.",";
          		}

          	}
          	 
          }
		   	
		}  
	
}
?>