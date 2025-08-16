<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home_Four_Testimonial_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home_four_testimonial';
    }

    public function get_title() {
        return __( 'Home Four Testimonial', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-testimonial';
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
            'testimonial_image',
            [
                'label' => __( 'Testimonial Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/illustration/13.png',
                ],
            ]
        );

        // Repeater for Testimonials
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'testimonial_title',
            [
                'label' => __( 'Testimonial Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'The best service ever', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'testimonial_content',
            [
                'label' => __( 'Testimonial Content', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering”', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'provider_name',
            [
                'label' => __( 'Provider Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Matthew J. Wyman', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'provider_position',
            [
                'label' => __( 'Provider Position', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Senior Consultant', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'testimonials',
            [
                'label' => __( 'Testimonials', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'testimonial_title' => __( 'The best service ever', 'gixus-core' ),
                        'testimonial_content' => __( '“Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering”', 'gixus-core' ),
                        'provider_name' => __( 'Matthew J. Wyman', 'gixus-core' ),
                        'provider_position' => __( 'Senior Consultant', 'gixus-core' ),
                    ],
                    [
                        'testimonial_title' => __( 'Awesome opportunities', 'gixus-core' ),
                        'testimonial_content' => __( '“Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point”', 'gixus-core' ),
                        'provider_name' => __( 'Anthom Bu Spar', 'gixus-core' ),
                        'provider_position' => __( 'Marketing Manager', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ testimonial_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="testimonial-style-one-area default-padding mt-80">
            <div class="container">
                <div class="testimonial-style-one-items bg-dark text-light">
                    <div class="row align-center">
                        <div class="col-xl-5">
                            <div class="testimonial-style-one-thumb">
                                <img src="<?php echo esc_url( $settings['testimonial_image']['url'] ); ?>" alt="Universus Consulting Service">
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="testimonial-style-one-carousel swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ( $settings['testimonials'] as $testimonial ) : ?>
                                        <div class="swiper-slide">
                                            <div class="testimonial-style-one">
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="top">
                                                            <h2><?php echo esc_html( $testimonial['testimonial_title'] ); ?></h2>
                                                        </div>
                                                        <p>
                                                            <?php echo esc_html( $testimonial['testimonial_content'] ); ?>
                                                        </p>
                                                    </div>
                                                    <div class="provider">
                                                        <div class="info">
                                                            <h4><?php echo esc_html( $testimonial['provider_name'] ); ?></h4>
                                                            <span><?php echo esc_html( $testimonial['provider_position'] ); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Navigation -->
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
