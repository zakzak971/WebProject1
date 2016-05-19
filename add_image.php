<?php
 include 'connection.php';
 $image = $_FILES['image']['name'];
 $name = $_POST['name'];
 mysql_query("INSERT INTO `images`(`IMAGE`, `NAME`) VALUES ('$image','$name')");
 header("location: index.php");
?>