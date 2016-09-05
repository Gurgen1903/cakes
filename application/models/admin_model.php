<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function insert_new_cakes($data){
        $this->db->insert('all_product',$data);
    }
    public function new_cakes($id){
        $sql = $this->db->where('id',$id)->get('all_product');
        return $sql->result_array();
    }
    public function get_call_back_data(){
        $sql = $this->db->order_by('created_at','desc')->get('call_back_data');
        return $sql->result_array();
    }
    public function get_all_order_data(){
        $sql = $this->db->order_by('created_at','desc')->get('my_order');
        return $sql->result_array();
    }
    public function delete_phone_number($id){
        $this->db->where('id',$id)->delete('call_back_data');
    }
}