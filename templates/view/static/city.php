<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<article <?php post_class(); ?>>
	<header class="_c-entry__header">
		<h1><?php the_title(); ?></h1>
	</header>

	<div class="_c-entry__content">
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
		<?php get_template_part('template-parts/link-pages'); ?>
	</div>
</article>

<?php
if (comments_open() || pings_open() || get_comments_number()) {
    comments_template('', true);
}
