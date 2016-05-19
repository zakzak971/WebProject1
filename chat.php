<?php
$my_id=$_SESSION['id']; 
$fid=$_GET['fid'];
$res=mysql_query("SELECT `image` FROM `users` WHERE id='$fid'");
$arr=mysql_fetch_array($res);
$image=$arr['image'];
?>
<link rel="stylesheet" type="text/css" href="css/chat_style.css">

<!-- Центральная колонка -->
	<div class="col-md-8 col-lg-8" >
		<div class="container">
		<img id="img" src="images/<?=$image?>"/>
		<div class="col-lg-7 col-md-5"  id="read">
		<?php 
			
			$res=mysql_query("SELECT `mes` FROM `messages` WHERE id1='$my_id' AND id2='$fid'");
			$arr=mysql_fetch_array($res);
			$mes_unser=array();
			$mes_unser=unserialize($arr['mes']);
			if (!empty($mes_unser)) {
				foreach ($mes_unser as $message) {
				echo $message;
				}
			}
			

		 ?>
		</div>
			<div class="col-lg-7 col-md-5" id="chat-bot">
				<input type="text" id="write"></input>
				<button id="send" class="btn">Отправить</button>
				<button id="delete">Удалить чат</button>
			</div>
		</div>
		<input type="hidden" id="fid" value="<?=$fid?>"></input>

<script type="text/javascript">

$(function() {
	var text=$("#read").html();
	$("#send").click(function(){
		var mes = $("#write").val();
		var fid = $("#fid").val();			
		$.ajax({
			type: "POST",
			url: "send_message.php",
			data: {"mes": mes,"fid": fid},
			cache: false,						
			success: function(response){
					$("#read").html(text+=response);
					$("#write").val("");				
			}
		});
		return false;
				
	});
});

$(function() {
	$("#delete").click(function(){
	var fid=$("#fid").val();		
		$.ajax({
			type: "POST",
			url: "delete.php",
			data: {"fid": fid},
			cache: false,						
			success: function(response){
					$("#read").html("");				
					alert("Чат удален"+response);
			}
		});
		return false;
	});
});


</script>

<!-- FOOTER -->
	<div class="empty"></div>
		<div class="text-center">
			<div class="row">
				<div class="footer">
					<a href="footer.php">о нас |</a> 
					<a href="footer.php">	помощь  |</a> 
					<a href="footer.php">правила  |</a>  
					<a href="footer.php">	реклама   |</a>
					<a href="footer.php">разработчики </a>
				</div>
			</div>
		</div>
	</div>