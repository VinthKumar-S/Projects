<?php
     $con=mysqli_connect('localhost','root','','viluthu');

     $sql="SELECT gallery.imageId,gallery.eventid,event.eventname,event.eventdate FROM gallery JOIN event ON gallery.eventid = event.eventid";
 
     $excute_query=mysqli_query($con,$sql);
 
     $rows=array();

     while($row = mysqli_fetch_assoc($excute_query))
     {
        $rows[]=$row;        
     }

     echo json_encode($rows);

?>
