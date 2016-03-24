<?php require_once( get_template_directory() . '/lib/nav.php' ); ?>
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="button-label">Menu</span>
        <div class = "button-burger">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="pull-right">
      <?php Carawebs\Maloney\Display\ClickLandline::button( ['btn_classes'=>['btn-sm']] ); ?>
    </div>
    <nav class="collapse navbar-collapse dropdown-col" id="navbar-ex-collapse">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Carawebs\Maloney\Nav\NavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </nav>
  </div>
</div>
