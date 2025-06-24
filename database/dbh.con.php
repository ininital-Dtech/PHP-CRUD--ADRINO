<?php

//database hostname
$db_host = 'localhost';
//database name
$db_name = 'coffeeshop';
//database username
$db_username = 'root';
//database password
$db_password = '';


//this is error handling 
try{
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

}catch(PDOException $e){
    echo "Failed to connect " .$e->getMessage();
    exit();

}
