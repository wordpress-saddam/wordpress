<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Partner_Section_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'partner_section_widget';
    }

    public function get_title() {
        return __( 'Partner Section', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-slider-device';
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

        // Section Background Image Control
        $this->add_control(
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/25.png',
                ],
            ]
        );

        // Section Title Control
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Trusted brands work with us', 'gixus-core' ),
            ]
        );

        // Repeater for Partner Logos
        $repeater = new \Elementor\Repeater();

        // Partner Logo Image Control
        $repeater->add_control(
            'partner_logo',
            [
                'label' => __( 'Partner Logo', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/brand/11.png',
                ],
            ]
        );

        // Partner Repeater Control
        $this->add_control(
            'partners',
            [
                'label' => __( 'Partner Logos', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'partner_logo' => [ 'url' => get_template_directory_uri() . '/assets/img/brand/11.png' ],
                    ],
                    [
                        'partner_logo' => [ 'url' => get_template_directory_uri() . '/assets/img/brand/22.png' ],
                    ],
                    [
                        'partner_logo' => [ 'url' => get_template_directory_uri() . '/assets/img/brand/55.png' ],
                    ],
                    [
                        'partner_logo' => [ 'url' => get_template_directory_uri() . '/assets/img/brand/66.png' ],
                    ],
                ],
                'title_field' => __( 'Partner Logo', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Start Partner Section 
        ============================================= -->
        <div class="partner-style-one-area default-padding bg-dark text-light" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-4">
                        <h2 class="title split-text"><?php echo esc_html( $settings['section_title'] ); ?></h2>
                    </div>
                    <div class="col-xl-8 pl-60 pl-md-15 pl-xs-15 brand-one-contents">
                        <div class="brand-style-one-items">
                            <div class="brand-style-one-carousel swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <?php foreach ( $settings['partners'] as $partner ) : ?>
                                        <!-- Single Item -->
                                        <div class="swiper-slide">
                                            <div class="brand-one">
                                                <img src="<?php echo esc_url( $partner['partner_logo']['url'] ); ?>" alt="Partner Logo">
                                            </div>
                                        </div>
                                        <!-- End Single Item -->
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Section -->
        <?php
    }
}
