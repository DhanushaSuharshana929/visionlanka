<?php
include_once(dirname(__FILE__) . '/class/include.php');
$SERVICE_OBJ = new Service(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Services | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country."/>
        <meta name="keywords" content="vision lanka tours, airport transfer, airport transfer in sri lanka, airport drop off, airport pickup, tour arrange, hotel booking ,  hotel booking in sri lanka, accommodation in sri lanka">

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
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
            <section class="service-section mg-bottom-50">
                <div class="service-sec pt-100 pb-70 bg-light-gray">
                    <div class="container">				
                        <div class="row">			
                            <div class="service-item">
                                <?php
                                $SERVICE = $SERVICE_OBJ->all();
                                foreach ($SERVICE as $key => $service) {
                                    ?>
                                    <div class="col-md-4 col-sm-6 inner">
                                        <div class="media">
                                            <div class="service-thumb">
                                                <img src="./upload/service/<?php echo $service["image_name"]; ?>" alt="<?php echo $service["title"]; ?>"/>
                                                <div class="service-icon"></div>								
                                            </div>
                                            <div class="service-inner-text">
                                                <div class="service-inner-content">
                                                    <div class="media-left">
                                                        <div class="service_icon">
                                                            <i class="icofont-vehicle-wrecking"></i>
                                                        </div>
                                                    </div>							
                                                    <div class="media-body">
                                                        <h2><a href="#service"><?php echo $service["title"]; ?></a></h2>
                                                    </div>	
                                                    <?php echo $service["description"]; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>			
                                    <?php
                                }
                                ?>
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
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>