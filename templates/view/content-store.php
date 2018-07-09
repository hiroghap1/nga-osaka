<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<article <?php post_class(); ?>>
	<header class="_c-entry__header">
		<h1><?php the_title(); ?></h1>
		<p><?php the_field('store_desc'); ?></p>
	</header>

	<div class="_c-entry__content">
    <?php get_template_part( 'template-parts/store' ); ?>
		<?php get_template_part( 'template-parts/link-pages' ); ?>
	</div>
</article>

<?php
if ( comments_open() || pings_open() || get_comments_number() ) {
	comments_template( '', true );
}
