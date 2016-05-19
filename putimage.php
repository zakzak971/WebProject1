<?php
  session_start();
  include 'connection.php';
?>
<title>Изменить картинку</title>
<form enctype="multipart/form-data" method="post" action="image.php">
    Изображение: <input type="file" name="image" />
  	<input type="submit" value="Загрузить" />