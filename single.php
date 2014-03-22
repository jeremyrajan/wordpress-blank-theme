<?php get_header(); ?>
<?php get_sidebar('top'); ?>
<?php get_sidebar('right'); ?>
<div id="content_wrapper">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2><?php the_title(); ?></h2>

			<div class="post_thumb">
			<?php if (has_post_thumbnail()) :?>
				<img src="<?php the_post_thumbnail(); ?>" alt="<?php the_title(); ?>"/>
			<?php endif; ?>
			</div>

			<?php the_content(); ?>

			<small>
			<?php the_time('F jS, Y'); ?> | <?php the_category(', '); ?> | <?php comments_number('No Comments','1 Comment', '% Comments'); ?>
			</small>
		</div>

		<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>