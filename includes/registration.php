<?php
session_start();
require_once 'connect.php';
session_start();

$userName = $_POST['lastName'];
$userSurname = $_POST['firstName'];
$userEmail = $_POST['email'];
$userPass = $_POST['password'];
$userConfPass = $_POST['confirmPass'];





$_SESSION['message'] = 'Success';
header('Location: ../index.php');

if ($userPass === $userConfPass) {
    //con
    header('Location:../index.php');
    $userPass = md5($userPass);
    mysqli_query($connect, "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES('$userName', '$userSurname', '$userEmail', '$userPass' )");

 }else {
    $_SESSION['message'] = 'Password do not match;';
   header('Location:../regForm.php');
}

//$userPass = md5($userPass);