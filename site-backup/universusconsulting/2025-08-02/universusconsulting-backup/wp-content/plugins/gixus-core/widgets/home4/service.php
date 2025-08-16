<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home4_Service_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home4_service';
    }

    public function get_title() {
        return __( 'Home Four Service', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-services';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Services', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Repeater for Service Items
        $repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
            'service_class',
            [
                'label' => __( 'Service Active Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'service_icon',
            [
                'label' => __( 'Service Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/23.png', // Default image
                ],
            ]
        );

        $repeater->add_control(
            'service_title',
            [
                'label' => __( 'Service Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Air freight transportation', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'service_link',
            [
                'label' => __( 'Service Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'services-details-2.html',
                ],
            ]
        );

        $this->add_control(
            'service_items',
            [
                'label' => __( 'Service Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_title' => __( 'Air freight transportation', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/23.png',
                        ],
                        'service_link' => [
                            'url' => 'services-details-2.html',
                        ],
                    ],
                    [
                        'service_title' => __( 'Ocean freight transportation', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/20.png',
                        ],
                        'service_link' => [
                            'url' => 'services-details-2.html',
                        ],
                    ],
                    [
                        'service_title' => __( 'Land freight transportation', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/21.png',
                        ],
                        'service_link' => [
                            'url' => 'services-details-2.html',
                        ],
                    ],
                    [
                        'service_title' => __( 'Rail freight transportation', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/22.png',
                        ],
                        'service_link' => [
                            'url' => 'services-details-2.html',
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
        ?>
        <div class="services-style-four-area default-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services-style-four-items">
                            <?php foreach ( $settings['service_items'] as $index => $item ) : ?>
                                <div class="services-style-four-item <?php echo esc_attr($item['service_class']); ?> wow fadeInRight" data-wow-delay="<?php echo esc_attr( ( $index * 100 ) . 'ms' ); ?>">
                                    <div class="icon">
                                        <img src="<?php echo esc_url($item['service_icon']['url']); ?>" alt="Universus Consulting Service">
                                    </div>
                                    <div class="info">
                                        <h4><a href="<?php echo esc_url($item['service_link']['url']); ?>"><?php echo esc_html($item['service_title']); ?></a></h4>
                                    </div>
                                    <div class="button">
                                        <a href="<?php echo esc_url($item['service_link']['url']); ?>"><i class="fas fa-long-arrow-right"></i></a>
                                    </div>
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
