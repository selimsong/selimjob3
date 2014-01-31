<?php
class Home extends MY_Controller {
	
	public function  Home(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}
	
	public function index()
	{    
		 $data['curNav'] = 'list_post';
		 $this->load->view('header');
		 $this->load->view('home', $data);
	}

	
	
}