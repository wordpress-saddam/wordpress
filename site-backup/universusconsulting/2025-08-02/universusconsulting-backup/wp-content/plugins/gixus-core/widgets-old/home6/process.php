<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Elementor_Home6_Process_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_process';
    }

    public function get_title() {
        return __( 'Home Six Process', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-process';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'process_title',
            [
                'label' => __( 'Process Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'How does it work?', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'process_items',
            [
                'label' => __( 'Process Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'step_number',
                        'label' => __( 'Step Number', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'default' => 1,
                    ],
                    [
                        'name' => 'step_title',
                        'label' => __( 'Step Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Input taken from users', 'gixus-core' ),
                    ],
                    [
                        'name' => 'step_description',
                        'label' => __( 'Step Description', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                    ],
                    [
                        'name' => 'step_delay',
                        'label' => __( 'Animation Delay', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'default' => 0,
                    ],
                ],
                'default' => [
                    [
                        'step_number' => 1,
                        'step_title' => __( 'Input taken from users', 'gixus-core' ),
                        'step_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                        'step_delay' => 0,
                    ],
                    [
                        'step_number' => 2,
                        'step_title' => __( 'Activation Function', 'gixus-core' ),
                        'step_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                        'step_delay' => 200,
                    ],
                    [
                        'step_number' => 3,
                        'step_title' => __( 'Feedforward Process', 'gixus-core' ),
                        'step_description' => __( 'Excuse Deal say over contain performance from comparison new melancholy themselves.', 'gixus-core' ),
                        'step_delay' => 400,
                    ],
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
        <div class="process-style-four-area text-light relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="choose-us-one-thumb">
                            <div class="content">
                                <div class="left-info">
                                    <h2 class="title"><?php echo esc_html( $settings['process_title'] ); ?></h2>
                                </div>
                                <div class="process-style-one">
                                    <?php foreach ( $settings['process_items'] as $item ) : ?>
                                        <div class="process-style-one-item wow fadeInRight" data-wow-delay="<?php echo esc_attr( $item['step_delay'] . 'ms' ); ?>">
                                            <span><?php echo esc_html( $item['step_number'] ); ?></span>
                                            <h4><?php echo esc_html( $item['step_title'] ); ?></h4>
                                            <p><?php echo esc_html( $item['step_description'] ); ?></p>
                                        </div>
                                    <?php endforeach; ?>
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