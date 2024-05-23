<html>
<head>
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
<center><h1>Transactions</h1></center>
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
<center>Search:<input type="text" name="t" id="t"></center>
</div>
</center>
<script src="jq/jquery-3.6.1.min.js"></script>
<script type="text/javascript">
	var id;
	  $('#t').on("keypress", function(e) {
     
     if (e.keyCode == 13) {
        id=$('#t').val();
        com(id);
         return false; // prevent the button click from happening
     }
     }); 
     function com(id)
{ 
    if(id!="")
    {
        alert("Checking data..");
        $.post("trans_r.php",{id},function(data){
            $("#d").html(data);
        });
   }
else
{
    alert("Enter the filled");
}
}
</script>
<div id="d">
	<?php include 'C:\xampp\htdocs\php\bank\trans_b.php';?>
</div>
<style type="text/css">
	 body
	{
		background-image:url('on.jpg');
		background-repeat:no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;  
	}
table
{
	border-collapse: collapse;
	width: 100%;
	text-align:center;
}
table
{
	border:1px;
}
th
{
	font-size: 20px;
	padding: 15px;
	background-color:#58D3F7; 
}
td
{
	padding: 15px;
}
tr
{
	background-color:#01DFA5; 
}
tr:nth-child(even)
{
		background-color:#01A9DB; 

}	
</style>
</body>
</html>