<?php

namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\PostMeta;

/**
 * Returns a column of repeater images
 */
class ImagesColumn extends RepeaterImages {

  /**
   * Construct HTML for a Bootstrap 3 carousel
   *
   * @param  args
   * @return string             HTML for carousel
   */
  public static function render( array $args = [] ) {

    $base_classes = ['image-column'];
    $classes = ! empty( $args['classes'] ) ? array_merge( $base_classes, $args['classes'] ) : $base_classes;
    $classes = implode( ' ', $classes );
    $type = ! empty( $args['type'] ) ? $args['type'] : 'basic';

    $images = self::data( $args );

    // If there are no images set, go back empty
    // -------------------------------------------------------------------------
    if ( empty( $images ) ) { return; }

    ob_start();

    include_once( get_template_directory() . '/partials/image-column.php' );

    return ob_get_clean();

  }

}
