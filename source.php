
<?php

    $sourceSQL = "SELECT * FROM `customers` WHERE 1;";
    $sourceResult = mysqli_query( $sourceConnection, $sourceSQL );
    $sourceChecker = mysqli_num_rows( $sourceResult );

    echo'<table> <tr><th>Customer ID</th> <th>Customer Name</th> <th>Customer Address</th></tr>';

    if ( $sourceChecker > 0 ) {
        while ( $row = mysqli_fetch_assoc( $sourceResult )) {
            echo "<tr><td>";
            echo $row['CustomerID'];
            echo "</td><td>";
            echo $row['CustomerName'];
            echo "</td><td>";
            echo $row['CustomerAddress'];
            echo "</td></tr>";
        }
        echo '<tr><td colspan = "3"></td></tr>';
        echo '</table>';   
    }
    mysqli_close($sourceConnection);



