<?php include ROOT . '/views/layouts/header.php'; ?>


<!-- скрыть/показать  -->
<script type="text/javascript">

  $('body').on('click', '.password-control', function(){
    if ($('#psw').attr('type') == 'password'){   
      $(this).html(' <i class="fa fa-eye-slash"></i>');
      $('#psw').attr('type', 'text');
    } else {  
      $(this).html('<i class="fa fa-eye"></i>');
      $('#psw').attr('type', 'password');
    }
    return false;
  }); 
</script>

<script type="text/javascript">
  $('body').on('click', '.password-control_repeat', function(){
    if ($('#psw-repeat').attr('type') == 'password'){
      $(this).html(' <i class="fa fa-eye-slash"></i>');
      $('#psw-repeat').attr('type', 'text');
    } else {
      $(this).html(' <i class="fa fa-eye"></i>');
      $('#psw-repeat').attr('type', 'password');
    }
    return false;
  }); 
</script>
<!-- конец скрыть/показать  -->


<div class="content">       
<div class="center">          
<div class="post">

<div align="center">
<h2 class="title_register">Регистрация на сайте</h2>                       
    
<div class="container"> <!-- start "container" -->
           
    <?php if ($result): ?>
    <h2 class="result_register">Вы зарегистрированы!</h2>
    <br><br>
    <h2 class="title_register"><a href="/user/login">Войти в личный кабинет</a></h2>
    <div style="height: 33%;"></div>
    <?php else: ?>

  <form action="#" method="post"><!-- start form -->
      <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" class="psw_form" required>
      <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" class="psw_form" required>
     
      <div class="password">
          <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" class="psw_form" id="psw" required><br>
          <a href="#" class="password-control"><i class="fa fa-eye"></i></a>
      </div>


      <div class="password">
          <input class="psw_form" type="password" placeholder="Потвердите пароль" value="<?php echo $password_repeat; ?>" name="psw-repeat" id="psw-repeat" required><br>
          <a href="#" class="password-control_repeat"><i class="fa fa-eye"></i></a>
      </div>
     
     <span id="validpass">
              <img src="" alt="" title="Заполните поля">
     </span>

    <!-- проверка совпадения паролей -->
        <script type="text/javascript">
          var passFields = $('.psw_form'),
              validResult = $("#validpass img");
          passFields.on('input', comparingPasswords);
          $('form').on('submit', comparingPasswords);
          var output = [
              ['/template/images/ok_icon_text.png', 'Пароли совпадают!'],
              ['/template/images/attention_text.png', 'Все поля должны быть заполнены!'],
              ['/template/images/error_text.png', 'Пароли не совпадают!']
          ];
          function comparingPasswords (e){
              var err = 0,
                  p1 = $.trim(passFields.eq(2).val()),
                  p2 = $.trim(passFields.eq(3).val());
              if(p1 === '' || p2 === '') {
                  err = 1;
              } else {
                  if(p1 != p2) err = 2;
              }
              validResult.attr({
                  src : output[err][0],
                  title : output[err][1]
              });    
              if(err) e.preventDefault();
          }
        </script>
     <!-- конец поверки совпадения паролей  -->

    <!-- errors message -->
        <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
        <?php foreach ($errors as $error): ?><li id="message"> <?php echo $error; ?></li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    <!-- end errors -->

     <!-- <input type="reset" name="reset"> -->

      <hr>
      <p>Создавая аккаунт, Вы соглашаетесь с <a href="/privacy/" id="privacy">Политикой конфиденциальности</a>.</p>
      <br>
      
      <input type="submit" name="submit" class="registerbtn" value="Регистрация" >

  </form> <!-- end form -->

<div class="container signin"><p>Уже есть аккаунт? <a href="/user/login/" id="privacy">Войти в систему</a>.</p></div>           
                
<?php endif; ?>
</div> <!-- end "container" -->
</div>


</div>
</div> 

  <div style="clear: both;">&nbsp;</div>
</div>
 
<?php include ROOT . '/views/layouts/footer.php'; ?>