<?php
function agregar_estilos()
 {function mensajeLogin()
    {
        return "<h2 align='center'>Bienvenido a mi Blog</h2>";
    }
    //Creamos el hook que llama a ese filtro y le pasamos nuestra funcion
    add_filter( 'login_message', 'mensajeLogin' );
    
    function logoLogin()
    {
        echo 
    '<style type="text/css">
        h1 a
        {
        background-image:
        url('.get_bloginfo('template_directory').'/assets/images/logo-fundacion.ico) !important;
        }
        </style>';
    }
    // se ejecutara cuando se vaya a mostrar el logo del inicio de sesion
    // de la pagina de administracion del sitio
    // este es el action_hook asociado a la carga del head de la pagina de inicio
    // de sesion administrativa de Wordpress
    add_action('login_head', 'logoLogin');
function registrar_menu()
{
	// registra una ubicacion de menu
	register_nav_menu(  "main-menu" ,"Menu principal del sitio"  );
	register_nav_menu(  "social-menu" ,"Menu de redes sociales"  );
}
// se agrega este gancho para registrar el/los menus
add_action("init","registrar_menu");

function my_awesome_sidebar() {
    $args = array(
      'name'          => 'Sidebar del blog',
      'id'            => 'jl-sidebar',
      'description'   => 'Este sidebar aparecera en la barra lateral derecha del tema',
      'class'         => '',
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h4 class="widgettitle">',
      'after_title'   => '</h4>' 
    );
  
    register_sidebar( $args );
    
    
  }
  add_action( 'widgets_init', 'my_awesome_sidebar' );


wp_enqueue_style("main",get_template_directory_uri() . '/css/main.css');
wp_enqueue_style("bootstrap",get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style("tipografia 1 ",get_template_directory_uri() . '/https://fonts.googleapis.com/css?family=Playfair+Display');
wp_enqueue_style("tipografia 2 ",get_template_directory_uri() . '/https://fonts.googleapis.com/css?family=Lato');
wp_enqueue_script("js",get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),'4.1.3',true);
}
agregar_estilos();
//Para dar soporte a logos personalizados
add_theme_support('custom-logo');
//Para dar soporte a imagenes destacadas
add_theme_support('post-thumbnails');
?>
