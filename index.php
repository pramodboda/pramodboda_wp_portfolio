<?php
/**
 * 	
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pramod_boda
 * ===================================================================================
 */

 /**
  * Load header.php
  */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<?php get_template_part('content', get_post_format());?>
		<?php endwhile;?>
		<?php else : ?>
			<?php get_template_part('content', 'none');?>
		<?php endif; ?>

		
		</div><!-- end of col-lg-12 -->
	</div><!--end of row -->
</div><!--end of container -->



<?php get_footer();?>