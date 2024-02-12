<?php
function services_post_fileds()
{
    $services_post = new_cmb2_box(array(
        'id' => 'meta_services_icon',
        'title' => esc_html(__('Services Icon', 'pexr')),
        'object_types'  => array('pexr-services'),


    ));

    $services_post->add_field( array(
        'name' => __( 'Select Font Awesome Icon', 'cmb' ),
        'id'   => 'service_meta_faicon',
        'desc' => 'Select Font Awesome icon',
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
            'faver' => 5
        )
    ) );
}
add_action('cmb2_admin_init', 'services_post_fileds');
