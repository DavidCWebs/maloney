<?php
/**
 * Product Sidebar
 */
$featured_image = Carawebs\Maloney\Display\Image::featured_image( get_the_ID(), '', '', TRUE );
$meta = new Carawebs\Maloney\Display\Product();
?>
<div class="image-column">
  <div class="image-item">
    <?= $featured_image['image']; ?>
    <?= ! empty ( $featured_image['caption'] ) ? "<div class='img-caption'>{$featured_image['caption']}</div>" : NULL; ?>
  </div>
  <?php $meta->images(); ?>
  <div class="image-item">
    <div class="embed-container">
      <!-- <iframe src="https://www.youtube.com/embed/34cpRJ_FleM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
    </div>
  </div>
  {% include general/sidebar.html %}
</div>
