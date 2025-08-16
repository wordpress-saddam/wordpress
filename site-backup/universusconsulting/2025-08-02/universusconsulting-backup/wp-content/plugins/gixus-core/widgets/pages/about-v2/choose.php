<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Pages_Choose_Us_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'choose_us_widget';
    }

    public function get_title() {
        return __( 'About V2 Choose Us', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-check-circle-o';
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

        // Main Illustration Image Control
        $this->add_control(
            'main_image',
            [
                'label' => __( 'Main Illustration Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/illustration/7.png',
                ],
            ]
        );

        // Circle Background Image Control
        $this->add_control(
            'circle_background_image',
            [
                'label' => __( 'Circle Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/26.png',
                ],
            ]
        );

        // Circle Text Control
        $this->add_control(
            'circle_text',
            [
                'label' => __( 'Circle Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '.  Certified Company   .  Business Solution', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __( 'Circle Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-long-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'icon_link',
            [
                'label' => __( 'Circle Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        // Subtitle Control
        $this->add_control(
            'subtitle',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Why Choose Us', 'gixus-core' ),
            ]
        );

        // Title Control
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Empowering success in technology since 1968', 'gixus-core' ),
            ]
        );

        // Description Control
        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.', 'gixus-core' ),
            ]
        );

        // Repeater for List Items (Why Choose Us Features)
        $repeater = new \Elementor\Repeater();

        // List Item Title Control
        $repeater->add_control(
            'list_item_title',
            [
                'label' => __( 'Feature Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Tech Solution', 'gixus-core' ),
            ]
        );

        // List Item Description Control
        $repeater->add_control(
            'list_item_description',
            [
                'label' => __( 'Feature Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
            ]
        );

        // List Items Repeater Control
        $this->add_control(
            'list_items',
            [
                'label' => __( 'Why Choose Us Features', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_item_title' => __( 'Tech Solution', 'gixus-core' ),
                        'list_item_description' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
                    ],
                    [
                        'list_item_title' => __( 'Quick Support', 'gixus-core' ),
                        'list_item_description' => __( 'Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature.', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ list_item_title }}}',
            ]
        );

        // Button Text Control
        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Learn More', 'gixus-core' ),
            ]
        );

        // Button Link Control
        $this->add_control(
            'button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Start Why Choose Us 
        ============================================= -->
        <div class="choose-us-style-two-area relative bg-dark text-light">
            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-6 order-xl-last pl-80 pl-md-15 pl-xs-15 choose-us-style-two-content">
                        <div class="info-style-one2" style="padding-top: 15px;">
                            <p class="sub-title h4-sub-title"><?php echo esc_html( $settings['subtitle'] ); ?></p>
                            <h2 class="title split-text"><?php echo esc_html( $settings['title'] ); ?></h2>
                            <p class="split-text"><?php echo esc_html( $settings['description'] ); ?></p>
                            <ul class="list-sytle-four mt-30">
                                <?php foreach ( $settings['list_items'] as $item ) : ?>
                                     <li class="wow fadeInUp">
                                        <h3 class="h4-to-h3-20"><?php echo esc_html( $item['list_item_title'] ); ?></h3>
                                        <p><?php echo esc_html( $item['list_item_description'] ); ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if(!empty($settings['button_text'])): ?>
                            <a class="btn btn-md circle btn-gradient animation mt-20" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>">
                                <?php echo esc_html( $settings['button_text'] ); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="thumb-style-three">
                            <img src="<?php echo esc_url( $settings['main_image']['url'] ); ?>" alt="Main Image">
                            <div class="circle-text" style="background-image: url(<?php echo esc_url( $settings['circle_background_image']['url'] ); ?>);">
                                <!-- curved-circle start-->
                                <div class="circle-text-item" data-circle-text-options='{"radius": 75, "forceWidth": true, "forceHeight": true }'>
                                    <?php echo esc_html( $settings['circle_text'] ); ?>
                                </div>
                                
                                <a href="<?php echo esc_url( $settings['icon_link']['url'] ); ?>"><i class="<?php echo esc_attr( $settings['icon']['value'] ); ?>"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us -->
        <?php
    }
}