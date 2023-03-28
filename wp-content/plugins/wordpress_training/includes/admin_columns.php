<?php

//Them cot
function wordpresstraninng_admin_columns($columns)
{   
    $columns['product_price'] = 'Gía bán';
    $columns['product_quantity'] = 'Số lượng';
    return $columns;
}
add_filter( 'manage_product_posts_columns', 'wordpresstraninng_admin_columns' );

//THem gia tri cua cot
function wordpresstraninng_admin_columns_render($column,$post_id)
{
    switch ($column) {
        case 'product_price':
           echo get_post_meta($post_id,'product_price',true);
            break;
        
        case 'product_quantity':
            echo get_post_meta($post_id,'product_quantity',true);
            break;
            
        default:
        echo 'dwadaw';
            break;
    }
}

add_filter( 'manage_product_posts_custom_column', 'wordpresstraninng_admin_columns_render',10,2 );


//Thêm cột ảnh vào table
function wordpresstraninng_product_category_columns($columns)
{
    $columns['image'] = 'Ảnh';
    return $columns;
}
add_filter('manage_edit-product_category_columns','wordpresstraninng_product_category_columns');


//Thêm giá trị ào cột
function wordpresstraninng_product_category_columns_render($out,$column, $term_id)
{
    if($column == 'image'){
        echo get_term_meta($term_id,'image',true);
    }
}
add_filter('manage_product_category_custom_column','wordpresstraninng_product_category_columns_render',10,3);
?>