<?php

    $database= new mysqli("localhost","root","","gdoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>