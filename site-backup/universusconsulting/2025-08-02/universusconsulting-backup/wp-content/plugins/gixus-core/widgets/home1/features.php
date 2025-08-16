<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Features_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_features';
    }

    public function get_title() {
        return __( 'Home One Features', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-info';
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
            'counter_number',
            [
                'label' => __( 'Counter Number', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 28,
            ]
        );

        $this->add_control(
            'counter_suffix',
            [
                'label' => __( 'Counter Suffix', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'K',
            ]
        );

        $this->add_control(
            'main_heading',
            [
                'label' => __( 'Main Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Customers are served in our consulting services', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label' => __( 'List Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => implode("\n", [
                    'Growth Method Analysis',
                    'Business Management consultation',
                    'Team Building Leadership',
                    'Assessment Report Analysis'
                ]),
                'description' => __( 'Add each list item on a new line.', 'gixus-core' ),
            ]
        );

        // Repeater for Feature Cards
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/1.png',
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Approach', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Continued at necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'feature_items',
            [
                'label' => __( 'Feature Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Approach', 'gixus-core' ),
                        'description' => __( 'Continued at necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
                        'icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/1.png',
                        ],
                    ],
                    [
                        'title' => __( 'Information', 'gixus-core' ),
                        'description' => __( 'Continued at necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
                        'icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/2.png',
                        ],
                    ],
                    [
                        'title' => __( 'Goal', 'gixus-core' ),
                        'description' => __( 'Continued at necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.', 'gixus-core' ),
                        'icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/3.png',
                        ],
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="feature-style-one-area2">
            <div class="container container-stage">
                <div class="feature-style-one-items">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="feature-style-one-info">
                                <div class="fun-fact">
                                    <div class="counter">
                                    <?php if(!empty($settings['counter_number'])): ?>
                                        <div class="timer" data-to="<?php echo esc_html( $settings['counter_number'] ); ?>" data-speed="1000">
                                            <?php echo esc_html( $settings['counter_number'] ); ?>
                                        </div>
                                        <?php endif; ?>
                                        <div class="operator">
                                            <?php echo esc_html( $settings['counter_suffix'] ); ?>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="h3-to-h2"><?php echo esc_html( $settings['main_heading'] ); ?></h2>
                                <ul class="list-style-one mt-25">
                                    <?php
                                    $list_items = explode( "\n", $settings['list_items'] );
                                    foreach ( $list_items as $item ) {
                                        echo '<li>' . esc_html( $item ) . '</li>';
                                    }
                                    ?>
                                </ul>
                                <div class="path"></div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 feature-style-one-content text-light">
                            <div class="feature-style-one-cards">
                                <div class="path" style="background: #ffffff;"></div>

                                <?php foreach ( $settings['feature_items'] as $index => $item ) : ?>
                                    <!-- Single item -->
                                     <div class="feature-style-one-item wow fadeInRight" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                        <div class="icon">
                                            <img src="<?php echo esc_url( $item['icon']['url'] ); ?>" alt="Universus Consulting Service">
                                        </div>
                                        <div class="info">
                                            <h2 class="h4-to-h2"><?php echo esc_html( $item['title'] ); ?></h2>
                                            <p><?php echo esc_html( $item['description'] ); ?></p>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}