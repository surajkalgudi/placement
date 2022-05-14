<?php
session_start();

include "database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($username)) {

        header("Location: flogin.php?error=UserName is required");

        exit();

    }else if(empty($password)){

        header("Location: flogin.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM flogin WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: facultyhome.php");

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

    header("Location: incorrect.php");

    exit();

}
