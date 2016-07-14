<?php
function visitor(){
    $CI = & get_instance();
    $CI->load->library('RedisMy');
    $CI->load->model('loginfo_model');
    $log = new LogInfo_model();
    $ip = $_SERVER['REMOTE_ADDR'];
    $r = new RedisMy();
    if(!in_array($ip,$r->getList('IP')))
        $r->setList('IP',$ip);
    $log->insert_ip($ip);
//    echo "123";
}