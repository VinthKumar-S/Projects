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
<body bgcolor="#6BFF33">
<center><h1>Change Your Personl Details</h1></center>
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
<table>
<tr><td><input type="text" id="id" required placeholder="Account Number"></td></tr>	
<tr><td><input type="text" id="name" required placeholder="Name"></td></tr>
<tr><td><input type="text" id="fn" required placeholder="Father Name"></td></tr>
<tr><td><input type="text" id="no" required placeholder="Phone No"></td></tr>
<tr><td><input type="text" id="an" required placeholder="Adhar No"></td></tr>
<tr><td><textarea id="ad" cols="50" rows="4" placeholder="Addresss"></textarea></td></tr>
<tr><td><input type="date" id="db"></td></tr>
<tr><td>Press Enter on Any Text Field for Submit your data<tr><td>
</table>
<script src="jq/jquery-3.6.1.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
    var no;
    var data;
    var arr=new Array();
  
    $(function(){
            $("#id").autocomplete({ source:'sug.php'});
    });
    $("#id").keydown(function (e) {
            if (e.which === 9)
            {
                no=$('#id').val();
                get(no);
            }
            });
           function get(no)
            {
                if(no!="")
                {

                $.post("tab.php",{no},function(data){
                    arr=data.split(',');
                    $("#name").val(arr[0]);
                    $("#fn").val(arr[1]);
                    $("#no").val(arr[2]);
                    $("#an").val(arr[3]);
                    $("#ad").val(arr[4]);
                    $("#db").val(arr[5]);
                });
             }
            
            else
            {
                alert("Pleaze enter the ID");
            }
        }
  </script>

<script>
       var name;
            var fn;
            var no;
            var an;
            var ad;
            var db;
            var id;
         
            $('#id').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             id=$('#id').val();
             alert(id);
   com(name,fn,no,an,ad,db,id);
    return false; // prevent the button click from happening
}
});
    $('#name').on("keypress", function(e) {
        if (e.keyCode == 13) {
    name=$('#name').val();
             fn=$('#fn').val();
             no=$('#no').val();
             an=$('#an').val();
             ad=$('#ad').val();
             db=$('#db').val();
             id=$('#id').val();
             alert(id);
   com(name,fn,no,an,ad,db,id);
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
             id=$('#id').val();
          
   com(name,fn,no,an,ad,db,id);
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
             id=$('#id').val();
         
   com(name,fn,no,an,ad,db,id);
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
             id=$('#id').val();
             
   com(name,fn,no,an,ad,db,id);
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
             id=$('#id').val();
           
   com(name,fn,no,an,ad,db,id);
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
             id=$('#id').val();
           
   com(name,fn,no,an,ad,db,id);
    return false; // prevent the button click from happening
}
});
    

function com(name,fn,no,an,ad,db,id)
{ 
    if(name!="" && fn!=""  && no!=""  && an!=""  && ad!=""   && db!="" && id!="" )
    {
        alert(fn);
        $.post("up.php",{name,fn,no,an,ad,db,id},function(data){
            $("#try").html(data);
        }); 
   }
else
{
    alert("Enter all filled");
}
}
</script>
<div id="try"></div>
</h3>
</center>
</body>
</html>