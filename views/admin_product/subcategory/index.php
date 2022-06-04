<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<div class="content">               
    <div class="center">                    
        <div class="post">    
		

			<div class="header_admin"><b><a href="/admin/category">Категории продукции</a></b>
			<hr>
			<b><font class="active_link">Подкатегории продукции</font></b></div>
			<hr>
			
			<div class="adminbtn">
				<a href='/admin/subcategory/createSubcategory/<?php echo $id_cat; ?>'>
				 <i class="fa fa-plus"></i> Добавить подкатегорию</a>
			</div>
			
			<br><br>
			
			<div>				
			
			<h3 class="title">Категория: <?php echo $category_name; ?></h3><br>

			<table>
			<th>
			<td>Наименование подкатегории</td>
			<td></td>
			<td></td>
		
										
			</th>
			<?php foreach ($ProductSubcategories as $GenusItem): ?>
				
				<tr>
					<td width="20px"><img src="<?php echo Product::getImage($GenusItem['ID_type']); ?>" height='40px'></td>

					<td><a href='/admin/products/<?php echo $id_cat ?>/<?php echo $GenusItem['ID_type']; ?>'><?php echo $GenusItem['Naimenovanie_type']; ?></a></td>								
					<td>
						<div class="">
							<a href="/admin/subcategory/updateSubcategory/<?php echo $GenusItem['ID_type']; ?>" >Редактировать</a>
						</div>
					</td>
					<td>
						<div class="">
							<a href="/admin/subcategory/deleteSubcategory/<?php echo $GenusItem['ID_type']; ?>" >Удалить</a>
						</div>
					</td>			
				
				</tr>

			<?php endforeach;?>			

			</table>

			</div>

            

        

<div style="clear: both;">&nbsp;</div>


</div></div></div>

