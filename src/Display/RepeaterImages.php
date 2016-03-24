<?php

namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\PostMeta;

class RepeaterImages {

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
