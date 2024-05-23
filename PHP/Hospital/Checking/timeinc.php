<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script src="js/jquery-3.6.1.min.js"></script>
		<script type="text/javascript">
	
		</script>
</head>
<body>
<?php
 $date="10:10:05";
 $newDate = date('H:i:s',strtotime($date.'+20 minutes'));
 echo $newDate;
 ?>
</body>
</html>