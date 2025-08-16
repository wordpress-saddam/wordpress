<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Testimonial_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_testimonial';
    }

    public function get_title() {
        return __( 'Home One Testimonial', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }

    public function get_categories() {
        return [ 'gixus' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section1',
            [
                'label' => __( 'Title Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => __( 'Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'subtitle1',
            [
                'label' => __( 'Sub Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'gixus-core' ),
            ]
        );

        $this->end_controls_section();

        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'gixus-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'testimonial_class',
            [
                'label' => __( 'Testimonial Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'testimonial-style-one-area', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Main Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/illustration/5.png',
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
                'default' => __( '“Targeting consultation discover apartments. Indulgence off under folly death wrote cause her way spite...”', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'testimonial_author',
            [
                'label' => __( 'Author Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Matthew J. Wyman', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'testimonial_position',
            [
                'label' => __( 'Author Position', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Senior Consultant', 'gixus-core' ),
            ]
        );

        // Add repeater controls to the main widget
        $this->add_control(
            'testimonial_items',
            [
                'label' => __( 'Testimonials', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'testimonial_title' => __( 'The best service ever', 'gixus-core' ),
                        'testimonial_content' => __( '“Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering”', 'gixus-core' ),
                        'testimonial_author' => __( 'Matthew J. Wyman', 'gixus-core' ),
                        'testimonial_position' => __( 'Senior Consultant', 'gixus-core' ),
                    ],
                    [
                        'testimonial_title' => __( 'Awesome opportunities', 'gixus-core' ),
                        'testimonial_content' => __( '“Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point”', 'gixus-core' ),
                        'testimonial_author' => __( 'Anthom Bu Spar', 'gixus-core' ),
                        'testimonial_position' => __( 'Marketing Manager', 'gixus-core' ),
                    ],
                ],
                'title_field' => '{{{ testimonial_author }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
    $settings = $this->get_settings_for_display();
    $testimonial_items = $settings['testimonial_items'];
    $is_single = count($testimonial_items) === 1;
    ?>
    <div class="<?php echo esc_attr($settings['testimonial_class']); ?>">
        <?php if(!empty($settings['title1']) && !empty($settings['subtitle1'])): ?>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html($settings['title1']); ?></h4>
                            <h2 class="title"><?php echo esc_html($settings['subtitle1']); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <div class="container">
            <div class="testimonial-style-one-items bg-gray-secondary">
                <div class="row align-center">
                    <div class="col-xl-5 pr-80 pr-md-15 pr-xs-15">
                        <div class="testimonial-style-one-thumb">
                            <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="Image Not Found">
                            <div class="shape">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/shape/16.png'); ?>" alt="Image Not Found">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/shape/17.png'); ?>" alt="Image Not Found">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="testimonial-style-one-carousel <?php echo $is_single ? '' : 'swiper'; ?>">
                            <div class="<?php echo $is_single ? '' : 'swiper-wrapper'; ?>">
                                <?php foreach ($testimonial_items as $item): ?>
                                    <div class="<?php echo $is_single ? '' : 'swiper-slide'; ?>">
                                        <div class="testimonial-style-one">
                                            <div class="item">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3 class="h2-to-h3"><?php echo esc_html($item['testimonial_title']); ?></h3>
                                                    </div>
                                                    <p><?php echo esc_html($item['testimonial_content']); ?></p>
                                                </div>
                                                <div class="provider">
                                                    <div class="info">
                                                        <p><?php echo esc_html($item['testimonial_author']); ?></p>
                                                        <span><?php echo esc_html($item['testimonial_position']); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <?php if (!$is_single): ?>
                                <!-- Navigation -->
                                <div class="swiper-nav-left">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

}
