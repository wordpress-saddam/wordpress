<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_About_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_about';
    }

    public function get_title() {
        return __( 'Home One About', 'gixus-core' );
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
            'layout',
            [
                'label' => __( 'Layout', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'layout1' => __( 'Layout 1 Busisness Consulting', 'gixus-core' ),
                    'layout2' => __( 'Layout 2 About Us', 'gixus-core' ),
                ],
                'default' => 'layout1',
            ]
        );

        $this->add_control(
            'about_image',
            [
                'label' => __( 'Main Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/about/1.jpg',
                ],
            ]
        );

        $this->add_control(
            'video_link',
            [
                'label' => __( 'Video Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://www.youtube.com/watch?v=aTC_RNYtEb0', 'gixus-core' ),
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=aTC_RNYtEb0',
                ],
            ]
        );

        $this->add_control(
            'main_heading',
            [
                'label' => __( 'Main Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Meet the executives driving our success.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Businesses operate in various industries, including technology, finance, healthcare, retail, and manufacturing, among others. They play a crucial role in the economy by providing goods, services, and employment never fruit up Pasture imagin..', 'gixus-core' ),
            ]
        );

        // Repeater for List Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/4.png',
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => __( 'List Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Award Winning Company', 'gixus-core' ),
            ]
        );
		
		$repeater->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label' => __( 'List Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Award Winning Company', 'gixus-core' ),
						'sub_title' => __( '', 'gixus-core' ),
                        'icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/4.png',
                        ],
                    ],
                    [
                        'title' => __( 'Economical Growth', 'gixus-core' ),
						'sub_title' => __( '3.8 X', 'gixus-core' ),
                        'icon' => [
                            'url' => '', // No icon for the second item in the example
                        ],
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <?php if($settings['layout'] === 'layout1'): ?>
        <div class="about-style-one-area default-padding-top">
        <?php else: ?>
        <div class="about-style-one-area shape-less default-padding">
        <?php endif; ?>
            <div class="container">
                <div class="about-style-one-items">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="thumb-style-one">
                                <img src="<?php echo esc_url( $settings['about_image']['url'] ); ?>" alt="Image Not Found">
								<?php if(!empty($settings['video_link']['url'])): ?>
                                <a href="<?php echo esc_url( $settings['video_link']['url'] ); ?>" class="popup-youtube video-play-button"><i class="fas fa-play"></i></a>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 pl-50 pl-md-15 pl-xs-15">
                            <div class="about-style-one-info">
                                <div class="content">
                                    <h2 class="title split-text"><?php echo $settings['main_heading']; ?></h2>
                                    <p><?php echo $settings['description']; ?></p>
                                </div>
                                <ul class="card-list">
                                    <?php foreach ( $settings['list_items'] as $item ) : ?>
                                        <li class="wow fadeInUp">
                                            <?php if ( $item['icon']['url'] ) : ?>
                                                <img src="<?php echo esc_url( $item['icon']['url'] ); ?>" alt="Image Not Found">
                                            <?php endif; ?>
											<?php if(!empty($item['sub_title'])): ?>
											<h2><?php echo esc_html( $item['sub_title'] ); ?></h2>
											<?php endif; ?>
                                            <h5><?php echo esc_html( $item['title'] ); ?></h5>
                                        </li>
                                    <?php endforeach; ?>
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
