<?php
$host = "localhost";
$db = "db";
$use = "root";
$pass = "";

try{
    $pdo = new PDO ("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "Belina";

    $password = password_hash("mypassword", PASSWORD_DEAFULT);

    $sql = "INSERT INTO users(username, password) VALUES('$Uusername', '$password')";

    $pdo -> exec($sql);

    echo "New recors created sucessfuly";
}catch(PDOEcecption $e){
    echo $e->getMessage();
}

?>