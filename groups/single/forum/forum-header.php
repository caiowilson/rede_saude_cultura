<div id="forum-header">

	<?php if ( bp_is_group_forum_topic() ) : ?>
	
		<h2><a href="<?php bp_group_permalink() ?>" title="<?php bp_group_name() ?>"><?php bp_group_name() ?></a> &rarr; <a href="<?php bp_group_permalink() ?>forum">Forum</a> &rarr; <?php bp_the_topic_title() ?></h2>
		<span class="group-type"><?php bp_group_type() ?></span>	
		
		<div id="topic-meta">
			<div class="admin-links">
				<?php if ( bp_group_is_admin() || bp_group_is_mod() || bp_get_the_topic_is_mine() ) : ?>
					<?php bp_the_topic_admin_links() ?>
				<?php endif; ?>

				<?php do_action( 'bp_group_forum_topic_meta' ); ?>
			</div>
		</div>
	
	<?php else : ?>
		
		<h2><a href="<?php bp_group_permalink() ?>" title="<?php bp_group_name() ?>"><?php bp_group_name() ?></a> &rarr; Forum</h2>
		<span class="group-type"><?php bp_group_type() ?></span>
		
	<?php endif; ?>

	<div id="group-imagem-pequena">
       	<?php bp_group_avatar( 'type=thumb&width=50&height=50' ); ?>
    </div>
	
</div>