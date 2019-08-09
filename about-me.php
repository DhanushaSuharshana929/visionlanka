<?php
include_once(dirname(__FILE__) . '/class/include.php');
$ABOUT_SRILANKA = new Page(7);
$ABOUT_SRILANKA_2 = new Page(4);
$ABOUT_SRILANKA_3 = new Page(5);
$ACTIVITY1 = new Activities(null);
$ATTRACTION2 = new Attraction(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sri Lanka | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country."/>
        <meta name="keywords" content="vision lanka tours, round tours, sri lanka round tours, round tours in sri lanka, vision lanka tours, round tours trip in sri lanka, sri lanka private tour drivers, sri lanka tour drivers">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="owl/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon.png">
        <link href="css/style_3.css" rel="stylesheet" type="text/css"/>
        <link href="css/about-styles.css" rel="stylesheet" type="text/css"/>
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
            <div class="sub-banner  mg-bottom-50 about-bottom-60" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">About Me</li>
                </ol>
            </div>
            <section id="about-me" class="about-srilanaka-section  mg-bottom-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/about-me/group.jpg" alt="office" />
                            <p class="company-slogan">Welcome as a visitor ....Good bye as a best friend .....that is what our staff doing...</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Great Advisor....</h5>
                                    <div class="row">
                                        <div class="col-md-9 text-center">
                                            <img src="images/about-me/image-1.jpg" style="width: 105px;"/>
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/about-me/arrow.JPG" class="hidden-xs hidden-sm arrow-design"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Our Senior Members....</h5>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4 col-sm-4 team-mb">
                                            <img src="images/about-me/image-2.jpg"/>
                                        </div>
                                        <div class="col-md-4 col-xs-4 col-sm-4  team-mb">
                                            <img src="images/about-me/image-3.jpg"/>
                                        </div>
                                        <div class="col-md-4 col-xs-4 col-sm-4 team-mb">
                                            <img src="images/about-me/image-4.jpg"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="driver-section">
                                <p><strong>Pradeep Tour Driver</strong> : Most senior member, he is reliable and professional, at 
                                    the same time his hospitality for the customers and 100%
                                </p>
                                <br>
                                <p><strong>Susantha Tour Driver</strong> : One of our senior professional driver with 10 years of 
                                    experienced providing the top quality service and skills. He also able to speak 
                                    Russian language too.
                                </p>
                                <br>
                                <p><strong>Chamara Tour Driver</strong> : One of our best driver always having smile on his face. 
                                    very enthusiastic about his job and wanted make you happy during the tour.
                                    About Me...
                                </p>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="images/about-me/about-me.JPG" alt="office" />
                            <p><strong>Nuwan Gunawardana</strong> | Founder</p>

                            <p style="margin-bottom: 0px;"><strong>Experience : </strong></p>
                            <p>As a nature photographer I 
                                explored every nook of the island.    
                                Later I Worked as a Driver Since 2007 then 
                                started serve guests in my own way in 2009
                            </p>
                            <p style="margin-bottom: 0px;"><strong>What you can expect : </strong></p>
                            <p>Whether it is your dream holiday, 
                                Honey moon  or annual family break 
                                I will promise to guide you through 
                                the every step.
                            </p>
                            <p style="margin-bottom: 0px;"><strong>How we make you easy : </strong></p>
                            <p>As the Tour Consultant Mr. Asanka
                                organizing the tours with strong 
                                advices with experience about 
                                suitable travel options according 
                                to their need. 
                            </p>
                            <p style="margin-bottom: 0px;"><strong>Our Highlights : </strong></p>
                            <p>We provide best hostility concept 
                                according to Sri Lanka Culture.
                                We serve Travel Information centre
                                through our Government approved office.
                                Also we proud to say as we are 
                                recommended in trip advisor.  

                            </p>
                        </div>
                        <div class="col-md-3">
                            <h5 style="color: #186ea4;">Why you can trust us...</h5>
                            <div class="blue-container" >
                                <p style="margin-bottom: 0px;"><strong>Government Reg.No : </strong></p>
                                <ul>
                                    <li>1/19/10/2017-10-26/4</li>
                                </ul>

                                <p style="margin-bottom: 0px;"><strong>Main Email Address : </strong></p>
                                <ul>
                                    <li>visionlankatours@gmail.com</li>
                                </ul>

                                <p style="margin-bottom: 0px;"><strong>Private Email Address : </strong></p>
                                <ul>
                                    <li>yesnuwan@gmail.com</li>
                                </ul>

                                <p style="margin-bottom: 0px;"><strong>Private Address : </strong></p>
                                <ul>
                                    <li>No:110 B,</li>
                                    <li>Eramudugaha Juncrion,</li>
                                    <li>Unawatuna,</li>
                                    <li>Galle.</li>
                                </ul>

                                <p style="margin-bottom: 0px;"><strong>Office Address   : </strong></p>
                                <ul>
                                    <li>‘Thisarana’Metaramba,</li>
                                    <li>Unawatuna.</li>
                                </ul>

                                <p style="margin-bottom: 0px;"><strong>Contact Details : </strong></p>
                                <ul>
                                    <li>Fix Phones : +94 91 222 6624</li>
                                    <li>Mobile Phones : +94 77 785 5985 +94 77 316 2812</li>
                                    <li>Fax : +94 91 222 6624</li>
                                </ul>

                                <p style="margin-bottom: 0px;"><strong>Social Media Details : </strong></p>
                                <ul>
                                    <li>Facebook : www.face../visionlankatours/</li>
                                    <li>WhatsApp : +94 77 785 5985</li>
                                    <li>Viber : +94 77 785 5985</li>
                                    <li>Imo : +94 77 785 5985</li>
                                </ul>

                                <p style="margin-bottom: 0px;"><strong>Bank Details : </strong></p>
                                <ul>
                                    <li>Bank / code : Sampath Bank (7278)</li>
                                    <li>Branch / code : Galle Super (035)</li>
                                    <li>Acc. Name : Vision Lanka Tours</li>
                                    <li>Acc. No : 1035 1401 1681</li>
                                    <li>Swift Code : BSAMLKLX</li>
                                </ul>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.803462882835!2d80.24501491475336!3d6.021697095638781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173c481170217%3A0x329859dcd34d0432!2sVision+Lanka+Tours!5e0!3m2!1sen!2slk!4v1565346565993!5m2!1sen!2slk" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                    <div class="row mg-top-20 mg-bottom-50">
                                        <div class="col-md-12 about-inner">
                                            <div class="about-srilanka-owl owl-carousel  owl-theme">
                
                                                <div class="item ">
                                                    <div class="col-md-12 gp">
                                                        <img src="images/about-me/about001.jpg" alt="vision lanka tours"/>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-md-12 gp">
                                                        <img src="images/about-me/about002.jpg" alt="vision lanka tours"/>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-md-12 gp">
                                                        <img src="images/about-me/about003.jpg" alt="vision lanka tours"/>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-md-12 gp">
                                                        <img src="images/about-me/about004.jpg" alt="vision lanka tours"/>
                                                    </div>
                                                </div>
                
                                            </div>
                
                                        </div>
                                    </div>-->
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
<script src="owl/owl.carousel.js" type="text/javascript"></script>
<script src="js/magnific-popup.min.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script>
    $('.about-srilanka-owl').owlCarousel({
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
                items: 4
            }
        }
    });
</script>
</body>
</html>