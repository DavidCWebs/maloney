<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\GetContact;

class ClickMobile extends ClickCall {

  public static function button( array $args = [] ) {

    $number = GetContact::mobile_number();

    echo self::render_button( $number, $args );

  }

  public static function text( array $args = [] ) {

    $number = GetContact::mobile_number();

    self::render_text( $number, $args );

  }

}
