<?php
$result = mail("admin@testsite.loc","Обратная связь с сайта","Анкета с сайта пришла с такими заполнеными формами: \nИмя: $_POST[name] \nEmail: $_POST[email] \nОценка сайту: $_POST[good] \nКомментарий: $_POST[text]");

if ($result == true)
{
    echo "Ваше сообщение успешно отправлено!";
}
else
{
    echo "К сожалению отправить сообщение не удалось.";
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Отправка сообщения администрации сайта TestSite.loc</title>
<link href="http://testsite.loc/styles/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<br>
<p class="back"><a href="http://testsite.loc">Вернуться на главную страницу</a></p>
<br><br><br>
<p class="copyright">©zhekamegarep | 2016 год</p>
</body>
</html>