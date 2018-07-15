<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>

<div class="store-archive_panel">
  <p>並べ替え</p>
  <button class="_c-btn _c-btn-sort" data-sort="open"><span>イベント開始時間</span>
    <span>
      <i class="fa fa-sort" aria-hidden="true"></i>
      <i class="fa fa-sort-asc" aria-hidden="true"></i>
      <i class="fa fa-sort-desc" aria-hidden="true"></i>
    </span></button>
  <button class="_c-btn _c-btn-sort" data-sort="lo"><span>ラストオーダー時間</span>
  <span>
      <i class="fa fa-sort" aria-hidden="true"></i>
      <i class="fa fa-sort-asc" aria-hidden="true"></i>
      <i class="fa fa-sort-desc" aria-hidden="true"></i>
    </span></button>
</div>
<ul class="_c-entries" id="store-list">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/entry-summary--store'); ?>
	<?php endwhile; ?>
</ul>