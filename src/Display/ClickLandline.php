<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\GetContact;

/**
 * A class to create a landline click to call
 *
 * Gets the correct number and builds this into the relevant HTML structure.
 * Returns markup for either a button or a simple link.
 *
 * Example client code:
 * `Carawebs\Project\Display\ClickLandline::button(['btn_mobile_classes' => ['btn-block', 'btn-lg']]);`
 *
 */
class ClickLandline extends ClickCall {

  /**
   * Get the mobile number and echo the button display
   * @param  array $args Arguments used to customise display
   * @return string      HTML for a click-to-call button
   */
  public static function button( array $args = [] ) {

    $number = GetContact::get_landline_number();
    $args['icon'] = '<i class="glyphicon glyphicon-phone-alt"></i>&nbsp;';

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
