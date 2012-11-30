				<div id="sidebar1" class="sidebar clearfix" role="complementary">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<div id="logo" class=""><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php imgPath(); ?>logo-main.png"></a></div>

					<div id="address" class=""><a href="<?php echo home_url(); ?>/contato" rel="nofollow"><img src="<?php imgPath(); ?>layout-address.png"></a></div>

					<ul id="socialMedia">
						<li class="fb btn"><a href="#" target="_blank"></a></li>
						<li class="tw btn"><a href="#" target="_blank"></a></li>
						<li class="yt btn"><a href="#" target="_blank"></a></li>
						<li class="fl btn"><a href="#" target="_blank"></a></li>
						<li class="ig btn"><a href="#" target="_blank"></a></li>
						<li class="fs btn"><a href="#" target="_blank"></a></li>
					</ul>
					<?php /*if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif;*/ ?>

				</div>