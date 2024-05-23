<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#99ebff">
  <div class="header">
 <div class="wrapper">
  <div class="sidebar">
    <h2>DOCTOR</h2>
    <ul> 
    <li><a href="Home.php">Home</a></li> 
    <li><a href="DocEntry.php">Doctor</a></li>
    <li><a href="Patient.php">Patient</a></li>
    <li><a href="list.php">List of Patient</a></li>
    <li><a href="Pay.php">Payment</a></li>

  </ul>
  </div>
</div>

<div class="view">  
<center><label><?php $id=$_GET["id"]; echo $id." 's Prescription.."?></label>
<table style=width:50% border=3 id="ddisp">
      <tr>
      <th>Doctor</th>
      <th>Patient ID</th>
      <th>Amount</th>
      
    </tr>
<?php
	$id=$_GET["id"];
	$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
  $disp="SELECT * FROM pres WHERE id='$id'";
  $result=mysqli_query($con,$disp);
  if($result)
  {
   
    
      
    while($row=$result->fetch_assoc())
    {
      echo"<tr><td>$row[dname]</td><td>$row[id]</td><td>$row[amt]</td></tr>";
      
    }
  }
 
}

?>
</table>
</center>
</div>
</div>
</body>
<style type="text/css">
      .header
  {
    width:100%;
    height:650px;
    background:linear-gradient(to right,rgba(83,219,255,0.7),rgba(83,217,255,0.7),rgba(3,138,255,0.7)),url("img/b1.jpeg");  
    background-size:cover; 
  }
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    
  }
  .wrapper{
    display:flex;
    position:relative; 
  }
  .wrapper .sidebar
  {
    position: fixed;
    width: 200px;
    height:100%;
    background:#ff66b3;
    padding: 30px 0; 
  }
  .wrapper .sidebar h2{
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px;
  }
  .wrapper .sidebar ul li{
    padding: 15px;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    border-top: 1px solid rgba(225,225,225,0.05);
  }
   .wrapper .sidebar ul li a{
    color: white;
    font-weight: bold;
    font-variant: small-caps
  }
  .wrapper .sidebar ul li:hover{
    background: #99ebff;
    border-top-left-radius: 200px;
    border-bottom-left-radius: 200px;

  }
  .wrapper .sidebar ul li:hover a{
    color: white;
    font-weight: bold;
    font-variant: small-caps;
  }
  .wid
  {
     padding-left:250px;
    padding-top: 80px;
  }
</style>
<style type="text/css">
   .view        {
          user-select: none;
          width: 600px;
          background:#f2f2f2;
          text-align:center;
          align-items:center;
          padding: 40px;
          border: 1px solid #b3b3b3;
          box-shadow:0px 5px 10px rgba(0,0,0,.2);
          z-index: 9999;    
        }
        .view
        {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
        }
</style>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</html>