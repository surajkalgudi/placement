<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/slogin.css">
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
      <h1>Student Login</h1>
    </div>
	 <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="../images/bit2.jpg" alt="" /></div>
        <div class="formBx">
          <form action="login.php" method="post">
            <h2>Sign In</h2>
            <input type="text" name="usn" placeholder="USN" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="" value="Login" />
            <p class="signup">
              <a href="forgotpassword.php">Forgot Password?</a>
            </p>
            <p class="signup">
              Don't have an account?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="loginn.php" method="post">
            <h2>Create an account</h2>
            <input type="text" name="usn" placeholder="USN" />
            <input type="name" name="name" placeholder="Full Name" />
            <input type="password" name="password" placeholder="Create Password" />
            <input type="email" name="email" placeholder="Email" />
            <input type="submit" name="" value="Sign Up" />
            <p class="signup">
              Already have an account?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="../images/bit3.jpg" alt="" /></div>
      </div>
    </div>
  </section>
  <footer class="footer">
      Copyrights &copy 2022. All rights reserved.
  <script src="js/login.js"></script>
</body>
</html>
