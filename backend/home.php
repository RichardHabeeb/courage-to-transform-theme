<?php
/* This is the blog page */
get_header(); get_sidebar(); ?>

<header class="col-fill-l-8 col-fill-p-2 coll-pull-2 row-span-auto padding-y-2">
	<h2>Blog</h2>
</header>

<?php
while (have_posts()):
	the_post();
	get_template_part( 'template-parts/post/content');
endwhile;
get_footer();
?>
