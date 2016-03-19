<?php

namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\PostMeta;

class Carousel {

  /**
   * Construct HTML for a Bootstrap 3 carousel
   *
   * @param  args
   * @return string             HTML for carousel
   */
  public static function render( array $args = [] ) {

    $base_classes = ['carousel'];
    $classes = ! empty( $args['classes'] ) ? array_merge( $base_classes, $args['classes'] ) : $base_classes;
    $classes = implode( ' ', $classes );
    $type = ! empty( $args['type'] ) ? $args['type'] : 'basic';
    $transition = ! empty( $args['transition'] ) && 'slide' === ( $args['transition'] ) ? 'slide' : 'carousel-fade';

    $images = self::data( $args );

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

    echo ob_get_clean();

  }

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
  public static function data( array $args ) {

    extract( $args );

    $image_size = ! empty( $image_size ) ? $image_size : 'full';
    $text_subfield = ! empty( $text_subfield ) ? $text_subfield : 'description';

    $subfields = ! empty( $subfields ) ? $subfields : ['image' => ['image_ID', $image_size], $text_subfield => 'text' ];
    $fieldname = ! empty( $fieldname ) ? $fieldname : 'carousel';

    $data = new PostMeta( get_the_ID() );
    return $data->repeater( $fieldname, $subfields );

  }


}
