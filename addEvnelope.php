<?php 
include "connect.php";
    if (isset($_POST['nameEnvelope'])) { $nameEnvelope = $_POST['nameEnvelope']; if ($nameEnvelope == '') { unset($nameEnvelope);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['BudgetEnvelope'])) { $BudgetEnvelope=$_POST['BudgetEnvelope']; if ($BudgetEnvelope =='') { unset($BudgetEnvelope);} }
    if (empty($nameEnvelope) or empty($BudgetEnvelope))
    {
    	exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $nameEnvelope = stripslashes($nameEnvelope);
    $nameEnvelope = htmlspecialchars($nameEnvelope);
    $nameEnvelope = trim($nameEnvelope);
    $BudgetEnvelope = stripslashes($BudgetEnvelope);
    $BudgetEnvelope = htmlspecialchars($BudgetEnvelope);
    $BudgetEnvelope = trim($BudgetEnvelope);
    $login = $_POST['login'];
    $result = mysql_query ("INSERT INTO envelope (nameEnvelope,BudgetEnvelope,login) VALUES ('$nameEnvelope','$BudgetEnvelope','$login')");

    if ($result = 'true'){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
    ?>