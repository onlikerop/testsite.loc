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
<div class="Hallo">

<h1>Добро пожаловать на сайт TestSite.loc!</h1>
<?php
if ($_SESSION['auth'] == "yes")
{
goto auth;
}
?>
<p>
На нашем сайте Вы найдёте различные статьи, конкурсы на знаминательные даты, интересную информацию и многое другое!
</p>
<p>Если я Вас заинтересовал, то вы можете поддержать наш проект в пользовательском уголке.</p>
<p>Остались вопросы? Задайте их по обратной связи, в левой панели.</p>
<?php auth: ?>
</div>
<div class="all">
<?php
if ($_SESSION['auth'] != "yes")
{
goto noauth;
}
?>
<div class="PI" id="PI">
<h3 class="blue">Персональная информация</h3>
<p>Вы вошли как </p><p class="<?php echo $_SESSION['group'];?>"> <?php echo $_SESSION['rgroup'] ?></p>
<p class="<?php echo $_SESSION['group'];?>"> <?php echo $_SESSION['login'] ?></p>
</div>
<?php
noauth:
?>
<div class="tableI" id="LP">
<h3 class="blue">Пользовательский уголок</h3>
<ul class="blue" id="table">
<li> <a href="http://testsite.loc/pages/toadmin.html"><font size="4">Обратная связь</font></a> </li>
<li> <a href="http://testsite.loc/pages/donate.html"><font size="4">Помощь проекту</font></a> </li>
<li> <a href="http://testsite.loc/pages/lk.php"><font size="4">Личный кабинет</font></a> </li>
<li> <a href="http://testsite.loc/betta/newauth.php"><font size="4">Авторизация</font></a> </li>
</ul>

<ul class="red">
<li> <a href="http://testsite.loc/admin"><font size="4">Админ-Панель</font></a> </li>
</ul>
<div class="news" id="news">
<h2>Статьи нашего сайта:</h1>
<br>

<h3>11.07.2016:</h3>
<ul>
<li> <a href="http://testsite.loc/pages/page3.html"><font size="4">"Пакет Яровой" | 16:00 </font></a> </li>
<li> <a href="http://testsite.loc/pages/page2.html"><font size="4">Обновление | 11:30 </font></a> </li>
</ul>

<br>

<h3>08.07.2016:</h3>
<ul>
<li> <a href="http://testsite.loc/pages/page1.html"><font size="4">Открытие нашего сатйа | 12:00 </font></a> </li>
</ul>

</div>
<br><br><br>
<div class="clear"></div>
</div>
<p class="copyright">©zhekamegarep | 2016 год</p>
</body>
</html>
