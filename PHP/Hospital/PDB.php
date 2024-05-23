<?php
$dname=$_POST["dname"];
$pname=$_POST["pat"];
$time=$_POST["time"];
$flag=2;

$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
    $ck="SELECT dname,timeline FROM pentry WHERE dname='$dname' AND timeline='$time'";

    $cr=mysqli_query($con,$ck);
    while ($row=$cr->fetch_assoc()) 
    {
    	if($dname==$row["dname"] && $time==$row["timeline"])
    	{
             $flag=1;
    	}
    }
    
    if($flag==2)
    {	
        $id=2002;
 		$dq="SELECT id  FROM pentry ORDER BY id DESC  LIMIT 1";
 		$res=mysqli_query($con,$dq);
 		while ($row=$res->fetch_assoc()) 
 		{
 			$id=$row["id"];
 		}

 		$id=++$id;
 	
     $query="INSERT INTO pentry VALUES('$dname','$pname','$id','$time')";
      $ins=mysqli_query($con,$query);
        echo "1";
   }
   else
   {
   	echo "2";
   }
}

?>