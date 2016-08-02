<?php

class Module_model extends CI_Model
{

    public function get_module_list(){
        $query = $this->db->query("select * from module");
        return $query->result_array();
    }

}