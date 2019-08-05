<footer class="footer-bg">
    <div class="container">
      
        <div class="footer-logo mb-30"> <img class="logo-bottom" src="images/logo/logo.jpg" alt="Vision Lanka Tours"> </div>
      
        <ul class="social-media x-center mb-5">
            <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
            <li><a href=""><i class="fa fa-youtube"></i></a></li>
        </ul>
        <ul class="f-nav x-center mb-5 hidden-sm hidden-xs">
            <li><a href="./">Home</a></li>
            <li><a href="">Package</a>
            </li>
            <li><a href="services.php">Services</a></li>
            <li><a href="">Sri Lanka</a>
            <li><a href="feedback.php">Feedbacks</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            
        </ul>
     
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
        </div>
    </div>
</div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
    }
</script>        
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<script type="text/javascript">
$('.translation-links a').click(function () {
   var lang = $(this).data('lang');
   var $frame = $('.goog-te-menu-frame:first');
   if (!$frame.size()) {
       alert("Error: Could not find Google translate frame.");
       return false;
   }
   $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
   return false;
});
</script>