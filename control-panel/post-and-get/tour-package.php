<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $TOUR_PACKAGE = new TourPackage(NULL);
    $VALID = new Validator();

    $TOUR_PACKAGE->type = $_POST['type'];
    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->sub_title = $_POST['sub_title'];
    $TOUR_PACKAGE->day = $_POST['day'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->highlights = $_POST['highlights'];

    $dir_dest = '../../upload/tour-package/';
    $sub_image = '../../upload/tour-package/sub-image/';

    $handle = new Upload($_FILES['image']);
    $handle1 = new Upload($_FILES['sub_image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 400;
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    if ($handle1->uploaded) {
        $handle1->image_resize = true;
        $handle1->file_new_name_ext = 'jpg';
        $handle1->image_ratio_crop = 'C';
        $handle1->file_new_name_body = Helper::randamId();
        $handle1->image_x = 200;
        $handle1->image_y = 200;

        $handle1->Process($sub_image);

        if ($handle1->processed) {
            $info = getimagesize($handle1->file_dst_pathname);
            $imgName1 = $handle1->file_dst_name;
        }
    }

    $TOUR_PACKAGE->image_name = $imgName;
    $TOUR_PACKAGE->sub_image = $imgName1;

    $VALID->check($TOUR_PACKAGE, [
        'title' => ['required' => TRUE],
        'sub_title' => ['required' => TRUE],
        'type' => ['required' => TRUE],
        'day' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'highlights' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
        'sub_image' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $TOUR_PACKAGE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-tour-date.php?id=" . $TOUR_PACKAGE->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
//    $result = $TOUR_PACKAGE->create();
//    if ($result) {
//        header("location: ../create-tour-package.php?id=" . $TOUR_PACKAGE->id . "&&message=10");
//    } else {
//        
//    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/tour-package/';
    $sub_image = '../../upload/tour-package/sub-image/';

    $handle = new Upload($_FILES['image']);
    $handle1 = new Upload($_FILES['sub_image']);

    $imgName = null;
    $TOUR_PACKAGE = new TourPackage($_POST['id']);

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 400;
        $handle->image_y = 600;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    if ($handle1->uploaded) {
        $handle1->image_resize = true;
        $handle1->file_new_name_body = TRUE;
        $handle1->file_overwrite = TRUE;
        $handle1->file_new_name_ext = FALSE;
        $handle1->image_ratio_crop = 'C';
        $handle1->file_new_name_body = $_POST['oldSubImageName'];
        $handle1->image_x = 200;
        $handle1->image_y = 200;

        $handle1->Process($sub_image);

        if ($handle1->processed) {
            $info = getimagesize($handle1->file_dst_pathname);
            $imgName1 = $handle1->file_dst_name;
        }
    }



    $TOUR_PACKAGE->image_name = $_POST['oldImageName'];
    $TOUR_PACKAGE->sub_image = $_POST['oldSubImageName'];
    $TOUR_PACKAGE->type = $_POST['type'];
    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->sub_title = $_POST['sub_title'];
    $TOUR_PACKAGE->day = $_POST['day'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->highlights = $_POST['highlights'];


    $VALID = new Validator();

    $VALID->check($TOUR_PACKAGE, [
        'type' => ['required' => TRUE],
        'title' => ['required' => TRUE],
        'day' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'highlights' => ['required' => TRUE],
       
    ]);


    if ($VALID->passed()) {
        $TOUR_PACKAGE->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TOUR_PACKAGE = TourPackage::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}