<?php
session_start();
include "connection.php";
include "functions.php";
$my_id=$_SESSION['id'];
$search = $_POST['search'];
$search = addslashes($search);
$search=clean($search);
	if (empty($search)) {
       exit();
    }else{
	$query = mysql_query("SELECT `id`, `name`, `surname`, `image` FROM users WHERE name LIKE '$search%' OR surname LIKE '$search%'");
    $num=mysql_num_rows($query);
    if(empty($num)) exit("Нет пользователей удовлетворящих условиям поиска");
    $my_arr=file("friends/$my_id.txt");
    for ($i=0; $i <$num ; $i++) { 
        $arr=mysql_fetch_array($query);
        $fid=$arr['id'];
        $image=$arr['image'];
        $name=$arr['name'];
        $surname=$arr['surname'];
    ?>
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
?>      	
