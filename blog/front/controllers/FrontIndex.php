<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontIndex extends CI_Controller {

	public function index()
	{
//		$this->load->model('user_model');
//		print_r($this->user_model->getList());
        $redis = new Redis();
//        $redis->set('a',1);
//        echo $redis->get('a');
		$dta['head'] = 'const head';
		$this->load->view('head',$dta);
		$this->load->view('index');
	}
}
