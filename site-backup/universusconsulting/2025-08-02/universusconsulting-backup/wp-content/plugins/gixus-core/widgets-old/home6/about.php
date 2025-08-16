<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home6_About_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_about';
    }

    public function get_title() {
        return __( 'Home Six About', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-information-box';
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
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/35.png',
                ],
            ]
        );

        $this->add_control(
            'about_text',
            [
                'label' => __( 'About Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Artificial Intelligence refers to the development of computer systems that can perform tasks that would typically require human intelligence...', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'about_description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'There are generally two types of AI: Narrow or Weak AI, which is designed to perform specific tasks...', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'explore_button_text',
            [
                'label' => __( 'Explore Button Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Explore More', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'explore_button_link',
            [
                'label' => __( 'Explore Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'about_images',
            [
                'label' => __( 'About Images', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'about_image',
                        'label' => __( 'About Image', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/thumb/8.jpg',
                        ],
                    ],
                ],
                'default' => [
                    [
                        'about_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/thumb/8.jpg',
                        ],
                    ],
                    [
                        'about_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/thumb/10.jpg',
                        ],
                    ],
                    [
                        'about_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/thumb/11.jpg',
                        ],
                    ],
                    [
                        'about_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/thumb/9.jpg',
                        ],
                    ],
                ],
                'title_field' => '{{{ about_image.url }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="about-style-six-area text-light">
            <div class="about-style-six-items" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
                <div class="container">
                    <div class="row align-center">
                        <div class="col-lg-5">
                            <div class="about-style-six-info">
                                <p><?php echo $settings['about_text']; ?></p>
                                <p><?php echo $settings['about_description']; ?></p>
                                <?php if(!empty($settings['explore_button_link']['url'])): ?>
                                <a class="btn btn-md btn-theme animation mt-20" href="<?php echo esc_url( $settings['explore_button_link']['url'] ); ?>">
                                    <?php echo esc_html( $settings['explore_button_text'] ); ?>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="about-style-six-thumb">
                                <?php foreach ( $settings['about_images'] as $image ) : ?>
                                    <div class="item wow fadeInUp">
                                        <img src="<?php echo esc_url( $image['about_image']['url'] ); ?>" alt="Image Not Found">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}