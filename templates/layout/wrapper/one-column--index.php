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
		<div class="_c-container sakazukin-osaka"style="background: url(<?php echo get_stylesheet_directory_uri().'/img/nga-osaka-index.png'; ?>) center center/contain no-repeat"></div></div>

		<div class="_l-contents" role="document" data-l="contents">
			<div class="_c-container">

				<div class="_c-row _c-row--margin">
					<div class="_c-row__col _c-row__col--1-1">
						<main class="_l-main" role="main">
						<article <?php post_class(); ?>>
							<header class="_c-entry__header">
								<h1 class="_c-entry__title"><?php the_title(); ?></h1>
							</header>
							<div class="_c-entry__content _u-text-center">
								<section>
									<div class="index--description">
										<?php the_content(); ?>
									</div>
									<div class="index--rules">
										<?php the_field('index_rules'); ?>
									</div>
								</section>
								<section>
									<h2><a href="store/"><img class="storelist-banner" src="<?php echo get_stylesheet_directory_uri().'/img/storelist.jpg'; ?>" alt="参加店舗一覧"></a></h2>
                </section>
                <section class="nga-japan">
                  <div class="_c-row _c-row--margin">
                    <div class="_c-row__col _c-row__col--1-2">
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
                    </div>
                    <div class="_c-row__col _c-row__col--1-2">
                     <h2>全国の日本酒ゴーアラウンド</h2>
                    </div>
                  </div>
                </section>
								<?php get_template_part('template-parts/link-pages'); ?>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>
	</div>

		<?php get_footer(); ?>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
