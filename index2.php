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
        <title>Sri Lanka Round Tours - Budget Sri Lanka Round Tour Driver - Vision Lanka Tours - Sri Lanka Private Tour Drivers </title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Sri Lanka Round Tours offer private driver for round tours in Sri Lanka for safety service and Sri Lanka round tours care all who tour with Vision Sri Lanka Round Tours." http-equiv="description" />
        <meta name="keywords" content="sri lanka round tours, Sri lanka round tour, sri lanka round trip, sri lanka tour packages, sri lanka tours, sri lanka travel, sri lanka private tour drivers, sri lanka tour drivers, sri lanka travel agents, sri lanka budget tours, sri lanka budget taxi, holiday tours sri lanka, tour in sri lanka, tour operators in sri lanka, sri lanka round trips, day tours in Sri lanka, Vision Lanka Tours, Sri Lanka Round Tours Nuwan, Galle Tours, Unawatuna Tours, Best Safe tours in Sri Lanka, Sri Lankan Round Tours, Sri Lanka Luxury Tours, Best 10 Tours in Sri Lanka">

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
        <link href="css/style_2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div  class="main">

            <?php include './header.php'; ?>

            <section class="slider-section">
                <?php include './slider.php'; ?>
            </section>
            <section class="welcome-section   " >
                <div class="container">
                    <div  class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 mg-top-50">
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
                                    <div class="description-list">
                                        <ol>
                                            <li><a>More than ten years well experience guides and drivers.</a></li>
                                            <li><a> We have many excellent places to seen in the country. </a></li>
                                            <li><a>We arrange round tours and one day tours .</a></li>
                                            <li><a>Arrange reasonable price accommodations.</a></li>
                                            <li><a>Provide airfort transfer services and rent a car services. </a></li>

                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <img src="images/about-srilanka/lanka-map.png" alt=""/>
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
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="award-inner-block">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="award-inner-block">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-2 trip-advisory-logo"> 
                                <a href="" target="_blank"> 
                                    <img src="images/trip_advisor.png" class="" alt="TripAdvisor"> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tripadvisor-testimonials">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tripadvisor-owl owl-carousel owl-theme strong-view strong-view-id-1 unstyled slider-container carousel slider-mode-horizontal">

                                    <?php
                                    $COMMENT = $COMMENT_OBJ->all();
                                    foreach ($COMMENT as $key => $comment) {
                                        ?>
                                        <div class="item testimonial t-slide wpmslider-clone" style="float: left; list-style: outside none none; position: relative; width: 370px; margin-right: 20px; display: block;" aria-hidden="true">
                                            <div class="testimonial-inner">
                                                <h3 class="testimonial-heading"><?php echo $comment['title']; ?></h3>
                                                <div class="testimonial-content">
                                                    <div class="maybe-clear"></div>
                                                    <p><?php echo substr($comment["comment"], 0, 220) . '...'; ?></p>
                                                </div>
                                                <div class="testimonial-client">
                                                    <div class="testimonial-name"><?php echo $comment['name']; ?></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div></div></div>

                </div>
            </div>

            <section class="cards bg-overlay">
                <div class="container r-c-right" style="right: -6%;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 card-pd">

                            <figure>
                                <a href="about-srilanka.php">
                                    <figcaption style="background-image:url(./images/card/3.jpg)">
                                        <img src="./images/card/3.jpg" alt="" />
                                    </figcaption>
                                    <a href="about-srilanka.php" class="btn btn-clean" onclick="">Holiday in Sri Lanka</a>
                                    <p class="as-content text-center">Sri Lanka is Tropical Island to fill cultural and natural treasures in the Indian Ocean which has remarkable combination of stunning landscapes, pristine beaches, captivating cultural heritage, UNESCO World Heritage Sites, national parks showcasing an abundance of wildlife , botanical gardens, waterfalls , water bodies ……..</p>
                                </a>
                            </figure>

                        </div>

                        <!-- === item === -->

                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 card-pd">
                            <figure>
                                <a href="round-tours.php">
                                    <figcaption style="background-image:url(./images/card/2.jpg)">
                                        <img src="./images/card/2.jpg" alt="" />
                                    </figcaption>
                                    <a href="round-tours.php" class="btn btn-clean">Round Tours</a>
                                    <p class="as-content text-center">Round Tours will cover a variety of attractions such as Cultural and Heritage, Wild Life, Beach, Adventure, and scenic sites,…….</p>
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
                                    <a href="one-day-tours.php" class="btn btn-clean">One Day Tours</a>
                                    <p class="as-content text-center">Places to visit in Sri Lanka within one day during your short vacation. Here is the list of places to visit in Galle Fort, Unawatuna, Hikkaduwa,…..</p>
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
                                    <a href="attraction.php" class="btn btn-clean">Attractions</a>
                                    <p class="as-content text-center">Sri Lanaka is the most rare and the most extensive range of attractions like beaches, wildlife covered mountains draped with carpets of tea, ……….</p>
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
                                    <a href="activity.php" class="btn btn-clean">Activities</a>
                                    <p class="as-content text-center">Discover the best Fun and thrilling things to do in Sri Lanka like as Bird watching, Wildlife safari, Surfing, Scuba diving, honeymoon, Hiking, trekking, …….</p>
                                </a>
                            </figure>
                        </div>

                    </div> <!--/row-->

                </div> <!--/container-->
            </section>
            <section class="about-srilanaka-section m-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 ab-left-text">
                            <div class="">
                                <div class="col-md-2  hidden-sm hidden-xs lankan-map" >
                                </div>
                                <div class="col-md-9 col-sm-12">
                                    <div class="description " >
                                        <div class="main-title text-left ">
                                            <h3>About Sri Lanka</h3>
                                        </div>
                                        <?php echo $ABOUT->description; ?>
                                    </div>

                                </div>
                                <div class="col-md-1 hidden-sm hidden-xs  lankan-map" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 ab-right-text">
                            <div class="">

                                <div class="col-md-1  hidden-sm hidden-xs " >
                                </div>
                                <div class="col-md-9 col-xs-12 col-sm-12">
                                    <div class="col-md-4 col-sm-12 col-xs-12 ">
                                        <img src="images/srilankatours_owner_image.jpg" alt=""/>
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <?php echo $PROFILE_1->description; ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $PROFILE_2->description; ?>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <p class="nme">Nuwan <br>Vision Lanka Tour </p>

                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <p class="text-center contact-num" >
                                            <a href="tel:0094 777 85 59 85"> 0094 777 85 59 85</a>
                                        </p>
                                        <div class="col-md-8  hidden-sm hidden-xs">
                                            <img src="images/about-srilanka/contact-icon.png" class="contact-img" alt="Vision Lanka Tours"/>
                                        </div>
                                        <div class=" hidden-md hidden-lg col-sm-12 col-xs-12 text-center">
                                            <img src="images/about-srilanka/contact-icon.png" class="contact-img" alt="Vision Lanka Tours"/>

                                        </div>
                                    </div>



                                </div>
                                <div class="col-md-2  hidden-sm hidden-xs " >

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <section class="pd-0 gallery-slider-wrap mg-top-20 mg-bottom-20">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-10 col-sm-12">
                            <div class="galley-owl owl-carousel owl-theme">
                                <?php
                                $GALLERY = $GALLERY_OBJ->all();
                                foreach ($GALLERY as $key => $photo) {
                                    if ($key < 15) {
                                        
                                    }
                                    ?>
                                    <div class="item col-md-12 col-sm-4 g-pd">
                                        <!-- GALLERY THUMB START -->
                                        <div class="gallery-thumb th-bg">
                                            <figure>
                                                <img src="./upload/photo-album/gallery/thumb/<?php echo $photo["image_name"]; ?>" class="big" alt="<?php echo $photo["name"]; ?>" />
                                            </figure>
                                        </div>
                                        <!-- GALLERY THUMB END -->
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-2 hidden-sm hidden-xs mg-top-40">
                            <!-- SECTION HEADING START -->
                            <div class="main-title main-title-2 text-center  ">

                                <span style="writing-mode: vertical-rl;">Gallery</span>
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

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="owl/owl.carousel.js" type="text/javascript"></script>
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="simple-light-box/simple-lightbox.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script>

            $('.tripadvisor-owl').owlCarousel({
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