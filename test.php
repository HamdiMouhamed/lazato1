<?php require 'database.php';
// echo "hello id_acc" . "  " . $_SESSION["id_acc"] . "<br>";
// echo "hello email" . "  " . $_SESSION["email"] . "<br>";
// echo "hello user_name" . "  " . $_SESSION["user_name"] . "<br>";
// echo "hello id_of_res" . "  " . $_SESSION["id_of_res"] . "<br>";
// echo "hello name_of_res" . "  " . $_SESSION["name_of_res"] . "<br>";
// echo "hello id_cat" . "  " . $_SESSION["id_cat"] . "<br>";
// echo "hello name_of_cat" . "  " . $_SESSION["name_of_cat"] . "<br>";
$content["lass"]= "lass" ;
if(isset($_POST[$content["lass"]])){
    echo "hello ". " ". $content["lass"];
}

?>
<form action="test.php" method="post">
    <input type="submit" value="enter" name="<?= $content["lass"] ?>">
</form>

