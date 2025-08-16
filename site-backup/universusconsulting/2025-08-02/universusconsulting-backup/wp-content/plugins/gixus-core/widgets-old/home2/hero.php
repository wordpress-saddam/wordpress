<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home2_Hero_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home2_hero';
    }

    public function get_title() {
        return __( 'Home Two Hero', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-banner';
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
            'slider_speed',
            [
                'label' => __( 'Slider Speed (ms)', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 3000, // Default speed in milliseconds
                'description' => __( 'Set the speed of the slider transition in milliseconds.', 'gixus-core' ),
            ]
        );


        // Repeater for Banner Slides
        $repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
            'bgimg',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/2.png', // Default image
                ],
            ]
        );

        $repeater->add_control(
            'slide_image',
            [
                'label' => __( 'Slide Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/1.jpg', // Default image
                ],
            ]
        );

        $repeater->add_control(
            'slide_subtitle',
            [
                'label' => __( 'Slide Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Subtitle', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'slide_title',
            [
                'label' => __( 'Slide Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Main Title', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'slide_button_text',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Consultant', 'gixus-core' ), // Customizable button text
            ]
        );

        $repeater->add_control(
            'slide_button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'slides',
            [
                'label' => __( 'Slides', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slide_subtitle' => __( 'Meet Consulting', 'gixus-core' ),
                        'slide_title' => __( '<strong>Financial Analysis</strong> Developing Meeting.', 'gixus-core' ),
                        'slide_button_text' => __( 'Get Consultant', 'gixus-core' ),
                        'slide_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/banner/1.jpg', 
                        ],
                    ],
                    [
                        'slide_subtitle' => __( 'Coaching & Consulting', 'gixus-core' ),
                        'slide_title' => __( '<strong>Proper solution</strong> for business growth', 'gixus-core' ),
                        'slide_button_text' => __( 'Get Consultant', 'gixus-core' ),
                        'slide_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/banner/4.jpg', 
                        ],
                    ],
                ],
                'title_field' => '{{{ slide_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="banner-area banner-style-two content-right navigation-custom-large2 zoom-effect overflow-hidden text-light">
            <div class="banner-fade">
                <div class="swiper-wrapper">
                    <?php foreach ( $settings['slides'] as $slide ) : ?>
                        <div class="swiper-slide banner-style-two">
                            <div class="banner-thumb bg-cover shadow dark" style="background: url(<?php echo esc_url( $slide['slide_image']['url'] ); ?>);"></div>
                            <div class="container">
                                <div class="row align-center">
                                    <div class="col-xl-7 offset-xl-5 col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h4><?php echo esc_html( $slide['slide_subtitle'] ); ?></h4>
                                            <h2><?php echo $slide['slide_title']; ?></h2>
                                            <?php if(!empty($slide['slide_button_text'])): ?>
                                            <div class="button">
                                                <a class="btn circle btn-gradient btn-md radius animation" href="<?php echo esc_url( $slide['slide_button_link']['url'] ); ?>">
                                                    <?php echo esc_html( $slide['slide_button_text'] ); ?>
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if(!empty($slide['bgimg']['url'])): ?>
                            <div class="banner-angle-shape">
                                <div class="shape-item" style="background: url(<?php echo esc_url( $slide['bgimg']['url'] ); ?>);"></div>
                            </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <script>
//         jQuery(document).ready(function($) {
//             const bannerFade = new Swiper('.banner-fade', {
//                 direction: 'horizontal',
//                 loop: false,
// 				autoplay: false,
// //                 autoplay: {
// //                     delay: <?php echo esc_js( $settings['slider_speed'] ); ?>, // Use slider speed from settings
// //                     disableOnInteraction: false,
// //                 },
//                 effect: 'slider',
//                 fadeEffect: 'none',
// 				speed: 0,
// //                 speed: <?php echo esc_js( $settings['slider_speed'] ); ?>, // Set transition speed
//                 pagination: {
//                     el: '.swiper-pagination',
//                     clickable: true,
//                 },
//                 navigation: {
//                     nextEl: '.swiper-button-next',
//                     prevEl: '.swiper-button-prev',
//                 },
//             });
//         });
        </script>
        </div>
        <?php
    }
}
