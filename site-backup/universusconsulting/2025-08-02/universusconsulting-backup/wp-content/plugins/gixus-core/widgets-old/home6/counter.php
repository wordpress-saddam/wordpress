<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Elementor_Home6_Counter_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_counter';
    }

    public function get_title() {
        return __( 'Home Six Counter', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-counter';
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
            'counter_items',
            [
                'label' => __( 'Counter Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'counter_value',
                        'label' => __( 'Counter Value', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'default' => 75,
                    ],
                    [
                        'name' => 'counter_suffix',
                        'label' => __( 'Counter Suffix', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '%',
                    ],
                    [
                        'name' => 'counter_title',
                        'label' => __( 'Counter Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Smart Technology', 'gixus-core' ),
                    ],
                    [
                        'name' => 'counter_subtitle',
                        'label' => __( 'Counter Subtitle', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( 'Super fast from other design tools', 'gixus-core' ),
                    ],
                    [
                        'name' => 'counter_background_image',
                        'label' => __( 'Background Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                    ],
                ],
                'default' => [
                    [
                        'counter_value' => 75,
                        'counter_suffix' => '%',
                        'counter_title' => 'Smart Technology',
                        'counter_subtitle' => 'Super fast from other design tools',
                        'counter_background_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/shape/7.jpg',
                        ],
                    ],
                    [
                        'counter_value' => 28,
                        'counter_suffix' => 'K',
                        'counter_title' => 'AI Innovation',
                        'counter_subtitle' => 'Active and premium regular users every day',
                        'counter_background_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/shape/8.jpg',
                        ],
                    ],
                ],
                'title_field' => '{{{ counter_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="fun-fact-style-three-area text-light default-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fun-fact-style-three-items">
                            <?php foreach ( $settings['counter_items'] as $item ) : ?>
                                <div class="fun-cat-style-three-item wow fadeInRight" style="background-image: url(<?php echo esc_url( $item['counter_background_image']['url'] ); ?>);">
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="<?php echo esc_attr( $item['counter_value'] ); ?>" data-speed="1000"><?php echo esc_html( $item['counter_value'] ); ?></div>
                                            <div class="operator"><?php echo esc_html( $item['counter_suffix'] ); ?></div>
                                        </div>
                                    </div>
                                    <h5><?php echo esc_html( $item['counter_title'] ); ?></h5>
                                    <h4><?php echo  $item['counter_subtitle']; ?></h4>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
