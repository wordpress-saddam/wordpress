<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home_Five_Service_Section_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_five_service_section';
    }

    public function get_title() {
        return __( 'Home Five Service Section', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-service';
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
            'service_thumb_image',
            [
                'label' => __( 'Service Thumbnail Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/about/2.jpg',
                ],
            ]
        );

        $this->add_control(
            'shape_image',
            [
                'label' => __( 'Shape Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/20.png',
                ],
            ]
        );

        $this->add_control(
            'service_reviews',
            [
                'label' => __( 'Service Reviews Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Excellent 18,560+ Reviews', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'service_rating',
            [
                'label' => __( 'Service Rating', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '4.8/5', 'gixus-core' ),
            ]
        );
        
        $this->add_control(
            'service_title',
            [
                'label' => __( 'OUR SERVICES', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Empower your business with our services.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'service_description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Empower your business with our services.', 'gixus-core' ),
            ]
        );

        // Repeater for Services List
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'service_icon',
            [
                'label' => __( 'Service Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/29.png',
                ],
            ]
        );

        $repeater->add_control(
            'service_title',
            [
                'label' => __( 'Service Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Service Title', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'service_description',
            [
                'label' => __( 'Service Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Service description here.', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'service_url',
            [
                'label' => __( 'Service URL', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [ 'url' => '#' ],
            ]
        );

        $this->add_control(
            'services_list',
            [
                'label' => __( 'Services List', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_title' => __( 'Market Research', 'gixus-core' ),
                        'service_description' => __( 'Continue indulged speaking the was genius horrible for position. Seeing rather her you esteem men settle genius excuse.', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/29.png',
                        ],
                    ],
                    [
                        'service_title' => __( 'Business Solutions', 'gixus-core' ),
                        'service_description' => __( 'Continue indulged speaking the was genius horrible for position. Seeing rather her you esteem men settle genius excuse.', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/27.png',
                        ],
                    ],
                    [
                        'service_title' => __( 'Sales Service', 'gixus-core' ),
                        'service_description' => __( 'Description for Sales Service.', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/28.png',
                        ],
                    ],
                    [
                        'service_title' => __( 'Brand Identity', 'gixus-core' ),
                        'service_description' => __( 'Continue indulged speaking the was genius horrible for position. Seeing rather her you esteem men settle genius excuse.', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/30.png',
                        ],
                    ],
                ],
                'title_field' => '{{{ service_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        // Get the rating value
        $rating_value = floatval($settings['service_rating']);
        $full_stars = floor($rating_value); // Full stars
        $empty_stars = 5 - $full_stars; // Empty stars
        ?>
        <div class="services-style-two-area default-padding-top bg-gray">
            <div class="services-style-two-thumb">
                <img src="<?php echo esc_url( $settings['service_thumb_image']['url'] ); ?>" alt="Universus Consulting Service">
                <img src="<?php echo esc_url( $settings['shape_image']['url'] ); ?>" alt="Universus Consulting Service">
            </div>
            <div class="shape">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/shape/18.png' ); ?>" alt="Universus Consulting Service">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="review-card">
<!--                             <h6><?php echo esc_html( $settings['service_reviews'] ); ?></h6> -->
                            <div class="d-flex">
                                <div class="icon">
                                    <?php 
                                    // Print full stars
                                    for ($i = 0; $i < $full_stars; $i++) {
                                        echo '<i class="fas fa-star"></i>';
                                    }
                                    // Print empty stars
                                    for ($i = 0; $i < $empty_stars; $i++) {
                                        echo '<i class="far fa-star"></i>';
                                    }
                                    ?>
                                </div>
                                <span><?php echo esc_html( $settings['service_rating'] ); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-6" style="margin-bottom: -1px">
                        <p class="sub-title sub-title-h4"><?php echo esc_html( $settings['service_title'] ); ?></p>
                        <h2 class="title split-text"><?php echo esc_html( $settings['service_description'] ); ?></h2>
                        <ul class="list-style-two mt-20 split-text">
                            <?php foreach ( $settings['services_list'] as $service ) : ?>
                                <li><?php echo esc_html( $service['service_title'] ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="services-style-two-items bg-dark text-light">
                            <div class="services-style-two-carousel swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ( $settings['services_list'] as $service ) : ?>
                                        <div class="swiper-slide">
                                            <div class="service-style-two">
                                                <?php if ( ! empty( $service['service_icon']['url'] ) ) : ?>
                                                    <img src="<?php echo esc_url( $service['service_icon']['url'] ); ?>" alt="Service Icon">
                                                <?php endif; ?>
                                                <p class="h4-to-h3">
                                                    <a class="text-white" href="<?php echo esc_url( $service['service_url']['url'] ); ?>">
                                                        <?php echo esc_html( $service['service_title'] ); ?>
                                                    </a>
                                                </p>
                                                <p><?php echo esc_html( $service['service_description'] ); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="sevice-style-one-swiper-nav">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}