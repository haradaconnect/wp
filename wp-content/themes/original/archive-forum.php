<?php

/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>
<main>
	<section>
		<div class="container">
			<?php do_action( 'bbp_before_main_content' ); ?>

			<?php do_action( 'bbp_template_notices' ); ?>

			<div id="forum-front" class="bbp-forum-front">
				<h1 class="entry-title"><?php bbp_forum_archive_title(); ?></h1>
				<div class="entry-content">

					<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

				</div>
			</div><!-- #forum-front -->

			<?php do_action( 'bbp_after_main_content' ); ?>
		</div>
	</section>
</main>

<?php get_footer();
