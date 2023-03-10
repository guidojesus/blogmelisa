
<?php get_header() ?>
<body>
	<div class="margenes">
	
		<main>
		  <?php get_template_part("partials/baner")?>
			<div class="principal">
			<?php get_template_part("partials/blog")?>
			<?php get_template_part("partials/aside")?>	
			<?php get_sidebar()?>
			</div>
		</main>
		<?php get_footer() ?>
	
	</div>
	
</body>
</html>