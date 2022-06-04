<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<div class="content">               
    <div class="center">                    
        <div class="post">
     
			
			<div class="header_admin"><b><font class="active_link">Категории продукции</font></b></div>
			
			<br>		
			
			<a href='/admin/category/createCategory'>
				<div class="adminbtn"> <i class="fa fa-plus"></i>			
				 Добавить категорию
				</div>
			</a>
			
			<br><br>			

			<div class="category_index">				
				
				<table>

					<tr>
						<td><b>Наименование категории</b></td>
						<td><b>Сортировочный номер</b></td>
						<td></td>
						<td></td>								
					</tr>

					<?php foreach ($ProductGenus as $GenusItem): ?>				
					<tr>			
					<td>
						<a href='/admin/subcategory/<?php echo $GenusItem['ID_category']; ?>' title='Перейти к типам категории <?php echo $GenusItem['Category_name']; ?>'><?php echo $GenusItem['Category_name']; ?></a>
					</td>
					<td>
						<?php echo $GenusItem['Sorting_number']; ?>
					</td>							

					<td>
						<div class="">
						<a href="/admin/category/updateCategory/<?php echo $GenusItem['ID_category']; ?>" >
							<i class="fa  fa-pencil-square-o"></i></a>
						</div>
					</td>

					<td>
						<div class="">
							<a href="/admin/category/deleteCategory/<?php echo $GenusItem['ID_category']; ?>" >
								<i class="fa fa-times"></i></a>
						</div>
					</td>														
					
					</tr>

					<?php endforeach;?>					
				</table>

			</div>

            

        

<div style="clear: both;">&nbsp;</div>


</div></div></div>

