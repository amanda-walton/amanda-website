<?php
/**
 * Template Name: Portfolio Page
 * 
 * The template for displaying the portfolio page.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */

get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', 'page' ); ?>

				<?php
					do_action( 'spacious_before_comments_template' );
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
	      		do_action ( 'spacious_after_comments_template' );
				?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<section class="portfolio content">
		<div class="services-intro">
			<h3><?php the_title(); ?></h3>
		</div>
		<div class="all-projects">
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field('project_image_1');
				$link_1 = get_field('project_link_1');
				$title_1 = get_field('project_title_1');
				$description_1 = get_field('project_description_1');
				$image_2 = get_field('project_image_2');
				$link_2 = get_field('project_link_2');
				$title_2 = get_field('project_title_2');
				$description_2 = get_field('project_description_2');
				$image_3 = get_field('project_image_3');
				$link_3 = get_field('project_link_3');
				$title_3 = get_field('project_title_3');
				$description_3 = get_field('project_description_3');
				$image_4 = get_field('project_image_4');
				$link_4 = get_field('project_link_4');
				$title_4 = get_field('project_title_4');
				$description_4 = get_field('project_description_4');
				$size = 'large';
			?>

				<section class="project-row">
					<div class="single-project">
						
						<figure>
							<?php if($image_1 and $link_1) { ?> 
								<a href="<?php echo $link_1?>" target="_blank"> 
									<?php
										echo wp_get_attachment_image( $image_1, $size ); 
									?>
								</a>
							<?php	} 
								elseif($image_1) { ?>
									<?php 
										echo wp_get_attachment_image( $image_1, $size); 
									} ?>	
						</figure>
						
						<div class="project-description">
							<h2><?php echo $title_1; ?></h2>
							<p><?php echo $description_1; ?></p>
						</div>
					</div>

					<div class="single-project">
					
						<figure>
							<?php if($image_2 and $link_2) { ?> 
								<a href="<?php echo $link_2?>" target="_blank"> 
									<?php
										echo wp_get_attachment_image( $image_2, $size ); 
									?>
								</a>
							<?php	} 
								elseif($image_2) { ?>
									<?php 
										echo wp_get_attachment_image( $image_2, $size); 
									} ?>	
						</figure>

						<div class="project-description">
							<h2><?php echo $title_2; ?></h2>
							<p><?php echo $description_2; ?></p>
						</div>
					</div>
				</section>

				<section class="project-row">
					<div class="single-project">
					
						<figure>
							<?php if($image_3 and $link_3) { ?> 
								<a href="<?php echo $link_3?>" target="_blank"> 
									<?php
										echo wp_get_attachment_image( $image_3, $size ); 
									?>
								</a>
							<?php	} 
								elseif($image_3) { ?>
									<?php 
										echo wp_get_attachment_image( $image_3, $size); 
									} ?>	
						</figure>

						<div class="project-description">
							<h2><?php echo $title_3; ?></h2>
							<p><?php echo $description_3; ?></p>
						</div>
					</div>

					<div class="single-project">
					
						<figure>
							<?php if($image_4 and $link_4) { ?> 
								<a href="<?php echo $link_4?>" target="_blank"> 
									<?php
										echo wp_get_attachment_image( $image_4, $size ); 
									?>
								</a>
							<?php	} 
								elseif($image_4) { ?>
									<?php 
										echo wp_get_attachment_image( $image_4, $size); 
									} ?>	
						</figure>

						<div class="project-description">
							<h2><?php echo $title_4; ?></h2>
							<p><?php echo $description_4; ?></p>
						</div>
					</div>
				</section>

			<?php endwhile; ?>
		</div>
	</section>	

	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
