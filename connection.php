<?php

    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $sourceDb = 'sourcedb';
    $targetDb = 'targetdb';

    $sourceConnection = mysqli_connect( $serverName, $userName, $password, $sourceDb );

    if ( !$sourceConnection ) {
        die( "Source Connection Failed: " . mysqli_connect_error() );
    }
    // echo "<b>Source Connection Connected Successfully</b></br>";

    $targetConnection = mysqli_connect( $serverName, $userName, $password, $targetDb );

    if ( !$targetConnection ) {
        die( "Target Connection Failed: " . mysqli_connect_error() );
    }
    // echo "<b>Target Connection Connected Successfully</b></br>";
