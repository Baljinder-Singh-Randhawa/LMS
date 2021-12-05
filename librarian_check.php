<?php

session_start();
include_once 'common_files/connect.php';

$user_name = stripslashes($_POST['username']);
$password = md5(stripslashes($_POST['password']));
$type = stripslashes($_POST['type']);

//Md5 password

$sec_password = md5($password);

$sql = "SELECT * FROM login_info WHERE user_name = '$user_name' AND password = '$password' AND type = '$type'";

//echo $query_login_check

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $_SESSION['user_name'] = $user_name;
    $_SESSION['type'] = $type;
    header("Location: librarian.php");
    exit;
    
}else {
    echo "DIDN'T FIND USER!<br>";
    echo "Please Retry. <br><br>";
    // echo '<a href= "../login.php">RETRY</a>';
}

?>