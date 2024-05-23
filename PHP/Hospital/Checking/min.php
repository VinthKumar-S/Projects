<?php
$start = strtotime('2008-12-13 22:00:00');
$end = strtotime('2008-12-14 01:00:00');
echo "$start<br>";
echo "$end<br>";
$mins = ($end - $start) / 60;
$mins=$mins/5;
echo $mins."<br>";
//echo $mins/15;
?>