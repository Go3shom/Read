
<?php

    $sourceSQL = "SELECT * FROM `customers` WHERE 1;";
    $sourceResult = mysqli_query($sourceConnection, $sourceSQL);
    $sourceChecker = mysqli_num_rows($sourceResult);

    echo'<table> <tr><th>ID</th> <th>Customer Name</th> <th>Customer Name</th></tr>';

    if ($sourceChecker > 0) {
        while ($row = mysqli_fetch_assoc($sourceResult)) {
            echo "<tr><td>";
            echo $row['CustomerID'];
            echo "</td><td>";
            echo $row['CustomerName'];
            echo "</td><td>";
            echo $row['CustomerAddress'];
            echo "</td></tr>";
        }
        echo "</tr><td></td><td></td><td></td></tr>";
        echo '</table>';   
    }
    mysqli_close($sourceConnection);
