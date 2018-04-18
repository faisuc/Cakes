<?php

class Student_model extends CI_Model {

    public function login($str, $pass) {
        $this->db->where('username', $str);
        $this->db->where('password', $pass);
        $this->db->limit(1);
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function create_member() {
        $bday = $this->input->post('yy') + " " + $this->input->post('dd') + " " + $this->input->post('mm');

        $new_member_insert_data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'birthday' => $this->input->post('bday'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'notifs' => $this->input->post('notifs'),
            'type' => '2',
            'status' => 'active'
        );

        $insert = $this->db->insert('users', $new_member_insert_data);

        return $insert;
    }

    function create_memberAdmin() {
        $new_member_insert_data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'birthday' => $this->input->post('date'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'type' => $this->input->post('type'),
            'status' => 'active',
            'status2' => 'verified'
        );

        $insert = $this->db->insert('users', $new_member_insert_data);

        return $insert;
    }
    
    function create_memberStaff() {
        $new_member_insert_data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'birthday' => $this->input->post('date'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'type' => $this->input->post('type'),
            'status' => 'active'
        );

        $insert = $this->db->insert('users', $new_member_insert_data);

        return $insert;
    }

    function validation($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status2', 'verified');
        $this->db->or_where('email', $username);
        $this->db->where('password', $password);
        
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return true;
        }
    }
    
    function validationAdmin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return true;
        }
    }

    function getUserId($username) {
        if ($this->validation()) {
            $query = $this->db->query("SELECT `id` FROM `users` WHERE `username` = '$username'");
            $row = $query->row();
            return $row->id;
        }
    }

    function get_user_details() {
        $this->db->where('username', $this->session->userdata('user'));
        $this->db->or_where('email', $this->session->userdata('useremail'));
        $this->db->where('password', $this->input->post('password'));
        $query = $this->db->get('users');
        return $query->result();
    }
    
    function get_featured() {
        $this->db->where('featured', 'yes');
        $query = $this->db->get('product');
        return $query->result();
    }

    function get_user_count() {
        $this->db->where('type', 2);
        $this->db->where('status', 'active');
        $result = $this->db->get('users');
        return $result->num_rows();
    }

    function get_item_details($prodID) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('prod_id', $prodID);
        $query = $this->db->get();
        $res = $query->result();
        return $res;

//        $this->db->where('prod_id', $prodID);
//        $query = $this->db->get('product');
//        return $query->result();
    }

    function updateQuan($userId, $quant, $productIdd) {
        $this->db->where('product_id', $productIdd);
        $this->db->where('user_id', $userId);
        $this->db->update('order', array('qty' => $quant));
    }

    function get_all() {
        $this->db->where('status', 'active');
        $this->db->where('type', '2');
        $query = $this->db->get('users');

        $res = $query->result()->num_rows();
        return $res;
    }

    function get_accounts() {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('type', '2');
        $this->db->or_where('type', '3');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    function get_products() {
        $this->db->select('*');
        $this->db->from('product');
//        $this->db->where('type', '2');
//        $this->db->or_where('type', '3');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function signup($data) {
        $this->db->insert('users', $data);
    }

    public function comment($data) {
        $this->db->insert('comments', $data);
    }

    public function check_type($users, $useremail) {
        $this->db->select('type');
        $this->db->where('username', $users);
        $this->db->or_where('email', $useremail);
        $query = $this->db->get('users');
        $ret = $query->row();
        return $ret->type;
    }

    public function check_status($users, $useremail) {
        $this->db->select('status');
        $this->db->where('username', $users);
        $this->db->or_where('email', $useremail);
        $query = $this->db->get('users');
        $ret = $query->row();
        return $ret->status;
    }
    
    public function check_typeA($users) {
        $this->db->select('type');
        $this->db->where('username', $users);
        $query = $this->db->get('users');
        $ret = $query->row();
        return $ret->type;
    }

    public function check_statusA($users) {
        $this->db->select('status');
        $this->db->where('username', $users);
        $query = $this->db->get('users');
        $ret = $query->row();
        return $ret->status;
    }

    public function get_id($str, $pass) {
        $this->db->select('id');
        $this->db->where('username', $str);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');
        return $query->row()->id;
    }

}

?>
