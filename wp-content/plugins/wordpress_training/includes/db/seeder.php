<?php

$orders = [
    [
        'created' => '2023-02-02',
        'total' => 202020,
        'status' => 'pending',
        'pay_method' =>'cod',
        'customer_name' => 'Nguyen Van A',
        'customer_phone' => '039493212',
        'customer_email' => 'trong@gmail.com',
        'note'  => 'giao VIP',
    ],
    [
        'created' => '2023-02-22',
        'total' => 202020,
        'status' => 'pending',
        'pay_method' =>'cod',
        'customer_name' => 'Nguyen Van B',
        'customer_phone' => '039493212',
        'customer_email' => 'BB@gmail.com',
        'note'  => 'giao nhanh',
    ]
];

global $wpdb;
foreach($orders as $order){
    $wpdb->insert('wp_orders',$order);
}