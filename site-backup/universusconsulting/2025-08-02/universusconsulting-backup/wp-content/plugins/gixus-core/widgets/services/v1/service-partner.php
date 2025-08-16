<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Services_Partner_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'services_partner_widget';
    }

    public function get_title() {
        return __( 'Services Partner Widget', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-team-members';
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
            'sub_title',
            [
                'label' => __( 'Sub Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Partners', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Worked with <br> Largest Brands', 'gixus-core' ),
            ]
        );

        // Repeater for Partner Logos
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'partner_logo',
            [
                'label' => __( 'Partner Logo', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/brand/11.png',
                ],
            ]
        );

        $this->add_control(
            'partner_items',
            [
                'label' => __( 'Partner Logos', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'partner_logo' => [
                            'url' => get_template_directory_uri() . '/assets/img/brand/11.png',
                        ],
                    ],
                    [
                        'partner_logo' => [
                            'url' => get_template_directory_uri() . '/assets/img/brand/22.png',
                        ],
                    ],
                    [
                        'partner_logo' => [
                            'url' => get_template_directory_uri() . '/assets/img/brand/33.png',
                        ],
                    ],
                    [
                        'partner_logo' => [
                            'url' => get_template_directory_uri() . '/assets/img/brand/44.png',
                        ],
                    ],
                    [
                        'partner_logo' => [
                            'url' => get_template_directory_uri() . '/assets/img/brand/55.png',
                        ],
                    ],
                    [
                        'partner_logo' => [
                            'url' => get_template_directory_uri() . '/assets/img/brand/66.png',
                        ],
                    ],
                ],
                'title_field' => '{{{ partner_logo.url }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="partner-style-two-area default-padding bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 partner-style-one">
                        <div class="partner-style-one-item bg-theme text-light" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/img/shape/22.png'); ?>);">
                            <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                            <h2 class="title"><?php echo wp_kses_post( $settings['main_title'] ); ?></h2>
                        </div>
                    </div>
                    <?php foreach ( $settings['partner_items'] as $index => $item ) : ?>
                        <div class="col-lg-3 col-md-6 partner-style-one">
                            <div class="partner-style-one-item wow fadeInLeft" data-wow-delay="<?php echo esc_attr( ( $index * 100 ) . 'ms' ); ?>">
                                <img src="<?php echo esc_url( $item['partner_logo']['url'] ); ?>" alt="Universus Consulting Service">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php
    }
}
