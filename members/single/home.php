<?php

/**
 * BuddyPress - Users Home
 *
 * @package BuddyPress
 * @subpackage BuddyBoss
 */
 
?>

<?php get_header( 'buddypress' ); ?>

  <?php locate_template( array( 'sidebar-left.php' ), true ) ?>


	 <?php if ( is_active_sidebar('profile') ) : ?> 
	   <div id="content" class="three_column">  
	 <?php else: ?>
	   <div id="content" class="two_column_left">  
	   
	 <?php endif; ?>
	  
		<div class="padder">
  <div id="destacado">
     <?php do_action( 'bp_before_member_home_content' ) ?>

      <div id="item-header">
        <?php if ( bp_is_my_profile() ) { ?>
          <h2>Meu perfil</h2>
        <?php }else{ ?>
          <?php locate_template( array( 'members/single/member-header.php' ), true ) ?>
        <?php } ?>
        
          
      </div><!-- #item-header -->
        <div id="item-nav">       
          <div class="item-list-tabs no-ajax" id="object-nav">
            
             <?php if ( bp_is_my_profile() ) { ?>
                <<- Use o "Meu menu" da barra lateral esquerda para navegar no seu perfil <<--
              <?php } else { ?>
                <ul>
                  <?php bp_get_displayed_user_nav() ?>

                  <?php  /* if ( has_nav_menu( 'profile-menu' ) ) : ?>
                      <?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'profile-menu', 'items_wrap' => '%3$s' ) ); ?>
                  <?php endif; */?>

                  <?php do_action( 'bp_member_options_nav' ) ?>
                </ul>
              <?php } ?>
          </div>    
        </div><!-- #item-nav -->
      
  </div>
			<div id="item-body">

				<?php do_action( 'bp_before_member_body' );
				
				if ( bp_is_user_activity() || !bp_current_component() ) :
					locate_template( array( 'members/single/activity.php' ), true );

				 elseif ( bp_is_user_blogs() ) :
					locate_template( array( 'members/single/blogs.php'    ), true );

				elseif ( bp_is_user_friends() ) :
					locate_template( array( 'members/single/friends.php'  ), true );

				elseif ( bp_is_user_groups() ) :
					locate_template( array( 'members/single/groups.php'   ), true );

				elseif ( bp_is_user_messages() ) :
					locate_template( array( 'members/single/messages.php' ), true );

				elseif ( bp_is_user_profile() ) :
					locate_template( array( 'members/single/profile.php'  ), true );

				elseif ( bp_is_user_forums() ) :
					locate_template( array( 'members/single/forums.php'  ), true );

				// If nothing sticks, load a generic template
				else :
					locate_template( array( 'members/single/front.php'    ), true );

				endif;

				do_action( 'bp_after_member_body' ); ?>

			</div><!-- #item-body -->

			<?php do_action( 'bp_after_member_home_content' ) ?>

		</div><!-- .padder -->
	</div><!-- #content -->
	
	<?php if ( is_active_sidebar('profile') ) : ?>
		<?php locate_template( array( 'sidebar-profile.php' ), true ) ?>
	<?php endif; ?>

<?php get_footer() ?>
