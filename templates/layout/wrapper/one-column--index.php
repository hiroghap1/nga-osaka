<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-sticky-footer="true">
<?php get_template_part('template-parts/head'); ?>

<body <?php body_class(); ?>>
<div class="_c-drawer" data-c="drawer">
	<?php get_template_part('template-parts/drawer-nav'); ?>
	<div class="_l-container" data-l="container">
		<?php get_header(); ?>
		<div class="index-keyvisual">
		<div class="_c-container sakazukin-osaka"style="background: url(<?php echo get_stylesheet_directory_uri().'/img/nga-osaka-index.png'; ?>) center center/contain no-repeat"></div></div>

		<div class="_l-contents" role="document" data-l="contents">
			<div class="_c-container">

				<div class="_c-row _c-row--margin">
					<div class="_c-row__col _c-row__col--1-1">
						<main class="_l-main" role="main">
						<article <?php post_class(); ?>>
							<header class="_c-entry__header">
								<h1 class="_c-entry__title"><?php the_title(); ?></h1>
							</header>
							<div class="_c-entry__content _u-text-center">
								<section>
									<div class="index--description">
										<?php the_content(); ?>
									</div>
									<div class="index--rules">
										<?php the_field('index_rules'); ?>
									</div>
								</section>
								<section>
									<h2><a href="store/"><img class="storelist-banner" src="<?php echo get_stylesheet_directory_uri().'/img/storelist.jpg'; ?>" alt="参加店舗一覧"></a></h2>
                </section>
								<?php get_template_part('template-parts/link-pages'); ?>
							</div>
						</article>
					</main>
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
