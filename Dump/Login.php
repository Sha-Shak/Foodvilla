<?php
    // include 'includes/header2.php'
?>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retaildb";

// Create connection
$conn = mysqli_connect("localhost","root","","retaildb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// echo "Connected successfully";
?>

<?php 
   if(isset($_SESSION["username"])){
      header("Location: home.php");
      exit(); 

   }

   ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
  <div class="py-5 bg-gradient" style="background-image: url('Chicken-Burger.jpg');background-position:left center;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>FoodVilla</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="card text-white p-5 bg-primary">
            <div class="card-body bg-">
              <h1 class="mb-4">Login form</h1>

              <form action="Login.php" method="post">


                <div class="form-group"> <label>Email address</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email"> </div>
                <div class="form-group"> <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password"> </div>
                <button type="submit" class="btn btn-secondary" name="login">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>




<?php
  if(isset($_POST['login'])){
    $userEmail=$_POST['email'];
    $userPass=$_POST['password'];

    
    $sql = "SELECT * FROM user where email='".$userEmail."' and password='".$userPass."'";
    // $result = $conn->query($sql);

    $result = mysqli_query($conn,$sql);

  
    $rows = mysqli_num_rows($result);
      echo $rows;

      if($rows==1){

      $_SESSION["username"]=$userEmail;

      header("Location: home.php");
      exit(); 

      
    }


  }