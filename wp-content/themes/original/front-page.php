<?php get_header(); ?>
<!--=======================
Main
========================-->
  <main>
    <section id="LIFE">
      <div class="container">
        <h2>LIFE</h2>
        <div class="contents">
          <?php $posts = get_posts('post_type=test2'); ?>
          <?php if (!empty($posts)): ?>
          <ul class="className">
          <?php foreach ($posts as $post):setup_postdata($post); ?>
          <li><?php //print_r($post); ?></li>
          <?php $meta_values = get_post_meta($post->ID, 'Plan', true); ?>
          <?php //$meta_values = $post->ID; ?>
          <?=$meta_values?>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>