<?php get_header(); ?>

<main id="content">


	<div class="container">
		<div class="row">
			<div class="the-content">
				<div class="wrap">
					<?php 
						$callout_header = get_field('callout_Header');
						$callout_subhead = get_field('callout_subheader');
							if ($callout_header != ""){ 

					?>
					<h1 class="c-head">
						<?php echo $callout_header; ?>
					<h1>
						
					<?php } ?>

					<?php if ($callout_subhead != ""){ ?>

					<h2 class="c-subhead">
						<?php echo $callout_subhead; ?>
					</h2>

					<?php } ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div class="text-content"><?php the_content(); ?></div>

					<?php endwhile; ?>
				</div>
			</div>


				 <div id="icon">
	      			<?php get_template_part('/partials/process-icons'); ?>
	    		</div>

				 <div id="quote" class="quote-panel">
	      			<?php get_template_part('/partials/quote'); ?>
	    		</div>
	    		<?php 
	    			$has_contact_box = get_field('has_contact_box');
    				if ($has_contact_box == 'true'){
	    				 get_template_part('/partials/contact-row'); 
	    				}
				 ?>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
