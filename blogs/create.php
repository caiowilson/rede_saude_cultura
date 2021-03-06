<?php

/**
 * BuddyPress - Create Blog
 *
 * @package BuddyPress
 * @subpackage BuddyBoss
 */

?>

<?php get_header( 'buddypress' ); ?>

<?php locate_template( array( 'sidebar-left.php' ), true ) ?>

	<?php do_action( 'bp_before_directory_blogs_content' ) ?>

	<div id="content" class="two_column_left">
		<div class="padder">
		
		<?php do_action( 'template_notices' ); ?>

				<h3><?php _e( 'Create a Site', 'buddypress' ); ?> &nbsp;</h3><div class="generic-button"><a class="add" href="<?php echo trailingslashit( bp_get_root_domain() . '/' . bp_get_blogs_root_slug() ) ?>"><?php _e( 'Site Directory', 'buddypress' ); ?></a></div><br/>

				<?php do_action( 'bp_before_create_blog_content' ); ?>
				
				<?php if ( bp_blog_signup_enabled() ) : ?>

					<?php bp_show_blog_signup_form(); ?>

				<?php else: ?>

					<div id="message" class="info">
						<p><?php _e( 'Site registration is currently disabled', 'buddypress' ); ?></p>
					</div>

				<?php endif; ?>
				<?php do_action( 'bp_after_create_blog_content' ); ?>
			
		</div><!-- .padder -->
	</div><!-- #content -->
  

	<?php do_action( 'bp_before_directory_blogs_content' ) ?> 

	<?php do_action( 'bp_after_directory_blogs_content' ) ?>

<?php get_footer() ?>

