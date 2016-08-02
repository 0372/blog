<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontIndex extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helpers('visitor');
        $this->load->model('loginfo_model');
        $this->load->model('article_model');
        $this->load->model('module_model');
        $this->load->model('contact_model');
        $this->load->helpers('myurl_helper');
        $this->load->library('RedisMy');
	}

	public function index()
	{
        $visiter = new Visitor_helper();
        $module_list = $this->module_model->get_module_list();
        foreach ($module_list as $k => $v){
            $dta['module'][$k]['name'] = $v['name'];
            $dta['module'][$k]['url'] = echo_url(__CLASS__,"full_width",array('moduleid' => $v['id']));
        }

        $date_list = $this->article_model->get_distinct_date();
        foreach ($date_list as $k => $v){
            $dta['date'][$k]['name'] = date("M d,Y",strtotime($v['createdate']));
            $dta['date'][$k]['url'] = echo_url(__CLASS__,"single",array('date' => $v['createdate']));
        }

        $article_list = $this->article_model->get_page_list();
        foreach ($article_list as $k => $v){
            $dta['article'][$k] = $v;
            $dta['article'][$k]['url'] = echo_url(__CLASS__,"single",array('articleid' => $v['id']));
        }

        $lastarticle_list = $this->article_model->get_last_article();
        foreach ($lastarticle_list as $k => $v){
            $dta['lastupdate'][$k]['name'] = $v['title'];
            $dta['lastupdate'][$k]['url'] = echo_url(__CLASS__,"single",array('articleid' => $v['id']));
        }

        $dta['times'] = $visiter->visitor();
        $dta['ip'] = $visiter->get_number();
		$base_url = $this->config->item('static_url');
//        $this->output->cache('0');
//        $this->output->enable_profiler(false);
//        $dta['times'] = $this->visitor->visitor();
		$dta['static_url'] = $base_url;
		$this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('home',$dta);
        $this->load->view('foot',$dta);
	}

    public function full_width(){


        $base_url = $this->config->item('static_url');
        $visiter = new Visitor_helper();
        $dta['times'] = $visiter->visitor();
        $dta['ip'] = $visiter->get_number();

        $dta['static_url'] = $base_url;
        $this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('full-width',$dta);
        $this->load->view('foot',$dta);
    }

    public function about(){

        $base_url = $this->config->item('static_url');
        $visiter = new Visitor_helper();
        $dta['times'] = $visiter->visitor();
        $dta['ip'] = $visiter->get_number();
        $dta['static_url'] = $base_url;

        $this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('about',$dta);
        $this->load->view('foot',$dta);
    }

    public function contact(){
        if($_POST){
            $post = $_POST;
            $post['ip'] = $_SERVER['REMOTE_ADDR'];
            $this->contact_model->insert($post);
        }
        $visiter = new Visitor_helper();
        $dta['times'] = $visiter->visitor();
        $dta['ip'] = $visiter->get_number();
        $base_url = $this->config->item('static_url');
        $dta['static_url'] = $base_url;

        $this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('contact',$dta);
        $this->load->view('foot',$dta);
    }

    public function single(){
        $visiter = new Visitor_helper();
        $dta['times'] = $visiter->visitor();
        $dta['ip'] = $visiter->get_number();
        $base_url = $this->config->item('static_url');
        $dta['static_url'] = $base_url;

        $this->load->view('head',$dta);
        $this->load->view('banner',$dta);
        $this->load->view('single',$dta);
        $this->load->view('foot',$dta);
    }


}
