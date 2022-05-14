<?php
include 'retrieve-data.php';
$query="select * from studentprofile limit 50";
$result=mysqli_query($conn,$query);
?>