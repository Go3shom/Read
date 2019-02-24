<?php

    include_once 'fetchData.php';

    $sql = "SELECT CustomerID, CustomerName, CustomerAddress FROM customers";

    $result = $con->query( $sql );

    echo '<table class="source">';
        display_query_header( $result );
        display_query_rows( $result );
    echo '<tr><td colspan="3"></td></tr></table>';

    $con->close();
