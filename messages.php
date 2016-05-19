	<title>Письма</title>
	<link rel="stylesheet" type="text/css" href="css/messages_style.css">
	<!-- Центральная колонка -->
	<div class="col-md-8 col-lg-8" >
	<!-- Поиск -->
		<div class="text-center">
			<input class="search" placeholder="Поис сообщений или коференций..."></input>
		</div>
		<div class="text-center"><h3>Сообщения</h3></div>
	
	<?php 
		show_messages($_SESSION['id']);
	 ?>
<!-- FOOTER -->
		<div class="empty"></div>
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
