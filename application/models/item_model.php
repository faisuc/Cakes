<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Item_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->helper('date');
    }

    public function get_items() {
        $q = $this->db->get('product');
        $r = $q->result();
        return $r;
    }

    public function getMenu($menu) {
        if ($menu == "all") {
            $query = $this->db->get('product');
            return $query->result();
        } else {
            $q = $this->db->get_where('product', array('category' => $menu));
            $r = $q->result();
            return $r;
        }
    }

    public function geching($id) {
        $this->db->where('user_id2', $id);
        $this->db->where('status2', 'cart');
        $this->db->join('product', 'product.prod_id = cart.product_id2');
        $query = $this->db->get('cart');
        return $query->result();
    }
    public function gechingMobile($id) {
        $this->db->where('user_id2', $id);
        $this->db->where('status2', 'cart');
        $this->db->join('product', 'product.prod_id = cart.product_id2');
        $query = $this->db->get('cart');
        return $query->result();
    }

    public function gechingOrder($userID) {
        $this->db->where('user_id2', $userID);
        $this->db->where('status2 !=', 'cart');
        $this->db->join('product', 'product.prod_id = cart.product_id2');
        $query = $this->db->get('cart');
        return $query->result();
    }

    public function geching1($id) {
        $this->db->where('user_id2', $id);
        $query = $this->db->get('cart');
        return $query->result();
    }

    public function get_order($id_user) {
        $q = $this->db->get_where('users', array('id' => $id_user));
        $r = $q->result();
        return $r;
    }

    public function total($userId) {
        $this->db->select('SUM(total2) as tot');
        $this->db->where('user_id2', $userId);
        $q = $this->db->get('cart');
        $row = $q->row();
        $tot = $row->tot;
    }

    public function order() {
        $itemsNum = explode(",", $this->input->post('type'));
        $value = $itemsNum[1];
        $type = $itemsNum[0];

        $tot = $value * $this->input->post('quantity');
        $cart = array(
            'product_id2' => $this->input->post('prod_id'),
            'user_id2' => $this->input->post('user_id'),
            'order_date2' => date("y-m-d H:i:s"),
            'qty2' => $this->input->post('quantity'),
            'type2' => $type,
            'total2' => $tot,
            'status2' => 'cart'
        );
        $insert = $this->db->insert('cart', $cart);

        return $insert;
    }

    public function order2($cart) {
        $this->db->insert('order2', $cart);
    }

    public function addCart($cart_info) {
        $this->db->insert('cart', $cart_info);
    }

    public function insert($item_dat) {
        $this->db->insert('product', $item_dat);
    }

    public function delete($item_id) {
        $this->db->where('item_id2', $item_id);
        $this->db->delete('cart');
    }

    public function get_record($id_user) {
        $q = $this->db->get_where('users', array('id' => $id_user), 1, 0);
        $r = $q->result();
        return $r;
    }

    public function get_itmrecord($id_prod) {
        $q = $this->db->get_where('product', array('prod_id' => $id_prod), 1, 0);
        $r = $q->result();
        return $r;
    }

    public function update($user, $item_id) {
        $this->db->where('id', $item_id);
        $this->db->update('users', $user);
    }

    public function updateitm($user, $item_id) {
        $this->db->where('prod_id', $item_id);
        $this->db->update('product', $user);
    }

    public function get_payments() {
        $q = $this->db->get('payments');
        $r = $q->result();
        return $r;
    }

    public function insert_orders($orders_dat) {
        $this->db->insert('cart', $orders_dat);
    }

    public function get_orders($username) {
        $this->db->select('id');
        $this->db->where('buyer', $username);
        $this->db->where('status', 'Unpaid');
        $query = $this->db->get('cart');
        return $query->row()->id;
    }

    public function get_orders2($status2="pending") {
        if ($status2 != "") {
            $this->db->where('status2', $status2);
        }
        $query = $this->db->get('cart');
        return $query->result();
    }
    
    public function get_orders3($status2) {
        if ($status2 == "approved") {
            $this->db->where('status2', $status2);
        }
        $query = $this->db->get('cart');
        return $query->result();
    }

    public function getProducts() {
        $query = $this->db->get('product');
        return $query->result();
    }

    public function update_status($id, $status) {
        $this->db->where('id2', $id);
        $this->db->update('cart', $status);
    }

    public function insert_to_payments($id) {
        $this->db->where('id', $id);
        $this->db->select('id,image,buyer');
        $shit = $this->db->get('orders');
        $new = array(
            'date' => date('Y-m-d h:i:s'),
            'image' => $shit->row()->image,
            'order_no' => $id,
            'status' => 'Paid',
            'buyer' => $shit->row()->buyer
        );

        $this->db->insert('payments', $new);
    }

    public function get_items2($id) {
        $this->db->where('item_id', $id);
        $q = $this->db->get('items');
        $r = $q->result();
        return $r;
    }

    public function get_payments2() {
        $query = $this->db->get('payments');
        return $query->result();
    }

    public function get_items_beginner() {
        $this->db->where('difficulty', 'Beginner');
        $q = $this->db->get('items');
        $r = $q->result();
        return $r;
    }

    public function get_items_hard() {
        $this->db->where('difficulty', 'Hard');
        $q = $this->db->get('items');
        $r = $q->result();
        return $r;
    }

    public function booking($id) {
        $this->db->where('item_id', $id);
        $q = $this->db->get('items');
        $r = $q->result();
        return $r;
    }

    public function notifs($haha) {
        $this->db->insert('notifications', $haha);
    }

    public function get_order3($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('orders');
        return $q;
    }

    public function get_notifs($user) {
        $this->db->where('status', 'Unread');
        $this->db->where('user', $user);
        $q = $this->db->get('notifications');
        return $q->result();
    }

    public function get_price($id) {
        $this->db->select('price');
        $this->db->where('item_id', $id);
        $q = $this->db->get('items');
        return $q;
    }

    public function delete_order($id) {

        $this->db->where('id2', $id);
        $this->db->delete('cart');
    }

    public function profile($id) {
        $this->db->where('id', $id);
        $q = $this->db->get('users');
        return $q->result();
    }

    public function update_profile($id, $info) {
        $this->db->where('id', $id);
        $this->db->update('users', $info);
    }

    public function acceptorder($orderid) {
        $query = $this->db->query("UPDATE `cart` SET `status2` = 'approved' WHERE `order_id2` = $orderid");
        return $query;
    }

    public function declineorder($orderid) {
        $query = $this->db->query("UPDATE `cart` SET `status2` = 'declined' WHERE `order_id2` = $orderid");
        return $query;
    }

     public function pendingorder($orderid) {
        $query = $this->db->query("UPDATE `cart` SET `status2` = 'pending' WHERE `order_id2` = $orderid");
        return $query;
    }


    public function substractStocks($userId) {
        $query = $this->db->query("SELECT * FROM `cart` WHERE `user_id2` = 3 AND `status2` = 'cart'");

                foreach ($query->result_array() as $row) {

                    $qty = $row['qty2'];
                    $pid = $row['product_id2'];

                    $query = $this->db->query("UPDATE `product` SET `quantity` = `quantity` - $qty WHERE `prod_id` = $pid");

                }
    }


}

?>
