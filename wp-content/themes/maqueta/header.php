<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1">
	<title><?php bloginfo('name')?></title>
	<?php wp_head()?>
	<?php wp_site_icon()?>
	
</head>

<header class="header">
			<div class="header__redes-sociales">
				<div class="header__redes-sociales__cuentas">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
				</div>
			</div>
			<figure class="header__logo">
			     <?php echo get_custom_logo()?>
			</figure>
			<?php get_search_form() ?>
<!-- 			
			<?php
			wp_nav_menu(array('theme_location'=>'main-menu',
			'container'=>'',
			'menu_class'=>'header__navegacion'))
			?> -->
			
			
			<nav class="header__navegacion">
				<ul>
					<li><a href="<?php bloginfo('template_url');?>/index.html">Home</a></li>
					<li><a href="<?php bloginfo('template_url');?>/about.html">About</a></li>
					<li><a href="<?php bloginfo('template_url');?>/contact.html">Contact</a></li>
					<li><a href="http://localhost/Desafio1-Wordpress/shop/">Shop</a></li>
					<li><a href="http://localhost/Desafio1-Wordpress/search/">Search</a></li>
					<li><a href="<?php bloginfo('template_url');?>/download.html">Download</a></li>
				</ul>
			</nav>
		</header>