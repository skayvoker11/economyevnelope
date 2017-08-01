<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
include "Session.php";
include "connect.php";
?>
<html>
<head>
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="wrap">
                    <?php
                    if (empty($_SESSION['login']) or empty($_SESSION['id'])){
                        ?>
                        <div class="user-out col-xs-12">
                            <div class="logo col-xs-12">
                                <span>E</span>
                                <span>c</span>
                                <span>o</span>
                                <span>n</span>
                                <span>o</span>
                                <span>m</span>
                                <span>y</span>
                                <span>E</span>
                                <span>n</span>
                                <span>v</span>
                                <span>e</span>
                                <span>l</span>
                                <span>o</span>
                                <span>p</span>
                                <span>e</span>
                            </div>
                        </div>
                        <?php 
                    }else{
                        ?>
                        <div class="user-in col-xs-12"> 
                            <div class="logo col-xs-4">
                                <span>E</span>
                                <span>c</span>
                                <span>o</span>
                                <span>n</span>
                                <span>o</span>
                                <span>m</span>
                                <span>y</span>
                                <span>E</span>
                                <span>n</span>
                                <span>v</span>
                                <span>e</span>
                                <span>l</span>
                                <span>o</span>
                                <span>p</span>
                                <span>e</span>
                            </div>
                            <div class="plus col-xs-4">
                                <div class="pulse-button-add trigg"><span>+</span></div>
                                <div class="pulse-button-close trigg"><span><i class="fa fa-times" aria-hidden="true"></i></span></div>
                                <form id="formEnv" class="form" method="post" action="addEvnelope.php">
                                    <h3>Добавить конверт</h3>
                                    <?php
                                    echo "<input type='text' name='login' value='".$_SESSION['login']."' hidden>";
                                    ?>
                                    <input id="nameEnvelope" type="text" name="nameEnvelope" placeholder="название">
                                    <input id="bEnvelope" type="text" name="BudgetEnvelope" placeholder="бюджет">
                                    <button type="submit" name="addenvelope">Сохранить</button>
                                </form>
                            </div>
                            <div class="right-user-in col-xs-4 ">
                                <div class="photo-user"><img src="img/XVCiAWFwGm4.jpg" alt="..." class="img-circle"></div>
                                <div class="name"> <?php echo "<strong>".$_SESSION['login']." </strong>";  ?></div>
                                <a href="LogOut.php">Выйти</a>
                            </div>
                        </div>
                        <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>