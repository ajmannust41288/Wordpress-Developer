<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Web Startup Agency
 */

get_header(); ?>

<div id="content">
  <?php
    $hidcatslide = get_theme_mod('web_startup_agency_hide_categorysec', true);
    if( $hidcatslide != ''){
  ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('web_startup_agency_pageboxes',false) ) { ?>
          <?php $queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('web_startup_agency_pageboxes',true)));
            while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
              <div class="slidesection"> 
                <?php the_post_thumbnail( 'full' ); ?>
                <div class="slider-box">
                  <div class="slider-content">
                  <h3><?php the_title(); ?></h3>
                  <?php
                    $trimexcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 35 );
                    echo '<p>' . esc_html( $shortexcerpt ) . '</p>'; 
                  ?>
                  <div class="pagemore">
                    <a href="<?php the_permalink(); ?>">
                      <?php esc_html_e('Read More','web-startup-agency'); ?>
                    </a>
                  </div>
                </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </section>
  <?php } ?>
  <?php
    $smallbiz_startup_hidepageboxes = get_theme_mod('smallbiz_startup_disabled_pgboxes', true);
    if( $smallbiz_startup_hidepageboxes != ''){
  ?>
    <div id="services_section" class="text-center">
      <div class="container">
        <?php if ( get_theme_mod('smallbiz_startup_text') != "") { ?>
          <span><?php echo esc_html(get_theme_mod('smallbiz_startup_text','')); ?></span>
        <?php } ?>
        <?php if ( get_theme_mod('smallbiz_startup_title') != "") { ?>
          <h2><?php echo esc_html(get_theme_mod('smallbiz_startup_title','')); ?></h2>
        <?php } ?>
        <div class="row">
          <?php for($p=1; $p<4; $p++) { ?>
          <?php if( get_theme_mod('smallbiz_startup_pageboxes'.$p,false)) { ?>
            <?php $smallbiz_startup_querymed = new WP_query('page_id='.esc_attr(get_theme_mod('smallbiz_startup_pageboxes'.$p,true)) ); ?>
              <?php while( $smallbiz_startup_querymed->have_posts() ) : $smallbiz_startup_querymed->the_post(); ?>
              <div class="col-lg-4 col-md-4">
                <div class="pagecontent">
                  <?php if (has_post_thumbnail()) { ?>
                    <div class="thumbbx"><?php the_post_thumbnail(); ?></div>
                  <?php } else { ?>
                    <div class="serv-image" style="width: 100%; height: 300px; background-color: #ffe2cb;"></div>
                  <?php } ?>
                  <div class="text-inner-box">
                    <h3 class="text-right"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } } ?>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  <?php }?>

</div>

<?php get_footer(); ?>