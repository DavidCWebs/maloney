<?php

namespace Carawebs\Maloney\Display;

class CTA {

  public static function get_cta_data( $fieldname, $type ) {

    $data = new \Carawebs\Sam\Fetch\PostMeta( get_the_ID() );

    return $data->field_output( $fieldname, $type );

  }

  public static function the_cta( $fieldname, $type ) {

    $content = self::get_cta_data( $fieldname, $type );

    include_once( get_template_directory() . '/partials/call-to-action.php' );

  }

  public static function content_CTA() {

    if( "1" !== get_post_meta( get_the_ID(), 'show_call_to_action', true ) ) {

      return;

    }

    $type = get_post_meta( get_the_ID(), 'call_to_action_type', true );
    $CTA_title = get_post_meta( get_the_ID(), 'call_to_action_title', true ) ?: "Contact Samantha";
    $CTA_intro = get_post_meta( get_the_ID(), 'call_to_action_intro', true );
    $prefix = get_post_meta( get_the_ID(), 'number_prefix', true ) ?: null;
    $email_text = get_post_meta( get_the_ID(), 'email_text', true ) ?: null;

    echo "<h2>$CTA_title</h2>";
    echo !empty( $CTA_intro ) ? "<p>$CTA_intro</p>" : null;

    ob_start();

    include_once( get_template_directory() . '/partials/custom-call-to-action.php' );

    echo ob_get_clean();

  }

}
