<?php
/* Template Name: Quarterly Performance */
?>
<?php global $post;  ?>
<?php include( locate_template( 'templates/page-layout.php' ) ); ?>
<div class="inner-container">
	<?php include( locate_template( 'templates/page-header-performance.php' ) ); // Page Header Template ?>

	<section class="content-editor">
	
	<?php if( have_rows('quarter_ended') ): ?>
		<table>
		 	<tr>
		 		<?php while ( have_rows('quarter_ended') ) : the_row(); ?>
				<td><?php the_field('quarter_end_date'); ?></td>
				<td><?php the_field('nav_per_share'); ?></td>
				<?php endwhile; ?>
			</tr>
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