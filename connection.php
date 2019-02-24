<?php

    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $sourceDb = 'sourcedb';
    $targetDb = 'targetdb';


    $con = new mysqli( $serverName, $userName, $password, $sourceDb );
    
    if ( $con->connect_error ) {
        die( "Conncetion Failed.!" . $con->connect_error );
    }
    
    $conn = new mysqli( $serverName, $userName, $password ,$targetDb );

    if ( $conn->connect_error ) {
        die( "Connection failed: " . $conn->connect_error );
    }