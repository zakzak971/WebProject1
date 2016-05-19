<?php 
	session_start();
	include 'connection.php';
	$my_id=$_SESSION['id'];
	$fid=$_POST['fid'];
	if(isset($_POST['apply'])) {
		$f1=fopen("friends/$fid.txt",'a+');
		fwrite($f1,$my_id."\n");
		fclose($f1);
		$f2=fopen("friends/$my_id.txt",'a+');
		fwrite($f2,$fid."\n");
		fclose($f2);
		mysql_query("DELETE FROM `request` WHERE id1='$fid' AND id2='$my_id'");
		header("location: pattern.php");
	 }
?>
