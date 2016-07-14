<?php
 session_start();
 if ($_SESSION['auth'] == "yes")
 {
$group = $_SESSION['group'];
switch($group)
    {
        case root:{$access = true; break;}
        case MAdmin:{$access = true; break;}
        case Admin:{$access = true; break;}
        case MModer:{$access = true; break;}
        case Moder:{$access = true; break;}
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
<h1 class="back">Таблица групп пользователей</h1>
<table  class="back" border="100">
<tr><th>Группа</th><th>Кол-во пользователей</th><th>Пользователи</th><th>Обозначение группы</th></tr>
<tr><td class="root">Полный доступ (root)</td><td>1</td><td>root</td><td>root</td></tr>
<tr><td class="MAdmin">Главный администратор</td><td>1</td><td>zhekamegarep</td><td>MAdmin</td></tr>
<tr><td class="Admin">Администратор</td><td>1</td><td>CutAndPut</td><td>Admin</td></tr>
<tr><td class="MModer">Главный Модератор</td><td>0</td><td></td><td>MModer</td></tr>
<tr><td class="Moder">Модератор</td><td>1</td><td>Gardy</td><td>Moder</td></tr>
<tr><td class="MEditor">Главный редактор</td><td>1</td><td>Potomok</td><td>MEditor</td></tr>
<tr><td class="Editor">Редактор</td><td>1</td><td>Elson</td><td>Editor</td></tr>
<tr><td class="Writer">Писатель</td><td>0</td><td></td><td>Writer</td></tr>
<tr><td class="Helper">Помощник</td><td>0</td><td></td><td>Helper</td></tr>
<tr><td class="Gooder">Ценитель</td><td>0</td><td></td><td>Gooder</td></tr>
<tr><td class="Premium">Премиум</td><td>0</td><td></td><td>Premium</td></tr>
<tr><td class="User">Читатель</td><td>1</td><td>Gasss</td><td>User</td></tr>
</table>

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