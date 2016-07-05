<?php
class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function getList($opt = array(),$limit = '',$orderby='',$order=''){
        $all = $this->db->get('user');
        $all = $this->db->get('user',1);
        $sql = $this->db->get_compiled_select('user',1);
        echo $sql;
        return $all->result_array();
    }
}