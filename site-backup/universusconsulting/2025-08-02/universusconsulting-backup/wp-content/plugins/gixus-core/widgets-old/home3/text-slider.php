<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Elementor_gixus_Home3_Slider_Text_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'Home3_Slider_Text_widget';
    }

    public function get_title() {
        return esc_html__( 'Home Three Slider Text', 'gixus-core' );
    }

    public function get_categories() {
        return [ 'gixus' ]; // Use the custom category defined in the main plugin file
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section1',
            [
                'label' => esc_html__( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'slidertext',
            [
                'label' => __( 'Slider Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Marketing', 'gixus-core' ),
            ]
        );

        

        // Team Row 1
        $this->add_control(
            'slider_list',
            [
                'label' => __( 'Slider Content', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slidertext' => __( 'Marketing', 'gixus-core' ),
                    ],
                    [
                        'slidertext' => __( 'Branding', 'gixus-core' ),
                    ],
                    [
                        'slidertext' => __( 'Design', 'gixus-core' ),
                    ],
                    [
                        'slidertext' => __( 'Development', 'gixus-core' ),
                    ],
                    
                ],
                'title_field' => '{{{ slidertext }}}',
            ]
        );
         
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>

        <!-- Start Brand Area 
    ============================================= -->
    <div class="brand-style-two-area relative overflow-hidden">
        <div class="brand-style-one">
            <div class="container-fill">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-items">
                            <div class="brand-conetnt">
                            <?php foreach ($settings['slider_list'] as $slider) : ?>
                                <div class="item">
                                    <h2><?php echo esc_html($slider['slidertext']); ?></h2>
                                </div>
                            <?php endforeach; ?>
                            </div>
                            <div class="brand-conetnt">
                               <?php foreach ($settings['slider_list'] as $slider) : ?>
                                <div class="item">
                                    <h2><?php echo esc_html($slider['slidertext']); ?></h2>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradn Area -->
        

        <?php
    }
}