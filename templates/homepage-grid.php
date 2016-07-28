<?php /*
* Template Name: Homepage - Scrolling
*/
get_header(); ?>

<main id="main" class="site-main homepage-grid" role="main">
  <div class="container">

    <?php 
    $hp_bg = get_field('home_panel_image');
    $hp_bg_URL = $hp_bg['sizes']['background-fullscreen'];


    ?>
    <div class="home-panel has-parallax" style="background-image:url('<?php echo $hp_bg_URL; ?>')">
     <!--  <div class="bg" >
        <div class="overlay" aria-hidden="true"></div>
     </div> -->
      <div class="content">

        <img class="fadeInDown animated" src="<?php echo get_template_directory_uri(); ?>/img/better-graphic.png" alt="Text: Better">
        <p class="greeting"><?php echo get_field('hp_greeting_text');?></p>

      </div>
      <div class="down">
        <div class="down-content">
        <a href="#callout"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" alt="Click here to scroll to the next content areea"></a>
        </div>
      </div>
    </div>
    <div id="callout">
      <div class="row">

      <?php 
      $tagline = get_field('tagline');
      ?>

      <div class="tagline"><?php echo $tagline; ?></div>

      <div class="callouts">
        <div class="wrap">
      <?php while (have_rows('hp_callouts')) : the_row(); 
        $icon_lg = get_sub_field('hp_callout_icon');
        $icon_lg_URL = $icon_lg['sizes']['icon'];
        $icon_lg_Alt = $icon_lg['alt'];
        //var_dump($icon_lg_URL);
        $callout_title = get_sub_field('hp_callout_title');
        $callout_text = get_sub_field('hp_callout_text');
        $callout_lt = get_sub_field('hp_callout_link_text');
        $callout_link = get_sub_field('hp_callout_link'); 
      ?>

        <div class="four columns icon-grid-item">
          <div class="callout-icon">
            <img src="<?php echo $icon_lg_URL; ?>" alt="<?php $icon_lg_Alt; ?>">
          </div>
          <h2 class="callout-title"><span class="verb"><?php echo $callout_title; ?></span><span class="better"> better</span></h2>
          <p class="callout-text"><?php echo $callout_text ?></p>
          <a class="callout-button" href="<?php echo $callout_link; ?>"><?php echo $callout_lt ?></a>
        </div>
      <?php endwhile; ?>
        </div>
      </div>
    </div>

    </div>
    <div id="icon">
      <?php get_template_part('/partials/process-icons'); ?>
    </div>

    <?php 
        $image_break = get_field('img_region');
        $image_break_URL = $image_break['sizes']['background-fullscreen'];
      ?>
    <div id="image-only" style="background-image:url('<?php echo $image_break_URL; ?>')"></div>

    <div id="quote" class="quote-panel">
      <?php get_template_part('/partials/quote'); ?>
    </div>

    <?php get_template_part('partials/contact-row'); ?>
    
  </div>

</main><!-- #main -->

<?php get_footer(); ?>
