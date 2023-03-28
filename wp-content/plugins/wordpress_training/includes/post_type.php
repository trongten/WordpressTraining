<?php
//Đang ký type_post moi
add_action('init','wordpress_custom_post_type');
function wordpress_custom_post_type()
{
    register_post_type('product',
		array(
			'labels'      => array(
				'name'          => __('Sản phẩm', 'wordpresstraining'),
				'singular_name' => __('Sản phẩm', 'wordpresstraining'),
			),
				'public'      => true,
				'has_archive' => true,
                'rewrite'     => array('slug'=>'products'),
                'supports'     => array('title', 'editor', 'thumbnail', 'excerpt')
		)
	);
}

//Đăng lý loại Danh mục mới
add_action( 'init', 'wordpresstraining_register_taxonomy_course' );

function wordpresstraining_register_taxonomy_course() {
    $labels = array(
        'name'              => _x( 'Danh mục sản phẩm', 'taxonomy general name' ),
        'singular_name'     => _x( 'Danh mục', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Danh mục' ),
        'all_items'         => __( 'Tất cả Danh mục' ),
        'parent_item'       => __( 'Danh mục cha' ),
        'parent_item_colon' => __( 'Danh mục cha:' ),
        'edit_item'         => __( 'Chỉnh sửa Danh mục' ),
        'update_item'       => __( 'Cập nhật Danh mục' ),
        'add_new_item'      => __( 'Thêm Danh mục mới' ),
        'new_item_name'     => __( 'Tên Danh mục mới' ),
        'menu_name'         => __( 'Danh mục' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'product_category' ],
    );
    register_taxonomy( 'product_category', [ 'product' ], $args );
}