<?php

namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\PostMeta;

/**
 * Returns an image carousel
 */
class Carousel extends RepeaterImages {

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

    return ob_get_clean();

  }

}
