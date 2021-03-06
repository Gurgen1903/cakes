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
        $data_by_id['table_img'] = 'baby_cake';
        $this->load->view('layout/header');
        $this->load->view('baby_one_product_view',$data_by_id);
        $this->load->view('layout/footer');
    }

//    GET WEDDING

    public function all_wedding_cakes(){
        $data['wedding_cakes'] = $this->home_model->get_all_wedding_cake();
        $this->load->view('layout/header');
        $this->load->view('wedding_cake_view',$data);
        $this->load->view('layout/footer');
    }
    public function one_product_wedding($id)
    {
        $data_by_id['your_cake'] = $this->home_model->get_cake_wedding_by_id($id);
        $data_by_id['table_img'] = 'wedding_cake';
        $this->load->view('layout/header');
        $this->load->view('wedding_one_product_view',$data_by_id);
        $this->load->view('layout/footer');
    }

//    GET EVERY DAY

    public function all_every_day_cakes(){
        $data['every_day_cakes'] = $this->home_model->get_all_every_day_cake();
        $this->load->view('layout/header');
        $this->load->view('every_day_cake_view',$data);
        $this->load->view('layout/footer');
    }
    public function one_product_every_day($id)
    {
        $data_by_id['your_cake'] = $this->home_model->get_cake_every_day_by_id($id);
        $data_by_id['table_img'] = 'every_day_cake';
        $this->load->view('layout/header');
        $this->load->view('every_day_one_product_view',$data_by_id);
        $this->load->view('layout/footer');
    }

//    GALA DAY

    public function all_gala_cakes(){
        $data['gala_cakes'] = $this->home_model->get_all_gala_cake();
        $this->load->view('layout/header');
        $this->load->view('gala_cake_view',$data);
        $this->load->view('layout/footer');
    }
    public function one_product_gala($id)
    {
        $data_by_id['your_cake'] = $this->home_model->get_cake_gala_by_id($id);
        $data_by_id['table_img'] = 'gala_cake';
        $this->load->view('layout/header');
        $this->load->view('gala_one_product_view',$data_by_id);
        $this->load->view('layout/footer');
    }


    //    MASTIK DAY

    public function all_mastik_cakes(){
        $data['mastik_cakes'] = $this->home_model->get_all_mastik_cake();
        $this->load->view('layout/header');
        $this->load->view('mastik_cake_view',$data);
        $this->load->view('layout/footer');
    }
    public function one_product_mastik($id)
    {
        $data_by_id['your_cake'] = $this->home_model->get_cake_mastik_by_id($id);
        $data_by_id['table_img'] = 'mastik_cake';
        $this->load->view('layout/header');
        $this->load->view('mastik_one_product_view',$data_by_id);
        $this->load->view('layout/footer');
    }

    //KATALOG
    public function katalog_data(){
        $data['data_baby'] = $this->baby_catalog_img();
        $data['data_every_day'] = $this->every_day_catalog_img();
        $data['data_gala'] = $this->gala_catalog_img();
        $data['data_wedding'] = $this->wedding_catalog_img();
        $data['data_mastik'] = $this->mastik_catalog_img();
        $this->load->view('layout/header');
        $this->load->view('katalog_view',$data);
        $this->load->view('layout/footer');
    }

    // BABY KATALOG
    public function baby_catalog_img(){
        return  $this->home_model->get_img_baby_cake();
    }
    public function every_day_catalog_img(){
        return  $this->home_model->get_img_every_day_cake();
    }
    public function gala_catalog_img(){
        return $this->home_model->get_img_gala_cake();
    }
    public function wedding_catalog_img(){
        return $this->home_model->get_img_wedding_cake();
    }
    public function mastik_catalog_img(){
        return $this->home_model->get_img_mastik_cake();
    }


}
