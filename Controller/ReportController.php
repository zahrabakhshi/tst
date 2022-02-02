<?php
include_once '../Controller/Services/DBConnect.php';
include_once '../Model/Report.php';

class ReportController
{

    static public function insertReport($data){

        Report::insertReport($data);

    }

}
