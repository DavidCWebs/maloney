<?php
?>
<ul class="<?= $list_classes; ?>" role="group" aria-label="">

  <?php
  foreach( $links as $key => $value ) {

    ?>
    <li>
      <a href="<?= $value; ?>" class="<?=$key;?> <?= $unit_classes; ?>"><?= ucfirst( $key ); ?></a>
    </li>
    <?php

  }
  ?>
</ul>
