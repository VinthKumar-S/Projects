<html>
<head>   
</head>
<body bgcolor="#6BFF33">
<form method="POST">
<center><h1>Admin page</h1></center>	
<center>
<table>
<tr><td>	
Admin Name  :</td><td><input type ="text" id="uid" autocomplete="on" required></td></tr>
<tr><td>Password    :</td><td><input type="text"  id="pass" required></td></tr>
</table>
</form>
<script src="jq/jquery-3.6.1.min.js"></script>
<script>
     var pass;
            var id;
    $('#pass').on("keypress", function(e) {
        if (e.keyCode == 13) {
    pass=$('#pass').val();
             id=$('#uid').val();
   com(pass,id);
    return false; // prevent the button click from happening
}
});
       
$('#uid').on("keypress", function(e) {
     
if (e.keyCode == 13) {
    pass=$('#pass').val();
             id=$('#uid').val();
   com(pass,id);
    return false; // prevent the button click from happening
}
});
function com(pass,id)
{ 
    if(pass!="" && id!="" )
    {
   if(pass=='86105')
   {
    alert("Login Successful");
     window.location="welcome.php";   
   }
   else
   {
    $("p").text("invalid password or user name!");
   }
}
else
{
    alert("Enter all filled");
}
}
</script>
<p></p>
</center>
</body>
</html>