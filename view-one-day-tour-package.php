<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$VIEW_PACKAGE = new TourPackage($id);
$TOUR_PACKAGE_MORE_OBJ = new TourPackage(null);
$TOUR_DATE_OBJ = new TourDate($id);
$TOUR_DATE_PHOTOS_OBJ = new TourDatePhoto($id);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour Package | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
        <meta name="keywords" content="vision lanka tours, round tours, round tour packages, one day tours, one day tour packages, round tours in sri lanka, one day tours in sri lanka, day tours">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon.png">
        <link href="simple-light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
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
            <div class="sub-banner  mg-bottom-50 about-bottom-40" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <?php
                    if ($VIEW_PACKAGE->type == 1) {
                        ?>
                        <li><a href="one-day-tours.php">One Day Tours</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="round-tours.php">Round Tours</a></li>
                        <?php
                    }
                    ?>
                    <li>/</li>
                    <li class="breadcrumb-item active"><?php echo $VIEW_PACKAGE->title; ?></li>
                </ol>
            </div>
            <div id="tour" class="section mg-bottom-50 mg-top-80">
                <div class="container">
                    <div class="">


                        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                            <?php
                            $TOUR_DATE = $TOUR_DATE_OBJ->getTourDatesById($id);
                            foreach ($TOUR_DATE as $tour_date) {
                                ?>
                                <div class="simple-accordian tour-inner-top-1">
                                    <div class="accordion font-26 " ><?php echo $tour_date["title"]; ?></div>
                                    <hr/>
                                    <div class="accordion-content">
                                        <!-- Tour Tips Thumb Start -->
                                        <div class="thinn-tour-tips" style="margin-top: -30px;">
                                            <div class="hidden-lg hidden-md">
                                                <div class="tour-owl owl-carousel owl-theme">
                                                    <?php
                                                    $DateId = $tour_date['id'];
                                                    $TOUR_DATE_PHOTO = $TOUR_DATE_PHOTOS_OBJ->getTourDatePhotosById($DateId);
                                                    foreach ($TOUR_DATE_PHOTO as $tour_date_photo) {
                                                        ?>
                                                        <div class="item col-md-4 g-pd">
                                                            <figure>
                                                                <a href="./upload/tour-package/date/gallery/<?php echo $tour_date_photo["image_name"]; ?>"  >
                                                                    <img src="./upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo["image_name"]; ?>" alt="<?php echo $tour_date_photo["title"]; ?>" title="<?php echo $tour_date_photo["title"]; ?>" /> 
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text text-tour">
                                                    <?php echo $tour_date["description"]; ?>
                                                </div>
                                                <div class="gallery hidden-xs hidden-sm">
                                                    <?php
                                                    $DateId = $tour_date['id'];
                                                    $TOUR_DATE_PHOTO = $TOUR_DATE_PHOTOS_OBJ->getTourDatePhotosById($DateId);
                                                    foreach ($TOUR_DATE_PHOTO as $key => $tour_date_photo) {
                                                        if ($key < 3) {
                                                            ?>
                                                            <div class="col-md-4 g-pd">
                                                                <figure>
                                                                    <a href="./upload/tour-package/date/gallery/<?php echo $tour_date_photo["image_name"]; ?>" alt="<?php echo $tour_date_photo["title"]; ?>">
                                                                        <img src="./upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo["image_name"]; ?>" alt="<?php echo $tour_date_photo['caption']; ?>" title="vision lanka "/> 
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /Tour Tips Thumb End -->
                                    </div>

                                </div>

                                <?php
                            }
                            ?>
                            <div class="col-md-12">
                                <p>Hope you got some idea in this tour and you may allow to do necessary changes by contacting me.</p>
                                <div><i class="fa fa-envelope m-r5"></i>Email : <a href="mailto:visionlankatours@gmail.com">visionlankatours@gmail.com</a></div>
                                <div><i class="fa fa-whatsapp m-r5"></i>WhatsApp : <a href="tel:0094 777 85 59 85">0094 777 85 59 85</a></div>
                            </div>

                            <div><center><a href="contact.php"> <button type="submit" id="btnSubmit" class="btn-button btn-contact btn-1e">Contact Us<i class="fa fa-angle-double-right"></i></button></a></center></div>
                        </div>
                        <div class="it-br col-md-3 col-lg-3 col-sm-12 col-xs-12">
                            <div class="hidden-sm hidden-xs">
                                <div class="more-title text-center">
                                    <h3>More Packages</h3>
                                    <?php
                                    if ($VIEW_PACKAGE->type == 1) {
                                        $more_packages = $VIEW_PACKAGE->selectOneDayTours();
                                    } else {
                                        $more_packages = $VIEW_PACKAGE->selectRoundTours();
                                    }
                                    foreach ($more_packages as $key => $more_package) {
                                        if ($key < 7) {
                                            ?>
                                            <div class="col-md-12 more-item">
                                                <a href="view-one-day-tour-package.php?id=<?php echo $more_package["id"]; ?>">
                                                    <div class="col-md-3">
                                                        <img src="./upload/tour-package/<?php echo $more_package["image_name"]; ?>" alt="<?php echo $more_package["title"]; ?>"/>
                                                    </div>
                                                    <div class="col-md-9">

                                                        <h4><?php echo $more_package["title"]; ?></h4>

                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="it-br hidden-lg hidden-md">
                                <div class="col-md-12">
                                    <div class="sidebar widget popular-categories wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;padding-top: 20px;">

                                        <div class="sidebar-widget category-posts">
                                            <div class="main-title-2">
                                                <div class="sidebar-title"><h3>More Packages</h3></div>
                                            </div>
                                            <ul class="list-unstyled list-cat">
                                                <?php
                                                if ($VIEW_PACKAGE->type == 1) {
                                                    $more_packages = $VIEW_PACKAGE->selectOneDayTours();
                                                } else {
                                                    $more_packages = $VIEW_PACKAGE->selectRoundTours();
                                                }
                                                foreach ($more_packages as $more_package) {
                                                    ?>

                                                    <li><a href="view-one-day-tour-package.php?id=<?php echo $more_package["id"]; ?>"><?php echo $more_package["title"]; ?></a></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <ul class="list">






                                            <!--                                            
                                                                                            <div class="w3-container w3-pale-blue w3-leftbar w3-border-blue">
                                                                                              <a href=""></a>
                                                                                            </div>-->


                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- / Container -->
            </div><!-- /Blog Grid Section -->

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
        <script src="simple-light-box/simple-lightbox.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>

        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>

<!--        <script src="js/accordion.js" type="text/javascript"></script>-->
        <script>
            $('.tour-owl').owlCarousel({
                loop: true,
                margin: 0,
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
                        items: 0
                    }
                }
            });

        </script>
    </body>
</html>