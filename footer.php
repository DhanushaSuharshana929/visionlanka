<?php
include_once(dirname(__FILE__) . '/class/include.php');

$ATTRACTION2 = new Attraction(null);
$ACTIVITY1 = new Activities(null);
?>

<footer class="footer-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-6">
                    <div class="footer-content footer-left" style="margin-left: 15px;">
                        <div class="footer-logo mb-30"> <img class="logo-bottom" src="images/logo/logo.jpg" alt="Vision Lanka Tours"> </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <ul  class="footer-content footer-left">
                        <li class="footer-title">
                            You Should Know
                        </li>   
                        <li><i class="fa fa-chevron-right"></i><a href="faq.php">FAQ</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="airport.php">Airport</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="sri-lanka.php">Sri Lanka</a> </li>
                        <li><i class="fa fa-chevron-right"></i><a href="visa.php">Visa</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                    </ul>
                </div>
                <!--                <div class="col-md-12">
                                      <div class="footer-content" >
                                          <h3 class="text-center">  Currency Converter</h3>
                                      </div>
                                        <div class="box-body">
                                            <iframe id="tmcmini"  style="width: 390px; height: 150px; border: none; background-color: #ffffff;" src="http://themoneyconverter.com/MoneyConverter.aspx?from=USD&amp;to=LKR" width="300" height="150" ></iframe></div>
                                  </div>-->
            </div>

            <div class="col-md-2">
                <ul  class="footer-content">
                    <li class="footer-title">
                        Attractions
                    </li> 
                    <?php
                    $ATTRACTION_2 = $ATTRACTION2->all();
                    foreach ($ATTRACTION_2 as $key => $a2) {
                        if ($key < 6) {
                            ?>
                            <li><i class="fa fa-chevron-right"></i><a href="view-attraction.php?id=<?php echo $a2["id"]; ?>"><?php echo $a2["title"]; ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="col-md-2">
                <ul  class="footer-content">
                    <li class="footer-title">
                        Activities
                    </li> 
                    <?php
                    $ACTIVITY_1 = $ACTIVITY1->all();
                    foreach ($ACTIVITY_1 as $key => $a1) {
                        if ($key < 6) {
                            ?>
                            <li><i class="fa fa-chevron-right"></i><a href="view-activities.php?id=<?php echo $a1["id"]; ?>"><?php echo $a1["title"]; ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-4">
                <ul  class=" footer-contact">
                    <li class="footer-title">
                        Contact 
                    </li>   
                    <li><i class="fa fa-envelope"></i><a href="mailto:visionlankatours@gmail.com">visionlankatours@gmail.com</a></li>
                    <li><i class="fa fa-phone"></i><a href="tel:0094777855985">0094 777 85 59 85</a></li>
                    <li><i class="fa fa-map"></i><a href="#address">Eramudugaha Junction, Unawatuna </a> </li>
                    <li><i class="fa fa-clock-o"></i><a href="#time">Opening Mon to Fri 8:00am to 10:00pm</a></li>
                </ul>
            </div>




        </div>
    </div>

</footer>

<div class="full-row footer-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div id="google_translate_element" ></div>
            </div>
            <div class="col-md-6">
                <div class="copy-right py-4 text-white text-center"> <span>Copyright 2019 Vision Lanka Tours All Rights Reserved.</span> </div>
            </div>
            <div class="col-md-3">
                <ul class="social-media x-center mb-5">
                    <li><a href="https://www.facebook.com/visionlankatours/" target="blank"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d1323e736eab97211194730/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-103053993-5"></script> <script> window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-103053993-5');</script>