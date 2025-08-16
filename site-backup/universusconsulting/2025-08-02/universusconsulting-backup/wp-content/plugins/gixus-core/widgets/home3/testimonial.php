<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Elementor_gixus_Home3_Testimonial_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_three_testimonial';
    }

    public function get_title() {
        return __( 'Home Three Testimonial', 'gixus-core' );
    }

    public function get_icon() {
        return 'fa fa-comments';
    }

    public function get_categories() {
        return [ 'general' ];
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
            'testimonials',
            [
                'label' => __( 'Testimonials', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'image',
                        'label' => __( 'Profile Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/v3.jpg',
                        ],
                    ],
                    [
                        'name' => 'quote_icon',
                        'label' => __( 'Quote Icon', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/quote.png',
                        ],
                    ],
                    [
                        'name' => 'title',
                        'label' => __( 'Testimonial Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'The best service ever', 'gixus-core' ),
                    ],
                    [
                        'name' => 'description',
                        'label' => __( 'Testimonial Description', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( '“Targetingconsultation discover apartments...”', 'gixus-core' ),
                    ],
                    [
                        'name' => 'author_name',
                        'label' => __( 'Author Name', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Matthew J. Wyman', 'gixus-core' ),
                    ],
                    [
                        'name' => 'author_position',
                        'label' => __( 'Author Position', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Senior Consultant', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    [
                        'image' => ['url' => get_template_directory_uri() . '/assets/img/team/v3.jpg'],
                        'quote_icon' => ['url' => get_template_directory_uri() . '/assets/img/quote.png'],
                        'title' => __( 'The best service ever', 'gixus-core' ),
                        'description' => __( '“Targetingconsultation discover apartments...”', 'gixus-core' ),
                        'author_name' => __( 'Matthew J. Wyman', 'gixus-core' ),
                        'author_position' => __( 'Senior Consultant', 'gixus-core' ),
                    ],
                    [
                        'image' => ['url' => get_template_directory_uri() . '/assets/img/team/v1.jpg'],
                        'quote_icon' => ['url' => get_template_directory_uri() . '/assets/img/quote.png'],
                        'title' => __( 'Awesome opportunities', 'gixus-core' ),
                        'description' => __( '“Consultation discover apartments...”', 'gixus-core' ),
                        'author_name' => __( 'Anthom Bu Spar', 'gixus-core' ),
                        'author_position' => __( 'Marketing Manager', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

        // Style Tab (You can add additional style controls here)
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ( $settings['testimonials'] ) {
            echo '<div class="testimonial-style-three-area bg-gray default-padding">';
            echo '<div class="container">';
            echo '<div class="row align-center">';
            echo '<div class="col-lg-10 offset-lg-1">';
            echo '<div class="testimonial-style-three-items">';
            echo '<div class="testimonial-style-three-carousel swiper">';
            echo '<div class="swiper-wrapper">';

            // Loop through each testimonial
            foreach ( $settings['testimonials'] as $testimonial ) {
                echo '<div class="swiper-slide">';
                echo '<div class="testimonial-style-three">';

                // Profile Image
                echo '<div class="thumb">';
                echo '<img src="' . esc_url( $testimonial['image']['url'] ) . '" alt="' . esc_attr__( 'Universus Consulting Service', 'gixus-core' ) . '">';
                echo '<div class="icon">';
                echo '<img src="' . esc_url( $testimonial['quote_icon']['url'] ) . '" alt="' . esc_attr__( 'Universus Consulting Service', 'gixus-core' ) . '">';
                echo '</div>';
                echo '</div>';

                // Testimonial Content
                echo '<div class="item">';
                echo '<div class="content">';
                echo '<div class="top">';
                echo '<h2>' . esc_html( $testimonial['title'] ) . '</h2>';
                echo '</div>';
                echo '<p>' . esc_html( $testimonial['description'] ) . '</p>';
                echo '</div>';

                // Author Info
                echo '<div class="provider">';
                echo '<div class="info">';
                echo '<h4>' . esc_html( $testimonial['author_name'] ) . '</h4>';
                echo '<span>' . esc_html( $testimonial['author_position'] ) . '</span>';
                echo '</div>';
                echo '</div>';

                echo '</div>'; // End of item
                echo '</div>'; // End of testimonial-style-three
                echo '</div>'; // End of swiper-slide
            }

            echo '</div>'; // End of swiper-wrapper

            // Carousel Navigation
            echo '<div class="swiper-nav-left">';
            echo '<div class="swiper-button-prev"></div>';
            echo '<div class="swiper-button-next"></div>';
            echo '</div>';

            echo '</div>'; // End of testimonial-style-three-carousel
            echo '</div>'; // End of testimonial-style-three-items
            echo '</div>'; // End of col-lg-10
            echo '</div>'; // End of row
            echo '</div>'; // End of container
            echo '</div>'; // End of testimonial-style-three-area
        }
    }

}
