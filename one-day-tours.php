<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ONEDAYTOURS_OBJ = new TourPackage(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>One Day Tours | Vision Lanka Tours</title> 

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

            <div class="sub-banner  mg-bottom-50 about-bottom-30" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">One Day Tours</li>
                </ol>
            </div>
            <section class=" mg-bottom-50 ">
                <div class="container">
                    <div class="row">
                        <?php
                        $ONEDAYTOURS = $ONEDAYTOURS_OBJ->selectOneDayTours();
                        foreach ($ONEDAYTOURS as $key => $onedaytours) {
                            ?>
                         <a href="view-one-day-tour-package.php?id=<?php echo $onedaytours["id"]; ?>">
                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                                <div class="awesome-place-item overlay-5 hover_zoom mb-30"> 
                                 
                                    <div class="overflow_hidden">  
                                            <img src="./upload/tour-package/<?php echo $onedaytours["image_name"]; ?>" alt="<?php echo $onedaytours["title"]; ?>">    </div>
                                    <div class="upper-place-bottom-left text-white">
                                        <h4 class="fw-5 text-white"><?php echo $onedaytours["title"]; ?></h4>
                                       
                                        <div class="buttons-wrap">
                                            <button type="submit" class="c-button m-right b-60  bg-1"> 
                                                <i class="fa fa-hand-o-right">   view more</i>
                                               
                                            </button>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                         </a>
                            <?php
                        }
                        ?>
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
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>