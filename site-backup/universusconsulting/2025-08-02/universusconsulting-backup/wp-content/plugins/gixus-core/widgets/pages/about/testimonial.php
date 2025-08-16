<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Pages_Testimonial_Section_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'pages_testimonial_section';
    }

    public function get_title() {
        return __( 'Pages Testimonial Section', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-testimonial-carousel';
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
            'class',
            [
                'label' => __( 'Class', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'testimonial-style-two-area default-padding bg-cover', 'gixus-core' ),
            ]
        );

        // Background Image Control
        $this->add_control(
            'background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/3.jpg',
                ],
            ]
        );
        
        $this->add_control(
            'quote_image',
            [
                'label' => __( 'Quote Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/quote.png',
                ],
            ]
        );

        // Testimonial Headline
        $this->add_control(
            'testimonial_headline',
            [
                'label' => __( 'Testimonial Headline', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Over 50K clients and 5,000 projects across the globe.', 'gixus-core' ),
            ]
        );

        // Testimonial Review Text
        $this->add_control(
            'review_text',
            [
                'label' => __( 'Review Text', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Excellent 18,560+ Reviews', 'gixus-core' ),
            ]
        );

        // Rating Score
        $this->add_control(
            'rating_score',
            [
                'label' => __( 'Rating Score', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '4.8/5', 'gixus-core' ),
            ]
        );

        // Repeater for Testimonials
        $repeater = new \Elementor\Repeater();

        // Testimonial Quote
        $repeater->add_control(
            'testimonial_quote',
            [
                'label' => __( 'Testimonial Quote', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“Targeting consultation apartments. ndulgence creative under folly death wrote cause her way spite. Plan upon yet way get cold spot its week."', 'gixus-core' ),
            ]
        );

        // Testimonial Author Image
        $repeater->add_control(
            'author_image',
            [
                'label' => __( 'Author Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/team/v1.jpg',
                ],
            ]
        );

        // Testimonial Author Name
        $repeater->add_control(
            'author_name',
            [
                'label' => __( 'Author Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Matthew J. Wyman', 'gixus-core' ),
            ]
        );

        // Testimonial Author Title
        $repeater->add_control(
            'author_title',
            [
                'label' => __( 'Author Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Senior Consultant', 'gixus-core' ),
            ]
        );

        // Testimonial Repeater Control
        $this->add_control(
            'testimonials',
            [
                'label' => __( 'Testimonials', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'testimonial_quote' => __( '“Targeting consultation apartments. ndulgence creative under folly death wrote cause her way spite. Plan upon yet way get cold spot its week."', 'gixus-core' ),
                        'author_name' => __( 'Matthew J. Wyman', 'gixus-core' ),
                        'author_title' => __( 'Senior Consultant', 'gixus-core' ),
                        'author_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/v1.jpg' ],
                    ],
                    [
                        'testimonial_quote' => __( '“Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week."', 'gixus-core' ),
                        'author_name' => __( 'Anthom Bu Spar', 'gixus-core' ),
                        'author_title' => __( 'Marketing Manager', 'gixus-core' ),
                        'author_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/v2.jpg' ],
                    ],
                ],
                'title_field' => '{{{ author_name }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Start Testimonials 
        ============================================= -->
        <div class="<?php echo esc_attr( $settings['class'] ); ?>" style="background-image: url(<?php echo esc_url( $settings['background_image']['url'] ); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-two-info">
                            <?php if(!empty($settings['quote_image']['url'])): ?>
                            <div class="icon">
                                <img src="<?php echo esc_url( $settings['quote_image']['url'] ); ?>" alt="Icon">
                            </div>
                            <?php endif; ?>
                            <h2 class="split-text"><?php echo esc_html( $settings['testimonial_headline'] ); ?></h2>
                            <div class="review-card">
<!--                                 <h6><?php echo esc_html( $settings['review_text'] ); ?></h6> -->
                                <div class="d-flex">
                                    <div class="icon">
                                        <?php $rating_score = round( floatval( $settings['rating_score'] ) );
                                        for ( $i = 0; $i < $rating_score; $i++ ) { ?>
                                                <i class="fas fa-star"></i>
                                        <?php } ?>
                                    </div>
                                    <span><?php echo esc_html( $settings['rating_score'] ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pl-60 pl-md-15 pl-xs-15">
                        <div class="testimonial-style-two-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <?php foreach ( $settings['testimonials'] as $testimonial ) : ?>
                                    <!-- Single item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-two">
                                            <div class="item">
                                                <div class="text-info">
                                                    <p><?php echo esc_html( $testimonial['testimonial_quote'] ); ?></p>
                                                </div>
                                                <div class="content">
                                                    <div class="thumb">
                                                        <img src="<?php echo esc_url( $testimonial['author_image']['url'] ); ?>" alt="Author Image">
                                                    </div>
                                                    <div class="info">
                                                        <p class="h4-to-p"><?php echo esc_html( $testimonial['author_name'] ); ?></p>
                                                        <span><?php echo esc_html( $testimonial['author_title'] ); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonials -->
        <?php
    }
}
