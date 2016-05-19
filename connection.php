<?php 
	mysql_connect('localhost','root','')
	or die('Error with server'.mysql_error());
	mysql_select_db('soileseik')
	or die('DB error'.mysql_error());
 ?>