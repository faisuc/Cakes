<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();

        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
$this->load->library('session');
        $this->load->library('cart');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('student_model');

        date_default_timezone_set('Asia/Manila');
    }

    public function index() {
        $this->load->model('student_model');
        $data['products'] = $this->student_model->get_products();
        $data['feat'] = $this->student_model->get_featured();
        $this->load->view('guest/index', $data);
    }

    public function indexCust() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $data['feat'] = $this->student_model->get_featured();
            $data['products'] = $this->student_model->get_products();
            $this->load->view('customer/index', $data);
        } else {
            redirect('logout');
        }
    }

    private function is_logged_in() {
        $users = $this->session->userdata('user');
        $data['details'] = $this->student_model->get_user_details();
        $z = $this->student_model->check_type($users);
        $y = $this->student_model->check_status($users);
        if ($z == "1") {
            redirect(base_url() . 'AdminPage', 'refresh');
        } elseif ($z == "2") {
            if ($y == "active") {
                redirect(base_url() . ' ', 'refresh');
            } else {
                $this->deactivated();
            }
        } elseif ($z == "3") {
            $this->load->view('staff/index', $data);
        }
    }

    public function indexAdmin() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $data['res'] = $this->student_model->get_user_count();
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();

            $this->load->view('admin/index', $data);
        } else {
            redirect(base_url() . 'AdminLogin ', 'refresh');
        }
    }

    public function indexStaff() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $data['res'] = $this->student_model->get_user_count();
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();
            $this->load->view('staff/index', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function about() {
        $this->load->model('student_model');
        $data['products'] = $this->student_model->get_products();
        $this->load->view('guest/about', $data);
    }

    public function aboutCust() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['products'] = $this->student_model->get_products();
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('customer/about', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function edituser() {
        //echo 'From Controller';
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('admin/editUser', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function edituserS() {
        //echo 'From Controller';
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('staff/editUser', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function viewProd() {
        //echo 'From Controller';
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();
            $this->load->model('student_model');
            $data['products'] = $this->student_model->get_products();
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('admin/viewProd', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function viewProdS() {
        //echo 'From Controller';
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();
            $this->load->model('student_model');
            $data['products'] = $this->student_model->get_products();
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('staff/viewProd', $data);
        } else {
            redirect(base_url() . 'AdminLogin', 'refresh');
        }
    }

    public function editProd() {
        //echo 'From Controller';
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();
            $this->load->model('student_model');
            $data['products'] = $this->student_model->get_products();
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('admin/updateItem', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function editProdS() {
        //echo 'From Controller';
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['users'] = $this->student_model->get_accounts();
            $this->load->model('student_model');
            $data['products'] = $this->student_model->get_products();
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('staff/updateItem', $data);
        } else {
            redirect(base_url() . 'AdminLogin', 'refresh');
        }
    }

    public function menuGuest() {
        $this->load->model('item_model');
        $data['items'] = $this->item_model->get_items();

        $menu = $this->input->post('choices');
        $this->load->model('item_model');

        $data['menus'] = $this->item_model->getMenu($menu);
        $this->load->view('guest/menu', $data);
    }

    public function menuGuest2() {
        $this->load->model('item_model');
        $data['items'] = $this->item_model->get_items();
        $this->load->view('guest/menu2', $data);
    }

    public function profilecust() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();

            foreach ($data['details'] as $order):
                $userID = $order->id;

                $this->load->model('item_model');
                $data['orders'] = $this->item_model->gechingOrder($userID);
            endforeach;

            $this->load->view('customer/profile', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function profilecust2() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('customer/editProfile', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function menuCust() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('item_model');
            //$data['items'] = $this->item_model->get_items();
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();

            $menu = $this->input->post('choices');
            $this->load->model('item_model');

            $data['menus'] = $this->item_model->getMenu($menu);

            $this->load->view('customer/menu', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function get_user() {
        $this->load->model('student_model');
        $data['user'] = $this->student_model->get_all();
    }

    public function payment() {

        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');

            $data['details'] = $this->student_model->get_user_details();
            foreach ($data['details'] as $id):
                $userId = $id->id;

                $this->load->model('item_model');
                $data['orders'] = $this->item_model->geching($userId);
            endforeach;

            $userId = $this->input->post('userid_');
            $quant = $this->input->post('quant');
            $productIdd = $this->input->post('prodid_');
            $this->load->model('student_model');
            $this->student_model->updateQuan($userId, $quant, $productIdd);

            $this->load->view('customer/payment', $data);
        } else {
            redirect(base_url() . 'signup', 'refresh');
        }
    }

    public function payment2() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');

            $data['details'] = $this->student_model->get_user_details();
            foreach ($data['details'] as $id):
                $userId = $id->id;

                $this->load->model('item_model');
                $data['orders'] = $this->item_model->geching($userId);
            endforeach;

            $this->load->view('customer/shipping', $data);
        } else {
            redirect(base_url() . 'signup', 'refresh');
        }
    }

    public function payment3() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');

            $data['details'] = $this->student_model->get_user_details();
            foreach ($data['details'] as $id):
                $userId = $id->id;

                $this->load->model('item_model');
                $data['orders'] = $this->item_model->geching($userId);
            endforeach;

            $this->load->view('customer/paymethod', $data);
        } else {
            redirect(base_url() . 'signup', 'refresh');
        }
    }

    public function payment4() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');

            $data['details'] = $this->student_model->get_user_details();
            foreach ($data['details'] as $id):
                $userId = $id->id;

                $this->load->model('item_model');
                $data['orders'] = $this->item_model->geching($userId);
            endforeach;

            $this->load->view('customer/confirm', $data);
        } else {
            redirect(base_url() . 'signup', 'refresh');
        }
    }

    public function edituacc() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $id_user = $this->uri->segment(3);
            $this->load->model('item_model');
            $data['items'] = $this->item_model->get_record($id_user);
            $this->load->view('admin/edituacc', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function editItems() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $id_prod = $this->uri->segment(3);
            $this->load->model('item_model');
            $data['items'] = $this->item_model->get_itmrecord($id_prod);
            $this->load->view('admin/editItem', $data);
        } else {
            redirect(base_url() . 'AdminLogin', 'refresh');
        }
    }

    public function editItemsS() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $id_prod = $this->uri->segment(3);
            $this->load->model('item_model');
            $data['items'] = $this->item_model->get_itmrecord($id_prod);
            $this->load->view('staff/editItem', $data);
        } else {
            redirect(base_url() . 'AdminLogin', 'refresh');
        }
    }

    public function editprof() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $id_user = $this->uri->segment(3);
            $this->load->model('item_model');
            $data['records'] = $this->item_model->get_record($id_user);
            $this->load->view('customer/editProfile', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function edituaccS() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $id_user = $this->uri->segment(3);
            $this->load->model('item_model');
            $data['items'] = $this->item_model->get_record($id_user);
            $this->load->view('staff/edituacc', $data);
        } else {
            redirect(base_url() . 'shop/signup', 'refresh');
        }
    }

    public function contacts() {

        $this->load->view('guest/contact');
    }

    public function contactUser() {
        $this->load->model('student_model');
        $data['details'] = $this->student_model->get_user_details();
        $this->load->view('customer/contact', $data);
    }

    public function adduser() {
        $this->load->model('student_model');
        $data['details'] = $this->student_model->get_user_details();
        $this->load->view('admin/addUser', $data);
    }

    public function adduserS() {
        $this->load->model('student_model');
        $data['details'] = $this->student_model->get_user_details();
        $this->load->view('staff/addUser', $data);
    }

    function validate_credentials() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('guest/login');
        } else {
            $session = array(
                'user' => $this->input->post('username'),
                'useremail' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($session);
            $users = $this->session->userdata('user');
            $useremail = $this->session->userdata('useremail');
            $data['details'] = $this->student_model->get_user_details();
            $z = $this->student_model->check_type($users, $useremail);
            $y = $this->student_model->check_status($users, $useremail);
            if ($z == "1") {
                $this->form_validation->set_message('check_database', 'Invalid username or password');
                redirect(base_url() . 'login', 'refresh');
            } elseif ($z == "2") {
                if ($y == "active") {
                    redirect(base_url() . 'Home', 'refresh');
                } else {
                    $this->deactivated();
                }
            } elseif ($z == "3") {
                redirect(base_url() . 'login', 'refresh');
            }
            //Go to private area
            //redirect('Home', 'refresh');
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        //query the database
        $result = $this->student_model->validation($username, $password);
        

        if ($result == TRUE) {  
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
    
    function check_database2($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        //query the database
        $result = $this->student_model->validationAdmin($username, $password);
        

        if ($result == TRUE) {  
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
 
    function validate_admin() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database2');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            redirect(base_url() . 'AdminLogin', 'refresh');
        } else {
            $session = array(
                'user' => $this->input->post('username'),
                'useremail' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($session);
            $users = $this->session->userdata('user');
            $data['details'] = $this->student_model->get_user_details();
            $z = $this->student_model->check_typeA($users);
            $y = $this->student_model->check_statusA($users);
            if ($z == "1") {
                redirect(base_url() . 'AdminPage', 'refresh');
            } elseif ($z == "2") {
                if ($y == "active") {
                    redirect(base_url() . 'AdminLogin', 'refresh');
                } else {
                    $this->deactivated();
                }
            } elseif ($z == "3") {
                redirect(base_url() . 'StaffPage', 'refresh');
            }
            //Go to private area
            //redirect('Home', 'refresh');
        }
    }

    public function deactivated() {

        $this->load->view('guest/deactivate');
    }

    public function loginMenu() {
        $this->load->model('student_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->student_model->validation($username, $password);

        if ($query == TRUE) { //if user credentials validated..
            $session = array(
                'user' => $this->input->post('username'),
                'useremail' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($session);

            $data['details'] = $this->student_model->get_user_details();
            $users = $this->input->post('username');
            $useremail = $this->input->post('username');
            $z = $this->student_model->check_type($users, $useremail);
            $y = $this->student_model->check_status($users, $useremail);
            if ($z == "2") {
                if ($y == "active") {
                    redirect('Menu', 'refresh');
                } else if ($y == "deactivate") {
                    redirect('deactivated', 'refresh');
                }
            }
        } else {
            $err = "Invalid Username";
            redirect('menu', 'refresh');
        }
    }

    public function add_product() { {
            $categor = $this->input->post('cat');

            $config['upload_path'] = './images/menu/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000';
            $config['max_width'] = '1000';
            $config['max_height'] = '1000';
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $data['error'] = $this->upload->display_errors();
                $this->load->model('item_model');
                $this->load->model('student_model');
                $data['details'] = $this->student_model->get_user_details();
                $data['items'] = $this->item_model->get_items();
                $this->load->view('admin/addItem', $data);
            } else {
                $str = $this->input->post('item_name');
                $itemname = str_replace(' ', '_', $str);
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data'];
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'images/menu/' . $this->input->post('item_name') . $file['file_ext'];
                rename($file['file_path'] . $file['file_name'], 'images/menu/' . $itemname . $file['file_ext']);
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 960;
                $config['height'] = 720;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $now = date('Y-m-d H:i:s');

                $item_dat = array(
                    'prod_name' => $this->input->post('item_name'),
                    'prod_desc' => $this->input->post('item_desc'),
                    'prod_price' => $this->input->post('price'),
                    'prod_price2' => $this->input->post('price2'),
                    'prod_date' => $now,
                    'critical' => $this->input->post('critical'),
                    'quantity' => $this->input->post('quan'),
                    'category' => $this->input->post('cat'),
                    'prod_pic' => 'images/menu/' . $itemname . $file['file_ext'],
                );
                $this->load->model('item_model');
                $this->item_model->insert($item_dat);

                $this->addItem();
            }
        }
    }

    public function add_productS() { {
            $categor = $this->input->post('cat');

            $config['upload_path'] = './images/menu/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000';
            $config['max_width'] = '1000';
            $config['max_height'] = '1000';
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $data['error'] = $this->upload->display_errors();
                $this->load->model('item_model');
                $this->load->model('student_model');
                $data['details'] = $this->student_model->get_user_details();
                $data['items'] = $this->item_model->get_items();
                $this->load->view('staff/addItem', $data);
            } else {
                $str = $this->input->post('item_name');
                $itemname = str_replace(' ', '_', $str);
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data'];
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'images/menu/' . $this->input->post('item_name') . $file['file_ext'];
                rename($file['file_path'] . $file['file_name'], 'images/menu/' . $itemname . $file['file_ext']);
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 970;
                $config['height'] = 620;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $now = date('Y-m-d H:i:s');

                $item_dat = array(
                    'prod_name' => $this->input->post('item_name'),
                    'prod_desc' => $this->input->post('item_desc'),
                    'prod_price' => $this->input->post('price'),
                    'prod_price2' => $this->input->post('price2'),
                    'prod_date' => $now,
                    'critical' => $this->input->post('critical'),
                    'quantity' => $this->input->post('quan'),
                    'category' => $this->input->post('cat'),
                    'prod_pic' => 'images/menu/' . $itemname . $file['file_ext'],
                );
                $this->load->model('item_model');
                $this->item_model->insert($item_dat);

                $this->addItem();
            }
        }
    }

    public function home() {
        //print_r($_POST);
        //die();

        $this->form_validation->set_rules('username', 'Username', 'required|callback_login');
        $this->form_validation->set_rules('password', 'Password', 'required');



        if ($this->form_validation->run() == FALSE) {
            //echo 'INVALID';
            //$this->index();
            //$this->load->view('myform');
            //} else {
            $this->load->view('student/index');
            //redirect(base_url().'student/home', 'refresh');
            //$this->load->view('formsuccess');
        } else {
            $id = $this->session->userdata('user_id');
            $this->load->model('student_model');
            $z = $this->student_model->check_type($id);
            if ($z == "admin") {
                $this->admin();
            } else if ($z == "member") {
                $this->cart();
            }
        }

        $stud_dat = array(
            'username' => $this->input->post('username')
        );
    }

    public function signup() {
        $this->load->view('guest/register');
    }

    public function adminlogin() {
        $this->load->view('guest/loginAdmin');
    }

    public function login_cust() {
        $this->load->view('guest/login');
    }

    public function verification() {
        $this->load->view('verify');
    }

    public function addItem() {
        $this->load->model('student_model');
        $data['details'] = $this->student_model->get_user_details();
        $this->load->view('admin/addItem', $data);
    }

    public function addItemS() {
        $this->load->model('student_model');
        $data['details'] = $this->student_model->get_user_details();
        $this->load->view('staff/addItem', $data);
    }

    public function register2($code) {


        $this->load->model('student_model');
        $data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'birthday' => $this->input->post('birthday'),
            'mobile' => $this->input->post('mobileno'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'type' => '2',
            'status' => 'active',
            'notifs' => $this->input->post('notifs'),
            'status2' => "pending",
            'code' => $code
        );
        $this->student_model->signup($data);
        redirect('verify');
    }

    public function comment2() {
        $this->load->helper('date');
        $this->load->model('student_model');
        $data = array(
            'username' => $this->input->post('uname'),
            'useremail' => $this->input->post('email'),
            'userphone' => $this->input->post('phone'),
            'date' => date('Y-m-d H:i:s'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('comment'),
        );
        $this->student_model->comment($data);
        $this->load->view('guest/contact');
    }

    public function register() {
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $this->form_validation->set_rules('fname', 'First Name', 'required'); //|is_unique[users.username]
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]'); //|is_unique[users.email]
        $this->form_validation->set_rules('address', 'Home Address', 'required');
        $this->form_validation->set_rules('birthday', 'Birthday', 'required');
        $this->form_validation->set_rules('mobileno', 'Mobile', 'required|max_length[11]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required');
//====================
//        $this->form_validation->set_rules('captcha', 'CAPTCHA', 'numeric|min_length[8]|required|matches[captcha2]');
//        $this->form_validation->set_message('min_length', 'CAPTCHA is incorrect');

        $full = $this->input->post('fname') + $this->input->post('fname');
        $email = $this->input->post('email');

        if ($this->form_validation->run() == FALSE) {
            $this->signup();
        } else {
            $config['protocol'] = "smtp"; //default
            $config['smtp_host'] = "ssl://rsb24.rhostbh.com"; //gamitin mo yung sa host niyo
            $config['smtp_port'] = "465"; //default na ata to
            $config['smtp_user'] = "administrator@dorissimopastries.com"; //email niyo
            $config['smtp_pass'] = "doris@123"; //password
            $config['charset'] = "utf-8";
            $config['mailtype'] = "text";
            $config['newline'] = "\n";
            $this->email->initialize($config);

            $code = rand();
            $this->email->from('administrator@dorissimopastries.com', 'Dorissimo Pastries Administrator');
            $this->email->to($email);
            $this->email->subject('Account Verification');
            $this->email->message("Welcome to Dorissimo Pastries ," . $full . "!
                \nPlease click the link below to activate your account\n\nhttp://dorissimopastries.com/verifyaccount/$code\n\nDorissimo Pastries");
            //" . $id . "/" . $code."
            if ($this->email->send()) {

                $this->register2($code);
            } else {
                $this->index();
            }
        }

//        $stud_dat = array(
//            'email' => $this->input->post('email')
//        );
    }

    public function verifyaccount() {
        $code = $this->uri->segment(2);
        $this->db->query("UPDATE users SET `status2` = 'verified' WHERE `code` = '$code'");

        $query = $this->db->query("SELECT * FROM `users` WHERE `code` = '$code'");
        $id = $query->row()->id;

        $this->db->query("INSERT INTO `notifications` (`notification`, `read`, `date`, `field`, `notif_id`) VALUES ('New Registered User', 'no', " . time() . ", 'user', $id)");
        $data['success'] = "You account has been verified. Please login to you account.";
        $this->load->view('guest/login', $data);
    }

    public function comment() {
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $this->form_validation->set_rules('uname', 'Username', 'required'); //|is_unique[users.username]
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); //|is_unique[users.email]
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');

        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('comment', 'Message', 'required');
//====================
//        $this->form_validation->set_rules('captcha', 'CAPTCHA', 'numeric|min_length[8]|required|matches[captcha2]');
//        $this->form_validation->set_message('min_length', 'CAPTCHA is incorrect');


        if ($this->form_validation->run() == FALSE) {
            $this->contacts();
        } else {
            $this->comment2();
        }

//        $stud_dat = array(
//            'email' => $this->input->post('email')
//        );
    }

    function create_member() {
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('address', 'Home Address', 'required');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');

        $this->form_validation->set_rules('password', 'Password', 'required|max_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required');

        $this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');

        if ($this->form_validation->run() == FALSE) {

            redirect(base_url() . 'shop/signup', 'refresh');
        } else {
            $this->load->model('student_model');
            if ($this->student_model->create_member()) {
                redirect(base_url() . 'shop/signup', 'refresh');
            } else {
                redirect(base_url() . 'shop/signup', 'refresh');
            }
        }
    }

    function create_member2() {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('address', 'Home Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('date', 'Birthday', 'required');
        $this->form_validation->set_rules('type', 'User Type', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');



        if ($this->form_validation->run() == FALSE) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('admin/addUser', $data);
        } else {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            if ($this->student_model->create_memberAdmin()) {
                $this->load->view('admin/index', $data);
            } else {
                $this->load->view('indexAdmin', $data);
            }
        }
    }

    function create_member3() {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('address', 'Home Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('date', 'Birthday', 'required');
        $this->form_validation->set_rules('type', 'User Type', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');



        if ($this->form_validation->run() == FALSE) {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            $this->load->view('staff/addUser', $data);
        } else {
            $this->load->model('student_model');
            $data['details'] = $this->student_model->get_user_details();
            if ($this->student_model->create_memberStaff()) {
                $this->load->view('staff/index', $data);
            } else {
                $this->load->view('StaffPage', $data);
            }
        }
    }

//    public function number_validation($str) {
//        return preg_match("(\+63)|0)\d{10}", $str) ? true : false;
//    }

    public function login($str = "") {
        //$this->load->helper('cookie');
        $pass = $this->input->post('password');
        $this->load->model('student_model');
        $r = $this->student_model->login($str, $pass);
        $id = $this->student_model->get_id($str, $pass);
        if ($r != FALSE && $str != "") {
            $newdata = array(
                'username' => $str,
                'logged_in' => TRUE,
                'user_id' => $id
            );
            $this->session->set_userdata($newdata);


            return TRUE;
        } else if ($r == FALSE) {
            $this->form_validation->set_message('login', 'Username/Password is incorrect!');
            return FALSE;
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(' ', 'refresh');
    }

    public function cart() {

        //$this->session->sess_destroy();
        $this->load->model('item_model');
        $data['easy'] = $this->item_model->get_items_beginner();
        $data['hard'] = $this->item_model->get_items_hard();
        $data['notifs'] = $this->item_model->get_notifs($this->session->userdata('username'));
        $data['error'] = " ";
        $this->load->view('cart/index', $data);
    }

    public function update_cart() {
        /* $qty1 = $this->input->post('1qty');
          $rowid1 = $this->input->post('1rowid');
          $qty2 = $this->input->post('2qty');
          $rowid2 = $this->input->post('2rowid');
          $qty3 = $this->input->post('3qty');
          $rowid3 = $this->input->post('3rowid');
          $data1 = array(
          'rowid' => $rowid1,
          'qty' => $qty1
          );
          $data2 = array(
          'rowid' => $rowid2,
          'qty' => $qty2
          );
          $data3 = array(
          'rowid' => $rowid3,
          'qty' => $qty3
          );

          //print_r($this->session->all_userdata()  );
          $this->cart->update($data1);
          $this->cart->update($data2);
          $this->cart->update($data3);
          //$ses = $this->session->all_userdata(); */

        $this->load->model('item_model');
        $items = count($this->input->post('c'));
        $id = $this->input->post('id');

        for ($x = 0; $x < $items; $x++) {
            if ($items[$x]) {
                $result = $this->item_model->get_items2($id[$x]);
                $item = array(
                    'qty' => 1
                );
                $this->cart->update($item);
            }
        }

        $this->load->view('cart/index');
    }

    public function new_item() {
        $this->load->model('item_model');
        $data['items'] = $this->item_model->get_items();
        $this->load->view('cart/add', $data);
    }

//==========================================================================================================sample
    public function cartView() {
        $this->load->model('student_model');

        $data['details'] = $this->student_model->get_user_details();
        foreach ($data['details'] as $id):
            $userId = $id->id;

            $this->load->model('item_model');
            $data['totals'] = $this->item_model->total($userId);

            $this->load->model('item_model');
            $data['orders'] = $this->item_model->geching($userId);
            $data['orderss'] = $this->item_model->gechingMobile($userId);
        endforeach;

        $this->load->view('customer/cartList', $data);
    }

    public function guestCart() {
        $this->load->view('guest/cart');
    }

    public function chooseMenu() {
        $menu = $this->input->post('choices');
        $this->load->model('item_model');

        $data['menus'] = $this->item_model->getMenu($menu);
        redirect(base_url() . 'shop/menuCust', $data);
    }

    public function cartCust() {
        $prodID = $this->uri->segment(3);

        $this->load->model('student_model');

        $data['items'] = $this->student_model->get_item_details($prodID);
        $data['details'] = $this->student_model->get_user_details();

        $this->load->view('customer/cart', $data);
        //redirect(base_url() . 'shop/guestCart', $data);
    }

    public function cartGuest() {
        $prodID = $this->uri->segment(3);

        $this->load->model('student_model');

        $data['details'] = $this->student_model->get_item_details($prodID);


        $this->load->view('guest/cart', $data);
        //redirect(base_url() . 'shop/guestCart', $data);
    }

    public function cartView2() {
        $this->load->model('student_model');

        $data['details'] = $this->student_model->get_user_details();
        foreach ($data['details'] as $id):
            $userId = $id->id;

            $this->load->model('item_model');
            $data['orders'] = $this->item_model->geching($userId);
        endforeach;

        $this->load->view('customer/cart2', $data);
    }

    public function cartsz() {
        $this->load->model('student_model');

        $data['details'] = $this->student_model->get_user_details();


        $this->load->view('customer/cart2', $data);
    }

    public function add_cart() {
        $id = $this->input->post('user_id');
        $prod_id = $this->input->post('prod_id');

        $this->load->model('student_model');
        $data['details'] = $this->student_model->get_user_details();
        $this->load->model('item_model');
        $this->item_model->order();
        $data['orders'] = $this->item_model->geching($id);
        redirect(base_url() . 'Cart', 'refresh');
        //redirect(base_url() . 'shop/cartView');
    }

    public function add_cart2() {

//        $config['upload_path'] = './images/transaction/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size'] = '5000';
//        $config['max_width'] = '5000';
//        $config['max_height'] = '5000';
//
//        $this->load->library('upload', $config);
//
//        if (!$this->upload->do_upload()) {
//            $data['error'] = $this->upload->display_errors();
//            $this->load->model('item_model');
//            $this->load->model('student_model');
//            $data['details'] = $this->student_model->get_user_details();
//            $data['items'] = $this->item_model->get_items();
//            redirect(base_url() . 'Home', 'refresh');
//        } else {
//            $data = array('upload_data' => $this->upload->data());
//            $file = $data['upload_data'];
//            $itemname = "Order_No_" + $this->input->post('ordr_id');
//            $config['image_library'] = 'gd2';
//            $config['source_image'] = 'images/transaction/' . $itemname . $file['file_ext'];
//            rename($file['file_path'] . $file['file_name'], 'images/transaction/' . $itemname . $file['file_ext']);

        $userId = $this->input->post('user_id');


        $orderids = array();

        if ($this->input->post("shipping") == "ship") {
            if ($this->input->post("method") == "bank") {

                $query = $this->db->query("SELECT * FROM `cart` WHERE `user_id2` = $userId AND `status2` = 'cart'");



                foreach ($query->result_array() as $row) {

                    $cart = array(
                        'order2_id' => $row['order_id2'],
                        'mode' => "ship",
                        'address' => $this->input->post('shipadd'),
                        'mobile' => $this->input->post('mobnum'),
                        'ship_datetime' => date("y-m-d H:i:s"),
                        'method' => "bank",
                        'bank_type' => $this->input->post('selectt'),
                        'trans_no' => $this->input->post('transno'),
                    );
                    $this->load->model('item_model');
                    $insert = $this->db->insert('order2', $cart);

                    $orderids[] = $row['order_id2'];
                }

                $this->load->model('item_model');

                $this->item_model->substractStocks($userId);
                $this->db->query("UPDATE `cart` SET `status2` = 'pending' WHERE `user_id2` = $userId AND `status2` = 'cart'");

                //return $insert;
            } else if ($this->input->post("method") == "paypal") {  
                $query = $this->db->query("SELECT * FROM `cart` WHERE `user_id2` = $userId AND `status2` = 'cart'");

                foreach ($query->result_array() as $row) {

                    $cart = array(
                        'order2_id' => $row['order_id2'],
                        'mode' => "ship",
                        'address' => $this->input->post('shipadd'),
                        'mobile' => $this->input->post('mobnum'),
                        'ship_datetime' => date("y-m-d H:i:s"),
                        'method' => "paypal",
                        'bank_type' => 'paypal'
                    );
                    $this->load->model('item_model');
                    $insert = $this->db->insert('order2', $cart);

                    $orderids[] = $row['order_id2'];
                }
                $this->load->model('item_model');

                $this->item_model->substractStocks($userId);

                $this->db->query("UPDATE `cart` SET `status2` = 'pending' WHERE `user_id2` = $userId AND `status2` = 'cart'");
            }
        } elseif ($this->input->post("shipping") == "pickup") {
            if ($this->input->post("method") == "bank") {


                $query = $this->db->query("SELECT * FROM `cart` WHERE `user_id2` = $userId AND `status2` = 'cart'");

                foreach ($query->result_array() as $row) {
                    $addship = "122 MAGINHAWA ST. TEACHERS VILLAGEEAST,1101 QUEZON CITY, PHILIPPINES";
                    $cart = array(
                        'order2_id' => $row['order_id2'],
                        'mode' => "pickup",
                        'address' => $addship,
                        'ship_datetime' => date("y-m-d H:i:s"),
                        'method' => "bank",
                        'bank_type' => $this->input->post('selectt'),
                        'trans_no' => $this->input->post('transno'),
                    );
                    $insert = $this->db->insert('order2', $cart);

                    $orderids[] = $row['order_id2'];
                }

                $this->load->model('item_model');

                $this->item_model->substractStocks($userId);

                $this->db->query("UPDATE `cart` SET `status2` = 'pending' WHERE `user_id2` = $userId AND `status2` = 'cart'");
            } else if ($this->input->post("method") == "paypal") {
                $query = $this->db->query("SELECT * FROM `cart` WHERE `user_id2` = $userId AND `status2` = 'cart'");
                $addship = "122 MAGINHAWA ST. TEACHERS VILLAGEEAST,1101 QUEZON CITY, PHILIPPINES";
                foreach ($query->result_array() as $row) {

                    $cart = array(
                        'order2_id' => $row['order_id2'],
                        'mode' => "pickup",
                        'address' => $addship,
                        'mobile' => $this->input->post('mobnum'),
                        'ship_datetime' => date("y-m-d H:i:s"),
                        'method' => "paypal",
                        'bank_type' => 'paypal'
                    );
                    $this->load->model('item_model');
                    $insert = $this->db->insert('order2', $cart);
                    $orderids[] = $row['order_id2'];
                }

                $this->load->model('item_model');

                $this->item_model->substractStocks($userId);

                $this->db->query("UPDATE `cart` SET `status2` = 'pending' WHERE `user_id2` = $userId AND `status2` = 'cart'");
            }
        }


        if (!empty($orderids)) {
            $this->db->query("INSERT INTO `notifications` (`field`, `notification`, `read`, `date`, `notif_id`, `user_id`) VALUES ('order', 'New Order has been purchased', 'no', " . time() . ", '" . implode("-", $orderids) . "', $userId)");
        }

        $this->profilecust();
    }

    public function totals() {
        echo $this->cart->total();
    }

    public function updateeeee() {
        $data = array(
            'rowid' => 'a1d0c6e83f027327d8461063f4ac58a6',
            'qty' => '3'
        );

        $this->cart->update($data);
    }

    public function deleteOrder() {
        $item_id = $this->uri->segment(3);
        $this->db->where('order_id2', $item_id);
        $this->db->delete('cart');
        redirect(base_url() . 'Cart');
    }

    public function deleteOrder2() {
        $item_id = $this->uri->segment(3);
        $this->db->where('order_id', $item_id);
        $this->db->delete('order');
        redirect(base_url() . 'CartList');
    }

    public function deleteOrder3() {
        $item_id = $this->uri->segment(3);
        $this->db->where('order_id', $item_id);
        $this->db->delete('order');
        redirect(base_url() . 'Confirm_Order');
    }

//=================================================================================-==============================sample
    public function purchase() {
        $this->load->view('cart/pay', array('error' => ' '));
    }

    public function do_upload_cart() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $id = $this->input->post('id');
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $this->load->model('item_model');
            $data['easy'] = $this->item_model->get_items_beginner();
            $data['hard'] = $this->item_model->get_items_hard();
            $data['error'] = $this->upload->display_errors();
            $this->load->view("cart/index", $data);
        } else {
            $id = $this->input->post('itemid');
            $this->load->model('item_model');
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data'];
            $buyer = $this->session->userdata('username');
            rename($file['file_path'] . $file['file_name'], 'uploads/mountain_images/item_no_' . $id . '_by_' . $this->input->post('item_name') . $file['file_ext']);
            $q = $this->item_model->get_price($id);
            $price = $q->row()->price;
            $qty = $this->input->post('travelers');
            $totalp = $price * $qty;
            $array = array(
                'date' => date('Y-m-d H:i:s'),
                'buyer' => $this->session->userdata('username'),
                'product' => $this->input->post('name'),
                'quantity' => $this->input->post('travelers'),
                'totalprice' => $totalp,
                'image' => 'uploads/mountain_images/item_no_' . $id . '_by_' . $this->input->post('item_name') . $file['file_ext'],
                'status' => 'pending',
                'bank' => $this->input->post('bank')
            );


            $this->item_model->insert_orders($array);

            $this->cart->destroy();
            $data['easy'] = $this->item_model->get_items_beginner();
            $data['hard'] = $this->item_model->get_items_hard();
            $data['error'] = 'Payment sent. Please wait for the administrator to confirm your transaction. Thank you.';
            $this->load->view("cart/index", $data);
        }
    }

    public function profile() {
        $this->load->model('item_model');
        $data['profile'] = $this->item_model->profile($this->session->userdata('user_id'));
        $this->load->view('profile', $data);
    }

    public function update_profile() {
        $this->load->model('item_model');
        $id = $this->input->post('id');
        $info = array(
            'first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'mobile' => $this->input->post('mobile')
        );

        $this->item_model->update_profile($id, $info);
        $this->profile();
    }

    public function admin() {
        $this->load->model('item_model');
        $data['items'] = $this->item_model->get_items();
        $data['error'] = ' ';
        $this->load->view("home", $data);
    }

    public function add() { {
            $config['upload_path'] = './uploads/mountain_images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5000';
            $config['max_width'] = '4000';
            $config['max_height'] = '4000';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $data['error'] = $this->upload->display_errors();
                $this->load->model('item_model');
                $data['items'] = $this->item_model->get_items();
                $this->load->view('home', $data);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data'];
                rename($file['file_path'] . $file['file_name'], 'uploads/mountain_images/' . $this->input->post('item_name') . $file['file_ext']);
                $date = new DateTime($this->input->post('date'));
                $item_dat = array(
                    'item_name' => $this->input->post('item_name'),
                    'item_desc' => $this->input->post('item_desc'),
                    'item_date' => $date->format('Y-m-d H:i:s'),
                    'difficulty' => $this->input->post('difficulty'),
                    'image' => base_url() . 'uploads/mountain_images/' . $this->input->post('item_name') . $file['file_ext']
                );
                $this->load->model('item_model');
                $this->item_model->insert($item_dat);
                $this->admin();
            }
        }
    }

    public function delete() {
        $item_id = $this->uri->segment(3);
        $this->load->model('item_model');
        $this->item_model->delete($item_id);
        $this->index();
    }

    public function view() {
        $item_id = $this->uri->segment(3);
        $this->load->model('item_model');
        $data['items'] = $this->item_model->get_record($item_id);
        $this->load->view("view", $data);
    }

    public function edit() {
        $item_id = $this->uri->segment(4);
        $this->load->model('item_model');
        $data['items'] = $this->item_model->get_record($item_id);
        $this->load->view("edit", $data);
    }

    public function updatecust() {
        $this->load->model('item_model');
        $user = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'username' => $this->input->post('uname'),
            'password' => $this->input->post('pass'),
            'status' => $this->input->post('status'),
            'type' => $this->input->post('type')
        );
        $item_id = $this->uri->segment(3);
        $this->item_model->update($user, $item_id);
        redirect(base_url() . 'shop/indexAdmin', 'refresh');
    }

    public function updateItm() {
        $str = $this->input->post('prod_name');
        $itemname = str_replace(' ', '_', $str);
        $this->load->model('item_model');
        $user = array(
            'prod_name' => $this->input->post('prod_name'),
            'prod_desc' => $this->input->post('prod_desc'),
            'prod_price' => $this->input->post('prod_price'),
            'prod_price2' => $this->input->post('prod_price2'),
            'quantity' => $this->input->post('quantity'),
            'category' => $this->input->post('prod_cat'),
            'prod_pic' => 'images/menu/' . $itemname . '.jpg',
            'prod_date' => DateTime::COOKIE
        );
        $item_id = $this->uri->segment(3);
        $this->item_model->updateitm($user, $item_id);
        redirect(base_url() . 'shop/viewProd');
    }

    public function updateItmS() {
        $str = $this->input->post('prod_name');
        $itemname = str_replace(' ', '_', $str);
        $this->load->model('item_model');
        $user = array(
            'prod_name' => $this->input->post('prod_name'),
            'prod_desc' => $this->input->post('prod_desc'),
            'prod_price' => $this->input->post('prod_price'),
            'prod_price2' => $this->input->post('prod_price2'),
            'quantity' => $this->input->post('quantity'),
            'category' => $this->input->post('prod_cat'),
            'prod_pic' => 'images/menu/' . $itemname . '.jpg',
            'prod_date' => DateTime::COOKIE
        );
        $item_id = $this->uri->segment(3);
        $this->item_model->updateitm($user, $item_id);
        redirect(base_url() . 'shop/viewProdS');
    }

    public function updateProf() {
        $this->load->library('form_validation');
        $this->load->model('item_model');
        //oldpass = $this->input->post('password1');

        $this->form_validation->set_rules('currpass', 'Current Password', 'required|matches[password1]');
        $this->form_validation->set_rules('repass', 'Re-enter Password', 'required');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|min_length[8]|matches[repass]');
        if ($this->form_validation->run() == FALSE) {

            $this->editprof();
        } else {
            $user = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'password' => $this->input->post('newpass'),
            );
            $item_id = $this->uri->segment(3);
            $this->item_model->update($user, $item_id);
            redirect(base_url() . 'shop/profilecust', 'refresh');
        }
    }

    public function updatecustS() {
        $this->load->model('item_model');
        $user = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'username' => $this->input->post('uname'),
            'password' => $this->input->post('pass'),
            'status' => $this->input->post('status'),
            'type' => $this->input->post('type')
        );
        $item_id = $this->uri->segment(3);
        $this->item_model->update($user, $item_id);
        redirect(base_url() . 'shop/indexStaff', 'refresh');
    }

    public function update() {

        $this->load->model('item_model');
        $item_id = $this->uri->segment(3);
//        $config['upload_path'] = './uploads/mountain_images/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size'] = '5000';
//        $config['max_width'] = '4000';
//        $config['max_height'] = '4000';
        $this->load->library('upload' /* ,$config */);
        $date = new DateTime($this->input->post('date'));
        if (!$this->upload->do_upload()) {
            $item_dat = array(
                'item_name' => $this->input->post('item_name'),
                'item_desc' => $this->input->post('item_desc'),
                'item_date' => $date->format('Y-m-d H:i:s'),
                'difficulty' => $this->input->post('difficulty'),
                'price' => $this->input->post('price')
            );
            $this->item_model->update($item_dat, $item_id);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data'];
            rename($file['file_path'] . $file['file_name'], 'uploads/mountain_images/' . $this->input->post('item_name') . $file['file_ext']);
            $item_dat = array(
                'item_name' => $this->input->post('item_name'),
                'item_desc' => $this->input->post('item_desc'),
                'item_date' => $date->format('Y-m-d H:i:s'),
                'difficulty' => $this->input->post('difficulty'),
                'image' => 'uploads/mountain_images/' . $this->input->post('item_name') . $file['file_ext']
            );
            $this->item_model->update($item_dat, $item_id);
        }
        $this->admin();
    }

    public function orders() {

        $this->load->model('item_model');
        $data['recordss'] = $this->item_model->get_orders2();
        $this->load->view('transactions_history', $data);
    }

    public function update_status() {
        $id = $this->uri->segment(3);
        $status = array('status' => 'Paid');
        $this->load->model('item_model');
        $this->item_model->update_status($id, $status);
        $this->item_model->insert_to_payments($id);
        $q = $this->item_model->get_order3($id);

        $msg = array(
            'message' => 'Your payment for your hike to ' . $q->row()->product . ' for ' . $q->row()->quantity . ' people which costs ₱' . number_format($q->row()->totalprice, 2) . ' has been approved by the admin. Thank you.',
            'user' => $q->row()->buyer,
            'status' => 'Unread'
        );

        $this->item_model->notifs($msg);
        $this->orders();
    }

    public function book($id) {

        $id = $this->uri->segment(3);

        $this->load->model('item_model');
        $data['mountain'] = $this->item_model->booking($id);
        $this->load->view('book', $data);
    }

    public function delete_order() {
        $id = $this->uri->segment(3);

        $this->load->model('item_model');
        $q = $this->item_model->get_order3($id);

        $msg = array(
            'message' => 'Your payment for your hike to ' . $q->row()->product . ' for ' . $q->row()->quantity . ' people which costs ₱' . number_format($q->row()->totalprice, 2) . ' has been removed by the admin. Sorry.',
            'user' => $q->row()->buyer,
            'status' => 'Unread'
        );

        $this->item_model->notifs($msg);
        $this->item_model->delete_order($id);

        $this->orders();
    }

    public function setPaypal() {

        $this->load->library('session');

        $method = $_POST['method'];

        if ($method == "ship") {
            $newdata = array(
                'method' => 'ship',
                'number' => $_POST['number'],
                'shipaddress' => $_POST['shipaddress']
            );

            $this->session->set_userdata($newdata);
        } else if ($method == 'pickup') {
            $newdata = array(
                'method' => 'pickup',
                'address' => $_POST['address']
            );

            $this->session->set_userdata($newdata);
        }


        echo "OK";
    }

    public function updatepaypal() {
        // $this->session->unset_userdata('some_name');

        $userId = $this->input->post('user_id');

        if ($this->session->userdata('method') == "ship") {

            $query = $this->db->query("SELECT * FROM `cart` WHERE `user_id2` = 3 AND `status2` = 'cart'");

            foreach ($query->result_array() as $row) {

                $cart = array(
                    'order2_id' => $row['order_id2'],
                    'mode' => "ship",
                    'address' => $this->session->userdata('shipaddress'),
                    'mobile' => $this->session->userdata('number'),
                    'ship_datetime' => date("y-m-d H:i:s"),
                    'method' => "paypal",
                    'bank_type' => 'paypal'
                );
                $this->load->model('item_model');
                $insert = $this->db->insert('order2', $cart);
                $orderids[] = $row['order_id'];
            }

            $this->load->model('item_model');

            $this->item_model->substractStocks($userId);

            $this->db->query("UPDATE `cart` SET `status2` = 'pending' WHERE `user_id2` = 3 AND `status2` = 'cart'");
        } elseif ($this->session->userdata('method') == "pickup") {

            $query = $this->db->query("SELECT * FROM `cart` WHERE `user_id2` = 3 AND `status2` = 'cart'");

            foreach ($query->result_array() as $row) {

                $cart = array(
                    'order2_id' => $row['order_id2'],
                    'mode' => "pickup",
                    'address' => $this->session->userdata('address'),
                    'ship_datetime' => date("y-m-d H:i:s"),
                    'method' => "paypal",
                    'bank_type' => 'paypal'
                );
                $this->load->model('item_model');
                $insert = $this->db->insert('order2', $cart);
                $orderids[] = $row['order_id2'];
            }

            $this->load->model('item_model');

            $this->item_model->substractStocks($userId);

            $this->db->query("UPDATE `cart` SET `status2` = 'pending' WHERE `user_id2` = 3 AND `status2` = 'cart'");
        }

        $array_items = array(
            'method' => '',
            'number' => '',
            'shipaddress' => '',
            'method' => '',
            'address' => ''
        );

        if (!empty($orderids)) {
            $this->db->query("INSERT INTO `notifications` (`field`, `notification`, `read`, `date`, `notif_id`, `user_id`) VALUES ('order', 'New Order has been purchased', 'no', " . time() . ", '" . implode("-", $orderids) . "', 3)");
        }

        $this->session->unset_userdata($array_items);
        $this->profilecust();
    }

    public function acceptorder() {
        $orderid = $this->uri->segment(3);

        $this->load->model("item_model");

        $this->item_model->acceptorder($orderid);

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2("pending");
        $this->load->view('admin/orderView', $data);
    }

    public function acceptorderS() {
        $orderid = $this->uri->segment(3);

        $this->load->model("item_model");

        $this->item_model->acceptorder($orderid);

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2("pending");
        $this->load->view('staff/orderView_1', $data);
    }

    public function declineorder() {
        $orderid = $this->uri->segment(3);

        $this->load->model("item_model");
        $this->item_model->declineorder($orderid);

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2("pending");
        $this->load->view('admin/orderView', $data);
    }

    public function declineorderS() {
        $orderid = $this->uri->segment(3);

        $this->load->model("item_model");
        $this->item_model->declineorder($orderid);

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2("pending");
        $this->load->view('staff/orderView_1', $data);
    }

    public function pendingorder() {
        $orderid = $this->uri->segment(3);

        $this->load->model("item_model");
        $this->item_model->pendingorder($orderid);

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2("pending");
        $this->load->view('admin/orderView', $data);
    }

    public function pendingorderS() {
        $orderid = $this->uri->segment(3);

        $this->load->model("item_model");
        $this->item_model->pendingorder($orderid);

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2("pending");
        $this->load->view('staff/orderView_1', $data);
    }

    public function orderView() {
        $this->load->model('item_model');

        $status = "pending";
        if ($this->uri->segment(3)) {
            $status = $this->uri->segment(3);
        }

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2($status);
        $this->load->view('admin/orderView', $data);
    }

    public function orderViewS() {
        $this->load->model('item_model');

        $status = "pending";
        if ($this->uri->segment(3)) {
            $status = $this->uri->segment(3);
        }

        $data['details'] = $this->student_model->get_user_details();
        $data['orders'] = $this->item_model->get_orders2($status);
        $this->load->view('staff/orderView_1', $data);
    }

    public function inventory() {
        $status = "";
        $data['details'] = $this->student_model->get_user_details();
        $data['lostStocks'] = $this->item_model->get_orders3($status);
        $data['availableStocks'] = $this->item_model->getProducts();
        $this->load->view('admin/inventory', $data);
    }

    public function inventoryS() {
        $status = "";
        $data['details'] = $this->student_model->get_user_details();
        $data['lostStocks'] = $this->item_model->get_orders3($status);
        $data['availableStocks'] = $this->item_model->getProducts();
        $this->load->view('staff/inventory_1', $data);
    }

    public function salesReport() {
        $data['details'] = $this->student_model->get_user_details();
        $this->load->view('admin/salesreport', $data);
    }

    public function forgotpassword() {
        $email = rawurldecode($this->uri->segment(3));
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $code = rand();

        $this->db->query("UPDATE `users` SET `password` = '$code' WHERE `email` = '$email'");

        $config['protocol'] = "smtp"; //default
        $config['smtp_host'] = "ssl://rsb24.rhostbh.com"; //gamitin mo yung sa host niyo
        $config['smtp_port'] = "465"; //default na ata to
        $config['smtp_user'] = "administrator@dorissimopastries.com"; //email niyo
        $config['smtp_pass'] = "doris@123"; //password
        $config['charset'] = "utf-8";
        $config['mailtype'] = "text";
        $config['newline'] = "\n";
        $this->email->initialize($config);

        $this->email->from('administrator@dorissimopastries.com', 'Dorissimo Pastries Administrator');
        $this->email->to($email);
        $this->email->subject('Forgot Password');
        $this->email->message("Please login using this password: $code");
        //" . $id . "/" . $code."
        if ($this->email->send()) {

            $this->index();
        } else {
            $this->index();
        }
    }

    public function notificationFunc() {

        $field = $this->uri->segment(2);
        $id = $this->uri->segment(3);
        $data['details'] = $this->student_model->get_user_details();
        if ($field == 'user') {
            $this->db->where('id', $id);
            $data['notif'] = $this->db->get('users')->result();
            $this->db->query("UPDATE `notifications` SET `read` = 'yes' WHERE `field` = 'user' AND `notif_id` = $id");
        } else if ($field == "order") {
            $this->db->where('notif_id =', $id);
            $data['notif'] = $this->db->get('notifications')->result();
            $this->db->query("UPDATE `notifications` SET `read` = 'yes' WHERE `field` = 'order' AND `notif_id` = '$id'");
        }

        $this->load->view('admin/notifications', $data);
    }

    public function manageContent() {

        $content = $this->uri->segment(2);
        $data['details'] = $this->student_model->get_user_details();

        $data['content'] = $content == "AboutUs" ? "About Us" : $content;

        if ($content == "Home") {
            $this->load->view('admin/managecontent', $data);
        } else if ($content == "AboutUs") {
            $this->load->view('admin/managecontent', $data);
        }
    }

    public function manageContentS() {

        $content = $this->uri->segment(2);
        $data['details'] = $this->student_model->get_user_details();

        $data['content'] = $content == "AboutUs" ? "About Us" : $content;

        if ($content == "Home") {
            $this->load->view('staff/managecontent', $data);
        } else if ($content == "AboutUs") {
            $this->load->view('staff/managecontent', $data);
        }
    }

    public function articleShow() {

        $aid = $this->uri->segment(2);





        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('student_model');
            $data['products'] = $this->student_model->get_products();
            $data['details'] = $this->student_model->get_user_details();

            $query = $this->db->query("SELECT * FROM `content_management` WHERE `id` = $aid");
            $data['title'] = $query->row()->title;
            $data['content'] = $query->row()->content;

            $this->load->view('customer/article', $data);
        } else {
            $query = $this->db->query("SELECT * FROM `content_management` WHERE `id` = $aid");
            $data['title'] = $query->row()->title;
            $data['content'] = $query->row()->content;

            $this->load->view('guest/article', $data);
        }
    }

}