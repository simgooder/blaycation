<?php get_header(); /* Template Name: Blog Page */?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('banner_header'); ?>	

					<section class="row">
						
						<h2 class="h2">HIGHLIGHTS</h2>
							<hr/>
						<div class="text w70">
							<?php
								the_content();
							?>
						</div>
					</section>

					<section>
						<h2 class="h2">FROM THE ARCHIVE</h2>
							<hr/>										

						<?php endif; wp_reset_postdata();?>
							<?php // Calling inspirations ?>
							<?php $Blog = new WP_Query(array( 
								'post_type' => 'blog',
								'posts_per_page' => '-1'
							)); ?>
							
							<div class="row center m-b-lg">
							<div class="w90">
							<?php while ($Blog->have_posts()) : $Blog->the_post(); ?>	
							
								<?php get_template_part('module_card') ?>

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>

				</article>

			</main>

		</div>

<?php get_footer(); ?>