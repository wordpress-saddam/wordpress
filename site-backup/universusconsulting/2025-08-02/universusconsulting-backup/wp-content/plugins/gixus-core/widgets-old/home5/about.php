<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home5_About_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home5_about';
    }

    public function get_title() {
        return __( 'Home Five About', 'gixus-core' );
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
            'sub_title',
            [
                'label' => __( 'Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'About Us', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Meet the executives driving our success.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature ganiay direction.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Main Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/5.jpg',
                ],
            ]
        );

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

        $this->add_control(
            'growth_rate',
            [
                'label' => __( 'Growth Rate', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '3.8 X', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'growth_description',
            [
                'label' => __( 'Growth Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Economical growth', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'thumbnail_image',
            [
                'label' => __( 'Thumbnail Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/2.jpg',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="about-style-two-area default-padding">
            <div class="container">
                <div class="row align-center">

                    <div class="col-xl-6 offset-xl-1 col-lg-6 order-lg-last">
                        <div class="about-style-two-thumb">
                            <div class="thumb">
                                <img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="Image Not Found">
                                <div class="shape-card text-light wow fadeInLeft" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/shape/21.png'); ?>');">
                                    <h4><?php echo esc_html( $settings['main_title'] ); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-6">
                        <h4 class="sub-title"><?php echo esc_html( $settings['sub_title'] ); ?></h4>
                        <h2 class="title"><?php echo esc_html( $settings['main_title'] ); ?></h2>
                        <p><?php echo esc_html( $settings['description'] ); ?></p>
                        <div class="card-style-two mt-40 wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumb">
                                <img src="<?php echo esc_url( $settings['thumbnail_image']['url'] ); ?>" alt="Image Not Found">
                                <a href="<?php echo esc_url( $settings['video_link']['url'] ); ?>" class="popup-youtube video-play-button"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="info">
                                <h2><?php echo esc_html( $settings['growth_rate'] ); ?></h2>
                                <h5><?php echo esc_html( $settings['growth_description'] ); ?></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }
}
