<?php

$contact = new Carawebs\Maloney\Fetch\Contact();

Carawebs\Maloney\Display\Social::render_links();

Carawebs\Maloney\Display\ClickMobile::button(['btn_mobile_classes' => ['btn-block', 'btn-lg'], 'button_text' => 'Call Mobile']);
Carawebs\Maloney\Display\ClickLandline::button(['btn_mobile_classes' => ['btn-block', 'btn-lg'], 'button_text' => 'Call Landline']);
Carawebs\Maloney\Display\ClickMobile::text();
Carawebs\Maloney\Display\ClickLandline::button();

echo "<h2>Mobile: " . Carawebs\Maloney\Fetch\GetContact::get_mobile_number() . "</h2>";

the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
