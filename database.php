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
session_start();
// this is page-login.php information
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
                    $stmt = $conn->prepare("SELECT * FROM `account` WHERE `email`=:em ");
                    $stmt->bindParam(":em", $email);
                    $stmt->execute();
                    $user_user = $stmt->fetchObject();
                    // $_SESSION["user_name"] = $user_user->user;
                    // $_SESSION["email"] = $email;
                    $_SESSION["id_acc"] = $user_user->id;
                    header("Location:index1.php");
                } else {
                    $error = "invalid password !!!";
                }
                $success = $stmt->rowCount();
            } catch (PDOException $e) {
                // $error = "something went wrong try !! please try later";
                $error = $e->getMessage();
            }
        } else {
            $error = "invalid email !!!";
        }
    }
}
// end pf page-login.php information




// this page-register.php information
if (isset($_POST["register_submit"])) {
    if (empty($_POST["user"]) || empty($_POST["register_email"]) || empty($_POST["register_pass"])) {
        $error = 'incompleted fields !!!';
    } else {
        $user_name = $_POST["user"];
        $register_email = $_POST["register_email"];
        $register_pass = password_hash($_POST['register_pass'], PASSWORD_DEFAULT);
        $stmt = $conn->prepare("SELECT * FROM `account` WHERE `email`=:em");
        $stmt->bindParam(':em', $register_email);
        $stmt->execute();
        $user = $stmt->fetchObject();
        if ($user) {
            $error = 'register_email already exist !!!';
        } else {
            try {
                $_SESSION["user_name"] = $user_name;
                $_SESSION["email"] = $register_email;
                $stmt = $conn->prepare("INSERT INTO `account`(`user`,`email`,`password`,`date`) VALUES (?,?,?,now())");
                $stmt->execute([$user_name, $register_email, $register_pass]);
                $stmt = $conn->prepare("SELECT `id` FROM `account` WHERE `email`=:em");
                $stmt->bindParam(":em", $register_email);
                $stmt->execute();
                $test = $stmt->fetchObject();
                $_SESSION["id_acc"] = $test->id;
                header("Location:index1.php");
            } catch (PDOException $e) {
                $error = 'Something went wrong !! please try later';
            }
        }
    }
}
// end of page-register.php information





// this is page-forgot-password.php information
if (isset($_POST["forgoten-account-submit"])) {
    if (empty($_POST["forgoten-account-email"])) {
        $error = "Email is Messing !!! please enter your email";
    } else {
        $forgoten_account_email = $_POST["forgoten-account-email"];
        $stmt = $conn->prepare("SELECT * FROM `account` WHERE `email`=:em");
        $stmt->bindParam(":em", $forgoten_account_email);
        $stmt->execute();
        $user = $stmt->fetchObject();
        if ($user) {
            $_SESSION["forgoten_account_email"] = $forgoten_account_email;
            header("Location:new_password.php");
            exit();
        } else {
            $error = "Inccorect Email !! Please try again";
        }
    }
}
// end of page-forgot-password.php information





// this is new_password.php information
if (isset($_POST["new-pass-submit"])) {
    if (empty($_POST["new-pass"])) {
        $error = "Password is Messing !!! Please Try again";
    } else {
        try {
            $new_pass = $_POST["new-pass"];
            $new_hash = password_hash($new_pass, PASSWORD_DEFAULT);
            // this not changing the password something went wrong
            $stmt = $conn->prepare("UPDATE  `account` SET password = :new_hash  WHERE email = :em");
            $stmt->bindParam(":em", $_SESSION["forgoten_account_email"], PDO::PARAM_STR);
            $stmt->bindParam(":new_hash", $new_hash, PDO::PARAM_STR);
            $stmt->execute();
            $stmt=$conn->prepare("SELECT `id` FROM `account` WHERE `email`=:em");
            $stmt->bindParam(":em",$_SESSION["forgoten_account_email"]);
            $stmt->execute();
            $getaccount_information=$stmt->fetchObject();
            if($getaccount_information){
                $_SESSION["id_acc"]=$getaccount_information->id ;
                unset($_SESSION["forgoten_account_email"]);
                header("Location:index1.php");

            }

        } catch (PDOException $error) {
            $error->getMessage();
        }
    }
}
// and of new_password.php information





// this add-res.php information 
if (isset($_POST["add_res_submit"])) {
    if (empty($_POST["name_of_res"]) || empty($_POST["location"]) || empty($_POST["tel"])) {
        $error = "incompliteted filds !!";
    } else {
        $name_of_res = $_POST["name_of_res"];
        $location = $_POST["location"];
        $tel = $_POST["tel"];
        $img_res_name = $_FILES["photo"]["name"];
        $img_res_type = $_FILES["photo"]["type"];
        $img_res_temp = $_FILES["photo"]["tmp_name"];
        $img_res_size = $_FILES["photo"]["size"];
        $stmt = $conn->prepare("SELECT * FROM `restaurant` WHERE `location`=:lo AND `name`=:em ");
        $stmt->bindparam(":lo", $location);
        $stmt->bindparam(":em", $name_of_res);
        $stmt->execute();
        $user = $stmt->fetchObject();
        if ($user) {
            $error = "the restaurent is exist";
        } else {
            $id_acc = $_SESSION["id_acc"];
            if(!empty($img_res_name) && !empty($img_res_type) && !empty($img_res_temp) && !empty($img_res_size)){
                $img_allowed_res = array('jpg', 'gif', 'jpeg', 'png');
                $img_exetension_res = strtolower(explode('.', $img_res_name)[1]);
                if($img_res_size < 300000){
                    if(in_array($img_exetension_res,$img_allowed_res)){
                        if(move_uploaded_file($_FILES["photo"]["tmp_name"], 'uploads/menus/ '. basename($_FILES["photo"]["name"]))){
                            $stmt = $conn->prepare("INSERT INTO `restaurant`(`id_acc`,`name`,`location`,`tel`,`date_cre`,`img`) VALUES(?,?,?,?,now(),?)");
                            $stmt->execute([$id_acc, $name_of_res, $location, $tel,$img_res_name]); //this is the line 181
                            $stmt = $conn->prepare("SELECT `id_res`FROM `restaurant` WHERE `id_acc`=:na");
                            $stmt->bindParam(":na", $id_acc);
                            $stmt->execute();
                            $id = $stmt->fetchObject();
                            if($id){
                                $restaurant_id=$id->id_res;
                                header("Location:configue-res.php?restaurant_id=$restaurant_id");
                            }
                        }
                }
                }
            }
        }
    }
}
// and of add-res.php information 


// this chonfigue-res.php

if (isset($_POST["food"])) {
    $mess = "+ Food";
} elseif (isset($_POST["menu"])) {
    $mess = "+ Menu";
} elseif (isset($_POST["categorie"])) {
    $mess = "+ Categorie";
} else {
    $mess = "+ Categorie";
}

// end of chonfigue-res.php




// this is add_categorie.php
if (isset($_POST["add_cat_modal_submit"])) {
    if (empty($_POST["name_of_categorie"])) {
        $error = "Categorie Name is missing !!";
    } else {
        try{
            $name_of_categorie = $_POST["name_of_categorie"];
        // $stmt = $conn->prepare("SELECT `id_res` FROM `restaurant` WHERE `name`=:ne");
        // $stmt->bindParam(":ne", $_SESSION["name_of_res"]);
        // $stmt->execute();
        // $result = $stmt->fetchObject();
        // $_SESSION["id_of_res"] = $result->id_res;
        $stmt = $conn->prepare("INSERT INTO `categorie` (`id_res`,`name`,`date_cre`) VALUES (?,?,now())");
        $stmt->execute([$_SESSION["restaurant_id"], $name_of_categorie]);
        $_SESSION['active_tab'] = 'home';
        header("Location:configue-res.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}





// add food modal
if (isset($_POST["add_food_modal_submit"])) {
    if(!empty($_POST["add_food"]) && !empty($_POST["price_of_food"]) && !empty($_POST["desc_of_food"])){
        $add_food = $_POST["add_food"];
        $name_categorie = $_POST["select_name_categorie"];
        $food_price=$_POST["price_of_food"];
        $desc_of_food=$_POST["desc_of_food"];
        $img_name = $_FILES["photo_of_food"]["name"];
        $img_type = $_FILES["photo_of_food"]["type"];
        $img_temp = $_FILES["photo_of_food"]["tmp_name"];
        $img_size = $_FILES["photo_of_food"]["size"];
        if(!empty($img_name) && !empty($img_type) && !empty($img_temp) && !empty($img_size)){
            $img_allowed = array('jpg', 'gif', 'jpeg', 'png');
            $img_exetension = strtolower(explode('.', $img_name)[1]);
            if($img_size < 300000){
              if(in_array($img_exetension,$img_allowed)){
                if(move_uploaded_file($_FILES["photo_of_food"]["tmp_name"], 'uploads/menus/ '. basename($_FILES["photo_of_food"]["name"]))){
                    $stmt = $conn->prepare("SELECT `id_cat` FROM `categorie` WHERE `name`=:ne AND `id_res`=:en" );
                    $stmt->bindParam(":ne", $name_categorie);
                    $stmt->bindParam(":en", $_SESSION["restaurant_id"]);
                    $stmt->execute();
                    $result = $stmt->fetchObject();
                    if($result){
                        $insert = $result->id_cat;
                        // $_SESSION["id_cat"] = $insert;
                        $stmt = $conn->prepare("INSERT INTO `food`(`id_cat`,`name`,`date_cre`,`id_res`,`prix`,`description`,`image`) VALUES (?,?,now(),?,?,?,?)");
                        $stmt->execute([$insert, $add_food,$_SESSION["restaurant_id"],$food_price,$desc_of_food,$img_name]);
                        $_SESSION['active_tab'] = 'profile';
                        header("Location:configue-res.php");
                    }
                }
              }  
            }
        }
        
        
    }
    
}
if (isset($_POST["edit_food_modal_submit"])) {
    if(!empty($_POST["edit_food"]) && !empty($_POST["edit_price_of_food"]) && !empty($_POST["edit_desc_of_food"])){
        $add_food = $_POST["edit_food"];
        $name_categorie = $_POST["select_name_categorie_change"];
        $food_price=$_POST["edit_price_of_food"];
        $desc_of_food=$_POST["edit_desc_of_food"];
        $img_name = $_FILES["edit_photo_of_food"]["name"];
        $img_type = $_FILES["edit_photo_of_food"]["type"];
        $img_temp = $_FILES["edit_photo_of_food"]["tmp_name"];
        $img_size = $_FILES["edit_photo_of_food"]["size"];
        if(!empty($img_name) && !empty($img_type) && !empty($img_temp) && !empty($img_size)){
            $img_allowed = array('jpg', 'gif', 'jpeg', 'png');
            $img_exetension = strtolower(explode('.', $img_name)[1]);
            if($img_size < 300000){
              if(in_array($img_exetension,$img_allowed)){
                if(move_uploaded_file($_FILES["edit_photo_of_food"]["tmp_name"], 'uploads/menus/ '. basename($_FILES["edit_photo_of_food"]["name"]))){
                    $id_food=$_POST["edit_food_id"];
                    $stmt = $conn->prepare("SELECT `id_cat` FROM `categorie` WHERE `name`=:ne AND `id_res`=:en" );
                    $stmt->bindParam(":ne", $name_categorie);
                    $stmt->bindParam(":en", $_SESSION["restaurant_id"]);
                    $stmt->execute();
                    $result = $stmt->fetchObject();
                    if($result){
                        $insert = $result->id_cat;
                        $stmt=$conn->prepare("UPDATE `food` SET `id_cat`=:cat, 
                                                                `name`=:naam,
                                                                `id_res`=:restaurant,
                                                                `prix`=:prix,
                                                                `description`=:descri,
                                                                `image`=:img,
                                                                `date_cre`=:nonee  WHERE `id_fo`=:idfood ");
                        $now = date("Y-m-d H:i:s"); 
                        $stmt->bindParam(":cat",$insert);
                        $stmt->bindParam(":naam",$add_food);
                        $stmt->bindParam(":restaurant",$_SESSION["restaurant_id"]);
                        $stmt->bindParam(":prix",$food_price);
                        $stmt->bindParam(":descri",$desc_of_food);
                        $stmt->bindParam(":img",$img_name);
                        $stmt->bindParam(":idfood",$id_food);
                        $stmt->bindParam(":nonee",$now);
                        $stmt->execute();
                        header("Location:configue-res.php");
                    }
                }
              }  
            }
        }
        
        
    }
    
}



// add menu modal information
if (isset($_POST["add_menu_modal_submit"])) {
    
    $name_of_menu = $_POST["name_of_menu"];
    $desc_of_menu = $_POST["desc_of_menu"];
    $price_of_menu = $_POST["price_of_menu"];
    if (empty($name_of_menu) || empty($desc_of_menu) || empty($price_of_menu)) {
        $errorr = "Something is messing !!!";
    } else {
        if (empty($img_name) || empty($img_type) || empty($img_temp) || empty($img_size)) {
            $errorr = "NO IMG SELECTED !!";
            // $stmt=$conn->prepare("INSERT INTO `menu`(`id_res`,`name`,`date_cre`,`description`) VALUES(?,?,now(),?)");
            // $stmt->execute([$_SESSION["id_of_res"],$name_of_menu,$desc_of_menu]);
            // header("Location:configue-res.php");
        } else {

            

            if (!in_array($img_exetension, $img_allowed)) {
                $errorr = 'file is not valide';
            } else {
                if ($img_size > 150000) {
                    $errorr = 'The img is to large ';
                } else {
                    $errorr = "you did good";
                    if (move_uploaded_file($_FILES["photo_of_menu"]["tmp_name"], 'uploads/menus/ '. basename($_FILES["photo_of_menu"]["name"]))) {
                        $id_res_take = $_SESSION["id_of_res"];
                        $stmt = $conn->prepare("INSERT INTO `menu`(`id_res`,`name`,`date_cre`,`img`,`description`,`price`) VALUES(?,?,now(),?,?,?)");
                        $stmt->execute([$_SESSION["id_of_res"], $name_of_menu, $img_name, $desc_of_menu,$price_of_menu]);
                        header("Location:configue-res.php");
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
        }
    }
}



// this is change email information    //there is error in the email verification 
if(isset($_POST["changeEmailSubmit"])){
    if(empty($_POST["exsistingEmail"])){
        $error = "Your Exsisting Email is missing ";
    }elseif(empty($_POST["newEmail"])){
        $error = "Your New Email is missing ";
    }elseif(empty($_POST["changeEmailPassword"])){
        $error = "Your Password is missing ";
    }else{
        $exsisting_email= $_POST["exsistingEmail"];
        $new_email = $_POST["newEmail"];
        $password= $_POST["changeEmailPassword"];
        $stmt=$conn->prepare("SELECT * FROM `account` WHERE `id`=:iddd");
        $stmt->bindParam(":iddd",$_SESSION["id_acc"]);
        $stmt->execute();
        $testtest=$stmt->fetchAll();
        if($testtest){
            foreach($testtest as $green){  
                $hash=$green["password"];
                $pass=password_hash($hash,PASSWORD_DEFAULT);
                if($exsisting_email == $green["email"] ){
                    if(password_verify($password,$hash)){
                        $stmt=$conn->prepare("SELECT `email` FROM `account` WHERE `email`=:emmm");
                        $stmt->bindParam(":emmm",$new_email);
                        $look=$stmt->fetchObject();
                        if($look){
                            $error = "The New Email is Exsist";
                        }else{
                            $stmt=$conn->prepare("UPDATE `account`SET `email`=:emmmm WHERE `id`=:idddd ");
                            $stmt->bindParam(":emmmm",$new_email);
                            $stmt->bindParam(":idddd",$_SESSION["id_acc"]);
                            $stmt->execute();
                            header("Location:index1.php");
                        }
                    }else{
                        $error = "Wrong Password !!!";
                    }
                }else{
                    $error = "Wrong Email !!!";
                }
            }
        }
    }
}

// end of change email


// change password inside the account 

if(isset($_POST["changePasswordSubmit"])){
    if(empty($_POST["existingpassword"])){
        $error = "The Password is missing !!! ";
    }elseif(empty($_POST["newPassword"])){
        $error= "The New Password is missing !!" ;
    }elseif (empty($_POST["newPassword2"])){
        $error = "The New Password is missing !!!!";
    }else{
        $exesistingPassword=$_POST["existingpassword"];
        $newPassword1=$_POST["newPassword"];
        $newPassword2=$_POST["newPassword2"];
        $stmt=$conn->prepare("SELECT `password` FROM `account` WHERE `id`=:changee");
        $stmt->bindParam(":changee",$_SESSION["id_acc"]);
        $stmt->execute();
        $getPass=$stmt->fetchObject();
        $exest_pass=$getPass->password;
        if(password_verify($exesistingPassword,$exest_pass) ){
            if($newPassword1 == $newPassword2){
                $hash=password_hash($newPassword1,PASSWORD_DEFAULT);
                $stmt=$conn->prepare("UPDATE `account` SET `password`=:passs");
                $stmt->bindParam(":passs",$hash);
                $stmt->execute();
                header("Location:index1.php");
            }else{
                $error = "The 2 new password is not the same";
            }
        }else{
            $error = "Wrong Password" ; 
        }
    }
}

// end of change passwrod inside the account



if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    header("Location:page-login.php");
}
