<?php

class Pageone_database extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $this->db->select('*');
        $this->db->from('pageone');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data($id) {
        $this->db->select('*');
        $this->db->from('pageone');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function saveData($dataz) {

        $this->db->insert('pageone', $dataz);
    }
    
    public function update_data($dataz) {
        $this->db->where('id',$dataz['id']);
	$this->db->update('pageone',$dataz);
    }
}
