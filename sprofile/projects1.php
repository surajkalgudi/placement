<?php
session_start();

include "database.php";
$conn = mysqli_connect("localhost", "root", "", "bit");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $susn =  $_REQUEST['susn'];
        $projectname = $_REQUEST['projectname'];
        $projectabout =  $_REQUEST['projectabout'];
        $internshipcompany = $_REQUEST['internshipcompany'];
        $internshipdetails = $_REQUEST['internshipdetails'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO projects VALUES ('$susn',
            '$projectname','$projectabout','$internshipcompany','$internshipdetails')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully saved!";

                $_SESSION['susn'] = $row['susn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: projects.php");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>