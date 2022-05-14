<?php
$conn = mysqli_connect("localhost", "root", "", "bit");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $usn =  $_REQUEST['usn'];
        $name = $_REQUEST['name'];
        $password =  $_REQUEST['password'];
        $email = $_REQUEST['email'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO slogin  VALUES ('$usn',
            '$name','$password','$email')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully registered!";

                $_SESSION['usn'] = $row['usn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: slogin.php");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
