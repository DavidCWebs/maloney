<?php
if ( is_singular( 'product' ) ) {

  include ( get_template_directory() . '/partials/product-sidebar.php' );

}

dynamic_sidebar('sidebar-primary');

?>
