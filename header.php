<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- Mirrored from gsrthemes.com/pexr/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Aug 2018 04:30:45 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <!-- Mobile view -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.html">
  <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <?php wp_head();
  global $pexr; ?>
</head>

<body <?php body_class(); ?>>
  <!-- <div class="over-loader loader-live">
    <div class="loader">
        <div class="loader-item style5">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div> -->
  <!-- end loading-->

  <div class="wrapper-boxed">
    <div class="site-wrapper">

      <div class="topbar section-primary topbar-padding">
        <div class="container">
          <div class="row nopadding">
            <div class="topbar-left-items">
              <ul class="toplist toppadding pull-left roboto">
                <?php if (!empty($pexr['helpline_text'])) : ?>
                  <li class="rightl"><?php if (!empty($pexr['helpline_text'])) {
                                        echo $pexr['helpline_text'];
                                      }; ?></li>
                <?php endif; ?>
                <?php if (!empty($pexr['helpline_number'])) : ?>
                  <li><?php echo $pexr['helpline_number']; ?></li>
                <?php endif; ?>
              </ul>
            </div>
            <!--end left-->

            <div class="topbar-right-items pull-right">
              <ul class="toplist toppadding">
                <?php if ($pexr['login_link']) : ?>
                  <li><a href="<?php
                                echo $pexr['login_link'];
                                ?>">Login</a> &nbsp; |</li>
                <?php endif; ?>
                <?php if ($pexr['register_link']) : ?>
                  <li><a href="<?php
                                echo $pexr['register_link'];
                                ?>">Register</a> &nbsp; |</li>
                <?php endif; ?>
                <?php if ($pexr['pexr-facebook']) : ?>
                  <li><a href="<?php echo $pexr['pexr-facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                <?php endif; ?>
                <?php if ($pexr['pexr-twitter']) : ?>
                  <li><a href="<?php echo $pexr['pexr-twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                <?php endif; ?>
                <?php if ($pexr['pexr-google']) : ?>
                  <li><a href="<?php echo $pexr['pexr-google']; ?>"><i class="fa fa-google-plus"></i></a></li>
                <?php endif; ?>
                <?php if ($pexr['pexr-linkedin']) : ?>
                  <li class="last"><a href="<?php echo $pexr['pexr-linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php endif; ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div><!-- end top bar -->

      <div class="col-md-12 nopadding">
        <div class="header-section white style1 links-dark menu-shadow pin-style">
          <div class="container">
            <div class="mod-menu">
              <div class="row nopadding">
                <div class="col-sm-3 nopadding">
                  <?php if (function_exists('the_custom_logo')) : ?>
                    <?php the_custom_logo(); ?>
                  <?php else : ?>
                    <a href="<?php echo esc_url(site_url()); ?>" title="" class="logo style-2 mar-3"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.png" alt=""> </a>
                  <?php endif; ?>
                </div>
                <div class="col-sm-9 nopadding">
                  <div class="main-nav">
                    <ul class="nav navbar-nav top-nav">
                      <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                    </ul>
                    <div id="menu" class="collapse">
                      <?php
                      wp_nav_menu(array(
                        'theme_location'  => 'main-menu',
                        'menu_class'      => 'nav navbar-nav ml-auto',
                        'fallback_cb'   => 'pexr_fallback_menu',
                      ));

                      ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end menu-->

      </div>
      <!--end menu-->