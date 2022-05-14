<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display File</title>
	<style media="screen">
		embed{
			border: 2px solid black;
			margin-top: 30px;
		}
		.div1{
			margin-left: 170px;
		}
	</style>
</head>
<body>
	<div class="div1">
		<?php
		include 'database.php';
		$sql="SELECT resume from resume";
		$query=mysqli_query($conn,$sql);
		while ($info=mysql_fetch_array($query)) {
        ?>
        <embed type="application/pdf" src="pdf/<?php echo $info['resume'];?>" width="900" height="500">
            <?php
    }


		 ?>
	</div>

</body>
</html>