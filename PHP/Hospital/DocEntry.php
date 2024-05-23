
<html>
<head>
  <style type="text/css">
    .con{
      width:600px;
      margin:100px auto;
      height:50px;   
    }
    #tabs
    {
      border:none;
    }
        .header
  {
    width:100%;
    height:650px;
    background:linear-gradient(to right,rgba(83,219,255,0.7),rgba(83,217,255,0.7),rgba(3,138,255,0.7)),url("img/b7.jpeg");  
    background-size:cover; 
  }
  </style>
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	 <script src="js/jquery-3.6.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.min.js"></script>
  <script>
  	$(function(){
  			 $("#SET").datetimepicker({
        format:'Y-m-d H:i:i',
        formatTime:'H:i:i',
        formatDate:'Y-m-d',
        step:1,
        lang:'ru'
            });
  	});
  		$(function(){

  			$("#EET").datetimepicker({
				format:'Y-m-d H:i:i',
				formatTime:'H:i:i',
				formatDate:'Y-m-d',
				step:1,
				lang:'ru'
						});
  	});


  		var st;
  		var et;
  		var min;
      var id;
      var n;

  		$(document).ready(function(e)
  	{
  		$("#SET").keydown(function(e)
  		{
  			if(e.keyCode == 13)
  			{
           			call(st,et);
  			}
  		})
  	});
  		$(document).ready(function(e)
  	{
  		$("#EET").keydown(function(e)
  		{
  			if(e.keyCode == 13)
  			{
          		call(st,et);
  			}
  		});
        $("#name").keydown(function(e)
      {
        if(e.keyCode == 13)
        {
              call(st,et);
        }
      });
        $("#id").keydown(function(e)
      {
        if(e.keyCode == 13)
        {
              call(st,et);
        }
      });
  	});

  		function call(st,et)
  	{
  		      st=$("#SET").val();
            et=$("#EET").val();
            min=$("#Min").val();
            id=$("#id").val();
            n=$("#name").val();
  		if(st!="" && et !="" && min != "" && id != "")
  		{
  			   $.post("DocBack.php",{st,et,n,min,id},function(data){
            $("#dis").text(data);
             $("#dis").dialog( "open" ); 
        });
        
  		}
  		else
  			alert("Enter All filed")
  	}
  </script>
  <script type="text/javascript">
      $(document).ready(function(){
      $('#Min').selectmenu({width:90});
    });
  </script>
  <script type="text/javascript">
      $(function() {  
            $( "#tabs" ).tabs();  
         });
  </script>

  <script type="text/javascript">
    $(function(){

              var ex=["D0","D1","D2","D3"]
            $("#id").autocomplete({source:ex

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
                  OK: function() {$(this).dialog("close");}  
               },  
               title: "",  
               position: {  
                  my: "center",  
                  at: "center"  
               }  
            }); 

           $( "#alt" ).dialog({  
               autoOpen: false, 
                 show: "scale",
                 hide: "explode",   
               buttons: {  
                  OK: function() {$(this).dialog("close");}  
               },  
               title: "",  
               position: {  
                  my: "center",  
                  at: "center"  
               }  
            });   
  });
</script>
<script type="text/javascript">
  var cell;
  var id;
 function myFunction(index)
 {
    $("#alt").dialog( "open" );
    id = document.getElementById(index).value;
    $(function()
    {
         $("#amt").click(function()
         {
              $.get("pres.php",{id},function(data){
                //alert(data);
                             location.href = 'http://localhost/php/Hospital/pres.php?id='+id+'';
              });

         });

          $("#det").click(function()
         {
              $.get("view.php",{id},function(data){
                //alert(data);
                             location.href = 'http://localhost/php/Hospital/view.php?id='+id+'';
              });

         });
            
                   
      });

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

 <div class="con">
      <div id="tabs">  
         <ul>  
            <li><a href="#de">Sessions</a></li>
             <li><a href="#fix">Appointment</a></li>
            </ul>
<div id="de">
  <center><h3>Set Time</h3></center>
<center>  
<font size="4" style="font-family:Palatino;">  
<form method="POST">
  <label class="getF">
<input type="text" id="name" title="Press Tab" placeholder="Name"><br><br>
<input type="text" id="id" title="Press Tab" placeholder="id"><br><br>
<input type="text" id="SET" placeholder="Start Time"><br><br>
<input type="text" id="EET" placeholder="Ending Time"><br><br>
</label><br>	
<label>Minutes:</label><select name="Min" id="Min">
  <option value="5">5</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
</select>
</form>
<div id="dis"></div>
</font>
</center>
</div>
<div id="fix">
  <center><font size="3"> Patient Details </font></center>
  <center>
 <table style=width:70% border=3 id="ddisp">
      <tr>
      <th>Doctor</th>
      <th>Patient</th>
      <th>Time</th>
      <th>ID</th>
    </tr>
<?php
$index=1;
$con=mysqli_connect('localhost','root','','hospital');
if($con)
{
  $disp="SELECT * FROM pentry";
  $result=mysqli_query($con,$disp);
  if($result)
  {
   

    while($row=$result->fetch_assoc())
    {
      
      echo"<tr><td>$row[dname]</td><td>$row[pname]</td><td>$row[timeline]</td>
      <td><button id=$index   onclick=myFunction($index) value=$row[id] >$row[id]</button></td></tr>";
      $index=++$index;
    }
  }
}
?>
</table>
</center>
    </div>
  </div>
</div>

<div id="alt">
  <button id="amt">Prescription</button>
 <button id="det">Details</button>  
</div>
</div>
</body>
  <style type="text/css">
    tr:hover
  {
    background-color:#99ddff;
    color:white;
    cursor:pointer;   
  }
     button:hover
  {
    background-color:green;
    color:white;
    cursor:pointer;   
  }
  label
  {
    width:100px;
    display:inline-block;  
  }
  .ui-widget-header
  {
    background:none;
    border:none;
  }
  #tabs
  {
    border:none; 
  }
  .ui-tabs .ui-tabs-panel
  {
    border:1px solid lightgrey;
    border-radius:2px;
    padding:5% 10%;  
  }
  .ui-state-default, .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default, .ui-button,
        html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
            background: steelblue;
            border: none;
        }
        .ui-state-active, .ui-widget-content .ui-state-active,
        .ui-widget-header .ui-state-active, a.ui-button:active, 
        .ui-button:active, .ui-button.ui-state-active:hover {
            background: lightseagreen;
        }
        .ui-state-default a, .ui-state-default a:link,
        .ui-state-default a:visited, a.ui-button,
        a:link.ui-button, a:visited.ui-button, .ui-button {
            color: white;
        }
        .style2
        {
            width: 1336px;
            height: 40px;
        }
       </style>
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
    color:#fff;
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
.getF input
{
  border-radius: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  background: 
  linear-gradient(90deg,#222,#222)center bottom/0 2px no-repeat;
  transition: background-size 0.3s ease; 

}
  button{
         background-color: #47a386;
         border:0;
         border-radius: 5px;
         box-shadow: 0 2px 4px rgba(0,0,0,0.2);
         color: #fff;
         font-size: 14px;
         padding: 10px 25px;
        }

</style>
<html>