<?php

	$con=mysqli_connect('localhost','root','','viluthu');

	date_default_timezone_set('Asia/Kolkata');

	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);
    
    $eventid=0;

    if (isset($_POST['eventId'])) {
     
        $eventid=$_POST['eventId'];

    } else {
        // Handle the case where 'eventId' is not present
        echo "eventId is not set or is null";
    }
    
    
    
    if(isset($_FILES['files']))
    {
       
        $uploadFiles=[];

        foreach ($_FILES['files']['name']as $key=>$name)
        {          
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            $extension = pathinfo($name,PATHINFO_EXTENSION);
            if(in_array($extension,$allowTypes))
            {
                $Newid=uniqid()."_".time();
                $basename=$Newid.".".$extension;//File Renameing

                $source=$_FILES['files']['tmp_name'][$key];
                $destination="eventImages/{$basename}";

                if(move_uploaded_file($source,$destination))
                {
                    $uploadFiles[]=$source;

                    $sql="INSERT INTO gallery (eventid,imageId) VALUES ('$eventid','$basename')";

	                $result=$con->query($sql);

                }
               
                echo json_encode(['uploadedFiles' => $uploadFiles]);  
            }
        }
    }
    
?>