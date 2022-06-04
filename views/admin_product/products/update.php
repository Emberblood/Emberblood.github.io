<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<style>
</style>

<div class="content">               
    <div class="center">                    
        <div class="post">
           
           <!--  -->
          
            <div class="header_admin"><b><a href="/admin/category">Категории продукции</a></b></div>

            <div class="header_panel">
            <b>     
                <a href="/admin/subcategory/<?php echo $id_cat; ?>">Подкатегории продукции</a>
                
            </b>
            <hr>
            <b>Введите данные или 
                    <a href="/admin/products/<?php echo $id_cat; ?>/<?php echo $id_type; ?>"><ins>вернитесь назад</ins></a></b></div>
            <hr>
        
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="admin">
            <form action="#" method="post" enctype="multipart/form-data">
            <br>
            
            <div class="select_product">
             <p class="form_text">Тип продукции: </p>
                <select name="subcategory">
                <?php if (is_array($Subcategory)): ?>
                    <?php foreach ($Subcategory as $categoryItem): ?>
                        <option value="<?php echo $categoryItem['ID_type']; ?>"                             
                            <?php if ($id_type == $categoryItem['ID_type']) echo ' selected="selected"'; ?>>                     
                            <?php echo $categoryItem['Naimenovanie_type']; ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
                </select>
            </div>
            
            <p class="form_text">Модель: </p>
            <input type="text" name="model" class='admin_form ' placeholder="Модель" value="<?php echo $productById['model'];?>" required>

            <p class="form_text">Длина(L), мм: </p>
            <input type="text" name="dlina" class='admin_form ' placeholder="Длина(L), мм" value="<?php echo $productById['dlina'];?>" required>

            <p class="form_text">Высота(H), мм: </p>
            <input type="text" name="vysota" class='admin_form ' placeholder="Высота(H), мм" value="<?php echo $productById['vysota'];?>" required>

            <p class="form_text">Ширина (B), мм: </p>
            <input type="text" name="shirina" class='admin_form ' placeholder="Ширина(B), мм" value="<?php echo $productById['shirina'];?>" required>

            <p class="form_text">Объем изделия, м3: </p>
            <input type="text" name="product_volume" class='admin_form ' placeholder="Объем изделия, м3" value="<?php echo $productById['product_volume'];?>" required>

            <p class="form_text">Вес, тн: </p>
            <input type="text" name="ves" class='admin_form ' placeholder="Вес, тн" value="<?php echo $productById['ves'];?>" required>

            <p class="form_text">Цена за шт.: </p>
            <input type="text" name="price" class='admin_form ' placeholder="0000.00" pattern="\d+(\.\d{1,2})?" value="<?php echo $productById['price'];?>" required>            

        

            <p class="form_text">Изображение <font size="4px">(изменяется в редакторе типа продукции)</font>: </p>                  
            <div>
                <img id="img-preview" src="<?php echo Product::getImage($id_type);?>" />
                <br>
            </div>
       
            <br>
            <input type="submit" name="submit" class="adminbtn" value="Сохранить">

            <br>
            </form>
            </div>      
           

<div style="clear: both;">&nbsp;</div>
</div></div></div>


   

   



