<?php require_once('settings/db.php');
include 'settings/function.php';
global $con;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delux Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name=keywords content="Free Movies, watch movies, download movies, hollywood movies, free movie download"/>

    <meta name="description" content="Just Click and Watch movies for free without download, no registeration and no credit card needed.">

    <meta name="keywords" content="Free Movies, watch movies, download movies, hollywood movies, free movie download">

    <meta name="author" content="Delux JMG">
    <meta name="application-name" content="Delux Movies"/>

    <!--Canonical-->
    <link rel="canonical" href="https://movies.delux.icu/index.php">
    <!--End Canonical-->

    <!--Favicon-->
    <link rel="shortcut icon" href="Favi/favicon.ico" >
    <link href="Favi/apple-touch-icon.png" rel="apple-touch-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="/Favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/Favi/favicon-48x48.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/front/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/front/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/front/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/front/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/front/css/lightgallery.min.css">

    <link rel="stylesheet" href="assets/front/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="assets/front/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/front/css/swiper.css">

    <link rel="stylesheet" href="assets/front/css/aos.css">

    <link rel="stylesheet" href="assets/front/css/style.css">

    <script src="https://kit.fontawesome.com/be09261c1a.js" crossorigin="anonymous"></script>

    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
        .style1 {font-size: 24px}
    </style>

</head>

<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>




    <header class="site-navbar py-3 border-bottom" role="banner">

        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2" data-aos="fade-down">
                    <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0"><img src="images/DELUX X.png" alt="Delux Movies" width="50" height="50" longdesc="http://movies.delux.cu"><span class="style1">DeluxMovies</span></a></h1>
                </div>
                <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class=""><a href="movie.php">Movie Lists</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Movie Group
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <?php
                                    $sql_group = "Select * from grp";
                                    $result_group = mysqli_query($con,$sql_group);
                                    while ($row = mysqli_fetch_assoc($result_group)){
                                    ?>
                                    <a class="dropdown-item" href="movie.php?grp=<?php echo $row['id']?>"><?php echo $row['group_name']?></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Movie Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <?php
                                    $sql_cat = "Select * from cat";
                                    $result_cat = mysqli_query($con,$sql_cat);
                                    while ($row = mysqli_fetch_assoc($result_cat)){
                                        ?>
                                        <a class="dropdown-item" href="movie.php?cat=<?php echo $row['id']?>"><?php echo $row['cat_name']?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </li>
                            <li class="">
                                <form action="header.php" method="post">
                                <div class="input-group mb-3">
                                    <input name="keyword" type="text" class="form-control" placeholder="Search Movie" aria-label="Search Movie" aria-describedby="basic-addon2" required>
                                    <div class="input-group-append">
                                        <button name="search_movie" type="submit" class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                    <div class="d-none d-xl-inline-block">
                        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                            <li>
                                <a href="https://www.facebook.com/dlxradio/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCGlrc5-fHytZJF3ubd2XaxA" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                </div>

            </div>
        </div>

    </header>


