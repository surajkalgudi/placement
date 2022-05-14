<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/acadinfo.css">
    <title>Student Home-BIT</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <img src="../images/logo.png" alt="Bangalore Institute Of Technology" class="logo">
        </nav>
        <div id="survey-container">

  <h1 id="title">Fill in your Details related to Placement</h1>

  <form action="placeinfo1.php" method="post" id="survey-form">

    <label id="name-label" class="row-label" for="name">USN:</label>
    <input id="name" class="row-input" type="text" name="susn" placeholder="Enter your USN" required>

    <label id="name-label" class="row-label" for="name">Company Name:</label>
    <input id="name" class="row-input" type="text" name="coname" placeholder="School in which you studied your 10th" required>

    <label id="marks-label" class="row-label" for="percent">Marks Scored in 10th (in percentage/CGPA):</label>
    <input id="year" class="row-input" type="text" name="marks10" placeholder="Enter your marks in the form of percentage/cgpa" required>

    <label id="marks-label" class="row-label" for="percent">Marks Scored in 12th/Diploma(in percentage/CGPA):</label>
    <input id="year" class="row-input" type="text" name="marks12" placeholder="Enter your marks in the form of percentage/cgpa" required>

    <label id="marks-label" class="row-label" for="percent">Marks Scored in UG/PG(in percentage/CGPA):</label>
    <input id="year" class="row-input" type="text" name="marksug" placeholder="Enter your marks in the form of percentage/cgpa" required>

    <label id="name-label" class="row-label" for="name">Backlogs:</label>
    <input id="name" class="row-input" type="text" name="backlogs" placeholder="Enter the backlogs if any">

    <label id="name-label" class="row-label" for="name">Gap years:</label>
    <input id="name" class="row-input" type="text" name="gaps" placeholder="Enter the gap years if any">

    <label id="name-label" class="row-label" for="name">Company Package/CTC:</label>
    <input id="name" class="row-input" type="text" name="package" placeholder="Enter the package offered">

    <!-- submit button -->
    <button id="submit" type="submit">Submit</button>

  </form>

</div>
    </div>
 <div class="sidebar">
  <div class="side-wrapper">
   <div class="side-menu">
    <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="studenthome.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="stuprofile.php">
                        <i class="fa fa-user-circle fa-2x"></i>
                        <span class="nav-text">
                            Student Personal Information
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="acadinfo.php">
                        <i class="fa fa-book-open fa-2x"></i>
                        <span class="nav-text">
                            Academic Information
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="placeinfo.php">
                        <i class="fa fa-graduation-cap fa-2x"></i>
                        <span class="nav-text">
                            Placement Information
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="complaced.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Companies you got placed into
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="resume.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Resume
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="social.php">
                       <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Linkedin profile and glassdoor profile links
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="extra.php">
                        <i class="fa fa-medal fa-2x"></i>
                        <span class="nav-text">
                           Extra-Curricular activities
                        </span>
                    </a>
                </li>
                <li>
                   <a href="clubs.php">
                       <i class="fa fa-icons fa-2x"></i>
                        <span class="nav-text">
                            Clubs involved
                        </span>
                    </a>
                </li>
                <li>
                   <a href="cert.php">
                        <i class="fa fa-certificate fa-2x"></i>
                        <span class="nav-text">
                            Certifications
                        </span>
                    </a>
                </li>
                <li>
                    <a href="projects.php">
                       <i class="fa fa-briefcase fa-2x"></i>
                        <span class="nav-text">
                            Projects and Internships
                        </span>
                    </a>
                </li>
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