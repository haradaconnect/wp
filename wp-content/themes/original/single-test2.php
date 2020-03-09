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
          <h1><?php the_title(); ?></h1>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p><?php the_category(', '); ?></p>
          <p><?php the_content(''); ?></p>
<?php
// echo do_shortcode('&#91;cft format="0" post_id="'.get_the_ID().'"&#93;');
?>
            <?php
              $price = get_post_custom();
            ?>
                <h4><?php /*print_r($price['Plan'][0]);*/ ?></h4>
            <?php
              $price = get_post_meta($post->ID, 'Plan', false);
              $arr = explode( ',', $price[0] );
            ?>
            <div class="uiWrapper select">
              <div class="selectWrapper">
                <select name="sel" id="sel">
                <?php for($i=0; $i<count($arr); $i++) { ?>
                  <option value="<?=$i?>"><?=$arr[$i]?></option>
                <?php } ?>
                </select>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>          
      </div>
    </section>

  </main>
<?php get_footer(); ?>