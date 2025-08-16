<?php
/*
 * Template Name: Blog Two column
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
    <div class="blog-area home-blog blog-grid default-padding-bottom">
        <div class="container">
            <div class="blog-item-box">
                <div class="row">

                         <?php 
                            // Get selected categories and number of posts from Redux
                            $selected_categories = $gixus_options['category_selection_2'];  // Redux option for categories
                            $number_of_posts = $gixus_options['number_of_posts_2'];  // Redux option for number of posts

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
                            while ($wp_query->have_posts()): $wp_query->the_post(); ?>
				            <!-- Single Item -->
                    <div class="col-xl-6 col-md-6 col-lg-6 mb-50">
                        <div class="home-blog-style-one-item animate" data-animate="fadeInUp" data-delay="100ms">
                            <div class="home-blog-thumb v2">
                               <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
                                </a>
                            <?php endif; ?>
                                <ul class="home-blog-meta">
                                <li><a href="<?php $cat = get_the_category(); echo esc_url( get_category_link( $cat[3]->term_id ) ); ?>"><?php echo esc_html( $cat[3]->name ); ?></a></li>
                                <li><?php echo get_the_date(); ?></li>
                            </ul>
                     </div>
                            <div class="content">
                                <div class="info">
                                    <h2 class="blog-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <a href="<?php the_permalink(); ?>" class="btn-read-more">Read More <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
				        <?php endwhile; ?>          
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

              
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
<?php get_footer(); ?>