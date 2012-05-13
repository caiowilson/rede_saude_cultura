<?php do_action( 'bp_before_sidebar' ) ?>

<div id="sidebar" class="left_column">
	<div class="padder">

	<?php do_action( 'bp_inside_before_sidebar' ) ?>

			<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Left Sidebar') ) : ?>
			<?php endif; ?>
		
	<?php do_action( 'bp_inside_after_sidebar' ) ?>

	</div><!-- .padder -->
</div><!-- #sidebar -->

<?php do_action( 'bp_after_sidebar' ) ?>
