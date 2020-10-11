<?php
//DB details
// $dbHost = 'localhost';
// $dbUsername = 'root';
// $dbPassword = '';
// $dbName = 'retaildb';

// //Create connection and select DB
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($db->connect_error) {
//     die("Unable to connect database: " . $db->connect_error);
// }
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