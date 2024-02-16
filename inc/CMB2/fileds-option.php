<?php
// services area meta field
function services_post_fileds()
{
    $services_post = new_cmb2_box(array(
        'id' => 'meta_services_icon',
        'title' => esc_html(__('Services Icon', 'pexr')),
        'object_types'  => array('pexr-services'),


    ));

    $services_post->add_field(array(
        'name' => __('Select Font Awesome Icon For Your Service ', 'pexr'),
        'id'   => 'service_meta_faicon',
        'desc' => 'Select Font Awesome icon',
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
            'faver' => 5
        )
    ));
}
add_action('cmb2_admin_init', 'services_post_fileds');

// brandiing design area meta field
function branding_design_post_fileds()
{
    $branding_design_post = new_cmb2_box(array(
        'id' => 'meta_branding_designt_icon',
        'title' => esc_html(__('Branding Design Icon', 'pexr')),
        'object_types'  => array('pexr-branding-design'),


    ));

    $branding_design_post->add_field(array(
        'name' => __('Select Branding Design Icon', 'pexr'),
        'id'   => 'branding_design_meta_faicon',
        'desc' => 'Select Font Awesome icon',
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
            'faver' => 5
        )
    ));
}
add_action('cmb2_admin_init', 'branding_design_post_fileds');
// Support area meta field
function support_post_fileds()
{
    $support_post = new_cmb2_box(array(
        'id' => 'meta_support_icon',
        'title' => esc_html(__('Support Icon', 'pexr')),
        'object_types'  => array('pexr-support'),


    ));

    $support_post->add_field(array(
        'name' => __('Select Support Icon', 'pexr'),
        'id'   => 'support_meta_faicon',
        'desc' => 'Select Font Awesome icon',
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
            'faver' => 5
        )
    ));
}
add_action('cmb2_admin_init', 'support_post_fileds');
// Our Services area meta field
function our_service_post_fileds()
{
    $our_service_post = new_cmb2_box(array(
        'id' => 'meta_our_service_icon',
        'title' => esc_html(__('Services Icon', 'pexr')),
        'object_types'  => array('pexr-our-services'),


    ));

    $our_service_post->add_field(array(
        'name' => __('Select Services Icon', 'pexr'),
        'id'   => 'our_service_meta_faicon',
        'desc' => 'Select Font Awesome icon',
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
            'faver' => 5
        )
    ));
}
add_action('cmb2_admin_init', 'our_service_post_fileds');

// Testimonial Meta Box

function pexr_testimonail_fileds()
{
    $testimonail = new_cmb2_box(array(
        'id' => 'meta-testimonail',
        'title' => esc_html(__('Client Details', 'pexr')),
        'object_types'  => array('pexr-testimonial'),
        //'context' => 'advanced',
        //'priority' => 'high'

    ));

    $testimonail->add_field(array(
        'id' => 'testimonail_img',
        'name' => __('Client Image', 'pexr'),
        'desc' => __('Input Your Client Image'),
        'type'    => 'file',
    ));

    $testimonail->add_field(array(
        'id' => 'testimonail_name_title',
        'name' => __('Client Name', 'pexr'),
        'desc' => __('Input Your Client Name'),
        'type' => 'text',
    ));

    $testimonail->add_field(array(
        'id' => 'testimonail_website_name',
        'name' => __('Website', 'pexr'),
        'desc' => __('Input Your Website Name'),
        'type' => 'text_medium',
    ));
};

add_action('cmb2_admin_init', 'pexr_testimonail_fileds');
