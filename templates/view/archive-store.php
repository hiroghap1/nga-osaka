<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
if (isset($_GET['area'])) {
    $areaList = [$_GET['area']];
} else {
    $areaList = [
   '都島区','北区','福島区','中央区','天王寺区','東成区','浪速区'
 ];
}
if (isset($_GET['smoking'])) {
    switch ($_GET['smoking']) {
      case 'no_smoking':
        $smokeList = ['no_smoking'=>'禁煙'];
        break;
      case 'smoking':
        $smokeList = ['smoking'=>'喫煙'];
        break;
      case 'area_smoking':
        $smokeList = ['area_smoking'=>'分煙'];
        break;
      default:
        $smokeList = [
          'no_smoking'=>'禁煙','smoking'=>'喫煙','area_smoking'=>'分煙'
        ];
    }
} else {
    $smokeList = [
 'no_smoking'=>'禁煙','smoking'=>'喫煙','area_smoking'=>'分煙'
];
}
if (isset($_GET['sake_fresh'])) {
    switch ($_GET['sake_fresh']) {
    case 'fresh':
      $freshList = ['fresh'=>'生酒'];
      break;
    case 'burned':
      $freshList = ['burned'=>'火入れしたお酒'];
      break;
    default:
    $freshList = ['fresh' => '生酒','burned'=>'火入れしたお酒'];
  }
} else {
    $freshList = ['fresh' => '生酒','burned'=>'火入れしたお酒'];
}
if (isset($_GET['sake_fragrance'])) {
    switch ($_GET['sake_fragrance']) {
  case 'gorgeous':
    $fragranceList = ['gorgeous'=>'華やかな香り'];
    break;
  case 'calm':
    $fragranceList = ['calm'=>'穏やかな香り'];
    break;
  default:
  $fragranceList = ['gorgeous'=>'華やかな香り','calm'=>'穏やかな香り'];
}
} else {
    $fragranceList = ['gorgeous'=>'華やかな香り','calm'=>'穏やかな香り'];
}
if (isset($_GET['sake_taste'])) {
    switch ($_GET['sake_taste']) {
case 'clear':
  $tasteList = ['clear'=>'スッキリした味'];
  break;
case 'massive':
  $tasteList = ['massive'=>'しっかりした味'];
  break;
default:
$tasteList = ['clear'=>'スッキリした味','massive'=>'しっかりした味'];
}
} else {
    $tasteList = ['clear'=>'スッキリした味','massive'=>'しっかりした味'];
}
$tempList = ['cold'=>'冷酒','normal'=>'常温','hot'=>'燗酒'];
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
  <button class="_c-btn _c-btn-sort" data-sort="price"><span>付きだし料金</span>
  <span>
      <i class="fa fa-sort" aria-hidden="true"></i>
      <i class="fa fa-sort-asc" aria-hidden="true"></i>
      <i class="fa fa-sort-desc" aria-hidden="true"></i>
    </span></button>
  <button class="_c-btn _c-btn-sort" data-sort="capacity"><span>収容人数</span>
  <span>
      <i class="fa fa-sort" aria-hidden="true"></i>
      <i class="fa fa-sort-asc" aria-hidden="true"></i>
      <i class="fa fa-sort-desc" aria-hidden="true"></i>
    </span></button>
</div>
<div class="_c-box--refine_btn" id="_c-box--refine_btn">
  <div class="checkbox-list" id="address">
    <p>地域で絞り込み</p>
    <?php foreach ($areaList as $value) {
    echo '<label><span class="_c-checkbox"><input type="checkbox" name="address" value="'.$value.'" checked><span class="_c-checkbox__control"></span></span>'.$value.'</label>';
}?>
  </div>
  <hr>
  <div class="checkbox-list" id="smoking">
    <p>禁煙/喫煙で絞り込み</p>
    <?php foreach ($smokeList as $key => $value) {
    echo '<label><span class="_c-checkbox"><input type="checkbox" name="smoking" value="'.$key.'" checked><span class="_c-checkbox__control"></span></span>'.$value.'</label>';
}?>
  </div>
  <hr>
  <p>サービス酒のタイプで絞り込み</p>
  <div class="_c-row">
    <div class="checkbox-list _c-row__col" id="fresh">
      <p>火入れ</p>
      <?php foreach ($freshList as $key => $value) {
    echo '<label><span class="_c-checkbox"><input type="checkbox" name="fresh" value="'.$key.'" checked><span class="_c-checkbox__control"></span></span>'.$value.'</label>';
}?>
    </div>
    <div class="checkbox-list _c-row__col" id="fragrance">
      <p>香り</p>
      <?php foreach ($fragranceList as $key => $value) {
    echo '<label><span class="_c-checkbox"><input type="checkbox" name="fragrance" value="'.$key.'" checked><span class="_c-checkbox__control"></span></span>'.$value.'</label>';
}?>
    </div>
    <div class="checkbox-list _c-row__col" id="taste">
      <p>味</p>
      <?php foreach ($tasteList as $key => $value) {
    echo '<label><span class="_c-checkbox"><input type="checkbox" name="taste" value="'.$key.'" checked><span class="_c-checkbox__control"></span></span>'.$value.'</label>';
}?>
    </div>
  </div>
  <div class="checkbox-list-check" id="temp">
      <p>提供温度</p>
      <?php foreach ($tempList as $key => $value) {
    echo '<label><span class="_c-checkbox"><input type="checkbox" name="temp" value="'.$key.'" checked><span class="_c-checkbox__control"></span></span>'.$value.'</label>';
}?>
  </div>
</div>
<form role="search" method="get" class="_p-search-form archive-store" action="https://nga-osaka.com/">
  <label class="screen-reader-text" for="s">検索：</label>
  <div class="_c-input-group">
    <div class="_c-input-group__field">
      <input type="search" placeholder="店舗を検索" value="" name="s">
    </div>
    <input type="hidden" name="post-type" value="store">
    <button class="_c-input-group__btn">Search</button>
  </div>
</form>
</div>
<ul class="_c-row _c-row--margin-s" id="store-list" style="list-style:none;">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/entry-summary--store'); ?>
	<?php endwhile; ?>
</ul>