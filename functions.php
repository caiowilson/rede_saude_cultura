<?php
// functions added here will load IN ADDITION to functions from the parent theme's functions.php.


if ( function_exists ('register_sidebar')) { 
/* Register the widget columns */
  // Area 2, located in the homepage left column.
  register_sidebar( array(
      'name'          => 'Left Sidebar',
      'id'            => 'left-sidebar',
      'description'   => 'The site left bar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>'
    )
  );
 
  // Area 3, Bloco que ficará no HEADER.
  register_sidebar( array(
      'name'          => 'Header Block',
      'id'            => 'header-block',
      'description'   => 'Bloco do topo do site.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-hb">',
      'after_title'   => '</h3>'
    )
  ); 
  
  
}

// Desativa a barra lá de cima
define('BP_DISABLE_ADMIN_BAR', true);


?>
