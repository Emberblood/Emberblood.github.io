<?php include ROOT . '/views/layouts/header_admin.php';  ?>

<div class="content">               
    <div class="center">                    
        <div class="post">
     
            <div class="header_admin"><b><a href="/admin/orders">Информация о заказах</a></b></div>
            <div class="header_panel">
            <b><font class="active_link">Просмотр заказа #<?php echo $order['ID_order']; ?></font></b></div>
            <hr>

        <div>               

            <br/>

            <h3 class="title">Информация о заказе</h3>

            <a href="/admin/orders/downloadOrders/<?php echo $order['ID_order']; ?>" title="Скачать ведомость" target="_blank">
            <div class="downloadOrders">Скачать ведомость <i class="fa fa-download"></i></div>
            </a>

            <div class="info_user"> <!-- start info user -->
                <table > 
                    <tr>
                        <td>Номер заказа</td>
                        <td><?php echo $order['ID_order']; ?></td>
                    </tr>
                      <tr>
                        <td>Товаров в заказе</td>
                        <td><?php echo $totalCount;?> (шт.)</td>
                    </tr>
                      <tr>
                        <td>Итоговая стоимость</td>
                        <td><?php echo $totalPrice;?> (руб.)</td>
                    </tr>
                    <tr>
                        <td>Имя клиента</td><?php $UserByID = User::getUserById($order['ID_user']); ?>                    
                        <td><?php echo $UserByID['name']; ?></td>       
                    </tr>    
                    <tr>
                        <td>Телефон клиента</td>
                        <td><?php echo $UserByID['phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Электронная почта клиента</td>
                        <td><?php echo $UserByID['email']; ?></td>   
                    </tr>
                    <tr>
                        <td>Адрес клиента</td>
                        <td><?php echo $UserByID['address']; ?></td>   
                    </tr>

                    <?php if ($order['ID_user'] != 0): ?>
                        <tr>
                            <td>ID клиента</td>
                            <td><?php echo $order['ID_user']; ?></td>
                        </tr>
                    <?php endif; ?>

                    <tr>
                        <td><b>Статус заказа</b></td>
                        <td>
                            <?php echo Order::getStatusText($order['status']); ?>
                            <a href="/admin/orders/updateOrders/<?php echo $order['ID_order']; ?>">
                                <i class="fa fa-pencil"></i></a>

                        </td>
                    </tr>
                    <tr>
                        <td><b>Дата заказа</b></td>
                        <td>
                            <?php 
                            $arr = ['января', 'февраля', 'марта', 'апреля', 'мая',  'июня', 'июля','августа', 'сентября','октября','ноября','декабря'];                    
                            $date = new DateTime($order['date_order']);
                            $m = $date->format('m'); 
                            $month = $m-1;                 
                            $format = $date->format('d '.$arr[$month].' Y  в G:i:s'); 
                            echo $format;                                     
                            ?>
                        </td>
                    </tr>
                  
                </table>

            </div> <!-- end info user -->

            <br>
            <h3 class="title">Товары в заказе</h3>
            <br><br>

           <table>
                <tr >
                    <th width="80px" style="text-align: center;">ID товара</th>
                    <th width="60px" ></th>
                    <th>Модель</th>

                    <th width="100px">Совместимость</th>
                    <th width="100px">Производитель</th>
                    <th width="100px">Дата производства</th>
					<th>Цена за шт.</th>
                    <th width="100px">Количество</th>
                </tr>
               
                <?php foreach ($products as $product): ?>
                        <tr>
                        <td><?php echo $product['ID_product'];  ?></td>
                        <td><img src='<?php echo Product::getImage($product["ID_type"]); ?>' height='50px'></td>
                        <td><?php echo $product['model']; ?></td>
                        <td><?php echo $product['sovmes']; ?></td>
                        <td><?php echo $product['proizv']; ?></td>
						<td><?php echo $product['datap']; ?></td>
                                                                 
                        <td>
                        <?php echo $product['price']; ?> руб.
                        </td>                
                        <td>
                        <?php echo $productsQuantity[$product['ID_product']]; ?>
                        </td>
                        </tr>
                <?php endforeach; ?>       
            </table>

           
            <div class="get_pagination">
            <?php echo $pagination->get(); ?>           
            </div>  


        </div>

            
       
<div style="clear: both;">&nbsp;</div>
</div></div></div>






