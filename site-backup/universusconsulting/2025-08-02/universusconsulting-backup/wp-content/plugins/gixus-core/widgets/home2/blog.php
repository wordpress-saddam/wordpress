<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home2_Blog_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home2_blog';
    }

    public function get_title() {
        return __( 'Home Two Blog', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Tab
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'blog_title',
            [
                'label' => __( 'Blog Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Blog Insight', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'blog_subtitle',
            [
                'label' => __( 'Blog Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Valuable insights to change your startup idea', 'gixus-core' ),
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

        $this->add_control(
            'posts_to_show',
            [
                'label' => __( 'Number of Posts', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 2,
            ]
        );

        // Category Control
        $this->add_control(
            'blog_category',
            [
                'label' => __( 'Select Category', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $this->get_categories_options(),
                'default' => '',
            ]
        );

        $this->end_controls_section();
    }

    protected function get_categories_options() {
        $categories = get_categories();
        $options = [];
        foreach ( $categories as $category ) {
            $options[ $category->term_id ] = $category->name;
        }
        return $options;
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $args = [
            'post_type' => 'post',
            'posts_per_page' => $settings['posts_to_show'],
        ];

        // If a category is selected, modify the query args
        if ( ! empty( $settings['blog_category'] ) ) {
            $args['cat'] = $settings['blog_category'];
        }

        $query = new WP_Query( $args );
        ?>
        <div class="blog-area home-blog blog-2-col default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html( $settings['blog_title'] ); ?></h4>
                            <h2 class="title split-text"><?php echo esc_html( $settings['blog_subtitle'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php  $index = 0;  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="col-xl-6 col-md-6 col-lg-6 mb-30">
                            <div class="home-blog-style-one-item wow fadeInUp" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                <div class="home-blog-thumb v2">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                    <ul class="home-blog-meta">
                                        <?php 
$categories = get_the_category();

if ( ! empty( $categories ) ) : // Check if the post has categories
    $category = $categories[0]; // Get the first category
?>
    <li>
        <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
            <?php echo esc_html( $category->name ); ?>
        </a>
    </li>
<?php endif; ?>

                                        <li><?php echo esc_html( get_the_modified_date() ); ?></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h2 class="blog-title">
                                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn-read-more"><?php echo esc_html( $settings['r_button'] ); ?> <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $index++;  endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <?php
    }
}