<?php
$host = 'localhost';
$dbname = 'user_menagment';
$username = 'root';
$password = '';

try{
    $pdo =new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
     $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if(empty($user)|| empty($email) ||empty($pass)){
        echo "All fields are required";
        exit;
    }

    $hased_password = password_hash($pass, PASSWORD_BCRYPT);

    $sql ="INSERT INTO users(username, emial, password)VALUES(:username, :email, :password)";
    $stmt = $pdo-prepare($sql);

    $stmt->bindPARAM('username', $user, PDO::PARAM_STR);
    $stmt->bindPARAM('email', $email, PDO::PARAM_STR);
    $stmt->bindPARAM('password', $hashed_password, PDO::PARAM_STR);

    if($stmt->execute()){
        echo "Signuop succesful!!!";

    }else{
        echo"soemthing went wrong try again!";
    }
    }
}catch(PDOEception $e){
    //Handle database connection errors
    echo "Error: ". $e->getMessage();
}
?>