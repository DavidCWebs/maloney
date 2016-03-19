<?php while (have_posts()) : the_post(); ?>
  <div class="container-fluid">
    <div class="section intro">
      <div class="opaque-layer"></div>
      <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
          <div class="jumbotron light-text">
            <div class="row">
              <div class="col-md-5">
                <div class="lead">
                  <div class="lead">
                    <h2 id="garden-machinery">Garden Machinery</h2>
                    <h3 id="shannon-co-clare">Shannon Co. Clare</h3>
                    <p>Maloney Garden Machinery is your main Husqvarna dealer in Co. Clare.</p>
                    <p>We sell, service and repair all leading brands of landscape and garden machinery.</p>
                    <p>We also stock a large range of Berg go-karts and quality power-tools such as DeWalt and Hitachi.</p>
                  </div>
                </div>
                <div class="text-center">
                  <?php include_once( get_template_directory() . '/partials/frontpage/intro-cta.php' ); ?>
                </div>
              </div>
              <div class="col-md-6 col-md-offset-1">
                <?= Carawebs\Maloney\Display\Carousel::render(['image_size' => '780slide']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php include( get_template_directory() . '/partials/special-offers.php' ); ?>
  <!-- {% include frontpage/special-offers.html %}
  {% include frontpage/brands.html %}
  {% include frontpage/contact-section.html %} -->
  <div id="map-canvas"></div>
<?php endwhile; ?>
