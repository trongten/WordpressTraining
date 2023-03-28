<?php

function wp_ajax_change_status()
{  
    echo "<script> console.log('dwadadawd');</script>";

    $order_id = $_REQUEST['order_id'];
    $status = $_REQUEST['status'];
    $objOrder = new Order();

    $objOrder->changeStatus($order_id, $status);
    echo [
        'success'=> true,
    ];
    die();
}
add_action('wp_ajax_change_status','wp_ajax_change_status');

add_action('wp_ajax_nopriv_change_status','wp_ajax_nopriv_change_status');