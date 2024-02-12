<?php get_header(); ?>

<div class="clearfix"></div>

<!-- START REVOLUTION SLIDER 5.0 -->
<div>
  <div class="slidermaxwidth">
    <div class="rev_slider_wrapper">
      <!-- START REVOLUTION SLIDER 5.0 auto mode -->
      <div id="rev_slider" class="rev_slider" data-version="5.0">
        <ul>

          <!-- SLIDE  -->
          <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-description="">

            <!-- MAIN IMAGE -->
            <img src="<?php if (!empty($pexr['pexr_silder_one_bg'])) {
                        echo esc_url($pexr['pexr_silder_one_bg']['url']);
                      }; ?>" alt="" data-bgposition="center center" data-kenburns="off" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>

            <!-- LAYER NR. 1 -->
            <div class="tp-caption Gym-Display roboto fweight-7 text-dark tp-resizeme" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','30','20','20']" data-y="['top','top','top','top']" data-voffset="['180','318','130','75']" data-fontsize="['57','50','50','35']" data-lineheight="['65','50','50','35']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1400,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;"><?php if (!empty($pexr['pexr_silder_one_title'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            wp_kses($pexr['pexr_silder_one_title'], pexr_tag_allow());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          }; ?>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption Gym-Display roboto fweight-4 text-dark tp-resizeme" id="slide-1-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','30','20','20']" data-y="['top','top','top','top']" data-voffset="['325','245','245','155']" data-fontsize="['18','16','14','10']" data-lineheight="['25','20','20','16']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;"><?php if (!empty($pexr['pexr_silder_one_content'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            wp_kses($pexr['pexr_silder_one_content'], pexr_tag_allow());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          }; ?>
            </div>


            <!-- LAYER NR. 3 -->
            <div class="tp-caption" id="slide-1-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','30','20','20']" data-y="['top','top','top','top']" data-voffset="['430','440','320','220']" data-frames='[{"delay":1600,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6"> <a href="<?php if (!empty($pexr['pexr_silder_one_button-link'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    esc_url($pexr['pexr_silder_one_button-link']);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  }; ?>" class="slider-but-1 roboto font-weight-7 uppercase"><?php if (!empty($pexr['pexr_silder_one_button'])) {
                                                                                                                                echo
                                                                                                                                esc_html($pexr['pexr_silder_one_button']);
                                                                                                                              }; ?></a>
            </div>

          </li>


          <!-- SLIDE  -->
          <li data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-description="">

            <!-- MAIN IMAGE -->
            <img src="<?php if (!empty($pexr['pexr_silder_two_bg'])) {
                        echo esc_url($pexr['pexr_silder_two_bg']['url']);
                      }; ?>" alt="" data-bgposition="center center" data-kenburns="off" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>

            <!-- LAYER NR. 1 -->
            <div class="tp-caption Gym-Display roboto fweight-7 text-dark tp-resizeme" id="slide-2-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','30','20','20']" data-y="['top','top','top','top']" data-voffset="['180','318','130','75']" data-fontsize="['57','50','50','35']" data-lineheight="['65','50','50','35']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1400,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;"><?php if (!empty($pexr['pexr_silder_two_title'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            wp_kses($pexr['pexr_silder_two_title'], pexr_tag_allow());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          }; ?>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption Gym-Display roboto fweight-4 text-dark tp-resizeme" id="slide-2-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','30','20','20']" data-y="['top','top','top','top']" data-voffset="['325','245','245','155']" data-fontsize="['18','16','14','10']" data-lineheight="['25','20','20','16']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;"><?php if (!empty($pexr['pexr_silder_two_content'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            wp_kses($pexr['pexr_silder_two_content'], pexr_tag_allow());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          }; ?>
            </div>


            <!-- LAYER NR. 3 -->
            <div class="tp-caption" id="slide-2-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','30','20','20']" data-y="['top','top','top','top']" data-voffset="['430','440','320','220']" data-frames='[{"delay":1600,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6"> <a href="<?php if (!empty($pexr['pexr_silder_two_button-link'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    esc_url($pexr['pexr_silder_two_button-link']);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  }; ?>" class="slider-but-1 roboto font-weight-7 uppercase"><?php if (!empty($pexr['pexr_silder_two_button'])) {
                                                                                                                                echo
                                                                                                                                esc_html($pexr['pexr_silder_two_button']);
                                                                                                                              }; ?></a>
            </div>

          </li>

          <li data-index="rs-3" data-transition="fade" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-description="">

            <!-- MAIN IMAGE -->
            <img src="<?php if (!empty($pexr['pexr_silder_three_bg'])) {
                        echo esc_url($pexr['pexr_silder_three_bg']['url']);
                      }; ?>" alt="" data-bgposition="center center" data-kenburns="off" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>

            <!-- LAYER NR. 1 -->
            <div class="tp-caption Gym-Display roboto fweight-7 text-dark tp-resizeme" id="slide-3-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['180','318','130','75']" data-fontsize="['57','50','50','35']" data-lineheight="['65','50','50','35']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1400,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;"><?php if (!empty($pexr['pexr_silder_three_title'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      wp_kses($pexr['pexr_silder_three_title'], pexr_tag_allow());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    }; ?>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption Gym-Display roboto fweight-4 text-dark tp-resizeme" id="slide-3-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['325','245','245','155']" data-fontsize="['18','16','14','10']" data-lineheight="['25','20','20','16']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;"><?php if (!empty($pexr['pexr_silder_three_content'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        wp_kses($pexr['pexr_silder_three_content'], pexr_tag_allow());
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      }; ?>
            </div>


            <!-- LAYER NR. 3 -->
            <div class="tp-caption" id="slide-3-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['430','440','320','220']" data-frames='[{"delay":1600,"speed":500,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6"> <a href="<?php if (!empty($pexr['pexr_silder_three_button-link'])) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        echo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        esc_url($pexr['pexr_silder_three_button-link']);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      }; ?>" class="slider-but-1 roboto font-weight-7 uppercase"><?php if (!empty($pexr['pexr_silder_three_button'])) {
                                                                                                                                  echo
                                                                                                                                  esc_html($pexr['pexr_silder_three_button']);
                                                                                                                                }; ?></a>
            </div>

          </li>


        </ul>
        <!-- END REVOLUTION SLIDER -->
      </div>
    </div>
  </div>
  <!-- END REVOLUTION SLIDER WRAPPER -->
</div>
<div class="clearfix"></div>
<!-- END OF SLIDER WRAPPER -->


<section class="section-light padding-top-6 padding-bottom-4">
  <div class="container">
    <div class="row">

      <div class="col-md-4 hover-icon-up-2 animate-in" data-anim-type="fade-in" data-anim-delay="100">
        <div class="col-md-3"><span class="icon-badge icon-plain-smedium text-primary margin-top-2 margin-bottom-1"></span></div>
        <div class="col-md-9">
          <h5 class="font-weight-7 uppercase"><?php if (!empty($pexr['advantace_one_title'])) {
                                                echo
                                                esc_html($pexr['advantace_one_title']);
                                              }; ?></h5>
          <p><?php if (!empty($pexr['advantace_one_content'])) {
                echo
                esc_html($pexr['advantace_one_content']);
              }; ?></p>
        </div>
      </div><!-- end col -->

      <div class="col-md-4 hover-icon-up-2 animate-in" data-anim-type="fade-in" data-anim-delay="200">
        <div class="col-md-3"><span class="icon-tag icon-plain-smedium text-primary margin-top-2 margin-bottom-1"></span></div>
        <div class="col-md-9">
          <h5 class="font-weight-7 uppercase"><?php if (!empty($pexr['advantace_two_title'])) {
                echo
                esc_html($pexr['advantace_two_title']);
              }; ?></h5>
          <p><?php if (!empty($pexr['advantace_two_content'])) {
                echo
                esc_html($pexr['advantace_two_content']);
              }; ?></p>
        </div>
      </div><!-- end col -->

      <div class="col-md-4 hover-icon-up-2 animate-in" data-anim-type="fade-in" data-anim-delay="300">
        <div class="col-md-3"><span class="icon-umbrella icon-plain-smedium text-primary margin-top-2 margin-bottom-1"></span></div>
        <div class="col-md-9">
          <h5 class="font-weight-7 uppercase"><?php if (!empty($pexr['advantace_three_title'])) {
                echo
                esc_html($pexr['advantace_three_title']);
              }; ?></h5>
          <p><?php if (!empty($pexr['advantace_three_content'])) {
                echo
                esc_html($pexr['advantace_three_content']);
              }; ?></p>
        </div>
      </div><!-- end col -->


    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding">
  <div class="container-fulid">
    <div class="row nopadding">

      <div class="col-md-12 text-center margin-bottom">
        <h2 class="uppercase font-weight-8 margin-bottom-1 text-center"><?php if(!empty($pexr['pexr_work_heading_title'])){
          echo esc_html($pexr['pexr_work_heading_title']);
        };?></h2>
        <h6 class="text-gray font-weight-3 margin-bottom-2"><?php if(!empty($pexr['pexr_work_heading_content'])){
          echo esc_html($pexr['pexr_work_heading_content']);
        };?></h6>
      </div>

      <div class="text-center">
      <?php 
      $pexr_work_post = new WP_Query( array( 
        'post_type'      =>  'pexr_work',
        'posts_per_page' => 8,
        
      ));
      if($pexr_work_post->have_posts()):while($pexr_work_post->have_posts()):$pexr_work_post->the_post();
      ?>

        <div class="col-md-3 col-sm-6 nopadding">
          <figure class="snip1543 less8">
            <?php the_post_thumbnail('pexr_work_thumb');?>
            <figcaption>
              <h3 class="text-white font-weight-7 margin-bottom-1"><?php the_title();?></h3>
              <p><?php echo wp_trim_words(get_the_content() ,15 , NULL)?></p>
            </figcaption>
            <a href="<?php the_permalink();?>"></a>
          </figure>
        </div><!-- end item -->
      <?php endwhile;endif;?>
      </div>

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-bgimg-6 padding-top-8 padding-bottom-5">
  <div class="container">
    <div class="row nopadding">

      <h2 class="uppercase text-white font-weight-8 margin-bottom-4 text-center"><?php if(!empty($pexr['pexr_wedo_heading_title'])){
        echo esc_html($pexr['pexr_wedo_heading_title']);
      };?></h2>

       <div class="col-md-12 nopadding">  
        <?php $services_all_content = new WP_Query(array( 
          'post_type'    => 'pexr-services',
          'posts_per_page' => 6,
        ));
        if($services_all_content->have_posts()): while($services_all_content->have_posts()):$services_all_content->the_post();
        $servie_meta = get_post_meta(get_the_ID(),'service_meta_faicon',true);
        ?>

        <div class="col-md-4 nopadding animate-in" data-anim-type="fade-in" data-anim-delay="100">
          <div class="hover-shadow-3">
            <div class="col-md-4 icon-plain-small iconbox-xtiny border-all-opacity6 border-radius-1 nopadding"><i class="<?php if(!empty($servie_meta)){echo esc_attr($servie_meta);};?> margin-top-1 text-white" aria-hidden="true"></i></div>
            <div class="col-md-8 nopadding">
              <div class="clearfix margin-bottom-respo"></div>
              <h5 class="uppercase text-white font-weight-7 margin-bottom-1 margin-top-minus-6 margin-left-2"><?php the_title();?></h5>
              <p class="text-white margin-left-2 opacity-6">Many web sites still in infancy versions have evolved over the alteration middle years.</p>
            </div>
          </div>          
        </div><!-- end col -->
        <?php endwhile;endif;?>
        <div class="clearfix margin-bottom-2"></div>
      </div>

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="section-primary section-less-padding-3">
  <div class="container">
    <div class="row nopadding">

      <div class="col-md-9 margin-bottom">
        <h3 class="text-white font-weight-7">Powerful Packed Designs Clean and Professional Theme DESIGNED FOR ANY WEBSITE!</h3>
      </div><!-- end col -->

      <div class="col-md-3">
        <div class="margin-top-percent-1"><a href="#" class="sitebutton-1 sty5 roboto font-weight-7 uppercase">Purchase Now!</a></div>
      </div><!-- end col -->

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding section-light text-center">
  <div class="container">
    <div class="row">

      <h2 class="uppercase font-weight-8 margin-bottom-4">Why Choose Us?</h2>

      <div class="col-md-3 col-sm-6 margin-bottom">
        <div class="section-white box-shadow-2 hover-shadow-2 padding-top-4 padding-left-4 padding-right-4 padding-bottom-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ft-icon-primary-1.png" alt="" class="img-responsive-5 margin-bottom-2" />
          <h6 class="uppercase font-weight-5 margin-bottom2">10 Diffrent Home Page Layouts</h6>
          <p>Lorem Ipsum as model will many web sites still over publishing the years.</p>
        </div>
      </div><!-- end col -->

      <div class="col-md-3 col-sm-6 margin-bottom">
        <div class="section-white box-shadow-2 hover-shadow-2 padding-top-4 padding-left-4 padding-right-4 padding-bottom-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ft-icon-primary-2.png" alt="" class="img-responsive-5 margin-bottom-2" />
          <h6 class="uppercase font-weight-5 margin-bottom2">5 Diffrent Header Menu Styles</h6>
          <p>Lorem Ipsum as model will many web sites still over publishing the years.</p>
        </div>
      </div><!-- end col -->

      <div class="col-md-3 col-sm-6">
        <div class="section-white box-shadow-2 hover-shadow-2 padding-top-4 padding-left-4 padding-right-4 padding-bottom-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ft-icon-primary-3.png" alt="" class="img-responsive-5 margin-bottom-2" />
          <h6 class="uppercase font-weight-5 margin-bottom2">Unlimited Useful Shortcodes</h6>
          <p>Lorem Ipsum as model will many web sites still over publishing the years.</p>
        </div>
      </div><!-- end col -->

      <div class="col-md-3 col-sm-6">
        <div class="section-white box-shadow-2 hover-shadow-2 padding-top-4 padding-left-4 padding-right-4 padding-bottom-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/ft-icon-primary-4.png" alt="" class="img-responsive-5 margin-bottom-2" />
          <h6 class="uppercase font-weight-5 margin-bottom2">Setup any website quick & easy</h6>
          <p>Lorem Ipsum as model will many web sites still over publishing the years.</p>
        </div>
      </div><!-- end col -->

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-tpadding-2">
  <div class="container">
    <div class="row">

      <div class="col-md-5 animate-in" data-anim-type="fade-in-left" data-anim-delay="100"><img src="<?php echo get_template_directory_uri(); ?>/images/mobi-site.jpg" alt="" class="img-responsive" /></div><!-- end col -->

      <div class="col-md-7 margin-bottom">
        <div class="less5">
          <h2 class="uppercase font-weight-7 margin-top-percent-1 nomargin">Great Features</h2>
          <h5 class="font-weight-3 margin-bottom-2">Easy-to-customize and fully featured designs</h5>
          <p class="margin-bottom-3">Theme includes unique designs inside of one powerful theme You can completely change the look and feel of your site in seconds</p>

          <div class="col-md-6 nopadding">
            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Diffrent Website Layouts</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Exclusive Slideshows</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Multiple Header Options</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Fullwidth & Onepage Layouts</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Clean Code & Easy to Use</div>
            </div>
            <!--end item-->
          </div><!-- end col -->

          <div class="col-md-6 nopadding">
            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Mega Menu</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Lifetime Support</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Well Structured Pages</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Mobile Friendly Theme</div>
            </div>
            <!--end item-->

            <div class="icons-list-1 icon-tiny">
              <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></div>
              <div class="text text-dark">Cross Browsere Check</div>
            </div>
            <!--end item-->
          </div><!-- end col -->

          <div class="clearfix margin-bottom-4"></div>

          <a href="#" class="sitebutton-1 sty2 dark roboto font-weight-7 uppercase">All Features</a>

        </div>

      </div>
    </div><!-- end col -->

  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<section class="sec-padding sec-bgimg-1">
  <div class="container">
    <div class="row">

      <div class="col-md-4 margin-bottom">
        <h4 class="text-white font-weight-4 margin-bottom2">Alteration handful of model many sentence structures</h4>
        <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-27.jpg" alt="" class="img-responsive" />
        <p class="text-gray-2 margin-top-2">Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.</p>
        <a href="#" class="opacity-white"><strong class="text-small uppercase"><i class="fa fa-caret-right" aria-hidden="true"></i> Read More</strong></a>
      </div><!-- end col -->

      <div class="col-md-4 margin-bottom">
        <h4 class="text-white font-weight-4 margin-bottom2">Various versions have evolved over the years</h4>
        <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-26.jpg" alt="" class="img-responsive" />
        <p class="text-gray-2 margin-top-2">Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.</p>
        <a href="#" class="opacity-white"><strong class="text-small uppercase"><i class="fa fa-caret-right" aria-hidden="true"></i> Read More</strong></a>
      </div><!-- end col -->

      <div class="col-md-4">
        <h4 class="text-white font-weight-4 margin-bottom2">Making this the first generator on the therefore Internet</h4>
        <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-25.jpg" alt="" class="img-responsive" />
        <p class="text-gray-2 margin-top-2">Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.</p>
        <a href="#" class="opacity-white"><strong class="text-small uppercase"><i class="fa fa-caret-right" aria-hidden="true"></i> Read More</strong></a>
      </div><!-- end col -->

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding text-center">
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="100">
        <div class="margin-bottom">
          <span class="icon-lightbulb icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Branding Design</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="200">
        <div class="margin-bottom">
          <span class="icon-camera icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Photography</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="300">
        <div class="margin-bottom">
          <span class="icon-trophy icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Event Design</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="400">
        <div class="margin-bottom">
          <span class="icon-tools icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Fashions</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->

      <div class="clearfix margin-bottom-4"></div>

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="500">
        <div class="margin-bottom">
          <span class="icon-global icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Marketing</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="600">
        <div class="margin-bottom">
          <span class="icon-chat icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Great Support</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="700">
        <div class="margin-bottom">
          <span class="icon-global icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Marketing</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->

      <div class="col-md-3 col-sm-6 hover-icon-up animate-in" data-anim-type="zoom-in" data-anim-delay="800">
        <div>
          <span class="icon-chat icon-plain-smedium margin-bottom-2 text-primary"></span>
          <div class="clearfix margin-bottom-8"></div>
          <h5 class="uppercase font-weight-7 title">Great Support</h5>
          <p class="less5">Lorem ipsum dolor sit amet consectetuer adipiscing sitet justo lorem pendisse</p>
        </div>
      </div>
      <!--end item-->


    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<div class="parallax vertical-align" data-parallax-bg-image="<?php echo get_template_directory_uri(); ?>/images/parallax-img1.jpg" data-parallax-speed="1" data-parallax-direction="down">
  <div class="parallax-overlay bg-opacity-1">
    <div class="container sec-more-padding-1">
      <div class="row">

        <div class="col-md-6 text-center">
          <h1 class="font-weight-7 margin-bottom-2">We Believe Great Design Can Make Great Business <br /><strong class="font-weight-3">Looks Great on Tablets and Mobile Devices</strong></h1>
          <h5 class="font-weight-3 line-height-3 margin-bottom-6">Theme includes unique designs inside of one powerful theme you can completely change the look and feel of your site in seconds</h5>
          <a href="#" class="sitebutton-1 sty5 roboto font-weight-7 uppercase">Purchase Now!</a>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding section-dark">
  <div class="container">
    <div class="row">

      <div class="col-md-4 margin-bottom">
        <div class="icon-plain-msmall left animate-in" data-anim-type="zoom-in" data-anim-delay="100"><br /><i class="fa fa-leaf text-white" aria-hidden="true"></i></div>
        <div class="text-box-right less-padding-5 resnopad">
          <h5 class="text-white font-weight-7 uppercase less-mar-2">Bootstrap support</h5>
          <p class="text-white opacity-5">Lorem ipsum dolor sit amet consectetuer adipiscing elit sit elit Suspendisse et justo Praesent mattis commodo.</p>
        </div>
      </div>
      <!--end item -->

      <div class="col-md-4 margin-bottom">
        <div class="icon-plain-small left animate-in" data-anim-type="zoom-in" data-anim-delay="150"><br /><i class="fa fa-mobile text-white" aria-hidden="true"></i></div>
        <div class="text-box-right less-padding-5 resnopad">
          <h5 class="text-white font-weight-7 uppercase less-mar-2">Responsive Theme</h5>
          <p class="text-white opacity-5">Lorem ipsum dolor sit amet consectetuer adipiscing elit sit elit Suspendisse et justo Praesent mattis commodo.</p>
        </div>
      </div>
      <!--end item -->

      <div class="col-md-4 margin-bottom">
        <div class="icon-plain-msmall left animate-in" data-anim-type="zoom-in" data-anim-delay="200"><br /><i class="fa fa-magic text-white" aria-hidden="true"></i></div>
        <div class="text-box-right less-padding-5 resnopad">
          <h5 class="text-white font-weight-7 uppercase less-mar-2">Beautiful Website</h5>
          <p class="text-white opacity-5">Lorem ipsum dolor sit amet consectetuer adipiscing elit sit elit Suspendisse et justo Praesent mattis commodo.</p>
        </div>
      </div>
      <!--end item -->

      <div class="clearfix"></div>
      <div class="col-divider-margin-4"></div>

      <div class="col-md-4 margin-bottom">
        <div class="icon-plain-msmall left animate-in" data-anim-type="zoom-in" data-anim-delay="250"><br /><i class="fa fa-heart-o text-white" aria-hidden="true"></i></div>
        <div class="text-box-right less-padding-5 resnopad">
          <h5 class="text-white font-weight-7 uppercase less-mar-2">Portfolio of works</h5>
          <p class="text-white opacity-5">Lorem ipsum dolor sit amet consectetuer adipiscing elit sit elit Suspendisse et justo Praesent mattis commodo.</p>
        </div>
      </div>
      <!--end item -->

      <div class="col-md-4 margin-bottom">
        <div class="icon-plain-msmall left animate-in" data-anim-type="zoom-in" data-anim-delay="300"><br /><i class="fa fa-share-alt text-white" aria-hidden="true"></i></div>
        <div class="text-box-right less-padding-5 resnopad">
          <h5 class="text-white font-weight-7 uppercase less-mar-2">Share your passion</h5>
          <p class="text-white opacity-5">Lorem ipsum dolor sit amet consectetuer adipiscing elit sit elit Suspendisse et justo Praesent mattis commodo.</p>
        </div>
      </div>
      <!--end item -->

      <div class="col-md-4 margin-bottom">
        <div class="icon-plain-small left animate-in" data-anim-type="zoom-in" data-anim-delay="350"><br /><i class="fa fa-lightbulb-o text-white" aria-hidden="true"></i></div>
        <div class="text-box-right less-padding-5 resnopad">
          <h5 class="text-white font-weight-7 uppercase less-mar-2">What are you waiting</h5>
          <p class="text-white opacity-5">Lorem ipsum dolor sit amet consectetuer adipiscing elit sit elit Suspendisse et justo Praesent mattis commodo.</p>
        </div>
      </div>
      <!--end item -->

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<section class="sec-padding text-center">
  <div class="container">
    <div class="row">

      <h2 class="uppercase font-weight-8 margin-bottom-4">We Love Fun Facts</h2>

      <div class="col-md-1"></div>

      <div class="col-md-2 col-sm-2 col-xs-6 margin-bottom">
        <h2 class="text-primary font-weight-7 nomargin">4599</h2>
        <h6>Projects</h6>
      </div><!--end item-->

      <div class="col-md-2 col-sm-2 col-xs-6 border-left-1 margin-bottom">
        <h2 class="text-primary font-weight-7 nomargin">567</h2>
        <h6>Clients</h6>
      </div><!--end item-->

      <div class="col-md-2 col-sm-2 col-xs-6 border-left-1 margin-bottom">
        <h2 class="text-primary font-weight-7 nomargin">3699</h2>
        <h6>Done</h6>
      </div><!--end item-->

      <div class="col-md-2 col-sm-2 col-xs-6 border-left-1 margin-bottom">
        <h2 class="text-primary font-weight-7 nomargin">459</h2>
        <h6>Awards</h6>
      </div><!--end item-->

      <div class="col-md-2 col-sm-2 col-xs-12 border-left-1">
        <h2 class="text-primary font-weight-7 nomargin">9457299</h2>
        <h6>Love</h6>
      </div><!--end item-->

      <p class="clearfix margin-bottom-5"></p>

      <div class="col-md-6 text-right respo margin-bottom"><a href="#" class="sitebutton-1 sty2 dark2 roboto font-weight-7 uppercase">Show Testimonials</a></div>
      <div class="col-md-6 text-left respo"><a href="#" class="sitebutton-1 sty2 dark roboto font-weight-7 uppercase">Get Started Now!</a></div>

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<section class="sec-bgimg-7 sec-padding">
  <div class="container">
    <div class="row nopadding">

      <div class="col-md-5 section-white nopadding box-shadow-5 animate-in" data-anim-type="fade-in-left" data-anim-delay="100">

        <div class="border-inside-1 padding-top-4 padding-bottom-6 padding-left-5 padding-right-5">

          <h3 class="uppercase font-weight-8 line-height-5 margin-bottom-2">Build your own website the easy way</h3>

          <h6 class="font-weight-4 line-height-3 margin-bottom-4">Passages of Lorem Ipsum available, but the majority have alteration handful of model sentence structures to generate which looks reasonable the majority have alteration handful model sentence structures generate which looks reasonable.</h6>

          <a href="#" class="sitebutton-1 sty2 roboto font-weight-7 uppercase">More Details</a>

        </div>

      </div>

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding section-light text-center">
  <div class="container">
    <div class="row">

      <div class="col-md-4 margin-bottom">
        <div class="img-hover-text5 text-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-13.jpg" alt="" class="img-responsive opacity">
          <div class="distext">
            <h4 class="uppercase text-white font-weight-8 nomargin">Passionate innovative thinkers</h4>
            <hr class="divider-line white-opacity">
            <h5 class="text-white font-weight-5">Model various versions have evolved over the years.</h5>

          </div>
          <div class="section-secondary padding-top padding-bottom padding-left-1 padding-left-3">
            <h6 class="small-text uppercase text-white font-weight-5 less-mar-4"><a href="#">Read More &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a></h6>
          </div>
        </div>
      </div><!-- end col -->

      <div class="col-md-4 margin-bottom">
        <div class="img-hover-text5 text-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-14.jpg" alt="" class="img-responsive opacity">
          <div class="distext">
            <h4 class="uppercase text-white font-weight-8 nomargin">Exceptional user experience</h4>
            <hr class="divider-line white-opacity">
            <h5 class="text-white font-weight-5">Model various versions have evolved over the years.</h5>

          </div>
          <div class="section-primary padding-top padding-bottom padding-left-1 padding-left-3">
            <h6 class="small-text uppercase text-white font-weight-5 less-mar-4"><a href="#">Read More &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a></h6>
          </div>
        </div>
      </div><!-- end col -->

      <div class="col-md-4">
        <div class="img-hover-text5 text-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-15.jpg" alt="" class="img-responsive opacity">
          <div class="distext">
            <h4 class="uppercase text-white font-weight-8 nomargin">creative marketing digital agency</h4>
            <hr class="divider-line white-opacity">
            <h5 class="text-white font-weight-5">Model various versions have evolved over the years.</h5>

          </div>
          <div class="section-dark padding-top padding-bottom padding-left-1 padding-left-3">
            <h6 class="small-text uppercase text-white font-weight-5 less-mar-4"><a href="#" class="white">Read More &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a></h6>
          </div>
        </div>
      </div><!-- end col -->


    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-bgimg-2 sec-tpadding-2">
  <div class="container">
    <div class="row nopadding">

      <div class="col-md-12 nopadding">
        <div id="simp-slider">
          <input id="radio1" name="controls" type="radio">
          <label for="radio1" class="button b1"></label>
          <input id="radio2" name="controls" type="radio">
          <label for="radio2" class="button b2"></label>
          <input id="radio3" name="controls" type="radio">
          <label for="radio3" class="button b3"></label>

          <div class="active"></div>

          <div class="slider-stack slider-backgrounds">
            <div class="sb1"></div>
            <div class="sb2"></div>
            <div class="sb3"></div>
          </div>

          <div class="slider-stack slider-foregrounds">

            <div class="sf1">
              <div class="col-md-1 nopadding"></div>
              <div class="col-md-5 nopadding">
                <h2 class="text-white font-weight-7 margin-top-5 margin-bottom-2">Looks Great on Tablets & Mobile Devices</h2>
                <h5 class="text-white font-weight-4 line-height-3 margin-bottom-6">There are many variations of passages but the majority have suffered alteration in some form or randomised words handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</h5>
                <a href="#" class="sitebutton-1 sty5 small roboto font-weight-7 uppercase">More Details</a>
                <div class="clearfix margin-bottom"></div>
              </div>
              <div class="col-md-1 nopadding"></div>
              <div class="col-md-4 nopadding"><img src="<?php echo get_template_directory_uri(); ?>/images/iphone.png" alt="" class="img-responsive" /></div>
            </div>

            <div class="sf2">
              <div class="col-md-1 nopadding"></div>
              <div class="col-md-5 nopadding">
                <h2 class="text-white font-weight-7 margin-top-5 margin-bottom-2">Latest HTML5 & CSS3 Techniques</h2>
                <h5 class="text-white font-weight-4 line-height-3 margin-bottom-6">There are many variations of passages but the majority have suffered alteration in some form or randomised words handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</h5>
                <a href="#" class="sitebutton-1 sty5 small roboto font-weight-7 uppercase">More Details</a>
                <div class="clearfix margin-bottom"></div>
              </div>
              <div class="col-md-1 nopadding"></div>
              <div class="col-md-4 nopadding"><img src="<?php echo get_template_directory_uri(); ?>/images/iphone.png" alt="" class="img-responsive" /></div>
            </div>

            <div class="sf3">
              <div class="col-md-1 nopadding"></div>
              <div class="col-md-5 nopadding">
                <h2 class="text-white font-weight-7 margin-top-5 margin-bottom-2">Smooth Carousel & Parallax Effects</h2>
                <h5 class="text-white font-weight-4 line-height-3 margin-bottom-6">There are many variations of passages but the majority have suffered alteration in some form or randomised words handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</h5>
                <a href="#" class="sitebutton-1 sty5 small roboto font-weight-7 uppercase">More Details</a>
                <div class="clearfix margin-bottom"></div>
              </div>
              <div class="col-md-1 nopadding"></div>
              <div class="col-md-4 nopadding"><img src="<?php echo get_template_directory_uri(); ?>/images/iphone.png" alt="" class="img-responsive" /></div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-12 col-xs-12 margin-bottom">
        <div class="tab-navbar-main-style-7 tabstyle-7">
          <ul class="responsive-tabs">
            <li><a href="#example-7-tab-1" target="_self">
                <div class="tab-navicon"></div>
                Web Design
              </a></li>
            <li><a href="#example-7-tab-2" target="_self">
                <div class="tab-navicon"></div>
                Development
              </a></li>
            <li><a href="#example-7-tab-3" target="_self">
                <div class="tab-navicon"></div>
                Marketing
              </a></li>
            <li><a href="#example-7-tab-4" class="no-border" target="_self">
                <div class="tab-navicon"></div>
                Support
              </a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <div class="tab-content-style-7">
          <div class="responsive-tabs-content padding-left-4 padding-right-4 padding-top-2 padding-bottom-1">
            <div id="example-7-tab-1" class="responsive-tabs-panel">
              <h5 class="uppercase font-weight-5">Web Design</h5>
              <h6 class="font-weight-4">Many desktop publishi packages and web page editors in use the Ipsum as their model as words which look believable many web sites.</h6>
              <p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose cites of the word in classical literature, discovered the undoubtable source.</p>

            </div>
            <!--end panel 1-->
            <div class="clearfix"></div>

            <div id="example-7-tab-2" class="responsive-tabs-panel">
              <h5 class="uppercase font-weight-5">Development</h5>
              <h6 class="font-weight-4">Many desktop publishi packages and web page editors in use the Ipsum as their model as words which look believable many web sites.</h6>
              <p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose cites of the word in classical literature, discovered the undoubtable source.</p>

            </div>
            <!--end panel 2-->

            <div class="clearfix"></div>

            <div id="example-7-tab-3" class="responsive-tabs-panel">
              <h5 class="uppercase font-weight-5">Marketing</h5>
              <h6 class="font-weight-4">Many desktop publishi packages and web page editors in use the Ipsum as their model as words which look believable many web sites.</h6>
              <p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose cites of the word in classical literature, discovered the undoubtable source.</p>


            </div>
            <!--end panel 3-->

            <div class="clearfix"></div>

            <div id="example-7-tab-4" class="responsive-tabs-panel">
              <h5 class="uppercase font-weight-5">Support</h5>
              <h6 class="font-weight-4">Many desktop publishi packages and web page editors in use the Ipsum as their model as words which look believable many web sites.</h6>
              <p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose cites of the word in classical literature, discovered the undoubtable source.</p>


            </div>
            <!--end panel 3-->

          </div>
        </div>
        <!--end column-->

      </div>

      <div class="col-md-4 col-sm-12">
        <!-- Accordion begin -->
        <div class="accordion_example">

          <!-- Section 1 -->
          <div class="accordion_in style5 acc_active">
            <div class="acc_head uppercase">Our History</div>
            <div class="acc_content no-lpadd">
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit justo consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer adipiscing tend to repeat predefined chunks as necessary</p>

            </div>
          </div>

          <!-- Section 2 -->
          <div class="accordion_in style5">
            <div class="acc_head uppercase">Our Success</div>
            <div class="acc_content no-lpadd">
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo consectetuer adipiscing mattis commodo augue ornare adipiscing augue .</p>
            </div>
          </div>

          <!-- Section 3 -->
          <div class="accordion_in style5">
            <div class="acc_head uppercase">Our Services</div>
            <div class="acc_content no-lpadd">
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer adipiscing hendrerit augue .</p>
            </div>
          </div>

          <!-- Section 4 -->
          <div class="accordion_in style5">
            <div class="acc_head uppercase">Our Awards</div>
            <div class="acc_content no-lpadd">
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer adipiscing hendrerit augue .</p>
            </div>
          </div>

        </div>
        <!-- Accordion end -->

      </div>
      <!--end item-->

    </div><!-- end col -->


  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding section-light">
  <div class="container">
    <div class="row">

      <div class="col-md-6 margin-bottom animate-in" data-anim-type="fade-in" data-anim-delay="100">
        <div class="section-white">
          <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-21.jpg" alt="" class="img-responsive" />
          <div class="less4 padding-top-3 padding-bottom-2">
            <h4 class="font-weight-5 margin-bottom-1"><a href="#" class="dark-primary">Always combining its simplicity</a></h4>
            <p class="margin-bottom-2">Need to be sure there anyth embarrassing hidden in the middle of text the tend to repeat predefined chunks</p>
            <hr class="divider-line-full margin-bottom-1">
            <p class="roboto text-small2"><span class="icon-user icon-plain-stiny opacity-4"></span>&nbsp; gsrthemes9, &nbsp;&nbsp; 3 Days ago</p>
          </div>
        </div>
      </div><!--end col-->

      <div class="col-md-6 animate-in" data-anim-type="fade-in" data-anim-delay="200">

        <div class="col-md-12 section-white nopadding">
          <div class="col-md-4 nopadding">
            <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-23.jpg" alt="" class="img-responsive" />
          </div>
          <div class="col-md-8">
            <div class="less5">
              <h6 class="font-weight-5 margin-bottom-1 margin-top-2"><a href="#" class="dark-primary">Scrambled it to make a type book</a></h6>
              <p class="text-small2 text-gray-3 line-height-1 margin-bottom-2">Passage, and going through the cites of the word in classical literature, discovered.</p>
              <p class="roboto text-small2 padding-bottom-respo3"><span class="icon-user icon-plain-stiny opacity-4"></span>&nbsp; gsrthemes9, &nbsp;&nbsp; 1 Week ago</p>
            </div>
          </div>
        </div><!--end col-->

        <div class="clearfix margin-bottom-3"></div>

        <div class="col-md-12 section-white nopadding">
          <div class="col-md-4 nopadding">
            <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-22.jpg" alt="" class="img-responsive" />
          </div>
          <div class="col-md-8">
            <div class="less5">
              <h6 class="font-weight-5 margin-bottom-1 margin-top-2"><a href="#" class="dark-primary">Aldus pageMaker including versions</a></h6>
              <p class="text-small2 text-gray-3 line-height-1 margin-bottom-2">Passage, and going through the cites of the word in classical literature, discovered.</p>
              <p class="roboto text-small2 padding-bottom-respo3"><span class="icon-user icon-plain-stiny opacity-4"></span>&nbsp; gsrthemes9, &nbsp;&nbsp; 2 Week ago</p>
            </div>
          </div>
        </div><!--end col-->

        <div class="clearfix margin-bottom-3"></div>

        <div class="col-md-12 section-white nopadding">
          <div class="col-md-4 nopadding">
            <img src="<?php echo get_template_directory_uri(); ?>/images/site-img-24.jpg" alt="" class="img-responsive" />
          </div>
          <div class="col-md-8">
            <div class="less5">
              <h6 class="font-weight-5 margin-bottom-1 margin-top-2"><a href="#" class="dark-primary">Discover the undoubtable source</a></h6>
              <p class="text-small2 text-gray-3 line-height-1 margin-bottom-2">Passage, and going through the cites of the word in classical literature, discovered.</p>
              <p class="roboto text-small2 padding-bottom-respo3"><span class="icon-user icon-plain-stiny opacity-4"></span>&nbsp; gsrthemes9, &nbsp;&nbsp; 3 Week ago</p>
            </div>
          </div>
        </div><!--end col-->

      </div><!--end col-->

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding sec-bgimg-3">
  <div class="container">
    <div class="row nopadding">

      <div class="col-md-12 text-center">
        <h2 class="uppercase text-white font-weight-8 margin-bottom-1 text-center">Our Serivices</h2>
        <h6 class="text-gray-2 font-weight-3 margin-bottom-2">We have the experience and the knowledge to get your vision comes true</h6>
      </div>

      <div class="clearfix margin-bottom-1"></div>

      <div class="col-md-12 slide-controls-5 nopadding">
        <div id="owl-demo5" class="owl-carousel">

          <div class="item">
            <div class="text-box section-white padding-percent-1 text-center border-radius-1">
              <div class="icon-plain-small margin-bottom-2"><i class="fa fa-file-image-o text-primary" aria-hidden="true"></i></div>
              <h5 class="font-weight-7 uppercase margin-bottom-1">Pre Designed Layouts</h5>
              <p class="text-gray">We need sure generate the trne repeat predefine the centuries one the release which looks the reasonable</p>
            </div>
          </div><!--end item-->

          <div class="item">
            <div class="text-box section-white padding-percent-1 text-center border-radius-1">
              <div class="icon-plain-small margin-bottom-2"><i class="fa fa-film text-primary" aria-hidden="true"></i></div>
              <h5 class="font-weight-7 uppercase margin-bottom-1">Exclusive Slideshows</h5>
              <p class="text-gray">We need sure generate the trne repeat predefine the centuries one the release which looks the reasonable</p>
            </div>
          </div><!--end item-->

          <div class="item">
            <div class="text-box section-white padding-percent-1 text-center border-radius-1">
              <div class="icon-plain-small margin-bottom-2"><i class="fa fa-tablet text-primary" aria-hidden="true"></i></div>
              <h5 class="font-weight-7 uppercase margin-bottom-1">Mobile Friendly Theme</h5>
              <p class="text-gray">We need sure generate the trne repeat predefine the centuries one the release which looks the reasonable</p>
            </div>
          </div><!--end item-->

          <div class="item">
            <div class="text-box section-white padding-percent-1 text-center border-radius-1">
              <div class="icon-plain-small margin-bottom-2"><i class="fa fa-globe text-primary" aria-hidden="true"></i></div>
              <h5 class="font-weight-7 uppercase margin-bottom-1">Cross Browsere Check</h5>
              <p class="text-gray">We need sure generate the trne repeat predefine the centuries one the release which looks the reasonable</p>
            </div>
          </div><!--end item-->

          <div class="item">
            <div class="text-box section-white padding-percent-1 text-center border-radius-1">
              <div class="icon-plain-small margin-bottom-2"><i class="fa fa-lightbulb-o text-primary" aria-hidden="true"></i></div>
              <h5 class="font-weight-7 uppercase margin-bottom-1">Creative Business Thinking</h5>
              <p class="text-gray">We need sure generate the trne repeat predefine the centuries one the release which looks the reasonable</p>
            </div>
          </div><!--end item-->

          <div class="item">
            <div class="text-box section-white padding-percent-1 text-center border-radius-1">
              <div class="icon-plain-small margin-bottom-2"><i class="fa fa-bell-o text-primary" aria-hidden="true"></i></div>
              <h5 class="font-weight-7 uppercase margin-bottom-1">Improve Your Business</h5>
              <p class="text-gray">We need sure generate the trne repeat predefine the centuries one the release which looks the reasonable</p>
            </div>
          </div><!--end item-->

          <div class="item">
            <div class="text-box section-white padding-percent-1 text-center border-radius-1">
              <div class="icon-plain-small margin-bottom-2"><i class="fa fa-files-o text-primary" aria-hidden="true"></i></div>
              <h5 class="font-weight-7 uppercase margin-bottom-1">Well Structured Pages</h5>
              <p class="text-gray">We need sure generate the trne repeat predefine the centuries one the release which looks the reasonable</p>
            </div>
          </div><!--end item-->

        </div>
      </div>
      <!--end item-->

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding text-center">
  <div class="container">
    <div class="row">

      <h2 class="uppercase font-weight-8 margin-bottom-4">Meet Our Team</h2>

      <div class="col-md-3 col-sm-6 margin-bottom animate-in" data-anim-type="fade-in" data-anim-delay="100">
        <div class="box-shadow-2 padding-top-4 padding-left-5 padding-right-5 padding-bottom-3 hover-shadow-2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/people-img42.jpg" alt="" class="circle12 margin-bottom-2" />
          <h5 class="font-weight-6 uppercase margin-bottom-1">Alex Jacob</h5>
          <p>Lorem Ipsum as model will uncover many web sites over the years.</p>
        </div>
      </div><!-- end col -->

      <div class="col-md-3 col-sm-6 margin-bottom animate-in" data-anim-type="fade-in" data-anim-delay="200">
        <div class="box-shadow-2 padding-top-4 padding-left-5 padding-right-5 padding-bottom-3 hover-shadow-2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/people-img43.jpg" alt="" class="circle12 margin-bottom-2" />
          <h5 class="font-weight-6 uppercase margin-bottom-1">Alana Desra</h5>
          <p>Lorem Ipsum as model will uncover many web sites over the years.</p>
        </div>
      </div><!-- end col -->

      <div class="col-md-3 col-sm-6 margin-bottom animate-in" data-anim-type="fade-in" data-anim-delay="300">
        <div class="box-shadow-2 padding-top-4 padding-left-5 padding-right-5 padding-bottom-3 hover-shadow-2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/people-img47.jpg" alt="" class="circle12 margin-bottom-2" />
          <h5 class="font-weight-6 uppercase margin-bottom-1">Mark Heribo</h5>
          <p>Lorem Ipsum as model will uncover many web sites over the years.</p>
        </div>
      </div><!-- end col -->

      <div class="col-md-3 col-sm-6 animate-in" data-anim-type="fade-in" data-anim-delay="400">
        <div class="box-shadow-2 padding-top-4 padding-left-5 padding-right-5 padding-bottom-3 hover-shadow-2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/people-img48.jpg" alt="" class="circle12 margin-bottom-2" />
          <h5 class="font-weight-6 uppercase margin-bottom-1">Kiley Felicity</h5>
          <p>Lorem Ipsum as model will uncover many web sites over the years.</p>
        </div>
      </div><!-- end col -->


    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding section-light price-sec-one">
  <div class="container">
    <div class="row">

      <h2 class="uppercase font-weight-8 margin-bottom-6 text-center">Choose Best Package</h2>

      <div class="col-md-12 nopadding text-center">

        <div class="col-md-3 col-sm-6 col-xs-12 nopadding">
          <div class="text-box padding-percent-2">
            <h4 class="text-gray-2 uppercase font-weight-6 margin-bottom-2">Lite</h4>
            <div class="section-white padding-top-1 padding-bottom-1 border-radius-1 text-center less4 box-shadow-2">
              <h2 class="roboto text-dark font-weight-8 nomargin">$4.99</h2>
            </div>
            <h6 class="font-weight-4 margin-top-3 margin-bottom-3">Amet adipiscing elit suspendisse et justo mattis commodo source</h6>
            <ul class="roboto list-padding-1 font-weight-5">
              <li>1 Free website</li>
              <li>500 GB storage</li>
              <li>Unlimited bandwidth</li>
              <li>Free domain with annual plan</li>
              <li>75 email addresses</li>
            </ul>
            <div class="clearfix margin-bottom-4"></div>
            <a href="#" class="but-stbutton-3 uppercase font-weight-7">Choose Package</a>
            <p class="clearfix padding-bottom2"></p>
          </div>
        </div><!-- end item -->

        <div class="col-md-3 col-sm-6 col-xs-12 nopadding">
          <div class="text-box padding-percent-2 margin-bottom">
            <h4 class="text-gray-2 uppercase font-weight-6 margin-bottom-2">Starter</h4>
            <div class="section-white padding-top-1 padding-bottom-1 border-radius-1 text-center less4 box-shadow-2">
              <h2 class="roboto text-dark font-weight-8 nomargin">$9.99</h2>
            </div>
            <h6 class="font-weight-4 margin-top-3 margin-bottom-3">Amet adipiscing elit suspendisse et justo mattis commodo source</h6>
            <ul class="roboto list-padding-1 font-weight-5">
              <li>1 Free website</li>
              <li>500 GB storage</li>
              <li>Unlimited bandwidth</li>
              <li>Free domain with annual plan</li>
              <li>75 email addresses</li>
            </ul>
            <div class="clearfix margin-bottom-4"></div>
            <a href="#" class="but-stbutton-3 uppercase font-weight-7">Choose Package</a>
            <p class="clearfix padding-bottom2"></p>
          </div>
        </div><!-- end item -->

        <div class="col-md-3 col-sm-6 col-xs-12 nopadding active">
          <div class="hilight uppercase">Most Popular</div>
          <div class="text-box padding-percent-2">
            <h4 class="text-primary uppercase font-weight-7 margin-bottom-2">Economy</h4>
            <div class="section-white padding-top-1 padding-bottom-1 border-radius-1 text-center less4 box-shadow-2">
              <h2 class="roboto text-primary font-weight-8 nomargin">$18.99</h2>
            </div>
            <h6 class="font-weight-4 margin-top-3 margin-bottom-3">Amet adipiscing elit suspendisse et justo mattis commodo source</h6>
            <ul class="roboto list-padding-1 font-weight-5">
              <li>1 Free website</li>
              <li>500 GB storage</li>
              <li>Unlimited bandwidth</li>
              <li>Free domain with annual plan</li>
              <li>75 email addresses</li>
            </ul>
            <div class="clearfix margin-bottom-4"></div>
            <a href="#" class="but-stbutton-3 active uppercase font-weight-7">Choose Package</a>
            <p class="clearfix padding-bottom2"></p>
          </div>
        </div><!-- end item -->

        <div class="col-md-3 col-sm-6 col-xs-12 nopadding">
          <div class="text-box padding-percent-2">
            <h4 class="text-gray-2 uppercase font-weight-6 margin-bottom-2">Ultimate</h4>
            <div class="section-white padding-top-1 padding-bottom-1 border-radius-1 text-center less4 box-shadow-2">
              <h2 class="roboto text-dark font-weight-8 nomargin">$18.99</h2>
            </div>
            <h6 class="font-weight-4 margin-top-3 margin-bottom-3">Amet adipiscing elit suspendisse et justo mattis commodo source</h6>
            <ul class="roboto list-padding-1 font-weight-5">
              <li>1 Free website</li>
              <li>500 GB storage</li>
              <li>Unlimited bandwidth</li>
              <li>Free domain with annual plan</li>
              <li>75 email addresses</li>
            </ul>
            <div class="clearfix margin-bottom-4"></div>
            <a href="#" class="but-stbutton-3 uppercase font-weight-7">Choose Package</a>
            <p class="clearfix padding-bottom2"></p>
          </div>
        </div><!-- end item -->


      </div>


    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="padding-top-7 padding-bottom-5">
  <div class="container">
    <div class="row">

      <div class="col-md-12 nopadding">

        <div>
          <div id="owl-demo3-1" class="owl-carousel owl-theme">

            <div class="item padding-top-2">

              <div class="col-md-4 col-sm-4 animate-in" data-anim-type="zoom-in" data-anim-delay="100">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2 margin-bottom">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Wow, Done Very Fast!</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small1.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Marison Avasa</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-4 col-sm-4 animate-in" data-anim-type="zoom-in" data-anim-delay="200">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2 margin-bottom">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Highly Recommended</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small2.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Joan Collins</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-4 col-sm-4 animate-in" data-anim-type="zoom-in" data-anim-delay="300">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Done, Exactly as We Like</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small3.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Melinda Liza</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="clearfix margin-bottom-3"></div>
            </div>
            <!--end carousel item-->


            <div class="item padding-top-2">

              <div class="col-md-4 col-sm-4">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2 margin-bottom">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Great Knowledge</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small4.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Ayanna Darya</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-4 col-sm-4">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2 margin-bottom">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Will Hire Again</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small5.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Frymcia Lisa</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-4 col-sm-4">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Excellent Work</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small1.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Natasha Arana</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->


              <div class="clearfix margin-bottom-3"></div>
            </div>
            <!--end carousel item-->

            <div class="item padding-top-2">

              <div class="col-md-4 col-sm-4">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2 margin-bottom">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Really Good Service</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small7.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Enadria Lisa</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-4 col-sm-4">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2 margin-bottom">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">Web UI Design</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small8.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Dean Ambrose</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="col-md-4 col-sm-4">
                <div class="margin-bottom">
                  <div class="text-box section-white padding-top-3 padding-bottom-4 padding-left-4 padding-right-4 border-radius-1 box-shadow-2">
                    <h5 class="text-primary font-weight-7 margin-bottom-1">High Quality Website</h5>
                    <p class="margin-bottom-2">We need sure generate internet predefine repeat the centuries one the release.</p>
                    <div class="above-arrow-line"><img src="<?php echo get_template_directory_uri(); ?>/images/people-img-small9.jpg" alt="" class="imgbox-xtiny2 round float-left margin-top-1 margin-right-3" />
                      <h6 class="small-text nomargin font-weight-5">Larissa Melina</h6>
                      <i class="text-small">Website.com</i>
                    </div>
                  </div>
                </div>
              </div>
              <!--end item-->

              <div class="clearfix margin-bottom-3"></div>
            </div>
            <!--end carousel item-->

          </div>
        </div>

      </div><!-- end item -->

    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<div class="section-less-padding-3 section-light-3 text-center">
  <div class="container">
    <div class="row">

      <div class="col-md-12 nopadding">
        <div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/images/clogo1.png" alt="" class="grayscale img-responsive-2 opacity-5" /></div>
        <div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/images/clogo2.png" alt="" class="grayscale img-responsive-2 opacity-5" /></div>
        <div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/images/clogo3.png" alt="" class="grayscale img-responsive-2 opacity-5" /></div>
        <div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/images/clogo4.png" alt="" class="grayscale img-responsive-2 opacity-5" /></div>
        <div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/images/clogo5.png" alt="" class="grayscale img-responsive-2 opacity-5" /></div>
        <div class="col-md-2 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/images/clogo6.png" alt="" class="grayscale img-responsive-2 opacity-5" /></div>
      </div>


    </div>
  </div>
</div>
<div class="clearfix"></div>
<!-- end section -->

<?php get_footer(); ?>