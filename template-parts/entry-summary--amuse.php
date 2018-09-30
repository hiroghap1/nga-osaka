<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$image = get_field('amuse_photo');
$standing = get_field('standing') == false ? 0 :get_field('standing');
$seating = get_field('seating') == false ? 0 : get_field('seating');
?>

<?php if ($image): ?>
  <li class="_c-row__col">
    <figure>
      <a href="<?php echo $image['url']; ?>" rel="amuse-image"><img class="amuse-photo img-thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo get_field('amuse')." 〜 ".get_the_title(); ?>" /></a>
    </figure>
  </li>
<?php endif;?>
