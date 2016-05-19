<?php
	$my_id=$_SESSION['id']; 
	$friends=count(file("friends/$my_id.txt"));
	$res=mysql_query("SELECT id1 FROM `request` WHERE id2='$my_id'");
	$num = mysql_num_rows($res);
	$followers="";
		if ($num>0) {
			$followers=$num;
		}
		if ($friends==0) {
			$friends="";
		}
 ?>
<title>Заявки</title>	
	<link rel="stylesheet" type="text/css" href="css/request_style.css">
<!-- Центральная колонка -->
	<div class="col-md-8 col-lg-8">
		<!-- Поиск -->
		<div class="text-center">
			<input class="search" placeholder="Найти друга..."></input>
		</div>
		<!-- Кнопки -->
			<div class="btn-group btn-group-justified " id="buttons" >
  				<a href="pattern.php?link=friends" class="btn btn-info">Друзья <?=$friends?></a>
  				<a href="pattern.php?link=friends" class="btn btn-info">Друзья онлайн</a>
  				<a href="pattern.php?link=request" class="btn btn-info">Подписчики <?=$followers?></a>	
			</div>
	<?php
	if ($num==0) {
		echo "У вас нет подсписчиков";
	}
	for($i=0;$i<$num;$i++){
		$arr=mysql_fetch_array($res);
		$fid=$arr['id1'];
		$result=mysql_query("SELECT  `name`, `surname`, `image` FROM `users` WHERE id='$fid'");
		$info=mysql_fetch_array($result);
		$name=$info['name'];
		$surname=$info['surname'];
		$image=$info['image'];
		
 ?>
 	<div class="content">
        <hr>
        <img class="friend_foto" src="images/<?=$image?>">
        <div class="friend_links" >
	        <ul>
		        <li><a id="name" href="pattern.php?link=friend_page&fid=<?=$fid?>"><?=$name?> <?=$surname?></a><li>
		        <li><a href='pattern.php?link=friend_page&fid=$fid'>Посмотреть профиль</a></li>
		        <li><a href="pattern.php?link=friends&fid=<?=$fid?>">Посмотреть друзей</a></li>
		        <form action="request_php.php" method="post">
		        	<input type="hidden" name="fid" value="<?=$fid?>"></input>
		        	<input class="btn-success" type="submit" value="Принять" name="apply"></input>
		        </form>
	        </ul>
        </div> 
    </div>
  <?php 
  	}
   ?>

<!-- FOOTER -->
			<div class="empty">
			
			<div class="text-center">
			<div class="row">
				<div class="footer">
					<a href="footer.php">о нас|</a> 
					<a href="footer.php">	помощь |</a> 
					<a href="footer.php">правила |</a>  
					<a href="footer.php">	реклама  |</a>
					<a href="footer.php">разработчики</a>
				</div>
			</div>
		</div>
	</div>
</div>
