<?php
/**
 * Markup for an images column
 *
 * Called from `src/Display/ImagesColumn()`
 */
?>
<div class="<?= $classes; ?>">
  <?php

  $i = 0;
  foreach( $images as $image ) {

    ?>
    <div class="slide<?= 0 == $i ? ' first' : NULL; ?>">
      <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['alt']; ?>" title="<?= $image['image']['title']; ?>" class="img-responsive" height="<?= $image['image']['height']; ?>" width="<?= $image['image']['width']; ?>">
      <?php if( !empty( $image['description'] ) ): ?>
      <div class="caption-container">
        <h2 class="caption"><?= $image['description'] ; ?></h2>
      </div>
      <?php endif; ?>
    </div>
    <?php

    $i ++;

  }
  ?>
</div>
