<?php get_header(); ?>
<!--=======================
Main
========================-->
  <main>
    <section id="CUSTOM">
      <div class="container">
        <h2>CUSTOM</h2>
        <div class="contents">
          <?php if(have_posts()): while(have_posts()):the_post(); ?>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p><?php the_category(', '); ?></p>
          <p><?php the_content('Read more'); ?></p>
            <?php
              $price = get_post_meta($post->ID, 'タイトル', true);
            ?>
                <h4><?php echo $price; ?></h4>
          <?php endwhile; endif; ?>
        </div>          
      </div>
    </section>

  </main>
<?php get_footer(); ?>