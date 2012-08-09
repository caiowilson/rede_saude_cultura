<?php get_header() ?>

  <?php locate_template( array( 'sidebar-left.php' ), true ) ?>

  <?php if ( is_active_sidebar('profile') ) : ?>
    <div id="content"class="three_column">
  <?php else: ?>
    <div id="content"class="two_column_left">
  <?php endif; ?>

		<div class="padder">

		  <div id="destacado">
		    <?php do_action( 'bp_before_member_plugin_template' ); ?>
		
		      <div id="item-header">
		
		        <?php locate_template( array( 'members/single/member-header.php' ), true ); ?>
		
		      </div><!-- #item-header -->
		
		      <div id="item-nav">
		        <div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
		          <ul>
		
		            <?php bp_get_displayed_user_nav(); ?>
		            
		            <?php if ( has_nav_menu( 'profile-menu' ) ) : ?>
		                <?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'profile-menu', 'items_wrap' => '%3$s' ) ); ?>
		            <?php endif; ?>
		
		            <?php do_action( 'bp_member_options_nav' ); ?>
		
		          </ul>
		        </div>
		      </div><!-- #item-nav -->
		  </div>
		
			<div id="item-body">
			  
        <?php do_action( 'bp_before_member_body' ); ?>
        
        <div class="item-list-tabs no-ajax" id="subnav">
          <ul>

            <?php bp_get_options_nav(); ?>

            <?php do_action( 'bp_member_plugin_options_nav' ); ?>

          </ul>
        </div><!-- .item-list-tabs -->			  
			  
				<div class="activity no-ajax">
					<?php if ( bp_has_activities( 'display_comments=threaded&include=' . bp_current_action() ) ) : ?>
				
						<ul id="activity-stream" class="activity-list item-list">
						<?php while ( bp_activities() ) : bp_the_activity(); ?>
				
							<?php locate_template( array( 'activity/entry.php' ), true ) ?>
				
						<?php endwhile; ?>
						</ul>
				
					<?php endif; ?>
				</div>
			</div><!-- #item-body -->

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php if ( is_active_sidebar('profile') ) : ?>
		<?php locate_template( array( 'sidebar-profile.php' ), true ) ?>
	<?php endif; ?>

<?php get_footer() ?>