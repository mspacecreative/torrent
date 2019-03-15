<?php
/* Template Name: Quarterly Performance */
?>
<section class="content-editor">
<?php while (have_posts()) : the_post(); ?>
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('quarter_ended') ): ?>
	
	<table>
	
	 	<?php while ( have_rows('quarter_ended') ) : the_row(); ?>
	 		
	 		<tr>
				<td><?php the_field('quarter_end_date'); ?></td>
				<td><?php the_field('nav_per_share'); ?></td>
			</tr>
	
	   <?php endwhile; ?>
	   
	</table>
	
	<?php else :
	
	    // no rows found
	
	endif;
	?>
    <?php the_content(); ?>
    <?php if(!is_front_page()){
        wp_link_pages(array('before' => '<nav class="pagination th-pagination">', 'after' => '</nav>'));
    }?>
<?php endwhile; ?>
</section>