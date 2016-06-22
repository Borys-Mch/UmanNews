<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage UmanNews
 */
get_header(); ?>
<section>
	<div class="container cont">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
							<div class="meta">
								<p>Опубліковано в <?php the_category(',') ?> - <?php the_time('F j, Y в H:i'); ?> - <?php the_author_posts_link(); ?> - Переглядів: <?php echo get_post_meta ($post->ID,'views',true); ?></p>
								<?php the_tags('<p>Теги: ', ',', '</p>'); ?>
							</div>
					</article>
				<?php endwhile; ?>
				<?php previous_post_link('%link', '<- Попередня новина: %title', TRUE); ?> 
				<?php next_post_link('%link', 'Наступна новина: %title ->', TRUE); ?> 
				<?php if (comments_open() || get_comments_number()) comments_template('', true); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
