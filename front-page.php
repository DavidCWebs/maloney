<?php while (have_posts()) : the_post(); ?>
<?php
$frontpage = new Carawebs\Maloney\Display\Frontpage();
?>
  <?php $frontpage->intro(); ?>
  <?php $frontpage->special_offers(); ?>
  <hr>
  {% include frontpage/brands.html %}
  {% include frontpage/contact-section.html %} -->
  <div id="map-canvas"></div>
<?php endwhile; ?>
