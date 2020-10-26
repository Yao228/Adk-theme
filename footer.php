    <section class="footer-area">
        <div class="container">
            <?php
                /* The footer widget area is triggered if any of the areas
                * have widgets. So let's check that first.
                *
                * If none of the sidebars have widgets, then let's bail early.
                */
                if (   ! is_active_sidebar( 'first-footer-widget-area'  )
                    && ! is_active_sidebar( 'second-footer-widget-area' )
                    && ! is_active_sidebar( 'third-footer-widget-area'  )
                    && ! is_active_sidebar( 'fourth-footer-widget-area' )
                )
                return;


                if (   is_active_sidebar( 'first-footer-widget-area'  )
                    && is_active_sidebar( 'second-footer-widget-area' )
                    && is_active_sidebar( 'third-footer-widget-area'  )
                    && is_active_sidebar( 'fourth-footer-widget-area' )
                    ) : ?>
               
               <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about">
                            <?php dynamic_sidebar('first-footer-widget-area');?>                      
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-list mt-30">
                            <?php dynamic_sidebar('second-footer-widget-area');?> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-list pl-35 mt-30">
                            <?php dynamic_sidebar('third-footer-widget-area');?> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-30">
                            <?php dynamic_sidebar('fourth-footer-widget-area');?> 
                        </div>
                    </div>
                </div>
                <?php 
                elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                    && is_active_sidebar( 'second-footer-widget-area' )
                    && is_active_sidebar( 'third-footer-widget-area'  )
                    && ! is_active_sidebar( 'fourth-footer-widget-area' )
                ) : ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-30">
                            <?php dynamic_sidebar('first-footer-widget-area');?>                      
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-list mt-30">
                            <?php dynamic_sidebar('second-footer-widget-area');?> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-list pl-35 mt-30">
                            <?php dynamic_sidebar('third-footer-widget-area');?> 
                        </div>
                    </div>
                </div>
                <?php
                elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                    && is_active_sidebar( 'second-footer-widget-area' )
                    && ! is_active_sidebar( 'third-footer-widget-area'  )
                    && ! is_active_sidebar( 'fourth-footer-widget-area' )
                ) : ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-30">
                            <?php dynamic_sidebar('first-footer-widget-area');?>                      
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-list mt-30">
                            <?php dynamic_sidebar('second-footer-widget-area');?> 
                        </div>
                    </div>
                </div>
                <?php
                    elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                        && ! is_active_sidebar( 'second-footer-widget-area' )
                        && ! is_active_sidebar( 'third-footer-widget-area'  )
                        && ! is_active_sidebar( 'fourth-footer-widget-area' )
                    ) :
                    ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-30">
                            <?php dynamic_sidebar('first-footer-widget-area');?>                      
                        </div>
                    </div>
                </div>
                <?php 
                //end of all sidebar checks.
                endif;?>
        </div>

        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright d-block d-md-flex justify-content-between align-items-center">
                            <p><?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['copyright_8']); ?></p>
                            <ul>
                                <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['facebook_3']); ?>"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['twitter_4']); ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['linkedin_5']); ?>"><i class="fa fa-linkedin"></i></a></li>
                                <!--<li><a target="_blank" href="<?php echo esc_attr(get_option('paramtre_adk_theme__option_name')['instagram_6']); ?>"><i class="fa fa-instagram"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-pattern">
            <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/footer-pattern.png'; ?>" alt="">
        </div>
        <div class="footer-logo">
            <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/footer-logo.png'; ?>" alt="">
        </div>
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== GO TO TOP PART START ======-->
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== GO TO TOP PART ENDS ======-->
    <?php wp_footer(); ?>

</body>

</html>