<head>
<title>ООО"ТСС- Арзамас"</title>

<link rel="shortcut icon" href="/template/images/emblem.png" type="image/x-icon">
<link href="/template/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/template/css/style.css">
<link rel="stylesheet" type="text/css" href="/template/css/normalize.css">
<!-- <link rel="stylesheet" type="text/css" href="/template/css/bootstrap.css"> -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="/template/js/jquery.maskedinput-1.4.1.js" type="text/javascript"></script>
<!-- <script>
	jQuery(document).ready(function($) {
	    $('.navbar .desktop-nav-item li a[href^="/' + location.pathname.split("/")[1] + '"]').parent("li").addClass('active');
	});
	
</script>
-->

<script>
	jQuery(document).ready(function($) {
	    $('.navbar .desktop-nav-item li a[href^="/' + location.pathname.split("/")[1] + '"]').parent("p").addClass('active');
	});
</script> 

<!----> <script type="text/javascript">
 $('document').ready(function() {
    $('.navbar .desktop-nav-item li a').each(function() {
    	
    	// var str = window.location.pathname.split("/")[1];
    	// var tr2 = "/" + str;
    	// alert(tr2);
    	 // alert();

        if ('http://zavod.ru'+ $(this).attr('href') == window.location.href)
        {
            $(this).parent("li").addClass('active');
        }
    });
}); 
 </script> 

<script type="text/javascript">
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>

</head>

<body>

<div class="shadow">

<div class="content_height">

<nav class="navbar navbar-default navbar-fixed-top" >

	<div class="container-fluid" >

	<div class="navbar-header">

			<div class="navbar-brand">
				<picture><img src="/template/images/index.png" alt="Logo vector" height="40px"></picture>
		    </div>

		<ul class="list-inline desktop-nav-left desktop-nav-item pull-left">
			<li><a href="/">Главная</a></li>
			<li><a href="/about">Об организации</a></li>
			<li><a href="/catalog">Продукция</a></li>
			<li><a href="/contact">Контакты</a></li>
		</ul>

		<ul class="list-inline navbar-header-list desktop-nav-item" >

					<li>
						<a href="/cart"> <i class="fa fa-shopping-cart"></i>
							Корзина (<span id="cart_count"><?php echo Cart::countItems(); ?></span>)
						</a>
					</li>
					
					<?php if (User::isGuest()): ?>				

					<li>
						<a href="/user/login">Вход</a>
					</li>
					
					<?php else: ?>
					
					<li>

					<div onclick="myFunction()" class="dropbtn">
						Аккаунт
						<i class="fa fa-user"></i>
					</div>	

					<div id="myDropdown" class="dropdown-content">					
					<p><a href="/cabinet/">Личный кабинет</a></p>
					<p><a href="/user/logout"><i class="fa fa-unlock"></i> Выход</a></p>				
					</div>
					
					</li>


					<?php endif; ?>		
	    </ul>

	</div>
	
	</div>
</nav>