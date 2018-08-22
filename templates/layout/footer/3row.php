<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<footer class="_l-footer" role="content-info" data-l="footer">
	<div class="_c-row">
		<div class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3 footer_widget-item">
    <?php if (is_active_sidebar('footer-1')) : ?>
					<?php dynamic_sidebar('footer-1'); ?>
		<?php endif; ?>
		</div>
		<div class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3 footer_widget-item">
      <div class="_c-container">
        <h2 class="footer_widget-title">全国の日本酒ゴーアラウンド</h2>
        <figure>
          <img src="<?php echo get_stylesheet_directory_uri().'/img/nga-japan.jpg';?>" alt="" class="alignnone size-full wp-image-201" usemap="#nga-japan">
          <map name="nga-japan">
            <area shape="rect" coords="644,307,812,562" href="https://www.facebook.com/北海道-日本酒-普及団体-Kome-Ezo酒-1574864609441118/" target="_blank" alt="札幌">
            <area shape="rect" coords="716,810,894,1040" href="https://www.facebook.com/sakeome1001/" target="_blank" alt="東京">
            <area shape="rect" coords="516,715,686,943" href="https://www.facebook.com/日本酒ゴーアラウンド名古屋-1879686945686854/" target="_blank" alt="名古屋">
            <area shape="rect" coords="383,501,559,714" href="https://www.facebook.com/日本酒ゴーアラウンド姫路-436461490096086/" target="_blank" alt="姫路">
            <area shape="rect" coords="548,958,707,1194" href="https://www.facebook.com/日本酒ゴーアラウンド2018京都版-301221853760343/" target="_blank" alt="京都">
            <area shape="rect" coords="398,1089,545,1338" href="" target="_blank" alt="大阪">
            <area shape="rect" coords="226,978,382,1185" href="https://www.facebook.com/NGA.KOBE/" target="_blank" alt="神戸">
            <area shape="rect" coords="30,1055,222,1315" href="https://www.facebook.com/NGA2017FUKUOKA/?ref=br_rs" target="_blank" alt="福岡">
            <area shape="rect" coords="289,721,461,942" href="https://www.facebook.com/NGAOKYAMA/" target="_blank" alt="岡山">
            <area shape="rect" coords="40,748,225,1013" href="https://www.facebook.com/sake1001hiroshima/" target="_blank" alt="広島">
            <area shape="rect" coords="819,540,969,751" href="https://www.facebook.com/NGASENDAI/" target="_blank" alt="仙台">
          </map>
          <figcaption><small>各都市のさかずきんちゃんをタップするとそれぞれの都市のイベントページに飛びます。</small></figcaption>
        </figure>
      </div>
		</div>
		<div class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">
    <div class="_c-container"><h2 class="footer_widget-title">メニュー</h2></div>
			<?php
            add_filter('wp_nav_menu_args', function ($args) {
                if ('footer-nav' == $args['theme_location']) {
                    $args = array_merge($args, [
                        'container'       => 'div',
                        'container_class' => '_c-container',
                    ]);
                }
                return $args;
            });
            get_template_part('template-parts/footer-nav');
            ?>
		</div>
		<div class="_c-row__col _c-row__col--1-1">
			<div class="_c-container">
				<?php get_template_part('template-parts/copyright'); ?>
			</div>
		</div>
	</div>
</footer>
