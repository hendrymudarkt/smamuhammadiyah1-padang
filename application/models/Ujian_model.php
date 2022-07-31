<?php
class Ujian_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
        
    function get_all_ujian(){
        $this->db->order_by('id_jawab', 'desc');
        return $this->db->get('jawab')->result_array();
    }
        
    function add_ujian($params){
        return $this->db->insert_batch('jawab',$params);
        //return $this->db->insert_id();
    }
}