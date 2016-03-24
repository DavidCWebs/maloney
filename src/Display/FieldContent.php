<?php
namespace Carawebs\Maloney\Display;

/**
 * Class that returns custom field content
 */
class FieldContent {

  protected function content_field( $field ) {

    return apply_filters( 'the_content', get_post_meta( get_the_ID(), $field, true ) );

  }

  protected function text_field( $field ) {

    return get_post_meta( get_the_ID(), $field, true );

  }

  protected function relationship_field( $field ) {

    return get_post_meta( get_the_ID(), $field, true );

  }


}
