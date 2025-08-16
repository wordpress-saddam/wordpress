<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gixus
 */ 
 
 get_header(); ?>

     <!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1><?php the_title(); ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e('Home', 'gixus'); ?></a></li>
                        <li class="active"><?php esc_html_e('Blog Single', 'gixus'); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding-bottom">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                        <?php } else : ?>
                    <div class="blog-content col-xl-10 offset-xl-1 col-md-12">
                    <?php endif; ?>
                        <div class="blog-style-two item">

                            <?php
                                while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', 'page' );

                                endwhile; // End of the loop. ?>
                            
                        </div>

                        <?php if ( get_the_tags() ) : ?>
                            <!-- Post Tags Share -->
                            <div class="post-tags share">
                                <div class="tags">
                                    <h4>Tags: </h4>
                                    <?php
                                    $post_tags = get_the_tags();
                                    if ( $post_tags ) {
                                        foreach ( $post_tags as $tag ) {
                                            echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a> ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- Post Tags Share -->
                        <?php endif; ?>


                        <!-- Start Post Pagination -->
                        <div class="post-pagi-area">
                            <?php if (get_next_post() || get_previous_post()) : ?>
                                <div class="post-previous">
                                    <?php previous_post_link('%link', '<div class="icon"><i class="fas fa-angle-double-left"></i></div><div class="nav-title">Previous Post <h5>%title</h5></div>'); ?>
                                </div>
                                <div class="post-next">
                                    <?php next_post_link('%link', '<div class="nav-title">Next Post <h5>%title</h5></div><div class="icon"><i class="fas fa-angle-double-right"></i></div>'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- End Post Pagination -->

                        <?php
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
                        
                    </div>

                     <!-- Start Sidebar -->
                    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
                        <?php get_sidebar(); ?>
                    <?php endif; ?>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

<?php get_footer(); ?>