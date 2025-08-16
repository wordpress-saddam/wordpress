<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Service_Details_Widget_Four extends \Elementor\Widget_Base {

    public function get_name() {
        return 'service_details_four';
    }

    public function get_title() {
        return __( 'Service Details Widget Four', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-info-box';
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
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/22.png',
                ],
            ]
        );

        $this->add_control(
            'about_subtitle',
            [
                'label' => __( 'About Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'About Us', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'about_title',
            [
                'label' => __( 'About Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Providing technology for smart IT solutions', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'about_description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Iure, laudantium, tempore.', 'gixus-core' ),
            ]
        );

        // Expertise Controls
        $this->add_control(
            'expertise_title',
            [
                'label' => __( 'Expertise Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Expertise', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'experience_years_title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Years of Experience', 'gixus-core' ),
            ]
        );


        $this->add_control(
            'experience_years',
            [
                'label' => __( 'Number', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 26,
            ]
        );
        
        $this->add_control(
            'experience_plus',
            [
                'label' => __( 'Sign', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '+',
            ]
        );

        $this->add_control(
            'expertise_list',
            [
                'label' => __( 'Expertise List', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'default' => [
                    [ 'expertise' => __( 'Network security', 'gixus-core' ) ],
                    [ 'expertise' => __( 'Mobile networking', 'gixus-core' ) ],
                    [ 'expertise' => __( 'Cloud computing', 'gixus-core' ) ],
                    [ 'expertise' => __( 'Information technology consulting', 'gixus-core' ) ],
                    [ 'expertise' => __( 'Backup solutions', 'gixus-core' ) ],
                    [ 'expertise' => __( 'Hardware support', 'gixus-core' ) ],
                ],
                'fields' => [
                    [
                        'name' => 'expertise',
                        'label' => __( 'Expertise', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Expertise Item', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ expertise }}}',
            ]
        );

        $this->add_control(
            'about_image',
            [
                'label' => __( 'About Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/about/4.jpg', // Default image
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="about-style-three-area default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="about-style-three-info">
                            <p class="sub-title h4-to-p"><?php echo esc_html( $settings['about_subtitle'] ); ?></p>
                            <h2 class="title split-text"><?php echo esc_html( $settings['about_title'] ); ?></h2>
                            <p class="split-text"><?php echo esc_html( $settings['about_description'] ); ?></p>
                            <div class="info-grid mt-50">
                                <div class="left-info wow fadeInLeft" data-wow-delay="200ms">
                                    <div class="fun-fact-card-two">
                                        <p class="sub-title blue-h4-to-p"><?php echo esc_html( $settings['expertise_title'] ); ?></p>
                                        <div class="counter-title">
                                            <div class="counter">
                                                <div class="timer" data-to="<?php echo esc_attr( $settings['experience_years'] ); ?>" data-speed="2000"><?php echo esc_html( $settings['experience_years'] ); ?></div>
                                                <div class="operator"><?php echo esc_html( $settings['experience_plus'] ); ?></div>
                                            </div>
                                        </div>
                                        <span class="medium"><?php echo esc_html( $settings['experience_years_title'] ); ?></span>
                                    </div>
                                </div>
                                <div class="right-info bg-gradient text-light wow fadeInLeft" data-wow-delay="400ms">
                                    <ul class="list-style-three">
                                        <?php foreach ( $settings['expertise_list'] as $item ) : ?>
                                            <li><?php echo esc_html( $item['expertise'] ); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
								<style>.about-style-three-info .right-info::after{
										background: url(<?php echo esc_url( $settings['bgimg']['url'] ); ?>);
									}</style>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="thumb-style-two wow fadeInUp">
                            <img src="<?php echo esc_url( $settings['about_image']['url'] ); ?>" alt="Image Not Found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
