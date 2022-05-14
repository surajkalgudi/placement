<?php
  session_start();

?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/facultyhome.css">
    <title>Placement Officer Home-BIT</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <img src="../images/logo.png" alt="Bangalore Institute Of Technology" class="logo">
        </nav>
        <div id="app">
  <div class="title">
    <div class="title-inner">
      <div class="cafe">
        <?php
          $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
          ?>
      </div>
      <!-- <div class="mozart">
        <div class="mozart-inner">BIT</div>
      </div>
      <div class="cafe">
        <div class="cafe-inner">Placements</div>
      </div> -->
    </div>
  </div>

  <div class="image">
    <img src='../images/bluebg.jpg' alt=''>
  </div>
</div>

<!-- <a href="https://youtu.be/mBY62jtbMYM" target="_blank" data-keyframers-credit style="color: #000"></a>
<script src="https://codepen.io/shshaw/pen/QmZYMG.js"></script> -->
    </div>
 <div class="sidebar">
  <div class="side-wrapper">
   <div class="side-menu">
    <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="facultyhome.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="studet.php">
                        <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Student Details
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="psform.php">
                        <i class="fa fa-scroll fa-2x"></i>
                        <span class="nav-text">
                            Form for placed students
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="retrieve.php">
                        <i class="fa fa-user-graduate fa-2x"></i>
                        <span class="nav-text">
                            Retrieve eligible candidates
                        </span>
                    </a>
                    
                </li>
                <!-- <li class="has-subnav">
                    <a href="resume.html">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Resume
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="social.html">
                       <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Linkedin profile and glassdoor profile links
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="extra.html">
                        <i class="fa fa-medal fa-2x"></i>
                        <span class="nav-text">
                           Extra-Curricular activities
                        </span>
                    </a>
                </li>
                <li>
                   <a href="clubs.html">
                       <i class="fa fa-icons fa-2x"></i>
                        <span class="nav-text">
                            Clubs involved
                        </span>
                    </a>
                </li>
                <li>
                   <a href="cert.html">
                        <i class="fa fa-certificate fa-2x"></i>
                        <span class="nav-text">
                            Certifications
                        </span>
                    </a>
                </li>
                <li>
                    <a href="projects.html">
                       <i class="fa fa-briefcase fa-2x"></i>
                        <span class="nav-text">
                            Projects and Internships
                        </span>
                    </a>
                </li> -->
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
   </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>