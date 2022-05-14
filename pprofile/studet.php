<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/studet.css">
    <title>Placement Officer Home-BIT</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <script>
function show(elementID) {
    var ele = document.getElementById(elementID);
    if (!ele) {
        alert("no such element");
        return;
    }
    var pages = document.getElementsByClassName('page');
    for(var i = 0; i < pages.length; i++) {
        pages[i].style.display = 'none';
    }
    ele.style.display = 'block';
}
</script>
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <img src="../images/logo.png" alt="Bangalore Institute Of Technology" class="logo">
        </nav>
        <div id="container">
  <div id="wrapper">
  <h1>STUDENT DETAILS</h1>
  <p>Select branch: <span onclick="show('Page1');"><a href="#">CSE</a></span>, <span onclick="show('Page2');"><a href="#">ISE</a></span>, <span onclick="show('Page3');"><a href="#">ECE</a></span>, <span onclick="show('Page4');"><a href="#">AI/ML</a></span>
</p>
<br>
  <div id="Page1" class="page" style="">
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Student USN</span></th>
        <th><span>Student Name</span></th>
        <th><span>Semester</span></th>
        <th><span>Section</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1BI20CS001</td>
        <td>AAAAA</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20CS002</td>
        <td>BBBBB</td>
        <td>5</td>
        <td>B</td>
      </tr>
      <tr>
        <td>1BI20CS003</td>
        <td>CCCCC</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20CS004</td>
        <td>DDDDD</td>
        <td>5</td>
        <td>C</td>
        <!-- <td><a href="#">View resume</a></td> -->
      </tr>
    </tbody>
  </table>
  </div>
  <div id="Page2" class="page" style="display:none">
    <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Student USN</span></th>
        <th><span>Student Name</span></th>
        <th><span>Semester</span></th>
        <th><span>Section</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1BI20IS001</td>
        <td>AAAAA</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20IS002</td>
        <td>BBBBB</td>
        <td>5</td>
        <td>B</td>
      </tr>
      <tr>
        <td>1BI20IS003</td>
        <td>CCCCC</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20IS004</td>
        <td>DDDDD</td>
        <td>5</td>
        <td>C</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="Page3" class="page" style="display:none">
    <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Student USN</span></th>
        <th><span>Student Name</span></th>
        <th><span>Semester</span></th>
        <th><span>Section</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1BI20EC001</td>
        <td>AAAAA</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20EC002</td>
        <td>BBBBB</td>
        <td>5</td>
        <td>B</td>
      </tr>
      <tr>
        <td>1BI20EC003</td>
        <td>CCCCC</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20EC004</td>
        <td>DDDDD</td>
        <td>5</td>
        <td>C</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="Page4" class="page" style="display:none">
    <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Student USN</span></th>
        <th><span>Student Name</span></th>
        <th><span>Semester</span></th>
        <th><span>Section</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1BI20AI001</td>
        <td>AAAAA</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20AI002</td>
        <td>BBBBB</td>
        <td>5</td>
        <td>B</td>
      </tr>
      <tr>
        <td>1BI20AI003</td>
        <td>CCCCC</td>
        <td>5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>1BI20AI004</td>
        <td>DDDDD</td>
        <td>5</td>
        <td>C</td>
      </tr>
    </tbody>
  </table>
  </div>
 </div> 

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