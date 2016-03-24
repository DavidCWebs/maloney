<?php
namespace Carawebs\Maloney\Display;

/**
 * A class to echo custom field content
 *
 */
class Frontpage extends FieldContent {

  public function intro() {

    $intro = $this->content_field( 'intro' );
    $title = $this->text_field( 'intro_title' );
    $carousel = Carousel::render( ['image_size' => '780slide'] );

    include_once ( get_template_directory() . '/partials/frontpage/intro-section.php' );

  }

  public function special_offers() {

    $IDs_array = $this->relationship_field( 'special_offers' );
    //$title = $this->text_field( 'special_offers_title' );

    include_once ( get_template_directory() . '/partials/frontpage/special-offers-section.php' );

  }

}
