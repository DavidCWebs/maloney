<?php
/**
 * When viewed on a phone, display a click to call button.
 * On a non phone device, show the phone number.
 */
?>
<span class="hidden-xs">
  <span class="">
    <?= $icon; ?><?php echo !empty( $prefix ) ? $prefix . ' ' : null; ?><?= $number; ?>
  </span>
</span>
<span class="hidden-sm hidden-md hidden-lg">
  <a href="tel:<?= $clickable_number; ?>" class="click-phone">
    <span class="phone-text"><?= $text; ?></span>
    <?= $icon; ?>
  </a>
</span>
