<?php
include_once(dirname(__FILE__) . '/class/include.php');
$COMMENT_OBJ = new Comments(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Feedback | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are  gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
        <meta name="keywords" content="vision lanka tours, round tours, sri lanka round tours, round tours in sri lanka, vision lanka tours, round tours trip in sri lanka, sri lanka private tour drivers, sri lanka tour drivers">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon.png">
        <link href="css/style_3.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
        <link href="css/feedback-style.css" rel="stylesheet" type="text/css"/>
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
            <div class="sub-banner  " style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">Feedback</li>
                </ol>
            </div>

<!--            <section class="gallery-section mg-top-40 mg-bottom-20">
                <div class="container">
                    <div class="row">
           

                                <div class="testimonial-2">
                                    <div class="pic">
                                        <img src="" alt="">
                                    </div>
                                    <div class="testimonial-review">
                                        <h4 class="testimonial-title">
           
                                            <small> </small>
                                        </h4>
       
                                    </div>
                                </div>

              
                    </div>
                </div>
            </section>-->

            <section class="mg-bottom-50 mg-top-80">
                <div class="container">
                    <div class="">
                        <?php
                        $COMMENT = $COMMENT_OBJ->activeComments();
                        foreach ($COMMENT as $key => $comments) {
                            ?>
                            <div class="" >

                                <div class="testimonial" style="margin-bottom: 30px">
                                    <h3 class="title"> <?php echo $comments["title"]; ?></h3>
                                    <p class="description">
                                        <?php echo $comments["comment"]; ?>
                                    </p>
                                    <div class="testimonial-content">
                                        <div class="pic">
                                            <img class="img-circle" src="./upload/comments/<?php echo $comments["image_name"]; ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="name"> <?php echo $comments["name"]; ?></h4>
<!--                                            <span class="post">Web Developer</span>-->
                                          
                                        </div>
                                    </div>
                                </div>
                                <?php
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

        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>