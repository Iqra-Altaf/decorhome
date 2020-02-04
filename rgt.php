<?php
if(isset($_POST['Register'])) //checking if user pressed submit button
        
{ //check if form was submitted

  echo  $address = $_POST['add']; //get username
  echo  $date = $_POST['date']; 
  echo  $phone = $_POST['phn']; 
  echo  $email = $_POST['email']; 
  echo  $password = $_POST['email']; //get password
    
  }    









 
		
$conn=new mysqli('localhost', 'root', ''); //mysql connection with the database 
                                        //mysqli format = ('server','username','password','database')
mysqli_select_db("registration form");




$sql = "insert into users VALUES ('".$add."','".$date."','".$phn."','".$email."','".$pass."')"; //insert query
            
if(mysqli_query($conn, $sql))  // running query with outputs

    {
        $_SESSION['message'] = "Success! User created";  //if query run message
        
        
        
        header("location: frontend"); //heading back to front page
    }
    
else 
    {
        $_SESSION['message'] = "Something went wrong";  //if query fails message
        
        
        
        header("location: frontend"); //heading back to front page
    }


    







?>








