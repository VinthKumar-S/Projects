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
<body >
<center><h1>Management System</h1></center>	
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
</body>
</html>