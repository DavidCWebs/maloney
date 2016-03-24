<?php
/**
 * Special offers section
 */
?>
<div class="section dark special-offers full-width">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 id="internal-special-offers">Special Offers</h2>
      </div>
      <?php
      foreach( $IDs_array as $ID ) {

        include ( get_template_directory() . '/partials/special-offer.php');

      }

      ?>
    </div>
  </div>
</div>
