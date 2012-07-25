<?php

/**
 * BuddyPress - Users Plugins
 *
 * This is a fallback file that external plugins can use if the template they
 * need is not installed in the current theme. Use the actions in this template
 * to output everything your plugin needs.
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
        <?php locate_template( array( 'members/single/member-header.php' ), true ) ?>
      </div><!-- #item-header -->

      <div id="item-nav">       
        <div class="item-list-tabs no-ajax" id="object-nav">
          <ul>
            <?php bp_get_displayed_user_nav() ?>

            <?php  /* if ( has_nav_menu( 'profile-menu' ) ) : ?>
                <?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'profile-menu', 'items_wrap' => '%3$s' ) ); ?>
            <?php endif; */?>

            <?php do_action( 'bp_member_options_nav' ) ?>
          </ul>
        </div>    
      </div><!-- #item-nav -->
  </div>
			<div id="item-body" role="main">

				<?php do_action( 'bp_before_member_body' ); ?>

				<div class="item-list-tabs no-ajax" id="subnav">
					<ul>

						<?php bp_get_options_nav(); ?>

						<?php do_action( 'bp_member_plugin_options_nav' ); ?>

					</ul>
				</div><!-- .item-list-tabs -->

				<h3><?php do_action( 'bp_template_title' ); ?></h3>

				<?php do_action( 'bp_template_content' ); ?>

				<?php do_action( 'bp_after_member_body' ); ?>

			</div><!-- #item-body -->

			<?php do_action( 'bp_after_member_plugin_template' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php if ( is_active_sidebar('profile') ) : ?>
		<?php locate_template( array( 'sidebar-profile.php' ), true ) ?>
	<?php endif; ?>

<?php get_footer() ?>
