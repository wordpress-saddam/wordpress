<?php
/*
 * Template Name: Blog Standard With Sidebar
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
                        <li class="active"><?php esc_html_e('Blog', 'gixus'); ?></li>
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
                            // Get selected categories and number of posts from Redux
                            $selected_categories = $gixus_options['category_selection_1'];  // Redux option for categories
                            $number_of_posts = $gixus_options['number_of_posts_1'];  // Redux option for number of posts

                            // Default to 5 posts if no value is set
                            if (empty($number_of_posts)) {
                                $number_of_posts = 5;
                            }

                            // Check if categories are selected
                            if (!empty($selected_categories)) {
                                // Query posts from selected categories with the set number of posts
                                $args = array(    
                                    'paged' => $paged,
                                    'post_type' => 'post',
                                    'category__in' => $selected_categories,  // Use selected categories
                                    'posts_per_page' => $number_of_posts,  // Use selected number of posts
                                );
                            } else {
                                // Default query for all posts with the set number of posts
                                $args = array(    
                                    'paged' => $paged,
                                    'post_type' => 'post',
                                    'posts_per_page' => $number_of_posts,  // Use selected number of posts
                                );
                            }

                            $wp_query = new WP_Query($args);
                            while ($wp_query->have_posts()): $wp_query->the_post(); 

                                get_template_part('template-parts/content', 'single');

                            endwhile;
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