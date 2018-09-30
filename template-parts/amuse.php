<?php
$image = get_field('amuse_photo');
?>

<li>
  <a href="<?php echo $image['url']; ?>" rel="store-image"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt='<a href="<?php the_permalink();?>"><?php the_field('amuse'); ?></a>'></a>
</li>
