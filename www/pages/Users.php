<?php
 session_start();
$group = $_SESSION['group'];
if ($_SESSION['auth'] == "yes")
 {
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
    if ($access == true)
    {
        $is = "yes";
    }
    else
    {
        $is = "no";
    }
 }
 if ($is != "yes")
 {
     $wrong = "yes";
 }
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Таблица пользователей TestSite.loc</title>
<link href="http://testsite.loc/styles/style.css" type="text/css" rel="stylesheet">
</head>
<?php

if($wrong == "yes")
{
goto backto;
}

?>

<body>

<?php
$connect = mysql_connect('localhost','root','1234567k') or die(mysql_error());
mysql_select_db('testsite_users');

    $query = mysql_query("SELECT * FROM users WHERE id ='1'");
    $user_data1= mysql_fetch_array($query);
    
    $query = mysql_query("SELECT * FROM users WHERE id ='2'");
    $user_data2= mysql_fetch_array($query);
    
    $query = mysql_query("SELECT * FROM users WHERE id ='3'");
    $user_data3= mysql_fetch_array($query);
    
    $query = mysql_query("SELECT * FROM users WHERE id ='4'");
    $user_data4= mysql_fetch_array($query);
    
    $query = mysql_query("SELECT * FROM users WHERE id ='5'");
    $user_data5= mysql_fetch_array($query);
    
    $query = mysql_query("SELECT * FROM users WHERE id ='6'");
    $user_data6= mysql_fetch_array($query);
    
    $query = mysql_query("SELECT * FROM users WHERE id ='7'");
    $user_data7= mysql_fetch_array($query);
    
    $query = mysql_query("SELECT * FROM users WHERE id ='8'");
    $user_data8= mysql_fetch_array($query);
    ?>
        <p class="table">
    <?php
    echo "Логин: ";
    echo $user_data1['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data1['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data1['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data1['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data1['rank'];
    echo "\n";
        ?>
        </p>
        <p class="table">
    <?php
    
    
    
    echo "Логин: ";
    echo $user_data2['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data2['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data2['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data2['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data2['rank'];
    echo "\n";
        ?>
        </p>
        <p class="table">
    <?php
    
    
    
    echo "Логин: ";
    echo $user_data3['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data3['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data3['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data3['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data3['rank'];
    echo "\n";
        ?>
        </p>
        <p class="table">
    <?php
    
    
    
    echo "Логин: ";
    echo $user_data4['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data4['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data4['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data4['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data4['rank'];
    echo "\n";
        ?>
        </p>
        <p class="table">
    <?php
    
    
    
    echo "Логин: ";
    echo $user_data5['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data5['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data5['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data5['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data5['rank'];
    echo "\n";
        ?>
        </p>
        <p class="table">
    <?php
    
    
    
    echo "Логин: ";
    echo $user_data6['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data6['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data6['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data6['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data6['rank'];
    echo "\n";
        ?>
        </p>
        <p class="table">
    <?php
    
    
    
    echo "Логин: ";
    echo $user_data7['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data7['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data7['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data7['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data7['rank'];
    echo "\n";

?>
        </p>
        <p class="table">
    <?php
    
    
    
    echo "Логин: ";
    echo $user_data8['login'];
    echo "\n";
    
    echo "Пароль: ";
    echo $user_data8['password'];
    echo "\n";
    
    echo "Email: ";
    echo $user_data8['email'];
    echo "\n";
    
    echo "Группа: ";
    echo $user_data8['group'];
    echo "\n";
    
    echo "Титул: ";
    echo $user_data8['rank'];
    echo "\n";

?>
        </p>
<!--<h1 align="center">Таблица пользователей</h1>
<table align="center" border="100">
<tr><th>Логин</th><th>Пароль</th><th>Email</th><th>Группа</th></tr>
<tr><th></th><th></th><th></th><th></th></tr>
<tr><th></th><th></th><th></th><th></th></tr>
<tr><th></th><th></th><th></th><th></th></tr>
<tr><th></th><th></th><th></th><th></th></tr>
<tr><th></th><th></th><th></th><th></th></tr>
<tr><th></th><th></th><th></th><th></th></tr>
<tr><th></th><th></th><th></th><th></th></tr>
</table>



<table align="center" border="100">
<tr><th>Логин</th><th>Пароль</th><th>Email</th><th>Группа</th></tr>
<tr><th class="root">root</th><th>••••••••••••••••••••••••</th><th>admin@TestServer.loc</th><th class="root">Полный доступ (корень)</th></tr>
<tr><th class="MAdmin">zhekamegarep</th><th>••••••••••••••</th><th>zhekamegarep@mail.ru</th><th class="MAdmin">Главный Администратор</th></tr>
<tr><th class="Admin">CutAndPut</th><th>•••••••••••••••</th><th>DayToKi11@gmail.com</th><th class="Admin">Администратор</th></tr>
<tr><th class="Moder">Gardy</th><th>••••••••</th><th>Lolopopka135@hotmail.com</th><th class="Moder">Модератор</th></tr>
<tr><th class="MEditor">Potomok</th><th>•••••••••••••••••</th><th>support@potomok.ru</th><th class="MEditor">Главный редактор</th></tr>
<tr><th class="Editor">Elson</th><th>•••••••••</th><th>Germanfruit@gmail.com</th><th class="Editor">Редактор</th></tr>
<tr><th class="User">Gasss</th><th>•••••••••••••</th><th>oneman1984@ya.ru</th><th class="User">Читатель</th></tr>
</table>
-->

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