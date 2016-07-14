<?php

session_start();
if($_SESSION['auth'] == yes)
{

if(isset($_POST['submit']))
{    
$login = $_POST['login'];
$newrank = $_POST['newrank'];

    $connect = mysql_connect('localhost','root','1234567k') or die(mysql_error());
mysql_select_db('testsite_users');
$query = mysql_query("UPDATE users SET `rank` = '$newrank' WHERE login = '$login';") or die("Ошибка в записи, повторите попытку позже!");
    $true = "yes";

    }
}
else
{
    $access = false;
}
    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Страница пользователя <?php echo $_SESSION['login']; ?> TestSite.loc</title>
<link href="http://testsite.loc/styles/toadminstyle.css" type="text/css" rel="stylesheet">
</head>
<?php 
if($access == false)
{
goto noauth;
} ?>
<body>

<?php if($true != "yes") { goto noauth; } ?>
<p> <?php echo "Титул успешно изменён!"; ?> </p>
<?php noauth: ?>
<p><?php  if($wrong == "yes") { echo "\nУ Вас не достаточно прав для просмотра данного раздела";} ?></p>
<br>
<p class="back"><a href="http://testsite.loc">Вернуться на главную страницу</a></p>
<br><br><br>
<p class="copyright">©zhekamegarep | 2016 год</p>
</body>
</html>