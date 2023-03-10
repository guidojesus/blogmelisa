<?php 
/*
Template Name: Shop
*/
get_header();
the_post();

?>
<div class="container">
<h1><?php the_title() ?></h1>
   <?php the_content()?>
   <div class="col">
  <div class="row" style="margin-top:100px">
    
       <?php 
       query_posts("category_name=producto");
     while (have_posts()):
        the_post();
        $titulo= get_the_title();
        $url= get_the_permalink();
        echo "<div class='m-3 p-3'>";
        the_post_thumbnail("thumbnail");
        echo "<a class='row ml-5 mt-3' href='$url'>$titulo</a><br>";
        echo "</div>";
      endwhile;
?>  
   </div>
</div>
</div>
<?php get_footer() ?>