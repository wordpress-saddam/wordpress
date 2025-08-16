<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home_Four_Quote_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_four_quote';
    }

    public function get_title() {
        return __( 'Home Four Quote', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-quote-right';
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
            'heading_text',
            [
                'label' => __( 'Heading Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Quote', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'quote_text',
            [
                'label' => __( 'Quote Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Request A Quote', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'quote_description',
            [
                'label' => __( 'Quote Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our friendly team would love to hear from you!', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/banner/18.jpg',
                ],
            ]
        );

        $this->add_control(
            'video_url',
            [
                'label' => __( 'Video URL', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'HUozIpTODZQ', // Default video ID
            ]
        );

        $this->add_control(
            'shape_image',
            [
                'label' => __( 'Shape Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/29.png',
                ],
            ]
        );

        $this->add_control(
            'contact_form_shortcode',
            [
                'label' => __( 'Contact Form 7 Shortcode', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '[contact-form-7 id="ac5b1cd" title="Home Four Quote Form"]', // Example shortcode
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="quote-style-one-area video-bg-live default-padding-top" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="shape">
                <img src="<?php echo esc_url( $settings['shape_image']['url'] ); ?>" alt="Image Not Found">
            </div>
            <div class="player shadow" data-property="{videoURL:'<?php echo esc_html( $settings['video_url'] ); ?>',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:10, opacity:1, quality:'default'}"></div>
            <div class="container">
                <div class="row">
                    <div class="quote-text">
                        <h1 class="split-text"><?php echo esc_html( $settings['heading_text'] ); ?></h1>
                    </div>
                    <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6">
                        <div class="quote-style-one wow fadeInLeft">
                            <h2 class="title"><?php echo esc_html( $settings['quote_text'] ); ?></h2>
                            <p><?php echo esc_html( $settings['quote_description'] ); ?></p>
                                <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
