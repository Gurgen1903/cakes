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
        $sql = $this->db->where('id',$id['cake_id'])->get($id['table_name']);
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

//    BABY MODEL

    public function insert_baby_cakes($data){
        $this->db->insert('baby_cake',$data);
    }
    public function get_baby_cakes(){
        $sql = $this->db->get('baby_cake');
        return $sql->result_array();
    }
    public function delete_cake_babyes($id){
//        var_dump($id);die();
        $this->db->where('id',$id)->delete('baby_cake');
    }

//    WEDDING MODEL

    public function insert_wedding_cakes($data){
        $this->db->insert('wedding_cake',$data);
    }
    public function get_wedding_cakes(){
        $sql = $this->db->get('wedding_cake');
        return $sql->result_array();
    }
    public function delete_cake_weddings($id){
//        var_dump($id);die();
        $this->db->where('id',$id)->delete('wedding_cake');
    }

    //    every_day MODEL

    public function insert_every_day_cakes($data){
        $this->db->insert('every_day_cake',$data);
    }
    public function get_every_day_cakes(){
        $sql = $this->db->get('every_day_cake');
        return $sql->result_array();
    }
    public function delete_cake_every_day($id){
        $this->db->where('id',$id)->delete('every_day_cake');
    }

    //    GALA MODEL

    public function insert_gala_cakes($data){
        $this->db->insert('gala_cake',$data);
    }
    public function get_gala_cakes(){
        $sql = $this->db->get('gala_cake');
        return $sql->result_array();
    }
    public function delete_cake_gala($id){
        $this->db->where('id',$id)->delete('gala_cake');
    }


    //    MASTIK MODEL

    public function insert_mastik_cakes($data){
        $this->db->insert('mastik_cake',$data);
    }
    public function get_mastik_cakes(){
        $sql = $this->db->get('mastik_cake');
        return $sql->result_array();
    }
    public function delete_cake_mastik($id){
        $this->db->where('id',$id)->delete('mastik_cake');
    }

}