			<footer class="b">
				<div id="footerHeader" class="wrap flex">
					<div class="flex20">
						<?php if ( get_theme_mod( 'logo' ) ) : ?>
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						<?php else : ?>
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					</div>
					<div class="flex30"><!-- --></div>
					<div class="flex50 flex">
						<ul class="flex100 flex">
							<li class="flex33">
								<?php wp_nav_menu( array( 'container' => 'nav', 'menu' => 'header','menu_class' => false,'menu_id' => false) ); ?>
							</li>
							<li class="flex33">
								<p class="b"><strong>Links Úteis</strong></p>
								<?php wp_nav_menu( array( 'container' => 'nav', 'menu' => 'footer','menu_class' => false,'menu_id' => false) ); ?>
							</li>
							<li class="flex33">
								<p class="b"><strong>Contato</strong></p>
								<?php echo "<p class='b'>".get_theme_mod( 'telefone' )."</p>"; ?>
								<br/>
								<p class="b"><strong>Email</strong></p>
								<?php echo "<p class='b'><a href='mailto:".get_theme_mod( 'email' )."' title='".get_theme_mod( 'email' )."'>".get_theme_mod( 'email' )."</a></p>"; ?>
							</li>
						</ul>
					</div>
				</div>
				<div id="copyright">
					<div class="wrap">
						<?php echo "<p class='b'>© Copyright ".date('Y')." ".get_theme_mod( 'copyright' )."</p>"; ?>
					</div>  
				</div>
			</footer>
		</div>
        <div id="fb-root"></div>
		<script type="text/javascript">
		    jQuery(document).ready(function(){
		    	$('header > .wrap nav').on( "click", function() {
		    		if ($(window).width() <= 1024) {
		    			// jQuery('html, body').stop(true, false).animate({
		    			// 	scrollTop: jQuery("body").offset().top
		    			// }, 500);
		    			$("#menuMobile").toggleClass("on");
		    			if($("#menuMobile").hasClass("on")){
		    				$("header,main,header > .wrap nav").addClass("opened");
		    			} else {
		    				$(".on").removeClass("on");
		    				$(".opened").removeClass("opened");
		    			}
		    		}
		    	});
		    	$(window).resize(function(){
		    		$(".on").removeClass("on");
		    		$(".opened").removeClass("opened");
		    	}); 
		    	var lastScrollTop = 0;
		    	$(window).scroll(function(event){
		    		var st = $(this).scrollTop();
		    		if (st > lastScrollTop){
		    			$(".on").removeClass("on");
		    			$(".opened").removeClass("opened");
		    		}
		    		lastScrollTop = st;
		    	});
				$( ".accordion li h2" ).each(function() {
					$(this).click(function() {
						$(this).parent().toggleClass("open");
					});
				});
		    });
		</script>
        <?php wp_footer(); ?> 
    </body>
</html>