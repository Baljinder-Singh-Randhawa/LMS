<html>
<link rel="stylesheet" href="style.css">
		 
<link rel="stylesheet" href="css.css">
<script src="js.js"></script>
<title>
    LIBRARY
</title>
    <body style="background-image: URL(aa.jpg);
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
         <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-top: 10px; color:white;" ><b><h2>THE BRITISH LIBRARY</a></h2></b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" style="color:white; margin-left:20px" href="index.php" ><h6>Home</a></h6>
                <a class="nav-link" style="color:white;" href="contact.php"><h6>Contact us</a></h6>
                <a class="nav-link" style="color:white;" href="login.php"><h6>login</a></h6>   
            </div>
            </div>
        </div>
        </nav>
        
        <form action="addbook.php" method="POST">
  <div class="row mb-3" style="margin-top: 90px; margin-left: 20px; color:white;">
    <label for="inputEmail4" class="col-sm-2 col-form-label "><b>Book ISBN no</b></label>
    <div class="col-sm-6">
    <input type="text" class="form-control " name="isbn" id="inputEmail4" required></div>
  </div>
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputEmail4" class="col-sm-2 col-form-label "><b>Book Title</b></label>
    <div class="col-sm-6">
    <input type="text" class="form-control " name="title" id="inputEmail4" required></div>
  </div>

  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputEmail4" class="col-sm-2 col-form-label "><b>Book Author</b></label>
    <div class="col-sm-6">
    <input type="text" class="form-control " name="author" id="inputEmail4" required></div>
  </div>

  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputpassword" class="col-sm-2 col-form-label">Book Category</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" id="inputpassword" name="category" required></div>
  </div>
  
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputpassword" class="col-sm-2 col-form-label">Total Books</label>
    <div class="col-sm-6">
    <input type="int" class="form-control" id="inputpassword" name="total" required></div>
  </div>

  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputpassword" class="col-sm-2 col-form-label">Available</label>
    <div class="col-sm-6">
    <input type="int" class="form-control" id="inputpassword" name="available" required></div>
  </div>

    <div>
</div><br>
    <div class="row mb-6" color:white;>
  <button type="submit"  class="btn btn-primary col-sm-1" style="margin-left: 270px;">Submit</button></div>
  <div style='margin-left: 30px;'><b><h6><a href='librarian.php' style='color: sky blue;'>Back</a></h6></b>
</div>
  </form>
      </body>
        </html>