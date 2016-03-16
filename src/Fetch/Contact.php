<?php
namespace Carawebs\Maloney\Fetch;

/**
* A class that fetches and returns contact details for the site
*
*/
class Contact {

  private $data_source;

  private $unescaped_contact_data;

  public function __construct( $data_source = 'carawebs_address_data' ) {

    $this->data_source = $data_source;
    $this->set_address();

  }

  /**
  * Set address data
  * @return array
  */
  private function set_address() {

    $this->unescaped_contact_data = Options::get_options_array( $this->data_source );

  }

  /**
   * Return address data
   * @return array
   */
  public function get_unescaped_contact_data() {

    return $this->unescaped_contact_data;

  }

  /**
  * Return the registered mobile number for this site
  * @return string Mobile number
  */
  public function get_mobile_number() {

    return esc_html( $this->unescaped_contact_data['mobile'] );

  }

  /**
   * Return the landline numberdescription]
   * @return string
   */
  public function get_landline_number() {

    return esc_html( $this->unescaped_contact_data['landline'] );

  }

  /**
   * Return escaped Facebook URL
   * @return string
   */
  public function get_facebook() {

    return esc_url( $this->unescaped_contact_data['facebook'] );

  }

  /**
   * Return escaped Twitter URL
   * @return string
   */
  public function get_twitter() {

    return esc_url( $this->unescaped_contact_data['twitter'] );

  }

  public function get_email() {

    return sanitize_email( $this->unescaped_contact_data['email'] );

  }

  public function get_skype() {

    return esc_html( $this->unescaped_contact_data['skype'] );

  }

  public function get_pinterest() {

    return esc_url( $this->unescaped_contact_data['pinterest'] );

  }

  public static function call_number( $number ) {

    $number = str_replace( ' ', '', $number);
    $number = str_replace( '-', '', $number);
    return $number;

  }

}
