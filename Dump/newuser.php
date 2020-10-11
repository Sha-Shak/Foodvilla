<?php

include 'config/config.php';
?>

<?php
if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $address=$_POST['address'];

   
    $sql="INSERT INTO user (firstname, lastname, email, password, address)
	VALUES ('".$fname."', '".$lname."', '".$email."', '".$pass."', '".$address."')";
	
	$result = mysqli_query($conn,$sql);

	echo "<script>
	<alert>Register Successfull</alert>
	</script>";
	 header("Location: home.php");

}

?>

