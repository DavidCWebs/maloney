<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="footer-column">
        <h2>Hello</h2>
      </div>
      <div class="footer-column">
        <h2>Hello</h2>
      </div>
      <div class="footer-column">
        <h2>Hello</h2>
      </div>
      <div class="footer-column">
        <h2>Follow Us</h2>
        <?php Carawebs\Maloney\Display\SocialList::render(['type'=>'buttons', 'list_classes' => ['full-width'], 'button_classes' => ['btn-block']]); ?>
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
    </div>
  </div>
</footer>
