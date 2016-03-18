<?php
namespace Carawebs\Maloney\Display;
use Carawebs\Maloney\Fetch\GetContact;

/**
 * A class that controls links to the defined site social media channels
 *
 * The links are controlled by the Carawebs\Project\Fetch\GetContact() class.
 * Client code should call the `SocialList::render()` method with an array of arguments.
 * For example:
 * <?php
 * SocialList::render( [
 * 	'type'            => 'buttons', // The type of element to return: 'buttons' or 'list'
 * 	'li_classes'      => '',        // Array of classes for the li elements
 * 	'button_classes'  => [],        // Array of button classes
 * 	'list_classes'    => []         // Array of classes to be passed to the <ul>
 * ] );
 * ?>
 *
 */
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
   * Display the social media links
   *
   * Uses the links stroed in the database for this site. Links can be returned
   * either in the form of a ul or a button group.
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
        $partial = '/partials/social-list.php';

        break;

      case 'buttons':

        $base_list_classes = ['btn-group', 'btn-group-vertical', 'carawebs-social-buttons'];
        $base_unit_classes   = ['btn', 'btn-default'];
        $button_classes = isset( $button_classes ) ? array_merge( $base_unit_classes, $button_classes ) : $base_unit_classes;
        $unit_classes = is_array( $button_classes ) ? implode( ' ', $button_classes ) : null;
        $partial = '/partials/social-buttons.php';

      break;

    }

    $list_classes = isset( $list_classes ) ? array_merge( $base_list_classes, $list_classes ) : $base_list_classes;
    $list_classes = is_array( $list_classes ) ? implode( ' ', $list_classes ) : null;

    // Get links array
    // -------------------------------------------------------------------------
    $links = self::get_links();

    ob_start();

    include( get_template_directory() . $partial );

    echo ob_get_clean();

  }

}
