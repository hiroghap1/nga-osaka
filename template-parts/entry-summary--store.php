<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$image = get_field('amuse_photo');
$standing = get_field('standing') == false ? 0 :get_field('standing');
$seating = get_field('seating') == false ? 0 : get_field('seating');

?>

<li class="_c-entries__item _c-entries__item-store">
  <section class="_c-entry-summary _c-entry-summary-store">
    <header class="_c-entry-summary__header">
		  <h2 class="_c-entry-summary__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	  </header>
	  <div class="_c-entry-summary__info _c-row">
      <div class="_c-row__col--1-4 _c-entry-summary__info-photo">
        <figure>
          <img class="amuse-photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </figure>
      </div>
      <div class="_c-row__col--3-4 _c-entry-summary__info-desc">
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 大阪市<?php the_field('address'); ?></p>
        <p class="store__tel"><a href="tel:<?php str_replace("-", "", the_field('tel')) ?>"><?php the_field('tel');?></a></p>
        <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo substr_replace(get_field('open'), ':', 2, 0); ?>～<?php echo substr_replace(get_field('last_order'), ':', 2, 0); ?>(L.O.)</span></p>
        <p>着席<?php echo $seating; ?>名 / 立食<?php echo $standing;?>名 / 合計<?php echo $seating + $standing; ?>名</p>
        <h3><?php the_field('amuse'); ?></h3>
        <p><?php the_field('price'); ?>円</p>
        <p><?php the_field('store_desc'); ?></p>
      </div>
	  </div>
  </section>
</li>