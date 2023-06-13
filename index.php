<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home || Armor T3ch</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>



<body class="home">


    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/armor_t3ch.png" alt="" width="30%"> </a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="about-us.php">About-us <span class="sr-only"></span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="contact-us.php">Contact-us <span class="sr-only"></span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="helmets.php">Helmets <span class="sr-only"></span></a> </li>



                        <?php
                        if (empty($_SESSION["user_id"])) // if user is not login
                        {
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                        } else {


                            echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                            echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                        }

                        ?>

                    </ul>

                </div>
            </div>
        </nav>

    </header>


    <section class="hero bg-image" data-image-src="images/helmets/244580096_996486740916633_4433670621782426374_n.jpg">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>RIDE WITH THE BEST.<br>RIDE WITH ARMOR TECH</h1>

                <div class="banner-form">
                    <form class="form-inline">

                    </form>
                </div>
            </div>
        </div>

    </section>






    <section class="popular">
        <div class="container">
            <div class="title text-xs-center m-b-30">
                <h2>Popular Helmet Style of the Month</h2>
                <p class="lead">Easiest way to order your favourite food among these top 6 style</p>
            </div>
            <div class="row">


                <?php
                $query_res = mysqli_query($db, "select * from style LIMIT 6");
                while ($r = mysqli_fetch_array($query_res)) {

                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                <div class="food-item-wrap">
                                    <div class="figure-wrap bg-image" data-image-src="admin/Res_img/style/' . $r['img'] . '"></div>
                                    <div class="content">
                                        <h5><a href="style.php?res_id=' . $r['rs_id'] . '">' . $r['title'] . '</a></h5>
                                        <div class="product-name">' . $r['slogan'] . '</div>
                                        <div class="price-btn-block"> <span class="price">₱' . $r['price'] . '</span> <a href="style.php?res_id=' . $r['rs_id'] . '" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </section>


    <section class="how-it-works">
        <div class="container">
            <div class="text-xs-center">
                <h2>Easy to Order</h2>
                <div class="row how-it-works-solution">
                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                        <div class="how-it-works-wrap">
                            <div class="step step-1">
                                <div class="icon" data-step="1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483 483" width="512" height="512">
                                        <g fill="#FFF">
                                            <path d="M467.006 177.92c-.055-1.573-.469-3.321-1.233-4.755L407.006 62.877V10.5c0-5.799-4.701-10.5-10.5-10.5h-310c-5.799 0-10.5 4.701-10.5 10.5v52.375L17.228 173.164a10.476 10.476 0 0 0-1.22 4.938h-.014V472.5c0 5.799 4.701 10.5 10.5 10.5h430.012c5.799 0 10.5-4.701 10.5-10.5V177.92zM282.379 76l18.007 91.602H182.583L200.445 76h81.934zm19.391 112.602c-4.964 29.003-30.096 51.143-60.281 51.143-30.173 0-55.295-22.139-60.258-51.143H301.77zm143.331 0c-4.96 29.003-30.075 51.143-60.237 51.143-30.185 0-55.317-22.139-60.281-51.143h120.518zm-123.314-21L303.78 76h86.423l48.81 91.602H321.787zM97.006 55V21h289v34h-289zm-4.198 21h86.243l-17.863 91.602h-117.2L92.808 76zm65.582 112.602c-5.028 28.475-30.113 50.19-60.229 50.19s-55.201-21.715-60.23-50.19H158.39zM300 462H183V306h117v156zm21 0V295.5c0-5.799-4.701-10.5-10.5-10.5h-138c-5.799 0-10.5 4.701-10.5 10.5V462H36.994V232.743a82.558 82.558 0 0 0 3.101 3.255c15.485 15.344 36.106 23.794 58.065 23.794s42.58-8.45 58.065-23.794a81.625 81.625 0 0 0 13.525-17.672c14.067 25.281 40.944 42.418 71.737 42.418 30.752 0 57.597-17.081 71.688-42.294 14.091 25.213 40.936 42.294 71.688 42.294 24.262 0 46.092-10.645 61.143-27.528V462H321z" />
                                            <path d="M202.494 386h22c5.799 0 10.5-4.701 10.5-10.5s-4.701-10.5-10.5-10.5h-22c-5.799 0-10.5 4.701-10.5 10.5s4.701 10.5 10.5 10.5z" />
                                        </g>
                                    </svg>
                                </div>
                                <h3>Choose a Helmet Variation</h3>
                                <p>We"ve got your covered with helmet variations.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                        <div class="step step-2">
                            <div class="icon" data-step="2">
                                <svg width="800px" height="800px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="#FFF" d="M294.396 52.127c-17.944.066-35.777 1.834-52.886 4.746-86.727 14.76-135.612 53.467-161.99 107.824 31.215-2.434 62.002-5.024 91.966-4.838 24.114.15 47.696 2.097 70.54 7.37 15.15 3.5 24.652 16.647 27.607 31.735 2.954 15.088.858 32.92-5.055 51.553l-.287.904-.468.826c-7.762 13.64-24.263 24.498-45.295 35.994-21.032 11.497-46.695 22.693-72.27 32.428-25.574 9.735-51.012 17.98-71.575 23.437-7.254 1.925-13.85 3.48-19.735 4.657 2.275 31.13 6.562 63.38 12.008 95.98 140.118-38.25 273.5-79.888 403.51-123.254 25.935-44.457 29.927-86.448 16.967-126.734-22.393-69.605-60.9-107.048-105.215-126.168-27.696-11.95-57.913-16.57-87.82-16.46zM130.184 179.205c-9.06.51-18.265 1.156-27.532 1.836L59.31 329.386c3.384-.79 6.936-1.663 10.754-2.676 4.004-1.063 8.27-2.27 12.66-3.554 10.022-31.07 43.3-131.415 47.46-143.95zm-46.7 3.262c-10.868.826-21.824 1.654-32.908 2.37-.32.445-.714.947-1.318 2.267-1.58 3.45-3.375 9.418-4.912 16.724-3.075 14.612-5.37 34.727-6.705 54.877-1.333 20.15-1.73 40.438-1.193 55.582.268 7.572.79 13.905 1.442 17.96.048.306.078.312.13.59.46-.01 1.033-.044 1.546-.064l43.918-150.306zM224 183c-15.596 0-28.66 12.582-28.66 28.152s13.064 28.155 28.66 28.155 28.66-12.584 28.66-28.155c0-15.57-13.064-28.152-28.66-28.152zm0 18c6.12 0 10.66 4.567 10.66 10.152 0 5.586-4.54 10.155-10.66 10.155s-10.66-4.57-10.66-10.155c0-5.585 4.54-10.152 10.66-10.152zm230.19 144.865C330.383 386.852 203.285 426.23 70.054 462.56c.413 2.317.81 4.63 1.232 6.948 147.607-26.65 255.974-68.965 371.36-109.164 4.118-4.857 7.947-9.68 11.546-14.48z"/></svg>
                            </div>
                            <h3>Choose a Style</h3>
                            <p>We"ve got your covered with a variety of Helmet Style.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                        <div class="step step-3">
                            <div class="icon" data-step="3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                                    <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" />
                                </svg>
                            </div>
                            <h3>Pick up or Delivery</h3>
                            <p>Get your Helmets! And enjoy your Ride! </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="pay-info">Cash on Delivery</p>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4>Featured Helmet Variation</h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="restaurant-listing">

                    <?php
                        $ress = mysqli_query($db, "select * from categories");
                        while ($rows = mysqli_fetch_array($ress)) {

                            $query = mysqli_query($db, "select * from res_category where c_id='" . $rows['c_id'] . "' ");
                            $rowss = mysqli_fetch_array($query);

                            echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all ' . $rowss['c_name'] . '">
                                    <div class="restaurant-wrap">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                                                <a class="restaurant-logo" href="style.php?res_id=' . $rows['rs_id'] . '" > <img src="admin/Res_img/' . $rows['image'] . '" alt="logo"> </a>
                                            </div>
                                
                                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                                                <h5><a href="style.php?res_id=' . $rows['rs_id'] . '" >' . $rows['title'] . '</a></h5> <span>' . $rows['address'] . '</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        }
                    ?>

                </div>
            </div>


        </div>
    </section>



    <?php include "include/footer.php" ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>


</html>