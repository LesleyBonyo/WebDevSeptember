<?php
  include 'connect.php';
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    // code...
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      $recordnumber = mysqli_num_rows($result);
      if ($recordnumber>0) {
        // code...
        $row = mysqli_fetch_assoc($result);
        $id = $row['user_id'];
        $email = $row['email'];
        $password_hash = $row['password'];
        if(password_verify($password, $password_hash)){
          //sessions
          session_start();
          $_SESSION['email'] = $email;
          $_SESSION['id'] = $id;
          header("location:home.php");
        } else{
       echo "Not Successful";
    }
      }
    } 
  }





?> 


 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<div>Dont't have an account? <a href="signup.php">SignUp</a></div>


    

   

    
  </body>
</html>