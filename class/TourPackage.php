<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tour_package
 *
 * @author Suharshana DsW
 */
class TourPackage {

    public $id;
    public $title;
    public $sub_title;
    public $type;
    public $image_name;
    public $sub_image;
    public $day;
    public $short_description;
    public $description;
    public $highlights;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`type`,`title`,`sub_title`,`image_name`,`sub_image`,`day`,`short_description`,`description`,`highlights`,`queue` FROM `tour_package` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->type = $result['type'];
            $this->title = $result['title'];
            $this->sub_title = $result['sub_title'];
            $this->image_name = $result['image_name'];
            $this->sub_image = $result['sub_image'];
            $this->day = $result['day'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->highlights = $result['highlights'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `tour_package` (`type`,`title`, `sub_title`,`image_name`,`sub_image`,`day`,`short_description`,`description`,`highlights`,`queue`) VALUES  ('"
                  . $this->type . "', '"
                . $this->title . "', '"
                . $this->sub_title . "', '"
              
                . $this->image_name . "', '"
                . $this->sub_image . "', '"
                . $this->day . "', '"
                . $this->short_description . "', '"
                . $this->description . "', '"
                . $this->highlights . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `tour_package` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `tour_package` SET "
                . "`type` ='" . $this->type . "', "
                . "`title` ='" . $this->title . "', "
                . "`sub_title` ='" . $this->sub_title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`sub_image` ='" . $this->sub_image . "', "
                . "`day` ='" . $this->day . "', "
                . "`short_description` ='" . $this->short_description . "', "
                . "`description` ='" . $this->description . "', "
                . "`highlights` ='" . $this->highlights . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $this->deleteTourDates();

        unlink(Helper::getSitePath() . "upload/tour-package/" . $this->image_name);

        $query = 'DELETE FROM `tour_package` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deleteTourDates() {

        $TOUR_DATE = new TourDate(NULL);

        $alldates = $TOUR_DATE->getTourDatesById($this->id);

        foreach ($alldates as $date) {

            $IMG = $TOUR_DATE->image_name = $date["image_name"];
            unlink(Helper::getSitePath() . "upload/tour-package/date/" . $IMG);
            unlink(Helper::getSitePath() . "upload/tour-package/date/thumb/" . $IMG);

            $TOUR_DATE->id = $date["id"];
            $TOUR_DATE->delete();
        }
    }

    public function deleteNormal() {

        $this->deleteNormalPhotos();

        unlink(Helper::getSitePath() . "upload/tour-package/" . $this->image_name);

        $query = 'DELETE FROM `tour_package` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deleteNormalPhotos() {

        $TOUR_PACKAGE_PHOTO = new TourPackagePhotosNormal(NULL);

        $allPhotos = $TOUR_PACKAGE_PHOTO->getTourPhotosById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $TOUR_PACKAGE_PHOTO->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/tour-package/gallery/" . $IMG);
            unlink(Helper::getSitePath() . "upload/tour-package/gallery/thumb/" . $IMG);

            $TOUR_PACKAGE_PHOTO->id = $photo["id"];
            $TOUR_PACKAGE_PHOTO->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `tour_package` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function selectOneDayTours() {
        $query = "SELECT * FROM `tour_package`  WHERE `type`=1";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function selectRoundTours() {
        $query = "SELECT * FROM `tour_package`  WHERE `type`!=1";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

}
