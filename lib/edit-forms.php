<?php

namespace ACAC\Forms;


function register_homepage_form() {
	$prefix = '_acac_';

	$cmb = new_cmb2_box( array(
		'id' => 'acac_homepage',
		'title' => __( 'Homepage sections', 'acac' ),
		'object_types'  => array( 'page', ),
		'context'       => 'normal',
		'priority'      => 'high',
		// 'show_names'    => true,
	) );

	$section = $cmb->add_field( array(
		'name'       => __( 'Homepage section', 'cmb2' ),
		'desc'       => __( 'A content section on the homepage', 'cmb2' ),
		'id'         => $prefix . 'section_group',
		'type'       => 'group',
		'options' => array(
			'group_title'   => __( 'Section {#}', 'cmb2' ),
			'add_button'    => __( 'Add Another Section', 'cmb2' ),
			'remove_button' => __( 'Remove Section', 'cmb2' ),
			'sortable'      => true, // beta
		)
	) );

	$cmb->add_group_field( $section, array(
		'name' => 'Section Title',
		'id'   => 'title',
		'type' => 'text'
	) );

	$cmb->add_group_field( $section, array(
		'name' => 'Content',
		'description' => 'The section content. Supports HTML.',
		'id'   => 'content',
		'type' => 'textarea_small',
	) );

	$cmb->add_group_field( $section, array(
		'name' => 'Is dark?',
		'description' => 'Check to make the section have a dark background.',
		'id'   => 'dark',
		'type' => 'checkbox',
	) );

}

function register_forms() {
	register_homepage_form();
}
add_action( 'cmb2_admin_init', 'ACAC\Forms\register_forms');