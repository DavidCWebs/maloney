<?php
?>
<div class="<?= $list_classes; ?>" role="group" aria-label="">

  <?php
  foreach( $links as $key => $value ) {

    ?>
    <a href="<?= $value; ?>" class="<?=$key;?> <?= $unit_classes; ?>"><?= ucfirst( $key ); ?></a>
    <?php

  }
  ?>
</div>
