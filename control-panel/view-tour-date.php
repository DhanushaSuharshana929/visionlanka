<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$TOUR_PACKAGE = new TourPackage($id)
?> 
<!DOCTYPE html>


<html> 
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Tour-Date</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>

        <section class="content">
            <div class="container-fluid">
                <?php
                $vali = new Validator();
                $vali->show_message();
                ?>
                <!-- Vertical Layout -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Create Tour Dates</h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a href="manage-tour-package.php">
                                            <i class="material-icons">list</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <form class="form-horizontal"  method="post" action="post-and-get/tour-dates.php" enctype="multipart/form-data"> 
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" id="title" class="form-control" autocomplete="off" name="title" required="true">
                                                <label class="form-label">Title</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">                                       
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" id="image" class="form-control" name="image"  required="true">
                                            </div>
                                        </div>
                                    </div>
                                    
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Tour Summery</label>
                                        <div class="form-line">
                                            <textarea type="text" id="summery" class="form-control long-text" name="summery" ></textarea>
                                        </div>

                                    </div>

                                      <div class="col-md-12">                                       
                                        <div class="form-group form-float hidden">
                                            <div class="form-line">
                                                <input type="text" id="short_description" class="form-control" name="short_description" value="-"  required="true">
                                                     <label class="form-label">Short Description</label>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="description">Tour Description</label>
                                        <div class="form-line">
                                        <textarea type="text" id="description" class="form-control long-text" name="description" ></textarea>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden">
                                        <label for="x">Inclusions and Exclusions</label>
                                        <div class="form-line">
                                              <textarea type="text" id="inclusion" class="form-control long-text" name="inclusion" >-</textarea>
<!--                                            <textarea type="text" id="includes" class="form-control long-text" name="includes" ></textarea>-->
                                        </div>

                                    </div>
                               


                                    <div class="col-md-12"> 
                                        <input type="hidden" id="id" value="<?php echo $TOUR_PACKAGE->id; ?>" name="id"/>
                                        <input type="submit" name="create" class="btn btn-primary m-t-15 waves-effect" value="create"/>
                                    </div>

                                </form>
                                <div class="row">
                                </div>
                                <div class="row clearfix">
                                    <?php
                                    $TOUR_DATE = TourDate::getTourDatesById($id);
                                   $first = array_values($TOUR_DATE)[0];
                                    if (count($TOUR_DATE) > 0) {
                                        foreach ($TOUR_DATE as $key => $tour_date) {
                                            ?>
                                            <div class="col-md-3" id="div<?php echo $tour_date['id']; ?>">
                                                <div class="photo-img-container">
                                                    <img src="../upload/tour-package/date/<?php echo $tour_date['image_name']; ?>" class="img-responsive ">
                                                </div>
                                                <div class="img-caption">
                                                    <p class="maxlinetitle"><?php echo $tour_date['title']; ?></p>
                                                    <div class="d">
                                                        <a href="#"> <button class="glyphicon glyphicon-trash delete-btn delete-tour-date" data-id="<?php echo $tour_date['id']; ?>"></button></a>
                                                        <a href="edit-tour-date.php?id=<?php echo $tour_date['id']; ?>"> <button class="glyphicon glyphicon-pencil edit-btn"></button></a>
                                                        <a href="arrange-tour-date.php?id=<?php echo $id; ?>">  <button class="glyphicon glyphicon-random arrange-btn"></button></a>
                                                        <a href="view-tour-date-photos.php?id=<?php echo $first["id"]?>">  <button class="glyphicon glyphicon-picture arrange-btn"></button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        ?> 
                                        <b style="padding-left: 15px;">No Tour Dates in the database.</b> 
                                    <?php } ?> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- #END# Vertical Layout -->

            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script> 
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/add-new-ad.js" type="text/javascript"></script>


        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>
        <script src="js/pages/ui/dialogs.js"></script>
        <script src="js/demo.js"></script>
        <script src="delete/js/tour-date.js" type="text/javascript"></script>

        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: ".long-text",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });


        </script>
    </body>

</html>