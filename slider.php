

<div class="container-fluid photos-slider header1-slider no-padding slider-section">
    <div  class="chr_banner banner-hotel">
        <ul class="slider arrows">
            <?php
            $SLIDER = $SLIDER_OBJ->all();
            foreach ($SLIDER as $key => $slider) {
                if ($key === 0) {
                    ?>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="./upload/slider/<?php echo $slider["image_name"]; ?>" alt="Vision Lanka">
                            <div class="chr-caption-wrapper caption-left-bottom caption-container-bottom">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">

                                        <img src="images/slider/trip-ad.png" data-animation="fadeInLeft" data-delay="0.4s" class="chr-caption-img">

                                        <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-text"><?php echo $slider["description"]; ?></h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <?php
                } elseif ($key === 1) {
                    ?>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="./upload/slider/<?php echo $slider["image_name"]; ?>" alt="Vision Lanka">
                            <div class="chr-caption-wrapper caption-left-bottom caption-container-bottom">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">

                                        <img src="images/slider/trip-ad.png" data-animation="fadeInRight" data-delay="0.4s" class="chr-caption-img">

                                        <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-text"><?php echo $slider["description"]; ?></h6>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <?php
                } elseif ($key === 2) {
                    ?>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="./upload/slider/<?php echo $slider["image_name"]; ?>" alt="Vision Lanka">
                            <div class="chr-caption-wrapper caption-right-bottom caption-container-bottom">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">

                                        <img src="images/slider/trip-ad.png" data-animation="fadeInRight" data-delay="0.4s" class="chr-caption-img">

                                      <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-text"><?php echo $slider["description"]; ?></h6>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <?php
                } elseif ($key === 3) {
                    ?>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="./upload/slider/<?php echo $slider["image_name"]; ?>" alt="Vision Lanka">
                            <div class="chr-caption-wrapper caption-right-bottom caption-container-top">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">

                                        <img src="images/slider/trip-ad.png" data-animation="fadeInRight" data-delay="0.4s" class="chr-caption-img">

                                     <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-text"><?php echo $slider["description"]; ?></h6>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <?Php
                } elseif ($key === 4) {
                    ?>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="./upload/slider/<?php echo $slider["image_name"]; ?>" alt="Vision Lanka">
                            <div class="chr-caption-wrapper caption-right-bottom caption-container-bottom">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">

                                        <img src="images/slider/trip-ad.png" data-animation="fadeInRight" data-delay="0.4s" class="chr-caption-img">

                                        <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-text"><?php echo $slider["description"]; ?></h6>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <?php
                } elseif ($key === 5) {
                    ?>
                    <li class="">
                        <!--Banner Thumb START-->
                        <div>
                            <img src="./upload/slider/<?php echo $slider["image_name"]; ?>" alt="Vision">
                            <div class="chr-caption-wrapper caption-right-bottom caption-container-top">
                                <div class="chr_banner_caption container">
                                    <div class="chr-caption">
                                    <img src="images/slider/trip-ad.png" data-animation="fadeInRight" data-delay="0.4s" class="chr-caption-img">
                                    <h6 data-animation="fadeInUp" data-delay="0.3s" class="chr-caption-text"><?php echo $slider["description"]; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banner Thumb End-->
                    </li>
                    <?php
                }
            }
            ?>




        </ul>

    </div>

</div> 
<!--<img src="images/vision-b.png" class="slider-footer">-->


<!--<div class="container-fluid photos-slider header1-slider no-padding">
    

</div> / Photo Slider -->
