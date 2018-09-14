<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-sticky-footer="true">
<?php get_template_part('template-parts/head'); ?>

<body <?php body_class(); ?>>
<div class="_c-drawer" data-c="drawer">
	<?php get_template_part('template-parts/drawer-nav'); ?>
	<div class="_l-container" data-l="container">
		<?php get_header(); ?>
		<div class="index-keyvisual">
      <div class="_c-container sakazukin-osaka"style="background: url(<?php echo get_stylesheet_directory_uri().'/img/nga-osaka-index.png'; ?>) center center/contain no-repeat"></div>
    </div>

		<div class="_l-contents" role="document" data-l="contents">
      <main class="_l-main" role="main">
        <article <?php post_class(); ?>>
          <div class="_c-container">
            <div class="_c-row _c-row--margin">
              <div class="_c-row__col _c-row__col--1-1">
                <header class="_c-entry__header">
                  <h1 class="_c-entry__title"><?php the_title(); ?></h1>
                </header>
                <div class="_c-entry__content _u-text-center">
                  <section>
                    <div class="index--description">
                      <?php the_content(); ?>
                    </div>
                  </section>
                  <section class="_c-section">  
                    <div class="index--rules">
                      <?php the_field('index_rules'); ?>
                    </div>
                  </section>
                  <section class="_c-section index-store-list">
                    <h2 class="_c-section__title">参加店舗 & 蔵元</h2>
                    <h3>【都島区】</h3>
                    <ul class="_c-row _c-row--margin">
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">日本酒とお食事 はちどり & 遊穂(石川)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">洋風小皿食堂TAPA & 招徳(京都)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">立喰酒場 舫& 風の森(奈良)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">和風バール『鳥羽屋』 & 奥播磨(兵庫)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">紀の国屋くっす～ & 小松人(石川)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">ラ・マンミーナ & 舞美人(福井)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">鮪魂 一将丸 & 明尽(滋賀)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">片町 弥ひろ & 居谷里(長野)</li>
                    </ul>
                    <h3>【北区】</h3>
                    <ul class="_c-row _c-row--margin">
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">愛媛酒場 丸富 & 川亀(愛媛)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">群醸日和 & 都美人(兵庫)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">ご馳走 ね音 & 播州一献(兵庫)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">焼とんyaたゆたゆ天満店 & 黒牛(和歌山)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">立ち呑み あずき色のマーカス & 北島(滋賀)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">お酒とおばんざい すいか & 菊姫(石川)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">和 藤もと & 羽陽男山(山形)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">日本酒食堂SO-KEN & 富久錦(兵庫)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">ソラマメ食堂 & 十旭日(島根)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">北龍 & 東北泉(山形)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">日本酒 かんき & 天穏(島根)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">創作居酒屋なごみ & 華姫桜(愛媛)</li>
                    </ul>
                    <h3>【福島区】</h3>
                    <ul class="_c-row _c-row--margin">
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">炭と日本酒 仁 福島店 & 桂月(高知)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">ジャックとマチルダ & いづみ橋(神奈川)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">和酒 吟蔵 & 米宗(愛知)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">菜米炭” & 但馬(兵庫)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">日本酒弘大 & 辨天娘(鳥取)</li>
                    </ul>
                    <h3>【中央区】</h3>
                    <ul class="_c-row _c-row--margin">
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">高麗橋 桜花 & 美冨久(滋賀)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">寧& 白老(愛知)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">和魂ほむら & 菊鷹(愛知)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">蔵朱 & 竹鶴(広島)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">楽酒楽肴 越冬 & 長龍(奈良)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">ハナレノミ カジノバ & 山形正宗(山形)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">味酒かむなび & 華鳩(広島)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">空堀 きぬ川 & 金亀(滋賀)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">心斎橋日本酒酒場キャンプ & 大倉(奈良)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">日本酒うなぎだに & 紀土(和歌山)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">和っか 心斎橋 & 秋鹿(大阪)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">にほん酒や一路 & 鯨波(岐阜)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">まえだ家 & 杉錦(静岡)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">うろこ屋 & 一白水成(秋田)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">大阪焼トンセンター & 花垣(福井)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">立呑みQ & 亀齢(広島)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">日本酒酒場てんせん & 南方(和歌山)</li>
                    </ul>
                    <h3>【天王寺区】</h3>
                    <ul class="_c-row _c-row--margin">
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">おまめさん & 原田(山口)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">お酒といろいろ バンコ & タクシードライバー(岩手)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">穂゜ん亭 & 武勇(茨城)</li>
                    </ul>
                    <h3>【東成区】</h3>
                    <ul class="_c-row _c-row--margin">
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">酒toCurryアーチル & 三芳菊(徳島)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">炭火焼鳥と蒟蒻の店 鶫屋 & 中島屋(山口)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">大阪まんぷく堂 & 多賀治(岡山)</li>
                    </ul>
                    <h3>【浪速区】</h3>
                    <ul class="_c-row _c-row--margin">
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">だいどこやまなか & 神雷(広島)</li>
                      <li class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">あなぐま亭 & 蒼空(京都)</li>
                    </ul>
                  </section>
                 <section class="_c-section">
                    <h2><a href="store/"><img class="storelist-banner" src="<?php echo get_stylesheet_directory_uri().'/img/storelist.jpg'; ?>" alt="参加店舗一覧"></a></h2>
                    <p>↑参加店舗と蔵元の詳細はこちらから</p>
                  </section>
                  <section class="_c-section">
                    <h2 class="_c-section__title">日本酒ゴーアラウンド大阪 公式SNS</h2>
                    <p>日本酒ゴーアラウンド大阪の最新情報はこちらをチェック！</p>
                    <div class="_c-row _c-row--margin">
                      <div class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">
                        <h3 class="index_latest-title">Facebookページ</h3>
                        <div id="fb-root"></div>
                        <script>
                          (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.1&appId=398244447366176&autoLogAppEvents=1';
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-page" data-href="https://www.facebook.com/NGAOSAKA1001" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                          <blockquote cite="https://www.facebook.com/NGAOSAKA1001" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NGAOSAKA1001">日本酒ゴーアラウンド大阪2018</a>
                          </blockquote>
                        </div>
                      </div>
                      <div class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">
                        <h3 class="index_latest-title">Twitter</h3>
                        <a class="twitter-timeline" data-height="400" href="https://twitter.com/ngaosaka1001?ref_src=twsrc%5Etfw">Tweets by ngaosaka1001</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                      </div>
                      <div class="_c-row__col _c-row__col--1-1 _c-row__col--md-1-3">
                        <h3 class="index_latest-title">日本酒卍固めブログ</h3>
                        <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="89250/"></script> <!-- end feedwind code -->
                      </div>
                    </div>
                  </section>
								<?php get_template_part('template-parts/link-pages'); ?>
							</div>
				</div>
			</div>
		</div>
    </article>
					</main>
	</div>

		<?php get_footer(); ?>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
