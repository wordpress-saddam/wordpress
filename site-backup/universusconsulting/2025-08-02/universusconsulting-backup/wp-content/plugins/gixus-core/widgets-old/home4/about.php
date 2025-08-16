<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home4_About_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home4_about';
    }

    public function get_title() {
        return __( 'Home Four About', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-info';
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
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'We’ll keep your items damage free', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Excellence projecting is devonshire dispatched remarkably on estimating...', 'gixus-core' ),
            ]
        );

        // Clients Count
        $this->add_control(
            'clients_count',
            [
                'label' => __( 'Clients Count', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 56,
            ]
        );

        // Clients Text Field
        $this->add_control(
            'clients_text',
            [
                'label' => __( 'Clients Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Clients around the world', 'gixus-core' ),
            ]
        );

        // Clients Count Operator Field
        $this->add_control(
            'clients_count_operator',
            [
                'label' => __( 'Clients Count Operator', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'K', 'gixus-core' ),
            ]
        );

        // Images
        $this->add_control(
            'image_one',
            [
                'label' => __( 'Image One', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/illustration/11.png', // Default image
                ],
            ]
        );

        $this->add_control(
            'image_two',
            [
                'label' => __( 'Image Two', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/illustration/10.png', // Default image
                ],
            ]
        );
        
        $this->add_control(
            'image_three',
            [
                'label' => __( 'Image Three', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/about/6.jpg', // Default image
                ],
            ]
        );

        // Warehouse Information
        $this->add_control(
            'warehouse_title',
            [
                'label' => __( 'Warehouse Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Warehouse Storage', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'warehouse_address',
            [
                'label' => __( 'Warehouse Address', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '70240 Avenue of the Moon MF Tower, East California', 'gixus-core' ),
            ]
        );

        // Repeater for Contact Information
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'contact_link',
            [
                'label' => __( 'Contact Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $repeater->add_control(
            'contact_icon',
            [
                'label' => __( 'Icon Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'fas fa-phone-alt', // Example default icon
            ]
        );

        $repeater->add_control(
            'contact_text',
            [
                'label' => __( 'Contact Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '+4733378901', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'contact_items',
            [
                'label' => __( 'Contact Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'contact_link' => [ 'url' => 'tel:+4733378901' ],
                        'contact_icon' => 'fas fa-phone-alt',
                        'contact_text' => '+4733378901',
                    ],
                    [
                        'contact_link' => [ 'url' => 'mailto:info@crysta.com' ],
                        'contact_icon' => 'fas fa-envelope',
                        'contact_text' => 'info@crysta.com',
                    ],
                    [
                        'contact_link' => [ 'url' => 'https://www.example.com' ],
                        'contact_icon' => 'fas fa-globe',
                        'contact_text' => 'www.example.com',
                    ],
                ],
                'title_field' => '{{{ contact_text }}}',
            ]
        );

        // Repeater for List Items
        $list_repeater = new \Elementor\Repeater();

        $list_repeater->add_control(
            'list_item_text',
            [
                'label' => __( 'List Item Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Shipping Service', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label' => __( 'List Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $list_repeater->get_controls(),
                'default' => [
                    [
                        'list_item_text' => __( 'Intermodal Shipping', 'gixus-core' ),
                    ],
                    [
                        'list_item_text' => __( 'Container Freight', 'gixus-core' ),
                    ],
                    [
                        'list_item_text' => __( 'Freeze product Shipping', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ list_item_text }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="about-style-four-area default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="thumb-style-four">
                            <?php if(!empty($settings['image_one']['url'])): ?>
                            <img src="<?php echo esc_url($settings['image_one']['url']); ?>" alt="Image Not Found">
                            <?php endif; ?>
                            <?php if(!empty($settings['image_two']['url'])): ?>
                            <img src="<?php echo esc_url($settings['image_two']['url']); ?>" alt="Image Not Found">
                            <?php endif; ?>
                            <div class="expertise-card">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="<?php echo esc_attr($settings['clients_count']); ?>" data-speed="2000"><?php echo esc_html($settings['clients_count']); ?></div>
                                        <div class="operator"><?php echo esc_html($settings['clients_count_operator']); ?></div>
                                    </div>
                                    <span class="medium"><?php echo esc_html($settings['clients_text']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 pl-50 pl-md-15 pl-xs-15">
                        <h2 class="title split-text"><?php echo esc_html($settings['main_title']); ?></h2>
                        <p class="split-text"><?php echo esc_html($settings['description']); ?></p>
                        <ul class="list-style-two mt-20">
                            <?php foreach ( $settings['list_items'] as $item ) : ?>
                                <li><?php echo esc_html($item['list_item_text']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-xl-3">
                        <div class="address-card wow fadeInRight">
                             <div class="thumb">
                            <img src="<?php echo esc_url($settings['image_three']['url']); ?>" alt="Image Not Found">
                        </div>
                            <div class="info">
                                <h4><?php echo esc_html($settings['warehouse_title']); ?></h4>
                                <p><?php echo esc_html($settings['warehouse_address']); ?></p>
                                <ul>
                                    <?php foreach ( $settings['contact_items'] as $item ) : ?>
                                        <li><a href="<?php echo esc_url($item['contact_link']['url']); ?>"><i class="<?php echo esc_attr($item['contact_icon']); ?>"></i> <?php echo esc_html($item['contact_text']); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
