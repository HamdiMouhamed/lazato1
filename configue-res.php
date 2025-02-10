<?php
require 'database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lezato : Restaurant Admin Template">
    <meta property="og:title" content="Lezato : Restaurant Admin Template">
    <meta property="og:description" content="Lezato : Restaurant Admin Template">
    <meta property="og:image" content="https://lezato.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Lezato : Restaurant Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <svg class="logo-abbr" width="56" height="56" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="rect-primary-rect" d="M0 20C0 8.95431 8.95431 0 20 0H36C47.0457 0 56 8.95431 56 20V36C56 47.0457 47.0457 56 36 56H20C8.95431 56 0 47.0457 0 36V20Z" fill="url(#paint0_linear)"></path>
                    <path d="M17 26.5L18 37.5L37.5 37.5L38.5 26.5C41.1667 26.6667 46.3 25.4 45.5 19C44.7 12.6 39.1667 12 36.5 12.5C35 11.3334 32.5 7.5 27 8.00004C22.9375 8.36939 20 10.6667 19 12.5C16.5 12.1667 11.3 12.9 10.5 18.5C9.69997 24.1 14.5 26.1667 17 26.5Z" stroke="white" stroke-width="2"></path>
                    <line x1="21.1837" y1="30.9641" x2="21.8108" y2="36.9312" stroke="white"></line>
                    <line x1="34.339" y1="31.0342" x2="33.6547" y2="37.0784" stroke="white"></line>
                    <line x1="27.5" y1="30" x2="27.5" y2="37" stroke="white"></line>
                    <path d="M18.5 50C15.2975 50.01 13.3333 46.8334 12 45C12 45 15.3959 48.5673 17.5 47.5C18.8153 46.8328 19 45.5 19.5 45L20.5 44C21.2139 43.2861 22.5 43 22.5 43C22.5 43 24.2179 42.7032 25.25 43C26.5262 43.367 28 45 28 45C28 45 29.2775 43.262 30.5 43C31.0728 42.8773 32 43 32 43C32 43 33.2379 43.2406 34 43.5C34.7039 43.7396 35.1149 43.8634 35.75 44.25C36.8115 44.8961 36.8667 45.9903 38 46.5C40.0304 47.4133 43.5 45 43.5 45C43.5 45 41.8662 48.0913 40 49C37.3434 50.2937 35 50 32.5 48C30 46 28.5 46.5 27.5 47C27.5 47 24.5 46.5 22 49C21.5 49.5 19.9215 49.9956 18.5 50Z" fill="white" stroke="white" stroke-width="0.1"></path>
                    <defs>
                        <lineargradient id="paint0_linear" x1="28" y1="0" x2="28" y2="56" gradientunits="userSpaceOnUse">
                        </lineargradient>
                    </defs>
                </svg>
                <svg class="brand-title" width="165" height="35" viewbox="0 0 165 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="svg-title-path" d="M10.912 34C8.832 34 7.008 33.536 5.44 32.608C3.872 31.68 2.656 30.448 1.792 28.912C0.928 27.376 0.496 25.68 0.496 23.824V0.399998H8.56V24.4C8.56 25.168 8.832 25.84 9.376 26.416C9.92 26.992 10.592 27.28 11.392 27.28H20.272V34H10.912ZM36.8511 34C34.0671 34 31.6191 33.488 29.5071 32.464C27.3951 31.408 25.7471 29.968 24.5631 28.144C23.4111 26.288 22.8351 24.144 22.8351 21.712C22.8351 19.024 23.3951 16.72 24.5151 14.8C25.6351 12.88 27.1231 11.408 28.9791 10.384C30.8671 9.328 32.9471 8.8 35.2191 8.8C37.8111 8.8 39.9711 9.344 41.6991 10.432C43.4591 11.52 44.7871 13.008 45.6831 14.896C46.5791 16.784 47.0271 18.912 47.0271 21.28C47.0271 21.728 46.9951 22.224 46.9311 22.768C46.8991 23.312 46.8511 23.744 46.7871 24.064H30.6591C30.9471 25.344 31.6191 26.304 32.6751 26.944C33.7311 27.552 35.0431 27.856 36.6111 27.856H44.1471V34H36.8511ZM30.4671 19.408H39.8271C39.7311 18.064 39.2991 16.96 38.5311 16.096C37.7631 15.232 36.6591 14.8 35.2191 14.8C33.7151 14.8 32.5791 15.28 31.8111 16.24C31.0751 17.168 30.6271 18.224 30.4671 19.408ZM56.6901 34C54.6741 34 53.0741 33.376 51.8901 32.128C50.7061 30.88 50.1141 29.408 50.1141 27.712C50.1141 26.592 50.3861 25.6 50.9301 24.736C51.5061 23.872 52.2741 23.136 53.2341 22.528L62.0181 16.672C62.3061 16.512 62.4501 16.32 62.4501 16.096C62.4501 15.712 62.2261 15.52 61.7781 15.52H51.2181L51.1701 9.376H64.3701C65.6181 9.376 66.7221 9.68 67.6821 10.288C68.6741 10.864 69.4421 11.632 69.9861 12.592C70.5301 13.552 70.8021 14.592 70.8021 15.712C70.8021 16.768 70.5301 17.76 69.9861 18.688C69.4741 19.584 68.7701 20.336 67.8741 20.944L59.0901 26.704C58.8341 26.896 58.7061 27.088 58.7061 27.28C58.7061 27.664 58.9301 27.856 59.3781 27.856H70.3221V34H56.6901ZM85.4845 34.576C83.2765 34.576 81.3405 34.016 79.6765 32.896C78.0445 31.776 76.7645 30.272 75.8365 28.384C74.9085 26.464 74.4445 24.304 74.4445 21.904C74.4445 19.408 74.9725 17.184 76.0285 15.232C77.1165 13.248 78.6525 11.68 80.6365 10.528C82.6525 9.376 85.0365 8.8 87.7885 8.8C90.5405 8.8 92.8765 9.376 94.7965 10.528C96.7485 11.68 98.2365 13.232 99.2605 15.184C100.317 17.136 100.845 19.328 100.845 21.76V34H93.5485V30.064H93.3565C92.6525 31.344 91.6765 32.416 90.4285 33.28C89.1805 34.144 87.5325 34.576 85.4845 34.576ZM87.6925 28.144C89.3885 28.144 90.7325 27.536 91.7245 26.32C92.7485 25.072 93.2605 23.52 93.2605 21.664C93.2605 19.904 92.7485 18.416 91.7245 17.2C90.7325 15.952 89.3885 15.328 87.6925 15.328C85.9325 15.328 84.5405 15.952 83.5165 17.2C82.5245 18.416 82.0285 19.904 82.0285 21.664C82.0285 23.488 82.5245 25.024 83.5165 26.272C84.5405 27.52 85.9325 28.144 87.6925 28.144Z" fill="#FD683E"></path>
                    <path d="M115.371 34C113.099 34 111.323 33.36 110.043 32.08C108.763 30.8 108.123 29.04 108.123 26.8V15.472H104.091V9.376H108.123V3.376H115.611V9.376H122.379V15.472H115.611V26.368C115.611 26.784 115.739 27.12 115.995 27.376C116.251 27.632 116.587 27.76 117.003 27.76H122.379V34H115.371ZM138.273 34.576C135.745 34.576 133.473 34.016 131.457 32.896C129.441 31.776 127.841 30.256 126.657 28.336C125.505 26.384 124.929 24.176 124.929 21.712C124.929 19.248 125.505 17.056 126.657 15.136C127.841 13.184 129.441 11.648 131.457 10.528C133.473 9.376 135.745 8.8 138.273 8.8C140.801 8.8 143.057 9.376 145.041 10.528C147.057 11.648 148.641 13.184 149.793 15.136C150.977 17.056 151.569 19.248 151.569 21.712C151.569 24.176 150.977 26.384 149.793 28.336C148.641 30.256 147.057 31.776 145.041 32.896C143.025 34.016 140.769 34.576 138.273 34.576ZM138.273 28.096C140.033 28.096 141.441 27.488 142.497 26.272C143.553 25.024 144.081 23.488 144.081 21.664C144.081 19.872 143.553 18.368 142.497 17.152C141.441 15.904 140.033 15.28 138.273 15.28C136.481 15.28 135.057 15.904 134.001 17.152C132.945 18.368 132.417 19.872 132.417 21.664C132.417 23.488 132.945 25.024 134.001 26.272C135.057 27.488 136.481 28.096 138.273 28.096ZM159.635 34.576C158.355 34.576 157.251 34.128 156.323 33.232C155.427 32.304 154.979 31.216 154.979 29.968C154.979 28.688 155.427 27.6 156.323 26.704C157.251 25.776 158.355 25.312 159.635 25.312C160.883 25.312 161.955 25.776 162.851 26.704C163.779 27.6 164.243 28.688 164.243 29.968C164.243 31.216 163.779 32.304 162.851 33.232C161.955 34.128 160.883 34.576 159.635 34.576Z" fill="#202020"></path>
                </svg>


            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="nav-item">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item recipe">
                                <a href="javascript:void(0);" class="btn btn-primary btn-rounded">Recipe Guide</a>
                            </li>

                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <?php 
									try{
										$stmt=$conn->prepare("SELECT `img_acc` FROM `account`WHERE `id`=:getimg");
										$stmt->bindParam(":getimg",$_SESSION["id_acc"]);
										$stmt->execute();
										$upload_img=$stmt->fetchObject();
									}catch(PDOException $e){
										echo $e->getMessage();
									}
                                    if (empty($upload_img->img_acc)){ ?>
										<img src="images/avatar/profile-1.jpg" width="56" alt="">
									<?php }else{ ?>
										<img src="uploads/menus/ <?= $upload_img->img_acc ?>" width="56" alt="">
									<?php }
									?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <form action="configue-res.php" method="post">
                                        <a href="app-profile.php" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span class="ms-2">Profile </span>
                                        </a>
                                        <a href="email-inbox.html" class="dropdown-item ai-icon">
                                            <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                            <span class="ms-2">Inbox </span>
                                        </a>
                                        <button name="logout" type="submit" class="dropdown-item ai-icon">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                            </svg>
                                            <span class="ms-2">Logout </span>
                                        </button>
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <form action="configue-res.php" method="post">
                    <ul class="metismenu" id="menu">
                        <li><a href="analytics.php" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-025-dashboard"></i>
                                <span class="nav-text">Analytics</span>
                            </a>
                        </li>
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-041-graph"></i>
                                <span class="nav-text">Reservation</span>
                            </a>
                        </li>
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-086-star"></i>
                                <span class="nav-text">Events</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="ui-accordion.html">Accordion</a></li>
                                <li><a href="ui-alert.html">Alert</a></li>
                                <li><a href="ui-badge.html">Badge</a></li>
                                <li><a href="ui-button.html">Button</a></li>
                                <li><a href="ui-modal.html">Modal</a></li>
                                <li><a href="ui-button-group.html">Button Group</a></li>
                                <li><a href="ui-list-group.html">List Group</a></li>
                                <li><a href="ui-card.html">Cards</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-dropdown.html">Dropdown</a></li>
                                <li><a href="ui-popover.html">Popover</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>

                            </ul>
                        </li>
                        <li><a  href="javascript:void()" style="height:70px;padding-top:15px;" class="ai-icon has-arrow" >
                                <i class="ti-plus"></i>
                                <span class="nav-text">Social media</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Snapchat</a></li>
                            </ul>
                        </li>
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-013-checkmark"></i>
                                <span class="nav-text">Security</span>
                            </a>
                        </li>
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-050-info"></i>
                                <span class="nav-text">Help & Support</span>
                            </a>
                        </li>
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-043-menu"></i>
                                <span class="nav-text">Settings </span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                                <li><a href="table-datatable-basic.html">Datatable</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-022-copy"></i>
                                <span class="nav-text">Logout</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="unset_session.php" >Logout from Restaurant</a></li>
                                <li><a href="page-login.php" name="logout">Logout from Account</a></li>
                                <div class="copyright">
                                    <p><strong>Lezato Restaurant Admin</strong> © 2021 All Rights Reserved</p>
                                    <p class="fs-12">Made with <span class="heart"></span> by wissem hamdi</p>
                                </div>
                            </ul>
                        </li>
                    </ul>
                    <div class="plus-box">
                        <a href="add-res.php"><img src="images/plus.png" alt=""></a>
                        <a href="add-res.php" style="text-decoration: none;">
                            <h5 class="fs-18 font-w700">Add Menus</h5>
                        </a>
                        <a href="configue-res.php" style="text-decoration: none;">
                            <p class="fs-14 font-w400">Manage your food <br>and beverages menus<i class="fas fa-arrow-right ms-3"></i></p>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <?php




        if (isset($_GET["restaurant_id"])) {
            $restaurant_id = $_GET["restaurant_id"];
            $_SESSION["restaurant_id"] = $_GET["restaurant_id"];
        }

        $stmt = $conn->prepare("SELECT * FROM `restaurant` WHERE `id_res`=:ir");
        $stmt->bindParam(":ir", $_SESSION["restaurant_id"]);
        $stmt->execute();
        $get_restaurant_informations = $stmt->fetchAll();
        foreach ($get_restaurant_informations as $get) {
            $name_restaurant = $get["name"];
            $location_res = $get["location"];
            $number_tel_res = $get["tel"];
        }
        $stmt = $conn->prepare("SELECT * FROM `categorie` WHERE `id_res`=:ir");
        $stmt->bindParam(":ir", $_SESSION["restaurant_id"]);
        $stmt->execute();
        $categorie_ress = $stmt->fetchAll();
        if ($categorie_ress) {
            foreach ($categorie_ress as $categorie) {
                $categorie_name_res = $categorie["name"];
                $categorie_date_cre_res = $categorie["date_cre"];
            }
        }

        ?>
        <?php
        try {
            if ($_SERVER["REQUEST_METHOD"] === "POST"  &&   isset($_POST["delate_categorie_id"])) {
                $idcategorie = $_POST["delate_categorie_id"];
                $stmt=$conn->prepare("SELECT * FROM `food` WHERE `id_cat`=:idcat");
                $stmt->bindParam(":idcat",$idcategorie);
                $stmt->execute();
                $testfoods=$stmt->fetchAll();
                if($testfoods){
                    foreach($testfoods as $foods){
                        $idfood_delete=$foods["id_fo"];
                        $stmt=$conn->prepare("DELETE FROM `food` WHERE `id_fo`=:delate");
                        $stmt->bindParam(":delate",$idfood_delete);
                        $stmt->execute();
                    }
                }
                $stmt = $conn->prepare("DELETE FROM `categorie` WHERE `id_cat`=:ir");
                $stmt->bindParam(":ir", $idcategorie);
                $stmt->execute();
                sleep(1);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        ?>
        <?php
        try {
            if ($_SERVER["REQUEST_METHOD"] === "POST"  &&  ( isset($_POST["delate_food_id"]))) {
                $idfood = $_POST["delate_food_id"];
                $stmt = $conn->prepare("DELETE FROM `food` WHERE `id_fo`=:fo");
                $stmt->bindParam(":fo", $idfood);
                $stmt->execute();
                sleep(1);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        try {
            if ($_SERVER["REQUEST_METHOD"] === "POST"  &&  ( isset($_POST["delate_food_from_menu"]))) {
                $idfood = $_POST["delate_food_from_menu"];
                $stmt = $conn->prepare("DELETE FROM `food` WHERE `id_fo`=:fo");
                $stmt->bindParam(":fo", $idfood);
                $stmt->execute();
                sleep(1);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        // try{
          if($_SERVER["REQUEST_METHOD"] === "POST"  &&  isset($_POST["edit_cat_modal_submit"]))  {
            $edit_cat=$_POST["edit_cat_id"];
            if(empty($_POST["edit_categorie"])) {
                die;
            }else{
                $newname_cat=$_POST["edit_categorie"];
                $stmt=$conn->prepare("UPDATE `categorie` SET `name`=:newnam WHERE `id_cat`=:edit");
                $stmt->bindParam(":edit",$edit_cat);
                $stmt->bindParam(":newnam",$newname_cat);
                $stmt->execute();
                // header("Location:add-res.php");
            }
          }
        // }catch(PDOException $e){
        //     echo $e->getMessage();
        // }
        ?>

        <div class="content-body">
            <div class="container-fluid">
                <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                    <h2 class="mb-3 me-auto" style="color: orange;">Your Restaurant Information</h2>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Restaurant</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">information</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <?php  
                                        try{
                                            $stmt=$conn->prepare("SELECT `img` FROM `restaurant`WHERE `id_res`=:phot");
                                            $stmt->bindParam(":phot",$_SESSION["restaurant_id"]);
                                            $stmt->execute();
                                            $imgimg=$stmt->fetchObject();
                                        }catch(PDOException $e){
                                            echo $e->getMessage();
                                        }
                                        
                                    ?>
                                    <div class="" style="width: 100%;display:flex;justify-content:center;"><img style="width: 70%;height:300px;border-radius:20px;" src="uploads/menus/<?= $imgimg->img  ?>" alt=""></div>
                                </div>
                                <div class="profile-info">
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0"><?php 
                                            $stmt=$conn->prepare("SELECT `user` FROM `account` WHERE `id`=:iddd");
											$stmt->bindParam(":iddd",$_SESSION["id_acc"]);
											$stmt->execute();
											$username=$stmt->fetchObject();
											echo $username->user;
                                            ?></h4>
                                            <p>UX / UI Designer</p>
                                        </div>
                                        <div class="profile-email px-2 pt-2">
                                            <h4 class="text-muted mb-0"><?php
                                            $stmt=$conn->prepare("SELECT `email` FROM `account` WHERE `id`=:iddd");
											$stmt->bindParam(":iddd",$_SESSION["id_acc"]);
											$stmt->execute();
											$username=$stmt->fetchObject();
											echo $username->email;
                                            ?></h4>
                                            <p>Email</p>
                                        </div>
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0" style="padding-left:65px "><?= $name_restaurant ?></h4>
                                            <p style="padding-left:65px ">Restaurant Name</p>
                                        </div>
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-muted mb-0" style="padding-left:65px "><?= $location_res ?></h4>
                                            <p style="padding-left:65px ">Location</p>
                                        </div>
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-muted mb-0" style="padding-left:65px "><?= $number_tel_res ?></h4>
                                            <p style="padding-left:65px ">Phone Number</p>
                                        </div>
                                        <div class="dropdown ms-auto">
                                            <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                    </g>
                                                </svg></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>profile photo</li>
                                                <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i>Restaurant Photo </li>
                                                <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Add to btn-close friends</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="configue-res.php" method="post">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab"  name="home" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="font-family: var(--font-family-title);height: 40px;width: 100%;color: var(--primary);">Category</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="profile-tab" name="profile" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="font-family: var(--font-family-title);height: 40px;width: 100%;color: var(--primary);">Food</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" name="contact" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" style="font-family: var(--font-family-title);height: 40px;width: 100%;color: var(--primary);">Menu</button>
                        </li>
                    </ul>
                </form>
                
                <div class="tab-content" id="myTabContent"> 
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black">
                            <thead>
                                <tr>
                                    <th style="font-family: var(--font-family-title); border-color: var(--primary);">Id</th>
                                    <th style="font-family: var(--font-family-title); border-color: var(--primary);">Name</th>
                                    <th style="font-family: var(--font-family-title); border-color: var(--primary);">date of creation</th>
                                    <th style="font-family: var(--font-family-title); border-color: var(--primary);">action</th>
                                    <th>
                                        <form action="configue-res.php" method="post">
                                            <a href="javascript:void(0);" name="add_submit" style="font-size:18px;font-family: var(--font-family-title);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">+ Categorie</a>
                                        </form>
                                    </th>
                                </tr>
                            </thead>
                            <div class="modal fade" id="sendMessageModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"> Add Categorie</h5>
                                            <button type="button" name="add_categorie" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="comment-form" action="configue-res.php" method="post">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="text-black font-w600 form-label">Name of Categorie </label>
                                                            <input type="text" class="form-control" name="name_of_categorie" placeholder="Name" required></input>
                                                        </div>
                                                        <input type="hidden" name="restaurant_id" value="<?php echo $restaurant_id; ?>">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3 mb-0">
                                                            <input type="submit" value="Add categorie" class="submit btn btn-primary" name="add_cat_modal_submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $restaurant_id = isset($_SESSION["restaurant_id"]) ? $_SESSION["restaurant_id"] : null;
                            ?>
                            <tbody>
                                <?php
                                $i = 1;
                                $stmt = $conn->prepare("SELECT * FROM `categorie` WHERE `id_res`=:ir ");
                                $stmt->bindParam(":ir", $restaurant_id);
                                $stmt->execute();
                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                if ($result) {
                                    foreach ($result as $row) {
                                ?>
                                        <tr>
                                            <td class="wspace-no tbl-bx" style="font-family: var(--font-family-title);"><?= $i++ ?></td>
                                            <td class="wspace-no text-ov" style="font-family: var(--font-family-title);"><?= $row['name'] ?></td>
                                            <td class="wspace-no text-ov" style="font-family: var(--font-family-title);"><?= $row['date_cre'] ?></td>
                                            <td class="wspace-no">
                                                <div class="ms-auto">
                                                    <form action="configue-res.php" method="post" class="delate-form" onsubmit="return confirm('are you sure want to delate this categorie ?')">
                                                        <input type="hidden" name="delate_categorie_id" value="<?= $row["id_cat"] ?>">
                                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp" style="font-size: 16px;width: 25px;height: 25px;"> <i class="fa fa-trash"></i> </button>
                                                        <button type="button" class="btn btn-primary btn-xs sharp me-1" style="font-size: 16px;width: 25px;height: 25px;" data-bs-toggle="modal" data-bs-target="#editcategorie<?= $row["id_cat"] ?>" ><i class="fas fa-pencil-alt"></i></a>
                                                    </form>
                                                </div>
                                            </td>
                                            
                    </div>
                    </tr>
                    </tr>
                <?php
                                    }
                                } else {
                ?>
                <tr>
                    <td colspan="4" class="wspace-no tbl-bx">
                        <p style="text-align: center;justify-content:center;font-weight:600; ">No Found</p>
                    </td>
                </tr>
            <?php }
            ?>
            </tbody>
            
            <?php foreach($result as $row){ ?>
                <div class="modal fade" id="editcategorie<?= $row["id_cat"] ?>" tabindex="-1" aria-labelledby="editcategorieLabel<?= $row['id_cat'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> Edit  Categorie</h5>
                                <button type="button" name="name_categorie" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form class="comment-form" action="configue-res.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="text-black font-w600 form-label">Change Name of Categorie </label>
                                                <input type="text" class="form-control" name="edit_categorie" placeholder="Edit name" required></input>
                                                <input type="hidden" name="edit_cat_id" value="<?= $row['id_cat'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3 mb-0">
                                                <input type="submit" value="Edit categorie" class="submit btn btn-primary" name="edit_cat_modal_submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <?php
            } ?>
            </table>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="font-family: var(--font-family-title); border-color: var(--primary);">Id</th>
                                <th style="font-family: var(--font-family-title); border-color: var(--primary);">Name</th>
                                <th style="font-family: var(--font-family-title); border-color: var(--primary);">Name of Categorie</th>
                                <th style="font-family: var(--font-family-title); border-color: var(--primary);">Price (cent)</th>
                                <th style="font-family: var(--font-family-title); border-color: var(--primary);">date of creation</th>
                                <th style="font-family: var(--font-family-title); border-color: var(--primary);">action</th>
                                <th>
                                    <form action="configue-res.php" method="post">
                                        <a href="javascript:void(0);" name="add_submit" style="font-size:18px;font-family: var(--font-family-title);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#add_food_modal">+ Food</a>
                                    </form>
                                </th>
                            </tr>

                        </thead>
                        <div class="modal fade" id="add_food_modal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Food</h5>
                                        <button type="button" name="add" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="comment-form" action="configue-res.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="text-black font-w600 form-label" style="text-align: center;font-family: var(--font-family-title);">Name of Categorie <span class="required">*</span></label>
                                                        <select class="form-control wide" id="inputState"  name="select_name_categorie" style="text-align:center;font-family: var(--font-family-title);" required>
                                                            <option value="--"  selected>select categorie</option>
                                                            <?php
                                                            session_start();
                                                            $stmt = $conn->prepare("SELECT * FROM `categorie` WHERE `id_res`=:en");
                                                            $stmt->bindParam(":en", $_SESSION["restaurant_id"]);
                                                            $stmt->execute();
                                                            $categories = $stmt->fetchAll();
                                                            if ($categories) {
                                                                foreach ($categories as $categorie) { ?>
                                                                    <option value="<?= $categorie["name"] ?>" name="<?= $categorie["name"] ?>" class="form-control" style="border:3px solid gree;border-raduis:5px;"><?= $categorie["name"] ?></option>
                                                                <?php  }
                                                            } else { ?>
                                                                <option value="" style="font-family: var(--font-family-title);text-align:center;">No found</option>
                                                            <?php    }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">Name of Food<span class="required">*</span></label>
                                                        <input type="text" class="form-control" placeholder="food" style="font-family: var(--font-family-title);" name="add_food">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="text-black font-w600 form-label" style="width: 90%;font-family: var(--font-family-title);">Price (cent) <span class="required">*</span></label>
                                                        <input type="number" class="form-control" placeholder="enter the price" name="price_of_food" style="font-family: var(--font-family-title);" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">Photo of the Food</label>
                                                        <input type="file" class="form-control" name="photo_of_food" placeholder="Upload the photo" style="font-family: var(--font-family-title);"></input>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">description of the Food</label>
                                                        <textarea cols="30" rows="5" class="form-control" name="desc_of_food" placeholder="description of the Menu" style="font-family: var(--font-family-title);" required ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3 mb-0">
                                                        <input type="submit" value="Add" class="submit btn btn-primary" name="add_food_modal_submit" style="font-family: var(--font-family-title);">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tbody>
                            <?php
                            $j = 1;
                            $stmt = $conn->prepare("SELECT * FROM `food` WHERE `id_res`=:ca ");
                            $stmt->bindParam(":ca", $_SESSION["restaurant_id"]);
                            $stmt->execute();
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($result) {
                                foreach ($result as $row) {
                                    $categorie_id = $row["id_cat"];
                                    $stmt = $conn->prepare("SELECT `name`FROM `categorie` WHERE `id_cat`=:ic");
                                    $stmt->bindParam(":ic", $categorie_id);
                                    $stmt->execute();
                                    $categoriename = $stmt->fetchObject();
                            ?>
                                    <tr>
                                        <td class="wspace-no tbl-bx" style="font-family: var(--font-family-title);"><?= $j++ ?></td>
                                        <td class="wspace-no" style="font-family: var(--font-family-title);" ><?= $row['name'] ?></td>
                                        <td class="wspace-no" style="padding-left:40px;font-family: var(--font-family-title);"><?= $categoriename->name ?></td>
                                        <td class="wspace-no" style="padding-left:30px;font-family: var(--font-family-title);"><?= $row["prix"] ?></td>
                                        <td class="wspace-no" style="font-family: var(--font-family-title);"><?= $row['date_cre'] ?></td>
                                        <td class="wspace-no">
                                            <div class="ms-auto">
                                            <form action="configue-res.php" method="post" class="delate-form" onsubmit="return confirm('are you sure want to delate this food ?')">
                                                <input type="hidden" name="delate_food_id" value="<?= $row["id_fo"] ?>">
                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp" style="font-size: 16px;width: 25px;height: 25px;"> <i class="fa fa-trash"></i> </button>
                                                <button type="button" class="btn btn-primary btn-xs sharp me-1" style="font-size: 16px;width: 25px;height: 25px;" data-bs-toggle="modal" data-bs-target="#editfood<?= $row["id_fo"] ?>" ><i class="fas fa-pencil-alt"></i></a>
                                            </form>
                                        </td>
                </div>
                </td>
                </tr>
            <?php

                                }
                            } else {
            ?>
            <tr>
                <td colspan="5" class="wspace-no tbl-bx">
                    <p style="text-align: center;justify-content:center;font-weight:600;font-family: var(--font-family-title); ">No Found</p>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <?php foreach($result as $row){  ?>
            <div class="modal fade" id="editfood<?= $row["id_fo"] ?>"tabindex="-1" aria-labelledby="editfoodLabel<?= $row['id_fo'] ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Food</h5>
                            <button type="button" name="add" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form class="comment-form" action="configue-res.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="text-align: center;font-family: var(--font-family-title);">Name of Categorie <span class="required">*</span></label>
                                            <select class="form-control wide" id="inputState"  name="select_name_categorie_change" style="text-align:center;font-family: var(--font-family-title);" required>
                                                <option value="--"  selected>select categorie</option>
                                                <?php
                                                session_start();
                                                $stmt = $conn->prepare("SELECT * FROM `categorie` WHERE `id_res`=:en");
                                                $stmt->bindParam(":en", $_SESSION["restaurant_id"]);
                                                $stmt->execute();
                                                $categories = $stmt->fetchAll();
                                                if ($categories) {
                                                    foreach ($categories as $categorie) { ?>
                                                        <option value="<?= $categorie["name"] ?>" name="<?= $categorie["name"] ?>" class="form-control" style="border:3px solid gree;border-raduis:5px;"><?= $categorie["name"] ?></option>
                                                    <?php  }
                                                } else { ?>
                                                    <option value="" style="font-family: var(--font-family-title);text-align:center;">No found</option>
                                                <?php    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">Edit Name of Food<span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="food" style="font-family: var(--font-family-title);" name="edit_food">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="width: 90%;font-family: var(--font-family-title);">Edit Price (cent) <span class="required">*</span></label>
                                            <input type="number" class="form-control" placeholder="enter the price" name="edit_price_of_food" style="font-family: var(--font-family-title);" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">Edit Photo of the Food</label>
                                            <input type="file" class="form-control" name="edit_photo_of_food" placeholder="Upload the photo" style="font-family: var(--font-family-title);"></input>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">Edit description of the Food</label>
                                            <textarea cols="30" rows="5" class="form-control" name="edit_desc_of_food" placeholder="description of the Menu" style="font-family: var(--font-family-title);" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3 mb-0">
                                            <input type="hidden" name="edit_food_id" value="<?= $row['id_fo'] ?>"> 
                                            <?= var_dump($row['id_fo']) ?>
                                            <button type="submit"  class="submit btn btn-primary" name="edit_food_modal_submit" style="font-family: var(--font-family-title);">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <?php
        } ?>       
        </table>
            </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <button type='button' name="add_submit" style="font-family: var(--font-family-title);float:right;margin-right:30px;margin-top:20px;" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#add_menu_modal">+ Food</button>
            <div class="modal fade" id="add_menu_modal">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Food</h5>
                            <button type="button" name="add" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form class="comment-form" action="configue-res.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="text-align: center;font-family: var(--font-family-title);">Name of Categorie <span class="required">*</span></label>
                                            <select class="form-control wide" id="inputState"  name="select_name_categorie" style="text-align:center;font-family: var(--font-family-title);" required>
                                                <option value="--"  selected>select categorie</option>
                                                <?php
                                                session_start();
                                                $stmt = $conn->prepare("SELECT * FROM `categorie` WHERE `id_res`=:en");
                                                $stmt->bindParam(":en", $_SESSION["restaurant_id"]);
                                                $stmt->execute();
                                                $categories = $stmt->fetchAll();
                                                if ($categories) {
                                                    foreach ($categories as $categorie) { ?>
                                                        <option value="<?= $categorie["name"] ?>" name="<?= $categorie["name"] ?>" class="form-control" style="border:3px solid gree;border-raduis:5px;"><?= $categorie["name"] ?></option>
                                                    <?php  }
                                                } else { ?>
                                                    <option value="" style="font-family: var(--font-family-title);text-align:center;">No found</option>
                                                <?php    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">Name of Food<span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="food" style="font-family: var(--font-family-title);" name="add_food">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="width: 90%;font-family: var(--font-family-title);">Price (cent) <span class="required">*</span></label>
                                            <input type="number" class="form-control" placeholder="enter the price" name="price_of_food" style="font-family: var(--font-family-title);" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">Photo of the Food</label>
                                            <input type="file" class="form-control" name="photo_of_food" placeholder="Upload the photo" style="font-family: var(--font-family-title);"></input>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-black font-w600 form-label" style="font-family: var(--font-family-title);">description of the Food</label>
                                            <textarea cols="30" rows="5" class="form-control" name="desc_of_food" placeholder="description of the Menu" style="font-family: var(--font-family-title);" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3 mb-0">
                                            <input type="submit" value="Add" class="submit btn btn-primary" name="add_food_modal_submit" style="font-family: var(--font-family-title);">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="configue-res.php" method="post">
                    <div class="col-md-5 mb-3">
                        <label class="form-label" style="font-size: large;">Categorie of the Menu</label>
                        <select name="name_select_menu_categorie"  style="width: 50%;margin:20px 0 20px 15px;border:1px solid gray;border-radius:15px;text-align:center;height:35px;font-family: var(--font-family-title);"  onchange="this.form.submit();">
                            <option value="--" selected="" >select categorie</option>
                            <?php
                                $stmt = $conn->prepare("SELECT * FROM `categorie` WHERE `id_res`=:ire");
                                $stmt->bindParam(":ire", $_SESSION["restaurant_id"]);
                                $stmt->execute();
                                $get_categorie_names = $stmt->fetchAll();
                                if ($get_categorie_names) {
                                    foreach ($get_categorie_names as $get_name) { ?>
                                        <option name="<?= $get_name["name"] ?>"  value="<?= $get_name["name"] ?>"><?= $get_name["name"] ?></option>
                                <?php }
                                    }
                                ?>
                        </select>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST["name_select_menu_categorie"])) {
                $_SESSION['active_tab'] = 'contact';
                $name_categorie_menu = $_POST["name_select_menu_categorie"];
                $stmt = $conn->prepare("SELECT `id_cat`FROM `categorie` WHERE `name`=:na");
                $stmt->bindParam(":na", $name_categorie_menu);
                $stmt->execute();
                $id_categorie_menus = $stmt->fetchObject();
                $id = $id_categorie_menus->id_cat; ?>
                <div class="row"> <?php
                                    $stmt = $conn->prepare("SELECT *FROM `food` WHERE `id_cat`=:cat");
                                    $stmt->bindParam(":cat", $id);
                                    $stmt->execute();
                                    $user = $stmt->fetchAll();
                                    if ($user) {
                                        foreach ($user as $content) {

                                    ?>
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="menu-product d-flex">
                                            <img src="uploads/menus/ <?= $content["image"] ?>">
                                            <div class="content-detail-wrap">
                                                <div>
                                                    <h4><?= $content["name"] ?></h4>
                                                    <span><?= $content["description"] ?></span>
                                                </div>
                                                <div class="mt-4 d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h5 class="mb-0"><span class="fs-14 me-2">start From</span>$<?= $content["prix"] / 100 ?></h5>
                                                        <span class="text-danger">Customization available</span>
                                                    </div>
                                                    <div>
                                                        <form action="configue-res.php" method="post" class="delate-form"  onsubmit="return confirm('Are you sure you want to delate this food ?')">
                                                            <input type="hidden" name="delate_food_from_menu" value="<?= $content["id_fo"]  ?>">
                                                            <button type="submit"  class="btn btn-danger shadow btn-xs sharp">delete</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                                    } else { ?>
                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="menu-product d-flex">
                                        <img src="#">
                                        <div class="content-detail-wrap">
                                            <div>
                                                <h4>Not Found</h4>
                                                <span>not found</span>
                                            </div>
                                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="mb-0"><span class="fs-14 me-2">start From</span>$999999999</h5>
                                                    <span class="text-danger">not Found</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  }
                    ?>
                </div>
            <?php
            } else { ?>
                <div class="row"> <?php
                                    $stmt = $conn->prepare("SELECT * FROM `food` WHERE `id_res`=:ires");
                                    $stmt->bindParam(":ires", $_SESSION["restaurant_id"]);
                                    $stmt->execute();
                                    $all_foods = $stmt->fetchAll();
                                    if ($all_foods) {
                                        foreach ($all_foods as $food) {
                                    ?>
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="menu-product d-flex">
                                            <img src="uploads/menus/ <?= $food["image"] ?>">
                                            <div class="content-detail-wrap">
                                                <div>
                                                    <h4><?= $food["name"] ?></h4>
                                                    <span><?= $food["description"] ?></span>
                                                </div>
                                                <div class="mt-4 d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h5 class="mb-0"><span class="fs-14 me-2">start From</span>$<?= $food["prix"] / 100 ?></h5>
                                                        <span class="text-danger">Customization available</span>
                                                    </div>
                                                    <div>
                                                        <form action="configue-res.php" method="post" class="delate-form" onsubmit="return confirm('Are you sure you want to delete this food ?')">
                                                            <input type="hidden" name="delate_food_from_menu" value="<?= $food["id_fo"]  ?>">
                                                            <button type="submit" class="btn btn-danger" >delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                                    } else { ?>
                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="menu-product d-flex">
                                        <img src="#">
                                        <div class="content-detail-wrap">
                                            <div>
                                                <h4>Not Found</h4>
                                                <span>not found</span>
                                            </div>
                                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="mb-0"><span class="fs-14 me-2">start From</span>$999999999</h5>
                                                    <span class="text-danger">not Found</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php  }
                                }
                ?>
                </div>

        </div>

        </div>
    </div>
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">Wissem Hamdi</a> 2024</p>
        </div>
    </div>




    <!--**********************************
            Content body end
        ***********************************-->



    <!--**********************************
            Footer start
        ***********************************-->

    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script>
        if (window.performance) {
            if (performance.navigation.type == 2) {
                window.onload = function() {
                    window.location.href = 'unset_session.php';
                };
            }
        }
    </script>
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>

    <!-- Dashboard 1 -->
    <script src="js/dashboard/dashboard-1.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>