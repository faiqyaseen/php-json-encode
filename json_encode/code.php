<?php

$conn = mysqli_connect("localhost","root","","test1") or die("Connection Fail.!");

$sql = "SELECT * FROM user ";
// $sql = "SELECT * FROM user WHERE id = {$_POST['id']}";

$result = mysqli_query($conn,$sql);
$record = mysqli_num_rows($result);
// echo $record;

// $output2 = mysqli_fetch_assoc($result);
// $output2 = mysqli_fetch_all($result);
$output2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
// $output2 = mysqli_fetch_array($result);

// echo "<pre>";
// print_r($output);
// echo "</pre>";

// echo "<br><br><br>";

// echo "<pre>";
// print_r($output2);
// echo "</pre>";

echo json_encode($output2);
?>