<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
    $(function(){

            $("#Doc").autocomplete({ source:'sug.php'});
    });
</script>
  <script>
    
    var v;
    var i;
    var doc;
    var ck=[];
    var v;
    var j;
    var con="";
  		$(document).ready(function(e)
  	{
  		$("#Doc").keydown(function(e)
  		{
  			if(e.keyCode == 13)
  			{        
                
                doc=$('#Doc').val();
                if(doc != "")
                {

                    for(j=0;j<=ck.length && j<1;j++)
                    {
                      if(ck[j]!=doc)
                      {
                        ck[j]=doc;


                      $.post("BKP.php",{doc},function(data){  
                            var temp=data;
                            temp=temp.substring(0,temp.length-1);
                        var dataArr =temp.split(',');

                         $('#con').remove();
                        
                        $('#add').append("<div id='con'><p>Availabe Time of "+doc+":</p></div>");

                        $.each(dataArr, function(index, value) {

                          

                        $('#con').append("<button id="+index+" onclick='myFunction("+index+")' value="+value+" class='at'>"+value+"</button>");
  
                        });

                                 

                      });
                      


                      }
                      else
                      {
                        alert("Data is Exist");
                      }
                    } 

          			     
              }
              else
              {
                alert("Field is empty..")
              }
           return false;       
  			}
  		});
  	});
 </script>


     
<script>

      $(function()
  {
      $('#rm').click(function()
    { 
        location.reload();
        });
  });
 
  </script>

  <script>
      function myFunction(index) {

                  //alert(index);
                  var dname=$('#Doc').val();
                  var pat=$('#pat').val();
                  var time = document.getElementById(index).value;



                  var comp="Appointment is Booked"

                 if(dname!="" && pat!="" && time!="")
                 {
                     $.post("PDB.php",{dname,pat,time},function(data){ 
                     if(data==1)
                     { 
                              $("#dis").text("Appointment Booked");
                              document.getElementById(index).style.backgroundColor='#911';
                             $("#dis").dialog( "open" );
                      }
                      else 
                      {
                          $("#dis").text("Already Booked");
                          $("#dis").dialog( "open" );
                      }       
                    });
                }
                else
                {
                    alert("Field is empty");
                }
          }
</script>
<script type="text/javascript">
  $('#Doc').tooltip({});
  $('#pat').tooltip({});
  $('#add').tooltip({});
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
               title: "Submission",  
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
    <h2>PATIENT</h2>
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
<div class="bk">
  <p style="font-family: verdana; font-size:30px">Patient</p>
  <br>
  <br>

             <input type="text" id="Doc" title="Press Enter" placeholder="Doctor Name"><br><br>
          <input type="text" id="pat" title="Press Enter" placeholder="Patient Name" ><br><br>


<div class="contain" id="add" title="Available"></div><br><br>
 <input type="button" value="Reset" class="rm" id="rm"> 

<div id="dis"></div>
</div>
</div>
</div>
</body>
  <style type="text/css">
      .header
  {
    width:100%;
    height:650px;
    background:linear-gradient(to right,rgba(83,219,255,0.7),rgba(83,217,255,0.7),rgba(3,138,255,0.7)),url("img/b6.jpeg");  
    background-size:cover; 
  }
     
     .main
        {
          width: 50%;
          position: absolute;
          top: 25%;
          left: 45%;
         
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
        .rm
        {
          font-family: "Roboto",san-serif;
          font-size: 18px;
          font-weight: bold;
          background: #1E90ff;
          width:100px;
          height: 50px;
          padding: 20px;
          text-align: center;
          text-decoration: none;
          text-transform: uppercase;
          color: #fff;
          border-radius:5px;
          cursor: pointer;
          box-shadow: 0 0 rgba(0,0,0,0.1);
          -webkit-transition-duration:0.3s;
          transition-duration: 0.3s;
          -webkit-transition-property:box-shadow,transform;
          transition-property:box-shadow,transform; 
        }
        .rm
        {
          box-shadow:0 0 20px rgba(0,0,0,0.5);
          -webkit-transform:scale(1.1);
          transform:scale(1.1);  
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

<html>