<?php

define('SERVER_NAME' ,"localhost" );
define('USER_NAME' ,"root" );
define('PASSWORD' ,"" );
define('DATABASE_NAME' ,"managing" );

class DBConnect
{

    public function connect(){

        // Create connection
        $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;

    }

}