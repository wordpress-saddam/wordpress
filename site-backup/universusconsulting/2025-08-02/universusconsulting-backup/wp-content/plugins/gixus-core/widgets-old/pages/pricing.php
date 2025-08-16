<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Pricing_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'pricing_widget';
    }

    public function get_title() {
        return __( 'Pricing Widget', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-price-table';
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
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/3.jpg',
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Pricing Plan', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Pricing Packages', 'gixus-core' ),
            ]
        );

        // Basic Plans Repeater
        $basic_repeater = new \Elementor\Repeater();

        $basic_repeater->add_control(
            'basic_plan_title',
            [
                'label' => __( 'Basic Plan Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Basic Plan', 'gixus-core' ),
            ]
        );

        $basic_repeater->add_control(
            'basic_plan_description',
            [
                'label' => __( 'Basic Plan Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The most basic Plan', 'gixus-core' ),
            ]
        );

        $basic_repeater->add_control(
            'basic_plan_price',
            [
                'label' => __( 'Basic Plan Price', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '$32',
            ]
        );

        $basic_repeater->add_control(
            'basic_plan_button_text',
            [
                'label' => __( 'Butotn Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Purchase Now',
            ]
        );

        $basic_repeater->add_control(
            'basic_plan_button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        // Features Repeater
        $feature_repeater = new \Elementor\Repeater();

        $feature_repeater->add_control(
            'feature_text',
            [
                'label' => __( 'Feature Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Feature Text', 'gixus-core' ),
            ]
        );

        $feature_repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Feature Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );

        $basic_repeater->add_control(
            'features',
            [
                'label' => __( 'Features', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $feature_repeater->get_controls(),
                'default' => [
                    [
                        'feature_text' => __( '100 Days Sitting', 'gixus-core' ),
                        'feature_icon' =>  [
                                            'value' => 'fas fa-check',
                                            'library' => 'solid',
                                        ],
                    ],
                    [
                        'feature_text' => __( 'Market Report Analysis', 'gixus-core' ),
                        'feature_icon' =>  [
                                            'value' => 'fas fa-check',
                                            'library' => 'solid',
                                        ],
                    ],
                    [
                        'feature_text' => __( 'Exclusive Manuals', 'gixus-core' ),
                        'feature_icon' =>  [
                                            'value' => 'fas fa-times',
                                            'library' => 'solid',
                                        ],
                    ],
                    [
                        'feature_text' => __( 'Creative Leadership team', 'gixus-core' ),
                        'feature_icon' =>  [
                                            'value' => 'fas fa-times',
                                            'library' => 'solid',
                                        ],
                    ],
                ],
                'title_field' => '{{{ feature_text }}}',
            ]
        );

        $this->add_control(
            'basic_plans',
            [
                'label' => __( 'Basic Plans', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $basic_repeater->get_controls(),
                'default' => [
                    [
                        'basic_plan_title' => __( 'Basic Plan', 'gixus-core' ),
                        'basic_plan_description' => __( 'The most basic Plan', 'gixus-core' ),
                        'basic_plan_price' => '$32',
                    ],
                ],
                'title_field' => '{{{ basic_plan_title }}}',
            ]
        );

        // Advanced Plans Repeater
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'plan_title',
            [
                'label' => __( 'Plan Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Standard Plan', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'plan_description',
            [
                'label' => __( 'Plan Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Exclusive For small Business', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'plan_price',
            [
                'label' => __( 'Plan Price', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '$58',
            ]
        );

        $repeater->add_control(
            'plan_button_text',
            [
                'label' => __( 'Butotn Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Purchase Now',
            ]
        );

        $repeater->add_control(
            'plan_button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        // Add features to advanced plans
        $repeater->add_control(
            'features',
            [
                'label' => __( 'Features', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $feature_repeater->get_controls(),
                'default' => [
                    [
                        'feature_text' => __( '100 Days Sitting', 'gixus-core' ),
                        'feature_icon' => [
                                            'value' => 'fas fa-check',
                                            'library' => 'solid',
                                        ],
                    ],
                    [
                        'feature_text' => __( 'Market Report Analysis', 'gixus-core' ),
                        'feature_icon' => [
                                            'value' => 'fas fa-check',
                                            'library' => 'solid',
                                        ],
                    ],
                    [
                        'feature_text' => __( 'Exclusive Manuals', 'gixus-core' ),
                        'feature_icon' => [
                                            'value' => 'fas fa-check',
                                            'library' => 'solid',
                                        ],
                    ],
                    [
                        'feature_text' => __( 'Creative Leadership team', 'gixus-core' ),
                        'feature_icon' => [
                                            'value' => 'fas fa-times',
                                            'library' => 'solid',
                                        ],
                    ],
                ],
                'title_field' => '{{{ feature_text }}}',
            ]
        );

        $repeater->add_control(
            'is_best_deal',
            [
                'label' => __( 'Best Deal Badge', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'advanced_plans',
            [
                'label' => __( 'Advanced Plans', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'plan_title' => __( 'Standard Plan', 'gixus-core' ),
                        'plan_description' => __( 'Exclusive For small Business', 'gixus-core' ),
                        'plan_price' => '$58',
                        'is_best_deal' => __( 'Best Deal', 'gixus-core' ),
                    ],
                    [
                        'plan_title' => __( 'Advanced Plan', 'gixus-core' ),
                        'plan_description' => __( 'The most Profitable Plan', 'gixus-core' ),
                        'plan_price' => '$99',
                    ],
                ],
                'title_field' => '{{{ plan_title }}}',
            ]
        );

        // Controls for Per Month Package text
        $this->add_control(
            'per_month_text',
            [
                'label' => __( 'Per Month Package Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Per Month Package', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="pricing-style-one-area default-padding bg-cover bg-gray" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <h2 class="title split-text"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ( $settings['basic_plans'] as $index => $basic_plan ) : ?>
                        <div class="col-lg-4">
                            <div class="pricing-style-one wow fadeInUp">
                                <div class="pricing-header">
                                    <h4><?php echo esc_html( $basic_plan['basic_plan_title'] ); ?></h4>
                                    <p><?php echo esc_html( $basic_plan['basic_plan_description'] ); ?></p>
                                    <h2><?php echo esc_html( $basic_plan['basic_plan_price'] ); ?></h2>
                                    <span><?php echo esc_html( $settings['per_month_text'] ); ?></span>
                                </div>
                                <ul>
                                    <?php foreach ( $basic_plan['features'] as $feature ) : ?>
                                        <li><i class="<?php echo esc_attr( $feature['feature_icon']['value'] ); ?>"></i> <?php echo esc_html( $feature['feature_text'] ); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a class="btn btn-gradient btn-md animation" href="<?php echo esc_url( $basic_plan['basic_plan_button_link']['url'] ); ?>"><?php echo esc_html( $basic_plan['basic_plan_button_text'] ); ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="col-lg-8">
                        <div class="pricing-two-box wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <?php foreach ( $settings['advanced_plans'] as $advanced_plan ) : ?>
                                    <div class="col-lg-6">
                                        <div class="pricing-style-one">
                                            <?php if ( ! empty( $advanced_plan['is_best_deal'] ) ) : ?>
                                                <div class="badge"><?php echo esc_html( $advanced_plan['is_best_deal'] ); ?></div>
                                            <?php endif; ?>
                                            <div class="pricing-header">
                                                <h4><?php echo esc_html( $advanced_plan['plan_title'] ); ?></h4>
                                                <p><?php echo esc_html( $advanced_plan['plan_description'] ); ?></p>
                                                <h2><?php echo esc_html( $advanced_plan['plan_price'] ); ?></h2>
                                                <span><?php echo esc_html( $settings['per_month_text'] ); ?></span>
                                            </div>
                                            <ul>
                                                <?php foreach ( $advanced_plan['features'] as $feature ) : ?>
                                                    <li><i class="<?php echo esc_attr( $feature['feature_icon']['value'] ); ?>"></i> <?php echo esc_html( $feature['feature_text'] ); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <a class="btn btn-dark btn-md animation" href="<?php echo esc_url( $advanced_plan['plan_button_link']['url'] ); ?>"><?php echo esc_html( $advanced_plan['plan_button_text'] ); ?></a>
                                        </div>
                                    </div>
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
