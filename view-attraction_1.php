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
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
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

    </head>
    <body>

        <div  class="main">

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
            <section class="attractio-section mg-top-50 mg-bottom-50 mg-top-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
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
                        <div class="col-md-3 it-br hidden-xs hidden-sm">
                            <div class="more-title text-center">
                                <h3>More Attractions</h3>
                            </div>
                            <?php
                            $MORE_ATTRACTION = $ATTRACTION_OBJ->all();
                            foreach ($MORE_ATTRACTION as $key => $more_attraction) {
                                if ($key < 5) {
                                    ?>
                                    <div class="col-md-12 more-item">
                                        <a href="view-attraction.php?id=<?php echo $more_attraction["id"]; ?>">
                                            <div class="col-md-5">
                                                <img src="./upload/attraction/<?php echo $more_attraction["image_name"]; ?>" alt="<?php echo $more_attraction["title"]; ?>"/>
                                            </div>
                                            <div class="col-md-7">
                                                <?php
                                                $letters = strlen($more_attraction["title"]);
                                                if ($letters > 20) {
                                                    ?>
                                                    <h4><?php echo substr($more_attraction["title"], 0, 15) . '....'; ?></h4>
                                                    <p><small><?php echo substr($more_attraction["description"], 0, 55) . '...'; ?></small></p>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <h4><?php echo $more_attraction["title"]; ?></h4>
                                                    <p><small><?php echo substr($more_attraction["description"], 0, 55) . '...'; ?></small></p>
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
                                <h3>More Attractions</h3>
                            </div>
                            <?php
                            $MORE_ATTRACTION = $ATTRACTION_OBJ->all();
                            foreach ($MORE_ATTRACTION as $key => $more_attraction) {
                                if ($key < 5) {
                                    ?>
                                    <div class="col-md-12 more-item">
                                        <a href="view-attraction.php?id=<?php echo $more_attraction["id"]; ?>">
                                            <div class="col-md-5">
                                                <img src="./upload/attraction/<?php echo $more_attraction["image_name"]; ?>" alt="<?php echo $more_attraction["title"]; ?>"/>
                                            </div>
                                            <div class="col-md-7">
                                                <h4><?php echo $more_attraction["title"]; ?></h4>
                                                <p><small><?php echo substr($more_attraction["description"], 0, 55) . '...'; ?></small></p>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

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
 <div class="preloader"></div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>