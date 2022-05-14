<?php
session_start();

include "database.php";
$conn = mysqli_connect("localhost", "root", "", "bit");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $coname =  $_REQUEST['coname'];
        $backlogs = $_REQUEST['backlogs'];
        $gaps = $_REQUEST['gaps'];
        $package = $_REQUEST['package'];
        $resume = $_REQUEST['resume'];
        $certificates = $_REQUEST['certificates'];
        $linkedin = $_REQUEST['linkedin'];
        $glassdoor = $_REQUEST['glassdoor'];

        $sql = "INSERT INTO placed VALUES ('$susn','$sname',
            '$coname','$marks10','$marks12','$marksug','$backlogs','$gaps','$package','$resume','$certificates','$club1','$club2','$club3','$addclub','$sem','$branch','$email','$phno','$fathername','$mothername','$dob','$haddress','$hcity','$hstate','$hpin','$linkedin','$glassdoor','$schoolname','$board10','$passyear10','$collegename','$course11','$comb','$board12','$passyear12','$projectname','$projectabout','$internshipcompany','$internshipdetails')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully saved!";

                $_SESSION['susn'] = $row['susn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: #");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
