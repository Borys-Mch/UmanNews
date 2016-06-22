<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage UmanNews
 */ 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<hr>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-12">
				<a href="<?php the_permalink(); ?>" id="thum" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
							<?php the_excerpt(); ?>
			</div>
		<?php } ?>
	</div>
	<div class="meta">
		<p>Опубліковано в <?php the_category(',') ?> - <?php the_time('F j, Y в H:i'); ?> - <?php the_author_posts_link(); ?> - Переглядів: <?php echo get_post_meta ($post->ID,'views',true); ?></p>
		<?php the_tags('<p>Теги: ', ',', '</p>'); ?>
	</div>
</article>