<?php
class Register_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
        
    function add_register($params){
        $this->db->insert('pendaftar',$params);
        return $this->db->insert_id();
    }
}