<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/psform.css">
    <title>Placement Officer Home-BIT</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <img src="../images/logo.png" alt="Bangalore Institute Of Technology" class="logo">
        </nav>
        <div id="survey-container">

  <h1 id="title">Fill in the Placed Student Details</h1>

  <form action="form.php" method="post" id="survey-form">

    <!-- name -->
    <label id="name-label" class="row-label" for="usn">Student USN:</label>
    <input id="name" class="row-input" type="name" name="susn" placeholder="Enter student's USN" required>

    <label id="name-label" class="row-label" for="name">Company Name:</label>
    <input id="name" class="row-input" type="text" name="coname" placeholder="Enter company name" required>

    <p class="row-label">Full-Time/Internship:</p>
    <label class="row-input small" for="ft">
      <input type="radio" id="ft" name="work" value="fulltime">
      <span class="inline-label">Full-Time</span>
    </label>

    <label class="row-input small" for="intern">
      <input type="radio" id="intern" name="work" value="internship">
      <span class="inline-label">Internship</span>
    </label>
    <label id="year-label" class="row-label" for="ctc">CTC/Stipend offered:</label>
    <input id="year" class="row-input" type="number" name="salary" placeholder="Enter ctc/stipend in Rs." required>
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
                    <a href="pohome.php">
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