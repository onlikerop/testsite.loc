<?php
session_start();

switch($_POST[login])
{
    case root: {if($_POST[password] == "HostPass_Zhekarootaccess"){$result = true;}else{$result = false;} $group = "root"; break;}
    case zhekamegarep: {if($_POST[password] == "1234567kufkbyf"){$result = true;}else{$result = false;} $group = "MAdmin"; break;}
    case CutAndPut: {if($_POST[password] == "qwer1234hostpro"){$result = true;}else{$result = false;} $group = "Admin"; break;}
    case Gardy: {if($_POST[password] == "The_GOD_"){$result = true;}else{$result = false;} $group = "Moder"; break;}
    case Potomok: {if($_POST[password] == "fgjkkjgf159753PrO"){$result = true;}else{$result = false;} $group = "MEditor"; break;}
    case Elson: {if($_POST[password] == "Chelovek16"){$result = true;}else{$result = false;} $group = "Editor"; break;}
    case Gasss: {if($_POST[password] == "1298qazokmg18"){$result = true;}else{$result = false;} $group = "User"; break;}
    default: {$result = false; $group = "Visitor"; break;}
}

if ($result == true)
{
    switch($group)
    {
        case root:{$access = true; break;}
        case MAdmin:{$access = true; break;}
        case Admin:{$access = true; break;}
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
        $_SESSION['allowed'] = "yes";
         header("Location: Users.php");
    }
    else
    {
        echo "\nУ Вас не достаточно прав для просмотра данного раздела";
    }
}
else
{
   echo "\nНе верный логин или пароль"; 
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Авторизация администратора TestSite.loc</title>
<link href="http://testsite.loc/styles/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<br>
<p class="back"><a href="http://testsite.loc">Вернуться на главную страницу</a></p>
</body>
</html>