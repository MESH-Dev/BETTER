<?php 

$quote_type = get_field('quote_type');
$quote_text = get_field('quote_text');
$quote_author = get_field('quote_attribution');
$quote_author_title = get_field('quotee_title');

$quote_bg = get_field('quote_image');
$quote_bg_URL = $quote_bg['sizes']['large'];


?>

<?php if($quote_type == 'image' && $quote_text != "") { ?>
<div class="row">
	<div class="quote-wrap">
		<div class="quote-text seven columns">
			<div class="quote-container <?php echo $quote_type ?>">
				<div class="content">
					<p class="text">"<?php echo $quote_text; ?>"</p>
					<p class="quote-author"><?php echo $quote_author; ?></p>
					<?php if ($quote_author_title != '') { ?>
					<p class="author-title"><?php echo $quote_author_title; ?></p>
					<?php } ?>
				</div> <!-- end content -->
			</div> <!-- end quote-container -->
		</div> <!-- end quote-text -->
		<div class="quote-image five columns">
			<div class="image" style="background-image:url('<?php echo $quote_bg_URL; ?>')">
				<!-- <img src="<?php echo $quote_bg_URL; ?>"> -->
			</div> <!-- end .image -->
		</div> <!-- end quote image -->
	</div>
</div><!--end row-->

<?php }elseif ($quote_type == 'no-image' && $quote_text != "") { ?>

<div class="row">
	<div class="twelve columns">
		<div class="quote-container full">
			<div class="content">
				<p class="quote-text"><?php echo $quote_text; ?></p>
				<p class="quote-author"><?php echo $quote_author; ?></p>
				<?php if ($quote_author_title != '') { ?>
				<p class="author-title"><?php echo $quote_author_title; ?></p>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php } ?>
