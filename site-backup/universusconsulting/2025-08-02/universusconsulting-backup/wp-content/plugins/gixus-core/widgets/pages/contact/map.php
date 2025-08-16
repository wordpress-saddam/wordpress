<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_pages_contact_map_Section_Widget extends \Elementor\Widget_Base {
    
    public function get_name() {
        return 'pages_contact_map';
    }

    public function get_title() {
        return __( 'Contact Map', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-map';
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'map_section',
            [
                'label' => __( 'Contact Map Information', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'map_embed_code',
            [
                'label' => __( 'Google Maps Embed Code', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48388.929990966964!2d-74.00332!3d40.711233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1653598669477!5m2!1sen!2sus',
            ]
        );

         $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        ?>
        <!-- Start Map -->
        <div class="maps-area bg-gray overflow-hidden">
            <div class="google-maps">
                <iframe src="<?php echo esc_url( $settings['map_embed_code'] ); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!-- End Map -->
        <?php
    }
}
