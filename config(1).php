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