<?php

if (!class_exists('Redux'))
    {
    return;
    }
function newIconFont() 
    { 
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-all.css' );
    }

add_action( 'redux/page/gixus_options/enqueue', 'newIconFont' );

$opt_name = "gixus_options";
$theme    = wp_get_theme();
$args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name') ,
    'display_version' => $theme->get('Version') ,
    'menu_type' => 'menu',
    'allow_sub_menu' => true,
    'menu_title'        => esc_html__( 'Gixus Options', 'gixus' ),
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => false,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => false,
    'update_notice' => false,
    'customizer' => false,
    'page_priority' => 3,
    'page_parent' => 'themes.php',
    'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
    'page_icon' => 'icon-themes',
    'page_slug' => 'themeoptions',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => true
);
Redux::setArgs( $opt_name, $args );

Redux::setSection($opt_name, array(
    'title' => esc_html__('PreLoader', 'gixus'),
    'id' => 'preloader',
    'icon' => 'fas fa-spinner',
    'fields' => array(

        array(
            'id' => 'preloader_switch',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable', 'gixus'),
            'default' => true,
            'on' => esc_html__('Enable', 'gixus'),
            'off' => esc_html__('Disable', 'gixus')
        ),
        
        array(
            'title' => esc_html__('PreLoader Text', 'gixus'), 
            'id' => 'preloader',                         
            'type' => 'text',                            
            'default' => esc_html__('GIXUS', 'gixus'),       
            'indent' => true                             
        ),
        
        array(
            'title'     => esc_html__( 'PreLoader Image', 'gixus' ),
            'id'        => 'preloader_img',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/assets/img/logo-icon.png'
                ), 
            'indent'    => true
        ),

    ),
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Post Settings', 'gixus'),
    'id' => 'post-settings',
    'desc'   => __( 'Settings for displaying posts', 'gixus' ),
    'icon'   => 'fas fa-file-alt',
    'fields' => array(

        array(
              'title'     => esc_html__( 'Blog Standard Template', 'gixus' ),
              'id'        => 'blog-standard',
              'type'      => 'section',
              'indent'    => true
        ),

        array(
            'id'       => 'category_selection_1',
            'type'     => 'select',
            'multi'    => true, // Allow multiple selections
            'title'    => __( 'Select Categories', 'gixus' ),
            'subtitle' => __( 'Choose categories to display posts from.', 'gixus' ),
            'data'     => 'categories',  // Pull categories dynamically
            'default'  => array(),
        ),

        array(
            'id'       => 'number_of_posts_1',
            'type'     => 'text', 
            'title'    => __( 'Number of Posts to Display', 'gixus' ),
            'subtitle' => __( 'Set the number of posts to display on the page.', 'gixus' ),
            'validate' => 'numeric', 
            'default'  => '5',
            'icon'     => 'fas fa-list-ol', 
        ),

        array(
              'title'     => esc_html__( 'Blog Grid Two Column', 'gixus' ),
              'id'        => 'blog-two',
              'type'      => 'section',
              'indent'    => true
        ),

        array(
            'id'       => 'category_selection_2',
            'type'     => 'select',
            'multi'    => true, // Allow multiple selections
            'title'    => __( 'Select Categories', 'gixus' ),
            'subtitle' => __( 'Choose categories to display posts from.', 'gixus' ),
            'data'     => 'categories',  // Pull categories dynamically
            'default'  => array(),
        ),

        array(
            'id'       => 'number_of_posts_2',
            'type'     => 'text', 
            'title'    => __( 'Number of Posts to Display', 'gixus' ),
            'subtitle' => __( 'Set the number of posts to display on the page.', 'gixus' ),
            'validate' => 'numeric', 
            'default'  => '5',
            'icon'     => 'fas fa-list-ol', 
        ),

        array(
              'title'     => esc_html__( 'Blog Grid Three Column', 'gixus' ),
              'id'        => 'blog-three',
              'type'      => 'section',
              'indent'    => true
        ),

        array(
            'id'       => 'category_selection_3',
            'type'     => 'select',
            'multi'    => true, // Allow multiple selections
            'title'    => __( 'Select Categories', 'gixus' ),
            'subtitle' => __( 'Choose categories to display posts from.', 'gixus' ),
            'data'     => 'categories',  // Pull categories dynamically
            'default'  => array(),
        ),

        array(
            'id'       => 'number_of_posts_3',
            'type'     => 'text', 
            'title'    => __( 'Number of Posts to Display', 'gixus' ),
            'subtitle' => __( 'Set the number of posts to display on the page.', 'gixus' ),
            'validate' => 'numeric', 
            'default'  => '5',
            'icon'     => 'fas fa-list-ol', 
        ),



    ),
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Styling', 'gixus') ,
    'id' => esc_html__('gixus_color', 'gixus') ,
    'icon' => 'fas fa-edit',
    'fields' => array(

    array(
            'title'     => esc_html__( 'Color Schemes', 'gixus' ),
            'id'        => 'customcolors',
            'type'      => 'section',
            'indent'    => true,
    ),

    array(
            'title'     => esc_html__( 'Black Color', 'gixus' ),
            'id'        => 'colorcode1',
            'type'      => 'color',
            'default'  => '#000000',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Dark Color', 'gixus' ),
            'id'        => 'colorcode2',
            'type'      => 'color',
            'default'  => '#1f2b38',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Dark Secondary Color', 'gixus' ),
            'id'        => 'colorcode3',
            'type'      => 'color',
            'default'  => '#022b6d',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Dark Optional Color', 'gixus' ),
            'id'        => 'colorcode4',
            'type'      => 'color',
            'default'  => '#3e00a7',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'White Color', 'gixus' ),
            'id'        => 'colorcode5',
            'type'      => 'color',
            'default'  => '#ffffff',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Primary Color', 'gixus' ),
            'id'        => 'colorcode6',
            'type'      => 'color',
            'default'  => '#246BFD',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Secondary Color', 'gixus' ),
            'id'        => 'colorcode7',
            'type'      => 'color',
            'default'  => '#0846C6',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Optional Color', 'gixus' ),
            'id'        => 'colorcode8',
            'type'      => 'color',
            'default'  => '#ff214a',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Color Style Two', 'gixus' ),
            'id'        => 'colorcode9',
            'type'      => 'color',
            'default'  => '#f94735',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Title Colors', 'gixus' ),
            'id'        => 'customcolors2',
            'type'      => 'section',
            'indent'    => true,
    ),

    array(
            'title'     => esc_html__( 'Heading Color', 'gixus' ),
            'id'        => 'colorcode10',
            'type'      => 'color',
            'default'  => '#04000b',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Paragraph Color', 'gixus' ),
            'id'        => 'colorcode11',
            'type'      => 'color',
            'default'  => '#666666',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'BG Gray Color', 'gixus' ),
            'id'        => 'colorcode12',
            'type'      => 'color',
            'default'  => '#F7F7F7',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'BG Gray Secondary Color', 'gixus' ),
            'id'        => 'colorcode13',
            'type'      => 'color',
            'default'  => '#D8E7EF',
            'validate' => 'color',
    ),

    array(
            'title'     => esc_html__( 'Gradient Colors', 'gixus' ),
            'id'        => 'customcolors3',
            'type'      => 'section',
            'indent'    => true,
    ),

    array(
        'title'     => esc_html__( 'BG Gradient', 'gixus' ),
        'id'       => 'color-gra1',
        'type'     => 'color_gradient',
        'default'  => array(
            'from' => '#246BFD',
            'to'   => '#3e00a7', 
    ),
        'transparent' => false,
),

    array(
        'title'     => esc_html__( 'BG Reverse Gradient', 'gixus' ),
        'id'       => 'color-gra2',
        'type'     => 'color_gradient',
        'default'  => array(
            'from' => '#f94735',
            'to'   => '#ff214a', 
    ),
    'transparent' => false,
),
        
        array(
        'title'     => esc_html__( 'Button Gradient', 'gixus' ),
        'id'       => 'color-gra3',
        'type'     => 'color_gradient',
        'default'  => array(
            'from' => '#246BFD',
            'to'   => '#a200be', 
    ),
    'transparent' => false,
),


)
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Typography', 'gixus') ,
    'id' => esc_html__('typography1', 'gixus') ,
    'desc'    => esc_html__('You can specify your body and heading font here', 'gixus'),
    'icon' => 'el-text-height',
    'subsection' => false,
    'fields' => array(

        array( 
            'id'          => 'body-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Body Font', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'output'      => array('body'),
            'units'       =>'px',
            'line-height' => false,
            'subtitle'    => esc_html__('specify the body font properties', 'gixus'),
            'default'     => array(
                'color'       => '#666666', 
                'font-weight'  => '400', 
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '16px', 
            ),
        ),
        
         array( 
            'id'          => 'p-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Paragraph Font', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'output'      => array('p'),
            'units'       =>'px',
            'line-height' => false,
            'subtitle'    => esc_html__('specify the body font properties', 'gixus'),
            'default'     => array(
                'color'       => '#666666', 
                'font-weight'  => '400', 
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '16px', 
            ),
        ),

        array( 
            'id'          => 'nav-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Navigation Font', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('nav.navbar ul.nav>li>a'),
            'units'       =>'px',
            'subtitle'    => esc_html__('specify the menu font properties', 'gixus'),
        ),
        
        array( 
            'id'          => 'nav-typography-hover',
            'type'        => 'typography', 
            'title'       => esc_html__('Navigation Font Hover', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('nav.navbar ul.nav>li>a:hover'),
            'units'       =>'px',
            'subtitle'    => esc_html__('specify the menu font properties', 'gixus'),
        ),
        
         array( 
    'id'          => 'nav-typography1',
    'type'        => 'typography', 
    'title'       => esc_html__('Navigation Font SubMenu', 'gixus'),
    'google'      => true, 
    'font-backup' => true,
    'line-height' => false,
    'output'      => array(
        'nav.navbar.validnavs ul li.dropdown ul.dropdown-menu li a'
    ),
    'units'       => 'px',
    'subtitle'    => esc_html__('Specify the submenu font properties', 'gixus'),
),
        
        array( 
    'id'          => 'nav-typography1-hover',
    'type'        => 'typography', 
    'title'       => esc_html__('Navigation Font SubMenu Hover', 'gixus'),
    'google'      => true, 
    'font-backup' => true,
    'line-height' => false,
    'output'      => array(
        'nav.navbar.validnavs ul li.dropdown ul.dropdown-menu li a:hover'
    ),
    'units'       => 'px',
    'subtitle'    => esc_html__('Specify the submenu font properties', 'gixus'),
),



        array( 
            'id'          => 'h1-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Heading H1', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('h1'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '40px', 
                'font-weight' => 600,
            ),
        ),

        array( 
            'id'          => 'h2-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Heading H2', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'output'      => array('h2'),
            'line-height' => false,
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '36px', 
                'font-weight' => 600,
            ),
        ),

        array( 
            'id'          => 'h3-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Heading H3', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('h3'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '28px', 
                'font-weight' => 600,
            ),
        ),

        array( 
            'id'          => 'h4-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Heading H4', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('h4'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '22px',
                'font-weight' => 600, 
            ),
        ),

        array( 
            'id'          => 'h5-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Heading H5', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('h5'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '18px',
                'font-weight' => 600, 
            ),
        ),

        array( 
            'id'          => 'h6-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Heading H6', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('h6'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '14px', 
                'font-weight' => 600,
            ),
        ),

        array( 
            'id'          => 'title-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Title', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('.title'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '50px',
                'font-weight' => 600,
            ),
        ),

        array( 
            'id'          => 'subtitle-typography',
            'type'        => 'typography', 
            'title'       => esc_html__('Sub Title', 'gixus'),
            'google'      => true, 
            'font-backup' => true,
            'line-height' => false,
            'output'      => array('.sub-title'),
            'units'       =>'px',
            'subtitle'    => esc_html__('Typography option with each property can be called individually', 'gixus'),
            'default'     => array(
                'font-family' => 'Outfit', 
                'google'      => true,
                'font-size'   => '20px',
                'font-weight' => 500,
            ),
        ),

)
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('404 Page', 'gixus') ,
    'id' => esc_html__('404page', 'gixus') ,
    'icon' => 'el el-ban-circle',
    'subsection' => false,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'gixus' ),
            'id'        => '404_heading',
            'type'      => 'text',
            'default'   => esc_html__( '404', 'gixus' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Sub Heading', 'gixus' ),
            'id'        => '404_sub',
            'type'      => 'text',
            'default'   => esc_html__( 'SORRY PAGE WAS NOT FOUND!', 'gixus' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Button Text', 'gixus' ),
            'id'        => '404_bttext',
            'type'      => 'text',
            'default'   => esc_html__( 'Back to home', 'gixus' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'BG Image', 'gixus' ),
            'id'        => '404_bgimg1',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/assets/img/shape/44-left.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'BG Image Two', 'gixus' ),
            'id'        => '404_bgimg2',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/assets/img/shape/44-right.png'
                ), 
            'indent'    => true
        ),
)
));