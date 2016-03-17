<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\GetContact;

class SocialList {

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
   * [render description]
   *
   * Arguments may include:
   * 'group_classes' - classes to be added to the button containing element
   * 'button_classes' - classes that will be added to individual button elements
   *
   * @param  array $args An array of parameters to be extracted
   * @return string      HTML markup for social follow buttons
   */
  public static function render( $args = [] ) {

    // Extract list classes
    // -------------------------------------------------------------------------
    extract( $args );
    $type = ! empty( $type ) ? $type : 'list';

    switch ( $type ) {

      case 'list':

        $base_list_classes = ['carawebs-social-list'];
        $base_unit_classes   = ['social-link'];
        $li_classes = isset( $li_classes ) ? array_merge( $base_unit_classes, $li_classes ) : $base_unit_classes;
        $unit_classes = is_array( $li_classes ) ? implode( ' ', $li_classes ) : null;

        break;

      case 'buttons':

        $base_list_classes = ['btn-group-vertical', 'carawebs-social-buttons'];
        $base_unit_classes   = ['btn', 'btn-default', 'btn-block'];
        $button_classes = isset( $button_classes ) ? array_merge( $base_unit_classes, $button_classes ) : $base_unit_classes;
        $unit_classes = is_array( $button_classes ) ? implode( ' ', $button_classes ) : null;

        break;

      default:
        # code...
        break;

    }

    $list_classes = isset( $list_classes ) ? array_merge( $base_list_classes, $list_classes ) : $base_list_classes;
    $list_classes = is_array( $list_classes ) ? implode( ' ', $list_classes ) : null;

    // Get links array
    // -------------------------------------------------------------------------
    $links = self::get_links();

    ob_start();

    include( get_template_directory() . '/partials/social-list.php' );

    echo ob_get_clean();

  }

}
