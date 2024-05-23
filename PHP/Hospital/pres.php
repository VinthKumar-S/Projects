<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	 	<script src="js/jquery-3.6.1.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script type="text/javascript">
			var amt;
			var med;
			var id;
      var mname;
      var time="";
      var mor="";
      var nig="";
      var aft="";
			$(document).ready(function(e)
  			{
  				$("#amt").keydown(function(e)
  				{
  					if(e.keyCode == 13)
  					{
           				pass();
                
                  
  					}
  				})
  			});

         $(function(){

            $("#medcount").autocomplete({ source:'sugm.php'});
    });

			function pass()
			{
				amt=$("#amt").val();
	      id=$("#id").val();


				if(amt!="")
  				{

  			    		$.post("PresDB.php",{amt,id},function(data)
  			   		{
                  $("#dis").text(data);
                  $("#dis").dialog( "open" ); 
       				});
  				}
  				else
  					alert("Enter All filed");
           
			}



      $(document).ready(function(e)
        {
          $("#medcount").keydown(function(e)
          {
            if(e.keyCode == 13)
            {
               
                var checks1=document.getElementsByClassName('mc');
            var checks2=document.getElementsByClassName('ac');
            var checks3=document.getElementsByClassName('nc');
        
            for (var k = 0; k<=0; k++) {

              if(checks1[k].checked==true)
              {
                mor=checks1[k].value+",";
              }
              else
              { 
                mor="";

                  }
                   if(checks2[k].checked==true)
              {
                aft=checks2[k].value+",";
              }
              else
              { 
                aft="";

                  }
                   if(checks3[k].checked==true)
              {
                nig=checks3[k].value+",";
              }
              else
              { 
                nig="";

                  }
               
            }
                  time=mor+aft+nig;
                  time=time.substring(0,time.length-1);

                  
                  add();           
            }
          })
        });



      function add()
      {

        mname=$("#medcount").val();
          id=$("#id").val();
        if (time!=""&& mname!="") 
        { 

               $.post("med.php",{time,mname,id},function(data)
              {
                   alert("added");
                 $("#tab").append("<tr><td>"+id+"</td><td>"+mname+"</td><td>"+time+"</td></tr></table>");
              });
              
        }
        else
          alert("filed is Empty");
          
      }





      $(function()
        
  {
      $('#rm').click(function()
    { 
        location.reload();
        });
  });

		</script>
    <script type="text/javascript">
  
  $(function()
  {
    $( "#dis" ).dialog({  
               autoOpen: false,
                 show: "scale",
                 hide: "explode",    
               buttons: {  
                  OK: function() {
                    $(this).dialog("close");
                     location.reload(); 
                  }  
               },  
               title: "",  
               position: {  
                  my: "center",  
                  at: "center"  
               }  
            }); 
      });
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
    <li><a href="Patient.php">Patient</a></li>
    <li><a href="list.php">List of Patient</a></li>
    <li><a href="Paylog.php">Payment</a></li>

  </ul>
  </div>
</div>
<div class="main">

<div class="pres">
<center><font style="font-family: Cursive; font-size:25px"><label id="lb"><h5>
  <?php $id=$_GET["id"]; echo $id." 's Prescription.."?></h5></label></font></center>
<br>

<form method="post">
<label style="font-family:Fantasy; font-size:22px">Fees</label><br>
<input type="text" id="id" value="<?php $id=$_GET["id"]; echo $id ?>"><br><br>
<input type="text" id="amt" name="amt" placeholder="Amount"><br><br>
<label style="font-family:Fantasy; font-size:22px">Medicines</label><br>

<input type="text" id="medcount" placeholder="Medicine">
<br><br>
<input type="checkbox" class="mc" name="chk" value="Morning"><label style="font-family: Serif; font-size:18px">Morning</label>
<input type="checkbox" class="ac" name="chk"value="Afternoon"><label style="font-family: Serif; font-size:18px">Afternoon</label>
<input type="checkbox" class="nc" name="chk" value="Night"><label style="font-family:Serif; font-size:18px">Night</label>
<br><br>
<div class="det" id="med"></div>
</form>
<div id="tb">
  <table style="background-color: #F0F0F0" border="2" id="tab"><th>Id</th><th>Medicine</th><th>Time</th>
</div>
</div>
</div>
<div id="dis"></div>
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

   .pres
        {
          margin-bottom:10%; 
          margin-left:20%;  
          width: 40%; 
        }

            .main
        {
          height: 100vh;
          width: 100%;
          display:flex;
          align-items:center;
          justify-content:center;   
        }
       input[type=text]
        {
          width: 50%;
          border:2px solid #aaa;
          border-radius: 4px;
          margin: 8px 0;
          outline: none;
          padding: 8px;
          box-sizing: border-box;
          transition: .3s;

        }
        input[type=text]:focus{
          border-color:dodgerBlue;
          box-shadow:0 0 8px 0 dodgerBlue;  
        }
        label
        {
          color:#F5F5F5;
        
        }

  </style>
  <style type="text/css">
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


