<?php
/**
 * A HTML section with emphasis text and an optional call to action
 */
?>
<div>
  <?php if ( 'combined' === $type ): ?>
    <?= Carawebs\Maloney\Display\EmailLink::render_button( $email_text ); ?>
    <?= Carawebs\Maloney\Display\ClickMobile::button( ['prefix' => $prefix] ); ?>
  <?php endif; ?>
  <?php if ( 'phone' === $type ): ?>
    <?= Carawebs\Maloney\Display\ClickMobile::button( ['prefix' => $prefix] ); ?>
  <?php endif; ?>
  <?php if ( 'email' === $type ): ?>
    <?= Carawebs\Maloney\Display\Contact::email_link( $email_text ); ?>
  <?php endif; ?>
</div>
