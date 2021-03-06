<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller{
    public function __construct() {
        parent::__construct();        
        $this->load->model('products_model');
    }
    
    public function show_add_category_form(){        
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_category_form.php','', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    
    public function save_category(){
        $this->products_model->save_category();
        $this->show_all_category();
    }
    
    public function show_all_category(){
        $category_data['all_category'] = $this->products_model->get_all_category();        
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/all_category', $category_data, TRUE);        
        $this->load->view('admin/admin_master', $data);
    }
}