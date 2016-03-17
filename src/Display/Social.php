<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\GetContact;

/**
 * Return social media links for this site
 */
class Social {

  /**
   * Get social media links
   * @return array escaped social media links
   */
  public static function get_links() {

    return [
      'facebook'  => esc_url( GetContact::get_facebook() ),
      'twitter'   => esc_url( GetContact::get_twitter() ),
      'pinterest' => esc_url( GetContact::get_pinterest() ),
      //'linkedin'  => esc_url( GetContact::get_linkedin() ),
    ];

  }

  /**
   * Render a ul of social media links for this site
   *
   * @param  array $args  'list_classes' => []
   * @return string       HTML markup ul of social media links
   */
  public static function render_links( $args = [] ) {

    $base_list_classes = ['carawebs-social-list'];

    // Extract list classes
    // -------------------------------------------------------------------------
    extract( $args );
    $list_classes = isset( $list_classes ) ? array_merge( $base_list_classes, $list_classes ) : $base_list_classes;
    $list_classes = is_array( $list_classes ) ? implode( ' ', $list_classes ) : null;

    // Get links array
    // -------------------------------------------------------------------------
    $links = self::get_links();

    // Build List & echo
    // -------------------------------------------------------------------------
    $list = ! empty( $list_classes ) ? "<ul class='$list_classes'>" : "<ul>";

    foreach( $links as $key => $value ) {

      $name = ucfirst( $key );
      $list .= "<li><a href='$value'>$name</a></li>";

    }

    $list .= "</ul>";

    echo $list;

  }

}
