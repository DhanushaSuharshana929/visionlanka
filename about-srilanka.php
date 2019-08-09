<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ABOUT_SRILANKA = new Page(7);
$ABOUT_SRILANKA_2 = new Page(4);
$ABOUT_SRILANKA_3 = new Page(5);
$ACTIVITY1 = new Activities(null);
$ATTRACTION2 = new Attraction(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sri Lanka | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
        <meta name="keywords" content="vision lanka tours, round tours, sri lanka round tours, round tours in sri lanka, vision lanka tours, round tours trip in sri lanka, sri lanka private tour drivers, sri lanka tour drivers">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon.png">
        <link href="css/style_3.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigation-menu.css" rel="stylesheet" type="text/css"/>
                <link href="https://fonts.googleapis.com/css?family=Lato:300,500&amp;subset=latin-ext" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,500&amp;subset=latin-ext" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,500&amp;subset=latin-ext" rel="stylesheet"> 
        <link href="//db.onlinewebfonts.com/c/3f3f1a887702b525cda01f7cd776b241?family=Gadugi" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">
 
    </head>
    <body>

        <div  class="main">
            <div class="preloader"></div>
            <?php include './header.php'; ?>
            <div class="sub-banner  mg-bottom-50 about-bottom-60" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">About Sri Lanka</li>
                </ol>
            </div>
            <section class="about-srilanaka-section mg-top-40 mg-bottom-50 mg-top-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="" >
                                Welcome to  Sri Lanka
                            </h3>
                            <span  class="mg-bottom-20">
                                Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.
                            </span>
                            <?php echo $ABOUT_SRILANKA->description; ?>
                        </div>
                        <div class="col-md-4">
                            <img src="images/about-srilanka/lanka-map.png" alt="map"/>
                        </div>
                    </div>
                    <div class="row mg-top-20">
                        <div class="col-md-12">
                            <h5 class="title">
                                <?php echo $ABOUT_SRILANKA_2->title; ?> 
                            </h5>
                            <?php echo $ABOUT_SRILANKA_2->description; ?>
                        </div>
                        <div class="col-md-12">

                            <!-- Wrapper for slides -->
                            <div class="about-srilanka-owl owl-carousel  owl-theme">

                                <div class="item ">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/1.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/2.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/3.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/4.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/5.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/6.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/7.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/8.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row mg-top-20">
                        <div class="col-md-12">
                            <h5 class="title ">
                                <?php echo $ABOUT_SRILANKA_3->title; ?> 
                            </h5>
                            <?php echo $ABOUT_SRILANKA_3->description; ?>
                        </div>
                        <div class="col-md-12">

                            <!-- Wrapper for slides -->
                            <div class="about-srilanka-owl owl-carousel  owl-theme">

                                <div class="item ">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/11.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/12.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/13.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/14.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/15.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/16.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/17.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/18.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/19.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-12 gp">
                                        <img src="images/about-srilanka/20.jpg" alt="vision lanka tours"/>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>  
            </section>

            <div id="back-top">
                <a href="#top" class="link">
                    <i class="fa fa-angle-double-up"></i>
                </a>
            </div>

            <?php include './footer.php'; ?>

        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="owl/owl.carousel.js" type="text/javascript"></script>
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script>
            $('.about-srilanka-owl').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                nav: false,
                autoplay: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        </script>
    </body>
</html>