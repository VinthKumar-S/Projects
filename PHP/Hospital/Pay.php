<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
   <script src="js/jquery-3.6.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
        $(function(){

            $("#id").autocomplete({source:'sugid.php'

            });

    });
      

var id;
var amt;

          $(document).ready(function(e)
    {
      $("#id").keydown(function(e)
      {
        if(e.keyCode == 13)
        {
              call();

        }
      })
    });
         
     function call()
    {
      id=$("#id").val();

       if(id!="")
       {
            $.post("payb.php",{id},function(data){
                    $("#amt").text("Amount:"+data);
            });
       }
       else
         alert("Filled is Empty");
    }


      $(function()
  {
      $('#yes').click(function()
    { 
      id=$("#id").val();

       if(id!="")
       {
         
           $.post("payb2.php",{id},function(data){
                  $("#dis").text(data);
                  $("#dis").dialog( "open" );
            });
           }
       else
         alert("Filled is Empty");   
       
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
    <h2>PAYMENT</h2>
    <ul> 
    <li><a href="Home.php">Home</a></li> 
    <li><a href="Dlog.php">Doctor</a></li>
      <li><a href="Plog.php">Patient</a></li>
        <li><a href="list.php">List of Patient</a></li>
    <li><a href="Paylog.php">Payment</a></li>

  </ul>
  </div>
</div>
<div class="main">
<div class="pay">
  <center><h3>Payment</h3></center><br>
  <center>
  <input type="text"  id="id" placeholder="Id"><br><br>
  <p id="amt"></p><br><br>
  <button id="yes" value="Submit">Submit</button></center>
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
    background:linear-gradient(to right,rgba(83,219,255,0.7),rgba(83,217,255,0.7),rgba(3,138,255,0.7)),url("img/b8.jpeg");  
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
 
          .pay
        {
         max-width:950px;
          width: 30%;
          background:#f2f2f2;
          margin-left:20%; 
          box-shadow:0 5px 10px rgba(0,0,0,0.2); 
          border-radius:12px; 
          padding:40px 50px 40px 40px; 
          align-items:center;
          justify-content:center;  
        }
        .main
        {
          height: 100vh;
          width: 100%; 
          display:flex;
          align-items:center;
          justify-content:center;   
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
             button:hover
  {
    background-color:green;
    color:white;
    cursor:pointer;   
  }
  .pay input
{
  border-radius: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  background: 
  linear-gradient(90deg,#222,#222)center bottom/0 2px no-repeat;
  transition: background-size 0.3s ease; 

}
</style>
<style type="text/css">
</style>
</html>