
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sri Lanka | Vision Lanka Tours</title> 

        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Sri Lanka is small miracle island but has wide variety of geography. Attractive gold sandy beaches, sanctuaries and temples, waterfalls, world heritage sites, natural sceneries and the hospitality of Sri Lankans will make your tour a perfect one. We have many excellent places to seen in the country." http-equiv="description" />
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
        <link href="css/style_2.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div  class="main">

            <?php include './header.php'; ?>
            <div class="sub-banner  mg-bottom-50" style="background-image: url('./images/parallex.jpg') ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active">FAQ</li>
                </ol>
            </div>
            <section class="srilanaka-section mg-top-40 mg-bottom-50">
                <div class="container">
                    <div class="row">
                        <div id="content">
                            <p class="accordion">Q1. How do I get to Sri Lanka ?</p>
                            <div class="panel">
                                <p>There are connecting flights from all major destinations with some airlines traveling directly to Sri Lanka . You need to contact the airlines to check this schedule.</p>
                                <p>The country's national airline, SriLankan, is expanding its fleet and network widely. Among other airlines that fly through Colombo are Emirates, Quantas , Singapore Airlines, Thai Airways, Indian Airlines and Gulf Air.</p>
                            </div>

                            <p class="accordion">Q2. Will I be safe ?</p>
                            <div class="panel">
                                <p>Sri Lankan's are hospitable, friendly people. During any transfers on your trip you will be met by our tour executive as well as our experienced driver during excursion whose primary concern is your safety and well being.</p>
                            </div>

                            <p class="accordion">Q3. What about food?</p>
                            <div class="panel">
                                <p>Sri Lankan cuisine is considered to be one of the finest and perhaps most distinctive cuisines in the World. Expect to eat well. Sri Lankan food will definitely be one of the many highlights of your visit and you can embark upon your gastronomic adventures. If you are on a special diet, we will be happy to pre alert the hotels where you would stay, to serve you accordingly.</p>
                            </div>

                            <p class="accordion">Q4. How will I travel?</p>
                            <div class="panel">
                                <p>You will travel in private air-conditioned vehicles that vary in size depending on the number of people. On most of your trips we will be using mini buses when traveling as individuals. However for bigger groups a mini coach.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <?php include './footer.php'; ?>

        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="owl/owl.carousel.js" type="text/javascript"></script>
        <script src="js/magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/theme.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function (event) {


                var acc = document.getElementsByClassName("accordion");
                var panel = document.getElementsByClassName('panel');

                for (var i = 0; i < acc.length; i++) {
                    acc[i].onclick = function () {
                        var setClasses = !this.classList.contains('active');
                        setClass(acc, 'active', 'remove');
                        setClass(panel, 'show', 'remove');

                        if (setClasses) {
                            this.classList.toggle("active");
                            this.nextElementSibling.classList.toggle("show");
                        }
                    }
                }

                function setClass(els, className, fnName) {
                    for (var i = 0; i < els.length; i++) {
                        els[i].classList[fnName](className);
                    }
                }

            });
        </script>

    </body>
</html>