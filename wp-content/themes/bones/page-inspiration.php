<?php get_header(); /* Template Name: Inspiration Page */?>

		<div id="content">

			<main id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php endwhile; ?>
				<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<?php get_template_part('module_banner_header'); ?>	
							 
					<?php get_template_part('module_page_content') ?>
					
					<section>								

						<?php endif; wp_reset_postdata();?>
							<?php // Calling Destinations ?>
							<?php $Inspiration = new WP_Query(array( 
								'post_type' => 'inspiration',
								'posts_per_page' => '-1',
								'orderby'=> 'rand',
								'order' => 'ASC'
							)); ?>
							
							<div class="row center m-b-lg">
							<div class="w90 cf">
							<?php while ($Inspiration->have_posts()) : $Inspiration->the_post(); ?>	
							
							<?php get_template_part('module_card_small') ?>

							<?php endwhile; ?>	
							</div>
							</div>
					
					</section>

				</article>

			</main>

		</div>

<?php get_footer(); ?>