<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

try{
    $connect = new PDO("mysql:host=$server;dbname=$dbname",  $username, $password);

}
catch(PDOException $e){
    echo "something went wrong!!";
}


?>
