<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Award_Section_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'award_section';
    }

    public function get_title() {
        return __( 'Pages Award Section', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-trophy';
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

        // Background Image Control
        $this->add_control(
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/20.jpg',
                ],
            ]
        );

        // Award Image Control
        $this->add_control(
            'award_image',
            [
                'label' => __( 'Award Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/badge.png',
                ],
            ]
        );

        // Award Title Control
        $this->add_control(
            'award_title',
            [
                'label' => __( 'Award Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Official Selection', 'gixus-core' ),
            ]
        );

        // Award Sub-title Control
        $this->add_control(
            'award_subtitle',
            [
                'label' => __( 'Award Sub-title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Rising Star Award', 'gixus-core' ),
            ]
        );

        // Award Year Control
        $this->add_control(
            'award_year',
            [
                'label' => __( 'Award Year', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '2006', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Start Award
        ============================================= -->
        <div class="award-area bg-fixed" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="container">
                <div class="row">
<!--                     <div class="col-lg-6">
                        <div class="award-items text-center bg-dark text-light">
                            <div class="award-item">
                                <img src="<?php echo esc_url( $settings['award_image']['url'] ); ?>" alt="Award Image">
                                <div class="center-info">
                                    <h2><?php echo esc_html( $settings['award_title'] ); ?></h2>
                                    <h4><?php echo esc_html( $settings['award_subtitle'] ); ?></h4>
                                </div>
                                <h2><?php echo esc_html( $settings['award_year'] ); ?></h2>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Award -->
        <?php
    }
}
