<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sparkling
 */
?>
</div>
	<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
		<div class="well">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php esc_html_e( 'Archives', 'sparkling' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php esc_html_e( 'Meta', 'sparkling' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
            <script type="text/javascript"><!--
                amazon_ad_tag = "blogmajorapps-21"; amazon_ad_width = "300"; amazon_ad_height = "250"; amazon_ad_link_target = "new"; amazon_ad_border = "hide"; amazon_ad_categories = "abcdflen";//--></script>
            <script type="text/javascript" src="http://ir-uk.amazon-adsystem.com/s/ads.js"></script>
		</div>
	</div><!-- #secondary -->
