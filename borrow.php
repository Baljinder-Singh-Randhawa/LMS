<?php
session_start();
// connection called
include_once 'common_files/connect.php';

if(isset($_SESSION['user_name'])){
    $book_date=date("Y-m-d");

$user_name = $_SESSION['user_name'];
$Book_id = stripslashes($_POST['Book_id']);

$sql = "INSERT INTO `book_reservation`(`Book_id`, `User_name`, `Book_alloted_date`, `Book_return_date`)
 VALUES ('$Book_id', '$user_name', '$book_date',NULL)";

// echo $sql;

$execute_query = mysqli_query($conn, $sql) or die('Error');



$sql_query = "update `book-detail` set Available=(Available-1) WHERE Id='$Book_id'";

// echo $sql_query;

$execute_query = mysqli_query($conn, $sql_query) or die('Error');
echo "successfully borrowed";

}else{
    header('location: login.php');
}
?>

