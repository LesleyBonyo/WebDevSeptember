<?php 
  include 'connect.php';
  $success = 0;
  $unsuccess = 0;
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    // code...
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $mysql = "SELECT * FROM users WHERE email='$email'";
    $myresult = mysqli_query($connect,$mysql);
    if ($myresult) {
      $recordnumber = mysqli_num_rows($myresult);
      if($recordnumber>0){
        $unsuccess = 1;
      } else{
        $sql = "INSERT INTO users(email,password) VALUES('$email', '$password_hash')";
      $result = mysqli_query($connect, $sql);
      if ($result) {
          $success = 1;   
      } else{
        die(mysqli_error($connect));
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

    <title>SignUp</title>
  </head>
  <body>
    <h1>Sign Up</h1>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
<div>Already have an account? <a href="login.php">Login</a></div>

<?php 
  if ($success) {
    // code...
    echo "<div style='Color: green; text-align: center;'>Signup successful!!</div>";
  }

  if ($unsuccess) {
    // code...
     echo "<div style='Color: red; text-align: center;'>Email already exists!!</div>";
  }

?>
    

   

    
  </body>
</html>