<?php get_header(); ?>
<div class="container">
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
	<div class="content">
		<section class="single-post">
			<?php
				while (have_posts()) {
					the_post();
				?>
					<article id="post-<?php the_ID() ?>" <?php post_class() ?>>		
						<?php the_post_thumbnail("medium"); ?>				
						<h3><?php the_title() ?></h1>
						<time datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')) ?></time>						
						<div>
							<?php the_excerpt(); //the_content(); ?>
							<?php wp_link_pages(); ?>
							<?php the_content() ?>
						</div>
					</article>
			<?php } ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>