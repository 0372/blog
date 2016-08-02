<?php

class Contact_model extends CI_Model
{
    function insert($arr = ''){
        if(empty($arr)) return ;
        $sql = "insert into contact (name,email,message,ceatetime,ip) VALUES ('{$arr['name']}','{$arr['email']}','{$arr['message']}','".date('Y-m-d H:i:s')."','{$arr['ip']}')";
        $this->db->query($sql);
    }
}