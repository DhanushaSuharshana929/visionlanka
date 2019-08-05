<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ABOUT_SRILANKA = new Page(7);
$ABOUT_SRILANKA_2 = new Page(4);
$ABOUT_SRILANKA_3 = new Page(5);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sri Lanka | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="" http-equiv="description" />
        <meta name="keywords" content="">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">

    </head>
    <body>

        <div  class="main">

            <?php include './header.php'; ?>
            <div class="sub-banner  mg-bottom-50" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">About Sri Lanka</li>
                </ol>
            </div>
            <section class="about-srilanaka-section mg-top-40 mg-bottom-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $ABOUT_SRILANKA->description; ?>
                           
                          
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                             <h5 class="title font-24">
                               <?php echo $ABOUT_SRILANKA_2->title; ?> 
                            </h5>
                             <?php echo $ABOUT_SRILANKA_2->description; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                               <h5 class="title font-24">
                               <?php echo $ABOUT_SRILANKA_3->title; ?> 
                            </h5>
                               <?php echo $ABOUT_SRILANKA_3->description; ?>
                        </div>
                    </div>
                    <div class="mg-top-20">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Blog Thumb Start -->
                                <div class="thinn-blog-thumb thinn-news thinn-blog-list ">
                                    <div class="col-md-6  thinn-blog-1">
                                        <figure>
                                            <img src="images/about-srilanka/1.jpg" alt=""> 
                                        </figure>
                                    </div>
                                    <div class="col-md-6 thinn-blog-2">
                                        <div class="text">
                                            <h5 class="title font-24"><a href=""><?php echo $ABOUT_SRILANKA_2->title; ?></a></h5>
                                            <?php echo $ABOUT_SRILANKA_2->description; ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="thinn-blog-thumb thinn-news thinn-blog-list">
                                    <div class="col-md-6 thinn-blog-2">
                                        <div class="text">
                                            <h5 class="title font-24"><a href=""><?php echo $ABOUT_SRILANKA_3->title; ?></a></h5>
                                      <?php echo $ABOUT_SRILANKA_3->description; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6  thinn-blog-1">
                                        <figure>
                                            <img src="images/about-srilanka/2.jpg" alt=""> 
                                        </figure>
                                    </div>
                                </div>

                                <!-- /Blog Thumb End -->
                            </div>
                        </div><!-- / Container -->
                    </div>
                </div>  
            </section>
            <?php include './footer.php'; ?>

        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

    </body>
</html>