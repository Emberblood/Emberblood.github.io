<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<div class="content">               
    <div class="center">                    
        <div class="post">
           
            <div class="header_admin">
                <b>Удалить данные или 
                <a href="/admin/subcategory/<?php echo $Subcategory['ID_category'];?>"><ins>вернуться назад</ins></a>
                </b>
            </div>
           
         
            <form action="#" method="post" enctype="multipart/form-data">
            
            <div class="text_delete">
            <p>Удалить подкатегорию №<?php echo $id. ' - "'.$subcategory_name; ?>"</p>

            <p>Вы действительно хотите удалить эту подкатегорию?</p>
            </div>
            
            <br/><br/>
            <input type="submit" name="submit" class="adminbtn" value="Удалить">

            <br/>

            </form>        
           

            

        
<div style="margin-top: 17%;"></div>

</div></div></div>


   

   



