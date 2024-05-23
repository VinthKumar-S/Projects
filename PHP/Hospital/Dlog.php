<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery-3.6.1.min.js"></script>
	<script type="text/javascript">
		var id;
		var pass;
			$(document).ready(function(e)
  	{
		   $("#name").keydown(function(e)
      {
        if(e.keyCode == 13)
        {
              call();
        }
      });
		   	 	   $("#pass").keydown(function(e)
      {
        if(e.keyCode == 13)
        {
              call();
        }
      });
	});	   	 	   
		   	function call()
		   	{
		   		    id=$("#name").val();
            		pass=$("#pass").val();
            		if(id!=""&&pass!="")
            		{
            			$.post("DlogB.php",{pass,id},function(data){
                      if(data==1)
                      {
                        location.href = 'http://localhost/php/Hospital/DocEntry.php?id='+id+'';
                      }
                      else
                        alert("Incorrect id or password");
                    });
            		}
            		else
            		{
            			alert("A Filled is Empty");
            		}
		   	} 	   
	</script>
</head>
<body bgcolor="#99ebff">
  <div class="header">
    <div class="wrapper">
  <div class="sidebar">
    <h2>DOCTOR</h2>
    <ul> 
    <li><a href="Home.php">Home</a></li> 
    <li><a href="Dlog.php">Doctor</a></li>
    <li><a href="Plog.php">Patient</a></li>
    <li><a href="list.php">List of Patient</a></li>
    <li><a href="Paylog.php">Payment</a></li>

  </ul>
  </div>
</div>
<div class="lcon">
	<center><p>Doctor Login</p></center><br>
	<input type="text" id="name" title="Press Tab" placeholder="Username"><br><br>

	<input type="text" id="pass" title="Press Tab" placeholder="Password">
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
     .header
  {
    height:100vh;
    background:linear-gradient(to right,rgba(83,219,255,0.7),rgba(83,217,255,0.7),rgba(3,138,255,0.7)),url("img/b2.jpeg");  
    background-size:cover; 
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
  	.lcon
  {
    font-family: "Roboto",san-serif;
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    opacity:99%;
    max-width:260px;
    margin: 200px auto 100px;
    padding: 10px 45px 30px 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0.2),0 5px 5px 0 rgba(0,0,0,0,24);  
    border-radius: 10px;
  }
   .lcon
        {
          position: absolute;
          top: 5%;
          left: 45%;
         
        }
        .lcon p
        {
          font-size:15px;
          padding: 1px;
          text-align: center; 
        }
        .lcon input
        {
          outline: 0;
          border-radius: 10px;
          background: #F2F2F2;
          width: 100%;
          border:0;
          margin: 0 0 15 px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
        }
        .lcon input:hover
        {
          background-color: #D3F8f9;
          transition: all 1s ease 0s;
        }
         .lcon input:focus
        {
          background-color: #D3F8f9;
          transition: all 1s ease 0s;
        }
  </style>

</html>