<?php /*
* Template Name: Landing 
*/
get_header(); ?>

<?php //if (get_field('big_banner')) :

  // $big_banner = get_field('big_banner');

  // // vars
  // $url = $big_banner['url'];
  // $title = $big_banner['title'];
  // $alt = $big_banner['alt'];
  // $caption = $big_banner['caption'];

  // // thumbnail
  // $thumb = $big_banner['sizes']['background-fullscreen'];

?>

<?php 

        $banner_image = get_field('banner_image');
        $banner_image_URL = $banner_image['sizes']['large'];
        $banner_text = get_field('banner_text');

        if($banner_image != '' || $baner_text != ''){
        ?>
<div class="banner">
  <div class="container">
  <!-- <img src="<?php echo $thumb; ?>" /> -->
    <div class="row">



        <div class="six columns banner-image " style="background-image:url('<?php echo $banner_image_URL; ?>')">
          <div class="image">
          </div>
        </div>
        <div class="six columns banner-text">
          <h2 class="banner-title"><?php echo $banner_text ?>
        </div>
    </div>
  </div>
</div>

<?php } ?>

<?php //endif; ?>

<main id="main" class="site-main" role="main">

  <div class="container">
    <div class="row">

      <div class="content-grid">
        <div class="wrap">
          <?php $ld_ctr = 0; 

            while (have_rows('landing_grid')) : the_row(); 
            $landing_content_icon = get_sub_field('landing_content_icon');
            $landing_content_icon_URL = $landing_content_icon['sizes']['icon'];
            $landing_content_title = get_sub_field('landing_content_text_title');
            $landing_content_paragraph = get_sub_field('landing_content_paragraph');

            //var_dump($landing_content_icon_URL);

            $ld_ctr++;
            $number = '';

            if($ld_ctr % 2 == 0){
              $number = 'even';
            }

            else{
              $number = 'odd';
            }

            ?>


            <?php if ($ld_ctr % 2 == 0) { ?>

              <div class="landing-row row <?php echo $number; ?>">
                <div class="landing-icon">
                  <img src="<?php echo $landing_content_icon_URL;?>">
                </div> 
                <div class="landing-content <?php echo $number; ?> ">
                  <h3 class="landing-row-title"><?php echo $landing_content_title; ?></h3>
                  <p class="landing-content-paragraph">
                    <?php echo $landing_content_paragraph; ?>
                  </p>
                </div>
              </div><!--  end landing row -->

            <?php }else{ ?>
              
              <div class="landing-row row <?php echo $number; ?>">
                <div class="landing-content <?php echo $number; ?>">
                  <h3 class="landing-row-title"><?php echo $landing_content_title; ?></h3>
                  <p class="landing-content-paragraph">
                    <?php echo $landing_content_paragraph; ?>
                  </p>
                </div>
                <div class="landing-icon">
                  <img src="<?php echo $landing_content_icon_URL;?>">
                </div> 
              </div> <!--  end landing row -->

            <?php } ?>

          <? endwhile; ?>
        </div><!-- end wrap -->
      </div> <!-- end content-grid -->
      <div id="icon">
            <?php get_template_part('/partials/process-icons'); ?>
        </div>

       <div id="quote" class="quote-panel">
            <?php get_template_part('/partials/quote'); ?>
        </div>

        <?php get_template_part('/partials/contact-row'); ?>
    </div>
  </div>

</main><!-- #main -->

<?php get_footer(); ?>
