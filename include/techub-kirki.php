<?php
new \Kirki\Panel(
    'header_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('TecHub Options', 'kirki'),
        'description' => esc_html__('Header Panel Description.', 'kirki'),
    ]
);

// tecHub_header_info
function tecHub_header_info()
{
    new \Kirki\Section(
        'header_info_section',
        [
            'title'       => esc_html__('Header address Section', 'kirki'),
            'description' => esc_html__('Header Section Description.', 'kirki'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_email',
            'label'       => esc_html__('Header Email', 'kirki'),
            'section'     => 'header_info_section',
            'default'     => esc_html__('techubinfo@mail.com', 'kirki'),
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'header_location',
            'label'       => esc_html__('Header Location', 'kirki'),
            'section'     => 'header_info_section',
            'default'     => esc_html__('Manchester 21, Zurich, CH', 'kirki'),
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
            'title'       => esc_html__('Header Page Option', 'kirki'),
            'description' => esc_html__('Header Section Description.', 'kirki'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_1',
            'label'       => esc_html__('Page Option 01', 'kirki'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('Faq', 'kirki'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_2',
            'label'       => esc_html__('Page Option 02', 'kirki'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('Service', 'kirki'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'header_page_3',
            'label'       => esc_html__('Page Option 03', 'kirki'),
            'section'     => 'header_page_option',
            'default'     => esc_html__('Contact', 'kirki'),
        ]
    );
}
tecHub_header_page_name();

function tecHub_header_logo()
{
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__('Header Logo', 'kirki'),
            'description' => esc_html__('Header Section Description.', 'kirki'),
            'panel'       => 'header_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'logo_url',
            'label'       => esc_html__('Logo', 'kirki'),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        ]
    );
}
tecHub_header_logo();
