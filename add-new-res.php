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
function categorie()
{
    
            }
                    ?>