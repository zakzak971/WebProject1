<?php 
session_start();
include 'connection.php';
print_r($_POST);
$id=$_SESSION['id'];
$password=$_POST['password'];
$name=$_POST['name']; 
$surname=$_POST['surname']; 
$faculty=$_POST['faculty'];
$spec=$_POST['spec'];
$univer=$_POST['univer'];
$about=$_POST['about'];
$city='';
if (isset($_POST['city'])) {
	$city=$_POST['city'];
}
$age='';
if (isset($_POST['age'])) {
	$age=$_POST['age'];
}
$gender='';
if (isset($_POST['gender'])) {
	$gender=$_POST['gender'];
}
$status='';
if (isset($_POST['status'])) {
	$status=$_POST['status'];
} 
mysql_query("UPDATE `users` SET `name`='$name',`surname`='$surname',`password`='$password',`univer`='$univer',`faculty`='$faculty',`spec`='$spec',`city`='$city',`gender`='$gender',`age`='$age',`status`='$status',`about`='$about' WHERE id=$id");
header("location: pattern.php");
?>