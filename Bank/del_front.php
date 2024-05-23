<html>
<head>
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
  <style type="text/css">
  *{
    margin:0;
    padding:0;
     box-sizing:border-box;  
  }
  .drop{
    display:flex;
    justify-content:center;
    margin-top:0px;
    list-style-type:none;    
  }
  a{
    display:block;
    width:200px;
    background-color:black;
    color:white;
    padding:2px;
    font-size:1.2rem;
    text-decoration:none;
    text-align:center;       
  }
  a:hover{
    background-color:skyblue; 
  }
  .Account
  {
    list-style-type:none;
    display:none;   
  }
  .drop li:nth-child(1):hover .Account
  {
    display:block; 
  }
  .Trans
  {
    list-style-type:none;
    display:none;   
  }
  .drop li:nth-child(2):hover .Trans
  {
    display:block; 
  }  
   body
  {
    background-image:url('on.jpg');
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;  
  }
</style>
</head>
<body>
<center><h1>Remove a Account</h1></center>
<center>
<div class="container"> 
<ul class="drop">
  <li>
  <a href="#">Account Mangement</a>
  <ul class="Account">  
  <li><a href="add_act.php">Add Account</a></li>
  <li><a href="del_front.php">Remove Account</a></li>
  <li><a href="up_front.php">Update Account</a></li>
  <li><a href="acc_list.php">List of Accounts</a></li>
</ul>
</li> 
  <li>
  <a href="#">Transactions</a>
  <ul class="Trans">
  <li><a href="dep_front.php">Deposit</a></li>
  <li><a href="wet_front.php">Withdraw</a></li> 
</ul> 
</li>
<li><a href="trans.php">List of Transactions</a></li>
<li><a href="welcome.php">Back</a></li>
</ul> 
</div>
</center>	
<center>
<h3>	
<table><tr><td>		
Enter the Id    :<input type="text" id="id" name="id" required></td></tr>
</table>
</h3>
</center>
<script src="jq/jquery-3.6.1.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  	$(function(){
      var id=["100"];
  			$("#id").autocomplete({ source:'sug.php'});
  	});
  </script>
<script>
   var id;
   $('#id').on("keypress", function(e) {
     
     if (e.keyCode == 13) {
        id=$('#id').val();
        com(id);
         return false; // prevent the button click from happening
     }
     });  
     function com(id)
{ 
    if(id!="")
    {
        alert("Account Deleted..");
        $.post("del_acc.php",{id},function(data){
            $("label").text(data);
        });
   }
else
{
    alert("Enter the filled");
}
}
</script><center><h3>
<label><label></h3></centre>
</body>
</html>