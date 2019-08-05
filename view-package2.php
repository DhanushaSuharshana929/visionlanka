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
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style-4.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon.png">
        <link href="simple-light-box/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style_2.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
            .inclusion-box{
                background: #c4c4c4;
                padding:30px;
                margin-top: 30px;
                margin-bottom: 30px;
            }
            .inclusion-box h4{
                color:#000;
                font-size: 30px;
            }
            .inclusion-box ol li {

                display: block;
                color:#5b82bd;
                list-style : disc;
                line-height: 30px;
            }
            .inclusion-box ol li i{
                margin-right: 10px;
            }
            .simple-accordian{
                margin-bottom: 50px;
            }
            .day-tours{
                width: auto;
                height: auto;
                border-bottom: 1px solid #245269;
                margin-bottom: 15px;

            }

            .day-description{
                width: auto;
                height: auto; 
                margin-bottom: 15px;
            }

            .day-description ul{
                line-height: 25px;
                list-style: square;
            }

            .more-description{
                width: auto;
                height: auto;
                padding: 10px 0;
                margin: 0 0 25px 0;
            }
            .more-description i{ 
                margin-right: 8px; 
            }
            .day-photos{
                width: auto;
                height: auto; 
                margin-bottom: 15px;
            }
            .maxlinetitle{
                width: 100%;
                height: auto;
                color: #333;
                font-size: 22px; 
                display: inline-block; 
                padding: 10px 0;
                margin: 0;
                overflow: hidden !important;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            .map-container {
                width: 100%; 
            }
            .map-container iframe{
                width: 100%;
                display: block;
                pointer-events: none;
                position: relative; /* IE needs a position other than static */
            }
            .map-container iframe.clicked{
                pointer-events: auto;
            }
            .pack-day{
                width: auto;
                height: auto;
                position: absolute;
                padding: 10px 15px; 
                top: 15px;
                left: 30px;
                color: #fff;
                border-radius: 50%;
                background-color: #F05527;
            }
            .pack-dayh{
                width: auto;
                height: auto;
                position: absolute;
                padding: 10px 15px; 
                top: 50px;
                left: 50px;
                color: #fff;
                border-radius: 50%;
                background-color: #F05527;
            }
            .pack-img{
                width: auto;
                height: auto;
                padding: 10px 0;
            }
            .pack-data p{
                padding: 10px 0;
            }

        </style>
    </head>
    <body>
        
        
        
        
        
           
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
                                            <div class="col-md-12">
                                                <div class="text text-tour">
                                                    <?php echo $tour_date["description"]; ?>
                                                </div>
                                                <div class="">
                                                <img src="images/about-layer.png">
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


        <div  class="main">

            <?php include './header.php'; ?>
            <div class="sub-banner  mg-bottom-50" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <?php
                    if ($TOUR_PACKAGE_MORE_OBJ->type == 1) {
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
            <div class="section mg-bottom-50 mg-top-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9 hidden-sm hidden-xs">
                            <?php
                            $TOUR_DATE = $TOUR_DATE_OBJ->getTourDatesById($id);
                            foreach ($TOUR_DATE as $tour_date) {
                                ?>
                                <div class="simple-accordian">
                                    <div class="accordion font-26 " ><?php echo $tour_date["title"]; ?></div>
                                    <div class="accordion-content">
                                        <!-- Tour Tips Thumb Start -->
                                        <div class="thinn-tour-tips">
                                            <div class="">
                                                <?php
                                                $DateId = $tour_date['id'];
                                                $TOUR_DATE_PHOTO = $TOUR_DATE_PHOTOS_OBJ->getTourDatePhotosById($DateId);
                                                foreach ($TOUR_DATE_PHOTO as $key => $tour_date_photo) {
                                                    if ($key < 3) {
                                                        ?>
                                                        <div class="col-md-4 g-pd">
                                                            <figure>
                                                                <a href="./upload/tour-package/date/gallery/<?php echo $tour_date_photo["image_name"]; ?>" alt="<?php echo $tour_date_photo["title"]; ?>">
                                                                    <img src="./upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo["image_name"]; ?>"> 
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text">
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

                            <div class="inclusion-box">
                                <h4>Inclusion  </h4>
                                <ol class="l-stl">
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                </ol>
                                <h4>Exclusion  </h4>
                                <ol class="l-stl">
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                    <li><i class="fa fa-arrows"></i>Lorem Ipsum, giving information on its origins</li>
                                </ol>

                            </div>
                            <div class="col-md-12">
                                <div class="gallery">

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                    <div class="col-md-3 gp">
                                        <a href="images/attraction/1.jpg" class="big" >
                                            <img src="images/attraction/1.jpg" alt="vision lanka" title="vision lanka "/></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
                            <?php
                            $TOUR_DATE = $TOUR_DATE_OBJ->getTourDatesById($id);
                            foreach ($TOUR_DATE as $tour_date) {
                                ?>
                                <div class="simple-accordian">
                                    <div class="accordion font-26 " ><?php echo $tour_date["title"]; ?></div>
                                    <div class="accordion-content">
                                        <!-- Tour Tips Thumb Start -->
                                        <div class="thinn-tour-tips">
                                            <div class="">
                                                <div class="tour-owl owl-carousel owl-theme">
                                                    <?php
                                                    $DateId = $tour_date['id'];
                                                    $TOUR_DATE_PHOTO = $TOUR_DATE_PHOTOS_OBJ->getTourDatePhotosById($DateId);
                                                    foreach ($TOUR_DATE_PHOTO as $tour_date_photo) {
                                                        ?>
                                                        <div class="item col-md-4 g-pd">
                                                            <figure>
                                                                <a href="./upload/tour-package/date/gallery/<?php echo $tour_date_photo["image_name"]; ?>" alt="<?php echo $tour_date_photo["title"]; ?>">
                                                                    <img src="./upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo["image_name"]; ?>"> 
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text">
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
                        </div>
                        <div class="col-md-9">
                            <div class="day-tours">
                                <div class="col-md-12">
                                    <div class="day-tours">
                                        <h3> Day 01: Colombo to Dambulla </h3>
                                    </div>


                                    <div class="day-description text-justify">
                                        <p>Pick up from Bandaranayake International Airport</p>
                                        <ul>
                                            <li>Sigiriya Lion Rock</li>
                                            <li>Dambulla Cave Temple</li>
                                            <li>Elephant Riding</li>
                                            <li>Overnight at Dambulla / Sigiriya</li>
                                        </ul>
                                        <p>&nbsp;Colombo to Dambulla</p>
                                        <p style="text-align: justify;">At the arrival of Airport our professional chauffer will warmly welcome you and will be brought to the final destination to Dambulla. Prime destination is Dambulla where kept ancient ruins safely with also huge tourist attractions. In Dambulla can visit cave arts which made over thousands of years. Not even that visit one of remarkable rock fort called Sigiriya. Nevertheless having adventurous blended superb Elephant Back Ride will be main attractions.&nbsp;</p> 
                                    </div>


                                    <script>
                                        $(document).ready(function () {


                                            $("#readMore_18").click(function () {
                                                $("#readMore_18").hide();
                                                $("#readLess_18").show();

                                            });
                                            $("#readLess_18").click(function () {
                                                $("#readMore_18").show();
                                                $("#readLess_18").hide();
                                            });

                                            $("#readMore_18").click(function () {
                                                $('#readLess_18').removeClass('hidden');
                                            });

                                            $("#readMore_18").click(function () {
                                                $('#longDescription_18').removeClass('hidden');
                                            });


                                            $("#readMore_18").click(function () {
                                                $("#longDescription_18").slideDown();
                                            });

                                            $("#readLess_18").click(function () {
                                                $("#longDescription_18").slideUp();
                                            });


                                        });
                                    </script>



                                    <div class="more-description">
                                        <button class="btn btn-info" id="readMore_18"><i class="fa fa-angle-double-down  "></i>Read More</button>
                                        <button class="btn btn-info hidden" id="readLess_18"><i class="fa fa-angle-double-up  "></i>Read Less</button>
                                    </div>

                                    <div id="longDescription_18" class="day-description text-justify hidden" style="margin-bottom: 15px;">
                                        <p style="text-align: justify;"><strong>Dambulla </strong></p>
                                        <p style="text-align: justify;">Well-known rural town which located in middle of Central Province. On the other hand small town is one of economically hub for transferring the vegetable around the country also it is called non-sleeping town due to gather thousands of traders for buying or selling their vegetable. This great city also well-known as well preserved cave temple with cave arts that safely secured in this land. Within a short time can reach to another location called Rose Quartz and iron wood forest. Ibbankatua a close place to Dambulla where prehistoric burial site where presence of indigenous civilizations evidence kept greatly in this tropical land. Not even that there is International Cricket Playground which built on 167 days. Also there are many tourist attractions listed in this great land such like Bullock cart journey, Elephant Back ride are some of them. Not even that hot air ballooning became other major attractions in Dambulla for having great tourist expedition.</p>
                                        <p style="text-align: justify;"><strong>Dambulla Cave Temple </strong></p>
                                        <p style="text-align: justify;">One of well-preserved cave arts found in Dambulla the temple was built by King Walagambha in 01<sup>st</sup> Century BCE, according to his views and instructions those caves converted to a Buddhist Temple. This great creation abundance of valuable materials in ancient time and can find 153 Buddhist images with 03 kings and also some god and goddess. Visiting this great place one of a unique experience for visitors because it shows the finest era of the ancient art. There are major caves in the temple which hold Buddhist Shrines. Recently this also nominated as world heritage site. Ancient sculptors able to make tremendous moments of Lord Budda still remain safely in this great land and the paintings they were made still unbelievable in the rough rock surface.</p>
                                        <p style="text-align: justify;">&nbsp;</p>
                                        <p style="text-align: justify;"><strong>Sigiriya &ldquo;Lion Rock&rdquo;</strong></p>
                                        <p style="text-align: justify;">Tremendous man made creation by ancient Ceylonese called Sigiriya or known as &ldquo;Lion Rock&rdquo; now became World Heritage city. The structure still mystery to discover and have planned everything. The paintings are truly remarkable this is also cave paintings still remain in good condition. The mirror wall nestled to many poems which written by the Ceylonese who visited this amazing place. On plateau can find gateway to the enormous lion and the paints with were perfectly made color separation. Lion rock is an iconic symbol of Sri Lanka. In late time this was developed as Buddhist Temple and still remain where Buddhist Monks were done meditation. The museum and the Pidurangala temple shows the great historic evidence. Fully completely developed irrigation system still a mystery and could not discover yet. The fonts and other things still workings when it raining time</p>
                                        <p style="text-align: justify;">&nbsp;</p>
                                        <p style="text-align: justify;"><strong>Elephant back ride </strong></p>
                                        <p style="text-align: justify;">An incredible with extraordinary travel experience is having back ride of Elephant in Sri Lanka. This ride will be a great opportunity to peep very close to majestic creature while enjoy the surroundings. Nevertheless it helps to explore wildlife, traditional lifestyle in rural villages even it is great to observe the surrounding closely. Well tamed elephants use for this rides and elephant accompanied by the mahout. A well-made wooden saddle will carry passengers safely with comfortable. An unforgettable journey makes for you ever can have. In Dambulla or Habarana are most common places for Elephant Ride.</p> 
                                    </div>


                                    <div class="widget-gallery-grid day-photos">
                                        <div class="row">




                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>





                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>





                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>





                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>




                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="day-tours">
                                <div class="col-md-12">
                                    <div class="day-tours">
                                        <h3> Day 01: Colombo to Dambulla </h3>
                                    </div>


                                    <div class="day-description text-justify">
                                        <p>Pick up from Bandaranayake International Airport</p>
                                        <ul>
                                            <li>Sigiriya Lion Rock</li>
                                            <li>Dambulla Cave Temple</li>
                                            <li>Elephant Riding</li>
                                            <li>Overnight at Dambulla / Sigiriya</li>
                                        </ul>
                                        <p>&nbsp;Colombo to Dambulla</p>
                                        <p style="text-align: justify;">At the arrival of Airport our professional chauffer will warmly welcome you and will be brought to the final destination to Dambulla. Prime destination is Dambulla where kept ancient ruins safely with also huge tourist attractions. In Dambulla can visit cave arts which made over thousands of years. Not even that visit one of remarkable rock fort called Sigiriya. Nevertheless having adventurous blended superb Elephant Back Ride will be main attractions.&nbsp;</p> 
                                    </div>


                                    <script>
                                        $(document).ready(function () {


                                            $("#readMore_2").click(function () {
                                                $("#readMore_2").hide();
                                                $("#readLess_2").show();

                                            });
                                            $("#readLess_2").click(function () {
                                                $("#readMore_2").show();
                                                $("#readLess_2").hide();
                                            });

                                            $("#readMore_2").click(function () {
                                                $('#readLess_2').removeClass('hidden');
                                            });

                                            $("#readMore_2").click(function () {
                                                $('#longDescription_2').removeClass('hidden');
                                            });


                                            $("#readMore_2").click(function () {
                                                $("#longDescription_2").slideDown();
                                            });

                                            $("#readLess_2").click(function () {
                                                $("#longDescription_2").slideUp();
                                            });


                                        });
                                    </script>



                                    <div class="more-description">
                                        <button class="btn btn-info" id="readMore_2"><i class="fa fa-angle-double-down  "></i>Read More</button>
                                        <button class="btn btn-info hidden" id="readLess_2"><i class="fa fa-angle-double-up  "></i>Read Less</button>
                                    </div>

                                    <div id="longDescription_2" class="day-description text-justify hidden" style="margin-bottom: 15px;">
                                        <p style="text-align: justify;"><strong>Dambulla </strong></p>
                                        <p style="text-align: justify;">Well-known rural town which located in middle of Central Province. On the other hand small town is one of economically hub for transferring the vegetable around the country also it is called non-sleeping town due to gather thousands of traders for buying or selling their vegetable. This great city also well-known as well preserved cave temple with cave arts that safely secured in this land. Within a short time can reach to another location called Rose Quartz and iron wood forest. Ibbankatua a close place to Dambulla where prehistoric burial site where presence of indigenous civilizations evidence kept greatly in this tropical land. Not even that there is International Cricket Playground which built on 167 days. Also there are many tourist attractions listed in this great land such like Bullock cart journey, Elephant Back ride are some of them. Not even that hot air ballooning became other major attractions in Dambulla for having great tourist expedition.</p>
                                        <p style="text-align: justify;"><strong>Dambulla Cave Temple </strong></p>
                                        <p style="text-align: justify;">One of well-preserved cave arts found in Dambulla the temple was built by King Walagambha in 01<sup>st</sup> Century BCE, according to his views and instructions those caves converted to a Buddhist Temple. This great creation abundance of valuable materials in ancient time and can find 153 Buddhist images with 03 kings and also some god and goddess. Visiting this great place one of a unique experience for visitors because it shows the finest era of the ancient art. There are major caves in the temple which hold Buddhist Shrines. Recently this also nominated as world heritage site. Ancient sculptors able to make tremendous moments of Lord Budda still remain safely in this great land and the paintings they were made still unbelievable in the rough rock surface.</p>
                                        <p style="text-align: justify;">&nbsp;</p>
                                        <p style="text-align: justify;"><strong>Sigiriya &ldquo;Lion Rock&rdquo;</strong></p>
                                        <p style="text-align: justify;">Tremendous man made creation by ancient Ceylonese called Sigiriya or known as &ldquo;Lion Rock&rdquo; now became World Heritage city. The structure still mystery to discover and have planned everything. The paintings are truly remarkable this is also cave paintings still remain in good condition. The mirror wall nestled to many poems which written by the Ceylonese who visited this amazing place. On plateau can find gateway to the enormous lion and the paints with were perfectly made color separation. Lion rock is an iconic symbol of Sri Lanka. In late time this was developed as Buddhist Temple and still remain where Buddhist Monks were done meditation. The museum and the Pidurangala temple shows the great historic evidence. Fully completely developed irrigation system still a mystery and could not discover yet. The fonts and other things still workings when it raining time</p>
                                        <p style="text-align: justify;">&nbsp;</p>
                                        <p style="text-align: justify;"><strong>Elephant back ride </strong></p>
                                        <p style="text-align: justify;">An incredible with extraordinary travel experience is having back ride of Elephant in Sri Lanka. This ride will be a great opportunity to peep very close to majestic creature while enjoy the surroundings. Nevertheless it helps to explore wildlife, traditional lifestyle in rural villages even it is great to observe the surrounding closely. Well tamed elephants use for this rides and elephant accompanied by the mahout. A well-made wooden saddle will carry passengers safely with comfortable. An unforgettable journey makes for you ever can have. In Dambulla or Habarana are most common places for Elephant Ride.</p> 
                                    </div>


                                    <div class="widget-gallery-grid day-photos">
                                        <div class="row">




                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>





                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>





                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>





                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item rooms">
                                                <div class="gallery-item">
                                                    <a href="images/attraction/1.jpg" data-background="images/attraction/1.jpg" title="Photo Name" class="popup-gallery"></a>
                                                </div>
                                            </div>




                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 it-br">

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
                                                <h4><?php echo substr($more_package["title"], 0, 12) . '...'; ?></h4>
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