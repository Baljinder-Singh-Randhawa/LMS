<?php

// connection called
include_once 'common_files/connect.php';

// $conn = mysqli_connect($host_name, $user_name, $password, $db_name);


$Book_isbn = stripslashes($_POST['isbn']);
$Book_title = stripslashes($_POST['title']);
$Book_author = stripslashes($_POST['author']);
$Book_category = stripslashes($_POST['category']);
$Total_books = stripslashes($_POST['total']);
$Available = stripslashes($_POST['available']);

// calling database

$sql = "INSERT INTO `library_management`.`book-detail` (`Book_isbn`, `Book_title`, `Book_author`, `Book_category`, `Total_books`,`Available`)
 VALUES ('$Book_isbn', '$Book_title', '$Book_author', '$Book_category', '$Total_books', '$Available');";

// inserting data to database
if($conn->query($sql) == true){
    echo "<div align='center' style='margin-top: 100px;'><h1><b>New Book Added</b></h1>
    <button><a href='addbook_entry.php'>GO BACK</a></button></div>";
}else {
    echo "ERROR";
}

$conn->close();


?>
