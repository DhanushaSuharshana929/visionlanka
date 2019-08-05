<?php
include_once(dirname(__FILE__) . '/class/include.php');
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$ATTRACTION_OBJ = new Attraction($id);
$ATTRACTION_PHOTOS_OBJ = new AttractionPhoto(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Attractions | Vision Lanka Tours</title> 
        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
        <meta name="keywords" content="vision lanka tours, attraction in sri lanka,  destination in sri lanka, excursion in sri lanka, visit places in sri lanka ">

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
                    <li class="breadcrumb-item "><a href="attraction.php">Attractions</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active"><?php echo $ATTRACTION_OBJ->title; ?></li>
                </ol>
            </div>
            <div id="tour" class="section mg-bottom-50 mg-top-80">
                <div class="container">
                    <div class="">


                        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">

                            <div id="view-attraction" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#view-attraction" data-slide-to="0" class="active"></li>
                                    <li data-target="#view-attraction" data-slide-to="1"></li>
                                    <li data-target="#view-attraction" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <?php
                                    $ATTRACTION_PHOTOS = $ATTRACTION_PHOTOS_OBJ->getAttractionPhotosById($id);
                                    foreach ($ATTRACTION_PHOTOS as $key => $photos) {
                                        if ($key < 3) {
                                            
                                        }
                                        if ($key === 1) {
                                            ?>
                                            <div class="item active">
                                                <img src="./upload/attraction/gallery/<?php echo $photos["image_name"]; ?>" alt="<?php echo $photos["title"]; ?>" >
                                            </div>

                                            <?php
                                        } else {
                                            ?>
                                            <div class="item">
                                                <img src="./upload/attraction/gallery/<?php echo $photos["image_name"]; ?>" alt="<?php echo $photos["title"]; ?>" >
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>

                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control slider-left" href="#view-attraction" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control slider-right" href="#view-attraction" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>  
                            <div class="entry-body">
                                <h3><?php echo $ATTRACTION_OBJ->title; ?>   </h3>
                                <?php echo $ATTRACTION_OBJ->description; ?>  
                            </div>

                        </div>
                        <div class="it-br col-md-3 col-lg-3 col-sm-12 col-xs-12">
                            <div class="hidden-sm hidden-xs">
                                <div class="more-title text-center">
                                    <div class="more-title text-center">
                                        <h3>More Activities</h3>
                                    </div>
                                    <?php
                                    $MORE_ATTRACTION = $ATTRACTION_OBJ->all();
                                    foreach ($MORE_ATTRACTION as $key => $more_attraction) {
                                        if ($key < 7) {
                                            ?>
                                            <div class="col-md-12 more-item1">
                                                <a href="view-attraction.php?id=<?php echo $more_attraction["id"]; ?>">
                                                    <div class="col-md-5">
                                                        <img class="view-side-img" src="./upload/attraction/<?php echo $more_attraction["image_name"]; ?>" alt="<?php echo $more_attraction["title"]; ?>"/>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <h4 class="more-side-title"><?php echo $more_attraction["title"]; ?></h4>

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
                                                <div class="sidebar-title"><h3>More Attractions</h3></div>
                                            </div>
                                            <ul class="list-unstyled list-cat">
                                                <?php
                                                $MORE_ATTRACTION = $ATTRACTION_OBJ->all();
                                                foreach ($MORE_ATTRACTION as $key => $more_attraction) {
                                                    ?>

                                                    <li><a href="view-attraction.php?id=<?php echo $more_attraction["id"]; ?>"><?php echo $more_attraction["title"]; ?></a></li>
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