<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()

    {
        $data['cakes'] = $this->view_all_cakes();
        $this->load->view('layout/header');
        $this->load->view('home_view',$data);
        $this->load->view('layout/footer');
    }
    public function view_all_cakes(){
         return $this->home_model->get_all_cakes();
    }
    public function call_back_data(){
        if($this->input->is_ajax_request()){
            $data = array(
                'name' => $this->input->post('name'),
                'number' => $this->input->post('tel'),
            );
            $result_data_count = $this->home_model->get_call_back_number_for_result($data['number']);
            if($result_data_count <= 3){
                $this->home_model->insert_call_back_data($data);
            }
        };
    }
    public function one_product($id)
    {
        $data_by_id['your_cake'] = $this->home_model->get_cake_by_id($id);
        $this->load->view('layout/header');
        $this->load->view('one_product_view',$data_by_id);
        $this->load->view('layout/footer');
    }
    public function order_cake_one(){
        if($this->input->is_ajax_request()) {
            $data = $this->input->post();
            $this->home_model->add_new_order_by_id($data);
        }

    }
    public function all_baby_cakes(){
        $data['babies_cakes'] = $this->home_model->get_all_baby_cake();
        $this->load->view('layout/header');
        $this->load->view('baby_cake_view',$data);
        $this->load->view('layout/footer');
    }
    public function one_product_baby($id)
    {
        $data_by_id['your_cake'] = $this->home_model->get_cake_baby_by_id($id);
        $this->load->view('layout/header');
        $this->load->view('baby_one_product_view',$data_by_id);
        $this->load->view('layout/footer');
    }

}
