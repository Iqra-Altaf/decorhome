


<?php
    include ("connect.php");
    $username='';
    $email = '';
    $gender='';
    $dob='';
    $city='';
    $password = '';
    $conpass='';
    $_SESSION['failed'] = '';
    $_SESSION['success'] = '';
    $username_error='';
    $password_err='';
    $email_error='';
    $field_err='';
    $nameErr='';
    $insert='';
    
    if(isset($_POST['submit'])){
        if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['city']) && !empty($_POST['pass']) && !empty($_POST['cpass'])){
          $username=$_POST['username'];
          $email=$_POST['email'];
          $gender  = $_POST['gender'];
            $city = $_POST['city'];
                $password=$_POST['pass'];
            $conpass = $_POST['cpass'];
        }
        else{
          $field_err = "please fillout all the required fields";
        }
      
        if(!empty($username) && !empty($email) && !empty($gender)
        && !empty($city) && !empty($pass) && !empty($conpass)){
          $insert = mysqli_query($con,"INSERT INTO signupform (`username`,`email`,`gender`,`city`,`password`,`repass`)
          VALUES ('$username','$email','$gender','$city','$password','$conpass')");
          if($insert){                            
            $_SESSION['success'] = "Data inserted successfully";
          }
          else{
              $_SESSION['failed'] = "Failed to insert data";
          }
           
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><title>Balay Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<body>
<!-- bottom nav -->
<nav class="navbar navbar-expand-lg navbar-light justify-content-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto text-center">
						<li class="nav-item">
							<a class="nav-link  active" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="furniture.php">Furniture</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="signup.php">sign up</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="contact.php">contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="faqs.html">FAQs</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- //bottom nav -->
		</div>	
	              </nav>
		        </aside>
  
    <h1>USER REGISTRATION</h1>
    <?php
        if($_SESSION['success']){ 
    ?>
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> <?php
   echo $message_success ;
  

  ?>
</div>
<?php
        }
?>
  <?php
        if($_SESSION['failed']){ 
    ?>
    <div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Failed!</strong> <?php echo $message_failed ?>
</div>
<?php
        }
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>

<div class="form-group">
<label class="control-label col-sm-2" for="gender">Gender:</label>
<label class="radio-inline"><input type="radio" name="gender" checked>Male</label>
<label class="radio-inline"><input type="radio" name="gender">Female</label>
</div>



<div class="form-group">
  <label for="sel1">Select city:</label>
  <select class="form-control" name="city" id="sel1">
    <option>Karachi</option>
    <option>Lahore</option>
    <option>Multan</option>
    <option>Hydradad</option>
  </select>
</div> 

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="cpass" class="form-control" id="pwd" placeholder="Confirm  password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </div>
  </div>
</form>
            
<div>
            <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

</body>
</html>