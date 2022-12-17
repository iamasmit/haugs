<?php

include 'config.php';

session_start();
#for login

if(isset($_POST['submit'])){

   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');


   if(mysqli_num_rows($select_users) > 0){
      
      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:dashboard.php'); //location for home page

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>
<!-- <?php
include 'heade.php'
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <style>
      /* @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');
*{
 
 
 .form-container form{
    padding:2rem;
    border-radius: .5rem;
    border:var(--border);
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    width: 50rem; 
    text-align: center;
 }
 
 .form-container form h3{
    font-size: 2.5rem;
    text-transform: uppercase;
    color:var(--black);
    margin-bottom: 1rem;
 }
 
 .form-container form .box{
    width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.8rem;
    color:var(--black);
    border:var(--border);
    background-color: var(--light-bg);
    margin:1rem 0;
    border-radius: .5rem;
 }
 
 .form-container form p{
    margin-top: 1.5rem;
    font-size: 2rem;
    color:var(--light-color);
 }
 
 .form-container form p a{
    color:var(--pink);
 }
 
 .form-container form p a:hover{
    text-decoration: underline;
 }

 .btn {
    display: inline-block;
    background: #19ee49;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: 0.5s;
    font-size: 1.5rem;
} */
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
  color: white;
}
button a {
    text-decoration: none;
    color:white;

 
}

button:hover {
  opacity: 0.8;
  background-color: #f44336;
}

.cancelbtn:hover {
width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius:%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

   </style>

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<section class="form-container">

   <form action="" method="post">
    <!--  -->
   <div class="imgcontainer">
    <img src="logo.png" alt="Avatar" class="avatar">
  </div>
  <!--  -->
  <div class="container">
  <h3>Login</h3>
  <input type="email" name="email" class="box" placeholder="enter your email" required>
      <input type="password" name="pass" class="box" placeholder="enter your password" required>
      <input type="submit" class="btn" name="submit" value="login now">
      <button><a href="register.php">Register </a></button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

   </form>

</section>

</body>
</html>