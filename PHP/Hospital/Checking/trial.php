<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.min.js"></script>
  <script>
    var d;
  	$(function(){
  	 $("#SET").datetimepicker({
				format:'Y-m-d H:i:s',
				formatTime:'H:i:s',
				formatDate:'Y-m-d',
				step:1,
        lang:'ru'
						});
  	});	

  	$(document).ready(function(e)
  	{
  		$("#SET").keydown(function(e)
  		{
  			if(e.keyCode == 13)
  			{
          d=$("#SET").val();
          d.toString();
          $("#sel").append(d);
  	 		 call(d); 
  			}
  		})
  	});
  	function call(d)
  	{
  		if(d=!"")
  		{
             d=$("#SET").val();
          d.toString();
  			   $.post("trydp.php",{d},function(data){
            $("#dis").text(data);
        });
  		}
      $(function() {  
        //$("#SET").tooltip();  
        //$("#Click").tooltip();  
});
  	}
  </script>
</head>
<body>
<title> </title>
<center><h1>Trial</h1></center>
<form method="POST">
Time Start:<input type="text" id="SET" title="Click here"><br>	
<input type="submit" value="Click" id="yes" title="Click here">	
</form>
<div id="sel">js Time:</div>
<div id="dis"></div>
</body>
</html>