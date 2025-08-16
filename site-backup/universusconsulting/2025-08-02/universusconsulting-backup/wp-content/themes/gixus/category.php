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
 */ get_header(); ?>

 <!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1><?php esc_html_e('Category Archives: ', 'gixus' ); echo single_cat_title( '', false ); ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e('Home', 'gixus'); ?></a></li>
                        <li class="active"><?php esc_html_e( 'Category Archives', 'gixus' )?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog default-padding-bottom">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                    <?php } else : ?>
                    <div class="blog-content col-xl-10 offset-xl-1 col-md-12">
                    <?php endif; ?>
                        <div class="blog-item-box">

                            <?php 
                                if ( have_posts() ) : 
                                    while ( have_posts() ) : the_post();

                                        get_template_part( 'template-parts/content', 'single' );

                                endwhile; 
                                endif; 
                            ?>
                       
                        </div>
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <?php
                                    if ( function_exists( 'gixus_pagination' ) ) {
                                        echo gixus_pagination();
                                    }
                                    ?>
                            </div>
                        </div>
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