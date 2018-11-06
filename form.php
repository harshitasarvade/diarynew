<?php
session_start();
include_once 'dbConnector.php';
$id=$_SESSION["id"];
$note = $_POST['note'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$title = $_POST['title'];
$venue= $_POST['venue'];
$q=mysqli_query( $con,"INSERT INTO event VALUES  ('$id' , '$note' , '$title',  '$venue', '$date_start', '$date_end')")or die ("Error");
?>