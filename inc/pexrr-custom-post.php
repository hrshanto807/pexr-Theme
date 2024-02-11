<?php

/**
 * Register Custom Post Type
 */
if (!defined('ABSPATH')) {
    exit;
};

function pexr_custom_post_type()
{
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
        'supports'     =>  array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
        'menu_icon'    =>  'dashicons-edit',
        'rewrite'     =>   array('slug' => 'Work'),
        'capability_type'     =>  'page',
        'menu_position'     =>  15,

    ));
};
add_action('init', 'pexr_custom_post_type');
