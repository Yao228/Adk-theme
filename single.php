<?php get_header(); ?>
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
<!--====== BLOG DETAILS PART ENDS ======-->

<section class="blog-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php 
                        while (have_posts()) {
                            the_post();
                       
                     ?>
                    <div class="blog-details__main">
                        <div class="blog-details__image">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="thumb">
                        </div><!-- /.blog-details__image -->
                        <div class="blog-details__content">
                            <div class="blog-one__meta">
                                <a href="#"><i class="fa fa-user-o"></i> Par <?php the_author(); ?> le <?php the_time('j F Y') ?> dans <?php echo get_the_category_list(',') ?></a>
                                <a href="#"><i class="fa fa-comments-o"></i> 
                                <?php
                                    if (get_comments_number($post->ID) == 0 ){
                                        echo 'Aucun commentaire'; 
                                    }elseif(get_comments_number($post->ID) == 1){
                                        echo '1 commentaire'; 
                                    }else{
                                        echo get_comments_number($post->ID).' commentaires';
                                    }                            
                                ?> 
                                </a>
                            </div><!-- /.blog-one__meta -->
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div><!-- /.blog-details__content -->
                        <div class="blog-details__meta">
                            <div class="blog-details__tags">
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Tags: </span>
                                        <?php 
                                            $post_tags = get_the_tags();

                                            if ( $post_tags ) {
                                                foreach( $post_tags as $tag ) {
                                                echo '<a href="' . get_tag_link($tag->term_id) . '">'.$tag->name.',</a> ';
                                                }
                                            }

                                        ?>
                                </div>
                            </div>
                                
                                
                            </div><!-- /.blog-details__tags -->
                        </div><!-- /.blog-details__meta -->
                    </div><!-- /.blog-details__main -->

                    <div class="blog-author">
                        <div class="blog-author__image">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 170 ); ?>
                        </div><!-- /.blog-author__image -->
                        <div class="blog-author__content">
                            <h3><?php the_author(); ?> </h3>
                            <p><?php the_author_meta('description'); ?></p>
                        </div><!-- /.blog-author__content -->
                    </div><!-- /.blog-author -->

                    <div class="comment-one">
                   

                        <?php
                        $comments_number = get_comments_number();
                        if($comments_number !=0){
                        ?> 
                            <h3 class="comment-one__block-title"><?php echo get_comments_number() ?> commentaire(s)</h3><!-- /.comment-one__block-title -->
                      
                        <?php 
                            $args = get_comments(array(
                                'post_id' => $post->ID,
                                'ststus' => 'approve',
                                'per_page' => 6
                            ));

                            $comments_query = new WP_Comment_Query;
                            $comments = $comments_query->query($args);

                            if($comments){
                                foreach($comments as $comment){


                                }
                            }
                        ?>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                            <?php echo get_avatar( $comment, 109); ?>
                            </div><!-- /.comment-one__image -->
                            <div class="comment-one__content">
                                <h3><?php echo $comment->comment_author;  ?> <span class="comment-one__date"><?php echo $comment->comment_date_gmt;  ?></span></h3>
                                
                                <p><?php echo $comment->comment_content; ?></p>
                            </div><!-- /.comment-one__content -->
                            <div class="blog-btn">
                                <a href="<?php comment_reply_link( array('reply_text' => 'Reply this comment'), comment_ID(), the_ID() );
 ?>" class="main-btn main-btn-2">Répondre <i class="flaticon-right-arrow"></i></a>
                            </div>
                            <!-- /.thm-btn comment-one__btn -->
                        </div><!-- /.comment-one__single -->
                    <?php } ?>

                    </div><!-- /.comment-one -->
                    <div class="comment-form">
                    <?php comments_template();?>
                    </div><!-- /.comment-form -->
                    <?php  } ?>
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="sidebar">
                    <?php get_sidebar();?>
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-details -->

    <!--====== BLOG DETAILSSTART ======-->


<?php get_footer(); ?>
