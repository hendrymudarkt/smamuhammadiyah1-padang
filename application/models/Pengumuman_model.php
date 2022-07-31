<?php
class Pengumuman_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_all_pengumuman()
    {
        $this->db->order_by('nis', 'asc');
        return $this->db->get('terima')->result_array();
    }

    function notif($params)
    {
        $this->db->insert('notif', $params);
        return $this->db->insert_id();
    }
}
