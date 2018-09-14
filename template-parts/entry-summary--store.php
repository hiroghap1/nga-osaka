<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$image = get_field('amuse_photo');
$standing = get_field('standing') == false ? 0 :get_field('standing');
$seating = get_field('seating') == false ? 0 : get_field('seating');
$capacity = $standing + $seating;
$open = get_field('open');
$lo = get_field('last_order');
$price = get_field('price');
$address = get_field('address');
$terms = get_the_terms($post->ID, 'area');
$area = $terms? $terms[0]->name:'';
?>

<li class="_c-entries__item _c-entries__item-store" data-open="<?php echo $open; ?>" data-lo="<?php echo $lo; ?>" data-address="<?php echo $area;?>" data-price="<?php echo str_pad($price, 4 - strlen($price), 0, STR_PAD_LEFT); ?>" data-capacity="<?php echo $capacity; ?>">
  <section class="_c-entry-summary _c-entry-summary-store">
    <header class="_c-entry-summary__header">
		  <h2 class="_c-entry-summary__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="_u-text-right">
      <a href="<?php the_permalink(); ?>" class="btn">店舗の詳細はこちら</a>
    </div>
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
        <p>着席<?php echo $seating; ?>名 / 立食<?php echo $standing;?>名 / <span class="store-capacity">合計<?php echo $capacity; ?>名</span></p>
        <h3><?php the_field('amuse'); ?></h3>
        <p class="store-price"><?php echo $price; ?>円</p>
      </div>
      <p class="store-desc-short"><?php the_field('store_desc_short'); ?></p>
	  </div>
  </section>
</li>