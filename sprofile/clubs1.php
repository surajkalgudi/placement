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
        $club1 = $_REQUEST['club1'];
        $club2 = $_REQUEST['club2'];
        $club3 = $_REQUEST['club3'];
        $addclub = $_REQUEST['addclub'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO clubs VALUES ('$susn',
            '$club1','$club2','$club3','$addclub')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully saved!";

                $_SESSION['susn'] = $row['susn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: clubs.php");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
