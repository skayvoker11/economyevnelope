<?php 
include "connect.php";

$nameEnvelope = $_POST['nameEnvelope'];
$BudgetEnvelope = $_POST['BudgetEnvelope'];
$result = mysql_query ("INSERT INTO envelope (nameEnvelope,BudgetEnvelope) VALUES ('$nameEnvelope','$BudgetEnvelope')");

if ($result = 'true'){
	echo "Информация занесена в базу данных";
}else{
	echo "Информация не занесена в базу данных";
}
?>