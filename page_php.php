<?php 
	// if(!isset($_SESSION['id'])) header('location: index.php');
		$id = $_SESSION['id'];
		$res = mysql_query("SELECT `name`, `surname`, `univer`, `faculty`, `spec`, `city`, `gender`, `age`, `status`, `about`, `image` FROM `users` WHERE id='$id'");
		$row = mysql_fetch_array($res);
		$name = $row['name'];
		$surname = $row['surname'];
		$univer = $row['univer'];
		$faculty = $row['faculty'];
		$spec = $row['spec'];
		$city = $row['city'];
		$gender = $row['gender'];
		$age = $row['age'];
		$status = $row['status'];
		$about = $row['about'];
		$image = $row['image'];
		if ($age==0) {
			$age="";
		}else{
			$age=$age." лет";
		}
 ?>