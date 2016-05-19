<?php
 session_start();
 include 'connection.php';
  $id = $_SESSION['id'];
  $image = $_FILES['image']['name'];
  $res = mysql_query("UPDATE `users` SET `image`='$image' WHERE id='$id' ");
  header("location: pattern.php");
?>