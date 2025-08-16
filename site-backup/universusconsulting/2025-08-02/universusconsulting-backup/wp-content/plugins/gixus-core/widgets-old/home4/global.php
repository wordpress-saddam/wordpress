<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home_Four_Global_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_four_global';
    }

    public function get_title() {
        return __( 'Home Four Global Locations', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-map-marker';
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
            'heading_title',
            [
                'label' => __( 'Heading Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Global Locations', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'background_image',
            [
                'label' => __( 'Background Image for Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/17.jpg',
                ],
            ]
        );

        // Repeater for Location Items
        $repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
            'class_active',
            [
                'label' => __( 'Class Active', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'location_name',
            [
                'label' => __( 'Location Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Express Shipping Center', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'location_address',
            [
                'label' => __( 'Location Address', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'location_icon',
            [
                'label' => __( 'Location Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/map.png',
                ],
            ]
        );
		
		$repeater->add_control(
            'left_position',
            [
                'label' => __( 'Left Position (%)', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
            ]
        );

        $repeater->add_control(
            'top_position',
            [
                'label' => __( 'Top Position (%)', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
            ]
        );
		
		$repeater->add_control(
            'right_position',
            [
                'label' => __( 'Right Position (%)', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
            ]
        );

        $repeater->add_control(
            'bottom_position',
            [
                'label' => __( 'Bottom Position (%)', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
            ]
        );
		

        $this->add_control(
            'location_items',
            [
                'label' => __( 'Location Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'location_name' => __( 'Express Shipping Center', 'gixus-core' ),
                        'location_address' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),
                    ],
                    [
                        'location_name' => __( 'Allstate Courier Systems', 'gixus-core' ),
                        'location_address' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),

                    ],
                    [
                        'location_name' => __( 'Boston Car Transport', 'gixus-core' ),
                        'location_address' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),
                    ],
                    [
                        'location_name' => __( 'Deputy Delivery Services', 'gixus-core' ),
                        'location_address' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),
                    ],
                    [
                        'location_name' => __( 'Glover Logistics, Inc.', 'gixus-core' ),
                        'location_address' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),
                    ],
                    [
                        'location_name' => __( 'Shipping Unleash', 'gixus-core' ),
                        'location_address' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ location_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section1',
            [
                'label' => __( 'Content Counter', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Repeater for Counter Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'counter_value',
            [
                'label' => __( 'Counter Value', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 56,
            ]
        );

        $repeater->add_control(
            'counter_suffix',
            [
                'label' => __( 'Counter Suffix', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'K',
            ]
        );

        $repeater->add_control(
            'counter_description',
            [
                'label' => __( 'Counter Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Clients around the world', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'counter_items',
            [
                'label' => __( 'Counter Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_value' => 56,
                        'counter_suffix' => 'K',
                        'counter_description' => __( 'Clients around the world', 'gixus-core' ),
                    ],
                    [
                        'counter_value' => 30,
                        'counter_suffix' => '+',
                        'counter_description' => __( 'Award Winning', 'gixus-core' ),
                    ],
                    [
                        'counter_value' => 97,
                        'counter_suffix' => '%',
                        'counter_description' => __( 'Business Growth', 'gixus-core' ),
                    ],
                    [
                        'counter_value' => 60,
                        'counter_suffix' => '+',
                        'counter_description' => __( 'Team Members', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ counter_description }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="gobal-location-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="site-heading">
                            <h1 class="text-gradient" style="background-image: url(<?php echo esc_url($settings['background_image']['url']); ?>);">
                                <?php echo esc_html( $settings['heading_title'] ); ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="global-location-items">
                            <?php foreach ( $settings['location_items'] as $item ) : ?>
                                <div class="location-item <?php echo esc_attr( $item['class_active'] ); ?>" 
         style="left: <?php echo esc_attr( $item['left_position'] ); ?>%; 
                top: <?php echo esc_attr( $item['top_position'] ); ?>%; right: <?php echo esc_attr( $item['right_position'] ); ?>%; bottom: <?php echo esc_attr( $item['bottom_position'] ); ?>%;">
                                    <img src="<?php echo esc_url( $item['location_icon']['url'] ); ?>" alt="Image Not Found">
                                    <div class="location-details">
                                        <h5><?php echo esc_html( $item['location_name'] ); ?></h5>
                                        <p><?php echo esc_html( $item['location_address'] ); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/map.png'); ?>" alt="Image Not Found">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container default-padding-top">
            <div class="fun-fact-style-one-items text-center">
                <div class="row">
                    <?php foreach ( $settings['counter_items'] as $item ) : ?>
                        <div class="col-lg-3 col-md-6 funfact-style-one-item">
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="<?php echo esc_attr( $item['counter_value'] ); ?>" data-speed="2000"><?php echo esc_html( $item['counter_value'] ); ?></div>
                                    <div class="operator"><?php echo esc_html( $item['counter_suffix'] ); ?></div>
                                </div>
                                <span class="medium"><?php echo esc_html( $item['counter_description'] ); ?></span>
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
