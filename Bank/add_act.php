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
<center><h1>Create New Account</h1></center>
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
<h3>    
<table>     
<tr><td><input type="text" id="name" required placeholder="Name"></td></tr>
<tr><td><input type="text" id="fn" required placeholder="Father Name"></td></tr>
<tr><td><input type="text" id="no" required placeholder="Phone No"></td></tr>
<tr><td><input type="text" id="an" required placeholder="Adhar No"></td></tr>
<tr><td><input type="text" id="amt" required placeholder="Amount"></td></tr>
<tr><td><textarea id="ad" cols="50" rows="4" placeholder="Addresss"></textarea></td></tr>
<tr><td><input type="date" id="db"></td></tr>
<tr><td>Press Enter on Any Text Field for Submit your data<tr><td>

</table>
</h3>   
</div>
</center>	
<CENTER>	
</CENTER>
<script src="jq/jquery-3.6.1.min.js"></script>
<script src="jquery-ui.js"></script>
  <script>
    $(function(){
            $("#name").autocomplete({ source:'sug2.php'});
    });
  </script>
<script>
       var name;
            var fn;
            var no;
            var an;
            var ad;
            var db;
            var amt;
    $('#name').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             amt=$('#amt').val();
   com(name,fn,no,an,ad,db,amt);
    return false; // prevent the button click from happening
}
});
       $('#fn').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             amt=$('#amt').val();
   com(name,fn,no,an,ad,db,amt);
    return false; // prevent the button click from happening
}
});
    $('#no').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             amt=$('#amt').val();
   com(name,fn,no,an,ad,db,amt);
    return false; // prevent the button click from happening
}
});
    $('#an').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             amt=$('#amt').val();
   com(name,fn,no,an,ad,db,amt);
    return false; // prevent the button click from happening
}
});    
        $('#ad').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             amt=$('#amt').val();
   com(name,fn,no,an,ad,db,amt);
    return false; // prevent the button click from happening
}
});
            $('#db').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             amt=$('#amt').val();
   com(name,fn,no,an,ad,db,amt);
    return false; // prevent the button click from happening
}
});
                $('#amt').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             amt=$('#amt').val();
   com(name,fn,no,an,ad,db,amt);
    return false; // prevent the button click from happening
}
});

function com(name,fn,no,an,ad,db,amt)
{ 
    if(name!="" && fn!=""  && no!=""  && an!=""  && ad!=""   && db!="" && amt!="" )
    {
        alert("Account Created..");
        $.post("add_acc.php",{name,fn,no,an,ad,db,amt},function(data){
            $("#dis").text(data);
        }); 
   }
else
{
    alert("Enter all filled");
}
}
</script>
<center><h2><div id="dis"></div></h2></center>
</body>
</html>
