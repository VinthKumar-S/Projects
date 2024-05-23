<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#ebb678">
    <table><tr><td class="style2" bgcolor="#e49e4e" ><?php include 'Menu.php' ?>

  <center><font size="5" style="font-family:Arial Black;"></font></center>

  </td></tr></table>

<center><label>Admin</label>
<table style=width:50% border=3 id="ddisp">
      <tr>
      <th>Doctor ID</th>	
      <th>Doctor</th>
      <th>Patient ID</th>
      <th>Patient</th>
      <th>Amount</th>
    </tr>
<?php
$con=mysqli_connect('localhost','root','','hospital');
$row;
if($con)
{
  $disp="SELECT * FROM docentry ORDER BY Name ASC";
  $result=mysqli_query($con,$disp);
  if($result)
  {
   

    while($row=$result->fetch_assoc())
    {
      
      echo"<tr><td>$row[id]</td><td>$row[Name]</td>";
    }

  }
  
  }
?>
</table>
</center>
</body>
<style type="text/css">
    .style2
        {
            width: 1336px;
            height: 40px;
        }
</style>
</html>