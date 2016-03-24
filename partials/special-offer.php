<?php
/**
 * Special offer teaser
 */
?>
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
  <a href="<?= get_the_permalink( $ID ); ?>">
  <?= Carawebs\Maloney\Display\Image::featured_image( $ID ); ?>
</a>
  <h3><?= get_the_title( $ID ); ?></h3>
  <h5>Original Price: <?php Carawebs\Maloney\Fetch\PostMeta::field_output( 'original_price', 'text' )?></h5>
  <h5>Sale Price: <?php Carawebs\Maloney\Fetch\PostMeta::field_output( 'sale_price', 'text' )?></h5>
  <p>{{ offer.excerpt }}</p>
  <a href="<?= get_the_permalink( $ID ); ?>" title="<?php the_title_attribute(); ?>">Find out More&nbsp;&raquo;</a>
</div>
