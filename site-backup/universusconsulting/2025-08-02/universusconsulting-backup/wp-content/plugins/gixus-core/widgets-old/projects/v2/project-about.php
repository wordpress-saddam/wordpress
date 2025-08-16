<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Project_About_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'project_about_widget';
    }

    public function get_title() {
        return __( 'Project About Widget', 'gixus-core' );
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
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'about-style-five-area default-padding mt--70', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label' => __( 'Main Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Crafting unique solutions with precision and passion.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'completed_projects',
            [
                'label' => __( 'Completed Projects', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 28,
            ]
        );

        $this->add_control(
            'projects_label',
            [
                'label' => __( 'Projects Label', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Completed Projects', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'operator',
            [
                'label' => __( 'Operator', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'K',
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast.', 'gixus-core' ),
            ]
        );
		
		$this->add_control(
            'learn_more_text',
            [
                'label' => __( 'Learn More Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Learn More About Us',
            ]
        );

        $this->add_control(
            'learn_more_link',
            [
                'label' => __( 'Learn More Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'about-us-2.html',
                ],
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/thumb/7.jpg',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="<?php echo esc_html( $settings['class'] ); ?>">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumb-style-five">
                            <img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="Image Not Found">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-80 pl-md-15 pl-xs-15">
                        <div class="about-style-five-info">
                            <div class="text-scroll-animation">
                            <h2 class="title"><?php echo esc_html( $settings['main_title'] ); ?></h2>
<!--                             <div class="d-flex mt-50"> -->
<!--                                 <div class="left">
                                    <div class="achivement-style-one">
                                        <div class="fun-fact">
                                            <div class="counter">
                                                <div class="timer" data-to="<?php echo esc_html( $settings['completed_projects'] ); ?>" data-speed="1000"><?php echo esc_html( $settings['completed_projects'] ); ?></div>
                                                <div class="operator"><?php echo esc_html( $settings['operator'] ); ?></div>
                                            </div>
                                            <span class="medium"><?php echo esc_html( $settings['projects_label'] ); ?></span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="info">
                                    <p><?php echo esc_html( $settings['description'] ); ?></p>
<!--                                     <a href="<?php echo esc_url( $settings['learn_more_link']['url'] ); ?>" class="btn-read-more"><?php echo esc_html( $settings['learn_more_text'] ); ?> <i class="fas fa-long-arrow-right"></i></a> -->
                                </div>
<!--                             </div> -->
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
