<?php 
	function clean($var){
		$var=trim($var);
		$var=stripcslashes($var);
		$var=strip_tags($var);
		$var=htmlspecialchars($var);
		return $var;
	}

    function check_link($link){
        switch ($link) {
            case 'page':
                   include 'page.php';
                    break;
            case 'friends':
                include 'friends.php';
                break;
            case 'add_friend':
                include 'add_friend.php';
                break;
            case 'friend_page':
                include 'friend_page.php';
                break;
            case 'request':
                include 'request.php';
                break;
            case 'request_php':
                include 'request_php.php';
                break;
            case 'groups':
                include 'groups.php';
                break;
            case 'messages':
                include 'messages.php';
                break;
            case 'groups_content':
                include 'groups_content.php';
                break;   
            case 'chat':
                include 'chat.php';
                break;
            case 'change_info':
                include 'change_info.php';
                break;                 
            case 'out':
                session_destroy();
                header('location: index.php');
                break;
            default:
                header('location: error.php');
                break;
        }
    }	

    function check_user($login,$password){
	   $login = clean($login);
	   $password = clean($password);

	   $query = "SELECT login,password,id FROM users WHERE login='$login'";
        $result = mysql_query($query);
	   $row = mysql_fetch_array($result);
	   if ($row['login']==$login) {
		  if ($password!=$row['password']) {
			 echo "Пароль не верен";
        }else{
			 $_SESSION['id'] = $row['id'];
			 echo "";
         }
	   }else{
		  echo "Такого логина не существует";
		
		  }		
	}

	function save_user($arr){
    	$arr=array();
    	if (isset($_POST['login'])) { 
    			$login = $_POST['login']; 
    			if ($login == '') { 
    				unset($login);}
    			$arr[]=$login; 
    			} 
        if (isset($_POST['password'])) { 
        	$password=$_POST['password']; 
        	if ($password =='') { 
        		unset($password);}
        		$arr[]=$password; 
        	}
        if (isset($_POST['name'])) { 
        	$name=$_POST['name']; 
        	if ($name =='') { 
        		unset($name);}
        		$arr[]=$name; 
        	}
        if (isset($_POST['surname'])) { 
        	$surname=$_POST['surname']; 
        	if ($surname =='') { 
        		unset($surname);}
        		$arr[]=$surname; 
        	}

        if (isset($_POST['faculty'])) { 
        	$faculty=$_POST['faculty'];
        	$arr[]=$faculty;
        }else{
        	$faculty="";
        }
        if (isset($_POST['spec'])) { 
        	$spec=$_POST['spec'];
        	$arr[]=$spec;
        }else{
        	$spec="";
        }
        if (isset($_POST['univer'])) { 
        	$univer=$_POST['univer'];
        	$arr[]=$univer;
        }else{
        	$univer="";
        }
        if (isset($_POST['city'])) { 
        	$city=$_POST['city'];
        	$arr[]=$city;
        }else{
        	$city="";
        }
        if (isset($_POST['gender'])) { 
        	$gender=$_POST['gender'];
        	$arr[]=$gender;
        }else{
        	$gender="";
        }
        if (isset($_POST['age'])) { 
        	$age=$_POST['age'];
        	$arr[]=$age;
        }else{
        	$age="";
        }
        if (isset($_POST['status'])) { 
        	$status=$_POST['status'];
        	$arr[]=$status;
        }else{
        	$status="";
        }
        if (isset($_POST['about'])) { 
        	$about=$_POST['about'];
        	$arr[]=$about;
        }else{
        	$about="";
        }
        foreach ($arr as $key ) {
        	clean($key);
        }
     	if (empty($login) || empty($password) || empty($name) || empty($surname)){
        ?>
        <h2>Введенные данные не верны. Вернитесь обратно и попробуйде еще раз.</h2>
        <a href="regestration.php">Обратно</a>

        <?php
        exit();
        }
        
    	$result = mysql_query("SELECT id FROM users WHERE login='$login'");
        $myrow = mysql_fetch_array($result);
        if (!empty($myrow['id'])) {
        exit ("<h2>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</h2> <a href=\"regestration.php\">Обратно</a>");
        }
    	$result2 = mysql_query("INSERT INTO users (login,password,name,surname,univer,faculty,spec,city,gender,age,status,about,image) VALUES('$login','$password','$name','$surname','$univer','$faculty','$spec','$city','$gender','$age','$status','$about','user.png')");
        if ($result2){   
            $result3 = mysql_query("SELECT id FROM users WHERE login='$login'");
            $arr3=mysql_fetch_array($result3);
            $id=$arr3['id'];
            $_SESSION['id']=$id;
            $fo=fopen("friends/$id.txt",'a+');
            fclose($fo);
            header("location: pattern.php");
        }
     else {
        echo "Ошибка! Вы не зарегистрированы.";
        exit();
        }
    }

    function show_friends($id,$my_id){
        $arr=file("friends/$id.txt");
        $my_arr=file("friends/$my_id.txt");
        if (empty($arr)) {
            echo "Пока нет друзей";
        }else{
            foreach ($arr as $fid) {
                $res = mysql_query("SELECT `name`, `surname`, `image` FROM `users` WHERE id='$fid'");
                $row = mysql_fetch_array($res);
                if (empty($row)) {
                    continue;
                }
                $name = $row['name'];
                $surname = $row['surname'];
                $image = $row['image'];
                ?>
                <!--Друг № 1  -->
                    <div class="content">
                        <hr>
                        <img class="friend_foto" src="images/<?=$image?>">
                        <div class="friend_links" >
                                <ul>
                                    <li><a id="name" href="pattern.php?link=friend_page&fid=<?=$fid?>"><?= $name ?> <?= $surname ?></a></li>
                                        <?php
                                        if ((int)$fid!=(int)$my_id) {
                                            echo "<li><a href='pattern.php?link=friend_page&fid=$fid'>Посмотреть профиль</a></li>";
                                        }
                                        if (!in_array($fid,$my_arr) && (int)$my_id!=(int)$fid) {
                                           echo "<li><a href='pattern.php?link=add_friend&fid=$fid'>Добавить в друзья</a></li>";
                                        }
                                        ?>                                       
                                    <li><a href="pattern.php?link=friends&fid=<?=$fid?>">Посмотреть друзей</a></li>

                                    
                                </ul>
                        </div> 
                                 <?php
                                        if ((int)$fid!=(int)$my_id) {
                                            echo "<a href='pattern.php?link=chat&fid=$fid' id='btn'class='btn'>Написать</a>";
                                        }
                                ?>                          
                                                
                    </div>

        <?php
            }
        }
    }

    function delete_chat($my_id,$fid){
        $mes_ser=array();
        $mes_ser=serialize($mes_ser);
        mysql_query("UPDATE `messages` SET `mes`='$mes_ser' WHERE id1='$my_id' AND id2='$fid'");
    }

    function show_messages($my_id){
        $query=mysql_query("SELECT `id2` FROM `messages` WHERE id1='$my_id'");
        $num=mysql_num_rows($query);
       
        for($i=0;$i<$num;$i++){
                $arr=mysql_fetch_array($query);
                $fid=$arr['id2'];
                $res = mysql_query("SELECT `name`, `surname`, `image` FROM `users` WHERE id='$fid'");
                $row = mysql_fetch_array($res);
                $name = $row['name'];
                $surname = $row['surname'];
                $image = $row['image'];
                ?>
        <div class="content">
                <hr>
                <img  src="images/<?=$image?>">
                <h4><a href="pattern.php?link=friend_page&fid=<?=$fid?>"> <?=$name?> <?=$surname?><a> </h4>
                <a  class="btn" id="btn" href="pattern.php?link=chat&fid=<?=$fid?>">Написать</a>
            </div>
        <?php
    }
}

?>