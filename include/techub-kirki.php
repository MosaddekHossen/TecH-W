<?php
new \Kirki\Panel(
    'header_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('TecHub Options', 'tecHub'),
        'description' => esc_html__('Header Panel Description.', 'tecHub'),
    ]
);

// tecHub_header_info
function tecHub_header_info()
{
    new \Kirki\Section(
        'header_info_section',
        [
            'title'       => esc_html__('Header address Section', 'tecHub'),
            'description' => esc_html__('Header Section Description.', 'tecHub'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_email',
            'label'       => esc_html__('Header Email', 'tecHub'),
            'section'     => 'header_info_section',
            'default'     => esc_html__('techubinfo@mail.com', 'tecHub'),
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'header_location',
            'label'       => esc_html__('Header Location', 'tecHub'),
            'section'     => 'header_info_section',
            'default'     => esc_html__('Manchester 21, Zurich, CH', 'tecHub'),
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'header_phone',
            'label'       => esc_html__('Header Location', 'tecHub'),
            'section'     => 'header_info_section',
            'default'     => esc_html__('(+00) 678 345 98568', 'tecHub'),
        ]
    );
}
tecHub_header_info();

// tecHub_header_page_name
function tecHub_header_page_name()
{
    new \Kirki\Section(
        'header_page_option',
        [
            'title'       => esc_html__('Header Page Option', 'tecHub'),
            'description' => esc_html__('Header Section Description.', 'tecHub'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_1',
            'label'       => esc_html__('Page Option 01', 'tecHub'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('Faq', 'tecHub'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_01_url',
            'label'       => esc_html__('Page Option 01 Url', 'tecHub'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('#', 'tecHub'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_2',
            'label'       => esc_html__('Page Option 02', 'tecHub'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('Service', 'tecHub'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_02_url',
            'label'       => esc_html__('Page Option 02 Url', 'tecHub'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('#', 'tecHub'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_3',
            'label'       => esc_html__('Page Option 03', 'tecHub'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('Contact', 'tecHub'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_03_url',
            'label'       => esc_html__('Page Option 03 Url', 'tecHub'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('#', 'tecHub'),
        ]
    );
}
tecHub_header_page_name();

// tecHub_header_page_name
function tecHub_side_info()
{
    new \Kirki\Section(
        'header_side_info',
        [
            'title'       => esc_html__('Side info', 'tecHub'),
            'description' => esc_html__('Side info section', 'tecHub'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'side_title',
            'label'       => esc_html__('Page Option 01', 'tecHub'),
            'section'     => 'header_side_info',
            'default'     => esc_html__('Contact us', 'tecHub'),
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'side_des',
            'label'       => esc_html__('Page Option 02', 'tecHub'),
            'section'     => 'header_side_info',
            'default'     => esc_html__('Techub is the partner of choice for many of the world`s leading enterprises. We help businesses development.', 'tecHub'),
        ]
    );
}
tecHub_side_info();

// tecHub_social_section
function tecHub_social_section()
{
    new \Kirki\Section(
        'tecHub_social_info',
        [
            'title'       => esc_html__('Social Icon', 'tecHub'),
            'description' => esc_html__('Side info section here', 'tecHub'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_facebook',
            'label'    => esc_html__('Facebook Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('#', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_twitter',
            'label'    => esc_html__('Twitter Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('#', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_instagram',
            'label'    => esc_html__('Instagram Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_pinterest',
            'label'    => esc_html__('Pinterest Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_youtube',
            'label'    => esc_html__('Youtube Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('#', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_linkedin',
            'label'    => esc_html__('Linkedin Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('#', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_flickr',
            'label'    => esc_html__('Flickr Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_vimeo',
            'label'    => esc_html__('Vimeo Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tecHub_behance',
            'label'    => esc_html__('Behance Url', 'tecHub'),
            'section'  => 'tecHub_social_info',
            'default'  => esc_html__('', 'tecHub'),
            'priority' => 10,
        ]
    );
}
tecHub_social_section();

// tecHub_header_logo
function tecHub_header_logo()
{
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__('Header Logo And Button', 'tecHub'),
            'description' => esc_html__('Header Section Description.', 'tecHub'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'logo_url',
            'label'       => esc_html__('Logo', 'tecHub'),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'button_text',
            'label'    => esc_html__('Button text', 'tecHub'),
            'section'  => 'header_logo_section',
            'default'  => esc_html__('Get a Quete', 'tecHub'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'button_url',
            'label'    => esc_html__('Button url', 'tecHub'),
            'section'  => 'header_logo_section',
            'default'  => esc_html__('#', 'tecHub'),
            'priority' => 10,
        ]
    );
}
tecHub_header_logo();

// tecHub_header_page_name
function tecHub_footer_copyright()
{
    new \Kirki\Section(
        'tecHub_copyright',
        [
            'title'       => esc_html__('CopyRight', 'tecHub'),
            'description' => esc_html__('CopyRight section', 'tecHub'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'tecHub_copyright_text',
            'label'       => esc_html__('Copyright', 'tecHub'),
            'section'     => 'tecHub_copyright',
            'default'     => esc_html__('Full Copyright & Design By @ Theme pure - 2024', 'tecHub'),
        ]
    );
}
tecHub_footer_copyright();
