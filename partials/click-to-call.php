<?php
/**
 * When viewed on a phone, display a click to call button. On a non phone device,
 * show the phone number. Based on screen width rather than
 * HTTP headers/user-agent string.
 */
?>
<span class="hidden-xs">
  <span class="<?= $btn_classes; ?>">
    <?= $icon; ?><?php echo !empty( $prefix ) ? $prefix . ' ' : null; ?><?= $number; ?>
  </span>
</span>
<span class="hidden-sm hidden-md hidden-lg">
  <a href="tel:<?= $clickable_number; ?>" class="click-phone <?= ' '.$btn_mobile_classes; ?>">
    <span class="phone-text"><?= $button_text; ?></span>
    <?= $icon; ?>
  </a>
</span>
