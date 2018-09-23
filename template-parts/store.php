<?php
$image = get_field('amuse_photo');
$seating = get_field('seating') == false ? 0:get_field('seating');
$standing = get_field('standing') == false ? 0:get_field('standing');
$smokings = get_field_object('smoking');
$smoking = $smokings['value'];
$sake_freshes = get_field_object('sake_fresh');
$sake_fresh = $sake_freshes['value'];
$sake_fragrances = get_field_object('sake_fragrance');
$sake_fragrance = $sake_fragrances['value'];
$sake_tastes = get_field_object('sake_taste');
$sake_taste = $sake_tastes['value'];
$sake_temps = get_field_object('sake_temp');
$sake_temp = $sake_temps['value'];
$image1 = get_field('store_image1');
$image2 = get_field('store_image2');
$image3 = get_field('store_image3');
?>

<dl class="store-info _c-row">
<dt class="_c-row__col--1-4">住所</dt>
  <dd class="_c-row__col--3-4"><?php the_field('address'); ?></dd>
  <?php if (get_field('tel')): ?>
  <dt class="_c-row__col--1-4">電話番号</dt>
<dd class="_c-row__col--3-4"><?php if (is_mobile()) {
    echo '<a href="tel:'.str_replace("-", "", get_field('tel')).'">'.get_field('tel').'</a>';
} else {
    the_field('tel');
} ?></dd>
<?php endif; ?>
  <dt class="_c-row__col--1-4">開催時間</dt>
  <dd class="_c-row__col--3-4"> <?php echo substr_replace(get_field('open'), ':', 2, 0); ?>〜<?php echo substr_replace(get_field('last_order'), ':', 2, 0); ?>(L.O.)</span></dd>
  <dt class="_c-row__col--1-4">収容人数</dt>
  <dd class="_c-row__col--3-4">着席<?php echo $seating; ?>名/立食<?php echo $standing;?>名/合計<?php echo $seating + $standing; ?>名</dd>
<?php if (get_field('amuse')): ?>
  <dt class="_c-row__col--1-4">付きだし</dt>
  <dd class="_c-row__col--3-4">
    <figure>
      <a href="<?php echo $image['url']; ?>" rel="store-image"><img class="amuse-photo img-thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php the_field('amuse'); ?>" /></a>
    </figure>
    <h2 class="_c-row__col--1-1"><?php the_field('amuse'); ?></h2></dd>
<?php endif; ?>
<?php if (get_field('price')): ?>
  <dt class="_c-row__col--1-4">料金</dt>
  <dd class="_c-row__col--3-4"><?php the_field('price'); ?>円</dd>
<?php endif; ?>
<?php if ($smokings['label']): ?>
  <dt class="_c-row__col--1-4">禁煙 / 喫煙</dt>
  <dd class="_c-row__col--3-4"><?php echo $smokings['choices'][ $smoking ];?></dd>
<?php endif; ?>
<?php if (get_field('website')): ?>
  <dt class="_c-row__col--1-4">webサイト</dt>
  <dd class="_c-row__col--3-4"><a href="<?php the_field('website'); ?>" target="_blank"><?php the_field('website'); ?></a></dd>
<?php endif; ?>
  <dt class="_c-row__col--1-4">サービス酒</dt>
  <dd class="_c-row__col--3-4"><h2 class="sake-name"><?php the_field('sake'); ?> <?php the_field('sake_name'); ?>
  <small class="pref"><?php the_field('sake_pref'); ?></small></h2></dd>
  <?php if ($sake_freshes['label'] || $sake_fragrances['label'] ||$sake_tastes['label']): ?>
  <dt class="_c-row__col--1-4">お酒のタイプ</dt>
  <dd class="_c-row__col--3-4">
    <ul class="sake-type">
      <?php if ($sake_freshes['label']): ?>
      <li><?php echo $sake_freshes['choices'][ $sake_fresh ]; ?></li>
      <?php endif; ?>
      <?php if ($sake_fragrances['label']): ?>
      <li><?php echo $sake_fragrances['choices'][ $sake_fragrance ]; ?></li>
      <?php endif; ?>
      <?php if ($sake_tastes['label']): ?>
      <li><?php echo $sake_tastes['choices'][$sake_taste]; ?></li>
      <?php endif; ?>
    </ul>
    <?php if ($sake_temps['label']): ?>
    <div class="sake-temp">提供温度:<?php foreach ($sake_temp as $temp): ?>
    <span><?php echo $sake_temps['choices'][$temp]; ?></span><?php endforeach; ?></div>
    <?php endif; ?>
  </dd>
<?php endif; ?>
  <?php if (get_field('sake_man')): ?>
  <dt class="_c-row__col--1-4">参加蔵元氏名（役職）</dt>
  <dd class="_c-row__col--3-4"><?php the_field('sake_man'); ?></dd>
<?php endif; ?>
<?php if ($image1): ?>
  <dt class="_c-row__col--1-4">写真</dt>
  <dd class="_c-row__col--3-4" style="display: flex;justify-content: space-around;padding-bottom: .5rem;">
    <figure style="margin-bottom:.5rem;">
      <a href="<?php echo $image1['url']; ?>" rel="store-image"><img class="img-thumbnail" src="<?php echo $image1['sizes']['thumbnail']; ?>" alt="<?php echo $image1['alt']; ?>" /></a>
    </figure>
    <?php if ($image2): ?>
      <figure style="margin-bottom:.5rem;">
        <a href="<?php echo $image2['url']; ?>" rel="store-image"><img class="img-thumbnail" src="<?php echo $image2['sizes']['thumbnail']; ?>" alt="<?php echo $image2['alt']; ?>" /></a>
      </figure>
    <?php endif; ?>
    <?php if ($image3): ?>
      <figure style="margin-bottom:.5rem;">
        <a href="<?php echo $image3['url']; ?>" rel="store-image"><img class="img-thumbnail" src="<?php echo $image3['sizes']['thumbnail']; ?>" alt="<?php echo $image3['alt']; ?>" /></a>
      </figure>
    <?php endif; ?></dd>
<?php endif; ?>
</dl>
