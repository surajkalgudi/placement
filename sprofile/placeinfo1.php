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
        $coname = $_REQUEST['coname'];
        $marks10 = $_REQUEST['marks10'];
        $marks12 = $_REQUEST['marks12'];
        $marksug = $_REQUEST['marksug'];
        $backlogs = $_REQUEST['backlogs'];
        $gaps = $_REQUEST['gaps'];
        $package = $_REQUEST['package'];

        $sql = "INSERT INTO placeinfo VALUES ('$susn','$coname','$marks10','$marks12','$marksug','$backlogs','$gaps','$package')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully saved!";

                $_SESSION['susn'] = $row['susn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: placeinfo.php");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
