



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
        <meta name="description" content="Sri Lanka is small miracle island but has wide variety of geography. Attractive gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
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

    </head>
    <body>

        <div  class="main">

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
            <div id="tour" class="section mg-bottom-50 mg-top-50 mg-top-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9 hidden-sm hidden-xs">
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
                                            <div class="col-md-12">
                                                <div class="text text-tour">
                                                    <?php echo $tour_date["description"]; ?>
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
                                <p><i>Hope you got some idea in this tour and you may allow to do necessary changes by contacting me.</i></p>
                                <div><i class="fa fa-envelope m-r5"></i>Email Address: <a href="mailto:visionlankatours@gmail.com">visionlankatours@gmail.com</a></div>
                                <div><i class="fa fa-whatsapp m-r5"></i>WhatsApp Number: <a href="tel:0094 777 85 59 85">0094 777 85 59 85</a></div>
                            </div>
                            <div><center><a href="contact.php"><button class="btn btn-info" style="margin-top: 25px;">Contact Us <i class="fa fa-angle-double-right"></i></button></a></center></div>
                        </div>
                        <div class="col-sm-12 col-xs-12 mg-bottom-30 hidden-md hidden-lg">
                            <?php
                            $TOUR_DATE = $TOUR_DATE_OBJ->getTourDatesById($id);
                            foreach ($TOUR_DATE as $tour_date) {
                                ?>
                                <div class="simple-accordian">
                                    <div class="accordion font-26 " ><?php echo $tour_date["title"]; ?></div>
                                    <div class="accordion-content">
                                        <!-- Tour Tips Thumb Start -->
                                        <div class="thinn-tour-tips">
                                         
                                            <div class="col-md-12">
                                                <div class="text text-tour">
                                                    <?php echo $tour_date["description"]; ?>
                                                </div>
                                            </div>



                                        </div>
                                        <!-- /Tour Tips Thumb End -->
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                            <p><i>Hope you got some idea in this tour and you may allow to do necessary changes by contacting me.</i></p>
                            <div><i class="fa fa-envelope m-r5"></i>Email Address: <a href="mailto:visionlankatours@gmail.com">visionlankatours@gmail.com</a></div>
                            <div><i class="fa fa-whatsapp m-r5"></i>WhatsApp Number: <a href="tel:0094 777 85 59 85">0094 777 85 59 85</a></div>
                            <div><center><a href="contact.php"><button class="btn btn-info" style="margin-top: 25px;">Contact Us <i class="fa fa-angle-double-right"></i></button></a></center></div>
                        </div>
                        <div class="col-md-3 it-br hidden-xs hidden-sm">

                            <div class="more-title text-center">
                                <h3>More Packages</h3>
                            </div>
                            <?php
                            if ($VIEW_PACKAGE->type == 1) {
                                $more_packages = $VIEW_PACKAGE->selectOneDayTours();
                            } else {
                                $more_packages = $VIEW_PACKAGE->selectRoundTours();
                            }
                            foreach ($more_packages as $key => $more_package) {
                                if ($key < 5) {
                                    ?>
                                    <div class="col-md-12 more-item">
                                        <a href="view-package.php?id=<?php echo $more_package["id"]; ?>">
                                            <div class="col-md-5">
                                                <img src="./upload/tour-package/<?php echo $more_package["image_name"]; ?>" alt="<?php echo $more_package["title"]; ?>"/>
                                            </div>
                                            <div class="col-md-7">
                                                <?php
                                                $letters = strlen($more_package["title"]);
                                                if ($letters > 15) {
                                                    ?>
                                                    <h4><?php echo substr($more_package["title"], 0, 12) . '...'; ?></h4>
                                                    <p><small><?php echo substr($more_package["description"], 0, 70) . '...'; ?></small></p>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <h4><?php echo $more_package["title"]; ?></h4>
                                                    <p><small><?php echo substr($more_package["description"], 0, 70) . '...'; ?></small></p>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="col-md-3 it-br hidden-lg">

                            <div class="more-title text-center">
                                <h3>More Packages</h3>
                            </div>
                            <?php
                            if ($VIEW_PACKAGE->type == 1) {
                                $more_packages = $VIEW_PACKAGE->selectOneDayTours();
                            } else {
                                $more_packages = $VIEW_PACKAGE->selectRoundTours();
                            }
                            foreach ($more_packages as $key => $more_package) {
                                if ($key < 5) {
                                    ?>
                                    <div class="col-md-12 more-item">
                                        <a href="view-package.php?id=<?php echo $more_package["id"]; ?>">
                                            <div class="col-md-5">
                                                <img src="./upload/tour-package/<?php echo $more_package["image_name"]; ?>" alt="<?php echo $more_package["title"]; ?>"/>
                                            </div>
                                            <div class="col-md-7">
                                                <h4><?php echo $more_package["title"]; ?></h4>
                                                <p><small><?php echo substr($more_package["description"], 0, 70) . '...'; ?></small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
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
                        items: 0
                    }
                }
            });

        </script>
    </body>
</html>