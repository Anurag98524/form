<!DOCTYPE html>
<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="reg";
try{
	$con=mysqli_connect($servername,$username,$password,$dbname);
	echo("successful in connectio");
}
catch(MySQLi_sql_Exception $ex){
	echo("error connection");
}

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$fathername=$_POST['fathername'];
	$mothername=$_POST['mothername'];
	$phone=$_POST['cname'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];	
	$re_psw=$_POST['rpsw'];
	$category=$_POST['gender'];
	$dob=$_POST['dob'];
	$state=$_POST['state'];
	$distric=$_POST['distric'];
	$pin=$_POST['pin'];
	$address=$_POST['address'];
	$register_query="INSERT INTO `form`(`fname`, `lname`, `fathername`, `mothername`, `phone`, `email`, `psw`, `re-psw`, `category`, `dob`, `state`, `distric`, `pin`, `address`) VALUES ('$fname','$fname','$fathername','$mothername','$phone','$email','$psw','$re_psw','$category','$dob','$state','$distric','$pin','$address'";
	
	try{
		$register_result = mysqli_query($conn,
		$register_query);
		if($register_result){
			if(mysqli_affected_row($conn)>0){
				echo("registration sucess");
			}
			else{
				echo("error registration");
			}
		}
	}catch(Exception $ex){
		echo("error".$ex->getMessage());
	}
}

	?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>
Scholarship    
</title>
	<style>
		* {
  box-sizing: border-box;
}

/* Add padding to containers */


/* Full-width input fields */
input[type=text], input[type=password],input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
		
input[type=radio]{
  margin: 15px;
}		

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: skyblue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
	</style>
</head>
<body>
    <!--header-->
    <div class="container-fluid top_bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
        <a href="#" data-tggle="tooltip" data-placement="bottom" title="facebook" class="social_icon">
      <i class='fab fa-facebook' style='font-size:20px;color:#fff'></i> </a>
        <a href="#" data-tggle="tooltip" data-placement="bottom" title="Youtube"
           class="social_icon">
        <i class='fab fa-youtube' style='font-size:20px;color:#fff'></i> </a>
        <a href="#" data-tggle="tooltip" data-placement="bottom" title="linkedin"
           class="social_icon">
        <i class='fab fa-linkedin-in' style='font-size:20px;color:#fff'></i>     
        </a>
        <a href="#" data-tggle="tooltip" data-placement="bottom" title="Google-share"
           class="social_icon">
          <i class='fab fa-google-plus-g' style='font-size:20px;color:#fff'></i>      
        </a>
            </div>
          <div class="col-sm-9 text-right contact_info">
            <span class="glyphicon glyphicon-envelope"></span>all.scholarship4u@gmail.com
             <span class="glyphicon glyphicon-earphone"></span>
              <b>Sign-up, Login</b> 
            </div>
          </div><!--end of row-->
        </div><!--end of container-->
    </div><!--end of container fluid-->
    
    <!--logo and navigation-->
    <div class="container">
    <div class="row">
        <div class="col-sm-7">
        <img src="images/brand.png" class="img-responsive">
        </div><!--end of col5-->
        <div class="col-sm-5 my_menu ">
            
        <nav class="navbar navbar-default ">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target="#mynavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>    
            <span class="icon-bar"></span>    
            </button>
            </div>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="nav navbar-nav pul-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Notice</a></li>
            <li><a href="#">Scholarship</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
           </div><!--end of collapse-->               
  
        </nav>
            
        </div><!--end of col7-->
        </div><!--end of row-->
    </div><br>
    <!--end header-->
    
     <!--start Registration ---------------section ---------start-->
   <div class="reg">
	<h1 align="center"><b>Registration form</b></h1>
	     <p align="center">Please fill in this form to create an account.</p><hr>
	<form action="/action_page.php">
  <div class="container">
   <label for="email"><b>First Name</b></label>
    <input type="text" placeholder="First name" name="fname" required>
	  
	   <label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Last name" name="lname" required>
	  
	  <label for="father"><b>Father's Name</b></label>
    <input type="text" placeholder="Father name" name="fathername" required>
	  
	  <label for="mother"><b>Mother's Name</b></label>
    <input type="text" placeholder="Mother name" name="mothername" required>
	   
	  <label for="contact"><b>Contact Number</b></label>
    <input type="text" placeholder="Contact" name="cname" required> 
	   
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpsw" required>
	  
	  <label for="categary"><b>Category</b></label><br>
    <input type="radio"  name="gender" value="male">Male
	<input type="radio"  name="gender" value="Female">Female
	 <input type="radio"  name="gender" value="outher">Outher 
	  <br><br>
	  
	  <label for="psw-repeat"><b>Date Of Birth</b></label>
    <input type="text" placeholder="Date Of birth" name="dob" required>
	  
	  <label for="state"><b>State</b></label>
    <input type="text" placeholder="State" name="state" required>
	  
	  <label for="distric"><b>Distric</b></label>
    <input type="text" placeholder="Distric name" name="distric" required>
	  
	  <label for="pin"><b>Zip/Pin code</b></label>
    <input type="text" placeholder="pin code" name="pin" required>
	 
	 <label for="address"><b>Address</b></label>
    <input type="text" placeholder="address" name="address" required>
	  
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

	  <input type="submit" name="submit" value="Register">
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="sign-in.html">Sign in</a>.</p>
  </div>
</form>
	
	</div>
 
	
	 <!--end Registration ---------------section ---------start-->
   <br><br>
    
    <!--footer start-->
    <div class="container-fluid footer">
    <div class="container">
        <div class="col-sm-4">
        <img src="images/brand.png" alt="" class="footer-brand" ><br>
        <p>Connecting scholarship seekers with scholarship providers using a robust scholarship search engine.Profile all students and apply with a single click</p>
        <p><a href="#" class="btn btn-danger">Read more</a></p>    
        </div>
        <div class="col-sm-4"><br><br>
			<p>2018 © Copyrights all.scholarship4u</p>
        <h4>Develop-By:-IT-Student MIT Muzaffarpur</h4>
            
        </div>
        <div class="col-sm-4">
        <h3>Support</h3>
            <p><b>all.scholarship4u</b><br/>
                Mail: all.scholarship4u@gmail.com<br/>
                Contact: +91 9876543210<br/>
                (24*7)<br/>
                
            
            </p>
        </div>
        </div>
    </div>
    <!--footer end-->
    
    <script type="text/javascript" src="js/jquery-3.3.1.slim.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
    @(document).ready function(){
        @{*[data-toggle="tooltip"]*}.tooltip();
    };
    </script>
</body>    
</html>