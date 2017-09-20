<?php 
require('config.php');
        $sql_data="select * from tech";
        $result_data=$link->query($sql_data);
        $results=array();
    $filename = "tech.xls"; 
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $flag = false;
    while ($row = mysqli_fetch_assoc($result_data)) {
        if (!$flag) {
            echo implode("\t", array_keys($row)) . "\r\n";
            $flag = true;
        }
        echo implode("\t", array_values($row)) . "\r\n";
    }
    ?>