<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_About_Team_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'about_team';
    }

    public function get_title() {
        return __( 'About Page Team', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-person';
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
            'layout',
            [
                'label' => __( 'Layout', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'layout1' => __( 'Background Grey', 'gixus-core' ),
                    'layout2' => __( 'Background White', 'gixus-core' ),
                ],
                'default' => 'layout1',
            ]
        );

        // Team Heading
        $this->add_control(
            'team_heading',
            [
                'label' => __( 'Team Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Meet the talented team from our company', 'gixus-core' ),
            ]
        );

        // Team Subheading
        $this->add_control(
            'team_subheading',
            [
                'label' => __( 'Subheading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Team Members', 'gixus-core' ),
            ]
        );

        // Repeater for Team Members
        $repeater = new \Elementor\Repeater();

        // Member Name
        $repeater->add_control(
            'member_name',
            [
                'label' => __( 'Member Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'John Doe', 'gixus-core' ),
            ]
        );

        // Member Title
        $repeater->add_control(
            'member_title',
            [
                'label' => __( 'Member Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'CEO & Founder', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'member_link',
            [
                'label' => __( 'Member Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'example.com', 'gixus-core' ),
                'default' => [
                    'url' => '#',
                ],
                'label_block' => true,
            ]
        );

        // Member Image
        $repeater->add_control(
            'member_image',
            [
                'label' => __( 'Member Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/team/v4.jpg',
                ],
            ]
        );

        // Member Email Link
        $repeater->add_control(
            'member_email_link',
            [
                'label' => __( 'Email Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'mailto:email@example.com', 'gixus-core' ),
                'default' => [
                    'url' => 'mailto:email@example.com',
                ],
                'label_block' => true,
            ]
        );

        // Member Background Image
        $repeater->add_control(
            'member_background_image',
            [
                'label' => __( 'Background Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/15.webp',
                ],
            ]
        );

        // Team Members List
        $this->add_control(
            'team_members',
            [
                'label' => __( 'Team Members', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __( 'Aleesha Brown', 'gixus-core' ),
                        'member_title' => __( 'CEO & Founder', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/v4.jpg' ],
                        'member_email_link' => [ 'url' => 'mailto:aleesha@example.com' ],
                        'member_background_image' => [ 'url' => get_template_directory_uri() . '/assets/img/shape/15.webp' ],
                    ],
                    [
                        'member_name' => __( 'Kevin Martin', 'gixus-core' ),
                        'member_title' => __( 'Product Manager', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/v5.jpg' ],
                        'member_email_link' => [ 'url' => 'mailto:kevin@example.com' ],
                        'member_background_image' => [ 'url' => get_template_directory_uri() . '/assets/img/shape/15.webp' ],
                    ],
                    [
                        'member_name' => __( 'Sarah Albert', 'gixus-core' ),
                        'member_title' => __( 'Financial Consultant', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/v1.jpg' ],
                        'member_email_link' => [ 'url' => 'mailto:sarah@example.com' ],
                        'member_background_image' => [ 'url' => get_template_directory_uri() . '/assets/img/shape/15.webp' ],
                    ],
                    [
                        'member_name' => __( 'Amanulla Joey', 'gixus-core' ),
                        'member_title' => __( 'DEVELOPER', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/v2.jpg' ],
                        'member_email_link' => [ 'url' => 'mailto:sarah@example.com' ],
                        'member_background_image' => [ 'url' => get_template_directory_uri() . '/assets/img/shape/15.webp' ],
                    ],
                    [
                        'member_name' => __( 'Kamal Abraham', 'gixus-core' ),
                        'member_title' => __( 'CO FOUNDER', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/v3.jpg' ],
                        'member_email_link' => [ 'url' => 'mailto:sarah@example.com' ],
                        'member_background_image' => [ 'url' => get_template_directory_uri() . '/assets/img/shape/15.webp' ],
                    ],
                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );
        
         $this->add_control(
        'background_color',
        [
            'label' => __( 'Background Color', 'gixus-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .team-style-two-item' => 'background-color: {{VALUE}};',
            ],
        ]
    );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Start Team 
        ============================================= -->
        <?php if($settings['layout'] === 'layout1'): ?>
        <div class="team-style-two-area default-padding bg-gray">
        <?php else: ?>
        <div class="team-style-two-area default-padding">
        <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title"><?php echo esc_html( $settings['team_subheading'] ); ?></h4>
                            <h2 class="title split-text"><?php echo esc_html( $settings['team_heading'] ); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ( $settings['team_members'] as $index => $member ) : ?>
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 team-style-two wow fadeInUp" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                            <div class="team-style-two-item" style="background-image: url(<?php echo esc_url( $member['member_background_image']['url'] ); ?>);">
                                <div class="thumb">
                                    <img src="<?php echo esc_url( $member['member_image']['url'] ); ?>" alt="<?php echo esc_attr( $member['member_name'] ); ?>">
                                    <?php if(!empty( $member['member_email_link']['url'] )): ?>
                                    <a href="<?php echo esc_url( $member['member_email_link']['url'] ); ?>"><i class="fas fa-envelope"></i></a>
                                    <?php endif; ?>
                                </div>
                                <div class="info">
                                    <h4><a href="<?php echo esc_url( $member['member_link']['url'] ); ?>"><?php echo esc_html( $member['member_name'] ); ?></a></h4>
                                    <span><?php echo esc_html( $member['member_title'] ); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Team -->
        <?php
    }
}
