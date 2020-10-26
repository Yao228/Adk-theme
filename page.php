<?php get_header(); ?>
 <!--====== PAGE TITLE PART START ======-->

<div class="page-title-area bg_cover" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/images/page-title-bg.jpg'; ?>); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <?php get_breadcrumb(); ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== PAGE TITLE PART ENDS ======--> 
<?php 
    if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
		<?php the_content() ?>
	
	<?php endwhile;
 
else :
	echo '<p>Pas de contenu pour cette page</p>';
 
endif;
?>

<?php get_footer(); ?>
