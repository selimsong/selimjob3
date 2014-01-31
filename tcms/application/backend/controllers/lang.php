<?php
class Lang extends CI_Controller {
	
	public function  Lang(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function change($lang){
		
		$this->session->set_userdata('default_lang', $lang);
		redirect('admin/home');
	}
	
	
}