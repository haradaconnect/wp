
<?php
get_header();
?>
<!--=======================
Main
========================-->
  <main>
    <section id="LIFE">
      <div class="container">
        <h2>BLOG</h2>
        <div class="contents">
          <?php $array = array(); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <h1 class="entry-title"><?php the_title() ?></h1>
                <div>
                  <?php the_content(); ?>
                </div>
            </article>
            <?php
            $title = get_the_title();
            array_push($array, $title);
            ?>
          <?php endwhile; ?>
          <div><?php
          var_dump($array);
          // foreach($array as $value) {
          //   echo $value;
          //   echo '<br>';
          // }
          ?></div>
        </div>
      </div>
    </section>

  </main>
<?php
get_footer();
?>
