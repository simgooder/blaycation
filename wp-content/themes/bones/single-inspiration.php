<?php get_header();?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('module_banner_header'); ?>	

					<?php get_template_part('module_page_content') ?>

					<?php get_template_part('module_cta_button') ?>

					<section>
						<h3 class="h3">MORE INSPIRATION</h3>
							<hr/>										

						<?php endif; wp_reset_postdata();?>
							<?php // Calling inspirations ?>
							
							<?php 

							$args = array(
								'post_type' => 'inspiration',
								'posts_per_page' => '6',
								'orderby'=> 'rand',
								'order' => 'ASC',
							);

							$query = new WP_Query( $args ) 

							?>
							
							<div class="row center m-b-lg">
							<div class="w90 cf">
							<?php while ($query->have_posts()) : $query->the_post(); ?>	
							
								<?php get_template_part('module_card'); ?>

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>

				</article>

			</main>

		</div>

<?php get_footer(); ?>
