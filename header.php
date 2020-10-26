<!doctype html>
<html  <?php language_attributes(); ?>>

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <?php wp_head(); ?>    
  
</head>

<body>
  <!-- PRELOADER 
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>-->
    <!-- END PRELOADER -->

      <!--====== OFFCANVAS MENU PART START ======-->

    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="fa fa-times"></i></a>  
                        </div>
                        <div class="offcanvas-social">
                            <ul class="text-center">
                                <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['facebook_3']); ?>"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['twitter_4']); ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['linkedin_5']); ?>"><i class="fa fa-linkedin"></i></a></li>
                               <!-- <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['instagram_6']); ?>"><i class="fa fa-instagram"></i></a></li>-->
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'primary',
                                    'menu_class' => 'offcanvas_main_menu', // ul class
                                    ) 
                            ); 
                        ?>

                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="mailto:<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['e_mail_0']); ?>"><i class="fa fa-envelope-o"></i> <?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['e_mail_0']); ?></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!--====== OFFCANVAS MENU PART ENDS ======-->
         <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top">
                            <ul>
                                <li><a href="mailto:<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['e_mail_0']); ?>"><i class="flaticon-message"></i> <?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['e_mail_0']); ?> </a></li>
                                <li><a href="tel:<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['tlphone_1']); ?>"><i class="flaticon-phone-call"></i> <?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['tlphone_1']); ?></a></li>
                                <li><a href="#"><i class="flaticon-placeholder"></i> <?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['adresse_2']); ?></a></li>
                            </ul>
                            <!-- <div class="dropdown d-none d-md-block">
                                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/map.png'; ?>" alt="">
                                <select>
                                    <option value="1">English</option>
                                    <option value="2">Bangla</option>
                                    <option value="3">urdu</option>
                                    <option value="4">Hindi</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-item d-flex justify-content-between align-items-center">
                            <div class="main-header-menus  d-flex">
                                <div class="header-logo">
                                    <?php 
                                        if ( function_exists( 'the_custom_logo' ) ) {
                                            the_custom_logo();
                                        }
                                    ?>
                                </div>
                                <div class="header-menu d-none d-lg-block">
                                    <?php 

                                        wp_nav_menu( 
                                            array( 'theme_location' => 'primary' ) 
                                        ); 
                                
                                    ?>
                                </div>
                            </div>
                            <div class="header-social d-flex align-items-center">
                                <ul class="d-none d-lg-block">
                                    <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['facebook_3']); ?>"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['twitter_4']); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['linkedin_5']); ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <!--<li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['instagram_6']); ?>"><i class="fa fa-instagram"></i></a></li>-->
                                </ul>
                                <div class="toggle-btn ml-30 canvas_open d-lg-none d-block">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->


