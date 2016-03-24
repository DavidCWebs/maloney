<?php
namespace Carawebs\Maloney\Display;

/**
 * A class to echo custom field content for 'product' custom post types
 *
 */
class Product extends FieldContent {

  public function images() {

    $display = get_post_meta( get_the_ID(), 'additional_images_display_format', true );

    switch ( $display ) {
      case 'carousel':
        echo Carousel::render( ['fieldname' =>'images', 'transition'=>'slide']);
        break;

      case 'image-column':
        echo ImagesColumn::render( ['fieldname' =>'images']);
        break;

      default:
        # code...
        break;
    }

  // $images
  // ->$image
  // ->$description
  }

}
