<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()

    {
//        var_dump($data_numbers);die;
        $this->load->view('admin/admin_view');
    }
    public function insert_new_cake(){
        if($this->input->post('insert_submit_btn')){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']	= '10000';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'kg' => $this->input->post('weight'),
                'img' => $this->upload->data('file_name'),
            );
            $aaa = $this->admin_model->insert_new_cakes($data);
        }
        $this->load->view('admin/insert_cake_view');

    }
    public function insert_new_cake_baby(){
        if($this->input->post('insert_submit_btn')){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']	= '10000';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'kg' => $this->input->post('weight'),
                'img' => $this->upload->data('file_name'),
            );
            $aaa = $this->admin_model->insert_new_cakes($data);
        }
        $this->load->view('admin/insert_cake_view');

    }

    public function call_back_numbers(){
        $data['numbers'] = $this->admin_model->get_call_back_data();
        $this->load->view('admin/number_view',$data);

    }
    public function order_price_list(){
        $data['orders'] = $this->admin_model->get_all_order_data();
        $this->load->view('admin/new_orders_view',$data);
    }
    public function order_cake_data_by_id(){
        if($this->input->is_ajax_request()){
            $data = $this->input->post();
            $result = $this->admin_model->new_cakes($data);
            echo json_encode($result[0]);exit();
        }
    }
    public function delete_phone_number_by_id($id){
        $result = $this->admin_model->delete_phone_number($id);
        redirect('admin/call_back_numbers');
    }

//    BABY INSERT DELETE SELECT

    public function add_baby_cake(){
        if($this->input->post('insert_baby_cakes_btn')){

            $config['upload_path'] = './uploads/baby/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']	= '10000';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'kg' => $this->input->post('weight'),
                'description' => $this->input->post('description'),
                'img' => $this->upload->data('file_name'),
            );
            $aaa = $this->admin_model->insert_baby_cakes($data);
            redirect('admin/all_babies_cakes');
        }
    }
    public function all_babies_cakes(){
        $data['baby_cake'] = $this->admin_model->get_baby_cakes();
//        echo "<pre>";var_dump($data);die;
        $this->load->view('admin/baby_cakes_admin',$data);
    }
    public function delete_baby_cake_by_id($id){
        $result = $this->admin_model->delete_cake_babyes($id);
        redirect('admin/all_babies_cakes');
    }


//    WEDDING INSERT DELETE SELECT

    public function add_wedding_cake(){
        if($this->input->post('insert_wedding_cakes_btn')){

            $config['upload_path'] = './uploads/wedding/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']	= '10000';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'kg' => $this->input->post('weight'),
                'description' => $this->input->post('description'),
                'img' => $this->upload->data('file_name'),
            );
            $aaa = $this->admin_model->insert_wedding_cakes($data);
            redirect('admin/all_wedding_cakes');
        }
    }
    public function all_wedding_cakes(){
        $data['wedding_cake'] = $this->admin_model->get_wedding_cakes();
//        echo "<pre>";var_dump($data);die;
        $this->load->view('admin/wedding_cakes_admin',$data);
    }
    public function delete_wedding_cake_by_id($id){
        $result = $this->admin_model->delete_cake_weddings($id);
        redirect('admin/all_wedding_cakes');
    }


//    For EVERY DAY INSERT DELETE SELECT

    public function add_every_day_cake(){
        if($this->input->post('insert_every_day_cakes_btn')){

            $config['upload_path'] = './uploads/every_day/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']	= '10000';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'kg' => $this->input->post('weight'),
                'description' => $this->input->post('description'),
                'img' => $this->upload->data('file_name'),
            );
            $aaa = $this->admin_model->insert_every_day_cakes($data);
            redirect('admin/all_every_day_cakes');
        }
    }
    public function all_every_day_cakes(){
        $data['every_day_cake'] = $this->admin_model->get_every_day_cakes();
//        echo "<pre>";var_dump($data);die;
        $this->load->view('admin/every_day_cakes_admin',$data);
    }
    public function delete_every_day_cake_by_id($id){
        $result = $this->admin_model->delete_cake_every_day($id);
        redirect('admin/all_every_day_cakes');
    }


    //    For GALA INSERT DELETE SELECT

    public function add_gala_cake(){
        if($this->input->post('insert_gala_cakes_btn')){

            $config['upload_path'] = './uploads/gala/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']	= '10000';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'kg' => $this->input->post('weight'),
                'description' => $this->input->post('description'),
                'img' => $this->upload->data('file_name'),
            );
            $aaa = $this->admin_model->insert_gala_cakes($data);
            redirect('admin/all_gala_cakes');
        }
    }
    public function all_gala_cakes(){
        $data['gala_cake'] = $this->admin_model->get_gala_cakes();
        $this->load->view('admin/gala_cakes_admin',$data);
    }
    public function delete_gala_cake_by_id($id){
        $result = $this->admin_model->delete_cake_gala($id);
        redirect('admin/all_gala_cakes');
    }


    //    For MASTIK INSERT DELETE SELECT

    public function add_mastik_cake(){
        if($this->input->post('insert_mastik_cakes_btn')){

            $config['upload_path'] = './uploads/mastik/';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']	= '10000';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = array(
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'kg' => $this->input->post('weight'),
                'description' => $this->input->post('description'),
                'img' => $this->upload->data('file_name'),
            );
            $aaa = $this->admin_model->insert_mastik_cakes($data);
            redirect('admin/all_mastik_cakes');
        }
    }
    public function all_mastik_cakes(){
        $data['mastik_cake'] = $this->admin_model->get_mastik_cakes();
        $this->load->view('admin/mastik_cakes_admin',$data);
    }
    public function delete_mastik_cake_by_id($id){
        $result = $this->admin_model->delete_cake_mastik($id);
        redirect('admin/all_mastik_cakes');
    }



}
