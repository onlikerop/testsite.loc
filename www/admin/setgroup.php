<?php
 session_start();
$group = $_SESSION['group'];
if ($_SESSION['auth'] == "yes")
 {
         $connect = mysql_connect('localhost','root','1234567k') or die(mysql_error());
mysql_select_db('testsite_users');
    $login = $_SESSION['login'];
    $query = mysql_query("SELECT * FROM users WHERE login = '$login'");
    $user_data= mysql_fetch_array($query);
    $_SESSION['group'] = $user_data['group'];
    $_SESSION['rank'] = $user_data['rank'];
    $_SESSION['email'] = $user_data['email'];
    $_SESSION['id'] = $user_data['id'];
switch($group)
    {
        case root:{$access = true; break;}
        case MAdmin:{$access = true; break;}
        case Admin:{$access = false; break;}
        case MModer:{$access = false; break;}
        case Moder:{$access = false; break;}
        case MEditor:{$access = false; break;}
        case Editor:{$access = false; break;}
        case Writer:{$access = false; break;}
        case Helper:{$access = false; break;}
        case Gooder:{$access = false; break;}
        case Premium:{$access = false; break;}
        case User:{$access = false; break;}
        case Visitor:{$access = false; echo "\nАх ты, читерюга!"; break;}
        default: {$access = false; echo "\nНеизвестная ошибка!"; break;}
    }
}
else
{
    $access = false;
}
    if ($access != true)
    {
        $wrong = "yes";
    }
    else
    {
        $wrong = "no";
    }


$_SESSION['allowed'] = "no";



 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Таблица пользователей TestSite.loc</title>
<link href="http://testsite.loc/styles/toadminstyle.css" type="text/css" rel="stylesheet">
</head>
<?php

if($wrong == "yes")
{
goto backto;
}

?>

<body>
<h3 class="back">Смена группы пользователю</h3>
<form action="changegroup.php" method="post" name="changegroup" class="back">
<p>Введите логин<input type="text" name="login" class="input"></p>
<p>Введите новую группу<input type="text" name="newgroup" class="input"></p>
<input type="submit" name="submit" value="Изменить">
</form>


<?php

backto:
?>
<p><?php  if($wrong == "yes") { echo "\nУ Вас не достаточно прав для просмотра данного раздела";} ?></p>
<br>
<p class="back"><a href="http://testsite.loc">Вернуться на главную страницу</a></p>
<br><br><br>
<p class="copyright">©zhekamegarep | 2016 год</p>
</body>
</html>