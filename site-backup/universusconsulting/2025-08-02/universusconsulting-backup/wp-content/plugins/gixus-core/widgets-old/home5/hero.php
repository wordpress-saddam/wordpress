<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home_Five_Hero_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_five_hero';
    }

    public function get_title() {
        return __( 'Home Five Hero', 'gixus-core' );
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
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/5.png',
                ],
            ]
        );

        $this->add_control(
            'business_advisor_title',
            [
                'label' => __( 'Business Advisor Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Business Advisor', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'hero_title',
            [
                'label' => __( 'Hero Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Grow business <br>with great <span class="relative">advice</span>', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'hero_description',
            [
                'label' => __( 'Hero Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'contact-us.html',
                ],
            ]
        );

        $this->add_control(
            'thumb_image',
            [
                'label' => __( 'Thumbnail Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/2.jpg',
                ],
            ]
        );

        $this->add_control(
            'profit_text',
            [
                'label' => __( 'Profit Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Profit $23,600', 'gixus-core' ),
            ]
        );

        // New shape image field
        $this->add_control(
            'shape_image',
            [
                'label' => __( 'Shape Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/7.png',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="banner-style-three-area bg-cover" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="banner-shape-right-top"></div>
            <div class="banner-style-three">
                <div class="container">
                    <div class="content">
                        <div class="row align-center">
                            <div class="col-xl-6 col-lg-7 pr-50 pr-md-15 pr-xs-15">
                                <div class="information">
<!--                                     <h4 class="wow fadeInUp" data-wow-duration="400ms"><?php echo esc_html( $settings['business_advisor_title'] ); ?></h4> -->
                                    <h1 class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="400ms">
                                        <?php echo wp_kses_post( $settings['hero_title'] ); ?>
                                    </h1>
                                    <p class="wow fadeInUp" data-wow-delay="900ms" data-wow-duration="400ms">
                                        <?php echo esc_html( $settings['hero_description'] ); ?>
                                    </p>
                                    <div class="button mt-40 wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="400ms">
                                        <a class="btn btn-md circle btn-gradient animation hero-btn-one" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>"><?php echo esc_html( $settings['button_text'] ); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 pl-60 pl-md-15 pl-xs-15">
                                <div class="thumb">
                                    <img src="<?php echo esc_url( $settings['thumb_image']['url'] ); ?>" alt="Thumb">
<!--                                     <div class="grow-graph wow fadeInRight">
                                        <img src="<?php echo esc_url( $settings['shape_image']['url'] ); ?>" alt="Image Not Found">
                                        <p class="wow fadeInUp h5-p" data-wow-delay="300ms"><?php echo esc_html( $settings['profit_text'] ); ?></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
