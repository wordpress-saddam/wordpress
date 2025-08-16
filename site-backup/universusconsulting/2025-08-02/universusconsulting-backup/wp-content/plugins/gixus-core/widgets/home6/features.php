<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Elementor_Home6_Features_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'home6_features';
    }

    public function get_title() {
        return __( 'Home Six Features', 'gixus-core' );
    }

    public function get_icon() {
        return 'eicon-featured-image';
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
            'section_title',
            [
                'label' => __( 'Section Title', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Amazing feature that you will be able to use now.', 'gixus-core' ),
            ]
        );

        $this->add_control(
            'features',
            [
                'label' => __( 'Features', 'gixus-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'feature_icon',
                        'label' => __( 'Feature Icon', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/33.png',
                        ],
                    ],
                    [
                        'name' => 'feature_title',
                        'label' => __( 'Feature Title', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Auto Video Captioning', 'gixus-core' ),
                    ],
                    [
                        'name' => 'feature_description',
                        'label' => __( 'Feature Description', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( 'Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Resolve parties but she shewing.', 'gixus-core' ),
                    ],
                    [
                        'name' => 'feature_list',
                        'label' => __( 'Feature List', 'gixus-core' ),
                        'type' => \Elementor\Controls_Manager::REPEATER,
                        'fields' => [
                            [
                                'name' => 'feature_item',
                                'label' => __( 'Feature Item', 'gixus-core' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'default' => __( 'Transcription', 'gixus-core' ),
                            ],
                            [
                                'name' => 'feature_item_url1',
                                'label' => __( 'Feature Item Url', 'gixus-core' ),
                                'type' => \Elementor\Controls_Manager::URL,
                            ],
                            
                        ],
                        'default' => [
                            [
                                'feature_item' => 'Transcription',
                            ],
                            [
                                'feature_item' => 'Subtitle',
                            ],
                            [
                                'feature_item' => 'Foreign Language',
                            ],
                        ],
                        'title_field' => '{{{ feature_item }}}',
                    ],
                ],
                'default' => [
                    [
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/33.png',
                        ],
                        'feature_title' => 'Auto Video Captioning',
                        'feature_description' => 'Earnestly so do instantly pretended...',
                        'feature_list' => [
                            ['feature_item' => 'Transcription'],
                            ['feature_item' => 'Subtitle'],
                            ['feature_item' => 'Foreign Language'],
                        ],
                    ],
                    [
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/34.png',
                        ],
                        'feature_title' => 'Programming Solutions',
                        'feature_description' => 'Aarnestly so do instantly pretended...',
                        'feature_list' => [
                            ['feature_item' => 'Functionality'],
                            ['feature_item' => 'Mathmetics'],
                            ['feature_item' => 'Bug Fixing'],
                        ],
                    ],
                    [
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/35.png',
                        ],
                        'feature_title' => 'Artificial Graphics',
                        'feature_description' => 'Barnestly so do instantly pretended...',
                        'feature_list' => [
                            ['feature_item' => 'Image Generate'],
                            ['feature_item' => 'Restoration'],
                            ['feature_item' => 'Color Mix'],
                        ],
                    ],
                    [
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/36.png',
                        ],
                        'feature_title' => 'Machine Learning',
                        'feature_description' => 'Tarnestly so do instantly pretended...',
                        'feature_list' => [
                            ['feature_item' => 'Transcription'],
                            ['feature_item' => 'Subtitle'],
                            ['feature_item' => 'Foreign Language'],
                        ],
                    ],
                    [
                        'feature_icon' => [
                            'url' => get_template_directory_uri() . '/assets/img/icon/37.png',
                        ],
                        'feature_title' => 'Speak & Command',
                        'feature_description' => 'Sarnestly so do instantly pretended...',
                        'feature_list' => [
                            ['feature_item' => 'Transcription'],
                            ['feature_item' => 'Subtitle'],
                            ['feature_item' => 'Foreign Language'],
                        ],
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="feature-style-three-area text-light default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <?php if(!empty($settings['section_title'])): ?>
                        <div class="site-heading text-center">
                            <h2 class="title"><?php echo esc_html( $settings['section_title'] ); ?></h2>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ( $settings['features'] as $feature ) : ?>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp">
                            <div class="feature-style-three-item">
                                <div class="top">
                                    <img src="<?php echo esc_url( $feature['feature_icon']['url'] ); ?>" alt="Universus Consulting Service">
                                    <h4><?php echo esc_html( $feature['feature_title'] ); ?></h4>
                                </div>
                                <p><?php echo esc_html( $feature['feature_description'] ); ?></p>
                                <ul>
                                    <?php foreach ( $feature['feature_list'] as $item ) : ?>
                                        <li><a href="<?php echo esc_html( $item['feature_item_url1']['url'] ); ?>"><?php echo esc_html( $item['feature_item'] ); ?> <i class="fas fa-angle-right"></i></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php
    }
}