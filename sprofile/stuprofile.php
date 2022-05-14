<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stupro.css">
    <title>Student Home-BIT</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <img src="../images/logo.png" alt="Bangalore Institute Of Technology" class="logo">
        </nav>
        <div id="survey-container">

  <h1 id="title">Fill in your Personal Details</h1>

  <form action="stuprofile1.php" method="post" id="survey-form">

    <!-- name -->
    <label id="name-label" class="row-label" for="name">Student Name:</label>
    <input id="name" class="row-input" type="text" name="sname" placeholder="Enter your name" required>

    <label id="name-label" class="row-label" for="name">USN:</label>
    <input id="name" class="row-input" type="text" name="susn" placeholder="Enter your USN" required>

    <label id="number-label" class="row-label" for="sem">Semester:</label>
    <input id="number" class="row-input" type="number" name="sem" placeholder="Enter your semester" min="1" max="8">

    <label class="row-label" for="dropdown">Branch:</label>
    <select id="dropdown" class="row-input" name="branch" required>
      <option disabled selected>Select an option</option>
      <option name="branch" value="cse">CSE</option>
      <option name="branch" value="ise">ISE</option>
      <option name="branch" value="aiml">AI/ML</option>
      <option name="branch" value="ece">ECE</option>
      <option name="branch" value="eee">EEE</option>
      <option name="branch" value="civ">CIV</option>
      <option name="branch" value="ete">ETE</option>
      <option name="branch" value="mech">MECH</option>
    </select>

    <!-- email -->
    <label id="email-label" class="row-label" for="email">Email:</label>
    <input id="email" class="row-input" type="email" name="email" placeholder="Enter your email" required>

    <label id="phone-label" class="row-label" for="phone">Phone Number:</label>
    <input id="phone" class="row-input" type="number" name="phno" placeholder="Enter your phone number" required>

    <label id="name-label" class="row-label" for="name">Father's Name:</label>
    <input id="name" class="row-input" type="text" name="fathername" placeholder="Enter your father's name" required>

    <label id="name-label" class="row-label" for="name">Mother's Name:</label>
    <input id="name" class="row-input" type="text" name="mothername" placeholder="Enter your mother's name" required>

    <label id="date-label" class="row-label" for="dob">Date of Birth:</label>
    <input id="date" class="row-input" type="date" name="dob" placeholder="Enter your DOB" required>

    <label class="row-label" for="address">Address:</label>
    <textarea id="comments" name="haddress" placeholder="Enter your residential address"></textarea>

    <label id="name-label" class="row-label" for="name">City:</label>
    <input id="name" class="row-input" type="text" name="hcity" placeholder="City" required>

    <label id="name-label" class="row-label" for="name">State:</label>
    <input id="name" class="row-input" type="text" name="hstate" placeholder="State" required>

    <label id="pin" class="row-label" for="pin">Pincode:</label>
    <input id="pin" class="row-input" type="number" name="hpin" placeholder="Pincode" required>

    <label id="name-label" class="row-label" for="name">Backlogs:</label>
    <input id="name" class="row-input" type="text" name="backlogs" placeholder="Enter the backlogs if any">

    <label id="name-label" class="row-label" for="name">Gap years:</label>
    <input id="name" class="row-input" type="text" name="gaps" placeholder="Enter the gap years if any">

    <!-- education dropdown -->
    <!-- <label class="row-label" for="dropdown">Level of education:</label>
    <select id="dropdown" class="row-input" required>
      <option disabled selected>Select an option</option>
      <option value="primary">Primary education</option>
      <option value="secondary">Secondary education</option>
      <option value="higher">Higher education</option>
      <option value="na">No answer</option>
    </select> -->

    <!-- years of experience -->
    <!-- <label id="number-label" class="row-label" for="number">Years of experience (optional):</label>
    <input id="number" class="row-input" type="number" placeholder="Enter number of years of experience" min="0" max="50"> -->

    <!-- programs checkbox -->
    <!-- <p class="row-label">Known programs:</p>

    <label class="row-input small" for="box-windows">
      <input type="checkbox" id="box-windows" name="checkbox" value="windows">
      <span class="inline-label">Windows</span>
    </label>

    <label class="row-input small" for="box-word">
      <input type="checkbox" id="box-word" name="checkbox" value="word">
      <span class="inline-label">Word</span>
    </label>

    <label class="row-input small" for="box-excel">
      <input type="checkbox" id="box-excel" name="checkbox" value="excel">
      <span class="inline-label">Excel</span>
    </label>

    <label class="row-input small" for="box-powerpoint">
      <input type="checkbox" id="box-powerpoint" name="checkbox" value="powerpoint">
      <span class="inline-label">Power Point</span>
    </label>

    <label class="row-input small" for="box-outlook">
      <input type="checkbox" id="box-outlook" name="checkbox" value="outlook">
      <span class="inline-label">Outlook</span>
    </label> -->

    <!-- salary radio -->
    <!-- <p class="row-label">Expected salary:</p>

    <label class="row-input small" for="below-3k">
      <input type="radio" id="below-3k" name="radio" value="below-3k">
      <span class="inline-label">Below $3K</span>
    </label>

    <label class="row-input small" for="3k-4k">
      <input type="radio" id="3k-4k" name="radio" value="3k-4k">
      <span class="inline-label">$3K - $4K</span>
    </label>

    <label class="row-input small" for="4k-5k">
      <input type="radio" id="4k-5k" name="radio" value="4k-5k">
      <span class="inline-label">$4K - $5K</span>
    </label>

    <label class="row-input small" for="above-5k">
      <input type="radio" id="above-5k" name="radio" value="above-5k">
      <span class="inline-label">Above $5K</span>
    </label>

    <label class="row-input small" for="dont-know">
      <input type="radio" id="dont-know" name="radio" value="dont know">
      <span class="inline-label">Don't know</span>
    </label> -->

    <!-- comments textarea -->
    <!-- <label class="row-label" for="comments">Additional informations:</label>
    <textarea id="comments" placeholder="Enter other informations here..."></textarea> -->

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