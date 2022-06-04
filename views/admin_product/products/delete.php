<?php
include ROOT . '/views/layouts/header_admin.php';
 ?>

<div class="content">               
    <div class="center">                    
        <div class="post">


            <div class="header_admin">
                <b>Удалить данные или 
                    <a href="/admin/products/<?php echo $id_cat; ?>/<?php echo $id_type; ?>">
                        <ins>вернуться назад</ins>
                    </a>
                </b>
           </div>
            
            <br>
         
            <form action="#" method="post" enctype="multipart/form-data">
            
            <div class="text_delete">
            <p>Удалить изделие №<?php echo $id. ' - "'.$productById['model']; ?>"</p>

            <div align='center'><img src="<?php echo Product::getImage($id_type); ?>" height='400px'></div>
            
            <br/>
            <p>Вы действительно хотите удалить это изделие?</p>
            </div>
            
            <br/><br/>
            <input type="submit" name="submit" class="adminbtn" value="Удалить">

            <br/>

            </form>        
           


<div style="clear: both;">&nbsp;</div>


</div></div></div>


   

   



