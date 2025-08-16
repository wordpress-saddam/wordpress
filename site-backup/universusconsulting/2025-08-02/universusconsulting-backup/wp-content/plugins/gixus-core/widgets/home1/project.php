<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Home1_Project_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home1_project';
    }

    public function get_title() {
        return __( 'Home One Project', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-code';
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
            'main_heading',
            [
                'label' => __( 'Main Heading', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Have a view of our amazing projects with our clients', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We’re a creative branding and communications company of creative thinkers, strategists, digital innovators, for your company', 'gixus-core' ),
            ]
        );
		
		$this->add_control(
            'bgimg',
            [
                'label' => __( 'BG Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/shape/1.jpg',
                ],
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label' => __( 'List Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => implode("\n", [
                    'Satisfaction guarantee',
                    'Ontime delivery'
                ]),
                'description' => __( 'Add each list item on a new line.', 'gixus-core' ),
            ]
        );

        // Button Link Control

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => __( 'Button Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'project.html',
                ],
                'label_block' => true,
            ]
        );

        // Repeater for Project Items
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'project_title',
            [
                'label' => __( 'Project Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Strategy', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_subtitle',
            [
                'label' => __( 'Project Subtitle', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Digital business planning', 'gixus-core' ),
            ]
        );

        $repeater->add_control(
            'project_image',
            [
                'label' => __( 'Project Image', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'project_link',
            [
                'label' => __( 'Project Link', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'project-details.html',
                ],
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'project_icon',
            [
                'label' => __( 'Project Icon', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-link',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'project_items',
            [
                'label' => __( 'Project Items', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'project_title' => __( 'Strategy', 'gixus-core' ),
                        'project_subtitle' => __( 'Digital business planning', 'gixus-core' ),
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/portfolio/5.jpg',
                        ],
                        'project_link' => [
                            'url' => 'project-details.html',
                        ],
                        'project_icon' => [
                            'value' => 'fas fa-link',
                            'library' => 'solid',
                        ],
                    ],
                    [
                        'project_title' => __( 'Partnership', 'gixus-core' ),
                        'project_subtitle' => __( 'Business program management', 'gixus-core' ),
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/portfolio/6.jpg',
                        ],
                        'project_link' => [
                            'url' => 'project-details.html',
                        ],
                        'project_icon' => [
                            'value' => 'fas fa-link',
                            'library' => 'solid',
                        ],
                    ],
                    [
                        'project_title' => __( 'Branding', 'gixus-core' ),
                        'project_subtitle' => __( 'Strategy development', 'gixus-core' ),
                        'project_image' => [
                            'url' => get_template_directory_uri() . '/assets/img/portfolio/7.jpg',
                        ],
                        'project_link' => [
                            'url' => 'project-details.html',
                        ],
                        'project_icon' => [
                            'value' => 'fas fa-link',
                            'library' => 'solid',
                        ],
                    ],
                ],
                'title_field' => '{{{ project_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="project-style-one-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 pr-60 pr-md-15 pr-xs-15">
                        <div class="project-style-one-info bg-cover text-light wow fadeInRight" style="background-image: url(<?php echo esc_url( $settings['bgimg']['url'] ); ?>);">
                            <h2><?php echo esc_html( $settings['main_heading'] ); ?></h2>
                            <p><?php echo esc_html( $settings['description'] ); ?></p>
<!--                             <ul class="list-style-two mt-20">
                                <?php
                                $list_items = explode( "\n", $settings['list_items'] );
                                foreach ( $list_items as $item ) {
                                    echo '<li>' . esc_html( $item ) . '</li>';
                                }
                                ?>
                            </ul> -->
                            <a class="btn-style-two" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>">
                                <i class="<?php echo esc_attr( $settings['button_text']['value'] ); ?>"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="project-style-one-items">
                            <div class="accordion" id="projectAccordion" style="margin-top: -45px">
                                <?php foreach ( $settings['project_items'] as $index => $item ) : ?>
                                    <div class="accordion-item">
<!--                                         <p class="accordion-header h4-to-h3" id="heading<?php echo $index; ?>"> -->
                                            <button class="accordion-button <?php echo $index === 0 ? 'collapsed' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
												<b><span style="font-size: 20px;"><?php echo esc_html( $item['project_title'] ); ?></span></b>
                                                <p class="h4-to-h3"><?php echo esc_html( $item['project_subtitle'] ); ?></p>
                                            </button>
<!--                                         </p> -->
<!--                                         <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#projectAccordion">
                                            <div class="accordion-body">
                                                <div class="portfolio-style-one-thumb">
                                                    <img src="<?php echo esc_url( $item['project_image']['url'] ); ?>" alt="Universus Consulting Service">
                                                    <a href="<?php echo esc_url( $item['project_link']['url'] ); ?>">
                                                        <i class="<?php echo esc_attr( $item['project_icon']['value'] ); ?>"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
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
