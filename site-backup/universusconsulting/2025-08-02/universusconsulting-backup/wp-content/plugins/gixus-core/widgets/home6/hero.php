<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home6_Hero_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_hero';
    }

    public function get_title() {
        return __( 'Home Six Hero', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-banner';
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
            'main_heading',
            [
                'label' => __( 'Main Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Creative projects with <strong>AI-Powered pattern</strong>', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'illustration_image',
            [
                'label' => __( 'Illustration Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/illustration/15.png',
                ],
            ]
        );

        $this->add_control(
            'card_images',
            [
                'label' => __( 'Card Images', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'card_image',
                        'label' => __( 'Card Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/m1.jpg',
                        ],
                    ],
                ],
                'default' => [
                    [
                        'card_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/m1.jpg',
                        ],
                    ],
                    [
                        'card_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/m2.jpg',
                        ],
                    ],
                    [
                        'card_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/m3.jpg',
                        ],
                    ],
                    [
                        'card_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/m4.jpg',
                        ],
                    ],
                ],
                'title_field' => '{{{ card_image.url }}}',
            ]
        );

        $this->add_control(
            'card_text',
            [
                'label' => __( 'Card Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '+20K', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'card_review',
            [
                'label' => __( 'Card Review Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '<strong>4.8 58</strong> Reviews', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'card_title',
            [
                'label' => __( 'Card Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Top AI data talent', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'card_des',
            [
                'label' => __( 'Card Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'The next generation production for designer. Resolve parties but why she shewing', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="banner-style-seven-area overflow-hidden">
            <div class="container">
                <div class="banner-seven-items text-light">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <h2 class="split-text"><?php echo wp_kses_post( $settings['main_heading'] ); ?></h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="banner">
                                <div class="info order-lg-last">
                                    <p class="split-text">
                                        <?php echo esc_html( $settings['description'] ); ?>
                                    </p>
                                    <div class="card-style-three wow fadeInUp" data-wow-delay="300ms">
                                    <div class="top-info">
                                        <div class="thumb">
                                        <?php foreach ( $settings['card_images'] as $card ) : ?>
                                            <img src="<?php echo esc_url( $card['card_image']['url'] ); ?>" alt="Universus Consulting Service">
                                        <?php endforeach; ?>
                                        <span><?php echo esc_html( $settings['card_text'] ); ?></span>
                                        </div>
                                    </div>
                                    <h5><i class="fas fa-star"></i> <?php echo wp_kses_post( $settings['card_review'] ); ?></h5>
                                    <h4><?php echo esc_html( $settings['card_title'] ); ?></h4>
                                    <p>
                                        <?php echo esc_html( $settings['card_des'] ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="illustration wow fadeInLeft">
                                <img src="<?php echo esc_url( $settings['illustration_image']['url'] ); ?>" alt="Universus Consulting Service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <!-- End Main -->
        <?php
    }
}
