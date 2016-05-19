<?php 
	$id = $_SESSION['id'];
	$query = "SELECT * FROM users WHERE id=$id";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);

 ?>
<link rel="stylesheet" type="text/css" href="css/change_info.css">
<title>Данные</title>
<div class="col-lg-8 col-md-8">
    	

    	<div class="text-center">
			<div class="form">
			<form method="post" action="change_info_php.php">	
                         
				<input class="input" value="<?=$row['name']?>" name="name" type="text" maxlength="50" size="30px;" 
    					 placeholder="Имя" spellcheck='true'>

    			<input class="input" value="<?=$row['surname']?>" name="surname" type="text"  maxlength="50" size="30px;" 
    					 placeholder="Фамилия" spellcheck='true'>
    		

     		 	<input class="input" value="<?=$row['password']?>" name="password" type="text" ="" maxlength="30" size="30px;"
    					 placeholder="Пароль" >

    			<input class="input" type="password"  maxlength="30" ="" size="30px;"
    					 placeholder="Повторите пароль" >
    				
				 <input class="input" value="<?=$row['univer']?>" name="univer" type="text"  maxlength="50" size="30px;" 
    					 placeholder="Университет" spellcheck='true'>

    			<input class="input" value="<?=$row['faculty']?>" name="faculty" type="text"  maxlength="50" size="30px;" 
    					 placeholder="Факультет" spellcheck='true'>
    		

     		 	<input class="input" value="<?=$row['spec']?>" name="spec" type="text"  maxlength="30" size="30px;"
    					 placeholder="Специальность" >

    			<select value="<?=$row['city']?>" name="city">
    				<option disabled selected="selected">Выбирите город</option>
    				<option>Алматы</option>
    				<option>Астана</option>
    			</select>

    			<select value="<?=$row['gender']?>" name="gender">
    				<option disabled selected="selected">Пол</option>
    				<option>Мужской</option>
    				<option>Женский</option>
    			</select>

    			<select value="<?=$row['age']?>" name="age">
    				<option disabled selected="selected">Возраст</option>
    				<option>18</option>
    				<option>19</option>
    				<option>20</option>	
    				<option>21</option>
    			</select>

    			

    			<select value="<?=$row['status']?>" name="status" >
    				<option disabled="disabled" selected>Статус</option>
    				<option>Влюблен</option>
    				<option>Встречаюсь</option>
    				<option>В активном поиске</option>	
    				<option>Всесложно</option>
    				<option>Помовлен</option>
    				<option>Учусь</option>
    			</select>

    			<textarea class="input" value="<?=$row['about']?>" name="about"  id="about"></textarea>


    			<input class="btn"  type="submit" value="Изменить"></input>
    	</form>

		</div>
		
	</div>		
    </div>
