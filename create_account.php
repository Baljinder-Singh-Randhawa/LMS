<?php

// connection called
include_once 'common_files/connect.php';

$conn = mysqli_connect($host_name, $user_name, $password, $db_name);


$user_name = stripslashes($_POST['user_name']);
$contact = stripslashes($_POST['contact']);
$email = stripslashes($_POST['email']);
$password = md5(stripslashes($_POST['password']));
$type = stripslashes($_POST['type']);

// calling database

$sql = "INSERT INTO `library_management`.`login_info` (`user_name`, `contact`, `e-mail`, `password`, `type`)
 VALUES ('$user_name', '$contact', '$email', '$password', '$type');";

// inserting data to database
if($conn->query($sql) == true){
    echo "<div align='center' > <h1> Account created </h1>
    <button><a href='index.php'>HOMEPAGE</a></button> </div>";
}else {
    echo "<h1> ERROR </h1>";
}

$conn->close();


?>
