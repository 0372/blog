<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontIndex extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helpers('visitor');
        $this->load->model('loginfo_model');
        $this->load->helpers('myurl_helper');
	}

	public function index()
	{
        visitor();
        $dta['ip'] = $this->loginfo_model->get_visitor_count();

		$base_url = $this->config->item('static_url');
//        $this->output->cache('0');
//        $this->output->enable_profiler(false);
		$dta['static_url'] = $base_url;
		$this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('home',$dta);
        $this->load->view('foot',$dta);
	}

    public function full_width(){

        $base_url = $this->config->item('static_url');
        $dta['ip'] = $this->loginfo_model->get_visitor_count();
        $dta['static_url'] = $base_url;
        $this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('full-width',$dta);
        $this->load->view('foot',$dta);
    }

    public function about(){

        $base_url = $this->config->item('static_url');
        $dta['ip'] = $this->loginfo_model->get_visitor_count();
        $dta['static_url'] = $base_url;
        $this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('about',$dta);
        $this->load->view('foot',$dta);
    }

    public function contact(){
        $base_url = $this->config->item('static_url');
        $dta['ip'] = $this->loginfo_model->get_visitor_count();
        $dta['static_url'] = $base_url;
        $this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('contact',$dta);
        $this->load->view('foot',$dta);
    }


}
