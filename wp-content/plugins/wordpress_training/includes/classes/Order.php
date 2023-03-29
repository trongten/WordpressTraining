<?php
class Order {
    private $_orders = '';
    public function __construct() {
        global $wpdb;
        $this->_orders = $wpdb->prefix . 'orders';
    }

    public function get_all()
    {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders";
        $item = $wpdb->get_results($sql);
        return $item;
    }

    public function paginate($limit = 20){
        global $wpdb;
        $paged = isset($_REQUEST['paged']) ? $_REQUEST['paged'] : 1;
        $s =isset($_REQUEST['s']) ? $_REQUEST['s'] : "";
        $status =isset($_REQUEST['status']) ? $_REQUEST['status'] : "";

        $sql = "SELECT count(id) FROM $this->_orders WHERE deleted = 0 ";

        if($s){
            $sql .= " AND (customer_name LIKE '%$s%' OR customer_phone LIKE '%$s%' )";
        }
        if($status){
            $sql .= " AND (status LIKE '$status')";
        }
        $total_item = $wpdb->get_var($sql);
        $total_page = ceil($total_item/$limit);
        $offset = ($paged * $limit)-$limit;

        $sql = "SELECT * FROM $this->_orders WHERE deleted = 0";

        if($s){
            $sql .=  " AND (customer_name LIKE '%$s%' OR customer_phone LIKE '%$s%' )";
        }
        if($status){
            $sql .= " AND (status LIKE '$status')";
        }
        
        $sql .= " ORDER BY id DESC LIMIT $limit OFFSET $offset ";

        $item = $wpdb->get_results($sql);
        return [
            'total_item' => $total_item,
            'total_page' => $total_page,
            'items' => $item
        ];
    }

    public function findById($id)
    {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders WHERE id = $id";
        $item = $wpdb->get_row($sql);
        return $item;
    }

    public function save($data)
    {
        global $wpdb;
        $lastId =  $wpdb->insert($this->_orders,$data);
        return $this->findById($lastId);
    }

    public function update($id,$data)
    {
        global $wpdb;
        $wpdb->update($this->_orders,$data,['id' => $id]);
        return $this->findById($id);
    }
    public function trash($id)
    {
        global $wpdb;
        $wpdb->update($this->_orders,['deleted' => 1],['id' => $id]);
        return true;
    }

    public function changeStatus($id,$status)
    {
        global $wpdb;
        $wpdb->update($this->_orders,['status' => $status],['id' => $id]);
        return true;
    }

    public function destroy($id)
    {
        global $wpdb;
        $wpdb->delete($this->_orders,['id' => $id]);
        return true;
    }

}