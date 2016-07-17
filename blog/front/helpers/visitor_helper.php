<?php
$this->CI = & get_instance();
$this->CI->load->library('RedisMy');
$this->CI->load->model('loginfo_model');
function visitor(){
    $log = new LogInfo_model();
    $ip = $_SERVER['REMOTE_ADDR'];
    $r = new RedisMy();
    print_r($r->getList('IP'));
    if(!in_array($ip,$r->getList('IP')))
        $r->setList('IP',$ip);
    $log->insert_ip($ip);
//    echo "123";
}

