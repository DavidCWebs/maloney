<?php
namespace Carawebs\Maloney\Display;

abstract class ClickCall {

  public static function render_button( $number, array $args ) {

    // Set default button classes (Bootstrap 3.x)
    $btn_base     = ['btn', 'btn-default'];
    $mob_btn_base = ['btn', 'btn-default'];

    // Extract arguments and set defaults
    extract( $args );
    $btn_classes        = isset( $btn_classes ) ? array_merge( $btn_base, $btn_classes ) : $btn_base;
    $btn_mobile_classes = isset( $btn_mobile_classes ) ? array_merge( $mob_btn_base, $btn_mobile_classes) : $mob_btn_base;
    $btn_classes        = implode( ' ', $btn_classes );
    $btn_mobile_classes = implode( ' ', $btn_mobile_classes );
    $icon               = isset( $icon ) ? $icon : null;
    $prefix             = isset( $prefix ) ? $prefix : null;
    $button_text        = isset( $button_text ) ? $button_text : "Click to Call";
    $clickable_number   = self::clickable_number( $number );

    ob_start();

    include( get_template_directory() . '/partials/click-to-call.php' );

    return ob_get_clean();

  }

  public static function render_text ( $number, array $args ) {

    // Extract arguments and set defaults
    extract( $args );
    $icon = isset($icon) ? $icon : null;
    $prefix = isset($prefix) ? $prefix : null;
    $text = isset($text) ? $text : "Click to Call";
    $clickable_number = self::clickable_number($number);


    ob_start();

    include( get_template_directory() . '/partials/click-to-call-link.php' );

    return ob_get_clean();

  }

  public static function clickable_number( $number ) {

    $number = str_replace( ' ', '', $number);
    $number = str_replace( '-', '', $number);
    return $number;

  }

}
