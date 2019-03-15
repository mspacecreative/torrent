<?php
/* Template Name: Quarterly Performance */
?>
<?php global $post;  ?>
<?php include( locate_template( 'templates/page-layout.php' ) ); ?>
<div class="inner-container">
	<?php include( locate_template( 'templates/page-header-performance.php' ) ); // Page Header Template ?>

	<section class="content-editor">
	
	<?php if( have_rows('quarter_ended') ): ?>
		<table class="quarterly-performance">
		 	<tr>
		 		<th>Quarter Ended</th>
		 		<th>NAV Per Share</th>
		 	</tr>
		 	<?php while ( have_rows('quarter_ended') ) : the_row(); ?>
		 	<tr>
				<td><?php the_sub_field('quarter_end_date'); ?></td>
				<td><?php the_sub_field('nav_per_share'); ?></td>
			</tr>
			<?php endwhile; ?>
		</table>
	<?php endif; ?>
	
	<?php while (have_posts()) : the_post(); ?>
	    <?php the_content(); ?>
	    <?php if(!is_front_page()){
	        wp_link_pages(array('before' => '<nav class="pagination th-pagination">', 'after' => '</nav>'));
	    }?>
	<?php endwhile; ?>
	</section>
</div>