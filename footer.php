			</div> <!-- #container -->
			
			<div id="push"></div>
		
		</div><!-- #wrapper -->

		<?php do_action( 'bp_after_container' ) ?>
		<?php do_action( 'bp_before_footer' ) ?>
	
			<div id="footer">
			
				<div id="colophon">
						    	
		    	<div id="footer-links">
			    	
			    	<ul class="footer-menu">
							<?php if ( has_nav_menu( 'secondary-menu' ) ) { ?>
								<?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'secondary-menu', 'items_wrap' => '%3$s' ) ); ?>
							<?php } else { ?>
								<?php wp_list_pages( 'title_li=&depth=3' . bp_dtheme_page_on_front() ); ?>
							<?php	} ?>
						</ul>
			    	
		    	
		    	
					<div id="credits">
						<p> <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - alguns direitos reservados &nbsp;&middot;&nbsp; <?php wp_loginout( $redirect ); ?></p>
					</div>
				</div>
				<div id="icones">
					<a class="fiocruz" href="http://portal.fiocruz.br/">Portal Fiocruz</a>
					<a class="governo" href="http://www.brasil.gov.br/">Brasil</a>
					<a class="mcultura" href="http://www.cultura.gov.br/">Ministério da Cultura</a>
				</div>
				<div class="clr"></div>
				<?php do_action( 'bp_footer' ) ?>
				
				</div>
				
			</div><!-- #footer -->
		
		<?php do_action( 'bp_after_footer' ) ?>

		<!-- required to load the BuddyBar -->
		<?php wp_footer(); ?>

		<!-- append buddyboss_wall log if needed -->
		<?php if (BUDDY_BOSS_WALL_DEBUG):?>		
			<div class="buddyboss_log">
			<?php buddy_boss_dump_log();?>
			</div> 
		<?php endif;?>
		
    <a href="#" id="bug" class="duvidas-ou-sugestoes">
			Duvidas ou Sugestões
		</a>
    <script language="JavaScript">
      /* <![CDATA[ */
      jQuery(document).ready(function() {
      jQuery('.duvidas-ou-sugestoes').colorbox({href:'http://www.next.icict.fiocruz.br/sec/wp-content/plugins/bug-library/submitnewissue.php', opacity: 0.3, iframe:true, width:'570px', height:'660px'});});/* ]]&gt; */
    </script>
    
	</body>

</html>
