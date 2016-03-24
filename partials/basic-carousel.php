<?php
/**
 * Markup for a basic carousel
 *
 * Called from `src/Display/Carousel()`
 */
?>
<div id="main-carousel" class="carousel <?= $transition; ?>" data-interval="false">
  <ol class="carousel-indicators">
    <?php

    $c = 0;
    foreach( $images as $image ) {

      ?>
      <li data-target="#main-carousel" data-slide-to="<?= $c; ?>" <?= 0 == $c ? 'class="active"' : null; ?>></li>
      <?php
      $c ++;
    }

    ?>
  </ol>
  <div class="carousel-inner" role="listbox">
      <?php

      $i = 0;
      foreach( $images as $image ) {

        ?>
        <div class="item<?= 0 == $i ? ' active' : null; ?>">
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
  <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
    <i class="fa fa-chevron-left" aria-hidden="true" style="vertical-align: middle;"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
