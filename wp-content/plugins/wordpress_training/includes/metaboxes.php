<?php
//Product: them moi sưa san phẩm

// Đăng ký metabox cho sản phẩm
add_action('add_meta_boxes','wordpresstraining_meta_box_product');
function wordpresstraining_meta_box_product()
{
    add_meta_box(
        'wordpress_product_info',                 // Unique ID
        'Thông tin sản phẩm',      // Box title
        'wordpress_custom_box_html',  // Content callback, must be of type callable
        'product'                          // Post type
    );
}
function wordpress_custom_box_html()
{
    include_once WORDPRESS_TRAINING_PATH.'includes/templates/metabox_product.php';
}

//Lưu metabox san pham
add_action('save_post','wordpresstraining_save_meta_box_product');
function wordpresstraining_save_meta_box_product($post_id)
{
   if($_REQUEST['post_type'] == 'product'){
    update_post_meta($post_id,'product_price',$_REQUEST['product_price']);
    update_post_meta($post_id,'product_quantity',$_REQUEST['product_quantity']);

   }
}


//Đăng ký metabox cho dănh muc san pham
add_action('product_category_add_form_fields', 'wordpresstraining_meta_box_product_category');
function wordpresstraining_meta_box_product_category()
{
    include_once WORDPRESS_TRAINING_PATH.'includes/templates/metabox_product_category.php';
}

add_action('product_category_edit_form_fields', 'wordpresstraining_meta_box_product_category_edit',10,2);
function wordpresstraining_meta_box_product_category_edit($tag, $taxonomy)
{
    include_once WORDPRESS_TRAINING_PATH.'includes/templates/metabox_product_category_edit.php';
}

//Xử lý khi lưu và load field
add_action('create_product_category','wordpresstraining_product_category_save');
add_action('edit_product_category','wordpresstraining_product_category_edit');

function wordpresstraining_product_category_save($term_id)
{
    update_term_meta($term_id,'image',$_POST['image']);
}

function wordpresstraining_product_category_edit($term_id)
{
    update_term_meta($term_id,'image',$_POST['image']);
}