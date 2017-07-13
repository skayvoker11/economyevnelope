<?php include "header.php" ?>

<?php
if (empty($_SESSION['login']) or empty($_SESSION['id'])){
 ?>
 <div class="user">
     <div class="login-page">
      <div class="form">
        <form class="register-form" method="post" action="save_user.php">
            <h1>Register</h1>
            <input type="text" name="login" placeholder="name"/>
            <input type="password" name="password" placeholder="password"/>
            <input type="text" name="email" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="post" action="testreg.php">
          <h1>Login</h1>
          <input type="text" name="login" placeholder="username"/>
          <input type="password" name="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>

  </div>
</div>
</div>
<?php 
}
else{
    ?>
    <div class="wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="tabs col-xs-12">
                    <div class="envelope-tabs col-xs-2"><i class="fa fa-envelope" aria-hidden="true"></i> <span>envelope</span></div>
                    <div class="user-tabs col-xs-2"><i class="fa fa-user" aria-hidden="true"></i> <span>user</span></div>
                    <div class="setting-tabs col-xs-2"><i class="fa fa-cogs" aria-hidden="true"></i><span>settings</span></div>
                </div>
                <?php 
                include "home.php";
                ?>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php include "footer.php" ?>