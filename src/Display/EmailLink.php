<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch;

/**
 * Prepares data and renders email elements
 *
 */
class EmailLink {

  /**
   * Render HTML markup for an email button
   *
   * At large screen sizes, display the number. At small screen sizes, show a
   * button that calls the relevant number on click.
   * @param  string $number The phone number
   * @param  array  $args   Array of arguments
   * @return string         HTML for a click to call button
   */
  public static function render_button( $number, array $args = [] ) {

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
    $button_text        = isset( $button_text ) ? $button_text : "Email Us";

    ob_start();

    $email = self::get_email();

    ob_start();

    ?>
    <a href="mailto:<?= $email; ?>" class="btn btn-default email">
      <i class="fa fa-fw fa-envelope"></i></i>&nbsp;<?= $button_text; ?>
    </a>
    <?php

    return ob_get_clean();

  }

  /**
   * Render HTML markup for a click to call link/text showing the number
   *
   * At large screen sizes, display the number as text. At small screen sizes, show a
   * link that calls the relevant number on click.
   * @param  string $number The phone number
   * @param  array  $args   Array of arguments
   * @return string         HTML for the number/number link
   */
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

  public static function get_email() {

    return Fetch\Options::get_options_array( 'carawebs_address_data' )['email'];

  }

}
