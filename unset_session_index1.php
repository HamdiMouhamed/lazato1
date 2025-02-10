<?php
session_start();
if (isset($_SESSION["id_acc"])) {
    unset($_SESSION["id_acc"]);
    header("Location:page-login.php");
}
?>