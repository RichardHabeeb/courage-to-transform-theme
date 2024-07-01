<?php get_header(); get_sidebar(); ?>

<?php while (have_posts()): ?>
<article
			<?php post_class("col-fill-l-8 col-fill-p-2 col-pull-2 row-span-auto padding-bottom-5 padding-top-2"); ?>
			id="post-<?php the_ID(); ?>">

	<?php the_post(); ?>
	<h2>
		<?php the_title(); ?>
	</h2>

	<?php the_content(); ?>
</article>
<?php endwhile; ?>


<?php get_footer(); ?>
