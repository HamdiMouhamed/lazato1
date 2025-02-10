<?php
session_start();
if (isset($_SESSION["restaurant_id"])) {
    unset($_SESSION["restaurant_id"]);
    header("Location: index1.php"); 

}
?>
