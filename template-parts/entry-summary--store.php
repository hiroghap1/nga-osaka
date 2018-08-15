<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$image = get_field('amuse_photo');
$standing = get_field('standing') == false ? 0 :get_field('standing');
$seating = get_field('seating') == false ? 0 : get_field('seating');
$open = get_field('open');
$lo = get_field('last_order');
$price = get_field('price');
$address = get_field('address');
?>

<li class="_c-entries__item _c-entries__item-store" data-open="<?php echo $open; ?>" data-lo="<?php echo $lo; ?>" data-address="<?php echo mb_substr($address, 0, mb_strpos($address, '区')+1); ?>" data-price="<?php echo str_pad($price, 4 - strlen($price), 0, STR_PAD_LEFT); ?>">
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
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 大阪市<?php echo $address; ?></p>
        <p class="store__tel"><a href="tel:<?php str_replace("-", "", the_field('tel')) ?>"><?php the_field('tel');?></a></p>
        <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="store-open"><?php echo substr_replace($open, ':', 2, 0); ?></span>～<span class="store-lo"><?php echo substr_replace($lo, ':', 2, 0); ?>(L.O.)</span></p>
        <p>着席<?php echo $seating; ?>名 / 立食<?php echo $standing;?>名 / 合計<?php echo $seating + $standing; ?>名</p>
        <h3><?php the_field('amuse'); ?></h3>
        <p class="store-price"><?php echo $price; ?>円</p>
      </div>
      <p><?php the_field('store_desc_short'); ?></p>
	  </div>
  </section>
</li>