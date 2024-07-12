<?php get_header(); get_sidebar(); ?>

<header class="col-fill-l-8 col-fill-p-2 coll-pull-2 row-span-auto padding-y-2">
<?php the_archive_title("<h2>", "</h2>"); ?>

</header>

<?php
while (have_posts()):
	the_post();
	get_template_part( 'template-parts/post/content');
endwhile; ?>


<?php get_footer(); ?>
