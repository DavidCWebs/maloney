<?php
namespace Carawebs\Maloney\Fetch;

class GetContact {

  /**
   * Return the registered mobile number for this site
   *
   * This requires the number to be set using the Carawebs Address plugin. The number is
   * stored as `carawebs_address_data['mobile']` in the options table.
   *
   * @return string Mobile number
   */
  public static function get_mobile_number( $source = 'carawebs_address_data' ) {

    return Options::get_options_array( $source )['mobile'];

  }

  public static function get_landline_number() {

    return Options::get_options_array( 'carawebs_address_data' )['landline'];

  }

  public static function get_facebook() {

    return Options::get_options_array( 'carawebs_address_data' )['facebook'];

  }

  public static function get_twitter() {

    return Options::get_options_array( 'carawebs_address_data' )['twitter'];

  }

  public static function get_email() {

    return Fetch\Options::get_options_array( 'carawebs_address_data' )['email'];

  }

  public static function get_skype() {

    return Options::get_options_array( 'carawebs_address_data' )['skype'];

  }

  public static function get_pinterest() {

    return Options::get_options_array( 'carawebs_address_data' )['pinterest'];

  }

  public static function call_number( $number ) {

    $number = str_replace( ' ', '', $number);
    $number = str_replace( '-', '', $number);
    return $number;

  }

}
