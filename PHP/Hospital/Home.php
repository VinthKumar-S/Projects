<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="header">
  <div class="wrapper">
  <div class="sidebar">
    <h2>HOME</h2>
    <ul> 
    <li><a href="Home.php">Home</a></li> 
    <li><a href="Dlog.php">Doctor</a></li>
    <li><a href="Plog.php">Patient</a></li>
        <li><a href="list.php">List of Patient</a></li>
    <li><a href="Paylog.php">Payment</a></li>

  </ul>
  </div>
</div>

<div class="wid">

<figure class="container">
  <img src="img/p4.png" width="200" height="200">
  <figcaption>
    <h3><a href="Plog.php">BOOKING</a></h3>
  </figcaption>
</figure>

<figure class="container">
  <img src="img/p1.png" width="200" height="200">
  <figcaption>
    <h3> <a href="Dlog.php">DOCTOR</a>
  </h3>
  </figcaption>
 </figure>

<figure class="container">
  <img src="img/p2.png" width="200" height="200">
  <figcaption>
    <h3>  <a href="Paylog.php">PAYMENT</a></h3>
  </figcaption>

</figure>

<figure class="container">
  <img src="img/p3.png" width="200" height="200">
  <figcaption>
    <h3><a href="list.php">PATIENT LIST</a></h3>
  </figcaption>
</figure>



</div>
</div>
</body>
<style type="text/css">
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
 
  .container
  {
    background-color:#000;
    display: inline-block;
    font-size: 16px;
    font-family: 'Open Sans',sans-serif;
    margin: 10px;
    max-width: 200px;
    min-width: 30px;
    overflow: hidden;
    position: relative;
    text-align:center;
    width: 100%;
border-radius: 50px;
  }
  .container *
  {
    -webkit-box-sizing:border-box;
    box-sizing:border-box;
    -webkit-trasition:all 0.35.s ease;
    transition:all 0.35s ease; 
  }
  .container h3{
    background-color: #000;
    border:2px solid #fff;
    color:#fff;
    font-size: lem;
    letter-spacing: 1px;
    margin: 0;
    padding: 5px 10px;
    text-transform: uppercase;
  }
  .container:hover img{
    opacity: 0.5;
  }
  .container:hover h3{
     background-color:green;
    color:black;
    cursor:pointer;  
  }
   .header
  {
    width:100%;
    height:650px;
    background:linear-gradient(to right,rgba(83,219,255,0.7),rgba(83,217,255,0.7),rgba(3,138,255,0.7)),url("img/b4.jpeg");  
    background-size:cover; 
  }


</style>
</html>