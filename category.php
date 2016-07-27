<?php get_header(); ?>
<div class="container">
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
	<div class="content">
		<section id="artigos">
			<h2>Artigos de <?php single_cat_title();?></h2>

			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
				<article>
					<figure>
						<?php if( has_post_thumbnail() ) { ?>
							<!-- <img src="<?php the_post_thumbnail_url('medium') ?>" alt="<?php the_title() ?>"> -->
							<?php the_post_thumbnail( 'thumbnail', 'title='.$title = get_post(get_post_thumbnail_id())->post_title); ?>
							<figcaption>
								<p><?php echo get_post(get_post_thumbnail_id())->post_title; ?></p>
							</figcaption>
						<?php } ?>
					</figure
					><div class="content-post">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<?php the_excerpt(); //the_content(); ?>
						<?php wp_link_pages(); ?>
						<div class="commentblok">
							<?php comments_template(); ?>
						</div>
					</div> <!-- .content-post -->
				</article>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			<div class="pagination">
				<?php wordpress_pagination(); ?>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>