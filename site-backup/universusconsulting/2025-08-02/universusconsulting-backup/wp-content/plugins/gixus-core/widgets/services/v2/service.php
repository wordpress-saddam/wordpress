<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Services_Two_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'services_two_widget';
    }

    public function get_title() {
        return __( 'Services Two', 'gixus-core' );
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
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/24.png',
                ],
            ]
        );

        // Section Title
        $this->add_control(
            'section_sub_title',
            [
                'label' => __( 'Sub Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Services', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'section_main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Empower your business with our services.', 'gixus-core' ),
            ]
        );

        // Services Items
        $this->add_control(
            'services_items',
            [
                'label' => __( 'Services Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'service_icon',
                        'label' => __( 'Service Icon', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/default-icon.png', // Default icon
                        ],
                    ],
                    [
                        'name' => 'service_title',
                        'label' => __( 'Service Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Service Title', 'gixus-core' ),
                    ],
                    [
                        'name' => 'service_description',
                        'label' => __( 'Service Description', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( 'Service description goes here.', 'gixus-core' ),
                    ],
                    [
                        'name' => 'service_link',
                        'label' => __( 'Service Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => 'services-details.html', // Default link
                        ],
                    ],
                    [
                        'name' => 'service_tags',
                        'label' => __( 'Service Tags', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Management, Backup', 'gixus-core' ), // Default tags
                    ],
                ],
                'default' => [
    [
        'service_icon' => [
            'url' => get_template_directory_uri() . '/assets/img/icon/16.png', // Default icon for Analytic Solutions
        ],
        'service_title' => __( 'Analytic Solutions', 'gixus-core' ),
        'service_description' => __( 'Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves the perfect connections.', 'gixus-core' ),
        'service_link' => [
            'url' => 'services-details.html',
        ],
        'service_tags' => __( 'Management, Backup', 'gixus-core' ),
    ],
    [
        'service_icon' => [
            'url' => get_template_directory_uri() . '/assets/img/icon/17.png', // Default icon for Risk Management
        ],
        'service_title' => __( 'Risk Management', 'gixus-core' ),
        'service_description' => __( 'Regular rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves the perfect connections.', 'gixus-core' ),
        'service_link' => [
            'url' => 'services-details.html',
        ],
        'service_tags' => __( 'Hardware, Error', 'gixus-core' ),
    ],
    [
        'service_icon' => [
            'url' => get_template_directory_uri() . '/assets/img/icon/18.png', // Default icon for Firewall Advance
        ],
        'service_title' => __( 'Firewall Advance', 'gixus-core' ),
        'service_description' => __( 'Patient rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves the perfect connections.', 'gixus-core' ),
        'service_link' => [
            'url' => 'services-details.html',
        ],
        'service_tags' => __( 'Network, Firewall', 'gixus-core' ),
    ],
    
],

                'title_field' => '{{{ service_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="services-style-three-area default-padding bottom-less bg-gray-secondary bg-cover" style="background-image: url(<?php echo esc_url( $settings['bgimg']['url'] ); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title"><?php echo wp_kses_post( $settings['section_main_title'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ( $settings['services_items'] as $index => $item ) : ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                            <div class="services-style-three-item wow fadeInRight" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                <div class="item-title">
                                    <?php if ( ! empty( $item['service_icon']['url'] ) ) : ?>
                                        <img src="<?php echo esc_url( $item['service_icon']['url'] ); ?>" alt="Universus Consulting Service">
                                    <?php endif; ?>
                                    <h3 class="h4-to-h3"><a href="<?php echo esc_url( $item['service_link']['url'] ); ?>"><?php echo esc_html( $item['service_title'] ); ?></a></h3>
                                    <p><?php echo esc_html( $item['service_description'] ); ?></p>
                                    <div class="d-flex mt-30">
<!--                                         <a href="<?php echo esc_url( $item['service_link']['url'] ); ?>"><i class="fas fa-long-arrow-right"></i></a> -->
                                        <?php if(false): ?>
										<div class="service-tags">
                                            <?php 
                                            $tags = explode( ',', $item['service_tags'] );
                                            foreach ( $tags as $tag ) {
                                                echo '<a>' . esc_html( trim( $tag ) ) . '</a> ';
                                            }
                                            ?>
                                        </div>
										<?php endif; ?>
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
