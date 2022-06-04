<?php include ROOT . '/views/layouts/header_admin.php';  ?>


<div class="content">               
    <div class="center">                    
        <div class="post">
           
           <!--  -->
          
            <div class="header_admin"><b><a href="/admin/category">Категории продукции</a></b></div>

            <div class="header_admin"><b>
            Введите данные или 
             <a href="/admin/subcategory/<?php echo $id_cat; ?>"><ins>вернитесь назад</ins></a></b>
           </div>
          
           

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
            <p class="form_text">Наименование подкатегории: </p>
            <input type="text" name="Naimenovanie_type" class='admin_form' placeholder="Наименование подкатегории" value="">
            
            <div class="select_product">
             <p class="form_text">Категория продукции: </p>

                <select name="category" >
                <?php if (is_array($category)): ?>
                    <?php foreach ($category as $categoryItem): ?>
                        <option value="<?php echo $categoryItem['ID_category']; ?>" 
                            
                            <?php if ($id_cat == $categoryItem['ID_category']) echo ' selected="selected"'; ?>>
                            
                            <?php echo $categoryItem['Category_name']; ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
                </select>

            </div>
            
            <p class="form_text">Изображение: </p>                  
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

                <br />
            <input type="submit" name="submit" class="adminbtn" value="Сохранить">

            <br/>

            </form>        
           </div>

            

        

<div style="clear: both;">&nbsp;</div>


</div></div></div>


   

   



