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
		<h3 style="text-align: center;margin: 25px 0;"><?php echo esc_html_e('Plotted Against the TSX 300 Index (1 year)'); ?></h3>
		<?php
		$image = get_field('tsx_300_index_comparison');
		$size = 'full';
		if( $image ) : ?>
		<div class="comparison-image">
			<a href="<?php echo wp_get_attachment_image_src( $attachment_id ); ?>" target="_blank">
				<?php echo wp_get_attachment_image( $image, $size ); ?>
			</a>
		</div>
		<?php endif; ?>
	    <?php if(!is_front_page()){
	        wp_link_pages(array('before' => '<nav class="pagination th-pagination">', 'after' => '</nav>'));
	    }?>
	<?php endwhile; ?>
	</section>
</div>