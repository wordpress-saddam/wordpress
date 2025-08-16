<?php 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Service_Details_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'service_details_widget';
    }

    public function get_title() {
        return __( 'Service Details', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-info';
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
            'sub_title',
            [
                'label' => __( 'Sub-title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Service Details', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'service_title',
            [
                'label' => __( 'Service Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Best Influencer Marketing Services', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'service_description',
            [
                'label' => __( 'Service Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled data structures manages data in technology. New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'building_title',
            [
                'label' => __( 'Building Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Building great future Together, Be with us', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/21.jpg', 
                ],
            ]
        );

        // Repeater for Process Steps
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'step_number',
            [
                'label' => __( 'Step Number', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 1,
            ]
        );

        $repeater->add_control(
            'step_title',
            [
                'label' => __( 'Step Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Step Title', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'step_description',
            [
                'label' => __( 'Step Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'process_steps',
            [
                'label' => __( 'Process Steps', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'step_number' => 1,
                        'step_title' => __( 'Information Collection', 'gixus-core' ),
                        'step_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                    ],
                    [
                        'step_number' => 2,
                        'step_title' => __( 'Projection Report Analysis', 'gixus-core' ),
                        'step_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                    ],
                    [
                        'step_number' => 3,
                        'step_title' => __( 'Consultation Solution', 'gixus-core' ),
                        'step_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ step_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="services-details-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <h2 class="title"><?php echo esc_html( $settings['service_title'] ); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="services-details-items">
                    <div class="row">
                        <div class="col-xl-12 services-single-content">
                            <div class="thumb mb-50">
                                <img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="Thumb">
                            </div>
                            <p><?php echo $settings['service_description']; ?></p>
                            <div class="process-style-one-items mt-50">
                                <div class="choose-us-one-thumb">
                                    <div class="content">
                                        <?php if(!empty($settings['building_title'] )): ?>
                                        <div class="left-info">
                                            <h2 class="title"><?php echo esc_html( $settings['building_title'] ); ?></h2>
                                        </div>
                                        <?php endif; ?>
                                        <div class="process-style-one">
                                            <?php foreach ( $settings['process_steps'] as $index => $step ) : ?>
                                                <div class="process-style-one-item wow fadeInRight" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                                    <span><?php echo esc_html( $step['step_number'] ); ?></span>
                                                    <h4><?php echo esc_html( $step['step_title'] ); ?></h4>
                                                    <p><?php echo esc_html( $step['step_description'] ); ?></p>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
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
