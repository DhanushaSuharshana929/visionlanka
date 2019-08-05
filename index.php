<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ABOUT = new Page(1);
$PROFILE_1 = new Page(2);
$PROFILE_2 = new Page(8);
$COMMENT_OBJ = new Comments(null);
$SLIDER_OBJ = new Slider(null);
$GALLERY_OBJ = new AlbumPhoto(null);
$ACTIVITY1 = new Activities(null);
$ATTRACTION2 = new Attraction(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sri Lanka Round Tours - Budget Private Driver - Vision Lanka Tours - Sri Lanka Private Tour Drivers </title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka Round Tours offer private driver for round tours in Sri Lanka for safety service and Sri Lanka round tours care all who tour with Vision Sri Lanka Round Tours." http-equiv="description" />
        <meta name="keywords" content="sri lanka round tours, Sri lanka round tour, sri lanka round trip, sri lanka tour packages, sri lanka tours, sri lanka travel, sri lanka private tour drivers, sri lanka tour drivers, sri lanka travel agents, sri lanka budget tours, sri lanka budget taxi, holiday tours sri lanka, tour in sri lanka, tour operators in sri lanka, sri lanka round trips, day tours in Sri lanka, Vision Lanka Tours, Sri Lanka Round Tours Nuwan, Galle Tours, Unawatuna Tours, Best Safe tours in Sri Lanka, Sri Lankan Round Tours, Sri Lanka Luxury Tours, Best 10 Tours in Sri Lanka">
      <meta name="google-site-verification" content="YCt5f9R2CwBZ4N_-vpU6J-8Z-N4WA_fFBUDtKCs-AFI" />

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon.png">
        <link href="simple-light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style_3.css" rel="stylesheet" type="text/css"/>
        <link href="css/index-slider.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,500&amp;subset=latin-ext" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,500&amp;subset=latin-ext" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,500&amp;subset=latin-ext" rel="stylesheet"> 
        <link href="//db.onlinewebfonts.com/c/3f3f1a887702b525cda01f7cd776b241?family=Gadugi" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">
    </head>

    <body>	

        <div  class="main">
            <div class="preloader"> </div>
            <?php include './header.php'; ?>
            <?php include './slider.php'; ?>


            <section class="welcome-section   " >
                <div class="container">
                    <div  class="row m-top">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="welcome-bg"></div>
                            <div class="col-md-8 col-xs-12 col-sm-12">
                                <div class="main-title text-left ">
                                    <h3>Vision Lanka Tours</h3>
                                    <span >Welcome</span>
                                    <p class="sub-heading">“Ayubowan” : Long life to you...!</p>
                                </div>
                                <div class="description">
                                    <p class="text-left">
                                        Sri Lanka is an island in the Indian Ocean that is one of the most beautiful tourist destinations in World. Vision Lanka Tours is top rated tour partner in Unawatuna Sri Lanka who will make your holiday unforgettable and feel like a home away from home. We pride ourselves on exceptional customer service and strive to build lasting relationships with our customers. More of all the world class hospitality, amiable climate, mouthwatering cuisines and easy accessibility have truly made Sri Lanka a great tourists destination and tourist's paradise.
                                    </p>
                                    <div class="description-list hidden-xs hidden-sm">
                                        <ol>
                                            <li><a>More than ten years well experience guides and drivers.</a></li>
                                            <li><a>We have many excellent places to seen in the country. </a></li>
                                            <li><a>We arrange round tours and one day tours .</a></li>
                                            <li><a>Arrange reasonable price accommodations.</a></li>
                                            <li><a>Provide airport transfer services and rent a car services. </a></li>

                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <img src="images/about-srilanka/lanka-map.jpg" alt=""/>
                                 <div class="buttons-wrap text-center hidden-lg hidden-md " style="margin-top: 20px;">
                                    <a href="contact.php" class="q-ct sc-button m-right b-60  bg-1"> 

                                      <i class="fa fa-envelope-open"></i>  <span>QUICK CONTACT US </span></a>
                                </div>
                                  
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <div class="section section-07">
                <div class="award-main-block">
                    <div class="container invert-text">
                        <div class="row">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="award-inner-block">
                                            <p>We promise to deliver facinating days out.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="award-inner-block">
                                            <p>Tour packages that suit your requirements </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="award-inner-block">
                                            <p>Deliver adventure and memorable experience</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-2 "> 
                                <div class="trip-advisory-logo">
                                    <a href="https://www.tripadvisor.com/Attraction_Review-g297896-d5897194-Reviews-Vision_Lanka_Tours_Private_Day_Tours-Galle_Galle_District_Southern_Province.html" target="_blank"> 
                                        <img src="images/trip_advisor.png" class="" alt="TripAdvisor"> 
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-holder">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="comment-owl owl-carousel owl-theme strong-view strong-view-id-1 unstyled slider-container carousel slider-mode-horizontal">

                                    <?php
                                    $COMMENT = $COMMENT_OBJ->activeComments();
                                    foreach ($COMMENT as $key => $comment) {
                                        ?>
                                        <div class="comment-item">

                                            <h3 class="comment-heading"><?php echo $comment['title']; ?></h3>
                                            <p> <?php echo substr($comment["comment"], 0, 220) . '...'; ?>
                                            </p>
                                            <div class="comment-name">
                                                <?php echo $comment['name']; ?>
                                            </div>

                                        </div>

                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="buttons-wrap text-center" style="margin-top: 20px">
                                    <a href="feedback.php" class="c-button m-right b-60  bg-1"> 

                                        <span>view all comments</span>
                                    </a>
                                </div>
                            </div></div></div>

                </div>
            </div>

            <section class="cards bg-overlay parallax m-top">
                <div class="container r-c-right cards-container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 card-pd projects-grid">

                            <figure>
                                <a href="about-srilanka.php">
                                    <figcaption style="background-image:url(./images/card/3.jpg)">
                                        <img src="./images/card/3.jpg" alt="" />
                                    </figcaption>
                                    <a href="about-srilanka.php" class="btn btn-clean" onclick=""></a>
                                </a>
                            </figure>

                        </div>

                        <!-- === item === -->

                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 card-pd" id="card-2">
                            <figure>
                                <a href="round-tours.php">
                                    <figcaption style="background-image:url(./images/card/2.jpg)" class="round-img">
                                        <img src="./images/card/2.jpg" alt="" />
                                    </figcaption>
                                    <a href="round-tours.php" class="btn btn-clean"></a>
                                </a>
                            </figure>
                        </div>

                        <!-- === item === -->

                        <div class="col-xs-6 col-md-4 col-lg-4 col-sm-6 card-pd">
                            <figure>
                                <a href="one-day-tours.php">
                                    <figcaption style="background-image:url(./images/card/5.jpg)">
                                        <img src="./images/card/5.jpg" alt="" />
                                    </figcaption>
                                    <a href="one-day-tours.php" class="btn btn-clean"></a>
                                </a>
                            </figure>
                        </div>

                        <!-- === item === -->

                        <div class="col-xs-6 col-md-4 col-lg-4 col-sm-6 card-pd">
                            <figure>
                                <a href="attraction.php">
                                    <figcaption style="background-image:url(./images/card/1.jpg)">
                                        <img src="./images/card/1.jpg" alt="" />
                                    </figcaption>
                                    <a href="attraction.php" class="btn btn-clean"></a>
                                </a>
                            </figure>
                        </div>

                        <!-- === item === -->

                        <div class="col-xs-6 col-md-4 card-pd">
                            <figure>
                                <a href="activity.php">
                                    <figcaption style="background-image:url(./images/card/4.jpg)">
                                        <img src="./images/card/4.jpg" alt="" />
                                    </figcaption>
                                    <a href="activity.php" class="btn btn-clean"></a>
                                </a>
                            </figure>
                        </div>

                    </div> <!--/row-->

                </div> <!--/container-->
            </section>

            <section class="about-srilanaka-section m-top">
                <div class="container">
                    <div class="row row-1">
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 ab-left-text hidden-xs hidden-sm">

                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 ab-right-text">
                            <div class="">

                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="description" >
                                        <div class="home-about col-md-8 col-sm-9 col-xs-12">
                                            <?php echo $PROFILE_1->description; ?>
                                        </div>
                                        <div class="col-md-4 col-sm-3 col-xs-12 ">
                                            <img src="images/srilankatours_owner_image.jpg" alt=""/>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <?php echo $PROFILE_2->description; ?>
                                            Nuwan Gunawardena <br/>
                                            <small>Chairman - Vision Lanka Tours</small>

                                        </div>
                                        <div class="signature-img">
                                            <img src="images/signature.png">
                                        </div>
                                        <!--                                        <div class="col-md-12 col-sm-6 col-xs-12">
                                                                                    <p class="nme">Nuwan <br> Vision Lanka Tour </p>
                                                                                </div>-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row row-2 hidden-xs hidden-sm ">
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 ab-right-text">
                            <div class="">

                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="description " style="padding: 10px;" >
                                        <div class="main-title text-left ">
                                            <h3>About Sri Lanka</h3>
                                        </div>
                                        <?php echo $ABOUT->description; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 ab-left-text">
                            <div class="">
                                <div class="col-md-2  hidden-sm hidden-xs lankan-map" >
                                </div>
                                <div class="col-md-9 col-sm-12">
                                </div>
                                <div class="col-md-1 hidden-sm hidden-xs  lankan-map" >
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>



            <section class="pd-0 gallery-slider-wrap mg-top-20 mg-bottom-20">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-10 col-lg-10 col-sm-12">
                            <div class="galley-owl owl-carousel owl-theme">

                                <div class="item col-md-12 col-sm-4 g-pd">
                                    <!-- GALLERY THUMB START -->
                                    <div class="gallery-thumb th-bg">
                                        <figure>
                                            <img src="./upload/index-gallery/1.jpg" class="big" alt="yala tiger" />
                                        </figure>
                                    </div>
                                    <!-- GALLERY THUMB END -->
                                </div>
                                <div class="item col-md-12 col-sm-4 g-pd">
                                    <!-- GALLERY THUMB START -->
                                    <div class="gallery-thumb th-bg">
                                        <figure>
                                            <img src="./upload/index-gallery/2.jpg" class="big" alt="junglefowl" />
                                        </figure>
                                    </div>
                                    <!-- GALLERY THUMB END -->
                                </div>
                                <div class="item col-md-12 col-sm-4 g-pd">
                                    <!-- GALLERY THUMB START -->
                                    <div class="gallery-thumb th-bg">
                                        <figure>
                                            <img src="./upload/index-gallery/3.jpg" class="big" alt="yala safari" />
                                        </figure>
                                    </div>
                                    <!-- GALLERY THUMB END -->
                                </div>
                                <div class="item col-md-12 col-sm-4 g-pd">
                                    <!-- GALLERY THUMB START -->
                                    <div class="gallery-thumb th-bg">
                                        <figure>
                                            <img src="./upload/index-gallery/4.jpg" class="big" alt="rose water lily" />
                                        </figure>
                                    </div>
                                    <!-- GALLERY THUMB END -->
                                </div>
                                <div class="item col-md-12 col-sm-4 g-pd">
                                    <!-- GALLERY THUMB START -->
                                    <div class="gallery-thumb th-bg">
                                        <figure>
                                            <img src="./upload/index-gallery/5.jpg" class="big" alt="Driving" />
                                        </figure>
                                    </div>
                                    <!-- GALLERY THUMB END -->
                                </div>
                                <div class="item col-md-12 col-sm-4 g-pd">
                                    <!-- GALLERY THUMB START -->
                                    <div class="gallery-thumb th-bg">
                                        <figure>
                                            <img src="./upload/index-gallery/6.jpg" class="big" alt="Cycling" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 hidden-sm hidden-xs mg-top-40">
                            <!-- SECTION HEADING START -->
                            <div class="main-title main-title-2 text-center  ">
                                <span class="span-1" style="writing-mode: vertical-rl;">Photo</span>
                                <span class="span-2" style="writing-mode: vertical-rl;">Gallery</span>
                            </div>
                            <!-- SECTION HEADING END -->
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

        <!--
             JQuery v1.11.3 
            <script src="js/jquery.min.js"></script>
        
         
             Library - Bootstrap v3.3.5 
            <script src="libraries/bootstrap/bootstrap.min.js"></script> Bootstrap JS File v3.3.5 -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="owl/owl.carousel.js" type="text/javascript"></script>
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/slick.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="simple-light-box/simple-lightbox.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script>


            $('.comment-owl').owlCarousel({
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
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.galley-owl').owlCarousel({
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
            $(".cards figure").on({
                mouseenter: function () {
                    $(this).addClass("active")
                },
                mouseleave: function () {
                    $(this).removeClass("active")
                }
            });



        </script>
    </body>

</html>
