<?php do_action( 'bp_before_group_header' ) ?>

<!-- Hide group header from forums -->
<?php if ( bp_is_group_forum() && bp_group_is_visible() ) : ?>
<?php else : ?>

	<div id="item-header-content">

    <div id="group-name">
      <h2><?php bp_group_name() ?></h2>
	  <span class="group-type"><b><?php bp_group_type() ?></b> - <?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></span><span class="activity"></span>
	  <?php do_action( 'bp_group_header_actions' ); ?>
      <div class="entry-directory">
        <?php bp_group_description() ?>
      </div>
    </div>


	</div><!-- #item-header-content -->

<?php endif; ?>

<?php do_action( 'bp_after_group_header' ) ?>

<?php do_action( 'template_notices' ) ?>
