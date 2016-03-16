<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\GetContact;

class ClickLandline extends ClickCall {

  /**
   * Get the mobile number and echo the button display
   * @param  array $args Arguments used to customise display
   * @return string      HTML for a click-to-call button
   */
  public static function button( array $args = [] ) {

    $number = GetContact::get_landline_number();

    echo self::render_button( $number, $args );

  }

  /**
   * Get the mobile number and echo the link display
   * @param  array $args Arguments used to customise display
   * @return string      HTML for a click-to-call link
   */
  public static function text( array $args = [] ) {

    $number = GetContact::get_landline_number();

    echo self::render_text( $number, $args );

  }

}
