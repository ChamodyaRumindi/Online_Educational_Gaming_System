<?php

    // $serverName = "localhost";
    // $dBUserName = "root";
    // $dBPassword = "";
    // $dBName = "oeg_play";

    $serverName = "us-cdbr-east-03.cleardb.com";
    $dBUserName = "bbbf189b5849cb";
    $dBPassword = "85ef053d";
    $dBName = "heroku_bb9f71dbaf1a90e";

    $conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName );

    if (!$conn){
        die("connection failed: ". mysqli_connect_error()); 
        /*echo "connected";  */
    }
?>