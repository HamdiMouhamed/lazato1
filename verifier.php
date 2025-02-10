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
    if (empty($_POST["email"]) || empty($_POST["pass"])) {
        $error = "incompliteted filds !!";
    } else {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $stmt = $conn->prepare("SELECT * FROM `account` WHERE `email`=:em");
        $stmt->bindparam(":em", $email);
        $stmt->execute();
        $user = $stmt->fetchObject();
        if ($user) {
            try {
                $test = $user->password;
                $hash = password_hash($test, PASSWORD_DEFAULT);
                if (password_verify($pass, $test)) {
                    header("Location:add-res.php");
                } else {
                    $error = "invalid password !!! ";
                }
                $success = $stmt->rowCount();
            } catch (PDOException $e) {
                $error = "something went wrong try !! please try later";
            }
        } else {
            $error = "invalid email !!!";
        }
    }
}
?>
