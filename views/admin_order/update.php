<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<div class="content">               
    <div class="center">                    
        <div class="post">
            <div class="header_admin"><b><a href="/admin/orders">Информация о заказах</a></b></div>
            <div class="header_panel"><b>Введите данные для изменения или <a href="/admin/orders"><ins>вернитесь назад</ins></a></b></b></div>
            <hr>


            <div class="admin">
            <form action="#" method="post" enctype="multipart/form-data">

                    <p class="form_text">Статус</p>
                        <select name="status"   class='admin_form ' autofocus> 
                            <option value="0" <?php if ($order['status'] == 0) echo ' selected="selected"'; ?>>Новый заказ</option>
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Одобрено администратором</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обработке</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Закрыт</option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Отказано в исполнении</option>
                            
                    </select>
                    <br>

                        <p class="form_text">Имя клиента</p>
                        <input type="text" name="userName"  class='admin_form' placeholder="" value="<?php echo $UserByID['name']; ?>" disabled>

                        <p class="form_text">Телефон клиента</p>
                        <input type="text" name="userPhone"  class='admin_form' placeholder="" value="<?php echo $UserByID['phone']; ?>" disabled>

                        <p class="form_text">Электронная почта клиента</p>
                        <input type="text" name="userComment"  class='admin_form' placeholder="" value="<?php echo $UserByID['email']; ?>" disabled>

                        <p class="form_text">Дата оформления заказа</p>
                        <input type="text" name="date"  class='admin_form' placeholder="" value="<?php echo $order['date_order']; ?>" disabled>

                        <br>


            <input type="submit" name="submit" class="adminbtn" value="Сохранить">

            <br/>

            </form>
            </div>      
           
<div style="clear: both;">&nbsp;</div>
</div></div></div>


   