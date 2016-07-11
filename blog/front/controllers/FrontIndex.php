<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontIndex extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helpers('url_helper');
	}

	public function index()
	{
//		$this->load->model('user_model');
//		print_r($this->user_model->getList());
        $redis = new Redis();
//        $redis->set('a',1);
//        echo $redis->get('a');
		$base_url = $this->config->item('static_url');

		$dta['static_url'] = $base_url;
//		$this->load->view('css/bootstrap.min.css');
		$this->load->view('head',$dta);
        $this->load->view('index',$dta);
        $this->load->view('foot',$dta);

//		$this->load->view('index');
	}

    public function full_width(){

        $base_url = $this->config->item('static_url');
        $dta['static_url'] = $base_url;
        $this->load->view('head',$dta);
        $this->load->view('full_width',$dta);
        $this->load->view('foot',$dta);

    }
}
