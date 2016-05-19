<?php 
$my_id=$_SESSION['id'];
$fid=$_GET['fid'];
echo "$my_id $fid";
mysql_query("INSERT INTO `request`(`id1`, `id2`) VALUES ($my_id,$fid)");
header("location: pattern.php");
 ?>