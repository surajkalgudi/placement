<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/flogin.css">
	<title>Login-BIT Placements</title>
  <link rel="icon" type="image/x-icon" href="../images/logo.png">
</head>
<body>
	<div class="container1">
		<nav class="main-nav">
			<img src="../images/logo.png" alt="Bangalore Institute Of Technology" class="logo">
			<ul class="main-menu">
				<li><a href="../index.html">HOME</a></li>
				<li><div class="dropdown">
  <button class="dropbtn">LOGIN</button>
  <div class="dropdown-content">
    <a href="../sprofile/slogin.php">STUDENT</a>
    <a href="../fprofile/flogin.php">FACULTY</a>
    <a href="../pprofile/plogin.php">PLACEMENT OFFICER</a>
  </div>
</div></li>
				<li><a href="../compdet.html">COMPANY DETAILS</a></li>
				<li><a href="../resources.html">RESOURCES</a></li>
			</ul>
		</nav>
	</div>
  <div class="title">
      <h1>Faculty Login</h1>
    </div>
	 <section>
    <div class="login-box">
  <h2>Login</h2>
  <form action="falogin.php" method="post">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" name="" value="Login">
    </a> 
  </form>
</div>
  </section>
  <footer class="footer">
      Copyrights &copy 2022. All rights reserved.
  <script src="js/login.js"></script>
</body>
</html>