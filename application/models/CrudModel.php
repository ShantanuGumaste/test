<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model{

    public function insert_data($table_name, $array){
        
        if ($this->db->insert($table_name, $array)) {
            return true;
        } else {
            return false;
        }
        

    }

    public function get_data($table_name){
       return $result = $this->db->get($table_name)->result();
    }
}



?>