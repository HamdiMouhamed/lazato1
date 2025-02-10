<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "wissem";
$conn = "";
try {
    $conn = new PDO('mysql:host=' . $db_server . ';dbname=' . $db_name, $db_user, $db_pass);
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (isset($_POST["submit"])) {
    if (empty($_POST["user"])||empty($_POST["email"])||empty($_POST["pass"])) {
        $error = 'incompleted fields !!!';
    } else {
        $user = $_POST["user"];
        $email = $_POST["email"];
        $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
        $stmt = $conn->prepare("SELECT * FROM `account` WHERE `email`=:em");
        $stmt->bindParam(':em',$email);
        $stmt->execute();
        $user = $stmt->fetchObject();
        if($user){
            $error = 'Email already exist !!!';
        }else{
            try {
                $stmt = $conn->prepare("INSERT INTO `account`(`user`,`email`,`password`,`date`) VALUES (?,?,?,now())");
                $stmt->execute([$user, $email, $pass]);
                $success = $stmt->rowCount() > 0;
            } catch (PDOException $e) {
                $error = 'Something went wrong !! please try later';
            }
        }
    }
}
