<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor
{
    function visitor(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $CI = & get_instance();
        $CI->load->library('RedisMy');
        $this->RedisMy->setList('IP',$ip);
        print_r($this->RedisMy->getList('IP'));
        echo "123";
    }

}