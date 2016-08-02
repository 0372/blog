<?php

class Article_model extends CI_Model
{
    function get_page_list($opts = array(), $page = 1,$pagesize=20){
        $where = '1=1';
        if($opts){
            if(is_array($opts)){
                foreach ($opts as $k => $v){
                    $where .= " AND a.$k = '".addslashes($v)."'";
                }
            }else{
//                $where = $opts;
                //egg pain
            }
        }

        $sql = "select a.*,b.name as mname from article a left join module b on a.moduleid=b.id where $where limit ".($page-1)*$pagesize.",$pagesize";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_distinct_date(){
        $sql = "select distinct createdate from article";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_last_article($size = 3){
        $sql = "select a.*,b.name as mname from article a left join module b on a.moduleid=b.id order by a.lastupdatetime limit $size";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}