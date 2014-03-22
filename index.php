<?php get_header(); ?>
<?php get_sidebar('top'); ?>
<?php get_sidebar('right'); ?>
<div id="content_wrapper">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="post_thumb">
			<?php if (has_post_thumbnail()) :?>
				<img src="<?php the_post_thumbnail(); ?>" alt="<?php the_title(); ?>"/>
			<?php endif; ?>
			</div>

			<?php the_content(); ?>

			<small>
			<?php the_time('F jS, Y'); ?> | <?php the_category(', '); ?> | <?php comments_number('No Comments','1 Comment', '% Comments'); ?>
			</small>

		<?php endwhile; ?>

		<div class="pagination">
			<p class="older"><?php next_posts_link('Older'); ?></p>
			<p class="new"><?php next_posts_link('Newer'); ?></p>
		</div>	

	<?php else: ?>

		<h2>Oops! Not Found</h2>
		<p><a href="<?php get_option('home'); ?>"><< GO Back</a></p>

	<?php endif; ?>

<?php get_footer(); ?>