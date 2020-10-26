<?php get_header(); ?>

<!--====== PAGE TITLE PART START ======-->
<div class="page-title-area bg_cover" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/images/page-title-bg.jpg'; ?>); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content searh-page">
                        <h3 class="title">
                        <?php echo $wp_query->found_posts; ?>
        <?php _e( 'résultats trouvés pour', 'locale' ); ?>: "<?php the_search_query(); ?>
                        </h3>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Résultats des recherches </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== PAGE TITLE PART ENDS ======--> 
<section class="mt-30 mb-30">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
</section>

<section class="news-2-area news-page">
    <div class="container">
        <div class="row justify-content-center">
        <?php if ( have_posts() ) { ?>


        <?php while ( have_posts() ) { the_post(); ?>

            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="news-item mt-30">
                    <div class="search-content">
                        <ul>
                            <li><i class="fa fa-user-o"></i> <?php the_author(); ?></li>
                            <li><i class="fa fa-clock-o"></i> <?php the_time('j F Y') ?></li>
                        </ul>
                        <a href="<?php the_permalink(); ?>"><h3 class="title"><?php echo mb_strimwidth(get_the_title(), 0, 80, '...' ); ?></h3></a>
                        <p> <?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...' ); ?></p>
                        <a href="<?php the_permalink(); ?>"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <?php } ?>
        <?php echo paginate_links(); ?>

        <?php } ?>
    </div>
</div>
</section>
<?php get_footer(); ?>