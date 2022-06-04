<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<div class="content">               
    <div class="center">                    
        <div class="post">
            
            <div class="header_admin"><b>Введите данные для изменения или <a href="/admin/category"><ins>вернитесь назад</ins></a></b></b></div>
           
            <br>        

            <div class="admin">
            <form action="#" method="post" enctype="multipart/form-data">

            <input type="text" name="Category_name" class='admin_form' placeholder="Наименование категории" value="<?php echo $category_name; ?>">

            <input type="text" name="Sorting_number" class='admin_form' placeholder="Сортировочный номер" value="<?php echo $Sorting_number; ?>">


            <input type="submit" name="submit" class="adminbtn" value="Сохранить">

            <br/>

            </form>        
           </div> 

            

        

<div style="clear: both;">&nbsp;</div>


</div></div></div>


   

   



