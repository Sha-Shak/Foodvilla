<?php
include 'lib/session.php';
Session::init();
include 'lib/Database.php';
include 'helper/Format.php';

spl_autoload_register(function($class){
   include_once "classes/PREV/".$class.".php";
});
$db = new Database();
$fm = new Format();
$pd = new Product();
$ct = new Cart();
$cat = new Category();
?>

