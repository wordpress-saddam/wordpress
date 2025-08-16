<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home2_Features_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home2_features';
    }

    public function get_title() {
        return __( 'Home Two Features', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-feature-list';
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
            'features_title',
            [
                'label' => __( 'Features Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Features', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'features_description',
            [
                'label' => __( 'Features Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our goal is giving the best our customers', 'gixus-core' ),
            ]
        );

        // Repeater for Feature Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_image',
            [
                'label' => __( 'Feature Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/features/1.jpg', // Default image for feature
                ],
            ]
        );

        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Feature Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/13.png', // Default icon
                ],
            ]
        );

        $repeater->add_control(
            'feature_title',
            [
                'label' => __( 'Feature Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Manage IT Service', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'feature_description',
            [
                'label' => __( 'Feature Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Prevailed mr tolerably discourse assurance estimable everything melancholy uncommonly solicitude inhabiting projection.', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'feature_link',
            [
                'label' => __( 'Feature Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'services-details.html',
                ],
                'placeholder' => __( 'https://your-link.com', 'gixus-core' ),
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
                        'feature_title' => __( 'Manage IT Service', 'gixus-core' ),
                        'feature_description' => __( 'Prevailed mr tolerably discourse assurance estimable everything melancholy uncommonly solicitude inhabiting projection.', 'gixus-core' ),
                        'feature_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/features/1.jpg',
                        ],
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/13.png',
                        ],
                        'feature_link' => [
                            'url' => 'services-details.html',
                        ],
                        
                    ],
                    [
                        'feature_title' => __( 'Cyber Security', 'gixus-core' ),
                        'feature_description' => __( 'Prevailed mr tolerably discourse assurance estimable everything melancholy uncommonly solicitude inhabiting projection.', 'gixus-core' ),
                        'feature_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/features/2.jpg',
                        ],
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/14.png',
                        ],
                        'feature_link' => [
                            'url' => 'services-details.html',
                        ],
                        
                    ],
                    [
                        'feature_title' => __( 'Digital Experience', 'gixus-core' ),
                        'feature_description' => __( 'Prevailed mr tolerably discourse assurance estimable everything melancholy uncommonly solicitude inhabiting projection.', 'gixus-core' ),
                        'feature_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/features/3.jpg',
                        ],
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/15.png',
                        ],
                        'feature_link' => [
                            'url' => 'services-details.html',
                        ],
                        
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="features-style-two-area default-padding bottom-less bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html( $settings['features_title'] ); ?></h4>
                            <h2 class="title split-text"><?php echo esc_html( $settings['features_description'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row center">
                    <?php foreach ( $settings['feature_items'] as $index => $item ) : ?>
                        <div class="col-xl-4 col-md-6 feature-style-two-item wow fadeInRight" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                            <div class="feature-style-two">
                                <div class="thumb">
                                    <img src="<?php echo esc_url( $item['feature_image']['url'] ); ?>" alt="Thumb">
                                    <div class="title">
                                        <div class="top">
                                         <?php if(!empty($item['feature_icon']['url'])): ?>
                                            <img src="<?php echo esc_url( $item['feature_icon']['url'] ); ?>" alt="Icon Not Found">
                                            <?php endif; ?>
                                            <h4><a href="<?php echo esc_url( $item['feature_link']['url'] ); ?>"><?php echo esc_html( $item['feature_title'] ); ?></a></h4>
                                        </div>
                                        <a href="<?php echo esc_url( $item['feature_link']['url'] ); ?>"><i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                    <div class="overlay text-center">
                                        <div class="content">
                                        <?php if(!empty($item['feature_icon']['url'])): ?>
                                            <div class="icon">
                                                <img src="<?php echo esc_url( $item['feature_icon']['url'] ); ?>" alt="Icon Not Found">
                                            </div>
                                            <?php endif; ?>
                                            <h4><a href="<?php echo esc_url( $item['feature_link']['url'] ); ?>"><?php echo esc_html( $item['feature_title'] ); ?></a></h4>
                                            <p><?php echo esc_html( $item['feature_description'] ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php
    }
}