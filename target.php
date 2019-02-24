<?php

    include_once 'fetchData.php';

    $sql = "SELECT ClientID, ClientName, ClientAddress FROM Clients";

    $result = $conn->query( $sql );

    echo '<table class="target">';
        display_query_header( $result );
        display_query_rows( $result );
    echo '<tr><td colspan = "3"></td></tr></table>';

    $conn->close();
