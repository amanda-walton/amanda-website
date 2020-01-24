<?php
/**
 * The template for displaying the 404 page.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */

get_header(); ?>

	<div>
		<section class="content-404">	
			<figure>
				<img src="./wp-content/themes/spacious-child/img/angry-emoji.png" alt="404 page image">
			</figure>
			<div class="text-404">
				<h1>Oh no!</h1>
				<p>Sorry, this page no longer exists, never existed or has been moved. </p>
				<a class="button" href="<?php echo site_url('/home/') ?>">
					<input type="button" id="button-404" value="Go Home">
				</a>
			</div>
		</section>
	</div>
	
<?php get_footer(); ?>
