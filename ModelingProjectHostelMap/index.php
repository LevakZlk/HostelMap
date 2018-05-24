<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Система Общежитие</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />

	
</head>

<body>

<form id="login" action="user.php" class="login-form" method="post">
    <h1>Вход в систему "Общежитие"</h1>
    <fieldset id="inputs">
        <input id="username" name="login" type="text" placeholder="Логин" autofocus required>   
        <input id="password" name="password" type="password" placeholder="Пароль" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="ВОЙТИ">
       
    </fieldset>
</form>

</body>
</html>
