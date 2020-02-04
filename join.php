<?php
    include ("connect.php");
    $success_message = '';
    $failed_message = '';

    $username='';
    $email='';
    $gender='';
    $dob='';
    $city='';
    $password='';
    $repass='';
    $username_error='';
    $email_error='';
    $password_err='';
    $field_err='';  









    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

</head>
<body>
<h1>USER REGISTRATION</h1>
<?php
if($failed_message){
?>
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Failed!</strong> <?php echo $failed_message; ?>
</div>
<?php    
}

?>
<?php
if($success_message){
?>
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> <?php echo $success_message; ?>
</div>
<?php    
}

?>
<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div class="form-group">
    
    <div class="col-sm-10">
    <label class="control-label col-sm-2" for="user" >Username:</label>
      <input type="text" class="form-control" id="user" name="username">
    </div>
  
    
    
    <div class="col-sm-10">
    <label class="control-label col-sm-2" for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="mail">
    </div>
  
  
  
    <div class="col-sm-10"> 
    <label class="control-label col-sm-2" for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass">
    </div>



    <div class="col-sm-10"> 
    <label class="control-label col-sm-2" for="cpass">Confirm Password:</label>
      <input type="password" class="form-control" id="cpass" name="repass" >
    </div>
  
   
<div>
  <select class="form-control" id="sel1" name="city"> <label for="sel1">Select list:</label>
  <option value="karachi"  >karachi</option>
         <option value="lahore"  >lahore</option>
         <option value="islamabad"  >islamabad</option>
         <option value="rawalpindi"  >rawalpindi</option>
  </select>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="signup">Submit</button>
    </div>
  </div>
    </form>
</body>
</html>