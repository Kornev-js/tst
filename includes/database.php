<?php

$userFirstName = $_POST['firstName'];
$userLastName = $_POST['lastName'];
$userEmail = $_POST['email'];
$password = $_POST['password'];
$confirmPass = $_POST['confirmPass'];




$dbHost = "localhost";
$dbUser = "admin";
$dbPass = "root";
$dbName = "my_db";
//connection to db
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Database connection failed!");
}
$sql = "INSERT INTO my_db(id, name, lastName, email, password )
VALUES ('$userFirstName', '$userLastName', '$userEmail', '$password')"

if  ($conn->query(sql) === true) {
    echo "sended";

}else {
    echo "error";
}
$conn->close();



?>