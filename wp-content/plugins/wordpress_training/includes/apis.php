<?php

add_action('rest_api_init','wordpresstraining_api');
function wordpresstraining_api()
{
    register_rest_route('wordpresstraining/v1', '/orders',[
        [
            'methods' => WP_REST_Server::READABLE, 
            'callback' => 'get_all_order'
        ],
        [
            'methods' => WP_REST_Server::CREATABLE, 
            'callback' => 'add_order'
        ]
    ]);

    register_rest_route('wordpresstraining/v1', '/orders/(?P<id>[\d]+)',[
        [
            'methods' => WP_REST_Server::READABLE, 
            'callback' => 'get_order'
        ],
        [
            'methods' => WP_REST_Server::EDITABLE, 
            'callback' => 'update_order'
        ],
        [
            'methods' => WP_REST_Server::DELETABLE, 
            'callback' => 'delete_order'
        ]
    ]);
}

function get_all_order($request)
{   
    $objOrder = new Order();
    $results = $objOrder->paginate();
    return new WP_REST_Response([
        'success' => true,
        'data' => $results,
    ], 200);
}
function add_order($request)
{
    $objOrder = new Order();
    $saved = $objOrder->save($_POST);
    return new WP_REST_Response([
        'success' => true,
        'data' => $saved,
    ], 201);
}
function get_order($request)
{
    $id = $request['id'];
    $objOrder = new Order();
    $results = $objOrder->findById($id);
    return new WP_REST_Response([
        'success' => true,
        'data' => $results,
    ], 201);
}
function update_order($request)
{
    $id = $request['id'];

    $objOrder = new Order();
    $saved = $objOrder->update($id,$_POST);
    return new WP_REST_Response([
        'success' => true,
        'data' => $saved,
    ], 201);
}
function delete_order($request)
{
    $id = $request['id'];
    $objOrder = new Order();
    $saved = $objOrder->destroy($id);
    return new WP_REST_Response([
        'success' => true,
    ], 201);
}
