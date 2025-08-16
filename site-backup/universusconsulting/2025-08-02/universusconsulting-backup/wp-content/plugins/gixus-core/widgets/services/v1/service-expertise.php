<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Services_Expertise_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'services_expertise_widget';
    }

    public function get_title() {
        return __( 'Services Expertise', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-chart-bar';
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
            'layout',
            [
                'label' => __( 'Layout', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'layout1' => __( 'Background Grey', 'gixus-core' ),
                    'layout2' => __( 'Background White', 'gixus-core' ),
                ],
                'default' => 'layout1',
            ]
        );
		
		$this->add_control(
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/1.jpg',
                ],
            ]
        );
		
		$this->add_control(
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'speciality-style-one-area default-padding', 'gixus-core' ),
            ]
        );

        // Expertise Titles
        $this->add_control(
            'expertise_sub_title',
            [
                'label' => __( 'Expertise Sub Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our expertise', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'expertise_main_title',
            [
                'label' => __( 'Expertise Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our commitment <br> is client satisfaction', 'gixus-core' ),
            ]
        );
		
        // Counter Items
        $this->add_control(
            'counter_items',
            [
                'label' => __( 'Counter Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'counter_value',
                        'label' => __( 'Counter Value', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'default' => 98,
                    ],
                    [
                        'name' => 'counter_operator',
                        'label' => __( 'Counter Operator', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '%',
                    ],
                    [
                        'name' => 'counter_label',
                        'label' => __( 'Counter Label', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Successful Projects', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    [
                        'counter_value' => 98,
                        'counter_operator' => '%',
                        'counter_label' => __( 'Successful Projects', 'gixus-core' ),
                    ],
                    [
                        'counter_value' => 38,
                        'counter_operator' => 'K',
                        'counter_label' => __( 'Happy Clients', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ counter_label }}}',
            ]
        );

        // Progress bar items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'progress_title',
            [
                'label' => __( 'Progress Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'IT Management', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'progress_value',
            [
                'label' => __( 'Progress Value (%)', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 70,
            ]
        );

        $this->add_control(
            'progress_items',
            [
                'label' => __( 'Progress Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'progress_title' => __( 'IT Management', 'gixus-core' ),
                        'progress_value' => 70,
                    ],
                    [
                        'progress_title' => __( 'Data Security', 'gixus-core' ),
                        'progress_value' => 95,
                    ],
                ],
                'title_field' => '{{{ progress_title }}}',
            ]
        );

        // List items
        $this->add_control(
            'list_items',
            [
                'label' => __( 'List Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_item',
                        'label' => __( 'Item', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Organizational structure model', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    [
                        'list_item' => __( 'Organizational structure model', 'gixus-core' ),
                    ],
                    [
                        'list_item' => __( 'Satisfaction guarantee', 'gixus-core' ),
                    ],
                    [
                        'list_item' => __( 'Ontime delivery', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ list_item }}}',
            ]
        );
		
		$this->add_control(
            'background_color',
            [
                'label' => __( 'Progress Bar Color', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .progress-bar' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
         <?php if($settings['layout'] === 'layout1'): ?>
        <div class="<?php echo esc_attr( $settings['class'] ); ?> bg-gray">
        <?php else: ?>
        <div class="<?php echo esc_attr( $settings['class'] ); ?>">
        <?php endif; ?>
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-4">
                        <div class="fun-fact-style-two text-light" style="background-image: url(<?php echo esc_url( $settings['bgimg']['url'] ); ?>);">
                            <?php foreach ( $settings['counter_items'] as $item ) : ?>
                                <div class="fun-fact">
                                    <div class="counter-title">
                                        <div class="counter">
                                            <div class="timer" data-to="<?php echo esc_html( $item['counter_value'] ); ?>" data-speed="2000"><?php echo esc_html( $item['counter_value'] ); ?></div>
                                            <div class="operator"><?php echo esc_html( $item['counter_operator'] ); ?></div>
                                        </div>
                                    </div>
                                    <span class="medium"><?php echo esc_html( $item['counter_label'] ); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-xl-7 offset-xl-1 col-lg-8">
                        <div class="speciality-items">
                            <h4 class="sub-title"><?php echo esc_html( $settings['expertise_sub_title'] ); ?></h4>
                            <h2 class="title"><?php echo wp_kses_post( $settings['expertise_main_title'] ); ?></h2>
                            <div class="d-grid mt-40">
                                <ul class="list-style-two">
                                    <?php foreach ( $settings['list_items'] as $item ) : ?>
                                        <li><?php echo esc_html( $item['list_item'] ); ?></li>
                                    <?php endforeach; ?>
                                </ul>
<!--                                 <div class="progress-items">
                                    <?php foreach ( $settings['progress_items'] as $item ) : ?>
                                        <div class="progress-box">
                                            <h5><?php echo esc_html( $item['progress_title'] ); ?></h5>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" data-width="<?php echo esc_html( $item['progress_value'] ); ?>">
                                                    <span><?php echo esc_html( $item['progress_value'] ); ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
