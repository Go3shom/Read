<style>
    
    table { border-collapse: collapse; width: 100%; color: #9B48D5; font-family: monospace; font-size: 20px; text-align: center; }
    th{ background-color: #9B48D5; color: white; }
    tr:nth-child(even){ background-color: #f2f2f2 } 
   
</style>

<?php
    // Create connection
    $conn = new mysqli( $serverName, $userName, $password ,$targetDb );

    // Check connection
    if ( $conn->connect_error ) {
        die( "Connection failed: " . $conn->connect_error );
    }    
    //echo "Connected successfully";

    $sql = "SELECT ClientID, ClientName, ClientAddress FROM Clients";
    
    $result = $conn->query( $sql );

    echo "<table>";
        display_query_header ( $result );
        display_query_rows ( $result );
    echo '<tr><td colspan = "3"></td></tr></table>';

    $conn->close();

    //-----------------------------------------------------------------
    function display_query_header ( $result ) { 
        // make the table header by reading result set metadata.
        // $result include requied data such as number of fields, field_count
        // also include field names.
        $field_cnt = $result->field_count;

        for ( $i = 0; $i < $field_cnt; $i++ ) {
            $field = $result->fetch_field();
            echo "<th>
                    <a href= '$i'>" . $field->name . "</a>
                  </th>" ;
        }
    }// Function end
    //------------------------------------------------------------------
    
    function display_query_rows ( $result ) {
        // Table is columns and rows, columns are fileds
        // $ result include all required information
        // Filed count is the number of columns in the result set.
        // num rows is the number of rows returned in the query

        $field_cnt = $result->field_count;

        if ( $result->num_rows > 0 ) {
        // output data of each row

        while( $row = $result->fetch_array() ) {
        //loop to get all result set rows
            echo "<tr>" ;
            
            //loop to print one row
            for ( $j = 0; $j < $field_cnt; $j++ )
                echo "<td>" . $row[ $j ] . "</td>" ;
            echo "</tr>";
            }
        }
        else {
            echo "0 results";
        }
    }//Function end
    //--------------------------------------------
?>