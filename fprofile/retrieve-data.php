<?php
include 'retrieve-data.php';
$query="select * from placeinfo limit 50";
$result=mysqli_query($conn,$query);
?>