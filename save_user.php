<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
    if (empty($login) or empty($password) or empty($email))
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    $email = trim($email);
    include ("connect.php");
    $result = mysql_query("SELECT id FROM user WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    $result2 = mysql_query ("INSERT INTO user (login,password,email) VALUES('$login','$password','$email')");
    if ($result2=='TRUE')
    {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
    else {
        echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>