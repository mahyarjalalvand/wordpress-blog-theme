<?php
function get_all_post(){
    $arg = [
        'post_type' => 'post',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    ];
   return new WP_Query($arg);
};

function custom_var_dump($item){
    echo "<div class='fixed bg-white z-50 inset-0 dir-ltr overflow-auto'><pre>";
    var_dump($item);
    echo "</div></pre>";
}
// new post type
$args=[
    'labels' =>[
    'name' => 'new post type',
    'singular_name' => 'پست تایپ جدید',
    'menu_name'     => 'پست تایپ جدید',
    'add_new'       => 'Add New option',
    'add_new_item'  => 'افزودن',
    'new_item'      => 'افزودن',
    'edit_item'     => 'Edit new',
    'view_item'     => 'View new',
    'all_items'     => 'نمایش همه',
    ],
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
];
register_post_type('name', $args);
