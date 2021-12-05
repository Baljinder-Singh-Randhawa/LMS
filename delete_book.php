<?php
session_start();
// connection called
include_once 'common_files/connect.php';

$user_name = $_SESSION['user_name'];
$Id = stripslashes($_POST['id']);

$sql = "DELETE FROM `book-detail` WHERE id=$Id";

// echo $sql;

$execute_query = mysqli_query($conn, $sql) or die('Error');
echo "<div align='center' style='margin-top: 100px;'><h1><b>BOOK REMOVED SUCCESSFULLY</b></h1>
<button><a href='librarian.php'>GO BACK</a></button></div>";



?>