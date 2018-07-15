<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>

<div class="store-archive_panel">
  <div class="_c-row">
  <button class="_c-btn _c-btn--block _u-text-left btn-sort_box" id="btn-sort_box">並べ替え</button>
  <button class="_c-btn _c-btn--block _u-text-left btn-refine_box" id="btn-refine_box">絞り込み</button></div>
  <div class="_c-box--sort_btn" id="_c-box--sort_btn">
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
<div class="_c-box--refine_btn" id="_c-box--refine_btn">
<label><input type="checkbox" name="address" value="北区" checked>北区</label>
<label><input type="checkbox" name="address" value="都島区" checked>都島区</label>
<label><input type="checkbox" name="address" value="福島区" checked>福島区</label>
  <label><input type="checkbox" name="address" value="中央区" checked>中央区</label>
  <label><input type="checkbox" name="address" value="浪速区" checked>浪速区</label>
  <label><input type="checkbox" name="address" value="天王寺区" checked>天王寺区</label>
  <label><input type="checkbox" name="address" value="東成区" checked>東成区</label>
</div></div>
<ul class="_c-entries" id="store-list">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/entry-summary--store'); ?>
	<?php endwhile; ?>
</ul>