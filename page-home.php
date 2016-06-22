<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package WordPress
 * @subpackage UmanNews
 * Template Name: Главная страница (не использовать)
 */
get_header(); ?>
<section>
	<div class="container cont">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php endwhile; ?>
			</div>
			<div class="col-md-12 w-hp">
				<div class="col-md-3 d-non">
					<?php if ( is_active_sidebar( 'sidebar-hl' ) ) : ?>
					<div id="sidebar1" class="sidebar">
					<?php dynamic_sidebar( 'sidebar-hl' ); ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="col-md-6">
					<?php if ( is_active_sidebar( 'sidebar-hc' ) ) : ?>
					<div id="sidebar2" class="sidebar">
					<?php dynamic_sidebar( 'sidebar-hc' ); ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<?php if ( is_active_sidebar( 'sidebar-hr' ) ) : ?>
					<div id="sidebar3" class="sidebar">
					<?php dynamic_sidebar( 'sidebar-hr' ); ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>