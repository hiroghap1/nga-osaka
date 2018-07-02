<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<header class="_l-header" role="banner" data-l="header">
	<div class="_c-container">
		<div class="_c-row _c-row--middle">
			<div class="_c-row__col _c-row__col--3-4 _c-row__col--lg-1-1">
				<?php get_template_part( 'template-parts/site-branding' ); ?>
			</div>

			<?php if ( has_nav_menu( 'drawer-nav' ) ) : ?>
			<div class="_c-row__col _c-row__col--1-4 _u-hidden-lg _u-text-right">
				<?php get_template_part( 'template-parts/hamburger-btn' ); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>

	<?php if ( has_nav_menu( 'global-nav' ) ) : ?>
	<div class="_u-hidden-sm _u-hidden-md">
		<?php
		add_filter( 'wp_nav_menu_args', function( $args ) {
			if ( 'global-nav' == $args['theme_location'] ) {
				$args = array_merge( $args, [
					'container'       => 'div',
					'container_class' => '_c-container',
				] );
			}
			return $args;
		} );
		get_template_part( 'template-parts/global-nav' );
		?>
	</div>
	<?php endif; ?>
</header>
