<?php 
	include "connection.php";
	session_start();
	$my_id=$_SESSION['id'];
	$fid=$_POST['fid'];
	$mes=$_POST['mes'];
	$res=mysql_query("SELECT `name`  FROM `users` WHERE id=$my_id");
	$arr=mysql_fetch_array($res);
	$name=$arr['name'];
	$query=mysql_query("SELECT `mes` FROM `messages` WHERE id1='$my_id' AND id2='$fid'");
	$array=mysql_fetch_array($query);
	if (empty($array['mes'])) {
		$mes_arr = array();
		$mes_arr[]="<p>$name: $mes</p>";
		$mes_ser=serialize($mes_arr);
		mysql_query("INSERT INTO `messages`(`id1`, `id2`, `mes`) VALUES ('$my_id','$fid','$mes_ser')");
		mysql_query("INSERT INTO `messages`(`id1`, `id2`, `mes`) VALUES ('$fid','$my_id','$mes_ser')");
	}else{
		$mes_unser=unserialize($array['mes']);
		$mes_unser[]="<p>$name: $mes</p>";
		$mes_ser=serialize($mes_unser);
		mysql_query("UPDATE `messages` SET `mes`='$mes_ser' WHERE id1='$my_id' AND id2='$fid'");
		mysql_query("UPDATE `messages` SET `mes`='$mes_ser' WHERE id1='$fid' AND id2='$my_id'");
	}
	echo "<p>$name: $mes </p>";
 ?>