<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/studet.css">
    <title>Retrive Candidates</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <!-- <script>
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
</script> -->
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <img src="../images/logo.png" alt="Bangalore Institute Of Technology" class="logo">
        </nav>
        <div id="container">
  <div id="wrapper">
  <h1>Retrieve Candidates</h1>
  <!-- <p>Select branch: <span onclick="show('Page1');"><a href="#">CSE</a></span>, <span onclick="show('Page2');"><a href="#">ISE</a></span>, <span onclick="show('Page3');"><a href="#">ECE</a></span>, <span onclick="show('Page4');"><a href="#">AI/ML</a></span>
</p> -->
<br>
  <!-- <div id="Page1" class="page" style=""> -->
    <?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM placeinfo");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <td><span>Student USN</span></td>
        <td><span>Company Name</span></td>
        <td><span>10th score</span></td>
        <td><span>12th/Diploma Score</span></td>
        <td><span>UG/PG Score</span></td>
        <td><span>Backlogs</span></td>
        <td><span>Gaps</span></td>
        <td><span>Package</span></td>
      </tr>
    </thead>
    <tbody>
         <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
      <tr>
        <td><?php echo $row['susn'];?></td>
        <td><?php echo $row['coname'];?></td>
        <td><?php echo $row['marks10'];?></td>
        <td><?php echo $row['marks12'];?></td>
        <td><?php echo $row['marksug'];?></td>
        <td><?php echo $row['backlogs'];?></td>
        <td><?php echo $row['gaps'];?></td>
        <td><?php echo $row['package'];?></td>
      </tr>
      <!-- <tr>
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
        <td><a href="#">View resume</a></td>
      </tr> -->
      <?php
$i++;
}
?>
    </tbody>
  </table>
  <?php
}
else{
echo "No result found";
}
?>
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