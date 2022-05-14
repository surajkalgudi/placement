<?php
include 'company.php';
$query="select * from placed limit 50";
$result=mysqli_query($conn,$query);
?>