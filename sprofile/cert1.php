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
        $cert =  $_REQUEST['cert'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO cert VALUES ('$susn',
            '$cert')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully saved!";

                $_SESSION['susn'] = $row['susn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: cert.php");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
