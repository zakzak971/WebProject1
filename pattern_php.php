<?php 
session_start();
include 'functions.php';
include "connection.php";
if (isset($_GET['link'])) {
    $link = $_GET['link'];
}else $link='page';
if(!isset($_SESSION['id'])) header('location: index.php');
$id = $_SESSION['id'];
$res = mysql_query("SELECT `name`, `surname`, `univer`, `faculty`, `spec`, `city`, `gender`, `age`, `status`, `about`, `image` FROM `users` WHERE id=$id");
$row = mysql_fetch_array($res);
$name = $row['name'];
$surname = $row['surname'];
$image = $row['image'];
if ($image=="") {
	$image="anonymous-user-pic.png";
}
 ?>