<?php
namespace Carawebs\Maloney\Display;

abstract class ClickCall {

  public static function render_button( $number, array $args ) {

    extract( $args );

    $btn_class = isset($btn_class) ? $button_class : null;
    $icon = isset($icon) ? $icon : null;
    $prefix = isset($prefix) ? $prefix : null;
    $button_text = isset($button_text) ? $button_text : "Click to Call";
    $clickable_number = self::clickable_number($number);


    ob_start();

    include( get_template_directory() . '/partials/click-to-call.php' );

    return ob_get_clean();

  }

  public static function clickable_number( $number ) {

    $number = str_replace( ' ', '', $number);
    $number = str_replace( '-', '', $number);
    return $number;

  }

}
