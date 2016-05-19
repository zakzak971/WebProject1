<?php 
session_start();
include 'connection.php';
include 'functions.php';
delete_chat($_SESSION['id'],$_POST['fid']);
 ?>