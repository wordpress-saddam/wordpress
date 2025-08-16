<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Pages_Process_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'about_process_widget';
    }

    public function get_title() {
        return __( 'About Process', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-process';
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
                'default' => __( 'process-style-two-items', 'gixus-core' ),
            ]
        );
        
        $this->add_control(
            'subtitle',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Process', 'gixus-core' ),
            ]
        );

        // Section Title Control
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Building great future Together, Be with us', 'gixus-core' ),
            ]
        );

        // Repeater for Process Steps
        $repeater = new \Elementor\Repeater();

        // Step Number Control
        $repeater->add_control(
            'step_number',
            [
                'label' => __( 'Step Number', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '01', 'gixus-core' ),
            ]
        );

        // Step Title Control
        $repeater->add_control(
            'step_title',
            [
                'label' => __( 'Step Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Honesty', 'gixus-core' ),
            ]
        );

        // Step Description Control
        $repeater->add_control(
            'step_description',
            [
                'label' => __( 'Step Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Experience and expertise, I have been recognized through the awards achieved, I am able to customize solutions to meet your specific needs', 'gixus-core' ),
            ]
        );

        // Repeater Control for the process steps
        $this->add_control(
            'steps',
            [
                'label' => __( 'Process Steps', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'step_number' => __( '01', 'gixus-core' ),
                        'step_title' => __( 'Honesty', 'gixus-core' ),
                        'step_description' => __( 'Experience and expertise, I have been recognized through the awards achieved, I am able to customize solutions to meet your specific needs', 'gixus-core' ),
                    ],
                    [
                        'step_number' => __( '02', 'gixus-core' ),
                        'step_title' => __( 'Unity', 'gixus-core' ),
                        'step_description' => __( 'Experience and expertise, I have been recognized through the awards achieved, I am able to customize solutions to meet your specific needs', 'gixus-core' ),
                    ],
                    [
                        'step_number' => __( '03', 'gixus-core' ),
                        'step_title' => __( 'Innovation', 'gixus-core' ),
                        'step_description' => __( 'Experience and expertise, I have been recognized through the awards achieved, I am able to customize solutions to meet your specific needs', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ step_number }}} - {{{ step_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Start Process 
        ============================================= -->
        <div class="process-style-two items default-padding bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading">
                            <p class="sub-title"><?php echo esc_html( $settings['subtitle'] ); ?></p>
                            <h2 class="title"><?php echo esc_html( $settings['title'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="process-style-two-items<?php //echo esc_attr( $settings['class'] ); ?>">
                    <div class="row">
                        <?php foreach ( $settings['steps'] as $index => $step ) : ?>
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 process-style-two-item wow fadeInUp" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                <div class="item">
                                <?php if(!empty($step['step_number'])): ?>
                                    <span><?php echo esc_html( $step['step_number'] ); ?></span>
                                    <?php endif; ?>
                                    <h3 class="h4-to-h3"><?php echo esc_html( $step['step_title'] ); ?></h3>
                                    <p><?php echo esc_html( $step['step_description'] ); ?></p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Process -->
        <?php
    }
}