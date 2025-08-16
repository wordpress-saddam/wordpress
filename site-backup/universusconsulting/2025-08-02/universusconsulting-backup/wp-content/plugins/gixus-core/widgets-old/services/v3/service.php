<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Services_Three_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'services_three';
    }

    public function get_title() {
        return __( 'Services Three', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-services';
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
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'services-style-five-area default-padding-top', 'gixus-core' ),
            ]
        );
		
		$this->add_control(
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/32.png',
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Services', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Empower your business with our services.', 'gixus-core' ),
            ]
        );

        // Repeater for Service Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'service_icon',
            [
                'label' => __( 'Service Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/24.png',
                ],
            ]
        );



        $repeater->add_control(
            'service_title',
            [
                'label' => __( 'Service Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Brand Design', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'service_link',
            [
                'label' => __( 'Service Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
            ]
        );

        $repeater->add_control(
            'service_description',
            [
                'label' => __( 'Service Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible.', 'gixus-core' ),
            ]
        );

        // Nested Repeater for List Items
        $list_repeater = new \Elementor\Repeater();

        $list_repeater->add_control(
            'list_item',
            [
                'label' => __( 'List Item', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Color palette', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'list_items',
            [
                'label' => __( 'List Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $list_repeater->get_controls(),
                'title_field' => '{{{ list_item }}}',
                'default' => [
                    [ 'list_item' => __( 'Color palette', 'gixus-core' ) ],
                    [ 'list_item' => __( 'Tagline', 'gixus-core' ) ],
                    [ 'list_item' => __( 'Advertisement', 'gixus-core' ) ],
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
                        'service_title' => __( 'Brand Design', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/24.png',
                        ],
                        'service_description' => __( 'Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible.', 'gixus-core' ),
                    ],
                    [
                        'service_title' => __( 'Digital Marketing', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/25.png',
                        ],
                        'service_description' => __( 'Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible.', 'gixus-core' ),
                    ],
                    [
                        'service_title' => __( 'Business Strategy', 'gixus-core' ),
                        'service_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/26.png',
                        ],
                        'service_description' => __( 'Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible.', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ service_title }}}',
            ]
        );

        // Button Text and Link
        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Learn More', 'gixus-core' ),
            ]
        );

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
        <div class="<?php echo esc_html( $settings['class'] ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <h2 class="title"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-stage">
                <div class="services-style-five-items">
					<?php if(!empty($settings['bgimg']['url'])): ?>
                    <div class="shape">
                        <img src="<?php echo esc_html( $settings['bgimg']['url'] ); ?>" alt="Image Not Found">
                    </div>
					<?php endif; ?>
                    <div class="row align-center">
                        <?php foreach ( $settings['service_items'] as $index => $item ) : ?>
                            <div class="col-xl-3 col-lg-6 col-md-6 single-item">
                                <div class="services-style-five-item wow fadeInUp" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                                    <div class="icon">
                                        <img src="<?php echo esc_url( $item['service_icon']['url'] ); ?>" alt="Image Not Found">
                                    </div>
                                    <h3><a href="<?php echo esc_url( $item['service_link']['url'] ); ?>"><?php echo esc_html( $item['service_title'] ); ?></a></h3>
                                    <p><?php echo esc_html( $item['service_description'] ); ?></p>
                                    <ul class="list-style-four">
                                        <?php foreach ( $item['list_items'] as $list_item ) : ?>
                                            <li><?php echo esc_html( $list_item['list_item'] ); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 single-item">
                            <div class="services-style-five-item wow fadeInUp" data-wow-delay="600ms">
                                <a class="btn-large" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>">
                                    <i class="fas fa-long-arrow-right"></i> <?php echo esc_html( $settings['button_text'] ); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
