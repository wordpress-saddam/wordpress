<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Service_Details_Widget_Two extends \Elementor\Widget_Base {

    public function get_name() {
        return 'service_details_two';
    }

    public function get_title() {
        return __( 'Service Details Widget Two', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-info';
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
            'title',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Meet the executives driving our success.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Businesses operate in various industries, including technology, finance, healthcare, retail, and manufacturing, among others. They play a crucial role in the economy by providing goods, services, and employment never fruit up Pasture imagin. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/about/1.jpg',
                ],
            ]
        );

        $this->add_control(
            'video_url',
            [
                'label' => __( 'Video URL', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=aTC_RNYtEb0',
                ],
            ]
        );

        $this->add_control(
            'growth_value',
            [
                'label' => __( 'Growth Value', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '3.8 X',
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

        // Award Winning Company Section
        $this->add_control(
            'award_icon',
            [
                'label' => __( 'Award Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/4.png',
                ],
            ]
        );

        $this->add_control(
            'award_text',
            [
                'label' => __( 'Award Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Award Winning Company', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="services-content bg-gray default-padding">
            <div class="container">
                <div class="about-style-one-items">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="thumb-style-one">
                                <img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="Universus Consulting Service">
                                <?php if(!empty($settings['video_url']['url'])): ?>
                                <a href="<?php echo esc_url( $settings['video_url']['url'] ); ?>" class="popup-youtube video-play-button">
                                    <i class="fas fa-play"></i>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 pl-50 pl-md-15 pl-xs-15">
                            <div class="about-style-one-info">
                                <div class="content">
                                    <h2 class="title split-text"><?php echo esc_html( $settings['title'] ); ?></h2>
                                    <p><?php echo esc_html( $settings['description'] ); ?></p>
                                </div>
                                <ul class="card-list">
                                    <?php if(!empty($settings['award_icon']['url'])): ?>
                                    <li class="wow fadeInUp">
                                        <img src="<?php echo esc_url( $settings['award_icon']['url'] ); ?>" alt="Universus Consulting Service">
                                        <h5><?php echo esc_html( $settings['award_text'] ); ?></h5>
                                    </li>
                                    <?php endif; ?>
                                    <li class="wow fadeInUp">
                                        <h2><?php echo esc_html( $settings['growth_value'] ); ?></h2>
                                        <h5><?php echo esc_html( $settings['growth_description'] ); ?></h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}