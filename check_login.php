<?php
	include 'connection.php';
	session_start(); 
	include 'functions.php';
	check_user($_POST['login'],$_POST['password']);

 ?>