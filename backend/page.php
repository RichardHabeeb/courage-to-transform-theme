<?php get_header(); get_sidebar(); ?>

<?php
while (have_posts()):
	the_post();
	get_template_part( 'template-parts/page/content');
endwhile; ?>


<?php get_footer(); ?>
