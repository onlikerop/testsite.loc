<?php

session_start();
if($_SESSION['auth'] == yes)
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
        switch($_SESSION['group'])
{
    case root: { $_SESSION['rgroup'] = "Полный доступ(root)"; break;}
    case MAdmin: { $_SESSION['rgroup'] = "Главный администратор"; break;}
    case Admin: { $_SESSION['rgroup'] = "Администратор"; break;}
    case MModer: { $_SESSION['rgroup'] = "Главный модератор"; break;}
    case Moder: { $_SESSION['rgroup'] = "Модератор"; break;}
    case MEditor: { $_SESSION['rgroup'] = "Главный редактор"; break;}
    case Editor: { $_SESSION['rgroup'] = "Редактор"; break;}
    case Writer: { $_SESSION['rgroup'] = "Писатель"; break;}
    case Helper: { $_SESSION['rgroup'] = "Помощьник"; break;}
    case Gooder: { $_SESSION['rgroup'] = "Ценитель"; break;}
    case Premium: { $_SESSION['rgroup'] = "Премиум"; break;}
    case User: { $_SESSION['rgroup'] = "Читатель"; break;}
    default: {die("Не известная ошибка");}
}

switch($_SESSION['group'])
    {
        case root:{$access = true; break;}
        case MAdmin:{$access = true; break;}
        case Admin:{$access = true; break;}
        case MModer:{$access = true; break;}
        case Moder:{$access = true; break;}
        case MEditor:{$access = true; break;}
        case Editor:{$access = true; break;}
        case Writer:{$access = true; break;}
        case Helper:{$access = true; break;}
        case Gooder:{$access = true; break;}
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
<title>Страница пользователя <?php echo $_SESSION['login']; ?> TestSite.loc</title>
<link href="http://testsite.loc/styles/toadminstyle.css" type="text/css" rel="stylesheet">
</head>
<?php 
if($_SESSION['auth'] != "yes"){
goto noauth; } ?>
<body>

<h3  class="blue" align= center>Персональная информация</h3>
<p class="back">Ваш ID </p><p align="center" class="<?php echo $_SESSION['group'];?>"> <?php echo $_SESSION['id'] ?></p>
<p class="back">Ваш логин </p><p align="center" class="<?php echo $_SESSION['group'];?>"> <?php echo $_SESSION['login'] ?></p>
<p class="back">Ваш Email </p><p align="center" class="<?php echo $_SESSION['group'];?>"> <?php echo $_SESSION['email'] ?></p>
<p class="back">Ваша группа -</p><p align="center" class="<?php echo $_SESSION['group'];?>"> <?php echo $_SESSION['rgroup'] ?></p>
<p class="back">Ваш титул -</p><p align="center" class="<?php echo $_SESSION['group'];?>"> <?php echo $_SESSION['rank'] ?></p>
<?php

if($wrong == "yes")
{
goto noauth;
}

?>
<h3 class="back">Смена пароля</h3>
<form action="changepassword.php" method="post" name="changepassword" class="back">
<p>Введите новый пароль<input type="password" name="newpassword" class="input"></p>
<input type="submit" name="submit" value="Изменить">
</form>

<?php noauth: ?>
<p><?php  if($wrong == "yes") { echo "\nУ Вас не достаточно прав для просмотра данного раздела";} ?></p>
<br>
<p class="back"><a href="http://testsite.loc">Вернуться на главную страницу</a></p>
<br><br><br>
<p class="copyright">©zhekamegarep | 2016 год</p>
</body>
</html>