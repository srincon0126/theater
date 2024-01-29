<?php 
// echo $_SERVER['HTTP_HOST']; 
if($_SERVER['HTTP_HOST'] == 'sallyboy0126.pairserver.com'){
    $dbserver ="db176.pair.com";
    $dbname = 'sallyboy0126_capstone';
    $dbuser = '1044777';
    $dbpassword = 'i3Vh94LadEZ929XZ';
 } else {
    $dbserver = "localhost";
    $dbname ='capstone';
    $dbuser = 'root';
    $dbpassword = 'root';
 }

// echo $dbname, $dbuser, $dbpassword;

$db = new PDO(
    "mysql:host=$dbserver;dbname=$dbname",
    $dbuser,
    $dbpassword,
);


?>