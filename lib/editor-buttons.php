<?php

namespace ACAC\Forms;

// Custom editor buttons
function bs_mce_buttons( $buttons ) { 
    // print_r($buttons);
    return array(
        'styleselect',
        'bold',
        'italic',
        'strikethrough',
        'bullist',
        'numlist',
        'blockquote',
        'seperator',
        'link',
        'unlink',
        'wp_more',
        'fullscreen'
        // 'wp_adv'
    );
}
add_filter( 'mce_buttons', 'ACAC\Forms\bs_mce_buttons' );

// Custom editor styles
function tiny_mce_before_init($settings) {
    $style_formats = array(
        array(
            'title' => 'Headings',
            'items' => array(
                array(
                    'title' => 'Heading',
                    'format' => 'h2'
                ),
                array(
                    'title' => 'Subheading',
                    'format' => 'h3'
                ),
                array(
                    'title' => 'Subsubheading',
                    'format' => 'h4'
                )
            )
        ),
        array(
            'title' => 'Inline',
            'items' => array(
                array(
                    'title' => 'Superscript',
                    'inline' => 'sup',
                    'icon' => 'superscript'
                ),
                array(
                    'title' => 'Subscript',
                    'inline' => 'sub',
                    'icon' => 'subscript'
                )
            )
        )
    );
    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}
add_filter( 'tiny_mce_before_init', 'ACAC\Forms\tiny_mce_before_init' );