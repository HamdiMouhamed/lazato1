<?php require 'database.php'; ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

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
    <title>Lezato : Restaurant Admin add restaurant</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.php"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">add Restaurant</h4>
                                    <?php
                                    if (isset($error)) { ?>
                                        <div style="width: 100%;padding: 15px;border-radius: 10px;color: white;font-size: 14px;background: red;text-align: center;">
                                            <?= $error ?></div>
                                    <?php } 
                                     ?>
                                    <form action="add-res.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name of the Restaurant</strong></label>
                                            <input type="test" name="name_of_res" class="form-control"  required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Location</strong></label>
                                            <input type="locale_get_region" name="location" class="form-control"  required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Tel</strong></label>
                                            <input type="tel" name="tel" class="form-control"  required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Your Restaurant Photo</strong></label>
                                            <input type="file" name="photo" class="form-control"  >
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="add_res_submit" class="btn btn-primary btn-block">Add the Restaurant</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts 
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>