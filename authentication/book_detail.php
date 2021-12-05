<!-- making connection with database for books list  -->
<html>
<link rel="stylesheet" href="../style.css">
		 
     <link rel="stylesheet" href="../css.css">
     <script src="../js.js"></script>
     <title>
         LIBRARY
     </title>
         <body style="background-image:url(../cc.jpg);
         background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;">
              <nav class="navbar navbar-expand-lg navbar-dark ">
             <div class="container-fluid">
                 <a class="navbar-brand" style="margin-top: 10px; color:white;" ><b><h2>THE BRITISH LIBRARY</a></h2></b>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                 <div class="navbar-nav">
                     <a class="nav-link" style="color:white; margin-left:20px" href="../index.php" ><h6>Home</a></h6>
                     <a class="nav-link" style="color:white;" href="../contact.php"><h6>Contact us</a></h6>
             <a class="nav-link" style="color:white;" href="../about.php"><h6>About Us</a></h6>
                 </div>
                 </div>
             </div>
             </nav>
<head>

<style>
table, th, td {
    border: 1px solid black;
}

</style>
</head>
<?php

include_once '../common_files/connect.php';



$sql = "SELECT * FROM `book-detail`";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th>
    <th>Book isbn</th>
    <th>Book Title</th>
    <th>Book Author</th>
    <th>Book Category</th>
    <th>Total Books</th>
    <th>Available</th>
    <th>Borrow</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) { 
    echo "<tr><td>".$row["Id"]."</td>
    <td>".$row["Book_isbn"]."</td>
    <td>".$row["Book_title"]."</td>
    <td>".$row["Book_author"]."</td>
    <td>".$row["Book_category"]."</td>
    <td>".$row["Total_books"]."</td>
    <td>".$row["Available"]."</td>
    <td>
    <form method='POST' action='../borrow.php'>
    <input type='hidden' name='Book_id' value=".$row["Id"].">
    <input type='submit' value='borrow'/>
    </form>";
    }
    echo "</table>";
} else {
  echo "No Books available at this movement.";
}
$conn->close();
?>
</body>
</html>