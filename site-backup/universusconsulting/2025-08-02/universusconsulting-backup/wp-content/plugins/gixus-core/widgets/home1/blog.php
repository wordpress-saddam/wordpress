<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Blog_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_blog';
    }

    public function get_title() {
        return __( 'Home One Blog', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'blog-area home-blog default-padding bottom-less', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'posts_count',
            [
                'label' => __( 'Number of Posts', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );

        $this->add_control(
            'selected_category',
            [
                'label' => __( 'Select Category', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $this->get_categories_options(),
                'default' => '0', // Default to show all posts
            ]
        );

        // Add controls for sub-title and title
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Blog Insight', 'gixus-core' ),
                'placeholder' => __( 'Enter sub title', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Valuable insights to change your startup idea', 'gixus-core' ),
                'placeholder' => __( 'Enter main title', 'gixus-core' ),
            ]
        );
		
		$this->add_control(
            'r_button',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function get_categories_options() {
        $categories = get_categories();
        $options = ['0' => __( 'All Categories', 'gixus-core' )];
        foreach ( $categories as $category ) {
            $options[ $category->term_id ] = $category->name;
        }
        return $options;
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $args = [
            'post_type'      => 'post',
            'posts_per_page' => $settings['posts_count'],
        ];

        // If a category is selected, filter posts by that category
        if ( ! empty( $settings['selected_category'] ) && $settings['selected_category'] !== '0' ) {
            $args['cat'] = $settings['selected_category'];
        }

        $query = new WP_Query( $args );

        ?>
        <div class="<?php echo esc_attr( $settings['class'] ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <?php if(!empty($settings['sub_title'])): ?>
                            <p class="sub-title h4-sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></p>
                            <?php endif; ?>
                            <h2 class="title split-text"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php 
						$index = 0; 
						if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                                <div class="home-blog-style-one-item wow fadeInUp" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                    <div class="home-blog-thumb">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <ul class="home-blog-meta">
                                        <?php
                                            $categories = get_the_category();
                                            if ( isset( $categories[1] ) ) : ?>
                                                <li>
                                                <a href="<?php echo esc_url( get_category_link( $categories[1]->term_id ) ); ?>">
                                                <?php echo esc_html( $categories[1]->name ); ?>
                                                </a>
                                                </li>
                                        <?php endif; ?>
                                        <li><?php echo esc_html( get_the_modified_date() ); ?></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <div class="info">
                                            <h3 class="blog-title h4-to-h3">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <a href="<?php the_permalink(); ?>" class="btn-read-more"><?php echo esc_html( $settings['r_button'] ); ?> <i class="fas fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $index++; 
							endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'No posts found', 'gixus-core' ); ?></p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <?php
    }
}
