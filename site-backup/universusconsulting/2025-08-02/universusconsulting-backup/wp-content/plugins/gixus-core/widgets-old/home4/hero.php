<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home_Four_Hero_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_four_hero';
    }

    public function get_title() {
        return __( 'Home Four Hero', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-slider-full-screen';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Slides', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'slider_speed',
            [
                'label' => __( 'Slider Speed (ms)', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 3000, // Default speed in milliseconds
                'description' => __( 'Set the speed of the slider transition in milliseconds.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'slides',
            [
                'label' => __( 'Hero Slides', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'background_image',
                        'label' => __( 'Background Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/banner/14.jpg',
                        ],
                    ],
                    [
                        'name' => 'title',
                        'label' => __( 'Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Worldwide logistic services', 'gixus-core' ),
                    ],
                    [
                        'name' => 'description',
                        'label' => __( 'Description', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor.', 'gixus-core' ),
                    ],
                    [
                        'name' => 'button_text',
                        'label' => __( 'Button Text', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Contact Us', 'gixus-core' ),
                    ],
                    [
                        'name' => 'button_link',
                        'label' => __( 'Button Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'placeholder' => __( 'https://your-link.com', 'gixus-core' ),
                        'default' => [
                            'url' => '#',
                        ],
                    ],
                    [
                        'name' => 'fixed_image',
                        'label' => __( 'Fixed Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                           'url' => get_template_directory_uri() . '/assets/img/illustration/1.png',
                        ],
                    ],
                    [
                        'name' => 'goods_image',
                        'label' => __( 'Goods Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/illustration/4.png',
                        ],
                    ],
                    [
                        'name' => 'shape_image',
                        'label' => __( 'Shape Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/shape/10.png',
                        ],
                    ],
                ],
                'default' => [
                    [
                        'title' => __( 'Worldwide logistic services', 'gixus-core' ),
                        'description' => __( 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor.', 'gixus-core' ),
                        'button_text' => __( 'Contact Us', 'gixus-core' ),
                        'background_image' => [ 'url' => get_template_directory_uri() . '/assets/img/banner/14.jpg' ],
                        'fixed_image' => [ 'url' => get_template_directory_uri() . '/assets/img/illustration/1.png' ],
                        'goods_image' => [ 'url' => get_template_directory_uri() . '/assets/img/illustration/4.png' ],
                        'shape_image' => [ 'url' => get_template_directory_uri() . '/assets/img/shape/10.png' ],
                    ],
                    [
                        'title' => __( 'Full sustainable cargo solutions!', 'gixus-core' ),
                        'description' => __( 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor.', 'gixus-core' ),
                        'button_text' => __( 'Contact Us', 'gixus-core' ),
                        'background_image' => [ 'url' => get_template_directory_uri() . '/assets/img/banner/15.jpg' ],
                        'fixed_image' => [ 'url' => get_template_directory_uri() . '/assets/img/illustration/2.png' ],
                        'goods_image' => [ 'url' => get_template_directory_uri() . '/assets/img/illustration/4.png' ],
                        'shape_image' => [ 'url' => get_template_directory_uri() . '/assets/img/shape/10.png' ],
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
    $settings = $this->get_settings_for_display();
    ?>
    <div class="banner-area banner-style-five-area content-right navigation-custom-large zoom-effect overflow-hidden text-light">
        <div class="banner-style-three-carousel swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ( $settings['slides'] as $slide ) : ?>
                    <div class="swiper-slide banner-style-five">
                        <div class="banner-thumb bg-cover shadow dark-hard" style="background-image: url(<?php echo esc_url( $slide['background_image']['url'] ); ?>);"></div>
                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-7 col-lg-9 col-md-10">
                                    <div class="content">
                                        <h2><?php echo esc_html( $slide['title'] ); ?></h2>
                                        <p><?php echo esc_html( $slide['description'] ); ?></p>
                                        <?php if ( $slide['button_text'] ) : ?>
                                            <div class="button">
                                                <a class="btn btn-theme btn-md animation" href="<?php echo esc_url( $slide['button_link']['url'] ); ?>">
                                                    <?php echo esc_html( $slide['button_text'] ); ?> <i class="fas fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="shape-circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ( $slide['fixed_image']['url'] ) : ?>
                            <div class="fixed-item">
                                <img src="<?php echo esc_url( $slide['fixed_image']['url'] ); ?>" alt="<?php echo esc_attr__('Fixed Image', 'gixus-core'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if ( $slide['goods_image']['url'] ) : ?>
                            <div class="logitic-goods">
                                <img src="<?php echo esc_url( $slide['goods_image']['url'] ); ?>" alt="<?php echo esc_attr__('Goods Image', 'gixus-core'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if ( $slide['shape_image']['url'] ) : ?>
                            <div class="banner-fixed-bg" style="background-image: url(<?php echo esc_url( $slide['shape_image']['url'] ); ?>);"></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div> <!-- End of swiper-wrapper -->
            <div class="swiper-pagination"></div>
        </div> <!-- End of banner-style-three-carousel -->
        <script>
        jQuery(document).ready(function($) {
           
         const bannerStyleThree = new Swiper(".banner-style-three-carousel", {
            // Optional parameters
            direction: "horizontal",
            loop: true,
            autoplay: true,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            speed: <?php echo esc_js( $settings['slider_speed'] ); ?>,
            autoplay: {
                delay: <?php echo esc_js( $settings['slider_speed'] ); ?>,
                disableOnInteraction: false,
            },


            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }

            // And if we need scrollbar
            /*scrollbar: {
            el: '.swiper-scrollbar',
          },*/
        });
        });
        </script>
    </div> <!-- End of banner-area -->
    <?php
    
    }
}
