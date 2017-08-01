<?php 
include "connect.php";
include "Session.php";
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
    mysql_query ("INSERT INTO envelope (nameEnvelope,BudgetEnvelope,login) VALUES ('$nameEnvelope','$BudgetEnvelope','$login')");

    $query = "SELECT * FROM `envelope` WHERE `login`='admin'";
    $res = mysql_query($query) or die(mysql_error());
    $row = mysql_num_rows($res);
    $array = [];
    $arrayall = [];
    $count = 0;
    while ($row = mysql_fetch_array($res)) {
    	$name = $row['nameEnvelope'];
    	$budget = $row['BudgetEnvelope'];
    	$id = $row['id'];
    	array_push($array, $name,$budget,$id);
    	array_push($arrayall, $array);
    	$array = [];
    }
    $arrayall = array_pop($arrayall);
    echo json_encode($arrayall);
    ?>