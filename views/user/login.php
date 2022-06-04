<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="content">       
<div class="center">          
<div class="post">
                       
<div align="center">
<div class="container">
<h2 class="title_login">АВТОРИЗАЦИЯ</h2>



<form action="#" method="post">
    <br>
    <p>Нет аккунта? <a href="/user/" class="a_reg">Зарегистрируйтесь.</a></p>
    <br>

    <input type="email" name="email" placeholder="E-mail"  class="psw_form" value="<?php echo $email; ?>" required>
   
    <div class="password">
    <input type="password" name="password" placeholder="Пароль"  class="psw_form" id="psw" value="<?php echo $password; ?>" required>
    </div>

    <!-- errors message -->
     <?php if (isset($errors) && is_array($errors)): ?>
      <ul id="message">
        <?php foreach ($errors as $error): ?>
        <li> <?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    <!-- end errors -->

    <input type="submit" name="submit" class="registerbtn" value="Войти" >
</form>
          

<div style="height: 9%;"></div>
</div>



</div>
</div>
<div style="clear: both;">&nbsp;</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>