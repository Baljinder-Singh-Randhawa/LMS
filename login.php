<!-- loginpage codes   
<html>
    <body>
    <style>
    .button {
        background-color: #e7e7e7;
    }
    .button2 {
        background-color: #e7e7e7;
    }
    .button3 {
        background-color: #4CAF50;
    }
    .button4 {
        background-color: #008CBA;
    }
    </style>


    <link rel="stylesheet" type="text/css" href="style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">


    <form action="authentication/login_check.php" method="post">
    <script src="js.js"></script>
    <script src="css.css"></script>

    <div class="bgimage3">

        <div align="left";>
            <h1>THE BRITISH LIBRARY</h1></div>
            <div align="left">
    <button class="button"><a href="index.php">HOME</a></button>
    <button class="button2"><a href="create_index.php">Create Account</a></button>
        </div>
<br><br>

            <div class="row mb-3" style="margin-left:5%; color:black;">
Username <input type="text" name="username" required>
            

<br><br> Password <input type="password" name="password" required>

<br><br> User Type <select name = "type" id="Type" required>
    <option value=""> </option>
    <option value="Librarian">Librarian</option>
    <option value="Student">Student</option>
    </select>
</form>
<br><br><a style="margin-right: 16px" href="/library_mangement/index.php">< BACK</a>
<button style="margin-left: 50px" class="button4">Log In</button>
    </div>
    </div>
    </body>
</html> -->
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
        <form action="authentication/login_check.php" method="POST">
  <div class="row mb-3" style="margin-top: 90px; margin-left: 20px; color:white;">
    <label for="inputEmail4" class="col-sm-2 col-form-label ">Username</label>
    <div class="col-sm-6">
    <input type="text" class="form-control " name="username" id="inputEmail4" required></div>
  </div>
 
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
    <input type="password" class="form-control" id="inputpassword" name="password" required ></div>
  </div>
  
  <div class="row mb-3" style="margin-left: 20px; color:white;">
    <label for="inputtype" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-6">
    <select id="inputtype" class="col-sm-2 col-form-select" name="type" required></div>
    <option></option>  
    <option>Teacher</option>
      <option>Student</option>
    </select>
    </div>
    <div>
<br><a href="create_index.php" >Create an account</a>
</div>
    <div class="row mb-6" style="margin-left: 195px;  color:white;">
  <button type="submit"  class="btn btn-primary col-sm-1" style="margin-left: 30px;">Log in</button>
</div>
  </form>
      </body>
        </html>