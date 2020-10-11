<?php
    include 'config/config.php';
   
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> </head>

<body>
  <div class="py-5 text-center" style="background-image: url(&quot;cover.jpg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1 mb-4 lead">FoodVilla</h1>
          <p class="lead mb-5">The best Online Food retail Shop</p>

        <?php  
          if(!isset($_SESSION["username"])){
          echo '<a href="Login.php" class="btn btn-lg mx-1 btn-primary">Login</a>
          <a href="Register.php" class="btn btn-lg btn-success mx-1">Register</a>';

              }

              else{
                echo '<a href="logout.php" class="btn btn-lg mx-1 btn-primary">Logout</a>';
              }
          ?>


        </div>
      </div>
    </div>
  </div>
<div class="container" style="margin-top:4%; margin-bottom:4%;">
	<div class="row">
<?php
  $sql="Select * from product where productId=". $_GET['id'];


  $result = mysqli_query($conn, $sql);

  	

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
      	
      
      		


      	
    		<div class="col-md-3"><h2>Name</h2><?php echo $row["productname"];  ?></div>
    		<div class="col-md-3"><h2>Category</h2><?php echo $row["productcategory"];  ?></div>
    		<div class="col-md-3"><h2>Size</h2><?php echo $row["size"];  ?></div>
    		<div class="col-md-3"><h2>Price</h2><?php echo $row["price"];  ?></div>

      <?php   

      if(isset($_SESSION["username"])){?>
     
        
           <a class="btn btn-success pull-right" href="cartAction.php?action=addToCart&id= <?php echo $row['productId']; ?> ">Add to cart</a>
      
      
        
    
    <?php    
    }}

} 
 ?>
 </div>
</div>






  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">FoodVilla</h2>
          <p class="text-white">A Online food Shop Which delivers best quality food in your home</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">Mapsite</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-white">Home</a>
            <br>
            <a href="about.php" class="text-white">About us</a>
            <br>
            <br>
            <a href="contactus.php" class="text-white">Contact Us</a>
          </ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Contact</h2>
          <p>
            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+246 - 542 550 5462</a>
          </p>
          <p>
            <a href="mailto:nusherjk@gmail.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>foodvilla@gmail.com</a>
          </p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>365 Park Street, NY</a>
          </p>
        </div>
        
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>




</html>