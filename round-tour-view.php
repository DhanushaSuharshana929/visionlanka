<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$VIEW_PACKAGE = new TourPackage($id);
$TOUR_PACKAGE_MORE_OBJ = new TourPackage(null);
$TOUR_DATE_OBJ = new TourDate(NULL);
$TOUR_DATE_PHOTOS_OBJ = new TourDatePhoto(NULL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour Package | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Gadugi" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Franklin Gothic Demi Cond" rel="stylesheet"> 
        <style>
            .more-description{
                width: auto;
                height: auto;
                padding: 10px 0;
                margin: 0 0 25px 0;
                z-index: 9;
                position : relative;
            }
            .more-description i{ 
                margin-right: 8px; 
            }
        </style>
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
            <div class="section mg-bottom-50 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="simple-accordian">
                                <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
                                    <div><h2><?php echo $VIEW_PACKAGE->sub_title; ?> (<?php echo str_replace("/", "&", $VIEW_PACKAGE->day); ?>)</h2></div>
                                    <div><h3><?php echo $VIEW_PACKAGE->title; ?></h3></div>
                                    <div class="accordion-content">
                                        <!-- Tour Tips Thumb Start -->
                                        <div class="thinn-tour-tips" style="margin-top: -40px">
                                            <div class="col-md-12">
                                                <div class="text text-tour">
                                                    Programme - <?php echo $VIEW_PACKAGE->highlights; ?> <br/>
                                                    Duration - <?php echo $VIEW_PACKAGE->day; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs">
                                    <img src="upload/tour-package/sub-image/<?php echo $VIEW_PACKAGE->sub_image; ?>" alt="vision lanka tours" width="90%" style="margin-top: 50%;"/>
                                </div>
                            </div>
                            <div class="simple-accordian tour-inner-top">
                                <?php
                                if (count($TOUR_DATE_OBJ->getTourDatesById($id)) > 0) {
                                    foreach ($TOUR_DATE_OBJ->getTourDatesById($id) as $tourDay) {
                                        ?>
                                        <div>

                                            <div class="accordion-title font-26 tour-content-top"> <?php echo $tourDay['title']; ?> </div>
                                            <hr/>
                                            <div class="accordion-content tour-content-margin">
                                                <!-- Tour Tips Thumb Start -->
                                                <div class="thinn-tour-tips">
                                                    <div class="">
                                                        <div class="text text-tour">
                                                            <?Php echo $tourDay["summery"] ?>
                                                        </div>

                                                        <script>
                                                            $(document).ready(function () {


                                                                $("#readMore_<?php echo $tourDay['id']; ?>").click(function () {
                                                                    $("#readMore_<?php echo $tourDay['id']; ?>").hide();
                                                                    $("#readLess_<?php echo $tourDay['id']; ?>").show();

                                                                });
                                                                $("#readLess_<?php echo $tourDay['id']; ?>").click(function () {
                                                                    $("#readMore_<?php echo $tourDay['id']; ?>").show();
                                                                    $("#readLess_<?php echo $tourDay['id']; ?>").hide();
                                                                });

                                                                $("#readMore_<?php echo $tourDay['id']; ?>").click(function () {
                                                                    $('#readLess_<?php echo $tourDay['id']; ?>').removeClass('hidden');
                                                                });

                                                                $("#readMore_<?php echo $tourDay['id']; ?>").click(function () {
                                                                    $('#longDescription_<?php echo $tourDay['id']; ?>').removeClass('hidden');
                                                                });


                                                                $("#readMore_<?php echo $tourDay['id']; ?>").click(function () {
                                                                    $("#longDescription_<?php echo $tourDay['id']; ?>").slideDown();
                                                                });

                                                                $("#readLess_<?php echo $tourDay['id']; ?>").click(function () {
                                                                    $("#longDescription_<?php echo $tourDay['id']; ?>").slideUp();
                                                                });


                                                            });
                                                        </script>

                                                        <div class="more-description">
                                                            <button class="btn btn-info" id="readMore_<?php echo $tourDay['id']; ?>"><i class="fa fa-angle-double-down  "></i>Read More</button>
                                                            <button class="btn btn-info hidden" id="readLess_<?php echo $tourDay['id']; ?>"><i class="fa fa-angle-double-up  "></i>Read Less</button>
                                                        </div>

                                                        <div id="longDescription_<?php echo $tourDay['id']; ?>" class="day-description text-justify hidden" style="margin-bottom: 15px;">
                                                            <?php echo $tourDay['description']; ?> 
                                                        </div>



                                                        <!--                                            
                                                        
                                                                                            <div class="more-description">
                                                                                                <button class="btn btn-info" id="readMore_18"><i class="fa fa-angle-double-down  "></i>Read More</button>
                                                                                                <button class="btn btn-info hidden" id="readLess_18"><i class="fa fa-angle-double-up  "></i>Read Less</button>
                                                                                            </div>-->


                                                                                                                                                                                <!--                                            <p>
                                                                                                                                                                                              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">See More</button>
                                                                                                                                                                                          </p>-->
                                                        <!--                                            <div class="row">
                                                                                                        <div class="col">
                                                                                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                                                                                <div class="card card-body">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <h3>Kandy</h3>
                                                                                                                        <p>Kandy is one of the most beautiful cities of Sri Lanka that is known for its scenic beauty and rich cultural value. Spread over an area of around 1940 square kilometers, it is counted amongst the world heritage sites of UNESCO. The city promises a number of tourist attractions that include the Old Royal Palace and the famous Temple of Tooth. The latter consists of the sacred relic of Buddhas tooth because of which Kandy is regarded as one of the most sacred places by Buddhists. Other holy spots include the Gadaladeniya Temple and the Lankathilake Temple.
                                                        
                                                                                                                            Kandy offers an exciting shopping experience with souvenirs ranging from precious stones and handmade laces to stone and wooden carvings. If you visit the city in the month of August, you can get a taste of Kandy Esala Perehera, an annual ritual of the Sacred Tooth Temple. Thus, your vacation can be an enriching and cultural uplifting one if you choose this sacred and beautiful city.</p>
                                                                                                                        <h3>Temple of Tooth</h3>
                                                                                                                        <p>Sri Dalada Maligawa, or Temple of the Tooth Relic, is the holiest Buddhist temple in Sri Lanka. It is located in the city of Kandy, the ancient capital of the Kandyan kingdom. During my visit to Kandy with a small group of AsiaExplorers members, I had the privilege not only to visit the temple, but also to enter the holy sanctuary. Our tour guide was able to arrange with the temple escort for us to be ushered to the inner sanctuary, a place where normal pilgrims would not have a chance to visit. Directly before us is the doorway to the holy of holies. However, as I am not a Buddhist, the visit is merely of cultural rather than religious value to me.</p>
                                                                                                                        <h3>Botanical Garden</h3>
                                                                                                                        <p>After the Royal Botanical Gardens at Peradeniya, Hakgala, 10km (6 miles) south of Nuwara Eliya, is the second most important garden in Sri Lanka. Though on a smaller scale than those at Peradeniya, Hakgala plantations of roses, shrubs, ferns and montage woodland are delightfully located, with scenic views. Above the gardens, a forest trail leads into virgin woodland - the home of a troop of purple-faced leaf monkeys, a species endemic to Sri Lanka, and to endemic bird species including the Sri Lanka white-eye, Sri Lanka wood pigeon, and Sri Lanka whistling thrush. Open daily from 07:30 to 17:00.</p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>-->
                                                    </div>
                                                </div>
                                                <!-- /Tour Tips Thumb End -->
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="gallery hidden-sm hidden-xs">
                                            <?php
                                            foreach ($TOUR_DATE_OBJ->getTourDatesById($id) as $key => $tourDay) {
                                                if ($key === 0) {
                                                    $TOUR_DATE_PHOTO = $TOUR_DATE_PHOTOS_OBJ->getTourDatePhotosById($tourDay['id']);
                                                    foreach ($TOUR_DATE_PHOTO as $tour_date_photo) {
                                                        ?>
                                                        <div class="col-md-3 gp">
                                                            <a href="upload/tour-package/date/gallery/<?php echo $tour_date_photo['image_name']; ?>" class="big" >
                                                                <img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo['image_name']; ?>" alt="<?php echo $tour_date_photo['caption']; ?>" title="<?php echo $tour_date_photo['caption']; ?>"/></a>
                                                        </div>             
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>

                                        <div class="hidden-lg hidden-md">
                                            <div class="row">

                                            </div>
                                            <div class="tour-owl owl-carousel owl-theme">
                                                <?php
                                                foreach ($TOUR_DATE_OBJ->getTourDatesById($id) as $key => $tourDay) {
                                                    if ($key === 0) {
                                                        $TOUR_DATE_PHOTO = $TOUR_DATE_PHOTOS_OBJ->getTourDatePhotosById($tourDay['id']);
                                                        foreach ($TOUR_DATE_PHOTO as $tour_date_photo) {
                                                            ?>
                                                            <div class="item col-md-4 g-pd">
                                                                <figure>
                                                                    <a href="./upload/tour-package/date/gallery/<?php echo $tour_date_photo["image_name"]; ?>" >
                                                                        <img src="./upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo["image_name"]; ?>" alt="<?php echo $tour_date_photo["title"]; ?>"> 
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>


                                    </div>




                                    <div class="simple-accordian" style="margin-top: 25px">
                                        <div class="accordion-content">
                                            <!-- Tour Tips Thumb Start -->
                                            <div class="thinn-tour-tips">
                                                <div class="col-md-12">
                                                    <div class="text text-tour">
                                                        <?php echo $VIEW_PACKAGE->short_description; ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <p>Hope you got some idea in this tour and you may allow to do necessary changes by contacting me.</p>
                                <div><i class="fa fa-envelope m-r5"></i>Email : <a href="mailto:visionlankatours@gmail.com">visionlankatours@gmail.com</a></div>
                                <div><i class="fa fa-whatsapp m-r5"></i>WhatsApp : <a href="tel:0094 777 85 59 85">0094 777 85 59 85</a></div>
                            </div>
                            <div><center><a href="contact.php"> <button type="submit"  id="btnSubmit" class="btn-button btn-contact btn-1e">Contact Us<i class="fa fa-angle-double-right"></i></button></a></center></div>
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
                                            <div class="col-md-12">
                                                <img src="./upload/tour-package/<?php echo $more_package["image_name"]; ?>" alt="<?php echo $more_package["title"]; ?>"/>
                                            </div>
                                            <div class="col-md-12">

                                                <h4><?php echo $more_package["title"]; ?></h4>

                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="col-md-3 it-br hidden-lg hidden-md">
                            <div class="col-md-12">
                                <div class="sidebar widget popular-categories wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;padding-top: 20px;">
                                    <div class="sidebar-title"><h3>More Packages</h3></div>

                                    <ul class="list">
                                        <?php
                                        if ($VIEW_PACKAGE->type == 1) {
                                            $more_packages = $VIEW_PACKAGE->selectOneDayTours();
                                        } else {
                                            $more_packages = $VIEW_PACKAGE->selectRoundTours();
                                        }
                                        foreach ($more_packages as $more_package) {
                                            ?>
                                            <li><a href="view-package.php?id=<?php echo $more_package["id"]; ?>"><?php echo $more_package["title"]; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>

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
            <div class="preloader"></div>
        </div>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>

        <script src="owl/owl.carousel.js" type="text/javascript"></script>

        <script src="js/magnific-popup.min.js" type="text/javascript"></script>

        <script src="js/imagesloaded.pkgd.js" type="text/javascript"></script>
        <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>

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
                        items: 1
                    }
                }
            });

        </script>
    </body>
</html>