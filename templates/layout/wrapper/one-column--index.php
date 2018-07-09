<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-sticky-footer="true">
<?php get_template_part( 'template-parts/head' ); ?>

<body <?php body_class(); ?>>
<div class="_c-drawer" data-c="drawer">
	<?php get_template_part( 'template-parts/drawer-nav' ); ?>
	<div class="_l-container" data-l="container">
		<?php get_header(); ?>

		<div class="_l-contents" role="document" data-l="contents">
			<div class="_c-container">

				<div class="_c-row _c-row--margin">
					<div class="_c-row__col _c-row__col--1-1">
						<main class="_l-main" role="main">
							<?php $this->view(); ?>
						</main>
					</div>

					<div class="_c-row__col _c-row__col--1-1">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
