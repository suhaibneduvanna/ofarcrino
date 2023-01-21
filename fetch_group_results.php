<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {



    $romen_sql = "SELECT SUM(point) AS total FROM results WHERE group_name = 'Romanesque'";
    $baroq_sql = "SELECT SUM(point) AS total FROM results WHERE group_name = 'Baroque'";
    $arab_sql = "SELECT SUM(point) AS total FROM results WHERE group_name = 'Arabesque'";
    
    $roman_result = $conn->query($romen_sql);
    $baroq_result = $conn->query($baroq_sql);
    $arab_result = $conn->query($arab_sql);
    $roman_total = $roman_result->fetch_assoc();
    $arab_total = $arab_result->fetch_assoc();
    $baroq_total = $baroq_result->fetch_assoc();

    if ($roman_total && $arab_total && $baroq_total) {
        $result_array = array($roman_total['total'],$arab_total['total'],$baroq_total['total']);
        echo TRUE;
    } else {
        echo FALSE;
    }





    // $sql = "INSERT INTO results (category, item, result_no, pos, name, group_name, class, point) VALUES ('John', 'Doe', 'john@example.com')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
}
