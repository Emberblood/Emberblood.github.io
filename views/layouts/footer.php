<footer class="footer"> 
	<section class="footer__copyright">
	Юр. адрес: 607222, РФ, Нижегородская область, <br>
	г. Арзамас. ул. Ленина 110-Д<br>
	Телефон: 8(83147) 2-55-99, 77-8-27
	</section>
	<div class="container">
		<ul class="footer__list">
			<li class="footer__list__item"><a href="/contact/" /><b>Контакты</b></a></li>
			<li class="footer__list__item"><a href="/delivery/" /><b>Доставка и оплата</b></a></li>
			<li class="footer__list__item"><a href="/privacy/" /><b>Политика конфиденциальности </b></a></li>
		</ul>
	<p class="footer__copyright">
	©2022ООО"ТСС- Арзамас".
	</p>
	</div>
</footer>
<!-- end #footer -->

</div> <!-- end shadow -->

</div>  

<script>
    $(document).ready(function(){
      //обновление кол-ва эоементов в корзине
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart_count").html(data);
            });
            return false;
        });

        //минус еденица товара
        $(".minus-btn").click(function () {
            var id = $(this).attr("del-id");
            $.post("/cart/MinCart/"+id,  {}, function (del) {
				var result = del;
            	let arr = result.split('|');         
            	$("#num_count_"+id).html(arr[0]);
            	$("#cart_count").html(arr[1]);
            	$("#total_price").html(arr[2]);  
            });
            return false;
        });


         //плюс еденица товара
          $(".plus-btn").click(function () {
	            var id = $(this).attr("plus-id");
	            $.post("/cart/PlusCart/"+id,  {}, function (plus) {	            	
		            var result = plus;
	            	let arr = result.split('|');         
	            	$("#num_count_"+id).html(arr[0]);
	            	$("#cart_count").html(arr[1]);
	            	$("#total_price").html(arr[2]);  
	            });
	            return false;
        });


          //удаление еденицы товара
          $(".delite-btn").click(function () {
	            var id = $(this).attr("delite-id");
	            $.post("/cart/DelCart/"+id,  {}, function (delite) {
	            	
	            	$("#cart_count").html(delite);
	            	// $("#table_cart").html();

	            	//$("#cart_info_"+id).html(delite);
	               	window.location.reload();
	            });
	            return false;
          });


           //удаление всех товаров
        $(".deleteSession").click(function () {
              $.post("/cart/deleteSession", {}, function () {
                $("#cart_info").html();
                window.location.reload();
	            });
	            return false;
        });

    });
</script>

</body>
</html>