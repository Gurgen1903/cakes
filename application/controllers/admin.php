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
            $data = $this->input->post('cake_id');
            $result = $this->admin_model->new_cakes($data);
            echo json_encode($result[0]);exit();
        }
    }
    public function delete_phone_number_by_id($id){
        $result = $this->admin_model->delete_phone_number($id);
        redirect('admin/call_back_numbers');
    }

}
