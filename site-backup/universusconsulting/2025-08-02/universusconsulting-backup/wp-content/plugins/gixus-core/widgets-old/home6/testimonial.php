<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Elementor_Home6_Testimonial_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_testimonial';
    }

    public function get_title() {
        return __( 'Home Six Testimonial', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-testimonial-carousel';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'quote',
            [
                'label' => __( 'Quote Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/quote.png',
                ],
            ]
        );

        // Testimonial Items
        $this->add_control(
            'testimonial_items',
            [
                'label' => __( 'Testimonial Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'testimonial_image',
                        'label' => __( 'Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => esc_url( get_template_directory_uri() . '/assets/img/team/v3.jpg' ),
                        ],
                    ],
                    [
                        'name' => 'testimonial_quote',
                        'label' => __( 'Testimonial Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( 'The best service ever.', 'gixus-core' ),
                    ],
                    [
                        'name' => 'testimonial_quote_text',
                        'label' => __( 'Testimonial Text', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( '“Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering”', 'gixus-core' ),
                    ],
                    [
                        'name' => 'testimonial_name',
                        'label' => __( 'Provider Name', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Matthew J. Wyman', 'gixus-core' ),
                    ],
                    [
                        'name' => 'testimonial_position',
                        'label' => __( 'Provider Position', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Senior Consultant', 'gixus-core' ),
                    ],
                ],
                'default' => [
                    [
                        'testimonial_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/v3.jpg',
                        ],
                        'testimonial_quote' => __( 'The best service ever', 'gixus-core' ),
                        'testimonial_quote_text' => __( '“Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering”', 'gixus-core' ),
                        'testimonial_name' => __( 'Matthew J. Wyman', 'gixus-core' ),
                        'testimonial_position' => __( 'Senior Consultant', 'gixus-core' ),
                    ],
                    [
                        'testimonial_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/team/v1.jpg',
                        ],
                        'testimonial_quote' => __( 'Awesome opportunities', 'gixus-core' ),
                        'testimonial_quote_text' => __( '“Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering point', 'gixus-core' ),
                        'testimonial_name' => __( 'Anthom Bu Spar', 'gixus-core' ),
                        'testimonial_position' => __( 'Marketing Manager', 'gixus-core' ),
                    ],
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="testimonial-style-three-area text-light relative">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-12">
                        <div class="testimonial-style-three-items">
                            <div class="testimonial-style-three-carousel swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ( ! empty( $settings['testimonial_items'] ) ) :
                                        foreach ( $settings['testimonial_items'] as $item ) :
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="testimonial-style-three">
                                                    <div class="thumb">
                                                        <img src="<?php echo esc_url( $item['testimonial_image']['url'] ); ?>" alt="Image Not Found">
                                                        <div class="icon">
                                                            <img src="<?php echo esc_url( $settings['quote']['url'] ); ?>" alt="Image Not Found">
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="content">
                                                            <div class="top">
                                                                <h2><?php echo esc_html( $item['testimonial_quote'] ); ?></h2>
                                                            </div>
                                                            <p>
                                                                <?php echo esc_html( $item['testimonial_quote_text'] ); ?>
                                                            </p>
                                                        </div>
                                                        <div class="provider">
                                                            <div class="info">
                                                                <h4><?php echo esc_html( $item['testimonial_name'] ); ?></h4>
                                                                <span><?php echo esc_html( $item['testimonial_position'] ); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                                <div class="swiper-nav-left">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}