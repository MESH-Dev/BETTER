<?php 
	$title = get_field('process_title');
	$statement = get_field('process_statement');

?>

<div class="process">
	<div class="row">
	<div class="wrap">
		<?php if ($title != ''){ ?>
		<h2 class="icon-section-title"><?php echo $title; ?></h2>
		<?php } ?>

		<p class="statement">
			<?php echo $statement; ?>
		</p>

		<div class="icons-list">
			<div class="row">
			<?php while (have_rows('icon_list', 'options')) : the_row(); 
				$icon = get_sub_field('p_icon', 'options');
				$icon_URL = $icon['sizes']['small'];
				//var_dump($icon_URL);
				$icon_title = get_sub_field('icon_title', 'options');
				$icon_hover_text = get_sub_field('icon_hover_text', 'options');
			?>

				<div class="three columns">
					<div class="icon-content">
						<img src="<?php echo $icon_URL; ?>">
						<div class="hover-content">
							<h3 class="icon-title"><?php echo $icon_title; ?></h3> 
							<p class="hover-text"><?php echo $icon_hover_text; ?></p>
						</div>
					</div>
				</div>
			<? endwhile; ?>
			</div>
		</div>
	</div>
	</div>
</div>