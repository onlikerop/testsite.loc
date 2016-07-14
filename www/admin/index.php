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

}
$_SESSION['allowed'] = "no";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Главная страница TestSite.loc</title>
<script src="http://testsite.loc/js/jquery-3.0.0.min.js" type="text/javascript"></script>
<script src="http://testsite.loc/js/jQuery.equalHeights.js" type="text/javascript"></script>
<link href="http://testsite.loc/styles/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<h3 class="red">Панель администрирования</h3>
<ul class="red" id="table">
<li> <a href="Users.php"><font size="4">Таблица пользователей</font></a> </li>
<li> <a href="Groups.php"><font size="4">Группы пользователей</font></a> </li>
<li> <a href="SetGroup.php"><font size="4">Выдать группу пользователю</font></a> </li>
<li> <a href="SetRank.php"><font size="4">Выдать титул пользователю</font></a> </li>
</div>
</ul>

<br><br><br>
<div class="clear"></div>
</div>
<p class="copyright">©zhekamegarep | 2016 год</p>
</body>
</html>