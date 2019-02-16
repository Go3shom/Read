<?php
    
    // $targetSQL = "CALL MinusQuery()";

    $targetSQL = "SELECT * FROM Clients;";

    $targetResult = mysqli_query( $targetConnection, $targetSQL );

    $targetChecker = mysqli_num_rows( $targetResult );
    
    // var_dump( $targetChecker );

    echo'<table> <tr><th>Client ID</th> <th>Client Name</th> <th>Client Address</th></tr>';

    if ( $targetChecker < 0 ) {
        echo '<tr><td colspan = "3">No Rows Found.!!</td></tr>
        <tr><td colspan = "3">Can\'t Get Data.!!!</td></tr>';
    }  

    if ( $targetChecker > 0 ) {

        while ( $row = mysqli_fetch_assoc( $targetResult ) ) {
            echo "<tr><td>";
            echo $row['ClientID'];
            echo "</td><td>";
            echo $row['ClientName'];
            echo "</td><td>";
            echo $row['ClientAddress'];
            echo "</td></tr>";
        }
        echo '<tr><td colspan = "3"></td></tr>';
        echo '</table>';
    }
    
    mysqli_close( $targetConnection );