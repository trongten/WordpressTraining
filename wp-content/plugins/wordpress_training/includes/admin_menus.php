<?php
function wordpresstraining_admin_menu()
{
    add_menu_page(
        'WordPress Training',
        'WordPress Training',
        'manage_options',
        'wordpresstraining',
        'wordpresstraining_admin_page_dashboard',
        'dashicons-admin-page',
    );

    add_submenu_page(
        'wordpresstraining',
        'Đơn hàng',
        'Đơn hàng',
        'manage_options',
        'wordpresstraining-order',
        'wordpresstraining_admin_page_order'
    );

    add_submenu_page(
        'wordpresstraining',
        'Cấu Hình',
        'Cấu Hình',
        'manage_options',
        'wordpresstraining-setting',
        'wordpresstraining_admin_page_setting'
    );

}
add_action('admin_menu' , 'wordpresstraining_admin_menu');

function wordpresstraining_admin_page_dashboard()
{
   
}

function wordpresstraining_admin_page_order()
{
    include_once WORDPRESS_TRAINING_PATH.'includes/templates/order.php';
}

function wordpresstraining_admin_page_setting()
{
    include_once WORDPRESS_TRAINING_PATH.'includes/templates/settings.php';
}