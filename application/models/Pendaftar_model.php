<?php
class Pendaftar_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_pendaftar($id)
    {
        return $this->db->get_where('pendaftar', array('id' => $id))->row_array();
    }
    
    function get_pendaftar_nis($nis)
    {
        return $this->db->get_where('pendaftar', array('nis' => $nis))->row_array();
    }

    function get_all_pendaftar()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('pendaftar')->result_array();
    }

    function add_pendaftar($params)
    {
        $this->db->insert('pendaftar', $params);
        return $this->db->insert_id();
    }

    function update_pendaftar($nis, $params)
    {
        $this->db->where('nis', $nis);
        return $this->db->update('pendaftar', $params);
    }

    function delete_pendaftar($id)
    {
        return $this->db->delete('pendaftar', array('id' => $id));
    }
}
