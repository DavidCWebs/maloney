<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php
  $contact = new Carawebs\Maloney\Fetch\Contact();
  Carawebs\Maloney\Display\SocialList::render(['list_classes'=>['carawebs-address']]);
  ?>
  <div>
  <?php
  Carawebs\Maloney\Display\SocialList::render(['type'=>'buttons', 'button_classes' => ['btn-block']]);
  ?>
  </div>
  <?php
  Carawebs\Maloney\Display\ClickMobile::button(['btn_mobile_classes' => ['btn-block', 'btn-lg'], 'button_text' => 'Call Mobile']);
  Carawebs\Maloney\Display\ClickLandline::button(['btn_mobile_classes' => ['btn-block', 'btn-lg'], 'button_text' => 'Call Landline']);
  Carawebs\Maloney\Display\ClickMobile::text();
  Carawebs\Maloney\Display\ClickLandline::button();
  echo "<h2>Mobile: " . Carawebs\Maloney\Fetch\GetContact::get_mobile_number() . "</h2>";
  ?>
<?php endwhile; ?>
