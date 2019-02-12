<?php

    $targetSQL = "CALL MinusQuery();";

    $targetResult = mysqli_query( $targetConnection, $targetSQL );
    $targetChecker = mysqli_num_rows( $targetResult );
   
    echo'<table> <tr><th>ID</th> <th>Customer Name</th> <th>Customer Address</th></tr>';

    if ( !$targetChecker ) {
        echo '<td colspan = "3">No Rows Found.!!</td>';
    }
    else {
        if ( $targetChecker > 0 ) {
            while ( $row = mysqli_fetch_assoc( $targetResult ) ) {
                echo "<tr><td>";
                // echo $row['ClientID'];
                echo $row['CustomerID'];
                echo "</td><td>";
                // echo $row['ClientName'];
                echo $row['CustomerName'];
                echo "</td><td>";
                // echo $row['ClientAddress'];
                echo $row['CustomerAddress'];
                echo "</td></tr>";
            }
            echo "</tr><td></td><td></td><td></td></tr>";
            echo '</table>';
        }
    }
    mysqli_close( $targetConnection );