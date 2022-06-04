<?php include ROOT . '/views/layouts/header_admin.php';  ?>
<div class="content">               
    <div class="center">                    
        <div class="post">
     
			<div class="header_admin"><b><a href="/admin/category">Категории продукции</a></b></div>

			<div class="header_panel">
			<b>		
				<a href="/admin/subcategory/<?php echo $id_cat; ?>">Подкатегории продукции</a>
				
			</b>
			<hr>
			<b>
				<font class="active_link">
					Подкатегория: <?php echo $subcategory_name;  ?>
				</font>
			</b>
			<hr>
			</div>

			<br>
						
			<div class="adminbtn ">
				<a href='/admin/products/createProducts/<?php echo $id_cat; ?>/<?php echo $id_type; ?>'><i class="fa fa-plus"></i> Добавить продукцию</a>
			</div>

			<br><br>
			<div>				
			

			<table>
			<th>
			
			<td></td>
			<td>Модель</td>
			<td>Длина (L), мм</td>
			<td>Высота (H), мм</td>
			<td>Ширина (B), мм</td>
			<td>Объем изделия, м3</td>
			<td>Стоимость</td>
			<td></td>
			<td></td>
										
			</th>
			<?php $count = 0; ?>
			<?php foreach ($productList as $product): ?>
				
				<tr>
					<td><?php $count++; echo $count; ?></td>
										
					<td width="20px">
						<img src="<?php	echo Product::getImage($id_type);?>" height='60px'>
					</td>

					<td width="350px"><?php echo $product['model']; ?></td>
					<td><?php echo $product['dlina']; ?></td>
					<td><?php echo $product['vysota']; ?></td>
					<td><?php echo $product['shirina'];?></td>
					<td ><?php echo $product['product_volume'];?></td>
					<td><?php echo $product['price'];?></td>


					<td width="85px">
						<div class="" title='Редактировать'>
							<a href="/admin/products/updateProducts/<?php echo $id_cat; ?>/<?php echo $id_type; ?>/<?php echo $product['ID_product']; ?>" ><i class="fa fa-pencil-square-o"></i></a>
						</div>
					</td>
					<td width="85px">
						<div class="" title='Удалить'>
							<a href="/admin/products/deleteProducts/<?php echo $id_cat; ?>/<?php echo $id_type; ?>/<?php echo $product['ID_product']; ?>" ><i class="fa fa-times"></i></a>
						</div>
					</td>			
				
				</tr>

			<?php endforeach;?>			

			</table>

			</div>

            
       
<div style="clear: both;">&nbsp;</div>
</div></div></div>

