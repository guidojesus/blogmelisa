<?php 
get_header();
the_post();
?>
<div class="container">
  <div class="row">
     <div class="col-8">
         <h1><?php the_title() ?></h1>
		 <p> <?php the_author()?> - <?php the_date()?></p>
		<div><?php the_content() ?></div>
      </div>
      <div class="col-4">
        <aside class="barra-lateral" style="width:100%;">
               <div class="barra-lateral__widget">
						<form name="frm-busqueda" class="formulario-busqueda">
							<input type="text" name="palabra">
							<input type="submit" name="buscar" value="Buscar">
						</form>
			    </div>
				<div class="barra-lateral__widget">
						<h3>Categorías</h3>
						<ul class="barra-lateral__widget__categorias">
							<li>Belleza</li>
							<li>Estilo de Vida</li>
							<li>Belleza</li>
							<li>Estilo de Vida</li>
							<li>Belleza</li>
						</ul>
				</div>
                <div class="barra-lateral__widget">
						<h3 class="barra-lateral__widget__titulo">About me</h3>
						<img src="<?php bloginfo('template_url');?>/img/about-me.jpg" width="100%">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="barra-lateral__widget">
						<h3 class="barra-lateral__widget__titulo">Banner</h3>
						<img src="<?php bloginfo('template_url');?>/img/banner.jpg" width="100%">
				</div>
          
        </aside>
      </div>
  </div>
</div>
<?php get_footer() ?>