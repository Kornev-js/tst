<?php
//
//if (isset($_POST['submit'])) {
//
//    require 'database.php';
//
//    $userFirstName = $_POST['firstName'];
//    $userLastName = $_POST['lastName'];
//    $userEmail = $_POST['email'];
//    $password = $_POST['password'];
//    $confirmPass = $_POST['confirmPass'];
//
//    if (empty($userFirstName) || empty($userLastName) || empty($userEmail) || empty($password) || empty($confirmPass)) {
//    header("Location: ./regForm.php?error=emptyfields");
//    exit();
//    }elseif (!preg_match("/^[a-zA-Z0-9]*/")) {
//        header("Location: ./regForm.php?error=invalidusername=" . $userFirstName);
//        exit();
//    }elseif ($password !== $confirmPass) {
//        header("./regForm.php?error=passwordnotmatch&username=" .$userFirstName);
//        exit();
//    }else {
//        $sql = "SELECT email FROM users WHERE email = $userEmail" ;
//        $stmt = mysqli_stmt_init($conn);
//        if (!mysqli_stmt_prepare($stmt, $sql)) {
//            header("./regForm.php?error=passwordnotmatch&username=" .$userFirstName);
//            exit();
//
//        }else {
//            mysqli_stmt_bind_param($stmt, "s");
//            mysqli_stmt_execute($stmt);// if user already exist
//            mysqli_stmt_store_result();
//            $rowCount = mysqli_stmt_num_rows($stmt);
//            if ($rowCount > 0) {
//                header("./regForm.php?error=passwordnotmatch&username=" .$userFirstName);
//                exit();
//            }
//        }
//    }
//
//}