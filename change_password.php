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
    if(isset($_POST["submit"])){
        // $email=isset($_POST["email"]) ? $_POST["email"] : '';
        if(empty($_POST["pass"])){
            $error= "Password is Messing !!! Please Try again";
        }
        else{
            try{
            $pass=$_POST["pass"];
            $email=$_POST["email"];
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $stmt=$conn->prepare("UPDATE  `account` SET `password`= :pass  WHERE `email`=:em");
            // $stmt->bindParam(":pass",$hash);
            // $stmt->bindParam(":email",$email);
            $stmt->execute();
            $error= "your password is changed";
            // header("Location:index.php");
        }catch(PDOException $error){
            $error ->getMessage();
        }    
        }
        $test=$stmt->rowCount();
    }
?>