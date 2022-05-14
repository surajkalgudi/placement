<?php
session_start();

include "database.php";
$conn = mysqli_connect("localhost", "root", "", "bit");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $sname = $_REQUEST['sname'];
        $susn = $_REQUEST['susn'];
        $sem = $_REQUEST['sem'];
        $branch = $_REQUEST['branch'];
        $email = $_REQUEST['email'];
        $phno = $_REQUEST['phno'];
        $fathername = $_REQUEST['fathername'];
        $mothername = $_REQUEST['mothername'];
        $dob = $_REQUEST['dob'];
        $haddress = $_REQUEST['haddress'];
        $hcity = $_REQUEST['hcity'];
        $hstate = $_REQUEST['hstate'];
        $hpin = $_REQUEST['hpin'];
        $backlogs = $_REQUEST['backlogs'];
        $gaps = $_REQUEST['gaps'];

        $sql = "INSERT INTO studentprofile VALUES ('$sname','$susn','$sem','$branch','$email','$phno','$fathername','$mothername','$dob','$haddress','$hcity','$hstate','$hpin','$backlogs','$gaps')";

        if(mysqli_query($conn, $sql)){
            echo "Successfully saved!";

                $_SESSION['susn'] = $row['susn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: stuprofile.php");

                exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
