<?php
class Visitor_helper{
    protected $CI;

    function __construct(){
        $this->CI = & get_instance();
    }


    function visitor(){
        $this->CI->load->library('RedisMy');
        $this->CI->load->model('loginfo_model');
        $log = new LogInfo_model();
        $ip = $_SERVER['REMOTE_ADDR'];
        $r = new RedisMy();
        if(!in_array($ip,array_values($r->getList('IP'))))
            $r->setList('IP',$ip);
        $times = $r->get('times');
        print_r($times);

        if(isset($times) && !empty($times)){
            $times++;
            echo $times;
            $r->set('times',$times);
        }else{
            $r->set('times',1);
        }
        print_r($r->get('times'));
        $log->insert_ip($ip);
//    echo "123";
    }
}


