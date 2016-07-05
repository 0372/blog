<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('RedisMy');
        $this->config->load('css_js');
    }

    function index(){
//        $data['css'] = base_url("application/views/backend/css/common.css");
        $redis = new RedisMy();
//        echo phpinfo();
//        $redis->ping();
//        $a= $redis->get('times');
//        $a++;
        $redis->set('times',$redis->get('times')+1);

        $data['times'] = $redis->get('times');
        $data['css'] = $this->config->item('backend_css');
        $data['js'] = $this->config->item('backend_js');
        $data['base_url'] = $this->config->item('base_url');
        $this->load->view('/backend/index',$data);
//        $this->load->view('/backend/index');
    }
}