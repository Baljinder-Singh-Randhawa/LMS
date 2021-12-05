<!-- making connection with database for books list  -->
<html>
<link rel="stylesheet" href="style.css">
		 
     <link rel="stylesheet" href="css.css">
     <script src="js.js"></script>
     <title>
         LIBRARY
     </title>
         <body style="background-image:url(cc.jpg);
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
                     <a class="nav-link" style="color:white; margin-left:20px" href="index.php" ><h6>Home</a></h6>
                     <a class="nav-link" style="color:white;" href="contact.php"><h6>Contact us</a></h6>
                     <a class="nav-link" style="color:white;" href="about.php"><h6>About Us</a></h6>
                     <a class="nav-link" style="color:white;" href="librarian_create_acc.php"><h6>Create Account</a></h6>
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

include_once 'common_files/connect.php';


$sql = "SELECT * FROM `login_info`";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th>
    <th>User Name</th>
    <th>Contact</th>
    <th>E-mail</th>
    <th>Type</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) { 
    echo "<tr><td>".$row["id"]."</td>
    <td>".$row["user_name"]."</td>
    <td>".$row["contact"]."</td>
    <td>".$row["e-mail"]."</td>
    <td>".$row["type"]."</td></tr>";
    }
    echo "</table>";
    echo "<br><div style='margin-left: 20px;'><b><h6><a href='librarian.php' style='color: sky blue;'>Back</a></h6></b></div>";
} else {
  echo "No Books available at this movement.";
}

$conn->close();
?>

</html>