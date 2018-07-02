<?php 
$image = get_field('amuse_photo');
$seating = get_field('seating');
$standing = get_field('standing');
$sake_freshes = get_field_object('sake_fresh');
$sake_fresh = $sake_freshes['value'];
$sake_fragrances = get_field_object('sake_fragrance');
$sake_fragrance = $sake_fragrances['value'];
$sake_tastes = get_field_object('sake_taste');
$sake_taste = $sake_tastes['value'];
$sake_temps = get_field_object('sake_temp');
$sake_temp = $sake_temps['value'];
?>

<dl class="store-info _c-row">
  <dt class="_c-row__col--1-4">開催時間</dt>
  <dd class="_c-row__col--3-4"> <?php echo substr_replace(get_field('open'),':',2,0); ?>〜<?php echo substr_replace(get_field('last_order'),':',2,0); ?>(L.O.)</span></dd>
  <dt class="_c-row__col--1-4">収容人数</dt>
  <dd class="_c-row__col--3-4">着席<?php echo $seating; ?>名/立食<?php echo $standing;?>名/合計<?php echo $seating + $standing; ?>名</dd>
  <dt class="_c-row__col--1-4">住所</dt>
  <dd class="_c-row__col--3-4"><?php the_field('address'); ?></dd>
  <dt class="_c-row__col--1-4">電話番号</dt>
  <dd class="_c-row__col--3-4"><a href="tel:<?php str_replace("-","", the_field('tel')) ?>"><?php the_field('tel');?></a></dd>
  <dt class="_c-row__col--1-4">付きだし</dt>
  <dd class="_c-row__col--3-4"><figure>
<img class="amuse-photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</figure>
<h2><?php the_field('amuse'); ?></h2></dd>
  <dt class="_c-row__col--1-4">料金</dt>
  <dd class="_c-row__col--3-4"><?php the_field('price'); ?>円</dd>
  <dt class="_c-row__col--1-4">サービス酒</dt>
  <dd class="_c-row__col--3-4"><h2 class="sake-name"><?php the_field('sake'); ?> <?php the_field('sake_name'); ?>
  <small class="pref"><?php the_field('sake_pref'); ?></small></h2></dd>
  <dt class="_c-row__col--1-4">お酒のタイプ</dt>
  <dd class="_c-row__col--3-4">
    <ul class="sake-type">
      <?php if($sake_freshes['label']): ?>
      <li><?php echo $sake_freshes['choices'][ $sake_fresh ]; ?></li>
      <?php endif; ?>
      <?php if($sake_fragrances['label']): ?>
      <li><?php echo $sake_fragrances['choices'][ $sake_fragrance ]; ?></li>
      <?php endif; ?>
      <?php if($sake_tastes['label']): ?>
      <li><?php echo $sake_tastes['choices'][$sake_taste]; ?></li>
      <?php endif; ?>
    </ul>
    <?php if($sake_temps['label']): ?>
    <div class="sake-temp">提供温度:<?php foreach( $sake_temp as $temp ): ?>
    <span><?php echo $sake_temps['choices'][$temp]; ?></span><?php endforeach; ?></div>
    <?php endif; ?>
  </dd>
  <dt class="_c-row__col--1-4">参加蔵元氏名（役職）</dt>
  <dd class="_c-row__col--3-4"><?php the_field('sake_man'); ?></dd>
  <dt class="_c-row__col--1-4">蔵元の紹介</dt>
  <dd class="_c-row__col--3-4"><?php the_field('sake_desc'); ?></dd>
</dl>