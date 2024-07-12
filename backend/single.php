<?php get_header(); get_sidebar(); ?>

<?php
while (have_posts()):
	the_post();
	get_template_part( 'template-parts/post/content');
endwhile; ?>


<?php get_footer(); ?>
