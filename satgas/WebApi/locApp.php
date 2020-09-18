<?php

$con = mysqli_connect("localhost", "onlz5498", "h7Xj4d77anYS29", "onlz5498_kajian");


$latitude = $_POST["latitude"];

$longitude = $_POST["longitude"];

$statement = mysqli_prepare($con, "INSERT INTO device (latitude, longitude) VALUES (?, ?)");

mysqli_stmt_bind_param($statement, "ss", $latitude, $longitude);

mysqli_stmt_execute($statement);


$response = array();

$response["success"] = true;  


echo json_encode($response);