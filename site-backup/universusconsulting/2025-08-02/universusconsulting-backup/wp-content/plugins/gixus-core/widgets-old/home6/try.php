<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Elementor_Home6_Try_Gixus_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_try_gixus';
    }

    public function get_title() {
        return __( 'Home Six Try Gixus', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-cta';
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
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => esc_url( get_template_directory_uri() . '/assets/img/shape/9.jpg' ),
                ],
            ]
        );

        $this->add_control(
            'try_text',
            [
                'label' => __( 'Try Gixus Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Try Gixus Now', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'icon_image',
            [
                'label' => __( 'Icon Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => esc_url( get_template_directory_uri() . '/assets/img/icon/robot.png' ),
                ],
            ]
        );

        $this->add_control(
            'icon_link',
            [
                'label' => __( 'Icon Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'gixus-core' ),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
        <div class="try-gixus-area default-padding text-light text-center bg-cover" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="try-gixus">
                            <div class="text">
                                <h2 class="wow fadeInUp"><?php echo esc_html( $settings['try_text'] ); ?></h2>
                            </div>
                            <div class="icon">
                                <a href="<?php echo esc_url( $settings['icon_link']['url'] ); ?>"><img src="<?php echo esc_url( $settings['icon_image']['url'] ); ?>" alt="Image Not Found"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
