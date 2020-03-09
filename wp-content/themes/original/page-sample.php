<?php get_header(); ?>
<!--=======================
Main
========================-->
  <main>
    <section id="LIFE">
      <div class="container">
        <h2>LIFE</h2>
        <div class="contents">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p><?php the_content(); ?></p>
          <?php endwhile; endif; ?>
        </div>          
      </div>
    </section>

  </main>
<?php get_footer(); ?>