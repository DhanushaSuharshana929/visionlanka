<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ATTRACTION_OBJ = new Attraction(null);
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
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are  gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
        <meta name="keywords" content="vision lanka tours, attraction in sri lanka,  destination in sri lanka, excursion in sri lanka, visit places in sri lanka ">

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
            <div class="sub-banner  mg-bottom-50 about-bottom-40" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">Attractions</li>
                </ol>
            </div>
            <section class="attractio-section ">
                <div class="container">
                    <div class="row">
                        <?php
                        $ATTRACTION = $ATTRACTION_OBJ->all();
                        foreach ($ATTRACTION as $key => $attraction) {
                            ?>
                            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
                                <div class="attraction">
                                    <div class="image-block">
                                        <img src="./upload/attraction/<?php echo $attraction["image_name"]; ?>" alt="<?php echo $attraction["title"]; ?>"/>
                                        <a href="view-attraction.php?id=<?php echo $attraction["id"]; ?>">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="dotted"></div><!-- /.dotted -->
                                                </div><!-- /.content -->
                                            </div><!-- /.box -->
                                        </div><!-- /.overlay -->
                                        </a>
                                    </div><!-- /.image-block -->
                                    <div class="text-block">
                                        <h3><a href="view-attraction.php?id=<?php echo $attraction["id"]; ?>"><?php echo $attraction["title"]; ?></a></h3>
                                        <?php echo substr($attraction["description"], 0, 115) . '.....'; ?>
                                        <a href="view-attraction.php?id=<?php echo $attraction["id"]; ?>" class="read-more">Read More</a>
                                    </div><!-- /.text-block -->
                                </div><!-- /.attraction -->
                            </div>
                            <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                                <div class="attraction">
                                    <div class="image-block">
                                        <img src="./upload/attraction/<?php echo $attraction["image_name"]; ?>" alt="<?php echo $attraction["title"]; ?>"/>
                                        <a href="view-attraction.php?id=<?php echo $attraction["id"]; ?>">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="dotted"></div><!-- /.dotted -->
                                                </div><!-- /.content -->
                                            </div><!-- /.box -->
                                        </div><!-- /.overlay -->
                                        </a>
                                         <div class="text-block">
                                        <h3><a href="view-attraction.php?id=<?php echo $attraction["id"]; ?>"><?php echo $attraction["title"]; ?></a></h3>
                                        <?php echo substr($attraction["description"], 0, 140) . '.....'; ?>
                                        <a href="view-attraction.php?id=<?php echo $attraction["id"]; ?>" class="read-more">Read More</a>
                                    </div><!-- /.text-block -->
                                    </div><!-- /.image-block -->
                                   
                                </div><!-- /.attraction -->
                            </div>
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