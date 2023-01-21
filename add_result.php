<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $category = $_POST["category"];
    $item = $_POST["item"];
    $result_no = $_POST["result_no"];
    $poses = $_POST["pos"];
    $names = $_POST["names"];
    $groups = $_POST["groups"];
    $classes = $_POST["classes"];
    $points = $_POST["points"];
    $result_array = [];

    for ($i = 0; $i < count($poses); $i++) {
        array_push($result_array, [$poses[$i]]);
    }

    for ($i = 0; $i < count($names); $i++) {
        array_push($result_array[$i], $names[$i]);
    }

    for ($i = 0; $i < count($groups); $i++) {
        array_push($result_array[$i], $groups[$i]);
    }

    for ($i = 0; $i < count($classes); $i++) {
        array_push($result_array[$i], $classes[$i]);
    }

    for ($i = 0; $i < count($points); $i++) {
        array_push($result_array[$i], $points[$i]);
    }

    $status = false;

    for ($i = 0; $i < count($result_array); $i++) {
        $pos =  $result_array[$i][0];
        $name =  $result_array[$i][1];
        $group =  $result_array[$i][2];
        $class =  $result_array[$i][3];
        $point =  $result_array[$i][4];

        $sql = "INSERT INTO results (category, item, result_no, pos, name, group_name, class, point) VALUES ('$category','$item', '$result_no' ,'$pos','$name','$group','$class','$point')";
        if ($conn->query($sql) === TRUE) {
            $status = true;
        } else {
            $status = false;
        }
    }
    $arr = array('status' => 1, 'after' => $result_no, 'data' => $result_array);
    echo json_encode($arr);




    // $sql = "INSERT INTO results (category, item, result_no, pos, name, group_name, class, point) VALUES ('John', 'Doe', 'john@example.com')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
}
