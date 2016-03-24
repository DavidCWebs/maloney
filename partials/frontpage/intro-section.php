<?php

?>
<div class="section intro">
  <div class="opaque-layer"></div>
  <div class="container-fluid">
    <div class="col-md-10 col-md-offset-1">
      <div class="jumbotron light-text">
        <div class="row">
          <div class="col-md-5">
            <div class="lead">
              <div class="lead">
                <h2 id="garden-machinery"><?= esc_html( $title ); ?></h2>
                <h3 id="shannon-co-clare">Shannon Co. Clare</h3>
                <?= $intro; ?>
              </div>
            </div>
            <div class="text-center">
              <?php include_once( get_template_directory() . '/partials/frontpage/intro-cta.php' ); ?>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-1">
            <?= $carousel; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
