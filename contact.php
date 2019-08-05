<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact us | Vision Lanka Tours</title> 

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

        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>

        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
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
            <div class="sub-banner  mg-bottom-50 about-bottom-50" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
            <section class="contact-section mg-bottom-20 mg-top-80">
                <div class="container">
                    <div class="row">
                        <div class="contact-form-1 form-style-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Your Name:</label>
                                        <span id="spanFullName"></span>
                                        <input class="form-control" id="txtFullName" name="txtFullName" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Your Email:</label>
                                        <span id="spanEmail"></span>
                                        <input class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Your WhatsApp Number:</label>
                                        <input class="form-control" id="txtPhone" name="txtPhone" placeholder="WhatsApp Number" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message:</label>
                                        <span id="spanMessage"></span>
                                        <textarea class="form-control" name="txtMessage" id="txtMessage" cols="30" rows="6" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-8 c-pd">
                                        <label>Security Code :<span class="">*</span></label>
                                        <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="ENTER THE SECUIRTY CODE >> ">
                                        <div class="col-md-12">
                                            <span id="capspan" ></span> 
                                        </div>

                                    </div>
                                    <div class="col-md-4"> 
                                        <?php include("./contact-form/captchacode-widget.php"); ?> 

                                    </div>  
                                    <div class="col-md-12">
                                        <div class="div-check" >
                                            <img src="contact-form/img/checking.gif"  alt="checking" id="checking"/>
                                        </div>
                                        <div id="dismessage" align="center"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit"  id="btnSubmit" class="btn-button btn-1 btn-1e">Send Message</button> 
                                </div>

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
        <script src="contact-form/scripts.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>