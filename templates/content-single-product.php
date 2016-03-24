<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="post-header bottom-space">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part('templates/product-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php Carawebs\Maloney\Display\CTA::content_CTA(); ?>
    </div>
  </article>
<?php endwhile; ?>
