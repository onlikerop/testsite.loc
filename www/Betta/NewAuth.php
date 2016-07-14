<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Авторизация на сайте TestSite.loc</title>
<link href="http://testsite.loc/styles/toadminstyle.css" type="text/css" rel="stylesheet">
</head>
<?php
if($_SESSION['auth'] == "yes")
{
        $connect = mysql_connect('localhost','root','1234567k') or die(mysql_error());
mysql_select_db('testsite_users');
    $login = $_SESSION['login'];
    $query = mysql_query("SELECT * FROM users WHERE login = '$login'");
    $user_data= mysql_fetch_array($query);
    $_SESSION['group'] = $user_data['group'];
    
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
?>
<body>
    <p>Вы уже авторизованы под логином</p>
    <p class = "<?php echo $_SESSION['group'] ?>"><?php echo $_SESSION['login']; ?></p>
    <p>с группой <p>
    <p class = "<?php echo $_SESSION['group'] ?>"><?php echo $_SESSION['rgroup']; ?></p>
    <?php
    goto theend;
}

$connect = mysql_connect('localhost','root','1234567k') or die(mysql_error());
mysql_select_db('testsite_users');

if(isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = mysql_query("SELECT * FROM users WHERE login = '$login'");
    $user_data= mysql_fetch_array($query);
    
    
    if($user_data['password'] == $password)
    {
        echo "Успешная авторизация под логином ";
        $_SESSION['group'] = $user_data['group'];
        $_SESSION['login'] = $user_data['login'];
        $_SESSION['auth'] = "yes";
        ?>
        <p class = "<?php echo $_SESSION['group'] ?>"><?php echo $_SESSION['login'];?></p>
        <?php
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
        echo "\n Ваша группа: ";
        ?>
        <p class = "<?php echo $_SESSION['group'] ?>"><?php echo $_SESSION['rgroup'];?></p>
        <?php 
        goto theend; ?>
        <?php
    }
    else
    {
        echo "Неверный логин или пароль";
    }
}
?>


<h1  class="back">Авторизация</h1>
<form action="NewAuth.php" method="post" name="login" class="back">
<p>Логин:<input type="text" name="login" class="input"></p>
<p>Пароль:<input type="password" name="password" class="input"></p>
<p><input type="submit" name="submit" value="Войти"></p>
</form>
<?php
theend:
?>
<br>
<p class="back"><a href="http://testsite.loc">Вернуться на главную страницу</a></p>
<br><br><br>
<p class="copyright">©zhekamegarep | 2016 год</p>
</body>
</html>