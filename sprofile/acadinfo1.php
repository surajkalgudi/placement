<?php
session_start();

include "database.php";
$conn = mysqli_connect("localhost", "root", "", "bit");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $susn = $_REQUEST['susn'];
        $schoolname = $_REQUEST['schoolname'];
        $board10 = $_REQUEST['board10'];
        $passyear10 = $_REQUEST['passyear10'];
        $marks10 = $_REQUEST['marks10'];
        $collegename = $_REQUEST['collegename'];
        $course11 = $_REQUEST['course11'];
        $comb = $_REQUEST['comb'];
        $board12 = $_REQUEST['board12'];
        $passyear12 = $_REQUEST['passyear12'];
        $marks12 = $_REQUEST['marks12'];

        $sql = "INSERT INTO acadinfo VALUES ('$susn','$schoolname','$board10','$passyear10','$marks10','$collegename','$course11','$comb','$board12','$passyear12','$marks12')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully saved!";

                $_SESSION['susn'] = $row['susn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: acadinfo.php");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
