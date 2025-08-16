<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home3_Hero_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home3_hero';
    }

    public function get_title() {
        return __( 'Home Three Hero', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-banner';
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

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Creative <strong>Agency</strong>', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'intro_video_url',
            [
                'label' => __( 'Intro Video URL', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=aTC_RNYtEb0',
                ],
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Bndulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'author_name',
            [
                'label' => __( 'Author Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Creative Digital Marketing', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'author_role',
            [
                'label' => __( 'Author Role', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Autin Barber', 'gixus-core' ),
            ]
        );

        // Image controls
        $this->add_control(
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/6.jpg',
                ],
            ]
        );

        $this->add_control(
            'thumb_image',
            [
                'label' => __( 'Thumbnail Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/6.jpg',
                ],
            ]
        );

        $this->add_control(
            'about_us_link',
            [
                'label' => __( 'About Us Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'about-us-2.html',
                ],
            ]
        );

        // Video Text and Icon
        $this->add_control(
            'video_text',
            [
                'label' => __( 'Video Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Watch Intro Video', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'video_icon',
            [
                'label' => __( 'Video Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'fas fa-play',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="banner-style-six-area overflow-hidden bg-cover" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-11">
                        <div class="banner-style-six-item">
                            <h2 class="split-text"><?php echo  $settings['main_title'] ; ?></h2>
                            <div class="d-flex justify-content-between">
                                <div class="video-card wow fadeInDown" data-wow-delay="500ms">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url( $settings['thumb_image']['url'] ); ?>" alt="Universus Consulting Service">
                                        <?php if(!empty($settings['intro_video_url']['url'])): ?>
                                        <a href="<?php echo esc_url( $settings['intro_video_url']['url'] ); ?>" class="popup-youtube video-play-button"><i class="<?php echo esc_attr( $settings['video_icon'] ); ?>"></i></a>
                                        <?php endif; ?>
                                    </div>
                                    <h4><?php echo esc_html( $settings['video_text'] ); ?></h4>
                                </div>
                                <div class="card-style-one mt-30 wow fadeInLeft" data-wow-delay="800ms">
                                    <p><?php echo esc_html( $settings['description'] ); ?></p>
                                    <div class="item-author">
                                        <div class="left">
                                            <h5><?php echo esc_html( $settings['author_name'] ); ?></h5>
                                            <span><?php echo esc_html( $settings['author_role'] ); ?></span>
                                        </div>
                                        <?php if(!empty($settings['about_us_link']['url'])): ?>
                                        <a href="<?php echo esc_url( $settings['about_us_link']['url'] ); ?>"><i class="fas fa-long-arrow-right"></i></a>
										<?php endif; ?>
                                    </div>
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