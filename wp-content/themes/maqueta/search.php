<div class="mt-4">
    <h2>
        Resultados de la busqueda: <?php echo $_GET["s"] ?>
    </h2>

<?php
	if (!have_posts()) 
		echo "No se encontraron resultados";
	else
	{
		$i=0;
		echo "<ol>";
		while(have_posts()) : 
			echo "<li>";
			the_post();
			
			$titulo_post = get_the_title();
			$url_post = get_the_permalink();
				
			echo "<a href='$url_post'>$titulo_post</a>:<br>";
			echo the_excerpt();
			echo "</li>";
			$i++;
		endwhile;
		echo "</ol>";
		echo "$i elementos encontrados.";
	}
?>