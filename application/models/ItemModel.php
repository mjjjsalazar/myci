<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemModel extends CI_Model {
    public function getItems() {

      $query = $this->db->get('tblitem'); 
        return $query->result();
        //return ["one", "two", "three", "four"];
    }

    public function insert($data) {
        $this->db->insert('tblitem',$data);
    }

    public function delete($id) {
        $this->db->delete('tblitem',array('id=>$id'));
    }
    
	
}
