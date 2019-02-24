<?php

    function display_query_header( $result ) {
        $field_cnt = $result->field_count;
        for ($i = 0; $i < $field_cnt; $i++) {
            $fileld = $result->fetch_field();
            echo "<th><a href= '$i'>" . $fileld->name . "</a></th>";
        }
    }

    function display_query_rows( $result ) {
        $field_cnt = $result->field_count;
        if ( $result->num_rows > 0 ) {
            while ( $row = $result->fetch_array() ) {
                echo '<tr>';
                for ( $j = 0; $j < $field_cnt; $j++ ) { 
                    echo '<td>' . $row[ $j ] . '</td>';
                }
                echo '</tr>';
            }
        } else {
            echo '0 results';
        }
    }
    