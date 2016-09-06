<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_cakes()
    {

        $sql = $this->db->get('all_product');
        return $sql->result_array();
    }
    public function insert_call_back_data($data){
        $sql = $this->db->insert('call_back_data',$data);
    }
    public function get_call_back_number_for_result($number){
        $sql = $this->db->where('number',$number)->get('call_back_data');
        return count($sql->result_array());
    }
    public function get_cake_by_id($id){
        $sql = $this->db->where('id',$id)->get('all_product');
        return $sql->result_array();
    }
    public function add_new_order_by_id($data){
        $this->db->insert('my_order',$data);
    }

//  BABY GET CAKE

    public function get_all_baby_cake(){
        $sql = $this->db->get('baby_cake');
        return $sql->result_array();
    }
    public function get_cake_baby_by_id($id){
        $sql = $this->db->where('id',$id)->get('baby_cake');
        return $sql->result_array();
    }

//  WEDDING GET CAKE

    public function get_all_wedding_cake(){
        $sql = $this->db->get('wedding_cake');
        return $sql->result_array();
    }
    public function get_cake_wedding_by_id($id){
        $sql = $this->db->where('id',$id)->get('wedding_cake');
        return $sql->result_array();
    }

}