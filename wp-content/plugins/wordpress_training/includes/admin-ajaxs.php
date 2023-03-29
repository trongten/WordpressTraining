<?php

function wp_ajax_change_status()
{  
   

    $order_id = $_REQUEST['order_id'];
    $status = $_REQUEST['status'];
    $nonce = $_REQUEST['_nonce'];
    // check_ajax_referer('wordpresstraining_change_status')
    if(wp_verify_nonce($nonce,'wordpresstraining_change_status')){
        $objOrder = new Order();
        $objOrder->changeStatus($order_id, $status);
        echo json_encode([
            'success'=> true,
        ]);
       
    }else{
        echo json_encode([
            'success'=> false,
        ]);
    }
   
    die();
}
add_action('wp_ajax_change_status','wp_ajax_change_status');

add_action('wp_ajax_nopriv_change_status','wp_ajax_nopriv_change_status');