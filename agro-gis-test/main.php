
<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="css/main_css.css">
       <title>Вход в ГИС</title>
    </head>
    <body>
        <form class="login" method="post" action="includes/handle.php">
            <label for="login">Логин</label>
            <input type="text" id="login" name="log" />
            <label for="password">Пароль</label>
            <input type="password" id="password" name="pass" />
            <input type="submit" value="Войти" />
        </form>
    </body>
</html>