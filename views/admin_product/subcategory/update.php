<?php include ROOT . '/views/layouts/header_admin.php';  ?>


<div class="content">               
    <div class="center">                    
        <div class="post">
                <div class="header_admin">
                <b>Введите данные для изменения или 
                    <a href="/admin/subcategory/<?php echo $Subcategory['ID_category']; ?>"><ins>вернитесь назад</ins></a>
                </b>
            </div>
            
            <br><br>            

            <div class="admin">
            <form action="#" method="post" enctype="multipart/form-data">

             <p class="form_text">Наименование подкатегории</p>
            <input type="text" name="Naimenovanie_type" class='admin_form' placeholder="Наименование подкатегории" value="<?php echo $Subcategory['Naimenovanie_type'];; ?>">

            <p class="form_text">Текущее изображение</p>
            <br>
            <img src="<?php echo Product::getImage($id_type); ?>" width="300" alt="" />
            <br><br>
            <div>
                <input type="file" id="img" multiple accept="image/*"  name="image"  class='admin_form' />
            </div>
            <div>
                <img id="img-preview" src="/template/img_product/products/no-image.jpg" />
                <br />
                <a href="#" id="reset-img-preview">удалить изображение</a>
            </div>
       

            <script>
                $('#img').change(function () {
                    var input = $(this)[0];
                    if (input.files && input.files[0]) {
                        if (input.files[0].type.match('image.*')) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('#img-preview').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                        } else {
                            console.log('ошибка, не изображение');
                        }
                    } else {
                        console.log('ошибка загрузки изображения');
                    }
                });
             
                $('#reset-img-preview').click(function() {
                    $('#img').val('');
                    $('#img-preview').attr('src', '/template/img_product/products/no-image.jpg');
                });
            </script>         

            <br>
            <p class="form_text">Наименование категории</p>
            <div class="select_product">  
            <select name="category">
            <?php if (is_array($categoriesList)): ?>
                <?php foreach ($categoriesList as $category): ?>
                    <option value="<?php echo $category['ID_category']; ?>" 
                        
                        <?php if ($Subcategory['ID_category'] == $category['ID_category']) echo ' selected="selected"'; ?>>
                        
                        <?php echo $category['Category_name']; ?>
                    </option>
                <?php endforeach; ?>
            <?php endif; ?>
            </select>
            </div>

            

            <input type="submit" name="submit" class="adminbtn" value="Сохранить">
            

            <br/>

            </form>
            </div>        
           

            

        

<div style="clear: both;">&nbsp;</div>


</div></div></div>


   

   



