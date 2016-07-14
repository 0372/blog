<?php

class LogInfo_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function insert_ip($ip){
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO ip (Ip,LastUpdateTime) VALUES('$ip','{$date}') ON DUPLICATE KEY UPDATE LastUpdateTime=VALUES(LastUpdateTime)";
        $this->db->query($sql);
    }

    function get_visitor_count(){
        $this->db->from('ip');
        return $this->db->count_all_results();
    }
}