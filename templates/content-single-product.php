<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="post-header bottom-space">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part('templates/product-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <div class="lead">Interested? Call us to find out more.</div>
      {% include general/post-phone.html %}
    </div>
  </article>
<?php endwhile; ?>
