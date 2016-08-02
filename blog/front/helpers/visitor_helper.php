<?php
class Visitor_helper{

    protected $CI;

    function __construct(){
        $this->CI = & get_instance();
        $this->CI->load->library('RedisMy');
        $this->CI->load->model('loginfo_model');
    }

    function visitor(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $r = new RedisMy();
        if(!in_array($ip,array_values($r->getList('IP'))))
            $r->setList('IP',$ip);
        return $r->incr('times');
    }

    function get_number(){
        $r = new RedisMy();
        $c = 0;
        do{
            $tmp = $r->getList('IP',$c,$c+1000);
            $c +=count($tmp);
        }while(count($tmp)==1000);
        return $c;
    }
}


