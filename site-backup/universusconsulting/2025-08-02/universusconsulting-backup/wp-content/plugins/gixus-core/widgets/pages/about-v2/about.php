<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_About_Two_Section_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'about_two_section';
    }

    public function get_title() {
        return __( 'About Two Section', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-info-circle';
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

        // Main Image Control
        $this->add_control(
            'main_image',
            [
                'label' => __( 'Main Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/5.jpg',
                ],
            ]
        );

        // Shape Background Image Control
        $this->add_control(
            'shape_background',
            [
                'label' => __( 'Shape Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/21.png',
                ],
            ]
        );
        
        $this->add_control(
            'background_color',
            [
                'label' => __( 'Background Color', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-style-two-thumb .thumb::after' => 'border-top: 5px solid {{VALUE}}; border-right: 5px solid {{VALUE}};',
                ],
            ]
        );

        // Shape Text Control
        $this->add_control(
            'shape_text',
            [
                'label' => __( 'Shape Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Empower your business with us!', 'gixus-core' ),
            ]
        );

        // Subtitle Control
        $this->add_control(
            'subtitle',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'About Us', 'gixus-core' ),
            ]
        );

        // Title Control
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature ganiay direction.', 'gixus-core' ),
            ]
        );

        // Text Content Control
        $this->add_control(
            'content_text',
            [
                'label' => __( 'Content Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Contrasted dissimilar get joy you instrument out reasonably...', 'gixus-core' ),
            ]
        );

        // Card Image Control
        $this->add_control(
            'card_image',
            [
                'label' => __( 'Card Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/2.jpg',
                ],
            ]
        );

        // Video Link Control
        $this->add_control(
            'video_link',
            [
                'label' => __( 'Video Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=HAnw168huqA',
                ],
            ]
        );

        // Card Title Control
        $this->add_control(
            'card_title',
            [
                'label' => __( 'Card Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '3.8 X', 'gixus-core' ),
            ]
        );

        // Card Subtitle Control
        $this->add_control(
            'card_subtitle',
            [
                'label' => __( 'Card Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Economical growth', 'gixus-core' ),
            ]
        );
        
        

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$settings['shape_text'] = 'Empower your<br> business<br> with us!';
        ?>
        <!-- Start About 
        ============================================= -->
        <div class="about-style-two-area default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-6 offset-xl-1 col-lg-6 order-lg-last">
                        <div class="about-style-two-thumb">
                            <div class="thumb">
                                <img src="<?php echo esc_url( $settings['main_image']['url'] ); ?>" alt="Main Image">
                                <div class="shape-card text-light wow fadeInLeft" style="background-image: url(<?php echo esc_url( $settings['shape_background']['url'] ); ?>);">
									<p><?php echo $settings['shape_text']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-5 col-lg-6">
<!--                         <h4 class="sub-title"><?php echo esc_html( $settings['subtitle'] ); ?></h4> -->
                        <h1 class="title"><?php echo esc_html( $settings['title'] ); ?></h1>
                        <p>
                            <?php echo esc_html( $settings['content_text'] ); ?>
                        </p>
<!--                         <div class="card-style-two mt-40 wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumb">
                                <img src="<?php echo esc_url( $settings['card_image']['url'] ); ?>" alt="Card Image">
                                <?php if(!empty($settings['video_link']['url'])): ?>
                                <a href="<?php echo esc_url( $settings['video_link']['url'] ); ?>" class="popup-youtube video-play-button"><i class="fas fa-play"></i></a>
                                <?php endif; ?>
                            </div>
                            <div class="info">
                                <h2><?php echo esc_html( $settings['card_title'] ); ?></h2>
                                <h5><?php echo esc_html( $settings['card_subtitle'] ); ?></h5>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->
        <?php
    }
}
