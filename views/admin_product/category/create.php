<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<div class="content">               
    <div class="center">                    
        <div class="post">
            <div class="header_admin"><b>Введите данные  или <a href="/admin/category"><ins>вернитесь назад</ins></a></b></b></div>
            
            <br>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="admin">
            <form action="#" method="post" enctype="multipart/form-data">

            <input type="text" name="Category_name" class='admin_form ' placeholder="Наименование категории" value="">
            <input type="text" name="Sorting_number" class='admin_form ' placeholder="Сортировочный номер" value="">
            <input type="submit" name="submit" class="adminbtn" value="Сохранить">

            <br/>

            </form>
            </div>      
           

            

        

<div style="clear: both;">&nbsp;</div>


</div></div></div>


   

   



