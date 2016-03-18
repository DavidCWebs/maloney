<?php

namespace Carawebs\Maloney\Display;

class Carousel {

  /**
   * Fetch image data that has been stored by means of an ACF repeater field
   *
   * The subfield name is assumed to be 'image'.
   *
   *
   * @param  string $fieldname  The fieldname
   * @param  string $image_size Required image size
   * @return array              Array of image data
   */
  public static function carousel_data( $fieldname, $image_size, $subfields ) {

    $data = new \Carawebs\Maloney\Fetch\PostMeta( get_the_ID() );

    $subfields = empty( $subfields )  ? ['image' => ['image_ID', $image_size], 'content' => 'text' ] : $subfields;

    return $data->repeater( $fieldname, $subfields );

  }

  /**
   * Construct HTML for a Bootstrap 3 carousel
   *
   * @param  string $fieldname  The fieldname
   * @param  string $image_size Required image size
   * @return string             HTML for carousel
   */
  public static function the_carousel( $fieldname = 'carousel', $image_size = 'full', $type = 'basic', array $subfields = [] ) {

    $images = self::carousel_data( $fieldname, $image_size, $subfields );

    // If there are no images set, go back empty
    // -------------------------------------------------------------------------
    if ( empty( $images ) ) { return; }

    ob_start();

    switch ( $type ) {
      case 'background':
        include_once( get_template_directory() . '/partials/background-image-carousel.php' );
        break;

      case 'basic':
        include_once( get_template_directory() . '/partials/basic-carousel.php' );
        break;

      default:
        # code...
        break;
    }

    return ob_get_clean();

  }

}
