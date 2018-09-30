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
$tel = get_field('tel');
$price = get_field('price');
$address = get_field('address');
$terms = get_the_terms($post->ID, 'area');
$smokings = get_field_object('smoking');
$smoking = $smokings['value'];
$sake_freshes = get_field_object('sake_fresh');
$sake_fresh = $sake_freshes['value'];
$sake_fragrances = get_field_object('sake_fragrance');
$sake_fragrance = $sake_fragrances['value'];
$sake_tastes = get_field_object('sake_taste');
$sake_taste = $sake_tastes['value'];
$sake_temps = get_field('sake_temp');
$sake_temp = $sake_temps['value'];
$desc = get_field('store_desc_short');
$area = $terms? $terms[0]->name:'';
?>

<li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-2 _c-row__col--lg-1-3 store-list-item" data-hidden='[]' data-open="<?php echo $open; ?>" data-lo="<?php echo $lo; ?>" data-address="<?php echo $area;?>" data-price="<?php echo str_pad($price, 4 - strlen($price), 0, STR_PAD_LEFT); ?>" data-capacity="<?php echo $capacity; ?>" data-smoking="<?php echo $smoking; ?>" data-fresh="<?php echo $sake_fresh; ?>" data-fragrance="<?php echo $sake_fragrance; ?>" data-taste="<?php echo $sake_taste; ?>" data-temp='[<?php foreach ($sake_temps as $temp):?>"<?php echo $temp; ?>",<?php endforeach; ?>]'>
  <section class="_c-entry-summary _c-entry-summary-store _c-entries__item _c-entries__item-store">
    <header class="_c-entry-summary__header">
      <h2 class="_c-entry-summary__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php if ($image): ?>
        <div class="_c-entry-summary__info-photo">
          <figure>
            <a href="<?php echo $image['url']; ?>" rel="amuse-image"><img class="amuse-photo img-thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo get_field('amuse')." 〜 ".get_the_title(); ?>" /></a>
          </figure>
          <ul class="_c-entry-summary__info-sake">
            <li><strong>サービス酒</strong></li>
            <?php if ($sake_freshes['label']): ?>
              <li><?php switch ($sake_fresh) {
                  case 'fresh':
                    echo '生酒';
                    break;
                  case 'burned':
                    echo '火入れ';
                    break;
                }?></li>
            <?php endif; ?>
            <?php if ($sake_fragrances['label']): ?>
              <li><?php switch ($sake_fragrance) {
                  case 'gorgeous':
                    echo '華やか';
                    break;
                  case 'calm':
                    echo '穏やか';
                    break;
                }?></li>
            <?php endif; ?>
            <?php if ($sake_tastes['label']): ?>
              <li><?php switch ($sake_taste) {
                  case 'clear':
                    echo 'スッキリ';
                    break;
                  case 'massive':
                    echo 'しっかり';
                    break;
                }?></li>
            <?php endif; ?>
            <?php if ($sake_temps): ?>
              <li><?php foreach ($sake_temps as $temp) {
                    switch ($temp) {
                  case 'cold':
                    echo '冷 ';
                    break;
                  case 'normal':
                    echo '常 ';
                    break;
                  case 'hot':
                    echo '燗 ';
                    break;
                }
                }?></li>
            <?php endif; ?>
          </ul>
        </div>
        <h3><?php the_field('amuse'); ?></h3>
      <?php endif; ?>
    </header>
    <div style="display: flex;justify-content: space-between;padding-left: .5rem;">
      <p class="store-price"><?php echo $price; ?>円</p>
      <a href="<?php the_permalink(); ?>" class="btn">店舗の詳細はこちら</a>
    </div>
    <div class="_c-entry-summary__info _u-text-left">
      <div class="_c-entry-summary__info-desc">
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 大阪市<?php echo $address; ?></p>
        <p class="_u-text-right"><a href="https://maps.google.co.jp/maps?q=<?php the_field('store_name');?>" target="_blank">⇒Googleマップで見る</a></p>
        <?php if ($tel): ?>
          <p class="store-tel">
            <?php if (is_mobile()) {
                    echo '<a href="tel:'.str_replace("-", "", $tel).'">'.$tel.'</a>';
                } else {
                    echo $tel;
                }?>
          </p>
        <?php endif; ?>
        <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="store-open"><?php echo substr_replace($open, ':', 2, 0); ?></span>～<span class="store-lo"><?php echo substr_replace($lo, ':', 2, 0); ?>(L.O.)</span></p>
        <p class="store-seating">着席<?php echo $seating; ?>名 / 立食<?php echo $standing;?>名 / <span class="store-capacity">合計<?php echo $capacity; ?>名</span></p>
        <p class="store-smoking"><?php echo $smokings['choices'][ $smoking ];?></p>
        <p class="store-sake-name"><?php the_field('sake_name'); ?></p>
      </div>
      <?php if ($desc): ?>
        <hr>
        <p class="store-desc-short"><?php echo $desc; ?></p>
      <?php endif; ?>
    </div>
  </section>
</li>