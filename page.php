<?php 
include 'page_php.php' 
?>
<title><?= $name ?> <?= $surname ?></title>
<link rel="stylesheet" type="text/css" href="css/page_style.css">

<div class="col-lg-8 col-md-8">
		
	<div class="text-center" >
			
		<div class="middle-column">
			<img src="images/<?= $image ?>" alt="foto" class="main-foto"></img><br>
			<a class="putimg" href="putimage.php">Изменить картинку</a>
			<p class="name"><?= $name ?> <?= $surname ?></p>
			<a id="change_info" href="pattern.php?link=change_info">Изменить</a><picture></picture><p></p>
			<p id="slideTogle"><button class="btn  btn-primary">Информация</button></p>
			
			<div class="info"  style="display:none;">
				<hr>
				<div class="info-left">
					<p>Университет: <?= $univer ?></p>
					<p>Город: <?= $city ?></p>
					<p>Факультет: <?= $faculty ?></p>
					<p>Специальность: <?= $spec ?></p>
				</div>
				
				
				<div class="info-right">
					<p>Пол: <?= $gender ?></p>
					<p>Возраст: <?= $age ?></p>
					<p>Статус: <?= $status ?></p>
				</div>
				<hr>
			</div>
			

			<div class="about" style="display: none;">
				<hr>
				<p>
				<h3>О себе </h3>
				<?= $about ?>
				</p>
				<hr>
			</div>

			<script type="text/javascript">
				$(document).ready(function(){
				    $("#slideTogle").click(function(){
				        $(".info").slideToggle(200,function(){
				        	$(".about").slideToggle(200);
				        });
				    });
				   	
				});
				
			</script>


<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
 <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/<?= $image ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="images/<?= $image ?>" alt="Chania">
    </div>
  </div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
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
