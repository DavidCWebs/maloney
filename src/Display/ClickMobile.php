<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\GetContact;

/**
 * A class to create a mobile click to call link
 *
 * Gets the correct number and builds this into the relevant HTML structure.
 * Returns markup for either a button or a simple link.
 *
 * Example client code:
 * `Carawebs\Project\Display\ClickMobile::button(['btn_mobile_classes' => ['btn-block', 'btn-lg']]);`
 */
class ClickMobile extends ClickCall {

  public static function button( array $args = [] ) {

    $args['icon']         = '<i class="glyphicon glyphicon-phone"></i>&nbsp;';
    $number = GetContact::get_mobile_number();

    echo self::render_button( $number, $args );

  }

  public static function text( array $args = [] ) {

    $args['icon'] = '<i class="glyphicon glyphicon-phone"></i>';
    $number = GetContact::get_mobile_number();

    echo self::render_text( $number, $args );

  }

}
