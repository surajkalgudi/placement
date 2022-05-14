<?php
session_start();

include "database.php";

if (isset($_POST['usn']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $usn = validate($_POST['usn']);

    $password = validate($_POST['password']);

    if (empty($usn)) {

        header("Location: slogin.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: slogin.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM slogin WHERE usn='$usn' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['usn'] === $usn && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['usn'] = $row['usn'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: studenthome.php");

                exit();

            }else{

                header("Location: incorrect.php");

                exit();

            }

        }else{

            header("Location: incorrect.php");

            exit();

        }

    }

}else{

    header("Location: slogin.php");

    exit();

}
