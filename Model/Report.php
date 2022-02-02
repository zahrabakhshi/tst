<?php
include_once '../Controller/Services/DBConnect.php';

class Report{

    private $id;
    private $date;
    private $title;
    private $description;
    private $user_id;

    static public function insertReport($data){

        $connection = new DBConnect();
        $handle = $connection->connect();

        $title = $data['title'];

        $handle->query("INSERT INTO `report` (`title`) VALUES('$title')") or die('you have an error: '. $handle->error);
    }

}

