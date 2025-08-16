<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Counter_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_counter';
    }

    public function get_title() {
        return __( 'Home One Counter', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-counter';
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
            'layout',
            [
                'label' => __( 'Layout', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'layout1' => __( 'Layout 1 Busisness Consulting', 'gixus-core' ),
                    'layout2' => __( 'Layout 2 About Us', 'gixus-core' ),
                ],
                'default' => 'layout1',
            ]
        );
		
		$this->add_control(
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Services', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Empower your business with our services.', 'gixus-core' ),
            ]
        );

        // Repeater for Counters
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'counter_value',
            [
                'label' => __( 'Counter Value', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '56', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'counter_label',
            [
                'label' => __( 'Counter Label', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Clients around the world', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'counter_operator',
            [
                'label' => __( 'Operator', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'K', 'gixus-core' ),
            ]
        );

        // Add repeater controls to the main widget
        $this->add_control(
            'counter_items',
            [
                'label' => __( 'Counter Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_value' => '56',
                        'counter_label' => __( 'Clients around the world', 'gixus-core' ),
                        'counter_operator' => 'K',
                    ],
                    [
                        'counter_value' => '30',
                        'counter_label' => __( 'Award Winning', 'gixus-core' ),
                        'counter_operator' => '+',
                    ],
                    [
                        'counter_value' => '97',
                        'counter_label' => __( 'Business Growth', 'gixus-core' ),
                        'counter_operator' => '%',
                    ],
                    [
                        'counter_value' => '60',
                        'counter_label' => __( 'Team Members', 'gixus-core' ),
                        'counter_operator' => '+',
                    ],
                ],
                'title_field' => '{{{ counter_label }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <?php if($settings['layout'] === 'layout1'): ?>
        <div class="fun-factor-area">
        <?php else: ?>
        <div class="fun-factor-area">
        <?php endif; ?>
			<div class="container">
                <?php if(!empty($settings['sub_title'] && $settings['main_title'])): ?>
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <?php if(false && !empty($settings['sub_title'])): ?>
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <?php endif; ?>
                            <?php if(!empty($settings['main_title'])): ?>
                            <h2 class="title split-text"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
			
            <div class="container">
                <div class="fun-fact-style-one-items text-center">
                    <div class="row">
                        <?php foreach ($settings['counter_items'] as $item) : ?>
                            <div class="col-lg-3 col-md-6 funfact-style-one-item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="<?php echo esc_attr($item['counter_value']); ?>" data-speed="2000"><?php echo esc_html($item['counter_value']); ?></div>
                                        <div class="operator"><?php echo esc_html($item['counter_operator']); ?></div>
                                    </div>
                                    <span class="medium"><?php echo esc_html($item['counter_label']); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
