<!DOCTYPE html>
<html lang="ru">
<head>
	
	<title>Soileseik.kz</title>	
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="js.bootstrap.min.js">
	</script>
	<script src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js.npm.js"></script>
	<script type="text/javascript" src="js.bootstrap.js"></script>
	<meta charset="UTF-8">
</head>
<!-- HEADER -->
<body>
	<div class="header">
		<div class="title">
			<h2><b>Добро пожаловать</b></h2>
			<b><h3>на</h3></b>
			<h1><b>Soileseik.kz</b></h1>
			<h3><b>Все студенты страны здесь!</b></h3>
		</div>
		<hr>
	</div>

<!-- Form -->
	<div class="text-center">
		<div class="form">
		<a class="reg" href="regestration.php">Зарегистрироваться</a>
		
				<form method="post" action="check_login.php">
			 	<input class="text-field"  id="login" name="login" type="text" required maxlength="50" size="30px;" 
    					 placeholder="Эл. адрес или номер моб. телефона">
    			<br>

     		 	<input class="text-field" id="password" name="password" type="password" required maxlength="30" size="30px;"
    				placeholder="Пароль" >
				
				<input id="submit" class="btn" type="submit" value="Войти"></input>

				<div class="remember" name="remember">
					<p >Запомнить меня</p>
					<input name="check" type="checkbox"  checked >
				</div>
				
				<div id="resSearch">
					
				</div>

				</form>
		</div>
	</div>	

	<script type="text/javascript">

$(function() {
	$("#submit").click(function(){
		var login = $("#login").val();
		var password = $("#password").val();	
		$.ajax({
			type: "POST",
			url: "check_login.php",
			data: {"login": login,"password":password},
			cache: false,						
			success: function(response){
				if (response=="") {
					$(location).attr('href',"pattern.php");
				}else{
					$("#resSearch").html(response);
				}
			}
		});
		return false;
	});
});
</script>		

<!-- Girls -->
	<div class="images">
		<div class="photo">
		<img alt="Фотография" src="images/0elMhPZm6HU.jpg">
		<p>Дана</p>
		<i>19 лет</i>
		<i>SDU</i>
		</div>
		<div class="photo">
		<img alt="Фотография" src="images/lU_k9VbE1Q41.jpg">
		<p>Жанна</p>
		<i>18 лет</i>
		<i>SDU</i>
		</div>
		<div class="photo">
		<img alt="Фотография" src="images/YuQBWdCvW-g.jpg">
		<p>Меруерт</p>
		<i>19 лет</i>
		<i>SDU</i>
		</div>
	</div>
	
	
	<hr>
	<pre>
	
	На нашем сайте ты сможешь найти и познакомиться
	  со студентами со всех университетов страны,
	    включая и тех,кто учится в твоем городе.
	Начинай общаться с кем угодно прямо здесь и сейчас!
	</pre>
	<hr>
<!-- Boys -->
	<div class="images">
		<div class="photo">
		<img alt="Фотография" src="images/11378857_128057934191797_1701285538_n1.jpg">
		<p>Аблай</p>
		<i>18 лет</i>
		<i>SDU</i>
		</div>
		<div class="photo">
		<img alt="Фотография" src="images/sdsh47WWM5c.jpg">
		<p>Нурлан</p>
		<i>21 год</i>
		<i>SDU</i>
		</div>
		<div class="photo">
		<img alt="Фотография" src="images/i.jpg">
		<p>Алимжан</p>
		<i>19 лет</i>
		<i>SDU</i>
		</div>
	</div>

<!-- Footer -->
	<div class="footer">
		<hr>
		<div class="row text-center">
		<a href="footer.php">о нас</a>| 
		<a href="footer.php">	помощь </a>| 
		<a href="footer.php">правила </a>|  
		<a href="footer.php">	реклама  </a>|
		<a href="footer.php">разработчики</a>
		</div>
	</div>

</body>
</html>