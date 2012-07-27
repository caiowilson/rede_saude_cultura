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
  
  // Area 4, Bloco left que ficará na HOME.
  register_sidebar( array(
      'name'          => 'Home Content Left',
      'id'            => 'home-content-left',
      'description'   => 'Bloco esquerdo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home">',
      'after_title'   => '</h3>'
    )
  );
  
  
  // Area 5, Bloco right que ficará na HOME.
  register_sidebar( array(
      'name'          => 'Home Content Right',
      'id'            => 'home-content-right',
      'description'   => 'Bloco direito da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home">',
      'after_title'   => '</h3>'
    )
  );
  
  // Area 6, Primeiro Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 01',
      'id'            => 'home-content-top-01',
      'description'   => 'Primeiro bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home-facebook">',
      'after_title'   => '</h3>'
    )
  );
  
  // Area 7, Segundo Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 02',
      'id'            => 'home-content-top-02',
      'description'   => 'Segundo bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home-twitter">',
      'after_title'   => '</h3>'
    )
  );
  
  // Area 8, Terceiro Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 03',
      'id'            => 'home-content-top-03',
      'description'   => 'Terceiro bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home">',
      'after_title'   => '</h3>'
    )
  );
  
  // Area 9, Quarto Bloco da HOME.
  register_sidebar( array(
      'name'          => 'Home Content Top 04',
      'id'            => 'home-content-top-04',
      'description'   => 'Quarto bloco do topo da home.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle-home">',
      'after_title'   => '</h3>'
    )
  );
  
}

// Desativa a barra lá de cima
define('BP_DISABLE_ADMIN_BAR', true);


?>
