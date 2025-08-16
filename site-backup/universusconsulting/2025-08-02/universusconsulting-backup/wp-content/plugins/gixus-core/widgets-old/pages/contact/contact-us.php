<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_pages_contact_Us_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'pages_pages_contact_us';
    }

    public function get_title() {
        return __( 'Pages Contact Us', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-mail';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        // Content Tab
        $this->start_controls_section(
            'pages_contact_info_section',
            [
                'label' => __( 'Contact Information', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'shape_background',
            [
                'label' => __( 'Shape Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/illustration/14.png',
                ],
            ]
        );

        // Contact Information Subtitle
        $this->add_control(
            'pages_contact_sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Have Questions?', 'gixus-core' ),
            ]
        );

        // Contact Information Title
        $this->add_control(
            'pages_contact_title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Contact Information', 'gixus-core' ),
            ]
        );

        // Contact Information Description
        $this->add_control(
            'pages_contact_description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.', 'gixus-core' ),
            ]
        );

        // Contact Methods
        $this->add_control(
            'pages_contact_methods',
            [
                'label' => __( 'Contact Methods', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'method_title',
                        'label' => __( 'Method Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Hotline', 'gixus-core' ),
                    ],
                    [
                        'name' => 'method_link',
                        'label' => __( 'Method Link', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => '#',
                        ],
                    ],
                    [
                        'name' => 'method_icon',
                        'label' => __( 'Method Icon', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-phone-alt',
                            'library' => 'fa-solid',
                        ],
                    ],
                    [
                        'name' => 'method_content',
                        'label' => __( 'Method Content', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( '+4733378901', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    [
                        'method_title' => __( 'Hotline', 'gixus-core' ),
                        'method_link' => [
                            'url' => 'tel:+4733378901',
                        ],
                        'method_icon' => [
                            'value' => 'fas fa-phone-alt',
                            'library' => 'solid',
                        ],
                        'method_content' => __( '+4733378901', 'gixus-core' ),
                    ],
                    [
                        'method_title' => __( 'Our Location', 'gixus-core' ),
                        'method_link' => [
                            'url' => '#',
                        ],
                        'method_icon' => [
                            'value' => 'fas fa-map-marker-alt',
                            'library' => 'solid',
                        ],
                        'method_content' => __( '55 Main Street, The Grand Avenue 2nd Block, <br> New York City', 'gixus-core' ),
                    ],
                    [
                        'method_title' => __( 'Official Email', 'gixus-core' ),
                        'method_link' => [
                            'url' => 'mailto:wordpressriver@gmail.com',
                        ],
                        'method_icon' => [
                            'value' => 'fas fa-envelope-open-text',
                            'library' => 'solid',
                        ],
                        'method_content' => __( 'wordpressriver@gmail.com', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ method_title }}}',
            ]
        );

        // Contact Form Title
        $this->add_control(
            'pages_contact_form_title',
            [
                'label' => __( 'Contact Form Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Send us a Message', 'gixus-core' ),
            ]
        );

        // Contact Form 7 Shortcode
        $this->add_control(
            'pages_contact_us_form_shortcode',
            [
                'label' => __( 'Contact Us Forminator Shortcode', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '[forminator_form id="3091"]', // Replace with your form ID
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="contact-style-one-area overflow-hidden default-padding">
            <div class="contact-shape">
                <?php if(!empty($settings['shape_background']['url'])): ?>
                <img src="<?php echo esc_url( $settings['shape_background']['url'] ); ?>" alt="Image Not Found">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="row align-center">
					<div class="col-xl-12 pr-50 pr-md-15 pr-xs-15">
						<div class="site-heading text-center">
							<h2 class="title split-text"><?php echo esc_html( $settings['pages_contact_title'] ); ?></h2>
						</div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="contact-stye-one col-lg-8 pl-60 pl-md-15 pl-xs-15">
                        <div class="contact-form-style-one">
                            <h3 class="heading"><?php echo esc_html( $settings['pages_contact_form_title'] ); ?></h3>
                            <?php echo do_shortcode( $settings['pages_contact_us_form_shortcode'] ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
