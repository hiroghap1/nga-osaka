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
	</header>

	<div class="_c-entry__content">
    <?php
      $args = array(
        'post_type' => 'store',
        'posts_per_page' => -1
      );
      $st_query = new WP_Query($args);
    ?>
    <?php if ($st_query->have_posts()): ?>
      <ul class="_c-row _c-row--margin-s" id="amuse-list" style="list-style:none;justify-content: center">
        <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
          <?php get_template_part('template-parts/amuse'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <?php else: ?>
      <p>新しい記事はありません</p>
    <?php endif; ?>
  </div>
</article>

<?php
if (comments_open() || pings_open() || get_comments_number()) {
        comments_template('', true);
    }
