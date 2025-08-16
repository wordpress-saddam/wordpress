<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home3_Team_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home3_team';
    }

    public function get_title() {
        return __( 'Home Three Team', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-users';
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
            'team_heading',
            [
                'label' => __( 'Team Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Meet the talented team from our company', 'gixus-core' ),
            ]
        );

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

        $repeater->add_control(
            'member_name',
            [
                'label' => __( 'Member Name', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'John Doe', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'member_link',
            [
                'label' => __( 'Member Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'team.html',
                ],
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'member_title',
            [
                'label' => __( 'Member Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'CEO & Founder', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'member_image',
            [
                'label' => __( 'Member Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        // Social links
        $repeater->add_control(
            'member_linkedin',
            [
                'label' => __( 'LinkedIn URL', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [ 'url' => '#' ],
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'member_dribbble',
            [
                'label' => __( 'Dribbble URL', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [ 'url' => '#' ],
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'member_facebook',
            [
                'label' => __( 'Facebook URL', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [ 'url' => '#' ],
                'label_block' => true,
            ]
        );

        // Team Row 1
        $this->add_control(
            'team_row_1',
            [
                'label' => __( 'Team Row 1 Members', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __( 'Aleesha Brown', 'gixus-core' ),
                        'member_title' => __( 'CEO & Founder', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/2.jpg' ],
                    ],
                    [
                        'member_name' => __( 'Kevin Martin', 'gixus-core' ),
                        'member_title' => __( 'Product Manager', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/3.jpg' ],
                    ],
                    [
                        'member_name' => __( 'Sarah Albert', 'gixus-core' ),
                        'member_title' => __( 'Financial Consultant', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/4.jpg' ],
                    ],
                    [
                        'member_name' => __( 'Amanulla Joey', 'gixus-core' ),
                        'member_title' => __( 'Developer', 'gixus-core' ),
                        'member_image' => [ 'url' => get_template_directory_uri() . '/assets/img/team/7.jpg' ],
                    ],
                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
       <!-- Start Team Area 
    ============================================= -->
    <div class="team-style-three-area default-padding bottom-less">
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
                        <?php foreach ($settings['team_row_1'] as $index => $member) : ?>
                <!-- Single item -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="team-style-one-item wow fadeInUp" data-wow-delay="<?php echo esc_attr( ( $index * 200 ) . 'ms' ); ?>">
                        <div class="thumb">
                            <img src="<?php echo esc_url($member['member_image']['url']); ?>" alt="Universus Consulting Service">
                            <div class="social-overlay">
                                 <ul>
                                      <li><a href="<?php echo esc_url($member['member_linkedin']['url']); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="<?php echo esc_url($member['member_dribbble']['url']); ?>"><i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="<?php echo esc_url($member['member_facebook']['url']); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                 </ul>
                                 <div class="icon">
                                     <i class="fas fa-plus"></i>
                                 </div>
                             </div>
                        </div>
                        <div class="info">
                             <span><?php echo esc_html($member['member_title']); ?></span>
                                        <h4><a href="<?php echo esc_url($member['member_link']['url']); ?>"><?php echo esc_html($member['member_name']); ?></a></h4>
                        </div>
                    </div>
                 </div>
                <!-- End Single item -->
                <?php endforeach; ?>
                </div>
        </div>
    </div>
    <!-- End Team Area -->
        <?php
    }
}
