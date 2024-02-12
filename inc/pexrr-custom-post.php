<?php

/**
 * Register Custom Post Type
 */
if (!defined('ABSPATH')) {
    exit;
};

function pexr_custom_post_type()
{

    // register work cpt
    register_post_type('pexr_work', array(
        'labels'        =>  array(
            'name'            =>  __('Works', 'pexr'),
            'singular_name'   =>  __('Work', 'pexr'),
            'add_new'         =>  __('Add New Work', 'pexr'),
            'add_new_item'       =>  __('Add New Item Work', 'pexr'),
            'edit_item'       =>  __('Edit Work', 'pexr'),
            'view_item'       =>  __('View Work', 'pexr'),
            'view_items'       =>  __('View Work', 'pexr'),
            'new_items'       =>  __('New Work', 'pexr'),
            'not_found'       =>   __('Sorry! Not Works Found', 'pexr'),
            'item_published'  => __('View Works', 'pexr'),
            'item_updated'  => __('View Works', 'pexr'),
        ),

        'public'       =>  true,
        'supports'     =>  array('title', 'editor', 'thumbnail'),
        'menu_icon'    =>  'dashicons-edit',
        'rewrite'     =>   array('slug' => 'Work'),
        'capability_type'     =>  'page',
        'menu_position'     =>  15,

    ));

    // register  what we do CPT
    register_post_type('pexr-services', array(
        'labels'     => array(
            'name'             => esc_html(__('Services', 'pexr')),
            'singular_name'    => esc_html(__('service', 'pexr')),
            'add_new'          => esc_html(__('Add New Service', 'pexr')),
            'not_found'        => esc_html(__('not service found', 'pexr')),
            'add_new_item'     => esc_html(__('Add New Service', 'pexr')),
            'edit_item'        => esc_html(__('Edit Service', 'pexr')),
            'featured_image'   => esc_html(__('Service Image', 'pexr')),
            'set_featured_image' => esc_html(__('Set Service Image', 'pexr')),
            'remove_featured_image' => esc_html(__('Remove Service Image', 'pexr')),


        ),
        'public'     => true,
        'rewrite'    => array(
            'slug'               => 'services'
        ),
        'menu_icon'  =>  'dashicons-insert',
        'capability_type' => 'page',
        'supports'     =>  array('title', 'editor'),

    ));

};


add_action('init', 'pexr_custom_post_type');
