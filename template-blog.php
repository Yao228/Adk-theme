<?php
/* 
 Template Name: Blog Page Template
*/

get_header();

?>
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

<section class="news-2-area news-page">
    <div class="container">
        <div class="row justify-content-center">

            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => $paged
            );
            $blogposts = new WP_Query($args);


            while($blogposts->have_posts()){
                $blogposts->the_post();
            ?>

              <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="news-item mt-30">
                    <div class="news-thumb">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="news">
                    </div>
                    <div class="news-content">
                        <ul>
                            <li><?php echo get_the_category_list(',') ?></li>
                            <li><i class="fa fa-clock-o"></i><?php the_time('j F Y') ?></li>
                            <li><i class="fa fa-comments-o"></i>
                             <?php
                             if (get_comments_number($post->ID) == 0 ){
                                 echo 'Aucun commentaire'; 
                             }elseif(get_comments_number($post->ID) == 1){
                                echo '1 commentaire'; 
                             }else{
                                 echo get_comments_number($post->ID).' commentaires';
                             }                            
                              ?> 
                            </li>
                        </ul>
                        <a href="<?php the_permalink(); ?>"><h3 class="title"><?php echo substr(get_the_title(), 0, 70) ?></h3></a>
                        <a href="<?php the_permalink(); ?>"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <?php } 
                
            wp_reset_query();                           
            ?>
        </div>
        <div class="row justify-content-center">
            <div class="pagination">
                <?php 
                    if (function_exists("adktheme_blog_pagination"))
                    {
                        adktheme_blog_pagination($blogposts->max_num_pages);
                        //fellowtuts_wpbs_pagination($the_query->max_num_pages);
                    }
                ?> 
            </div>
        </div>
    </div>
</section>
 
<?php get_footer();?>