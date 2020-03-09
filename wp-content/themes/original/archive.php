<?php get_header(); ?>
<!--=======================
Main
========================-->
  <main>
    <section id="LIFE">
      <div class="container">
        <h2>ARC</h2>
        <div class="contents">
          <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <h1 class="entry-title"><?php the_title() ?></h1>
                <div>
                  <?php the_content(); ?>
                </div>
            </article>
          <?php endwhile; ?>
        </div>          
      </div>
    </section>

  </main>
<?php get_footer(); ?>