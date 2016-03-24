<span><i class="fa fa-clock-o"></i>&nbsp;<time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></span><br/>
<span class="category"><i class="fa fa-tags"></i>&nbsp;{{ page.categories | category_links }}</span><br/>
<p class="byline author vcard"><i class="fa fa-user"></i>&nbsp;<?= __('By', 'sage'); ?>
  <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
</p>
