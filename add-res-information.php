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
    if (empty($_POST["name"]) || empty($_POST["location"]) || empty($_POST["tel"])) {
        $error = "incompliteted filds !!";
    } else {
        $name = $_POST["name"];
        $location = $_POST["location"];
        $tel = $_POST["tel"];
        $stmt = $conn->prepare("SELECT * FROM `restaurent` WHERE `location`=:lo OR `name`=:em OR `tel`=:tm ");
        $stmt->bindparam(":lo", $location);
        $stmt->bindparam(":em", $name);
        $stmt->bindparam(":tm", $tel);
        $stmt->execute();
        $user = $stmt->fetchObject();
        if ($user) {
            $error = "the restaurent is exist";
        } else {
            $stmt = $conn->prepare("INSERT INTO `restaurent`(`name`,`location`,`tel`,`date`) VALUES(?,?,?,now()) ");
            $stmt->execute([$name, $location, $tel]);
            header("Location:configue-res.php");
        }
    }
}
