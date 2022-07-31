<?php
class Berita_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function get_berita($id_berita){
        return $this->db->get_where('berita',array('id_berita'=>$id_berita))->row_array();
    }
        
    function get_all_berita(){
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get('berita')->result_array();
    }
        
    function add_berita($params){
        $this->db->insert('berita',$params);
        return $this->db->insert_id();
    }
    
    function update_berita($id_berita,$params){
        $this->db->where('id_berita',$id_berita);
        return $this->db->update('berita',$params);
    }
    
    function delete_berita($id_berita){
        return $this->db->delete('berita',array('id_berita'=>$id_berita));
    }
}