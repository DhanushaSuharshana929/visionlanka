<?php
include_once(dirname(__FILE__) . '/class/include.php');

$tour = '';
if (isset($_GET['tour'])) {
    $tour = $_GET['tour'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Plan Your Trip | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <meta name="theme-color" content="#15ba3f">
        <meta name="description" content="Sri Lanka is the Beautiful Island in the World Famous Tourist Attraction.The Attraction places are gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
        <meta name="keywords" content="vision lanka tours, round tours, sri lanka round tours, round tours in sri lanka, vision lanka tours, round tours trip in sri lanka, sri lanka private tour drivers, sri lanka tour drivers">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
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
            <div class="sub-banner  mg-bottom-50 about-bottom-50" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">Plan Your Trip</li>
                </ol>
            </div>
            <section class="contact-section mg-top-50 mg-bottom-20 mg-top-80">
                <div class="container">
                    <div class="row">
                        <div class="contact-form-1 form-style-1">
                            <div class="row">
                                <div class="col-md-6">
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
                                        <label for="phone">Your Phone Number:</label>
                                        <input class="form-control" id="txtPhone" name="txtPhone" placeholder="Phone Number" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">Your Country:</label>
                                        <span id="spanCountry"></span>
                                        <input class="form-control" id="txtCountry" name="txtCountry" placeholder="Country" type="text">
                                    </div>
                                </div>
                                <div id="datepairExample" class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-sm-6">
                                            <label>Arrival Date:</label>
                                            <span id="spanAdate"></span>
                                            <input type="text" name="txtAdate" id="txtAdate" class="datepicker start form-control" placeholder="MM/DD/YYYY">
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-6">
                                            <label>Departure Date:</label>
                                            <span id="spanDdate"></span>
                                            <input type="text" name="txtDdate" id="txtDdate" class="datepicker end form-control" placeholder="MM/DD/YYYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No of Guest:</label>
                                        <span id="spanAdult"></span>
                                        <div class="quantity">
                                            <input type="number" id="txtAdult" name="txtAdult" class="form-control" min="1" max="50" step="1" value="1">
                                        </div>	
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No of Childern:</label>
                                        <span id="spanChildren"></span>
                                        <div class="quantity">
                                            <input type="number" id="txtChildren" name="txtChildren" class="form-control" min="1" max="50" step="1" value="1">
                                        </div>	
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Rooms Type:</label>
                                        <span id="spanRooms"></span>
                                        <select id="txtRooms" name="txtRooms" class="selectpicker form-control">
                                            <option>Normal</option>
                                            <option>Single</option>
                                            <option>Family</option>
                                            <option>Luxury</option>
                                            <option>Honeymoon</option>
                                            <option>Duplex Room</option>
                                        </select>	
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Your Tour Package</label>
                                        <span id="spanPackage"></span>
                                        <select id="txtPackage" name="txtPackage" class="selectpicker form-control">
                                            <option> -- Please Select a Package -- </option>
                                            <?php
                                            if (count(TourPackage::all()) > 0) {
                                                foreach (TourPackage::all() as $key => $package) {
                                                    if ($package['id'] == $tour) {
                                                        ?>
                                                        <option value="<?php echo $package['title']; ?> " selected><?php echo $package['title']; ?></option>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <option value="<?php echo $package['title']; ?>"><?php echo $package['title']; ?></option>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>	
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
                                        <?php include("./booking-form/captchacode-widget.php"); ?> 

                                    </div>  
                                    <div class="col-md-12">
                                        <div class="div-check" >
                                            <img src="booking-form/img/checking.gif"  alt="checking" id="checking"/>
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
        <script src="booking-form/scripts.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $(".datepicker").datepicker();
            });
        </script>
    </body>
</html>